<?php

declare(strict_types=1);

namespace App\dto;

class ContactInformationDto
{
    private string $email;
    private string $phone;
    private string $title;
    private string $message;
    private ?string $full_name;
    private int $id;

    public function __construct(
        int $id,
        string $email,
        string $phone,
        string $title,
        string $message,
        ?string $full_name
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->phone = $phone;
        $this->title = $title;
        $this->message = $message;
        $this->full_name = $full_name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->full_name;
    }
}
