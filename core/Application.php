<?php

namespace App\Core;

class Application {
    public static string $ROOT_DIR;
    public static Application $APPLICATION;
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;

    /**
     * @return Controller
     */
    public function get_controller(): Controller
    {
        return $this->controller;
    }

    /**
     * @param  Controller  $controller
     */
    public function set_controller(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public function __construct(string $rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$APPLICATION = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run() {
        echo $this->router->resolve();
    }
}
