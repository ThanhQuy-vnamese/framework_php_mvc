<?php

declare(strict_types=1);

namespace App\query_services;

use App\Core\Database\Query;
use App\dto\ContactDto;
use App\dto\ContactListDto;

class ContactListQueryService implements ContactListQueryServiceInterface
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

    public function getContactForListView(): ContactListDto
    {
        $query = "SELECT * FROM `medical_contact_infomation` GROUP BY email ORDER BY `created_at` DESC;";
        $result = $this->db->query($query);
        if ($result->num_rows === 0) {
            return new ContactListDto([]);
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[$row['id']] = new ContactDto((int)$row['id'], $row['email'], $row['phone'], null, null, $row['full_name']);
        }

        return new ContactListDto($data);
    }
}
