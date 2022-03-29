<?php

declare(strict_types=1);

namespace App\Controllers\admin;

use App\Core\Controller\BaseController;
use App\use_case\AddHealthUseCase;

class AddHealthController extends BaseController
{
    public function addHealth()
    {
        $input = $this->parseInput();
        $useCase = new AddHealthUseCase();
        $useCase->execute($input['summary'], $input['healths'], $input['note'], $input['medical_file_id']);

        $this->response->redirect('/admin/medical-file-detail', ['id' => $input['medical_file_id']]);
    }

    private function parseInput(): array
    {
        $medicalFileId = $this->request->input->getInt('medical-file-id');
        $summary = $this->request->input->get('summary');
        $fever = $this->request->input->get('fever');
        $haveACold = $this->request->input->get('have-a-cold');
        $soreThroat = $this->request->input->get('sore-throat');
        $note = $this->request->input->get('note');

        return [
            'healths' => [
                'fever' => $fever,
                'cold' => $haveACold,
                'sore_throat' => $soreThroat,
            ],
            'medical_file_id' => $medicalFileId,
            'summary' => $summary,
            'note' => $note,
        ];
    }
}
