<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Models\RegisterModel;

class AuthController extends Controller
{
    // TODO: Refactor
    public function __construct()
    {
        $this->setLayout('auth');
    }

    public function login() {
//        $this->setLayout('auth');
        return $this->render('login');
    }

    //TODO: Refactor move inject Request to construct
    public function register(Request $request): string
    {
//        $this->setLayout('auth');
        $register = new RegisterModel();
        if ($request->isPost()) {

            $register->loadData($request->getBody());
            if ($register->validate() && $register->register()) {
                return 'success';
            }
//            echo '<pre>';
//            var_dump($register->errors);
//            die;
            return $this->render('register', ['model' => $register]);
        }
        return $this->render('register', ['model' => $register]);
    }
}
