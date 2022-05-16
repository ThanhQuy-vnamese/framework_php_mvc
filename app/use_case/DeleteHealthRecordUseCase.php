<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\repository\HealthRepository;
use App\translates\Translate;

class DeleteHealthRecordUseCase
{
    private HealthRepository $useCase;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->useCase = new HealthRepository();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(int $id)
    {
        $isSuccess = $this->useCase->deleteHealth($id);
        if (!$isSuccess) {
            $this->session->setFlash('errorDeleteHealth', $this->translate->getLanguage('delete_health_fail'));
            return;
        }
        $this->session->setFlash('successDeleteHealth', $this->translate->getLanguage('delete_health_success'));
    }
}
