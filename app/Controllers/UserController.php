<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use App\Core\Session;
use App\Model\User;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class UserController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
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
    public function getViewUserDetail(): string
    {
        return $this->twig->render('admin/pages/user_detail');
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

    public function addUser()
    {
        $firstName = $this->request->input->get('first-name');
        $lastName = $this->request->input->get('last-name');
        $email = $this->request->input->get('email');
        $password = $this->request->input->get('password');
        $confirmPassword = $this->request->input->get('confirm-password');
        $status = $this->request->input->get('status');
        $role = $this->request->input->get('role');
        $birthday = $this->request->input->get('birthday');
        $address = $this->request->input->get('address');
        $phone = $this->request->input->get('phone');
        $gender = $this->request->input->get('gender');

        $session = new Session();

        if ($password != $confirmPassword) {
            $session->setFlash('errorAddUser', 'Password not match');
            $this->response->redirect('/admin/user-add');
        }

        if (!empty($this->validateExistEmail($email))){
            $session->setFlash('errorAddUser', 'Email already exists');
            $this->response->redirect('/admin/user-add');
        }

        $dataUser = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'status' => $status,
            'role' => $role
        ];

        $user = new User();
        $idUser = $user->addUser($dataUser);

        if (!$idUser) {
            $session->setFlash('errorAddUser', 'Add user failed');
            $this->response->redirect('/admin/user-add');
        } else {
            $dataUserProfile = [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'birthday' => $birthday,
                'gender' => $gender,
                'address' => $address,
                'phone' => $phone,
                'user_id' => $idUser
            ];

            $user->addUserProfile($dataUserProfile);
        }
        $session->setFlash('successAddUser', 'Add user success');
        $this->response->redirect('/admin/user-add');
    }

    /**
     * @param string $email
     * @return array
     */
    public function validateExistEmail(string $email): array {
        $user = new User();
        return (array)$user->getInfoFromEmail($email);
    }
}
