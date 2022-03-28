<?php

declare(strict_types=1);

namespace App\use_case;

use App\dto\MedicineDto;
use App\query_services\MedicineListQueryService;
use App\query_services\MedicineListQueryServiceInterface;

class ViewMedicineListUseCase
{
    private MedicineListQueryServiceInterface $medicineQueryService;

    public function __construct()
    {
        $this->medicineQueryService = new MedicineListQueryService();
    }

    /**
     * @return MedicineDto[]|array
     */
    public function execute(): array
    {
        return $this->medicineQueryService->getListMedicine();
    }
}
