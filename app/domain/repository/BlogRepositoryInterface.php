<?php
declare(strict_types=1);

namespace App\domain\repository;

use App\domain\entity\Blog;

interface BlogRepositoryInterface
{
    public function addBlog(Blog $blog): int;

    public function addBlogWithImage(Blog $blog): int;

    public function addBlogWithoutImage(Blog $blog): int;
}
