<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\GetUserSettingUseCase;

class GetUserSettingController extends BaseController
{
    public function get()
    {
        $use_case = new GetUserSettingUseCase();
        $setting = $use_case->execute();
        return $this->response->json_encode(['setting' => $this->createResponse($setting)]);
    }

    private function createResponse(string $setting)
    {
        return unserialize($setting);
    }
}
