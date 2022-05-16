<?php

declare(strict_types=1);

namespace App\query_services;

use App\Core\Database\Query;
use App\domain\factory\UserFactory;

class UserQueryService implements UserQueryServiceInterface
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

    public function getTotalUser(): int
    {
        $query = "SELECT count(*) AS total_users FROM medical_users;";
        $result = $this->db->query($query);
        $row = $result->fetch_assoc();
        return (int)$row['total_users'];
    }

    public function getAllUser(): array {
        $query = "SELECT U.id AS id, first_name, last_name, U.email, UP.phone, role FROM medical_users AS U INNER JOIN medical_user_profiles AS UP
                ON U.id = UP.user_id";
        $result = $this->db->query($query);
        $data = [];

        if ($result->num_rows === 0) {
            return $data;
        }

        while ($row = $result->fetch_assoc()) {
            $data[(int)$row['id']] = new UserFactory(
                (int)$row['id'],
                $row['first_name'],
                $row['last_name'],
                (int)$row['role'],
                $row['email'],
                $row['phone']
            );
        }

        return $data;
    }
}
