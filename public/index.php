<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AuthController;
use App\Core\Application;
use App\Controllers\SiteController;
use App\Core\Views\Twig;
use App\Models\User;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db' => [
        'host'     => $_ENV['DB_HOST'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        'database' => $_ENV['DB_DATABASE'],
    ]
];

$pathViews = dirname(__DIR__).'/views';
$pathCache = dirname(__DIR__).'/cache';

$options = [
    'cache' => $pathCache,
    'debug' => $_ENV['APP_DEBUG'],
];

$twig = new Twig($pathViews, $options);

$app = new Application(dirname(__DIR__), $config);
$app->setTwigTemplate($twig);

//$app->on(Application::EVENT_BEFORE_REQUEST, function() {
//    echo 'Before request';
//});

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->router->get('/profile', [AuthController::class, 'profile']);

$app->run();
