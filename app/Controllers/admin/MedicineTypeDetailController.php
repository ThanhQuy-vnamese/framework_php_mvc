<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\dto\MedicineType;
use App\use_case\MedicineTypeDetailUseCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MedicineTypeDetailController extends BaseController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function getView(): string
    {
        $medicine_type = $this->getMedicine();
        return $this->twig->render('admin/pages/medicine_type_detail', ['medicine_type' => $medicine_type]);
    }

    private function getMedicine(): array
    {
        $use_case = new MedicineTypeDetailUseCase();
        $medicine_type = $use_case->execute($this->request->input->getInt('id'));
        return $this->createResponse($medicine_type);
    }

    private function createResponse(MedicineType $medicine_type): array
    {
        return [
            'id' => $medicine_type->getId(),
            'name' => $medicine_type->getName(),
            'description' => $medicine_type->getDescription()
        ];
    }
}
