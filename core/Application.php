<?php

namespace App\Core;

use App\Core\Database\Database;
use App\Core\Database\DBModel;
use App\Models\User;

class Application {
    public string $layout = 'main';
    public User $userClass;
    public static string $ROOT_DIR;
    public static Application $APPLICATION;
    public Database $database;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public ?DBModel $user;
    public ?Controller $controller = null;

    public function __construct(string $rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$APPLICATION = $this;
        $this->userClass = new $config['userClass']();
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);
        $this->database = new Database($config['db']);

//        $primaryValue = $this->session->get('user');
////        var_dump($primaryValue);
////        die;
//        $primaryKey = $this->userClass->getPrimaryKey();
//        if ($primaryKey) {
//            $this->user = $this->userClass->findOne([$primaryKey => $primaryValue]);
//        }

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
        try {
            echo $this->router->resolve();
        } catch (\Exception $e) {
            echo $this->router->renderView('_error', [
                'exception' => $e
            ]);
        }

    }

    public function getPrimaryKey(): string {
        return 'id';
    }

    public function logout() {
        $this->user = null;
        $this->session->remove('user');
    }

    public function login(DBModel $user): bool{
        $this->user = $user;
        $primaryKey = $this->getPrimaryKey();
//        $primaryValue = $this->{$primaryKey};
//        var_dump($primaryKey);die;
        $this->session->set('user', $user);
        return true;
    }

    public static function isGuest(): bool {
        return true;
    }
}
