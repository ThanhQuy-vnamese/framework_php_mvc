<?php

declare(strict_types=1);

namespace App\dto;

class MedicineTypeListDto
{
    private int $id;
    private string $name;
    private ?string $description;

    public function __construct(int $id, string $name, string $description = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getId(): int
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
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

}
