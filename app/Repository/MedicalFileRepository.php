<?php
declare(strict_types=1);

namespace App\Repository;

use App\Model\MedicalFile;

class MedicalFileRepository
{
    public function getMedicalFiles(): array
    {
        $medicalFile = new MedicalFile();
        return $this->convertMedicalFile($medicalFile->getMedicalFiles());
    }

    private function convertMedicalFile(array $medicalFiles): array
    {
        $data = [];
        foreach ($medicalFiles as $medicalFile) {
            $temp = [];
            $temp['id'] = $medicalFile['id'];
            $temp['full_name'] = $medicalFile['first_name'] . ' ' . $medicalFile['last_name'];
            $temp['gender'] = $medicalFile['gender'];
            $temp['birthday'] = $medicalFile['birthday'];
            $temp['phone'] = $medicalFile['phone'];
            $temp['identity_card'] = $medicalFile['identity_card'];
            $temp['age'] = $this->calculateAge($temp['birthday']);
            $data[] = $temp;
        }
        return $data;
    }

    private function calculateAge(string $date)
    {
        $birthDate = explode('-', $date);
        $currentYear = (int)date("Y");
        if ((int)$birthDate[0] === $currentYear) {
            return 0;
        }
        $timestamp = mktime(0, 0, 0, (int)$birthDate[2], (int)$birthDate[1], (int)$birthDate[0]);
        $date = date("U", $timestamp);

        return (date("md", (int)$date) > date("md")
            ? ((date("Y") - $birthDate[0]) - 1)
            : (date("Y") - $birthDate[0]));
    }
}
