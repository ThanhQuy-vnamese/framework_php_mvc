<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\HealthDeclaration;

class HealthDeclarationRepository implements HealthDeclarationRepositoryInterface
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

    public function addHealthDeclaration(HealthDeclaration $health_declaration): int
    {
        $sql = "INSERT INTO `medical_health_declaration`(`full_name`, `gender`, `birthday`, `identity_card`, `email`, `phone`, `way`, `district`, `wards`, `province`, `health_declaration`, `user_id`)
                VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %s)";
        $query = sprintf(
            $sql,
            $health_declaration->getFullName(),
            $health_declaration->getGender(),
            $health_declaration->getBirthday(),
            $health_declaration->getIdentityCard(),
            $health_declaration->getEmail(),
            $health_declaration->getPhone(),
            $health_declaration->getWay(),
            $health_declaration->getDistrict(),
            $health_declaration->getWards(),
            $health_declaration->getProvince(),
            $health_declaration->getHealthDeclaration(),
            $health_declaration->getUserId()
        );
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }
}
