<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class UserController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function index():string
    {
        return $this->twig->render('base');
    }
    public function login():string
    {
        return $this->twig->render('user/pages/login');
    }
    public function getViewUserList(): string
    {
        return $this->twig->render('admin/pages/user_list');
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */


    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewUserAdd():string {
        return $this->twig->render('admin/pages/user_add');
    }
    public function getViewUserDetail():string {
        return $this->twig->render('admin/pages/user_detail');
    }
    public function getViewLogin():string{
        return $this->twig->render('user/pages/login');
    }
    public function getViewProfile():string{
        return $this->twig->render('user/pages/profile');
    }
    public function getViewRegister():string{
        return $this->twig->render('user/pages/register');
    }
}
