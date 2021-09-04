<?php

namespace App\Core;

use App\Core\Database\Database;

class Application {
    public static string $ROOT_DIR;
    public static Application $APPLICATION;
    public Database $database;
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;

    public function __construct(string $rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$APPLICATION = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->database = new Database($config['db']);
    }

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

    public function run() {
        echo $this->router->resolve();
    }
}
