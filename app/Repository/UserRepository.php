<?php
declare(strict_types=1);
namespace App\Repository;

use App\Model\User;

class UserRepository
{
    public function getAllUsers(): array {
        $user = new User();
        $users = $user->getAllUsers();
        return $this->convertUser($users);
    }

    private function convertUser(array $users): array {
        $data = [];
        foreach ($users as $user) {
            $temp = [];
            $temp['id'] = $user['id'];
            $temp['full_name'] = $user['first_name'] .' '. $user['last_name'];
            $temp['email'] = $user['email'];
            $temp['birthday'] = $user['birthday'];
            $temp['role'] = $this->getRole($user['role']);
            $temp['phone'] = $user['phone'];
            $temp['status'] = $this->getStatus($user['status']);
            $data[] = $temp;
        }

        return $data;
    }

    private function getRole(string $role): string {
        if ($role === '1') {
            return 'Administrator';
        }
        if ($role === '2') {
            return 'Doctor';
        } else {
            return 'User';
        }
    }

    private function getStatus($status): array {
        if ($status == '1') {
            return ['code' => '1', 'info' => 'Active'];
        }
        return ['code' => '0', 'info' => 'Inactive'];
    }
}