<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use App\Core\Session;
use App\Model\User;
use App\Repository\UserRepository;
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
        $userRepository = new UserRepository();
        $users = $userRepository->getAllUsers();
        return $this->twig->render('admin/pages/user_list', ['users' => $users]);
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewUserDetail(): string
    {
        $idUser = $this->request->input->get('id');
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($idUser);
        return $this->twig->render('admin/pages/user_detail', ['user' => $user]);
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

        if (!empty($this->validateExistEmail($email))) {
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
        }

        $dataUserProfile = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'phone' => $phone,
            'user_id' => $idUser
        ];

        $idUserProfile = $user->addUserProfile($dataUserProfile);

        if (!$idUserProfile) {
            $session->setFlash('errorAddUser', 'Add user failed');
            $this->response->redirect('/admin/user-add');
        }

        $session->setFlash('successAddUser', 'Add user success');
        $this->response->redirect('/admin/user-list');
    }

    public function updateUser() {
        $idUser = $this->request->input->get('id');
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
        $userRepository = new UserRepository();
        $isExistEmail = $userRepository->isExistEmail($idUser, $email);
        if ($isExistEmail) {
            $session->setFlash('errorUpdateUser', 'Email already exists');
            $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
        }

        $dataUser = [
            'status' => $status,
            'role' => $role
        ];

        if (!empty($password) && !empty($confirmPassword)) {
            if ($password !== $confirmPassword) {
                $session->setFlash('errorUpdateUser', 'Password not match');
                $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
            }

            $dataUser['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $user = new User();
        $isUpdateUserSuccess = $user->updateUser($idUser, $dataUser);
        if (!$isUpdateUserSuccess) {
            $session->setFlash('errorUpdateUser', 'Update user fail');
            $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
        }

        $dataUserProfile = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'phone' => $phone,
        ];

        $isUpdateUserProfileSuccess = $user->updateUserProfile($idUser, $dataUserProfile);
        if (!$isUpdateUserProfileSuccess) {
            $session->setFlash('errorUpdateUser', 'Update user fail');
            $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
        }

        $session->setFlash('successUpdateUser', 'Update user success');
        $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
    }

    public function deleteUser() {
        $userId = $this->request->input->get('user-id');
        $user = new User();
        $isDeleteSuccess = $user->deleteUser($userId);
        $session = new Session();
        if (!$isDeleteSuccess) {
            $session->setFlash('errorDeleteUser', 'Delete user fail');
            $this->response->redirect('/admin/user-list');
        }

        $session->setFlash('successDeleteUser', 'Delete user success');
        $this->response->redirect('/admin/user-list');
    }

    public function resetPassword() {
        $userId = $this->request->input->get('user-id');
        $password = $this->request->input->get('password');
        $confirmPassword = $this->request->input->get('confirm-password');
        $session = new Session();
        if (empty($password) || empty($confirmPassword)) {
            $session->setFlash('errorResetPassword', 'Please enter password');
            $this->response->redirect('/admin/user-list');
        }

        if ($password !== $confirmPassword) {
            $session->setFlash('errorResetPassword', 'Password not match');
            $this->response->redirect('/admin/user-list');
        }

        $info = [
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $user = new User();
        $isUpdateSuccess = $user->updatePassword($userId, $info);
        if (!$isUpdateSuccess) {
            $session->setFlash('errorResetPassword', 'Reset password fail');
            $this->response->redirect('/admin/user-list');
        }

        $session->setFlash('successResetPassword', 'Reset password success');
        $this->response->redirect('/admin/user-list');
    }

    /**
     * @param string $email
     * @return array
     */
    public function validateExistEmail(string $email): array
    {
        $user = new User();
        return (array)$user->getInfoFromEmail($email);
    }
}
