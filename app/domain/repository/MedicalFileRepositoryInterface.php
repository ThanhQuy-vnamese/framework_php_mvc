<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\domain\entity\MedicalFile;

interface MedicalFileRepositoryInterface
{
    public function getMedicalFileByIdentityCard(string $identityCardId): MedicalFile;

    public function addMedicalFile(MedicalFile $medicalFile): int;
}
