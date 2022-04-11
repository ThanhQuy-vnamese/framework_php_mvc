<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\MedicalFile;

class MedicalFileRepository implements MedicalFileRepositoryInterface
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

    public function getMedicalFileByIdentityCard(string $identityCardId): MedicalFile
    {
        $sql = "SELECT * FROM `medical_medical_records` WHERE identity_card = '%s'";
        $query = sprintf($sql, $identityCardId);
        $result = $this->db->query($query);
        if ($result->num_rows === 0) {
            return new MedicalFile(null, '', '', '', '', '', '', '', '', '', '', '', '', null);
        }
        $row = $result->fetch_assoc();
        return new MedicalFile(
            (int)$row['id'],
            $row['first_name'],
            $row['last_name'],
            $row['gender'],
            $row['birthday'],
            $row['identity_card'],
            $row['email'],
            $row['phone'],
            $row['way'],
            $row['district'],
            $row['wards'],
            $row['province'],
            $row['covid_vaccination'],
            (int)$row['user_id']
        );
    }

    public function addMedicalFile(MedicalFile $medicalFile): int
    {
        $sql = "INSERT INTO medical_medical_records(first_name, last_name, gender, birthday, identity_card, email, phone, way, district, wards, province, covid_vaccination, user_id)
                VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %s)";
        $query = sprintf(
            $sql,
            $medicalFile->getFirstName(),
            $medicalFile->getLastName(),
            $medicalFile->getGender(),
            $medicalFile->getBirthDay(),
            $medicalFile->getIdentityCard(),
            $medicalFile->getEmail(),
            $medicalFile->getPhone(),
            $medicalFile->getWay(),
            $medicalFile->getDistrict(),
            $medicalFile->getWards(),
            $medicalFile->getProvince(),
            $medicalFile->getCovidVaccination(),
            $medicalFile->getUserId()
        );
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }

    public function deleteMedicalFileById(int $id): bool
    {
        $sql = "DELETE FROM `medical_medical_records` WHERE id = %s";
        $query = sprintf($sql, $id);
        if (!$this->db->query($query)) {
            return false;
        }
        return true;
    }
}
