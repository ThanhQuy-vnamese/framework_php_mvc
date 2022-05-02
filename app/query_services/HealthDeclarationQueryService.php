<?php

declare(strict_types=1);

namespace App\query_services;

use App\Core\Database\Query;
use App\dto\HealthDeclarationDto;

class HealthDeclarationQueryService implements HealthDeclarationQueryServiceInterface
{
    public const LIMIT = 10;

    /**
     * @var false|\mysqli|null
     */
    private $db;

    public function __construct()
    {
        $query = new Query();
        $this->db = $query->getDatabase()->mysql;
    }

    public function getHealthDeclarationById(int $id): HealthDeclarationDto
    {
        $sql = "SELECT * FROM medical_health_declaration WHERE id = %s";
        $query = sprintf($sql, $id);
        $result = $this->db->query($query);
        if ($result->num_rows === 0) {
            return new HealthDeclarationDto(
                null,
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                0
            );
        }
        $row = $result->fetch_assoc();
        return new HealthDeclarationDto(
            (int)$row['id'],
            $row['full_name'],
            $row['gender'],
            $row['birthday'],
            $row['identity_card'],
            $row['email'],
            $row['phone'],
            $row['way'],
            $row['district'],
            $row['wards'],
            $row['province'],
            $row['health_declaration'],
            (int)$row['user_id'],
            $row['created_at']
        );
    }

    /**
     * @return HealthDeclarationDto[]
     */
    public function getAllHealthDeclarationWithPagination(int $offset): array
    {
        $query = "SELECT * FROM `medical_health_declaration` LIMIT %s, %s";
        $query = sprintf($query, $offset, self::LIMIT);
        $result = $this->db->query($query);
        $data = [];
        if ($result->num_rows === 0) {
            return $data;
        }

        while ($row = $result->fetch_assoc()) {
            $data[(int)$row['id']] = new HealthDeclarationDto(
                (int)$row['id'],
                $row['full_name'],
                $row['gender'],
                $row['birthday'],
                $row['identity_card'],
                $row['email'],
                $row['phone'],
                $row['way'],
                $row['district'],
                $row['wards'],
                $row['province'],
                $row['health_declaration'],
                (int)$row['user_id'],
                $row['created_at']
            );
        }
        return $data;
    }

    public function getTotalHealthDeclaration(): int
    {
        $query = "SELECT count(*) AS total_health_declarations FROM medical_health_declaration;";
        $result = $this->db->query($query);
        $row = $result->fetch_assoc();
        return (int)$row['total_health_declarations'];
    }
}
