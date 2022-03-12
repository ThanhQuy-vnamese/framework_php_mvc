<?php
declare(strict_types=1);

namespace App\dto;

class BlogDto
{
    private string $id;
    private string $title;
    private string $created_at;

    public function __construct(string $id, string $title, string $created_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->created_at = $created_at;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCreatedTime(): string
    {
        return $this->created_at;
    }
}
