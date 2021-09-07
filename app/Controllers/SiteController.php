<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;

/**
 * Class SiteController
 * @package App\Controller
 */
class SiteController extends BaseController
{
    public function home(): string
    {
        $params = [
            'name' => 'Test'
        ];
        return $this->render('home', $params);
    }

    public function contact(): string
    {
        return $this->render('contact');
    }

    public function handleContact(): string
    {
        $body = $this->request->getAllInput();
        var_dump($body);
        die;
        return 'Handling submitted form';
    }
}
