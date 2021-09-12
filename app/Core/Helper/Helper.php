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
            $pathPublic = substr($requestUrl, 0,$pos + strlen('/public'));
        }
        $http = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        return $http . $host . $pathPublic . '/' . $path;
    }

    /**
     * @param string $path
     * @return string|void
     */
    public function redirect(string $path): string {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestUrl, PREFIX_PUBLIC);
        if ($pos !== false) {
            $pathPublic = $requestUrl . $path;
        } else {
            $pathPublic = $path;
        }

        return $pathPublic;
    }
}
