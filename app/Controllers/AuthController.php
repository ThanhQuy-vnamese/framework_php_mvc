<?php

namespace App\Controllers;

use App\Adapter\UserAdapter;
use App\Core\Auth\Authentication;
use App\Core\Controller\BaseController;
use App\Core\Session;
use App\Model\LoginForm;
use App\Model\User;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class AuthController extends BaseController
{

    public function login()
    {
        $loginForm = new LoginForm();
        if ($this->request->isPost()) {
            $loginForm->loadData($this->request->input->getAll());
            $email = $this->request->input->get('email');
            $password = $this->request->input->get('password');
            $authentication = new Authentication();
            $login = $authentication->login(['email' => $email, 'password' => $password]);
            if ($loginForm->validate() && $login) {
                $this->response->redirect('/');
            }
        }
        return $this->twig->render('login');
    }

    public function register(): string
    {
        $user = new User();
        if ($this->request->isPost()) {
            $user->loadData($this->request->getAllInput());
            if ($user->validate() && $user->register()) {
                $session = new Session();
                $session->setFlash('success', 'Thank for register!!');
                $this->response->redirect('/');
                exit();
            }
            return $this->render('register', ['model' => $user]);
        }

        return $this->render('register', ['model' => $user]);
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function profile(): string
    {
        $session = new Session();
        $session->setFlash('success', 'Dang ki thanh cong');
        $this->response->redirect('/index');
    }


    public function index(): string
    {
        return $this->twig->render('index');
    }
}
