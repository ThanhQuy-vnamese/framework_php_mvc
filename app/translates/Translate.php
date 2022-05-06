<?php

declare(strict_types=1);

namespace App\translates;

class Translate
{
    public function getLanguage(string $key = ''): string
    {
        $languages = array_merge(LANGUAGES, COMMON_LANGUAGES);
        return $languages[$key] ?? '';
    }
}
