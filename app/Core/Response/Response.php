<?php

namespace App\Core\Response;

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

    public function json_encode($data) {
        return json_encode($data);
    }
}
