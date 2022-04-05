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

    /**
     * @param int $id
     * @return CalendarInfoForViewDetailDto|array
     */
    public function execute(int $id)
    {
        $calendar = $this->calendarQueryService->getCalendarById(1, $id);
        if (is_null($calendar->getCalendarForView()->getId())) {
            return [];
        }
        $attendees = $this->calendarQueryService->getAllAttendeesByCalendarId($calendar->getCalendarForView()->getId());
        return new CalendarInfoForViewDetailDto($calendar->getCalendarForView(), $attendees);
    }
}
