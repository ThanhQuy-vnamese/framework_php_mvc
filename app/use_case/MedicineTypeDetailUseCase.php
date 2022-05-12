<?php

declare(strict_types=1);

namespace App\use_case;

use App\dto\MedicineType;
use App\query_services\MedicineTypeQueryService;
use App\query_services\MedicineTypeQueryServiceInterface;

class MedicineTypeDetailUseCase
{
    private MedicineTypeQueryServiceInterface $medicineTypeQueryService;

    public function __construct()
    {
        $this->medicineTypeQueryService = new MedicineTypeQueryService();
    }

    public function execute(int $id): MedicineType
    {
        return $this->medicineTypeQueryService->getMedicineTypeById($id);
    }
}
