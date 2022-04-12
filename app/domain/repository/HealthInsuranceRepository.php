<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\HealthInsurance;

class HealthInsuranceRepository implements HealthInsuranceRepositoryInterface
{
    /**
     * @var false|\mysqli|null
     */
    private $db;

    public function __construct()
    {
        $query = new Query();
        $this->db = $query->getDatabase()->mysql;
    }

    public function addHealthInsurance(HealthInsurance $health_insurance): int
    {
        $sql = "INSERT INTO medical_medical_insurances (health_insurance, health_insurance_number, expiration_date, id_medical_records)
                VALUES (%s, '%s', '%s', %s)";
        $query = sprintf(
            $sql,
            $health_insurance->getHealthInsurance(),
            $health_insurance->getHealthInsuranceNumber(),
            $health_insurance->getExpirationDate(),
            $health_insurance->getMedicalRecordsId()
        );
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }
}
