<?php
declare(strict_types=1);

namespace App\use_case;

use App\Core\Helper\UploadFile;
use App\Core\Session;
use App\domain\entity\Blog;
use App\domain\repository\BlogRepository;
use App\domain\repository\BlogRepositoryInterface;
use App\translates\Translate;

class EditBlogUseCase
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

    public function execute(string $id, string $title, string $content, array $file): bool
    {
        $blog = $this->blogRepository->getBlogById((int)$id);
        if (empty($blog)) {
            return false;
        }

        $blogInfo = $this->buildBlogInfo($id, $title, $content, $file);

        if (!is_null($blogInfo->getAvatar())) {
            if (!$this->uploadAvatar($file)) {
                $this->session->setFlash('errorUpdateBlog', $this->translate->getLanguage('upload_avatar_fail'));
                return false;
            }
        }

        $isSuccess = $this->blogRepository->editBlog($blogInfo);
        if (!$isSuccess) {
            $this->session->setFlash('errorUpdateBlog', $this->translate->getLanguage('edit_fail'));
            return false;
        }

        $this->session->setFlash('successUpdateBlog', $this->translate->getLanguage('edit_success'));
        return true;
    }

    private function uploadAvatar(array $file): bool
    {
        $upload = new UploadFile($file);
        $isSuccess = $upload->upload('blog/avatars/');

        if (!$isSuccess) {
            $this->session->setFlash('errorAddBlog', $this->translate->getLanguage('upload_avatar_fail'));
            return false;
        }

        return true;
    }

    private function buildBlogInfo(string $id, string $title, string $content, array $file): Blog
    {
        $filename = empty($file['name']) ? null : $file['name'];
        return new Blog((int)$id, $title, $filename, $content);
    }
}
