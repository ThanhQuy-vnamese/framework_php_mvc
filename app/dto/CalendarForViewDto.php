<?php

declare(strict_types=1);

namespace App\dto;

class CalendarForViewDto
{
    private ?int $id;
    private string $subject;
    private string $timeStart;
    private string $timeEnd;
    private int $status;
    private string $description;
    private string $backgroundColor;
    private string $fullName;
    private int $userId;
    private int $calendarId;
    private int $attendeesId;

    public function __construct(
        ?int $id,
        string $subject,
        string $full_name,
        string $time_start,
        string $time_end,
        string $description,
        int $status,
        int $user_id,
        int $calendar_id,
        int $attendees_id,
        string $background_color
    ) {
        $this->id = $id;
        $this->subject = $subject;
        $this->fullName = $full_name;
        $this->timeStart = $time_start;
        $this->timeEnd = $time_end;
        $this->description = $description;
        $this->status = $status;
        $this->userId = $user_id;
        $this->calendarId = $calendar_id;
        $this->attendeesId = $attendees_id;
        $this->backgroundColor = $background_color;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getTimeStart(): string
    {
        return $this->timeStart;
    }

    /**
     * @return string
     */
    public function getTimeEnd(): string
    {
        return $this->timeEnd;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getCalendarId(): int
    {
        return $this->calendarId;
    }

    /**
     * @return int
     */
    public function getAttendeesId(): int
    {
        return $this->attendeesId;
    }

    /**
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }
}
