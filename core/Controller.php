<?php
namespace App\Core;

class Controller
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function render(string $view, $params = []) {
        return Application::$APPLICATION->router->renderView($view, $params);
    }
}
