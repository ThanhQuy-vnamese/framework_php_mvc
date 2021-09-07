<?php

namespace App\Model;

use App\Core\Database\DBModel;
use JetBrains\PhpStorm\ArrayShape;

class User extends DBModel
{
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 1;
    public const STATUS_DELETED = 2;

    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public int $status = self::STATUS_ACTIVE;
    public string $password = '';
    public string $passwordRepeat = '';

    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIl, [self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 16]],
            'passwordRepeat' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    public function register(): bool
    {
        $this->status = self::STATUS_ACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return $this->save();
    }

    function tableName(): string
    {
        return 'users';
    }

    function attributes(): array
    {
        return ['firstname', 'lastname', 'email', 'password', 'status'];
    }

    public function getPrimaryKey(): string
    {
        return 'id';
    }

    public function labels(): array
    {
        return [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'passwordRepeat' => 'Password Repeat',
        ];
    }
}
