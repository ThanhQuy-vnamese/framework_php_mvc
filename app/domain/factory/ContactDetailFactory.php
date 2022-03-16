<?php

declare(strict_types=1);

namespace App\domain\factory;

use App\dto\ContactInformationDto;
use App\dto\ContactInformationForDetailDto;

class ContactDetailFactory
{
    /**
     * @var ContactInformationDto[]
     */
    private array $contactInformation;

    /**
     * @var ContactInformationDto[]
     */
    private array $contactReply;

    public function __construct(array $contact_information, array $contact_reply)
    {
        $this->contactInformation = $contact_information;
        $this->contactReply = $contact_reply;
    }

    public function getDetailList()
    {
    }

    public function contactInformation(): array
    {
        return $this->contactInformation;
    }

    public function getContactReply(): array
    {
        return $this->contactReply;
    }

    public function getContactForViewDetail(): ContactInformationForDetailDto
    {
        return new ContactInformationForDetailDto(
            $this->getOrderContact(),
            $this->contactInformation,
            $this->contactReply
        );
    }

    public function getOrderContact(): array
    {
        $temp = [];
        foreach ($this->contactInformation as $contactInfo) {
            $temp[] = $contactInfo;
            if (array_key_exists($contactInfo->getId(), $this->contactReply)) {
                $temp[] = $this->contactReply[$contactInfo->getId()];
            }
        }

        return $temp;
    }
}
