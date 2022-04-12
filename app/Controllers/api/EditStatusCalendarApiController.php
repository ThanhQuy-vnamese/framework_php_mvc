<?php

declare(strict_types=1);

namespace App\Controllers\api;

use App\Core\Controller\BaseController;

class EditStatusCalendarApiController extends BaseController
{
    public function edit() {
        $status = $this->request->input->getInt('status');
        $calendar_id = $this->request->input->getInt('calendar_id');
    }
}
