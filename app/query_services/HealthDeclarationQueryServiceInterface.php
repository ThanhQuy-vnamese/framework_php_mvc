<?php

declare(strict_types=1);

namespace App\query_services;

use App\dto\HealthDeclarationDto;

interface HealthDeclarationQueryServiceInterface
{
    public function getHealthDeclarationById(int $id): HealthDeclarationDto;
}
