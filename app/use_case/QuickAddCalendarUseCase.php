<?php

declare(strict_types=1);

namespace App\use_case;

use App\domain\entity\Calendar;
use App\domain\entity\CalendarAttendees;
use App\domain\repository\CalendarRepository;
use App\domain\repository\CalendarRepositoryInterface;
use App\legacy\Auth;
use App\translates\Translate;

class QuickAddCalendarUseCase
{
    const TYPE_CONFLICT = 1;
    const TYPE_DOCTOR_EMPTY = 2;
    const TYPE_DOCTOR_NOT_EXIST = 3;
    const TYPE_FULL_NAME_EMPTY = 4;
    const TYPE_TIME_START = 5;
    const TYPE_TIME_END = 6;
    const DEFAULT_STATUS = 0;

    private CalendarRepositoryInterface $calendarRepository;
    private Auth $auth;
    private Translate $translate;

    public function __construct()
    {
        $this->calendarRepository = new CalendarRepository();
        $this->auth = new Auth();
        $this->translate = new Translate();
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
        $calendar = $this->buildCalendar(
            $subject,
            $full_name,
            $date,
            $time_start,
            $time_end,
            $description,
            $this->auth->getUser()->getId()
        );
        if (empty($full_name)) {
            return $this->buildError(true, self::TYPE_FULL_NAME_EMPTY, $this->translate->getLanguage('enter_full_name'));
        }

        if ($this->calendarRepository->getNumsCalendarByStartTimeAndEndTime($calendar) > 0) {
            return $this->buildError(true, self::TYPE_CONFLICT, $this->translate->getLanguage('conflict_calendar'));
        }

        if (empty($doctor_id)) {
            return $this->buildError(true, self::TYPE_DOCTOR_EMPTY, $this->translate->getLanguage('choose_doctor'));
        }

        if (is_null($this->calendarRepository->findUserByUserIdAndRole($doctor_id, 2)->getId())) {
            return $this->buildError(true, self::TYPE_DOCTOR_NOT_EXIST, $this->translate->getLanguage('valid_doctor'));
        }

        $error_time = $this->validateTime($time_start, $time_end);
        if (!empty($error_time)) {
            return $error_time;
        }

        $calendar_id = $this->calendarRepository->addCalendar($calendar);
        if (!$calendar_id) {
            return 0;
        }

        $user_created = $this->buildCalendarAttendees($calendar_id, $this->auth->getUser()->getId());
        $user_attendees = $this->buildCalendarAttendees($calendar_id, $doctor_id);
        $this->calendarRepository->addCalendarAttendees($user_created);
        $this->calendarRepository->addCalendarAttendees($user_attendees);

        return $this->buildError(false);
    }

    private function validateTime(string $time_start, string $time_end): array
    {
        $hour_start = explode(':', $time_start)[0];
        $hour_end = explode(':', $time_end)[0];
        $error = [];
        if ((int)$hour_start < 6 || (int)$hour_start > 18) {
            $error = $this->buildError(true, self::TYPE_TIME_START, $this->translate->getLanguage('time_start_less'));
        }

        if ((int)$hour_end > 18 || (int)$hour_end < 6) {
            $error = $this->buildError(true, self::TYPE_TIME_END, $this->translate->getLanguage('time_end_over'));
        }
        return $error;
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
            $user_id,
            self::DEFAULT_STATUS
        );
    }

    private function buildCalendarAttendees(int $calendar_id, int $user_id): CalendarAttendees
    {
        return new CalendarAttendees(null, $calendar_id, $user_id);
    }

    private function buildError(bool $has_error, int $error_type = 0, string $message = ''): array
    {
        $return_values = ['error' => ['hasError' => false]];
        if (!$has_error) {
            return $return_values;
        }
        $return_values['error']['hasError'] = $has_error;
        $return_values['error']['type'] = $error_type;
        $return_values['error']['message'] = $message;
        return $return_values;
    }
}
