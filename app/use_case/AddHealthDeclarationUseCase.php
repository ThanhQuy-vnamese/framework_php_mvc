<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Session;
use App\domain\entity\HealthDeclaration;
use App\domain\repository\HealthDeclarationRepository;
use App\domain\repository\HealthDeclarationRepositoryInterface;
use App\legacy\Auth;
use App\translates\Translate;

class AddHealthDeclarationUseCase
{
    private HealthDeclarationRepositoryInterface $healthDeclarationRepository;
    private Auth $auth;
    private Session $session;
    private Translate $translate;

    public function __construct()
    {
        $this->healthDeclarationRepository = new HealthDeclarationRepository();
        $this->auth = new Auth();
        $this->session = new Session();
        $this->translate = new Translate();
    }

    public function execute(
        string $full_name,
        string $gender,
        string $birthday,
        string $identity_card,
        string $email,
        string $phone,
        string $way,
        string $district,
        string $wards,
        string $province,
        string $qr_image,
        string $health_declaration
    ): int {
        $healDeclaration = $this->buildHealthDeclaration(
            $full_name,
            $gender,
            $birthday,
            $identity_card,
            $email,
            $phone,
            $way,
            $district,
            $wards,
            $province,
            $qr_image,
            $health_declaration,
            $this->auth->getUser()->getId()
        );
        $id = $this->healthDeclarationRepository->addHealthDeclaration($healDeclaration);
        if (!$id) {
            $this->session->setFlash('errorAddHealthDeclaration', $this->translate->getLanguage('add_health_declaration_fail'));
        }
        $this->session->setFlash('successAddHealthDeclaration', $this->translate->getLanguage('add_health_declaration_success'));
        return $id;
    }

    private function buildHealthDeclaration(
        string $full_name,
        string $gender,
        string $birthday,
        string $identity_card,
        string $email,
        string $phone,
        string $way,
        string $district,
        string $wards,
        string $province,
        string $qr_image,
        string $health_declaration,
        int $user_id
    ): HealthDeclaration {
        return new HealthDeclaration(
            null,
            $full_name,
            $gender,
            $birthday,
            $identity_card,
            $email,
            $phone,
            $way,
            $district,
            $wards,
            $province,
            $qr_image,
            $health_declaration,
            $user_id
        );
    }
}
