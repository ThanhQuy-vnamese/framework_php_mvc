<?php

namespace App\Core\Database;

use App\Core\Application;
use App\Core\Model;

abstract class DBModel extends Model
{
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

    public function findOne($where)
    {
        $index = array_keys($where);
        $lastIndex = end($index);
        $tableName = static::tableName();
        $condition = '';
        foreach ($where as $key => $value) {
            if (is_int($value)) {
                $condition .= "$key = $value";
            } else {
                $condition .= "$key = '$value'";
            }
            if ($key !== $lastIndex) {
                $condition .= ' AND ';
            }
        }
        $query = "SELECT * FROM $tableName WHERE $condition";
        $result = Application::$APPLICATION->database->mysql->query($query);
        return $result->fetch_object();
    }


    public function limitSelect(): string {
        if (empty($this->attributes())) {
            return '*';
        }
        return implode(',', $this->attributes());
    }
}
