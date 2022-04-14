<?php

declare(strict_types=1);

namespace App\Controllers\api;

use App\Core\Controller\BaseController;
use App\use_case\api\EditMedicalFileApiUseCase;

class EditMedicalFileApiController extends BaseController
{
    public function edit()
    {
        $input = $this->parseInput();
        $use_case = new EditMedicalFileApiUseCase();
        $response = $use_case->execute(
            $input['first_name'],
            $input['last_name'],
            $input['email'],
            $input['gender'],
            $input['birthday'],
            $input['phone'],
            $input['identity_card'],
            $input['province'],
            $input['district'],
            $input['wards'],
            $input['way'],
            $input['covid_vaccination'],
            $input['health_insurance_number'],
            $input['expiration_date'],
            $input['health_insurance'],
            $input['id'],
        );
        return $this->response->json_encode($response);
    }

    private function parseInput(): array
    {
        $id = $this->request->input->getInt('id');
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
            'id' => $id,
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
            'health_insurance' => (empty($healthInsuranceNumber) || empty($expiration_date)) ? 0 : 1,
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
