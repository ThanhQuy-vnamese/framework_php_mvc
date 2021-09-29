<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Adapter\UserAdapter;
use App\Core\Auth\Authentication;
use App\Core\Controller\BaseController;
use App\Core\Cookie\Cookie;
use App\Model\Users2;

class TestController extends BaseController
{
    public function api()
    {
        $userAdapter = new UserAdapter();
        echo '<pre>';
        var_dump($userAdapter->getUsers()->toArray());
        die;
    }

    public function test() {
        $users2 = new Users2();
        $email = $users2->getUsers();

        $authentication = new Authentication();
        $user = $authentication->user();

        return $this->twig->render('abc', ['email' => $email]);
    }

    public function testGetPost() {
        $cookie = new Cookie();
        $cookie->set('key', 'value', 3600);
        $cookie->get('key');
        $cookie->remove('key');

    }

    public function get() {
        return $this->twig->render('test');
    }

    public function post() {
        var_dump(123);die;
    }
}