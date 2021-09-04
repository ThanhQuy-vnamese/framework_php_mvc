<?php
namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller
{
    public function login() {
        return $this->render('login');
    }

    public function register(): string
    {
        if ($this->request->isPost()) {
            return 'handle submit data';
        }
        return $this->render('register');
    }
}
