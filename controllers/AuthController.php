<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Middlewares\AuthMiddleware;
use App\Core\Request;
use App\Core\Response;
use App\Models\LoginForm;
use App\Models\User;

class AuthController extends Controller
{
    // TODO: Refactor
    public function __construct()
    {
//        $this->setLayout('auth');
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
//        $this->setLayout('auth');
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect('/');
                return ;
            }
        }
        return $this->render('login', ['model' => $loginForm]);
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

    public function profile() {
        return $this->render('profile');
    }
}
