<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\AddPrescriptionUseCase;

class AddPrescriptionController extends BaseController
{
    public function addPrescription()
    {
        $input = $this->parseInput();
        $useCase = new AddPrescriptionUseCase();
        $useCase->execute(
            $input['full_name'],
            $input['gender'],
            $input['age'],
            $input['address'],
            $input['description'],
            $input['medicine_list'],
            $input['health_id'],
            $input['user_id']
        );

        $this->response->redirect('/admin/medical-file-detail', ['id' => $input['medical_file_id']]);
    }

    public function parseInput(): array
    {
        $fullName = $this->request->input->getString('full-name');
        $gender = $this->request->input->getString('gender');
        $age = $this->request->input->getInt('age');
        $address = $this->request->input->getString('address');
        $description = $this->request->input->getString('description');
        $healthId = $this->request->input->getInt('health-id');
        $userId = $this->request->input->getInt('user-id');
        $medicalFileId = $this->request->input->getInt('medical-file-id');

        $medicineList = [];
        for ($i = 1; $i <= 10; $i++) {
            $name = $this->request->input->getString("name-${i}");
            $quantity = $this->request->input->getString("quantity-${i}");
            $dosage = $this->request->input->getString("dosage-${i}");
            if (empty($name) && empty($quantity) && empty($dosage)) {
                continue;
            }
            $medicineList[$i]['name'] = $this->request->input->getString("name-${i}");
            $medicineList[$i]['quantity'] = $this->request->input->getString("quantity-${i}");
            $medicineList[$i]['dosage'] = $this->request->input->getString("dosage-${i}");
        }

        return [
            'user_id' => $userId,
            'health_id' => $healthId,
            'full_name' => $fullName,
            'gender' => $gender,
            'age' => $age,
            'address' => $address,
            'description' => $description,
            'medicine_list' => $medicineList,
            'medical_file_id' => $medicalFileId
        ];
    }
}
