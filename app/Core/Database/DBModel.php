<?php

namespace App\Core\Database;

use App\Adapter\ModelAdapter;
use App\Core\Application;
use App\Core\Model;

abstract class DBModel extends Model
{
    protected string $limitField = '';

    protected string $condition = '';

    protected string $table = '';

    abstract function tableName(): string;

    abstract function attributes(): array;

    public function getDatabase(): Database
    {
        return Application::$APPLICATION->database;
    }

    public function save(): bool
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $value = $this->getValuesAttributes($attributes);
        $query = "INSERT INTO $tableName (" . implode(',', $attributes) . ")
                    VALUES ($value)";
        if (self::runQuery($query)) {
            return true;
        }
        return false;
    }

    public static function runQuery(string $query)
    {
        return Application::$APPLICATION->database->mysql->query($query);
    }

    public function getValuesAttributes(array $attributes): string
    {
        $values = [];
        foreach ($attributes as $attribute) {
            $values[] = "'" . $this->{$attribute} . "'";
        }

        return implode(',', $values);
    }

    public function getOne($where)
    {
        $selectField = $this->limitSelect();
        $this->condition($where);
        $condition = $this->condition;
        $tableName = static::tableName();

        $query = "SELECT $selectField FROM $tableName WHERE $condition";
        $result = Application::$APPLICATION->database->mysql->query($query);
        return $result->fetch_object();
    }

    public function select(array $fields): DBModel
    {
        $this->limitField = implode(',', $fields);
        return $this;
    }

    public function table(string $table)
    {
        $this->table = $table;
        return $this;
    }

    public function condition(array $conditions): DBModel
    {
        $condition = '';
        $lastIndex = end($conditions);
        foreach ($conditions as $key => $value) {
            if (is_int($value)) {
                $condition .= "$key = $value";
            } else {
                $condition .= "$key = '$value'";
            }
            if ($value !== $lastIndex) {
                $condition .= ' AND ';
            }
        }

        $this->condition = $condition;

        return $this;
    }

    public function get()
    {
        $limitSelect = $this->limitField;
        if ($limitSelect) {
            $limitSelect = $this->limitSelect();
        }
        $condition = $this->condition;
        if (!empty($condition)) {
            $condition = "WHERE $condition";
        }
        $tableName = static::tableName();
        $query = "SELECT $limitSelect FROM $tableName $condition";

        $result = Application::$APPLICATION->database->mysql->query($query);
        if (!$result) {
            return new \stdClass();
        }
        if ($result->num_rows === 0) {
            return new \stdClass();
        }
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $modelAdapter = new ModelAdapter($data);
        return $modelAdapter->setDataToAttributes();
    }


    public function limitSelect(): string
    {
        if (empty($this->attributes())) {
            return '*';
        }
        return implode(',', $this->attributes());
    }
}
