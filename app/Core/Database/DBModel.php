<?php

namespace App\Core\Database;

use App\Adapter\ModelAdapter;
use App\Core\Application;
use App\Core\Model;
use stdClass;

abstract class DBModel extends Model
{
    protected string $limitField = '';

    protected string $condition = '';

    protected string $operation = '=';

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
        $this->condition($where);
        $condition = $this->condition;
        $tableName = static::tableName();

        $query = "SELECT * FROM $tableName WHERE $condition";
        $result = Application::$APPLICATION->database->mysql->query($query);
        return $result->fetch_object();
    }

    public function select(array $fields): DBModel
    {
        $this->limitField = implode(',', $fields);
        return $this;
    }

    public function table(string $table): DBModel
    {
        $this->table = $table;
        return $this;
    }

    public function condition(array $conditions, string $operation = ''): DBModel
    {
        $condition = '';
        $lastIndex = end($conditions);
        $operation = $this->getOperation($operation);
        foreach ($conditions as $key => $value) {
            if (is_int($value)) {
                $condition .= "$key $operation $value";
            } else {
                $condition .= "$key $operation '$value'";
            }
            if ($value !== $lastIndex) {
                $condition .= ' AND ';
            }
        }

        $this->condition = $condition;

        return $this;
    }

    public function get(): stdClass
    {
        $limitSelect = $this->limitSelectNew();
        $condition = $this->condition;
        if (!empty($condition)) {
            $condition = "WHERE $condition";
        }
        $tableName = static::tableName();
        $query = "SELECT $limitSelect FROM $tableName $condition";

        $result = Application::$APPLICATION->database->mysql->query($query);
        if (!$result) {
            return new stdClass();
        }
        if ($result->num_rows === 0) {
            return new stdClass();
        }
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $modelAdapter = new ModelAdapter($data);
        return $modelAdapter->setDataToAttributes();
    }

    public function insert(array $values)
    {
        $strField = $this->generateFieldToString($values);
        $strValue = $this->generateValuesToString($values);
        $db = $this->getDatabase();
        $query = "INSERT INTO $this->table ($strField) VALUES $strValue;";
        $result = $db->mysql->query($query);
        if (!$result) {
            return false;
        }
        return $db->mysql->insert_id;
    }

    public function update(array $values, array $conditions): bool
    {
        $lastValue = end($values);
        $strUpdateQuery = '';
        foreach ($values as $key => $value) {
            $strUpdateQuery .= $key . ' = ' . (is_int($value) ? $value : "'$value'");
            if ($value != $lastValue) {
                $strUpdateQuery .= ', ';
            }
        }

        $this->condition($conditions);
        $query = "UPDATE $this->table SET $strUpdateQuery WHERE $this->condition";
        $db = $this->getDatabase();
        $result = $db->mysql->query($query);
        if (!$result) {
            return false;
        }

        return true;
    }

    public function delete(): bool {
        $db = $this->getDatabase();
        $query = "DELETE FROM $this->table WHERE $this->condition";
        $result = $db->mysql->query($query);
        if (!$result) {
            return false;
        }

        return true;
    }


    public function limitSelect(): string
    {
        if (empty($this->attributes())) {
            return '*';
        }
        return implode(',', $this->attributes());
    }

    public function limitSelectNew(): string
    {
        if (empty($this->attributes()) && empty($this->limitField)) {
            return '*';
        }

        if (!empty($this->limitField)) {
            return $this->limitField;
        }

        return implode(',', $this->attributes());
    }

    /**
     * @param array $values
     * @return string
     */
    protected function generateValuesToString(array $values): string
    {
        $strValue = '';
        $isMultiValue = false;
        $lastValue = end($values);
        foreach ($values as $value) {
            if (is_array($value)) {
                $isMultiValue = true;
                $str = '';
                $lastValueChild = end($value);
                foreach ($value as $childValue) {
                    $str .= $this->generateValues($childValue, $lastValueChild);
                }
                $strValue .= '(' . $str . ')';
                if ($lastValue != $value) {
                    $strValue .= ', ';
                }
            } else {
                $strValue .= $this->generateValues($value, $lastValue);
            }
        }

        return $isMultiValue ? $strValue : '(' . $strValue . ')';
    }

    /**
     * @param $value
     * @param $lastValue
     * @return string
     */
    protected function generateValues($value, $lastValue): string
    {
        $strValue = '';
        if (is_int($value)) {
            $strValue .= $value;
        } else {
            $strValue .= "'$value'";
        }
        if ($value !== $lastValue) {
            $strValue .= ', ';
        }
        return $strValue;
    }

    /**
     * @param array $values
     * @return string
     */
    protected function generateFieldToString(array $values): string
    {
        $value = array_values($values);
        if (is_array($value[0])) {
            return implode(', ', array_keys($value[0]));
        }
        return implode(', ', array_keys($values));
    }

    /**
     * @param string $operation
     * @return string
     */
    protected function getOperation(string $operation): string
    {
        return empty($operation) ? $this->operation : $operation;
    }
}
