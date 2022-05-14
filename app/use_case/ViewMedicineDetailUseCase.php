<?php

declare(strict_types=1);

namespace App\use_case;

use App\dto\MedicineDto;
use App\query_services\MedicineDetailQueryService;
use App\query_services\MedicineDetailQueryServiceInterface;
use App\query_services\MedicineTypeQueryService;
use App\query_services\MedicineTypeQueryServiceInterface;

class ViewMedicineDetailUseCase
{
    private MedicineDetailQueryServiceInterface $medicineDetailQueryService;
    private MedicineTypeQueryServiceInterface $medicineTypeQueryService;

    public function __construct()
    {
        $this->medicineDetailQueryService = new MedicineDetailQueryService();
        $this->medicineTypeQueryService = new MedicineTypeQueryService();
    }

    public function execute(int $id): array
    {
        $medicine_type_list = $this->medicineTypeQueryService->getAllMedicineTypeNotByOffset();
        return [
            'medicine' => $this->medicineDetailQueryService->getMedicineDetailById($id),
            'medicine_type_list' => $medicine_type_list
        ];
    }
}
