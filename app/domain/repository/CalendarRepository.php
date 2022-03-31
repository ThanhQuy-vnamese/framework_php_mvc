<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\Calendar;
use App\domain\entity\CalendarAttendees;

class CalendarRepository implements CalendarRepositoryInterface
{
    private Query $query;
    /**
     * @var mixed
     */
    private $db;

    public function __construct()
    {
        $this->query = new Query();
        $this->db = $this->query->getDatabase()->mysql;
    }

    public function addCalendar(Calendar $calendar): int
    {
        $sql = "INSERT INTO medical_appointments (subject, full_name, date_start, date_end, time_start, time_end, description, user_id)
                VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', %s)";
        $query = sprintf(
            $sql,
            $calendar->getSubject(),
            $calendar->getFullName(),
            $calendar->getDateStart(),
            $calendar->getDateEnd(),
            $calendar->getTimeStart(),
            $calendar->getTimeEnd(),
            $calendar->getDescription(),
            $calendar->getUserId()
        );
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }

    public function addCalendarAttendees(CalendarAttendees $calendar_attendees): int
    {
        $sql = "INSERT INTO medical_appointment_attendees (id_appointment, user_id)
                VALUES (%s, %s)";
        $query = sprintf($sql, $calendar_attendees->getCalendarId(), $calendar_attendees->getUserId());
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }
}
