<?php

namespace App\domain\repository;

use App\domain\entity\HealthDeclaration;

interface HealthDeclarationRepositoryInterface
{
    public function addHealthDeclaration(HealthDeclaration $health_declaration): int;
}
