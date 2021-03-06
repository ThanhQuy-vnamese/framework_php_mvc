<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Helper\Helper;
use App\Core\Lib\QrCode;
use App\Core\Session;
use App\domain\entity\HealthInsurance;
use App\domain\entity\MedicalFile;
use App\domain\repository\HealthInsuranceRepository;
use App\domain\repository\HealthInsuranceRepositoryInterface;
use App\domain\repository\MedicalFileRepository;
use App\domain\repository\MedicalFileRepositoryInterface;
use App\legacy\Auth;
use App\translates\Translate;

class AddMedicalFileUseCase
{
    private MedicalFileRepositoryInterface $medicalFileRepository;
    private HealthInsuranceRepositoryInterface $healthInsuranceRepository;
    private Session $session;
    private Auth $auth;
    private QrCode $qrCode;
    private Helper $helper;
    private Translate $translate;

    public function __construct()
    {
        $this->medicalFileRepository = new MedicalFileRepository();
        $this->healthInsuranceRepository = new HealthInsuranceRepository();
        $this->session = new Session();
        $this->auth = new Auth();
        $this->qrCode = new QrCode();
        $this->helper = new Helper();
        $this->translate = new Translate();
    }

    public function execute(
        string $first_name,
        string $last_name,
        string $email,
        string $gender,
        string $birthday,
        string $phone,
        string $identity_card,
        string $province,
        string $district,
        string $wards,
        string $way,
        array $covid_vaccination,
        string $health_insurance_number,
        string $expiration_date,
        int $user_id
    ): int {
        $medicalFile = $this->medicalFileRepository->getMedicalFileByIdentityCard($identity_card);
        if (!is_null($medicalFile->getId())) {
            $this->session->setFlash('errorAddMedicalFile', $this->translate->getLanguage('identity_card_exist'));
            return 0;
        }
        if (empty($birthday)) {
            $this->session->setFlash('errorAddMedicalFile', $this->translate->getLanguage('require_birthday'));
            return 0;
        }
        if (empty($user_id)) {
            $this->session->setFlash('errorAddMedicalFile', $this->translate->getLanguage('require_user'));
            return 0;
        }
        $qrName = $this->generateQrImage($user_id);
        $medicalFileToInsert = $this->buildMedicalFile(
            $first_name,
            $last_name,
            $email,
            $gender,
            $birthday,
            $phone,
            $identity_card,
            $province,
            $district,
            $wards,
            $way,
            $covid_vaccination,
            $user_id,
            $qrName
        );
        $idMedicalFile = $this->medicalFileRepository->addMedicalFile($medicalFileToInsert);
        if (!$idMedicalFile) {
            $this->session->setFlash('errorAddMedicalFile', $this->translate->getLanguage('add_medical_file_fail'));
            return 0;
        }

        $healthInsurance = $this->validateHealthInsurance($health_insurance_number, $expiration_date);
        $healthInsuranceForInsert = $this->buildHealthInsurance(
            $healthInsurance['health_insurance'],
            (string)($healthInsurance['health_insurance_number'] ?? ''),
            (string)($healthInsurance['expiration_date'] ?? null),
            $idMedicalFile
        );

        $idHealthInsurance = $this->healthInsuranceRepository->addHealthInsurance($healthInsuranceForInsert);
        if (!$idHealthInsurance) {
            $this->session->setFlash('errorAddMedicalFile', $this->translate->getLanguage('add_health_insurance'));
            return 0;
        }
        return $idMedicalFile;
    }

    private function generateQrImage(int $user_id): string
    {
        $qrName = $this->helper->generateRandomString(15);
        $host = $this->helper->getHost();
        $url = "${host}/user/medican-record?user_id=${user_id}";
        $this->qrCode->create(
            $url,
            $qrName
        );
        return $qrName . '.png';
    }

    private function validateHealthInsurance(
        string $health_insurance_number,
        string $expiration_date
    ): array {
        $healthInsuranceData = [
            'health_insurance' => 0,
        ];

        if (!empty($health_insurance_number) && !empty($expiration_date)) {
            $healthInsuranceData['health_insurance'] = 1;
            $healthInsuranceData['health_insurance_number'] = $health_insurance_number;
            $healthInsuranceData['expiration_date'] = $expiration_date;
        }

        return $healthInsuranceData;
    }

    private function buildMedicalFile(
        string $first_name,
        string $last_name,
        string $email,
        string $gender,
        string $birthday,
        string $phone,
        string $identity_card,
        string $province,
        string $district,
        string $wards,
        string $way,
        array $covid_vaccination,
        int $user_id,
        string $qr_name
    ): MedicalFile {
        return new MedicalFile(
            null,
            $first_name,
            $last_name,
            $gender,
            empty($birthday) ? null : $birthday,
            $identity_card,
            $email,
            $phone,
            $way,
            $district,
            $wards,
            $province,
            serialize($covid_vaccination),
            $user_id,
            $qr_name
        );
    }

    private function buildHealthInsurance(
        int $health_insurance,
        string $health_insurance_number,
        ?string $expiration_date,
        int $medical_records_id
    ): HealthInsurance {
        return new HealthInsurance($health_insurance, $health_insurance_number, $expiration_date, $medical_records_id);
    }
}
