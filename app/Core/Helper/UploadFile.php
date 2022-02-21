<?php
declare(strict_types=1);

namespace App\Core\Helper;

class UploadFile
{
    private array $fileInput;
    private string $fileName = '';

    public function __construct(array $fileInput)
    {
        $this->fileInput = $fileInput;
    }

    public function setFileName(string $fileName) {
        $this->fileName = $fileName;
    }

    public function getFileName(): string {
        return empty($this->fileName) ? $this->fileInput['name'] : $this->fileName;
    }

    public function upload($path): bool {
        $requestUrl = $_SERVER['REQUEST_URI'];
        $ipServer = $_SERVER['REMOTE_ADDR'];
        $pos = strpos($requestUrl, PREFIX_PUBLIC);
        if($ipServer !== '127.0.0.1' && $ipServer !== '::1') {
            $directory = 'upload/';
        } else {
            if ($pos) {
                $directory = 'upload/';
            } else {
                $directory = 'public/upload/';
            }
        }
        $fileName = empty($this->fileName) ? $this->fileInput['name'] : $this->fileName;
        $directory = $directory . $path;

        return move_uploaded_file($this->fileInput['tmp_name'], $directory . $fileName);
    }
}