<?php

declare(strict_types=1);

namespace App\domain\repository;

interface HealthRepositoryInterface
{
    public function deleteHealth(int $id): bool;
}
