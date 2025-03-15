<?php

namespace App\Services\interface;

interface CustomerServiceInterface
{
    public function create($data);

    function fetchAllWithSearch(string $query);
    public function delete(string $id): bool;
}
