<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Models\User;

class AuthController extends Controller
{
    // TODO: Refactor
    public function __construct()
    {
        $this->setLayout('auth');
    }

    public function login()
    {
//        $this->setLayout('auth');
        return $this->render('login');
    }

    //TODO: Refactor move inject Request to construct
    public function register(Request $request): string
    {
//        $this->setLayout('auth');
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->getBody());
            if ($user->validate() && $user->register()) {
                Application::$APPLICATION->session->setFlash('success', 'Thank for register!!');
                Application::$APPLICATION->response->redirect('/');
                exit();
            }
//            echo '<pre>';
//            var_dump($user->errors);
//            die;
            return $this->render('register', ['model' => $user]);
        }

        return $this->render('register', ['model' => $user]);
    }
}
