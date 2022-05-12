<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\entity\Calendar;
use App\domain\repository\CalendarRepository;
use App\domain\repository\CalendarRepositoryInterface;
use App\translates\Translate;

class EditStatusCalendarUseCase
{
    private CalendarRepositoryInterface $calendarRepository;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->calendarRepository = new CalendarRepository();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(int $calendar_id, int $status, string $note): bool
    {
        $calendar = $this->buildCalendar($calendar_id, $status, $note);
        $isSuccess = $this->calendarRepository->editStatusCalendar($calendar);
        if (!$isSuccess) {
            $this->session->setFlash('errorUpdateStatus', $this->translate->getLanguage('change_status_fail'));
            return false;
        }
        $this->session->setFlash('successUpdateStatus', $this->translate->getLanguage('change_status_success'));
        return false;
    }

    private function buildCalendar(int $calendar_id, int $status, string $note): Calendar
    {
        return new Calendar($calendar_id, '', '', '', '', '', '', '', 0, $status, $note);
    }
}
