<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\MedicineType;

class MedicineTypeRepository implements MedicineTypeRepositoryInterface
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

    public function addMedicineType(MedicineType $medicine_type): int
    {
        $sql = "INSERT INTO medical_medicines_types(name, description) VALUES ('%s', '%s')";
        $query = sprintf($sql, $medicine_type->getName(), $medicine_type->getDescription());
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }

    public function editMedicineType(MedicineType $medicine_type): bool
    {
        $sql = "UPDATE medical_medicines_types SET name = '%s', description = '%s' WHERE id = %s";
        $query = sprintf($sql, $medicine_type->getName(), $medicine_type->getDescription(), $medicine_type->getId());
        if ($this->db->query($query)) {
            return true;
        }
        return false;
    }

    public function deleteMedicineTypeById(int $id): bool
    {
        $sql = "DELETE FROM `medical_medicines_types` WHERE id = %s";
        $query = sprintf($sql, $id);
        try {
            if (!$this->db->query($query)) {
                return false;
            }
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }
}
