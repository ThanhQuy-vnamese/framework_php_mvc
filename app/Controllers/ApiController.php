<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use App\Core\Database\Query;

class ApiController extends BaseController {
    public function getUser()
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        $query = new Query();
        $users = $query->table('users')->get();
        $result = [];
        foreach ($users as $user) {
            $temp = [];
            $temp['name'] = $user->firstname . $user->lastname;
            $temp['isActive'] = $user->status ? true : false;
            $result[] = $temp;
        }
        return $this->response->json_encode($result);
    }
}