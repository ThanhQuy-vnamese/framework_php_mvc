<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\repository\MedicalFileRepository;
use App\domain\repository\MedicalFileRepositoryInterface;
use App\translates\Translate;

class DeleteMedicalFileUseCase
{
    private MedicalFileRepositoryInterface $medicalFileRepository;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->medicalFileRepository = new MedicalFileRepository();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(int $id): bool {
        $isSuccess = $this->medicalFileRepository->deleteMedicalFileById($id);
        if (!$isSuccess) {
            $this->session->setFlash('errorDeleteMedicalFile', $this->translate->getLanguage('delete_medical_file_fail'));
            return false;
        }
        $this->session->setFlash('successDeleteMedicalFile', $this->translate->getLanguage('delete_medical_file_success'));
        return true;
    }
}
