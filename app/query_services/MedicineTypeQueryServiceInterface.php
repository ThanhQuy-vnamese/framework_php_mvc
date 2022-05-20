<?php

declare(strict_types=1);

namespace App\query_services;

use App\dto\MedicineType;
use App\dto\MedicineTypeListDto;

interface MedicineTypeQueryServiceInterface
{
    public function getAllMedicineType(int $offset): array;

    public function getTotalMedicineType(): int;

    public function getMedicineTypeById(int $id): MedicineType;

    /**
     * @return MedicineTypeListDto[]
     */
    public function getAllMedicineTypeNotByOffset(): array;

}
