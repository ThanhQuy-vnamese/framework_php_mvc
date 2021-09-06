<?php

namespace App\Core;

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

    public function get($path, $callback)
    {
        $this->router['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->router['post'][$path] = $callback;
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
        $callback = $this->router[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setStatusCode(404);

            return $this->renderView('_404');
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            /**@var Controller $controller*/
            $controller                           = new $callback[0](Application::$APPLICATION->twig);
            Application::$APPLICATION->controller = $controller;
            $controller->action                   = $callback[1];
            $callback[0] = $controller;

            foreach ($controller->get_middlewares() as $middleware) {
                $middleware->execute();
            }
        }

        return call_user_func($callback, $this->request, $this->response);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent   = $this->renderOnlyView($view, $params);

        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();

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
