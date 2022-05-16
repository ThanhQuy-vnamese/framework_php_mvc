<?php

declare(strict_types=1);

namespace App\use_case;

use App\dto\HealthDeclarationDto;
use App\query_services\HealthDeclarationQueryService;
use App\query_services\HealthDeclarationQueryServiceInterface;

class HealthDeclarationListUseCase
{
    private HealthDeclarationQueryServiceInterface $healthDeclarationQueryService;

    public function __construct()
    {
        $this->healthDeclarationQueryService = new HealthDeclarationQueryService();
    }

    /**
     * @return HealthDeclarationDto[]
     */
    public function execute(int $offset): array
    {
        return $this->healthDeclarationQueryService->getAllHealthDeclarationWithPagination($offset);
    }
}
