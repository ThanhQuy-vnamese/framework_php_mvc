<?php


namespace App\Core\Auth;


use App\Core\Session;
use App\Model\User;

class Authentication
{
    /**
     * @var User|mixed|string|null
     */
    private $user;
    private Session $session;
    public function __construct()
    {
        $this->session =  new Session();
        $this->user = $this->session->get('user') ?? null;
    }

    public function login(array $info): bool
    {
        $where = $info;
        if (array_key_exists('password', $info)) {
            unset($where['password']);
        }
        $user = new User();
        $result = $user->findOne($where);

        return $this->validate($result, $info['password']);
    }

    private function validate($result, $password): bool
    {
        if (!$result) {
            return false;
        }

        if (!password_verify($password, $result->password)) {
            return false;
        }
        $this->session->set('user', $result);

        return true;
    }

    public function user() {
        return $this->user;
    }

    public function isLogin(): bool {
        return !empty($this->session->get('user'));
    }

    public function logout() {
        $this->session->remove('user');
    }
}