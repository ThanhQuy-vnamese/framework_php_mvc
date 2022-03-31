<?php

declare(strict_types=1);

namespace App\query_services;

use App\domain\factory\CalendarForViewFactory;

interface CalendarQueryServiceInterface
{
    /**
     * @param int $user_id
     * @return array|CalendarForViewFactory[]
     */
    public function getAllEventByUserId(int $user_id): array;
}
