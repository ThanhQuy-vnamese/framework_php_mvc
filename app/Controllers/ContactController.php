<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ContactController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewContactList(): string
    {
        return $this->twig->render('admin/pages/contact_list');
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewContactDetail(): string
    {
        return $this->twig->render('admin/pages/contact_detail');
    }
}