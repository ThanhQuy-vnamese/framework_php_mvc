<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\legacy\Auth;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HealthDeclarationAddController extends BaseController
{
    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function getView(): string
    {
        return $this->twig->render(
            'admin/pages/health_declaration_add',
            ['default_value' => $this->getDefaultValueUserLogin()]
        );
    }

    private function getDefaultValueUserLogin(): array
    {
        $auth = new Auth();
        return [
            'full_name' => $auth->getAuthentication()->user()->first_name . ' ' . $auth->getAuthentication()->user(
                )->last_name,
            'gender' => $auth->getAuthentication()->user()->gender,
            'birthday' => $auth->getAuthentication()->user()->birthday,
            'way' => $auth->getAuthentication()->user()->way,
            'district' => $auth->getAuthentication()->user()->district,
            'wards' => $auth->getAuthentication()->user()->wards,
            'province' => $auth->getAuthentication()->user()->province,
            'phone' => $auth->getAuthentication()->user()->phone,
            'email' => $auth->getAuthentication()->user()->email,
            'identity_card' => $auth->getAuthentication()->user()->identity_card,
        ];
    }
}
