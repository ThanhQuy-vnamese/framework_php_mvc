<?php

declare(strict_types=1);

namespace App\Adapter;

class BaseAdapter
{
    public object $data;

    public function setData($data): BaseAdapter
    {
        $this->data = $data;
        return $this;
    }

    public function getData(): object {
        return $this->data;
    }
}