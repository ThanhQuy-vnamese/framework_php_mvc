<?php

declare(strict_types=1);

namespace App\use_case;

use App\domain\factory\DoctorForAddCalendarFactory;
use App\domain\factory\UserFactory;
use App\query_services\GetDoctorQueryService;
use App\query_services\GetDoctorQueryServiceInterface;
use App\query_services\UserQueryService;
use App\query_services\UserQueryServiceInterface;

class GetUserCase
{
    private UserQueryServiceInterface $userQueryService;

    public function __construct()
    {
        $this->userQueryService = new UserQueryService();
    }

    /**
     * @return array|UserFactory[]
     */
    public function execute(): array
    {
        return $this->userQueryService->getAllUser();
    }
}
