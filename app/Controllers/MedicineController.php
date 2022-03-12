<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MedicineController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewMedicineList(): string {
        return $this->twig->render('admin/pages/medicine_list');
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewMedicineDetail(): string {
        return $this->twig->render('admin/pages/medicine_detail');
    }
    public function getViewMedicanRecord():string
    {
        return $this->twig->render('user/pages/medican_record');
    }
    
}
