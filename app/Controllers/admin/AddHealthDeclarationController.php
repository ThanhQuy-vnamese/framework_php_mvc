<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\AddHealthDeclarationUseCase;

class AddHealthDeclarationController extends BaseController
{
    public function add()
    {
        $full_name = $this->request->input->get('full-name');
        $email = $this->request->input->get('email');
        $gender = $this->request->input->get('gender');
        $birthday = $this->request->input->get('birthday');
        $phone = $this->request->input->get('phone');
        $identity_card = $this->request->input->get('identity-card');
        $province = $this->request->input->get('province');
        $district = $this->request->input->get('district');
        $wards = $this->request->input->get('wards');
        $way = $this->request->input->get('way');
        $go = $this->request->input->getInt('go');
        $signal = $this->request->input->getInt('signal');
        $contact = $this->request->input->getInt('contact');
        $country_covid = $this->request->input->getInt('country-covid');
        $symptoms = $this->request->input->getInt('symptoms');
        $use_case = new AddHealthDeclarationUseCase();
        $id = $use_case->execute(
            $full_name,
            $gender,
            $birthday,
            $identity_card,
            $email,
            $phone,
            $way,
            $district,
            $wards,
            $province,
            '',
            $this->createHealthDeclarationInput($go, $signal, $contact, $country_covid, $symptoms)
        );
    }

    private function createHealthDeclarationInput(int $go, int $signal, int $contact, int $country_covid, int $symptoms): string
    {
        return serialize([
            'go' => $go,
            'signal' => $signal,
            'contact' => $contact,
            'country_covid' => $country_covid,
            'symptoms' => $symptoms
        ]);
    }
}
