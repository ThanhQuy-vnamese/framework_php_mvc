<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\GetCalendarUseCase;
use App\domain\factory\CalendarForViewFactory;

class GetCalendarController extends BaseController
{
    public function getCalendar()
    {
        $user_id = 1;
        $user_case = new GetCalendarUseCase();
        $calendars = $user_case->execute($user_id);
        return $this->response->json_encode($this->createResponseData($calendars));
    }

    /**
     * @param array|CalendarForViewFactory[] $calendars
     */
    private function createResponseData(array $calendars): array
    {
        $data = [];
        foreach ($calendars as $calendar) {
            $temp = [];
            $temp['title'] = $calendar->getCalendarForView()->getSubject();
            $temp['start'] = $calendar->getCalendarForView()->getTimeStart();
            $temp['end'] = $calendar->getCalendarForView()->getTimeEnd();
            $temp['description'] = $calendar->getCalendarForView()->getDescription();
            $temp['backgroundColor'] = $calendar->getCalendarForView()->getBackgroundColor();
            $data[] = $temp;
        }
        return $data;
    }
}
