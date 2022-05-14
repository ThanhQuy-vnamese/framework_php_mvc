<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\EditMedicineTypeUseCase;

class EditMedicineTypeController extends BaseController
{
    public function edit()
    {
        $id = $this->request->input->getInt('id');
        $name = $this->request->input->get('name');
        $description = $this->request->input->get('description');
        $use_case = new EditMedicineTypeUseCase();
        $use_case->execute($id, $name, $description);
        $this->response->redirect('/admin/medicine-type-detail', ['id' => $id]);
    }
}
