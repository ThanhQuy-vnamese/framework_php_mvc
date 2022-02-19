<?php

namespace App\Model;

use App\Core\Database\DBModel;
use App\Core\Database\Query;

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
        return ['firstname', 'lastname', 'email', 'status'];
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

    public function getUsers(): array {
        $row = $this->limitSelect();
        $query = "SELECT $row FROM users";
        $result = $this->getDatabase()->mysql->query($query);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }

    /**
     * @param array $information
     * @return false|int|string
     */
    public function addUser(array $information) {
        $query = new Query();
        return $query->table('medican_users')->insert($information);
    }

    /**
     * @param array $information
     * @return false|int|string
     */
    public function addUserProfile(array $information) {
        $query = new Query();
        return $query->table('medican_user_profiles')->insert($information);
    }

    /**
     * @param string $email
     * @return \stdClass
     */
    public function getInfoFromEmail(string $email) {
        $query = new Query();
        return $query->table('medican_users')->condition(['email' => $email])->get();
    }

    public function getAllUsers(): array {
        $query = new Query();
        $sql = "SELECT U.id, U.email, U.status, U.qr_image, U.role, UP.first_name, UP.last_name, UP.birthday, UP.gender, UP.avatar, UP.address, UP.phone
                FROM medican_users AS U INNER JOIN medican_user_profiles AS UP ON U.id=UP.user_id";
        $result = $query->getDatabase()->mysql->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getUser(string $id): array {
        $query = new Query();
        $sql = "SELECT U.id, U.email, U.status, U.qr_image, U.role, UP.first_name, UP.last_name, UP.birthday, UP.gender, UP.avatar, UP.address, UP.phone
                FROM medican_users AS U INNER JOIN medican_user_profiles AS UP ON U.id=UP.user_id WHERE U.id=$id";
        $result = $query->getDatabase()->mysql->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
