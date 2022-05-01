<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\dto\HealthDeclarationDto;
use App\use_case\HealthDeclarationListUseCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HealthDeclarationListController extends BaseController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function getView(): string
    {
        $use_case = new HealthDeclarationListUseCase();
        $health_declarations = $this->createResponse($use_case->execute());
        return $this->twig->render(
            '/admin/pages/health_declaration_list',
            ['health_declarations' => $health_declarations]
        );
    }

    /**
     * @return array
     * @var HealthDeclarationDto[] $health_declarations
     */
    public function createResponse(array $health_declarations): array
    {
        $data = [];
        foreach ($health_declarations as $health_declaration) {
            $temp = [];
            $temp['id'] = $health_declaration->getId();
            $temp['full_name'] = $health_declaration->getFullName();
            $temp['phone'] = $health_declaration->getPhone();
            $temp['identity_card'] = $health_declaration->getIdentityCard();
            $data[] = $temp;
        }

        return $data;
    }
}
