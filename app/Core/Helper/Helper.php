<?php

namespace App\Core\Helper;

use App\legacy\Auth;

const PREFIX_PUBLIC = '/public';

class Helper
{
    private string $settings = '';

    function custom_link(string $path): string
    {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestUrl, PREFIX_PUBLIC);
        if (!$pos) {
            $pathPublic = '/public';
        } else {
            $pathPublic = substr($requestUrl, 0, $pos + strlen('/public'));
        }
        $http = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        return $http . $host . $pathPublic . '/' . $path;
    }

    /**
     * @param string $path
     * @param array $params
     * @return string|void
     */
    public function redirect(string $path, array $params = []): string
    {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $pos = strpos($requestUrl, PREFIX_PUBLIC);
        if (!$pos) {
            $pathPublic = '/public' . $path;;
        } else {
            $pathPublic = substr($requestUrl, 0, $pos + strlen('/public'));
            $pathPublic = $pathPublic . $path;
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

        return $pathPublic;
    }

    public function getDirectoryUpload(): string
    {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $ipServer = $_SERVER['REMOTE_ADDR'];
        $pos = strpos($requestUrl, PREFIX_PUBLIC);
        if ($ipServer !== '127.0.0.1' && $ipServer !== '::1') {
            $directory = 'upload/';
        } else {
            if ($pos) {
                $directory = 'upload/';
            } else {
                $directory = 'public/upload/';
            }
        }
        return $directory;
    }

    public function generateRandomString(int $length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getPage(): string
    {
        $path = $_SERVER['REQUEST_URI'];
        if ($path === '/public/' || $path === '/') {
            return 'users/home';
        }
        if (strpos($path, 'admin/user-') || strpos($path, 'post-update-avatar') || preg_match(
                '/^\/admin\/post-user/',
                $path
            ) === 1) {
            return 'admin/user';
        } elseif (strpos($path, 'admin/medicine') || preg_match('/^\/admin\/post-medicine/', $path) === 1) {
            return 'admin/medicine';
        } elseif (strpos($path, 'admin/medical-file') || preg_match('/^\/admin\/post-medical-file/', $path) === 1 || preg_match(
                '/^\/admin\/prescription-/',
                $path
            ) === 1 || preg_match('/^\/admin\/post-prescription/', $path) === 1) {
            return 'admin/medical-file';
        } elseif (strpos($path, 'admin/blog') || preg_match('/^\/admin\/post-blog/', $path) === 1) {
            return 'admin/blog';
        } elseif (strpos($path, 'admin/contact') || preg_match('/^\/admin\/post-contact/', $path) === 1) {
            return 'admin/contact';
        } elseif (strpos($path, 'admin/health-declaration') || preg_match(
                '/^\/admin\/post-health-declaration/',
                $path
            ) === 1) {
            return 'admin/health-declaration';
        } elseif (strpos($path, 'admin/calendar') || preg_match('/^\/admin\/post-calendar/', $path) === 1 || preg_match('/^\/admin\/ajax\/add-calendar/', $path) === 1) {
            return 'admin/calendar';
        } elseif (strpos($path, 'user/')) {
            return 'users/home';
        }
        return 'users/home';
    }

    public function getSettings(): Helper
    {
        $auth = new Auth();
        $this->settings = $auth->getAuthentication()->user()->setting ?? '';
        return $this;
    }

    public function getLanguage()
    {
        return unserialize($this->settings)['language'] ?? '';
    }
}
