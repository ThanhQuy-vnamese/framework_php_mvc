<?php

declare(strict_types=1);

namespace App\domain\factory;

use App\dto\DoctorForAddCalendarDto;

class DoctorForAddCalendarFactory
{
    private ?int $id;
    private int $role;
    private string $firstName;
    private string $lastName;

    public function __construct(?int $id, string $first_name, string $last_name, int $role)
    {
        $this->id = $id;
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->role = $role;
    }

    public function getDoctorForAddCalendarDto(): DoctorForAddCalendarDto
    {
        return new DoctorForAddCalendarDto($this->id, $this->convertFullName(), $this->convertRole());
    }

    private function convertFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    private function convertRole(): string
    {
        return $this->role === 2 ? 'doctor' : 'user';
    }
}
