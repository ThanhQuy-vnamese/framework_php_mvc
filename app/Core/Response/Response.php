<?php

namespace App\Core\Response;

use const App\Core\Helper\PREFIX_PUBLIC;

class Response
{
    public function setStatusCode(int $status)
    {
        http_response_code($status);
    }

    public function redirect(string $url, array $params = [])
    {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestUrl, PREFIX_PUBLIC);
        if ($pos !== false) {
            $pathPublic = substr($requestUrl, 0,$pos + strlen('/public'));
            $pathPublic = $pathPublic . $url;
        } else {
            $pathPublic = $url;
        }

        if (!empty($params)) {
            $linkParam = '';
            $lastItem = end($params);
            foreach ($params as $key => $value) {
                $linkParam .= $key . '=' . $value;
                if ($value !== $lastItem) {
                    $linkParam .= '&';
                }
            }
            $pathPublic .= '?' . $linkParam;
        }

        header('location:' . $pathPublic);
    }

    public function json_encode($data)
    {
        return json_encode($data);
    }
}
