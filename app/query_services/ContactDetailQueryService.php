<?php

declare(strict_types=1);

namespace App\query_services;

use App\Core\Database\Query;
use App\domain\factory\ContactDetailFactory;
use App\dto\ContactDto;

class ContactDetailQueryService implements ContactDetailQueryServiceInterface
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

    public function getContactForViewDetail(string $email): ContactDetailFactory
    {
        $contactInformation = $this->getContactInformation($email);
        $contactReply = $this->getContactReply($email);

        return new ContactDetailFactory($contactInformation, $contactReply);
    }

    /**
     * @param string $email
     * @return ContactDto[]
     */
    public function getContactInformation(string $email): array
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
            $data[$row['id']] = new ContactDto(
                (int)$id,
                $row['email'],
                $row['phone'],
                '',
                $row['message'],
                $row['full_name'] ?? '',
                null,
                $row['created_at']
            );
        }

        return $data;
    }

    /**
     * @param string $email
     * @return ContactDto[]
     */
    public function getContactReply(string $email): array
    {
        $sql = "SELECT * FROM `medical_contact_reply` WHERE contact_id IN (SELECT id FROM medical_contact_infomation WHERE email='%s')";
        $query = sprintf($sql, $email);
        $result = $this->db->query($query);
        if ($result->num_rows === 0) {
            return [];
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $data[$row['contact_id']] = new ContactDto(
                (int)$id,
                $row['email'],
                $row['phone'],
                '',
                $row['message'],
                $row['full_name'] ?? '',
                (int)$row['contact_id'],
                $row['created_at']
            );
        }

        return $data;
    }
}
