<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\SampleController;
use App\Controllers\ApiController;
use App\Core\Application;
use App\Core\View\Twig;
use App\Model\User;
use App\route\AdminRoute;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        'database' => $_ENV['DB_DATABASE'],
    ]
];

$pathViews = dirname(__DIR__) . '/views';
$pathCache = dirname(__DIR__) . '/cache';

$options = [
    'cache' => $pathCache,
    'debug' => $_ENV['APP_DEBUG'],
];

$twig = new Twig($pathViews, $options);

$app = new Application(dirname(__DIR__), $config);
$app->setTwigTemplate($twig);
$app->twig->addGlobalFunction('session', Application::$APPLICATION->session);

//$app->on(Application::EVENT_BEFORE_REQUEST, function() {
//    echo 'Before request';
//});

$app->router->get('/', [SampleController::class, 'index']);
$app->router->get('/api/users', [ApiController::class, 'getUser']);
//$app->router->post('/api/login', [ApiController::class, 'login']);

$adminRoute = new AdminRoute($app);
$adminRoute->register();
$app->run();
