<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\dto\MedicineDto;
use App\use_case\ViewMedicineListUseCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MedicineListController extends BaseController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function getViewMedicineList(): string
    {
        $use_case = new ViewMedicineListUseCase();
        $medicines = $this->createResponse($use_case->execute());
        return $this->twig->render('admin/pages/medicine_list', ['medicines' => $medicines]);
    }

    /**
     * @param array|MedicineDto[] $medicine_list
     */
    private function createResponse(array $medicine_list): array
    {
        $data = [];
        foreach ($medicine_list as $medicine) {
            $temp = [];
            $temp['id'] = $medicine->getId();
            $temp['name'] = $medicine->getName();
            $temp['type_name'] = $medicine->getTypeName();
            $data[] = $temp;
        }

        return $data;
    }
}
