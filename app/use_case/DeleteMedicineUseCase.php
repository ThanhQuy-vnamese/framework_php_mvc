<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\repository\MedicineRepository;
use App\domain\repository\MedicineRepositoryInterface;
use App\translates\Translate;

class DeleteMedicineUseCase
{
    private MedicineRepositoryInterface $medicineRepository;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->medicineRepository = new MedicineRepository();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(int $id): bool
    {
        $is_success = $this->medicineRepository->deleteMedicineById($id);
        if (!$is_success) {
            $this->session->setFlash('errorDelete', $this->translate->getLanguage('delete_medicine_fail'));
            return false;
        }
        return true;
    }
}
