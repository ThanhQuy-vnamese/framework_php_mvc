<?php
namespace App\Core;
class Response
{
    public function setStatusCode($status) {
        http_response_code($status);
    }
}
