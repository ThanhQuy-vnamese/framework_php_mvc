<?php
declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\Core\Session;
use App\Model\MedicalFile;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class EditMedicalFileController extends BaseController
{
    public function editMedicalFile() {
        $medicalFileId = $this->request->input->get('medical-file-id');
        $insuranceId = $this->request->input->get('insurance-id');
        $firstName = $this->request->input->get('first-name');
        $lastName = $this->request->input->get('last-name');
        $email = $this->request->input->get('email');
        $gender = $this->request->input->get('gender');
        $birthday = $this->request->input->get('birthday');
        $phone = $this->request->input->get('phone');
        $identityCard = $this->request->input->get('identity-card');
        $province = $this->request->input->get('province');
        $district = $this->request->input->get('district');
        $wards = $this->request->input->get('wards');
        $way = $this->request->input->get('house-number');
        $healthInsuranceNumber = $this->request->input->get('health-insurance-number');
        $expirationDate = $this->request->input->get('expiration-date');
        $way = $this->request->input->get('house-number');
        $covidVaccination = $this->request->input->get('covid_vaccination');

        $covidVaccination = [
            [
                'type_vaccine' => 'Verocell',
                'date' => '12/2/2022',
            ],
            [
                'type_vaccine' => 'Verocell',
                'date' => '13/2/2022',
            ],
        ];

        $information = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'gender' => $gender,
            'birthday' => $birthday,
            'phone' => $phone,
            'identity_card' => $identityCard,
            'province' => $province,
            'district' => $district,
            'wards' => $wards,
            'way' => $way,
            'covid_vaccination' => serialize($covidVaccination),
            'user_id' => '1'
        ];

        $session = new Session();
        $medicalFile = new MedicalFile();
        if ($medicalFile->getInfoByIdentityCardExceptCurrent($identityCard, $medicalFileId) > 0) {
            $session->setFlash('errorEditMedicalFile', 'The identity card ....');
            $this->response->redirect('/admin/medical-file-detail', ['id' => $medicalFileId]);
        }

        $isSuccessUpdateMedicalFileId = $medicalFile->updateMedicalFile($information, $medicalFileId);

        if (!$isSuccessUpdateMedicalFileId) {
            $session->setFlash('errorEditMedicalFile', 'Add medical file fail');
            $this->response->redirect('/admin/medical-file-detail', ['id' => $medicalFileId]);
        }

        $healthInsurance = [
            'health_insurance_number' => $this->request->input->get('health-insurance-number'),
            'expiration_date' => $this->request->input->get('expiration-date'),
            'medical_file_id' => $medicalFileId
        ];

        $healthInsuranceData = $this->validateHealthInsurance($healthInsurance);
        $isSuccess = $medicalFile->updateHealthInsurance($healthInsuranceData, $insuranceId);

        if (!$isSuccess) {
            $session->setFlash('errorEditMedicalFile', 'Add medical file fail');
            $this->response->redirect('/admin/medical-file-detail', ['id' => $medicalFileId]);
        }

        $session->setFlash('successEditMedicalFile', 'Add medical file success');
        $this->response->redirect('/admin/medical-file-detail', ['id' => $medicalFileId]);
    }

    private function validateHealthInsurance(array $healthInsurance): array
    {
        $healthInsuranceData = [
            'health_insurance' => false,
            'id_medical_records' => $healthInsurance['medical_file_id']
        ];

        if (!empty($healthInsurance['health_insurance_number']) && !empty($healthInsurance['expiration_date'])) {
            $healthInsuranceData['health_insurance'] = true;
            $healthInsuranceData['health_insurance_number'] = $healthInsurance['health_insurance_number'];
            $healthInsuranceData['expiration_date'] = $healthInsurance['expiration_date'];
        }

        return $healthInsuranceData;
    }
}
