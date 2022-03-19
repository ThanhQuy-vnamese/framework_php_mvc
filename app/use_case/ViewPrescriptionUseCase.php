<?php

declare(strict_types=1);

namespace App\use_case;

use App\query_services\ViewPrescriptionQueryService;

class ViewPrescriptionUseCase
{
    private ViewPrescriptionQueryService $viewPrescriptionQueryService;

    public function __construct()
    {
        $this->viewPrescriptionQueryService = new ViewPrescriptionQueryService();
    }

    public function execute(int $health_id)
    {
        return $this->viewPrescriptionQueryService->getPrescription($health_id);
    }
}
