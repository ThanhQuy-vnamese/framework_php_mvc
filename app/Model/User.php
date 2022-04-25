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
        return 'medical_users';
    }

    function attributes(): array
    {
        return ['firstname', 'lastname', 'email', 'status'];
    }

    public function getPrimaryKey(): string
    {
        return 'id';
    }

    /**
     * @param array information
     * @return false|int|string
     */
    public function addUserProfile(array $information)
    {
        $query = new Query();
        return $query->table('medical_user_profiles')->insert($information);
    }
    public function updateUserProfile(array $information, $userID)
    {
        $query = new Query();
        return $query->table('medical_user_profiles')->update($information,['user_id'=>$userID]);
    }
    public function updateUserAccount(array $information, $userID)
    {
        $query = new Query();
        return $query->table('medical_users')->update($information, ['id'=>$userID]);
    }
    public function updateUserProfileForAdmin(string $user_id, array $information): bool {
        $query = new Query();
        return $query->table('medical_user_profiles')->update($information, ['user_id' => $user_id]);
    }
    /**
     * @param array information
     * @return false|int|string
     */
    public function addUser(array $information)
    {
        $query = new Query();
        return $query->table('medical_users')->insert($information);
    }

    /**
     * @param string email
     * @return
     */
    public function getInfoFromEmail(string $email)
    {
        $query = new Query();
        return $query->table('medical_users')->condition(['email' => $email])->get();
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

    public function getUsers(): array
    {
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
     * @param array information
     * @return false|int|string
     */
    public function userLogin(array $information)
    {
        $query = new Query();
        return $query->table('medical_users')->condition(['email' => $information['email'],
                                                          'password'=>$information['password'],
                                                          'status'=>'1'])->get();
    }
    public function getProfileByUserId($userID)
    {
        $query = "SELECT mp.id, mp.gender, mp.user_id, mu.email, mp.address, mp.birthday, mp.phone,
                mp.first_name, mp.last_name, mp.avatar, mu.qr_image FROM medical_user_profiles mp left join medical_users mu
        on mp.user_id = mu.id where user_id = ".$userID;
        $result = $this->getDatabase()->mysql->query($query);
        $numRows = $result->num_rows;
                if ($numRows > 0) {
                    return $result->fetch_all(MYSQLI_ASSOC);
                }

    }
    public function getUserIdByMail($email)
    {
        $query = new Query();
        return $query->table('medical_users')->condition(['email'=>$email])->get();
    }
    public function updatePassword($userID, $new_password)
    {
        $query = new Query();
        return $query->table('medical_users')->update(['password'=>$new_password], ['id'=>$userID]);
    }

    public function getAllDoctor()
    {
        $query = "SELECT mp.id, mp.gender, mp.user_id, mu.email, mp.address, mp.birthday, mp.phone,
                mp.first_name, mp.last_name FROM medical_user_profiles mp left join medical_users mu
        on mp.user_id = mu.id where role=1";
        $result = $this->getDatabase()->mysql->query($query);
        $numRows = $result->num_rows;
                if ($numRows > 0) {
                    return $result->fetch_all(MYSQLI_ASSOC);
                }
    }
    public function active_acc(array $information)
    {
        $query = new Query();
        return $query->table('medical_users')->update(['status'=>$information['status'],
                                                        'token'=>$information['token']
                                                        ], ['email'=>$information['email']]);
    }

    public function insertAppointment(array $information)
    {
        $query = new Query();
        return $query->table('medical_appointments')->insert(
            ['user_id'=>$information['user_id'],
            'date_start' =>$information['date_start'],
            'time_start' => $information['time_start'],
            'created_at'=>$information['created_at'],
            'subject'=> $information['subject'],
            ]);

    }
    public function insertAppointmentAttendees(array $information, $doctor)
    {
        $query = new Query();
        return $query->table('medical_appointment_attendees')->insert($information);
    }

    public function getAllUsers(): array {
        $query = new Query();
        $sql = "SELECT U.id, U.email, U.status, U.qr_image, U.role, UP.first_name, UP.last_name, UP.birthday, UP.gender, UP.avatar, UP.address, UP.phone
                FROM medical_users AS U INNER JOIN medical_user_profiles AS UP ON U.id=UP.user_id";
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
                FROM medical_users AS U INNER JOIN medical_user_profiles AS UP ON U.id=UP.user_id WHERE U.id='$id'";
        $result = $query->getDatabase()->mysql->query($sql);
        $data = [];
        if ($result->num_rows === 0) {
            return $data;
        }

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function updateUser(string $id, array $information): bool {
        $query = new Query();
        return $query->table('medical_users')->update($information, ['id' => $id]);
    }

    public function deleteUser(string $id): bool {
        $query = new Query();
        return $query->table('medical_users')->condition(['id' => $id])->delete();
    }

    public function getEmailExceptUserId(string $user_id, string $email): int {
        $sql = "SELECT * FROM medical_users WHERE email='$email' AND id <> '$user_id';";
        $result = $this->getDatabase()->mysql->query($sql);
        return $result->num_rows;
    }
}
