<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;

class GetUserSettingController extends BaseController
{
    public function get()
    {
        return $this->response->json_encode(['language' => 'en']);
    }
}
