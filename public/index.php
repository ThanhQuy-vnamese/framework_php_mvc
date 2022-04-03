<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\admin\AddCalendarController;
use App\Controllers\admin\AddHealthController;
use App\Controllers\admin\AddMedicalFileController;
use App\Controllers\admin\AddMedicineController;
use App\Controllers\admin\AddPrescriptionController;
use App\Controllers\admin\BlogAddController;
use App\Controllers\admin\BlogController;
use App\Controllers\admin\BlogDetailController;
use App\Controllers\admin\BlogListController;
use App\Controllers\admin\CalendarIndexController;
use App\Controllers\admin\ContactDetailController;
use App\Controllers\admin\ContactListController;
use App\Controllers\admin\DeleteContactController;
use App\Controllers\admin\DeleteHealthRecordController;
use App\Controllers\admin\EditBlogController;
use App\Controllers\admin\EditMedicalFileController;
use App\Controllers\admin\EditMedicineController;
use App\Controllers\admin\EditStatusCalendarController;
use App\Controllers\admin\GetCalendarController;
use App\Controllers\admin\GetDoctorController;
use App\Controllers\admin\MedicalFileController;
use App\Controllers\admin\MedicineListController;
use App\Controllers\admin\ReplyContactController;
use App\Controllers\admin\SampleController;
use App\Controllers\admin\UserController;
use App\Controllers\admin\ViewCalendarDetailController;
use App\Controllers\admin\ViewMedicineDetailController;
use App\Controllers\admin\ViewPrescriptionController;
use App\Controllers\ApiController;
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
$app->router->get('/admin/ajax-medical-file-health', [MedicalFileController::class, 'getHealthDetail']);
$app->router->get('/admin/ajax-get-prescription', [ViewPrescriptionController::class, 'getPrescription']);
$app->router->post('/admin/post-medical-file-add', [AddMedicalFileController::class, 'addMedicalFile']);
$app->router->post('/admin/post-medical-file-edit', [EditMedicalFileController::class, 'editMedicalFile']);
$app->router->post('/admin/post-medical-health-add', [AddHealthController::class, 'addHealth']);
$app->router->post('/admin/post-medical-health-edit', [MedicalFileController::class, 'editHealth']);
$app->router->post('/admin/post-prescription-add', [AddPrescriptionController::class, 'addPrescription']);
$app->router->post('/admin/post-delete-health', [DeleteHealthRecordController::class, 'deleteHealth']);
$app->router->get('/admin/medicine-list', [MedicineListController::class, 'getViewMedicineList']);
$app->router->post('/admin/post-add-medicine', [AddMedicineController::class, 'addMedicine']);
$app->router->get('/admin/medicine-detail', [ViewMedicineDetailController::class, 'getViewMedicineDetail']);
$app->router->post('/admin/post-edit-medicine', [EditMedicineController::class, 'editMedicine']);
$app->router->get('/admin/blog-list', [BlogListController::class, 'getViewBlogList']);
$app->router->get('/admin/blog-add', [BlogController::class, 'getViewBlogAdd']);
$app->router->post('/admin/post-blog-add', [BlogAddController::class, 'addBlog']);
$app->router->get('/admin/blog-detail', [BlogDetailController::class, 'getViewBlogDetail']);
$app->router->post('/admin/post-edit-blog', [EditBlogController::class, 'editBlog']);
$app->router->get('/admin/contact-list', [ContactListController::class, 'getViewContactList']);
$app->router->get('/admin/contact-detail', [ContactDetailController::class, 'getViewContactDetail']);
$app->router->post('/admin/post-reply-contact', [ReplyContactController::class, 'replyContact']);
$app->router->post('/admin/post-delete-contact', [DeleteContactController::class, 'deleteContact']);
$app->router->get('/admin/calendar', [CalendarIndexController::class, 'getViewCalendarIndex']);
$app->router->get('/admin/calendar-detail', [ViewCalendarDetailController::class, 'getView']);
$app->router->post('/admin/post-calendar-edit-status', [EditStatusCalendarController::class, 'editStatus']);

// Internal API
$app->router->post('/admin/ajax/add-calendar', [AddCalendarController::class, 'addCalendar']);
$app->router->get('/admin/ajax/get-doctor', [GetDoctorController::class, 'getDoctor']);
$app->router->get('/admin/ajax/get-calendar', [GetCalendarController::class, 'getCalendar']);
$app->router->get('/admin/ajax/get-calendar-edit', [GetCalendarController::class, 'getCalendar']);


$app->run();
