<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\GetTotalMedicalFileUseCase;

class GetTotalMedicalFileController extends BaseController
{
    public function get() {
        $use_case = new GetTotalMedicalFileUseCase();
        $total_medical_files = $use_case->execute();
        return $this->response->json_encode(['total' => $total_medical_files]);
    }
}
