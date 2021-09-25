<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use App\Core\Database\Query;

class ApiController extends BaseController {
    public function getUser()
    {
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