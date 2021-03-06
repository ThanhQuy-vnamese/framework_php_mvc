<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\Core\Helper\UploadFile;
use App\Core\Mail\Mail;
use App\Core\Session;
use App\legacy\Auth;
use App\Model\User;
use App\Repository\UserRepository;
use App\translates\Translate;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class UserController extends BaseController
{
    public function getTranslate(): Translate
    {
        return new Translate();
    }

    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewUserList(): string
    {
        if (!$this->request->input->has('offset')) {
            $offset = 0;
        } else {
            $offset = $this->request->input->getInt('offset');
        }
        $userRepository = new UserRepository();
        $users = $userRepository->getAllUsers($offset);
        return $this->twig->render('admin/pages/user_list', ['users' => $users, 'total' => count($users)]);
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
        if (empty($user)) {
            $this->response->redirect('/admin/user-list');
        }
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
        $way = $this->request->input->get('way');
        $district = $this->request->input->get('district');
        $wards = $this->request->input->get('wards');
        $province = $this->request->input->get('province');
        $identity_card = $this->request->input->get('identity-card');

        $session = new Session();

        if (empty($password) || empty($confirmPassword)) {
            $session->setFlash('errorAddUser', $this->getTranslate()->getLanguage('please_enter_password'));
            $this->response->redirect('/admin/user-add');
        }

        if ($password != $confirmPassword) {
            $session->setFlash('errorAddUser', $this->getTranslate()->getLanguage('password_not_match'));
            $this->response->redirect('/admin/user-add');
        }

        if (!empty($this->validateExistEmail($email))) {
            $session->setFlash('errorAddUser', $this->getTranslate()->getLanguage('email_already_exist'));
            $this->response->redirect('/admin/user-add');
        }

        $default_setting = [
            'language' => 'eng'
        ];

        $dataUser = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'status' => $status,
            'role' => $role,
            'setting' => serialize($default_setting)
        ];

        $user = new User();
        $userId = $user->addUser($dataUser);

        if (!$userId) {
            $session->setFlash('errorAddUser', $this->getTranslate()->getLanguage('add_user_fail'));
            $this->response->redirect('/admin/user-add');
        }

        $dataUserProfile = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'phone' => $phone,
            'user_id' => $userId,
            'way' => $way,
            'district' => $district,
            'wards' => $wards,
            'province' => $province,
            'identity_card' => $identity_card
        ];

        $idUserProfile = $user->addUserProfile($dataUserProfile);

        if (!$idUserProfile) {
            $session->setFlash('errorAddUser', $this->getTranslate()->getLanguage('add_user_profile_fail'));
            $this->response->redirect('/admin/user-add');
        }

        $mail = new Mail();
        $mail->setSubject('Verify account');
        $mail->setBody('Please click to link to verify your account.');
        $mail->setToAddress($email);
        $mail->send();

        $this->response->redirect("/admin/user-detail?id=${userId}");
    }

    public function updateUser()
    {
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
        $way = $this->request->input->get('way');
        $district = $this->request->input->get('district');
        $wards = $this->request->input->get('wards');
        $province = $this->request->input->get('province');
        $identity_card = $this->request->input->get('identity-card');
        $language = $this->request->input->get('language');

        $session = new Session();
        $userRepository = new UserRepository();
        $isExistEmail = $userRepository->isExistEmail($idUser, $email);
        if ($isExistEmail) {
            $session->setFlash('errorUpdateUser', $this->getTranslate()->getLanguage('email_already_exist'));
            $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
        }

        $settings = [
            'language' => $language
        ];

        $dataUser = [
            'status' => $status,
            'role' => $role,
            'email' => $email,
            'setting' => serialize($settings)
        ];

        if (!empty($password) && !empty($confirmPassword)) {
            if ($password !== $confirmPassword) {
                $session->setFlash('errorUpdateUser', $this->getTranslate()->getLanguage('password_not_match'));
                $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
            }

            $dataUser['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $user = new User();
        $isUpdateUserSuccess = $user->updateUser($idUser, $dataUser);
        if (!$isUpdateUserSuccess) {
            $session->setFlash('errorUpdateUser', $this->getTranslate()->getLanguage('update_user_fail'));
            $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
        }

        $dataUserProfile = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthday' => $birthday,
            'gender' => $gender,
            'address' => $address,
            'phone' => $phone,
            'way' => $way,
            'district' => $district,
            'wards' => $wards,
            'province' => $province,
            'identity_card' => $identity_card
        ];

        $isUpdateUserProfileSuccess = $user->updateUserProfileForAdmin($idUser, $dataUserProfile);
        $this->updateInfoUserLogin((int)$idUser);
        if (!$isUpdateUserProfileSuccess) {
            $session->setFlash('errorUpdateUser', $this->getTranslate()->getLanguage('update_user_fail'));
            $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
        }

        $session->setFlash('successUpdateUser', $this->getTranslate()->getLanguage('update_user_success'));
        $this->response->redirect('/admin/user-detail', ['id' => $idUser]);
    }

    public function updateAvatar()
    {
        $userId = $this->request->input->get('user-id');
        $avatarFile = $this->request->input->get('avatar-file');
        $uploadFile = new UploadFile($avatarFile);
        $isSuccess = $uploadFile->upload('avatars/');

        $session = new Session();
        if (!$isSuccess) {
            $session->setFlash('errorUpdateUser', $this->getTranslate()->getLanguage('update_avatar_fail'));
            $this->response->redirect('/admin/user-detail', ['id' => $userId]);
        }
        $data = [
            'avatar' => $uploadFile->getFileName(),
        ];
        $user = new User();
        $isSuccessUpdateAvatar = $user->updateUserProfileForAdmin($userId, $data);
        $this->updateInfoUserLogin((int)$userId);
        if (!$isSuccessUpdateAvatar) {
            $session->setFlash('errorUpdateUser', $this->getTranslate()->getLanguage('update_avatar_fail'));
            $this->response->redirect('/admin/user-detail', ['id' => $userId]);
        }
        $session->setFlash('successUpdateUser', $this->getTranslate()->getLanguage('update_avatar_success'));
        $this->response->redirect('/admin/user-detail', ['id' => $userId]);
    }

    private function updateInfoUserLogin(int $user_id)
    {
        $auth = new Auth();
        if ($user_id === $auth->getUser()->getId()) {
            $auth->getAuthentication()->updateInfoUserLogin();
        }
    }

    public function deleteUser()
    {
        $userId = $this->request->input->get('user-id');
        $user = new User();
        $isDeleteSuccess = $user->deleteUser($userId);
        $session = new Session();
        if (!$isDeleteSuccess) {
            $session->setFlash('errorDeleteUser', $this->getTranslate()->getLanguage('delete_user_fail'));
            $this->response->redirect('/admin/user-list');
        }

        $session->setFlash('successDeleteUser', $this->getTranslate()->getLanguage('delete_user_success'));
        $this->response->redirect('/admin/user-list');
    }

    public function resetPassword()
    {
        $userId = $this->request->input->get('user-id');
        $password = $this->request->input->get('password');
        $confirmPassword = $this->request->input->get('confirm-password');
        $session = new Session();
        if (empty($password) || empty($confirmPassword)) {
            $session->setFlash('errorResetPassword', $this->getTranslate()->getLanguage('please_enter_password'));
            $this->response->redirect('/admin/user-list');
        }

        if ($password !== $confirmPassword) {
            $session->setFlash('errorResetPassword', $this->getTranslate()->getLanguage('password_not_match'));
            $this->response->redirect('/admin/user-list');
        }

        $info = [
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $user = new User();
        $isUpdateSuccess = $user->updatePassword($userId, $info);
        if (!$isUpdateSuccess) {
            $session->setFlash('errorResetPassword', $this->getTranslate()->getLanguage('reset_password_fail'));
            $this->response->redirect('/admin/user-list');
        }

        $session->setFlash('successResetPassword', $this->getTranslate()->getLanguage('reset_password_success'));
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
