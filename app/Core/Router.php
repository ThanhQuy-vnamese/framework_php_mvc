<?php

namespace App\Core;

use App\Core\Controller\BaseController;
use App\Core\Request\Request;
use App\Core\Response\Response;

class Router
{
    protected array $router = [];
    protected Request $request;
    protected Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request  = $request;
        $this->response = $response;
    }

    /**
     * @param $path
     * @param $callback
     * @param string $middleware
     * @return $this
     */
    public function get($path, $callback, string $middleware = ''): Router
    {
        $this->router['get'][$path] = $callback;
        $this->router['get'][$path]['middleware'] = $middleware;
        return $this;
    }

    /**
     * @param $path
     * @param $callback
     * @return $this
     */
    public function post($path, $callback): Router
    {
        $this->router['post'][$path] = $callback;
        return $this;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $pos  = strpos($path, '/public');
        if ($pos !== false) {
            $path = substr($path, $pos + strlen('/public'));
        }
        $method = $this->request->getMethod();
        // TODO: Refactor
        $class = $this->router[$method][$path] ?? false;
        $callback = $class;
        unset($callback['middleware']);
        if ($callback === false) {
            $this->response->setStatusCode(404);

            return $this->renderView('_404');
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            /**@var BaseController $controller*/
            $controller                           = new $callback[0](Application::$APPLICATION->twig, $this->request, $this->response);
            Application::$APPLICATION->controller = $controller;
            $controller->action                   = $callback[1];
            $callback[0] = $controller;

            if (!empty($class['middleware'])) {
                $middleware = [];
                $middleware[0] = new $class['middleware']();
                $middleware[1] = '__invoke';
                call_user_func($middleware);
            }
        }
        return call_user_func($callback);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent   = $this->renderOnlyView($view, $params);

        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        $layout = Application::$APPLICATION->layout;
        if (Application::$APPLICATION->controller) {
            $layout = Application::$APPLICATION->controller->layout;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/${layout}.php";

        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/${view}.php";

        return ob_get_clean();
    }
}
