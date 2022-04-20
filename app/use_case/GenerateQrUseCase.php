<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Lib\QrCode;
use App\Core\Session;
use App\domain\repository\MedicalFileRepository;
use App\domain\repository\MedicalFileRepositoryInterface;

class GenerateQrUseCase
{
    private QrCode $qrCode;
    private MedicalFileRepositoryInterface $medicalFileRepository;
    private Session $session;

    public function __construct()
    {
        $this->qrCode = new QrCode();
        $this->medicalFileRepository = new MedicalFileRepository();
        $this->session = new Session();
    }

    public function execute(int $medical_file_id): bool
    {
        $qr_name = $this->generateQrImage();
        $is_success =  $this->medicalFileRepository->updateQrImageNameByMedicalFileId($medical_file_id, $qr_name);
        if (!$is_success) {
            $this->session->setFlash('errorUpdateQr', 'Update Qr fail');
            return false;
        }
        $this->session->setFlash('successUpdateQr', 'Update Qr success');
        return false;
    }

    private function generateQrImage(): string
    {
        $qrName = $this->generateRandomString(15);
        $this->qrCode->create('content', $qrName);
        return $qrName . '.png';
    }

    private function generateRandomString(int $length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
