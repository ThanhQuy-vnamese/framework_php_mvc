<?php


namespace App\Core;


class Session
{
    const FLASH_MESSAGE = 'flash_message';

    public function __construct()
    {
        session_start();
        $flashMessages = $_SESSION[self::FLASH_MESSAGE] ?? [];
        foreach ($flashMessages as $key => &$flashMessage) {
            $flashMessage['removed'] = true;
        }
        $_SESSION[self::FLASH_MESSAGE] = $flashMessages;
    }

    public function setFlash(string $key, $value)
    {
        $_SESSION[self::FLASH_MESSAGE][$key] = [
            'removed' => false,
            'value'   => $value
        ];
    }

    public function getFlash(string $key)
    {
    }

    public function __destruct()
    {
        $flashMessages = $_SESSION[self::FLASH_MESSAGE] ?? [];
        foreach ($flashMessages as $key => &$flashMessage) {
            if ($flashMessage['removed']) {
                unset($flashMessages[$key]);
            }
        }
        var_dump($flashMessages);
//        die;
        $_SESSION[self::FLASH_MESSAGE] = $flashMessages;
    }
}
