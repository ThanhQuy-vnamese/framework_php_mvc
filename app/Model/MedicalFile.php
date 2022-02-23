<?php
declare(strict_types=1);

namespace App\Model;

use App\Core\Database\DBModel;
use App\Core\Database\Query;
use stdClass;

class MedicalFile extends DBModel
{
    public function rules(): array
    {
        return [];
    }

    public function addMedicalFile(array $information)
    {
        $query = new Query();
        return $query->table('medical_medical_records')->insert($information);
    }

    public function addHealthInsurance(array $information)
    {
        $query = new Query();
        return $query->table('medical_medical_insurances')->insert($information);
    }

    public function getInfoByIdentityCard(string $identityCard): int {
        $query = "SELECT * FROM `medical_medical_records` WHERE identity_card = '$identityCard'";
        $result = $this->getDatabase()->mysql->query($query);
        return $result->num_rows;
    }
}