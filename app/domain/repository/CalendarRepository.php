<?php

declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\Calendar;
use App\domain\entity\CalendarAttendees;
use App\domain\entity\User;

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

    public function getNumsCalendarByStartTimeAndEndTime(Calendar $calendar): int
    {
        $sql = "SELECT COUNT(*) AS count FROM `medical_appointments` 
                WHERE (date_start >= '%s' AND date_start < '%s') 
                   OR (date_start <> date_end AND date_end > '%s' AND date_end <= '%s') 
                   OR (date_start < '%s' AND date_end > '%s')";
        $query = sprintf(
            $sql,
            $calendar->getDateStart(),
            $calendar->getDateEnd(),
            $calendar->getDateStart(),
            $calendar->getDateEnd(),
            $calendar->getDateStart(),
            $calendar->getDateEnd()
        );
        $result = $this->db->query($query);
        $row = $result->fetch_assoc();

        return (int)$row['count'];
    }

    public function findUserByUserIdAndRole(int $user_id, int $role): User
    {
        $sql = "SELECT * FROM medical_users WHERE id = %s AND role = %s";
        $query = sprintf($sql, $user_id, $role);
        $result = $this->db->query($query);
        if ($result->num_rows === 0) {
            return new User(null);
        }
        $row = $result->fetch_assoc();
        return new User((int)$row['id'], $row['email'], $row['password'], (int)$row['status'], (int)$row['role']);
    }

    public function editStatusCalendar(Calendar $calendar): bool
    {
        $sql = "UPDATE medical_appointments SET status = %s, note = '%s' WHERE id = %s";
        $query = sprintf($sql, $calendar->getStatus(), $calendar->getNote(), $calendar->getId());
        if ($this->db->query($query)) {
            return true;
        }
        return false;
    }
}
