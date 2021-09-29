<?php
namespace App\Model;

use App\Core\Database\DBModel;

class Users2 extends DBModel
{

    function tableName(): string
    {
        return 'users';
    }

    function attributes(): array
    {
        return ['email'];
    }

    public function rules(): array
    {
        return [];
    }
}