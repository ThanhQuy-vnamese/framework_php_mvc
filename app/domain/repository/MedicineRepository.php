<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\Medicine;

class MedicineRepository implements MedicineRepositoryInterface
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

    public function addMedicine(Medicine $medicine): int
    {
        $sql = "INSERT INTO medical_medicines(name, unit, quantity, description, medicine_type_id)
                VALUES ('%s', '%s', %s , '%s', %s)";
        $query = sprintf(
            $sql,
            $medicine->getName(),
            $medicine->getUnit(),
            $medicine->getQuantity(),
            $medicine->getDescription(),
            $medicine->getTypeId()
        );
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }
}
