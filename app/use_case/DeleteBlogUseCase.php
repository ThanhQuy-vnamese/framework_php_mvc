<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\repository\BlogRepository;
use App\domain\repository\BlogRepositoryInterface;
use App\translates\Translate;

class DeleteBlogUseCase
{
    private BlogRepositoryInterface $blogRepository;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->blogRepository = new BlogRepository();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(int $id): bool
    {
        $isSuccess = $this->blogRepository->deleteBlogById($id);
        if (!$isSuccess) {
            $this->session->setFlash('errorDeleteBlog', $this->translate->getLanguage('delete_fail'));
            return false;
        }
        $this->session->setFlash('successDeleteBlog', $this->translate->getLanguage('delete_success'));
        return true;
    }
}
