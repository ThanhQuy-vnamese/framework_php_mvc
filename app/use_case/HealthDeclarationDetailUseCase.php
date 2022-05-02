<?php

declare(strict_types=1);

namespace App\use_case;

use App\dto\HealthDeclarationDto;
use App\query_services\HealthDeclarationQueryService;
use App\query_services\HealthDeclarationQueryServiceInterface;

class HealthDeclarationDetailUseCase
{
    private HealthDeclarationQueryServiceInterface $healthDeclarationQueryService;

    public function __construct()
    {
        $this->healthDeclarationQueryService = new HealthDeclarationQueryService();
    }

    public function execute(int $id): HealthDeclarationDto
    {
        return $this->healthDeclarationQueryService->getHealthDeclarationById($id);
    }
}
