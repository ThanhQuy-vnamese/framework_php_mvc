<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Middlewares\AuthMiddleware;
use App\Core\Request;
use App\Core\Response;
use App\Core\Views\Twig;
use App\Models\LoginForm;
use App\Models\User;

class AuthController extends Controller
{
    // TODO: Refactor
    public function __construct(Twig $twig)
    {
        parent::__construct($twig);
//        $this->setLayout('auth');
        $this->registerMiddleware(new AuthMiddleware(['']));
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
            return $this->render('register', ['model' => $user]);
        }

        return $this->render('register', ['model' => $user]);
    }

    public function profile(): string
    {
        return $this->twig->render('profile');
    }
}
