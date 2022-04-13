<?php

declare(strict_types=1);

namespace App\Controllers\api;

use App\Controllers\admin\BlogAddController;

class EditMedicalFileApiController extends BlogAddController
{
    public function edit() {
        $input = $this->parseInput();
    }

    private function parseInput(): array
    {
        $firstName = $this->request->input->get('first_name');
        $lastName = $this->request->input->get('last_name');
        $email = $this->request->input->get('email');
        $gender = $this->request->input->getInt('gender');
        $birthday = $this->request->input->get('birthday');
        $phone = $this->request->input->get('phone');
        $identityCard = $this->request->input->get('identity_card');
        $province = $this->request->input->get('province');
        $district = $this->request->input->get('district');
        $wards = $this->request->input->get('wards');
        $way = $this->request->input->get('way');
        $healthInsuranceNumber = $this->request->input->get('health_insurance_number');
        $expiration_date = $this->request->input->get('expiration_date');
        $covid_vaccination = $this->generateCovidVaccination();

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'gender' => $gender === 1 ? 'Male' : 'Female',
            'birthday' => $birthday,
            'phone' => $phone,
            'identity_card' => $identityCard,
            'province' => $province,
            'district' => $district,
            'wards' => $wards,
            'way' => $way,
            'covid_vaccination' => $covid_vaccination,
            'health_insurance_number' => $healthInsuranceNumber,
            'expiration_date' => $expiration_date
        ];
    }

    /**
     * @return array
     */
    private function generateCovidVaccination(): array
    {
        $covid_vaccinations = $this->request->input->get('covid_vaccinations');
        $covid_vaccine = [];
        foreach ($covid_vaccinations as $covid_vaccination) {
            $temp = [];
            $vaccine_name = $covid_vaccination['name'] ?? '';
            $date = $covid_vaccination['date'] ?? '';
            if (empty($vaccine_name) && empty($date)) {
                continue;
            }
            $temp['type_vaccine'] = $vaccine_name;
            $temp['date'] = $date;
            $covid_vaccine[] = $temp;
        }
        return $covid_vaccine;
    }
}
