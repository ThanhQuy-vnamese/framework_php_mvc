<?php

declare(strict_types=1);

namespace App\use_case;

use App\domain\entity\Calendar;
use App\domain\repository\CalendarRepository;
use App\domain\repository\CalendarRepositoryInterface;

class AddCalendarUseCase
{
    private CalendarRepositoryInterface $calendarRepository;

    public function __construct()
    {
        $this->calendarRepository = new CalendarRepository();
    }

    public function execute(
        string $subject,
        string $full_name,
        string $date,
        string $time_start,
        string $time_end,
        string $description,
        int $doctor_id
    ): int {
        $calendar = $this->buildCalendar($subject, $full_name, $date, $time_start, $time_end, $description, $doctor_id);
        return $this->calendarRepository->addCalendar($calendar);
    }

    private function buildCalendar(
        string $subject,
        string $full_name,
        string $date,
        string $time_start,
        string $time_end,
        string $description,
        int $doctor_id
    ): Calendar {
        return new Calendar(
            null,
            $subject,
            $full_name,
            $date . ' ' . $time_start,
            $date . ' ' . $time_end,
            $date . ' ' . $time_start,
            $date . ' ' . $time_end,
            $description,
            $doctor_id
        );
    }
}
