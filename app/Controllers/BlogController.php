<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class BlogController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewBlogAdd(): string {
        return $this->twig->render('admin/pages/blog_add');
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewBlogDetail(): string {
        return $this->twig->render('admin/pages/blog_detail');
    }
}
