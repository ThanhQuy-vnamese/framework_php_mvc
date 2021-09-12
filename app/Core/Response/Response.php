<?php

namespace App\Core\Response;

use const App\Core\Helper\PREFIX_PUBLIC;

class Response
{
    public function setStatusCode(int $status)
    {
        http_response_code($status);
    }

    public function redirect(string $url)
    {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestUrl, PREFIX_PUBLIC);
        if ($pos !== false) {
            $pathPublic = $requestUrl . $url;
        } else {
            $pathPublic = $url;
        }

        header('location: ' . $pathPublic);
    }

    public function json_encode($data)
    {
        return json_encode($data);
    }
}
