<?php
namespace App\Model;

use App\Core\Database\DBModel;

class Test extends DBModel
{

    function tableName(): string
    {
        return 'test';
    }

    function attributes(): array
    {
        // TODO: Implement attributes() method.
    }

    public function rules(): array
    {
        // TODO: Implement rules() method.
    }
}