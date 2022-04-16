<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\dto\ContactListDto;
use App\use_case\ViewContactListUseCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ContactListController extends BaseController
{
    /**
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getViewContactList(): string
    {
        return $this->twig->render(
            'admin/pages/contact_list',
            ['contact_list' => $this->getContactList(), 'total' => count($this->getContactList())]
        );
    }

    public function getContactList(): array
    {
        $viewContactListUseCase = new ViewContactListUseCase();
        $contactList = $viewContactListUseCase->execute();
        return $this->createResponseData($contactList);
    }

    private function createResponseData(ContactListDto $contactList): array
    {
        $contactList = $contactList->getContactListDto();
        $data = [];
        foreach ($contactList as $contact) {
            $temp = [];
            $temp['id'] = $contact->getId();
            $temp['full_name'] = $contact->getFullName();
            $temp['phone'] = $contact->getPhone();
            $temp['email'] = $contact->getEmail();
            $data[] = $temp;
        }

        return $data;
    }
}
