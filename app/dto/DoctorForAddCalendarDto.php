<?php

declare(strict_types=1);

namespace App\dto;

class DoctorForAddCalendarDto
{
    private ?int $id;
    private string $name;
    private string $role;

    public function __construct(?int $id, string $name, string $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
}
