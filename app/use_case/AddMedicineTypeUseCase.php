<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\entity\MedicineType;
use App\domain\repository\MedicineTypeRepository;
use App\domain\repository\MedicineTypeRepositoryInterface;
use App\translates\Translate;

class AddMedicineTypeUseCase
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

    public function execute(string $name, string $description): bool
    {
        $medicine_type = $this->buildMedicineType($name, $description);
        $id = $this->medicineTypeRepository->addMedicineType($medicine_type);
        if (!$id) {
            $this->session->setFlash('errorAddMedicineType', $this->translate->getLanguage('add_medicine_type_fail'));
            return false;
        }
        $this->session->setFlash('successAddMedicineType', $this->translate->getLanguage('add_medicine_type_success'));
        return false;
    }

    private function buildMedicineType(string $name, string $description): MedicineType
    {
        return new MedicineType(null, $name, $description);
    }
}
