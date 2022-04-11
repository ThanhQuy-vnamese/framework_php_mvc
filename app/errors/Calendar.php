<?php

declare(strict_types=1);

namespace App\errors;

class Calendar
{
    public function getError($code): array
    {
        foreach (self::errors as $error) {
            if ($error['code'] === $code) {
                return $error;
            }
        }
        return [];
    }

    const errors = [
        [
            'code' => 'CAL-0001',
            'message' => 'The full name empty',
            'detail' => 'The full name is required'
        ],
        [
            'code' => 'CAL-0002',
            'message' => 'The calendar is conflict',
            'detail' => 'The calendar is conflict. Please check the date'
        ],
        [
            'code' => 'CAL-0003',
            'message' => 'The doctor is empty',
            'detail' => 'Please chose a doctor'
        ],
        [
            'code' => 'CAL-0004',
            'message' => 'The doctor is invalid',
            'detail' => 'The doctor specify invalid. Please choose an other doctor'
        ],
        [
            'code' => 'CAL-0005',
            'message' => 'Add the calendar fail',
            'detail' => 'Check information and re-add the calendar'
        ],
        [
            'code' => 'CAL-0006',
            'message' => 'Update attendees fail',
            'detail' => 'Re-check attendees and doctor'
        ],
        [
            'code' => 'CAL-0007',
            'message' => 'Cannot find the calendar',
            'detail' => 'Can not find the calendar specified or you don\'nt have permission on this calendar'
        ],
    ];
}
