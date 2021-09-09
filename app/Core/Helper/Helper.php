<?php

namespace App\Core\Helper;

const PREFIX_PUBLIC = '/public';

class Helper
{
    function custom_link(string $path): string
    {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestUrl,PREFIX_PUBLIC);
        $pathPublic = '';
        if ($pos !== false) {
            $pathPublic = substr($requestUrl, 0,$pos + strlen('/profile'));
        }
        $http = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        return $http . $host . $pathPublic . '/' . $path;
    }
}
