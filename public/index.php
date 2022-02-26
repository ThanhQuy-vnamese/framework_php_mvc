<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BlogController;
use App\Controllers\ContactController;
use App\Controllers\MedicalFileController;
use App\Controllers\MedicineController;
use App\Controllers\UserController;
use App\Controllers\ApiController;
use App\Controllers\SampleController;
use App\Core\Application;
use App\Core\View\Twig;
use App\Model\User;

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
$app->router->post('/api/login', [ApiController::class, 'login']);

// Admin
$app->router->get('/admin/user-list', [UserController::class, 'getViewUserList']);
$app->router->get('/admin/user-detail', [UserController::class, 'getViewUserDetail']);
$app->router->get('/admin/user-add', [UserController::class, 'getViewUserAdd']);
$app->router->post('/admin/post-user-add', [UserController::class, 'addUser']);
$app->router->post('/admin/post-user-update', [UserController::class, 'updateUser']);
$app->router->post('/admin/post-reset-password', [UserController::class, 'resetPassword']);
$app->router->post('/admin/post-delete-user', [UserController::class, 'deleteUser']);
$app->router->post('/admin/post-update-avatar', [UserController::class, 'updateAvatar']);
$app->router->get('/admin/medical-file-add', [MedicalFileController::class, 'getViewMedicalFileAdd']);
$app->router->get('/admin/medical-file-list', [MedicalFileController::class, 'getViewMedicalFileList']);
$app->router->get('/admin/medical-file-detail', [MedicalFileController::class, 'getViewMedicalFileDetail']);
$app->router->post('/admin/post-medical-file-add', [MedicalFileController::class, 'addMedicalFile']);
$app->router->post('/admin/post-medical-heath-add', [MedicalFileController::class, 'addHeath']);
$app->router->get('/admin/medicine-list', [MedicineController::class, 'getViewMedicineList']);
$app->router->get('/admin/medicine-detail', [MedicineController::class, 'getViewMedicineDetail']);
$app->router->get('/admin/blog-list', [BlogController::class, 'getViewBlogList']);
$app->router->get('/admin/blog-add', [BlogController::class, 'getViewBlogAdd']);
$app->router->get('/admin/blog-detail', [BlogController::class, 'getViewBlogDetail']);
$app->router->get('/admin/contact-list', [ContactController::class, 'getViewContactList']);
$app->router->get('/admin/contact-detail', [ContactController::class, 'getViewContactDetail']);

$app->run();
