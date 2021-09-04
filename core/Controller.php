<?php
namespace App\Core;

class Controller
{
    protected Request $request;
    public string $layout = 'main';

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//        $this->setLayout('main');
//    }

    public function setLayout($layout) {
        $this->layout = $layout;
    }

    public function render(string $view, $params = []) {
        return Application::$APPLICATION->router->renderView($view, $params);
    }
}
