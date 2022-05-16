<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\GenerateQrUseCase;

class GenerateQrController extends BaseController
{
    public function generate() {
        $id = $this->request->input->getInt('medical-file-id');
        $user_id = $this->request->input->getInt('user-id');
        $use_case = new GenerateQrUseCase();
        $use_case->execute($id, $user_id);
        $this->response->redirect('/admin/medical-file-detail', ['id' => $id]);
    }
}
