<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use App\Core\Session;
use App\Model\MedicalFile;
use App\Repository\MedicalFileRepository;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MedicalFileController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewMedicalFileAdd(): string
    {
        return $this->twig->render('admin/pages/medical_file_add');
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewMedicalFileList(): string
    {
        $medicalFiles = $this->getMedicalFiles();
        return $this->twig->render('admin/pages/medical_file_list', ['medicalFiles' => $medicalFiles]);
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewMedicalFileDetail(): string
    {
        $medicalFileId = $this->request->input->get('id');
        $medicalRepository = new MedicalFileRepository();
        $medicalFile = $medicalRepository->getMedicalFileDetail($medicalFileId);
        return $this->twig->render('admin/pages/medical_file_detail', ['medicalFile' => $medicalFile]);
    }

    public function getMedicalFiles(): array
    {
        $medicalFileRepository = new MedicalFileRepository();
        return $medicalFileRepository->getMedicalFiles();
    }

    public function addMedicalFile()
    {
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
        $way = $this->request->input->get('way');
        $covidVaccination = $this->request->input->get('covid_vaccination');

        $covidVaccination = [
            [
                'type_medicine' => 'Verocell',
                'date' => '12/2/2022',
            ],
            [
                'type_medicine' => 'Verocell',
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
        if ($medicalFile->getInfoByIdentityCard($identityCard) > 0) {
            $session->setFlash('errorAddMedicalFile', 'The identity card ....');
            $this->response->redirect('/admin/medical-file-add');
        }

        $medicalFileId = $medicalFile->addMedicalFile($information);

        if (!$medicalFileId) {
            $session->setFlash('errorAddMedicalFile', 'Add medical file fail');
            $this->response->redirect('/admin/medical-file-add');
        }

        $healthInsurance = [
            'health_insurance_number' => $this->request->input->get('health-insurance-number'),
            'expiration_date' => $this->request->input->get('expiration-date'),
            'medical_file_id' => $medicalFileId
        ];

        $healthInsuranceData = $this->validateHealthInsurance($healthInsurance);
        $isSuccess = $medicalFile->addHealthInsurance($healthInsuranceData);

        if (!$isSuccess) {
            $session->setFlash('errorAddMedicalFile', 'Add medical file fail');
            $this->response->redirect('/admin/medical-file-add');
        }

        $session->setFlash('successAddMedicalFile', 'Add medical file success');
        $this->response->redirect('/admin/medical-file-add');
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