<?php


namespace App\Core;


abstract class Model
{
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIl = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';

    public array $errors = [];

    abstract public function rules(): array;

    public function loadData(array $data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function validate(): bool
    {
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if ( ! is_string($ruleName)) {
                    $ruleName = $rule[0];
                }

                if ($ruleName === self::RULE_REQUIRED && ! $value) {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }

                if ($ruleName === self::RULE_EMAIl && ! filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($attribute, self::RULE_EMAIl);
                }

                if ($ruleName === self::RULE_MIN && isset($rule['min']) && strlen($value) < $rule['min']) {
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }

                if ($ruleName === self::RULE_MIN && isset($rule['max']) && strlen($value) > $rule['max']) {
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }

                if ($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
                    $this->addError($attribute, self::RULE_MATCH, $rule);
                }
            }
        }

        return empty($this->errors);
    }

    public function addError(string $attribute, string $rule, $params = [])
    {
        $message = $this->errorMessage()[$rule] ?? '';
        foreach ($params as $key => $value) {
            $message = str_replace("{{$key}}", $value, $message);
        }
        $this->errors[$attribute][] = $message;
    }

    public function errorMessage(): array
    {
        return [
            self::RULE_REQUIRED => 'This is field is required',
            self::RULE_EMAIl    => 'This is field is an email',
            self::RULE_MIN      => 'Min length of field mus be {min}',
            self::RULE_MAX      => 'Min length of field mus be {max}',
            self::RULE_MATCH    => 'This is field must be same as {match}',
        ];
    }

    public function hasError($attribute): bool
    {
        return ! empty($this->errors[$attribute]);
    }

    public function getError($attribute): string
    {
        return $this->errors[$attribute][0] ?? '';
    }
}
