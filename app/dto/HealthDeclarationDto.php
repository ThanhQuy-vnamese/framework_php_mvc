<?php

declare(strict_types=1);

namespace App\dto;

class HealthDeclarationDto
{
    private ?int $id;
    private string $full_name;
    private string $gender;
    private string $birthday;
    private string $identity_card;
    private string $phone;
    private string $email;
    private string $way;
    private string $wards;
    private string $district;
    private string $province;
    private string $health_declaration;
    private int $user_id;
    private ?string $created_at;

    public function __construct(
        ?int $id,
        string $full_name,
        string $gender,
        string $birthday,
        string $identity_card,
        string $email,
        string $phone,
        string $way,
        string $district,
        string $wards,
        string $province,
        string $health_declaration,
        int $user_id,
        string $created_at = null
    ) {
        $this->id = $id;
        $this->full_name = $full_name;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->identity_card = $identity_card;
        $this->phone = $phone;
        $this->email = $email;
        $this->way = $way;
        $this->district = $district;
        $this->wards = $wards;
        $this->province = $province;
        $this->health_declaration = $health_declaration;
        $this->user_id = $user_id;
        $this->created_at = $created_at;
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
    public function getFullName(): string
    {
        return $this->full_name;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @return string
     */
    public function getIdentityCard(): string
    {
        return $this->identity_card;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getWay(): string
    {
        return $this->way;
    }

    /**
     * @return string
     */
    public function getWards(): string
    {
        return $this->wards;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * @return string
     */
    public function getHealthDeclaration(): string
    {
        return $this->health_declaration;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }
}
