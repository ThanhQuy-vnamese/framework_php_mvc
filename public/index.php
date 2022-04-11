<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BlogController;
use App\Controllers\MedicineController;
use App\Controllers\UserController;
use App\Controllers\ApiController;
use App\Controllers\SampleController;
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
$app->router->get('/about', [SampleController::class, 'about']);
$app->router->get('/doctor', [UserController::class, 'getListDoctor']);
$app->router->get('/doctor/detail-doctor', [UserController::class, 'getDetailDoctor']);

$app->router->get('/doctor/book-clinic', [SampleController::class, 'bookClinic']);
$app->router->post('/doctor/post-book-clinic', [SampleController::class, 'postBookClinic']);
$app->router->get('/doctor/show-calendar', [MedicineController::class, 'showCalander']);

$app->router->get('/contact', [SampleController::class, 'contact']);
$app->router->get('/statistic-covid', [SampleController::class, 'StatisticCovid']);

$app->router->get('/api/users', [ApiController::class, 'getUser']);

$app->router->post('/api/login', [ApiController::class, 'login']);
$app->router->get('/user/blog', [BlogController::class, 'getAllBlogList']);
$app->router->get('/user/detail-blog', [BlogController::class, 'getViewBlogByUser']);
// Phần User
$app->router->get('/user/login', [UserController::class, 'login']);
$app->router->post('/user/post-login', [UserController::class, 'postLogin']);
$app->router->get('/user/logout', [UserController::class, 'logout']);

$app->router->get('/user/profile', [UserController::class, 'getViewProfile']);
$app->router->post('/user/post-profile', [UserController::class, 'postProfile']);

$app->router->get('/user/register', [UserController::class, 'getViewRegister']);
$app->router->post('/user/post-add-user', [UserController::class, 'postAddUser']);

$app->router->get('/user/forgot-password', [UserController::class, 'getViewForgotPassWord']);

$app->router->get('/user/reset-password', [UserController::class, 'resetPassWord']);

$app->router->get('/verify', [UserController::class, 'VerifyAccount']);

$app->router->get('/user/medican-record', [MedicineController::class, 'getViewMedicanRecord']);


$adminRoute = new AdminRoute($app);
$adminRoute->register();
$app->run();
