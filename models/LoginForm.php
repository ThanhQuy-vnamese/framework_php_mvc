<?php


namespace App\Models;


use App\Core\Application;
use App\Core\Model;

class LoginForm extends Model
{

    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIl],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function login() {
        $user = new User();
        $result = $user->findOne(['email' => $this->email]);
        if (!$result) {
            $this->addError('email', 'User does not exist!!');
            return false;
        }

        if (!password_verify($this->password, $result->password)) {
            $this->addError('password', 'Password is incorrect!!');
            return false;
        }
        $user->email = $result->email;
        $user->password = $result->password;

        return Application::$APPLICATION->login($user);
    }
}
