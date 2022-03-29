<?php
declare(strict_types=1);

namespace App\query_services;

use App\dto\ContactListDto;

interface ContactListQueryServiceInterface
{
    public function getContactForListView(): ContactListDto;
}
