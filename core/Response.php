<?php

namespace App\Core;

class Response
{
    public function setStatusCode(int $status)
    {
        http_response_code($status);
    }

    public function redirect(string $url)
    {
        header('location: ' . $url);
    }
}
