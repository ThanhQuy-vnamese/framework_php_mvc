<?php

declare(strict_types=1);

namespace App\use_case\api;

use App\domain\entity\Calendar;
use App\domain\repository\CalendarRepository;
use App\domain\repository\CalendarRepositoryInterface;
use App\errors\Calendar as CalendarError;
use App\query_services\CalendarQueryService;

class EditCalendarApiUseCase
{
    private CalendarRepositoryInterface $calendarRepository;
    private CalendarError $calendarError;
    private CalendarQueryService $calendarQueryService;

    public function __construct()
    {
        $this->calendarRepository = new CalendarRepository();
        $this->calendarError = new CalendarError();
        $this->calendarQueryService = new CalendarQueryService();
    }

    public function execute(
        int $calendar_id,
        string $subject,
        string $full_name,
        string $date,
        string $time_start,
        string $time_end,
        string $description,
        int $user_id,
        int $doctor_id
    ) {
        $calendar = $this->buildCalendar(
            $calendar_id,
            $subject,
            $full_name,
            $date,
            $time_start,
            $time_end,
            $description,
            $user_id
        );

        if ($this->calendarRepository->getNumsCalendarByStartTimeAndEndTimeExceptCurrentCalendar($calendar) > 0) {
            return $this->calendarError->getError('CAL-0001');
        }

        if (empty($current_doctor_id)) {
            return $this->calendarError->getError('CAL-0002');
        }

        if (is_null($this->calendarRepository->findUserByUserIdAndRole($doctor_id, 2)->getId())) {
            return $this->calendarError->getError('CAL-0003');
        }
        $isSuccess = $this->calendarRepository->editCalendar($calendar);

        if (!$isSuccess) {
            return $this->calendarError->getError('CAL-0004');
        }

    }

    private function buildCalendar(
        int $calendar_id,
        string $subject,
        string $full_name,
        string $date,
        string $time_start,
        string $time_end,
        string $description,
        int $user_id
    ): Calendar {
        return new Calendar(
            $calendar_id,
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
}
