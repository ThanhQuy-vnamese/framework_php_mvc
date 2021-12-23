# How to use framework
## 1. Các kĩ thuật được sử dụng
* PHP
* Template engine (Twig)
* ReactJs
* Typescript
* Webpack
## 2. Cấu hình framework
- Cấu hình của framework được config trong file `.env` </br>
```
DB_HOST = localhost // Host
DB_USER = root // Username database
DB_PASSWORD = password // Password user database
DB_DATABASE = phpmvc // Tên Database

APP_DEBUG=true
```
## 3. Cách chạy
- Cách 1: Vào thư mục phpmvc chạy lệnh `php -S 127.0.0.1:8888`. Sau đó truy cập vào đường dẫn trên trình duyệt `localhost:8888`
- Cách 2: Copy thư mục phpmvc vào thư mục xampp sau đó truy cập trên url `[host]/phpmvc/public`

## 4. Cấu trúc Server
- Route được định nghĩa trong `public/index.php` </br>
Ex: </br>
```php
<?php
// TODO: ..
$app->router->get('/', [SampleController::class, 'index']);
$app->router->get('/api/users', [ApiController::class, 'getUser']);
```
- Controller được định nghĩa trong `app/Controllers` </br>
Ex: `SampleController.php` </br>
```php
<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;

class SampleController extends BaseController {
    public function index (): string
    {
        return $this->twig->render('welcome');
    }
}
```
- Model được định nghĩa trong `app/Model` </br>
Ex: `SampleModel.php` </br>
```php
<?php
declare(strict_types=1);

use App\Core\Database\DBModel;

class SampleModel extends DBModel
{

    public function rules(): array
    {
        // TODO: Implement rules() method.
    }

   public function tableName(): string
   {
      return 'users';
   }
};
```
- View được định nghĩa trong `views` <br />
Ex: `welcome.twig` </br>
```html
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Welcome!!!!!</h2>
</body>
</html>
```
- File js được định nghĩ trong thư mục `public/js` </br>
- File css được định nghĩ trong thư mục `public/css` </br>
- Image được định nghĩ trong thư mục `public/image` </br>
