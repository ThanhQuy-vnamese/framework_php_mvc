<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Helper\Helper;
use App\Core\Lib\QrCode;
use App\Core\Session;
use App\domain\repository\MedicalFileRepository;
use App\domain\repository\MedicalFileRepositoryInterface;

class GenerateQrUseCase
{
    private QrCode $qrCode;
    private MedicalFileRepositoryInterface $medicalFileRepository;
    private Session $session;
    private Helper $helper;

    public function __construct()
    {
        $this->qrCode = new QrCode();
        $this->medicalFileRepository = new MedicalFileRepository();
        $this->session = new Session();
        $this->helper = new Helper();
    }

    public function execute(int $medical_file_id, int $user_id): bool
    {
        $qr_name = $this->generateQrImage($user_id);
        $is_success =  $this->medicalFileRepository->updateQrImageNameByMedicalFileId($medical_file_id, $qr_name);
        if (!$is_success) {
            $this->session->setFlash('errorUpdateQr', 'Update Qr fail');
            return false;
        }
        $this->session->setFlash('successUpdateQr', 'Update Qr success');
        return false;
    }

    private function generateQrImage(int $user_id): string
    {
        $qrName = $this->helper->generateRandomString(15);
        $host = $this->helper->getHost();
        $url = "${host}/user/medican-record?user_id=${user_id}";
        $this->qrCode->create($url, $qrName);
        return $qrName . '.png';
    }
}
