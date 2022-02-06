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
    public function getViewUserDetail():string {
        return $this->twig->render('admin/pages/user_detail');
    }
}
