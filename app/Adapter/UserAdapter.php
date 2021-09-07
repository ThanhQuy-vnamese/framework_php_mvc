<?php


namespace App\Adapter;


class UserAdapter extends BaseAdapter
{
    public function toArray(): array
    {
        $data = $this->data;

        $result = [];
        foreach($data as $key => $value) {
            $result[$key] = $value;
        }

        return $result;
    }

}