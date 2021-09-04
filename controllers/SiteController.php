<?php
//declare(strict_types=1);
namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;

/**
 * Class SiteController
 * @package App\Controller
 */

class SiteController extends Controller {
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
        $body = $this->request->getBody();
        var_dump($body);die;
        return 'Handling submitted form';
    }
}
