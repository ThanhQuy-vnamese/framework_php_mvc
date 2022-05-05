<?php

declare(strict_types=1);

namespace App\translates;

class Translate
{
    public function getLanguage(string $key = ''): string
    {
        return LANGUAGES[$key] ?? '';
    }
}
