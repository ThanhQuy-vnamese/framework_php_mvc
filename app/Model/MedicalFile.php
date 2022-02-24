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

    public function getMedicalFiles(): array {
        $query = "SELECT id, first_name, last_name, gender, identity_card, birthday, phone FROM medical_medical_records;";
        $result = $this->getDatabase()->mysql->query($query);
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
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