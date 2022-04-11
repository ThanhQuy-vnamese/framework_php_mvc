<?php

declare(strict_types=1);

namespace App\query_services;

use App\Core\Database\Query;
use App\dto\MedicineTypeListDto;

class MedicineTypeQueryService implements MedicineTypeQueryServiceInterface
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

    /**
     * @return MedicineTypeListDto[]
     */
    public function getAllMedicineType(): array
    {
        $query = "SELECT * FROM medical_medicines_types";
        $result = $this->db->query($query);
        $medicine_types = [];
        if ($result->num_rows === 0) {
            return [];
        }
        while ($row = $result->fetch_assoc()) {
            $medicine_types[(int)$row['id']] = new MedicineTypeListDto((int)$row['id'], $row['name']);
        }
        return $medicine_types;
    }
}
