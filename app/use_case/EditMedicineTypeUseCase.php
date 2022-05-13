<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\entity\MedicineType;
use App\domain\repository\MedicineTypeRepository;
use App\domain\repository\MedicineTypeRepositoryInterface;
use App\translates\Translate;

class EditMedicineTypeUseCase
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

    public function execute(int $id, string $name, string $description): bool
    {
        $medicine_type = $this->buildMedicineType($id, $name, $description);
        $is_success = $this->medicineTypeRepository->editMedicineType($medicine_type);
        if (!$is_success) {
            $this->session->setFlash('errorEdit', $this->translate->getLanguage('edit_medicine_type_fail'));
            return false;
        }
        $this->session->setFlash('successEdit', $this->translate->getLanguage('edit_medicine_type_success'));
        return true;
    }

    private function buildMedicineType(int $id, string $name, string $description): MedicineType
    {
        return new MedicineType($id, $name, $description);
    }
}
