<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Adapter\UserAdapter;
use App\Core\Controller\BaseController;

class TestController extends BaseController
{
    public function api() {
       $userAdapter = new UserAdapter();
       $json = $this->response->json_encode($userAdapter->getUsers()->toArray());
       $this->response->setStatusCode(200);
       var_dump($json);die;
    }
}