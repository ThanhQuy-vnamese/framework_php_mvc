<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\dto\HealthDeclarationDto;
use App\use_case\HealthDeclarationDetailUseCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HealthDeclarationDetailController extends BaseController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function getView(): string
    {
        $id = $this->request->input->getInt('id');
        $use_case = new HealthDeclarationDetailUseCase();
        $health_declaration_dto = $use_case->execute($id);
        return $this->twig->render(
            'admin/pages/health_declaration_detail',
            ['info' => $this->createResponse($health_declaration_dto)]
        );
    }

    private function createResponse(HealthDeclarationDto $health_declaration_dto): array
    {
        return [
            'id' => $health_declaration_dto->getId(),
            'full_name' => $health_declaration_dto->getFullName(),
            'gender' => $health_declaration_dto->getGender(),
            'birthday' => $health_declaration_dto->getBirthday(),
            'identity_card' => $health_declaration_dto->getIdentityCard(),
            'email' => $health_declaration_dto->getEmail(),
            'phone' => $health_declaration_dto->getPhone(),
            'way' => $health_declaration_dto->getWay(),
            'district' => $health_declaration_dto->getDistrict(),
            'wards' => $health_declaration_dto->getWards(),
            'province' => $health_declaration_dto->getProvince(),
            'health_declaration' => $this->generateHealthDeclaration($health_declaration_dto->getHealthDeclaration()),
            'user_id' => $health_declaration_dto->getUserId(),
            'created_at' => $health_declaration_dto->getCreatedAt()
        ];
    }

    private function generateHealthDeclaration(string $health_declaration): array
    {
        $declarations = unserialize($health_declaration);
        return [
            'go' => $this->generateOption($declarations['go']),
            'signal' => $this->generateOption($declarations['signal']),
            'contact' => $this->generateOption($declarations['contact']),
            'country_covid' => $this->generateOption($declarations['country_covid']),
            'symptoms' => $this->generateOption($declarations['symptoms']),
        ];
    }

    private function generateOption(int $option): string
    {
        return $option === 1 ? 'Yes' : 'No';
    }
}
