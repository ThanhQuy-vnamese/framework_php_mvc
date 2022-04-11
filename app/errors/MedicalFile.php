<?php

declare(strict_types=1);

namespace App\errors;

use App\Core\Error\AbstractError;

class MedicalFile extends AbstractError
{
    public function errors(): array
    {
        return [
            [
                'code' => 'MED-0001',
                'message' => 'Medical file not found',
                'detail' => 'Can\'t find the medical file specified'
            ],
        ];
    }
}
