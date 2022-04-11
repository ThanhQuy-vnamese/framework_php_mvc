<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller\BaseController;
use App\Core\Request\Request;
use App\Core\Session;
use App\Model\User;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class SampleController extends BaseController
{
    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function index(): string
    {
        return $this->twig->render('user/pages/home');
    }
    public function about(): string
    {
        return $this->twig->render('user/pages/about');
    }

    public function bookClinic()
    {
        $session = new Session();
        // print_r($session->get('doctorProfile')['id']);
        return $this->twig->render('user/pages/book_clinic');
    }
    public function postBookClinic()
    {
        $session = new Session();
        $request = new Request();

        $dateBook = $this->request->input->get('date');
        $timeBook = $this->request->input->get('time');
        $subject = $this->request->input->get('description');

        $id_doctor = $session->get('doctorProfile')['id'];
        $id_user =  $session->get('user')['user_id'];
        echo($id_doctor . " - ".$id_user);
        $user = new User();
        $information = array(
            // 'id_doctor'=>$id_doctor,
            'user_id'=>$id_user,
            'date_start' =>$dateBook,
            'time_start' => $timeBook,
            'created_at'=>date("Y/m/d"),
            'subject'=> $subject,
        );

        $user->insertAppointment($information);
        $session->setFlash('makeAppointment', "Tạo lịch hẹn thành công! Vui lòng chờ phản hồi từ bác sĩ ");
        $this->response->redirect('/doctor/book-clinic');
    }
    public function contact()
    {
        return $this->twig->render('user/pages/contact');
    }
    public function StatisticCovid()
    {
        // Retrieving Json Data
        $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");

        // echo("<pre>");
        // print_r($jsonData);
        $data = json_decode($jsonData, true);

        // Counting the number of days in the Json File
        foreach ($data as $key => $value) {
            $days_count = count($value) - 1;
            $days_count_prev = $days_count - 1;
        }
        $total_confirmed = 0;
        $total_recovered = 0;
        $total_deaths = 0;
        // Total Cases Calculation
        foreach ($data as $key => $value) {
            $total_confirmed = $total_confirmed + $value[$days_count]['confirmed'];
            $total_recovered = $total_recovered + $value[$days_count]['recovered'];
            $total_deaths = $total_deaths + $value[$days_count]['deaths'];
        }
        return $this->twig->render('user/pages/statistic-covid',
         ['total_confirmed'=> $total_confirmed,
          'total_recovered'=> $total_recovered,
          'total_deaths'=>$total_deaths,
          'days_count'=>$days_count,
          'days_count_prev'=> $days_count_prev,
          'data'=>$data
    ]);
    }
}
