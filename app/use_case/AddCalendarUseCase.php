<?php

declare(strict_types=1);

namespace App\use_case;

use App\domain\entity\Calendar;
use App\domain\entity\CalendarAttendees;
use App\domain\repository\CalendarRepository;
use App\domain\repository\CalendarRepositoryInterface;

class AddCalendarUseCase
{
    const TYPE_CONFLICT = 1;

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
    ) {
        $return_values = ['error' => false];

        $calendar = $this->buildCalendar($subject, $full_name, $date, $time_start, $time_end, $description, 1);
        if ($this->calendarRepository->getNumsCalendarByStartTimeAndEndTime($calendar) > 0) {
            $return_values['errorType'] = self::TYPE_CONFLICT;
            $return_values['error'] = true;
            return $return_values;
        }

        $calendar_id = $this->calendarRepository->addCalendar($calendar);
        if (!$calendar_id) {
            return 0;
        }

        $user_created = $this->buildCalendarAttendees($calendar_id, 1);
        $user_attendees = $this->buildCalendarAttendees($calendar_id, $doctor_id);
        $this->calendarRepository->addCalendarAttendees($user_created);
        $this->calendarRepository->addCalendarAttendees($user_attendees);

        return $calendar_id;
    }

    private function buildCalendar(
        string $subject,
        string $full_name,
        string $date,
        string $time_start,
        string $time_end,
        string $description,
        int $user_id
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
            $user_id
        );
    }

    private function buildCalendarAttendees(int $calendar_id, int $user_id): CalendarAttendees
    {
        return new CalendarAttendees(null, $calendar_id, $user_id);
    }
}
