<?php
declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\domain\factory\ContactDetailFactory;
use App\use_case\ViewContactDetailUseCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ContactDetailController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewContactDetail(): string
    {
        $viewContactDetailUseCase = new ViewContactDetailUseCase();
        $contactDetailFactory = $viewContactDetailUseCase->execute('hieu@mail.com');
        return $this->twig->render('admin/pages/contact_detail', ['contactForView' => $this->createResponseData($contactDetailFactory)]);
    }

    public function createResponseData(ContactDetailFactory $contactDetailFactory): array {
        $contactDetailForView = $contactDetailFactory->getContactForViewDetail()->getContactInformationList();
        $data = [];
        foreach ($contactDetailForView as $contact){
            $temp = [];
            $temp['title'] = $contact->getTitle();
            $temp['email'] = $contact->getEmail();
            $temp['full_name'] = $contact->getFullName();
            $temp['message'] = $contact->getMessage();
            $data[] = $temp;
        }
        return $data;
    }
}
