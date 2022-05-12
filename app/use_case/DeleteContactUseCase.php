<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\repository\ContactRepository;
use App\translates\Translate;

class DeleteContactUseCase
{
    private ContactRepository $contactRepository;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->contactRepository = new ContactRepository();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(string $email): void {
        $isSuccess = $this->contactRepository->deleteContact($email);

        if (!$isSuccess) {
            $this->session->setFlash('errorDeleteContact', $this->translate->getLanguage('delete_fail'));
        } else {
            $this->session->setFlash('successDeleteContact', $this->translate->getLanguage('delete_success'));
        }
    }
}
