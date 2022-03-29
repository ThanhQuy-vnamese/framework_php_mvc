<?php
declare(strict_types=1);

namespace App\query_services;

interface BlogListQueryServiceInterface
{
    public function getBlogList(): array;
}
