<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class AuthController extends Controller
{
    // TODO: Refactor
    public function __construct()
    {
        $this->setLayout('auth');
    }

    public function login() {
        $this->setLayout('auth');
        return $this->render('login');
    }

    //TODO: Refactor move inject Request to construct
    public function register(Request $request): string
    {
        $this->setLayout('auth');
        if ($request->isPost()) {
            return 'handle submit data';
        }
        return $this->render('register');
    }
}
