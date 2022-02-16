<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class MedicalFileController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewMedicalFileList(): string {
        return $this->twig->render('admin/pages/medical_file_list');
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewMedicalFileDetail(): string {
        return $this->twig->render('admin/pages/medical_file_detail');
    }
}