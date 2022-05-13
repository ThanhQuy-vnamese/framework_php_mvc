<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\DeleteMedicineTypeUseCase;

class DeleteMedicineTypeController extends BaseController
{
    public function delete()
    {
        $id = $this->request->input->getInt('id');
        $use_case = new DeleteMedicineTypeUseCase();
        $is_success = $use_case->execute($id);
        if (!$is_success) {
            $this->response->redirect('/admin/medicine-type-detail', ['id' => $id]);
        }
        $this->response->redirect('/admin/medicine-type-list');
    }
}
