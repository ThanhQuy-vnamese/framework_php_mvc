<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use App\Core\Request\Request;
use App\Core\Session;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use App\Core\Lib\QrCode;
use App\Model\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class UserController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function index(): string
    {
        return $this->twig->render('base');
    }
    public function login(): string
    {
        return $this->twig->render('user/pages/login');
    }
    public function postLogin()
    {
        $email = $this->request->input->get('email');
        $password = $this->request->input->get('password');
        $information = array(
            'email' => $email,
            'password' => md5($password)
        );
        $user = new User();
        echo ("<pre>");
        $data = (array)$user->userLogin($information);
        if (!empty($data)) {
            $getProfileById = (array)$user->getProfileByUserId($data[0]->id);
            $session = new Session();
            $session->setFlash('user', $getProfileById[0]);
            $this->getViewByRole($data[0]->role);
        }
    }
    /**
     * Dùng để chuyển trang cho từng role 
     */
    public function getViewByRole($role)
    {
        switch ($role) {
            case '1':
                return $this->response->redirect('/');
            case '2':
                return $this->response->redirect('/admin/user-list');
        }
    }
    public function getViewUserList(): string
    {
        return $this->twig->render('admin/pages/user_list');
    }
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewUserAdd(): string
    {
        return $this->twig->render('admin/pages/user_add');
    }
    public function getViewUserDetail(): string
    {
        return $this->twig->render('admin/pages/user_detail');
    }
    public function getViewLogin(): string
    {
        return $this->twig->render('user/pages/login');
    }
    public function logout():string{
        $session = new Session();
        $session->destroyFlash();
        return $this->response->redirect('/');
    }
    public function getViewProfile(): string
    {
        return $this->twig->render('user/pages/profile');
    }
    public function getViewRegister(): string
    {
        return $this->twig->render('user/pages/register');
    }

    public function postAddUser()
    {
        $session = new Session();

        $firstName = $this->request->input->get('first-name');
        $lastName = $this->request->input->get('last-name');
        $email = $this->request->input->get('email');
        $password = $this->request->input->get('password');
        $confirmPassword = $this->request->input->get('confirm-password');
        $status = '1';
        $role = '1';
        $birthday = $this->request->input->get('birthday');
        $address = $this->request->input->get('address');
        $phone = $this->request->input->get('phone');
        $gender = $this->request->input->get('gender');

        if (!empty($this->checkExistEmail($email))) {
            $session->setFlash('errorAddUser', 'Email đã tồn tại');
            $this->response->redirect('/user/register');
        }
        if (empty($password) || empty($confirmPassword)) {
            $session->setFlash('errorAddUser', 'Please enter password');
            $this->response->redirect('/user/register');
        }

        if ($password != $confirmPassword) {
            $session->setFlash('errorAddUser', 'Password not match');
            $this->response->redirect('/user/register');
        }


        $qrName = $this->generateRandomString(15);
        $qrCode = new QrCode();
        $qrCode->create('content', $qrName);
        $dataUser = array(
            'email' => $email,
            'password' => md5($password),
            'status' => $status,
            'role' => $role,
            'qr_image' => $qrName . '.png'
        );
        $user = new User();

        $userId = $user->addUser($dataUser);
        print_r($dataUser);
        if (!$userId) {
            $session->setFlash('errorAddUser', 'Add user failed');
            $this->response->redirect('/user/register');
        }
        $dataUserProfile = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'phone' => $phone,
            'user_id' => $userId
        ];
        $idUserProfile = $user->addUserProfile($dataUserProfile);

        if (!$idUserProfile) {
            $session->setFlash('errorAddUser', 'Add user failed');
            $this->response->redirect('/user/register');
        }

        $session->setFlash('successAddUser', 'Add user success');
        $this->response->redirect('/user/register');
    }

    public function generateRandomString(int $length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function checkExistEmail($email)
    {
        $user = new User();
        return (array)$user->getInfoFromEmail($email);
    }

    public function getViewForgotPassWord()
    {
        $request = new Request();
        $session = new Session();
        if (!empty($request->getAllInput()['email'])) {
            $email = $request->getAllInput()['email'];
            if (!empty($this->checkExistEmail($email))) {
                // Function check authenticate email
 
                $user = new User();
                $data = (array)$user->getUserIdByMail($email);

                $param = "http://localhost:8888/user/reset-password?id=".$data[0]->id;
                $url_authen = "<a href='".$param."'> Rest password </a>" ; 
                $this->authenticateMail($email, $url_authen);
                // return $this->response->redirect('/user/reset-password');
            } else {

                $session->setFlash('errorForgotPass', 'Mail not exist');
            }
        }
        return $this->twig->render('user/pages/forgotPassword');
    }
    public function authenticateMail($email, $url_authen)
    {
        $mail = new PHPMailer(true);
        //Server settinsg
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username   = 'huynhkyanh18066031@gmail.com';               //SMTP username
            $mail->Password   = 'hgtnmqewwddfyyif';                          //SMTP password
            $mail->SMTPSecure = 'tls';                                   
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('huynhkyanh18066031@gmail.com', 'Mailer');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = "Please confirm new password ";
            $mail->Body = "Click url reset password: ".$url_authen;
            $mail->send();
            $session = new Session();
            $session->setFlash('mail', 'Message has been sent');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    public function resetPassWord()
    {
        $session = new Session();
        if(!empty($_GET['id']))
        {
            $id = $_GET['id'];
            $session->setFlash('userIdReset', $id);
        }
        $userId = $session->getValue('userIdReset');
        $password = $this->request->input->get('password');
        $confirmPassword = $this->request->input->get('re-password');
        if(!empty($password) && !empty($confirmPassword))
        {
            if ($password != $confirmPassword) {
                $session->setFlash('errorResetPass', 'Password not match');
                $this->response->redirect('/user/reset-password');
            }
            
            $user = new User();
            $password = md5($password);
            if($user->updatePassword($userId, $password))
            {
                $session->setFlash('updatePass', 'Update password success');
                $this->response->redirect('/user/login');
            }
        }
        return $this->twig->render('user/pages/resetpassword');
    }
}
