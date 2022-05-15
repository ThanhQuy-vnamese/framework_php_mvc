<?php

declare(strict_types=1);

namespace App\use_case;

use App\Core\Mail\Mail;
use App\Core\Session;
use App\domain\entity\ContactReply;
use App\domain\repository\ContactRepository;
use App\translates\Translate;

class AddReplyContactUseCase
{
    private ContactRepository $contactRepository;
    private Session $session;
    private Translate $translate;
    private Mail $mail;

    public function __construct()
    {
        $this->contactRepository = new ContactRepository();
        $this->session = new Session();
        $this->translate = new Translate();
        $this->mail = new Mail();
    }

    public function execute(string $contact_id, string $messages, string $email)
    {
        $contactReply = $this->buildContactReply($contact_id, $messages, $email);
        $id = $this->contactRepository->replyContact($contactReply);
        if (!$id) {
            $this->session->setFlash('errorReply', $this->translate->getLanguage('reply_fail'));
        } else {
            $this->mail->setSubject('Reply contact');
            $this->mail->setBody($messages);
            $this->mail->setToAddress($email);
            $this->mail->send();
        }
    }

    public function buildContactReply(string $contact_id, string $messages, string $email): ContactReply
    {
        return new ContactReply(null, $email, '11111', null, $messages, null, (int)$contact_id);
    }
}
