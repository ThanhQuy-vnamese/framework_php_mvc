<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\repository\MedicineTypeRepository;
use App\domain\repository\MedicineTypeRepositoryInterface;
use App\translates\Translate;

class DeleteMedicineTypeUseCase
{
    private MedicineTypeRepositoryInterface $medicineTypeRepository;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->medicineTypeRepository = new MedicineTypeRepository();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(int $id): bool {
        $is_success = $this->medicineTypeRepository->deleteMedicineTypeById($id);
        if (!$is_success) {
            $this->session->setFlash('errorDelete', $this->translate->getLanguage('delete_fail'));
            return false;
        }
        return true;
    }
}
