<?php

declare(strict_types=1);

namespace App\dto;

class ContactInformationForDetailDto
{
    /**
     * @var ContactInformationDto[]
     */
    private array $contactInformationList;
    private array $contactInformation;
    private array $contactReply;

    /**
     * @param ContactInformationDto[] $contactInformationList
     */
    public function __construct(array $contactInformationList, array $contactInformation, array $contactReply)
    {
        $this->contactInformationList = $contactInformationList;
        $this->contactInformation = $contactInformation;
        $this->contactReply = $contactReply;
    }

    /**
     * @return ContactInformationDto[]
     */
    public function getContactInformationList(): array
    {
        return $this->contactInformationList;
    }

    public function getContactInformation(): array
    {
        return $this->contactInformation;
    }

    public function getContactReply(): array
    {
        return $this->contactReply;
    }
}
