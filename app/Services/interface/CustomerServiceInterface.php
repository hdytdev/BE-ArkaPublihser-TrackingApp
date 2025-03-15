<?php

namespace App\Services\interface;

interface CustomerServiceInterface
{
    public function create($data);

    function fetchAll();
}
