<?php
namespace App\Core;

use App\Core\Middlewares\BaseMiddleware;
use App\Core\Views\Twig;

class Controller
{
    protected Request $request;
    public string $layout = 'main';
    public string $action = '';
    public Twig $twig;
    /**
     * @var BaseMiddleware[]
     */
    public array $middlewares = [];

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    public function setLayout($layout) {
        $this->layout = $layout;
    }

    public function render(string $view, $params = []) {
        return Application::$APPLICATION->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware) {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return BaseMiddleware[]
     */
    public function get_middlewares(): array
    {
        return $this->middlewares;
    }

    /**
     * @param  BaseMiddleware[]  $middlewares
     */
    public function set_middlewares(array $middlewares): void
    {
        $this->middlewares = $middlewares;
    }


}
