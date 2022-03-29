<?php
declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\ViewBlogListUseCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class BlogListController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewBlogList(): string
    {
        $viewBlogListUseCase = new ViewBlogListUseCase();
        $blogList = $viewBlogListUseCase->execute();
        return $this->twig->render('admin/pages/blog_list', ['blogs' => $this->createResponseData($blogList)]);
    }

    private function createResponseData(array $blogList): array
    {
        $data = [];
        foreach ($blogList as $blog) {
            $temp = [];
            $temp['id'] = $blog->getId();
            $temp['title'] = $blog->getTitle();
            $temp['created_time'] = $blog->getCreatedTime();
            $data[] = $temp;
        }

        return $data;
    }
}
