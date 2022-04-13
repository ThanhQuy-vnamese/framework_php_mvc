<?php

declare(strict_types=1);

namespace App\use_case\api;

use App\domain\entity\HealthInsurance;
use App\domain\entity\MedicalFile;
use App\domain\repository\HealthInsuranceRepository;
use App\domain\repository\MedicalFileRepository;

class EditMedicalFileApiUseCase
{
    private MedicalFileRepository $medicalFileRepository;
    private HealthInsuranceRepository $healthInsuaranceRepository;

    public function __construct()
    {
        $this->medicalFileRepository = new MedicalFileRepository();
        $this->healthInsuaranceRepository = new HealthInsuranceRepository();
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
        int $medical_file_id
    ) {
        $medical_file = $this->buildMedicalFile(
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
            $medical_file_id
        );
        $health_insurance = $this->healthInsuaranceRepository->getHealthInsuranceByMedicalFileId($medical_file_id);

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
        int $medical_file_id
    ): MedicalFile {
        return new MedicalFile(
            $medical_file_id,
            $first_name,
            $last_name,
            $gender,
            $birthday,
            $identity_card,
            $email,
            $phone,
            $way,
            $district,
            $wards,
            $province,
            serialize($covid_vaccination),
            null
        );
    }

    private function buildHealthInsurance(
        int $health_insurance,
        string $health_insurance_number,
        string $expiration_date,
        int $medical_records_id
    ): HealthInsurance {
        return new HealthInsurance($health_insurance, $health_insurance_number, $expiration_date, $medical_records_id);
    }
}
