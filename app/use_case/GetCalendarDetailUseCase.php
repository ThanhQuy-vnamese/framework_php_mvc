<?php

declare(strict_types=1);

namespace App\use_case;

use App\dto\CalendarInfoForViewDetailDto;
use App\query_services\CalendarQueryService;
use App\query_services\CalendarQueryServiceInterface;

class GetCalendarDetailUseCase
{
    private CalendarQueryServiceInterface $calendarQueryService;

    public function __construct()
    {
        $this->calendarQueryService = new CalendarQueryService();
    }

    public function execute(int $id): CalendarInfoForViewDetailDto
    {
        $calendar = $this->calendarQueryService->getCalendarById(1, $id);
        $attendees = $this->calendarQueryService->getAllAttendeesByCalendarId($calendar->getCalendarForView()->getId());
        return new CalendarInfoForViewDetailDto($calendar->getCalendarForView(), $attendees);
    }
}
