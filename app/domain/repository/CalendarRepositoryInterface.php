<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\domain\entity\Calendar;

interface CalendarRepositoryInterface
{
    public function addCalendar(Calendar $calendar): int;
}