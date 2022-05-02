<?php

declare(strict_types=1);

namespace App\use_case;

use App\query_services\HealthDeclarationQueryService;
use App\query_services\HealthDeclarationQueryServiceInterface;

class GetTotalHealthDeclarationUseCase
{
    private HealthDeclarationQueryServiceInterface $healthDeclarationQueryService;

    public function __construct()
    {
        $this->healthDeclarationQueryService = new HealthDeclarationQueryService();
    }

    public function execute(): int
    {
        return $this->healthDeclarationQueryService->getTotalHealthDeclaration();
    }
}
