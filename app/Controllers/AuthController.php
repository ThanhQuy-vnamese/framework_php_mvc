<?php

namespace App\Controllers;

use App\Core\Auth\Authentication;
use App\Core\Controller\BaseController;
use App\Core\Database\Query;
use App\Core\Session;
use App\Model\LoginForm;
use App\Model\Test;
use App\Model\User;
use App\Model\Users2;
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
//        $query = new Query();
//        $users = $query->table('users')->select(['firstname'])->condition(['id' => 1])->get();
//
//        $users = new Users2();
//        $users = $users->condition(['id' => 1])->get();

//        $id = $test->table('test')->insert(['fullname' => 'dang trung hieu2', 'phone' => 1234]);
//        $result = $test->table('test')->condition(['id' => 2])->delete();
        var_dump(json_decode(file_get_contents('php://input'), true)    );
        die;
        $this->response->redirect('/index');
    }


    public function index(): string
    {
        return $this->twig->render('index');
    }
}
