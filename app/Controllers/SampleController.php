<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class SampleController extends BaseController
{
    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function index (): string
    {
        return $this->twig->render('user/pages/home');
    }
    public function about ():string
    {
        return $this->twig->render('user/pages/about');
    }
    public function doctor():string
    {
        return $this->twig->render('user/pages/doctor');
    }
    public function bookClinic()
    {
        return $this->twig->render('user/pages/book_clinic');
    }
    public function contact()
    {
        return $this->twig->render('user/pages/contact');
    }
}
