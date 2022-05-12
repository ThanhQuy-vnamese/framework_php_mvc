<?php

declare(strict_types=1);

namespace App\query_services;

use App\dto\MedicineType;

interface MedicineTypeQueryServiceInterface
{
    public function getAllMedicineType(int $offset): array;

    public function getTotalMedicineType(): int;

    public function getMedicineTypeById(int $id): MedicineType;
}
