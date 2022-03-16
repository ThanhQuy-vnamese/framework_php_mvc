<?php

declare(strict_types=1);

namespace App\query_services;

use App\Core\Database\Query;
use App\domain\factory\ContactDetailFactory;
use App\dto\ContactInformationDto;

class ContactDetailQueryService
{
    /**
     * @var false|\mysqli|null
     */
    private $db;

    public function __construct()
    {
        $query = new Query();
        $this->db = $query->getDatabase()->mysql;
    }

    public function getContactForViewDetail(string $email)
    {
        $contactInformation = $this->getContactInformation($email);
        $contactReply = $this->getContactReply($email);

        return new ContactDetailFactory($contactInformation, $contactReply);
    }

    public function getContactInformation(string $email)
    {
        $sql = "SELECT * FROM medical_contact_infomation WHERE email='%s' ORDER BY created_at ASC;";
        $query = sprintf($sql, $email);
        $result = $this->db->query($query);
        if ($result->num_rows === 0) {
            return [];
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $data[$row['id']] = new ContactInformationDto(
                (int)$id,
                $row['email'],
                $row['phone'],
                '',
                $row['message'],
                $row['full_name'] ?? ''
            );
        }

        return $data;
    }

    public function getContactReply(string $email)
    {
        $sql = "SELECT * FROM `medical_contact_reply` WHERE contact_id IN (SELECT id FROM medical_contact_infomation WHERE email='hieu@mail.com')";
        $query = sprintf($sql, $email);
        $result = $this->db->query($query);
        if ($result->num_rows === 0) {
            return [];
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $data[$row['contact_id']] = new ContactInformationDto(
                (int)$id,
                $row['email'],
                $row['phone'],
                '',
                $row['message'],
                $row['full_name'] ?? ''
            );
        }

        return $data;
    }
}
