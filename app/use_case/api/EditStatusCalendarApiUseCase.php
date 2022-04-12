<?php

declare(strict_types=1);

namespace App\use_case\api;

use App\domain\entity\Calendar;
use App\domain\factory\CalendarForViewFactory;
use App\domain\repository\CalendarRepository;
use App\domain\repository\CalendarRepositoryInterface;
use App\errors\Calendar as CalendarError;
use App\legacy\Auth;
use App\query_services\CalendarQueryService;
use App\query_services\CalendarQueryServiceInterface;

class EditStatusCalendarApiUseCase
{
    private CalendarRepositoryInterface $calendarRepository;
    private CalendarError $calendarError;
    private CalendarQueryServiceInterface $calendarApiQueryService;
    private Auth $auth;

    public function __construct()
    {
        $this->calendarRepository = new CalendarRepository();
        $this->calendarError = new CalendarError();
        $this->calendarApiQueryService = new CalendarQueryService();
        $this->auth = new Auth();
    }

    public function execute(int $calendar_id, int $status, string $note): array
    {
        $calendar = $this->buildCalendar($calendar_id, $status, $note);
        $isSuccess = $this->calendarRepository->editStatusCalendar($calendar);
        if (!$isSuccess) {
            return $this->calendarError->getError('CAL-0009');
        }
        $calendar_after_edit = $this->calendarApiQueryService->getCalendarById(
            $this->auth->getUser()->getId(),
            $calendar_id
        );
        return $this->createResponse($calendar_after_edit);
    }

    private function createResponse(CalendarForViewFactory $calendars): array
    {
        return [
            'id' => $calendars->getCalendarForView()->getId(),
            'subject' => $calendars->getCalendarForView()->getSubject(),
            'full_name' => $calendars->getCalendarForView()->getFullName(),
            'date_start' => $calendars->getCalendarForView()->getDateStart(),
            'date_end' => $calendars->getCalendarForView()->getDateEnd(),
            'description' => $calendars->getCalendarForView()->getDescription(),
            'status' => $calendars->getCalendarForView()->getStatus(),
        ];
    }

    private function buildCalendar(int $calendar_id, int $status, string $note): Calendar
    {
        return new Calendar($calendar_id, '', '', '', '', '', '', '', 0, $status, $note);
    }
}
