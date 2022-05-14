<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\DeleteMedicineUseCase;

class DeleteMedicineController extends BaseController
{
    public function delete()
    {
        $use_case = new DeleteMedicineUseCase();
        $id = $this->request->input->getInt('id');
        $is_success = $use_case->execute($id);
        if (!$is_success) {
            $this->response->redirect('/admin/medicine-detail', ['id' => $id]);
        }
        $this->response->redirect('/admin/medicine-list');
    }
}
