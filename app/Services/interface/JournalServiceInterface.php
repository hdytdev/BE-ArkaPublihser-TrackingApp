<?php

namespace App\Services\interface;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;


interface JournalServiceInterface
{
    public function save(array $data);
    public function fetchWithPaginate() : LengthAwarePaginator;
    public function delete(string $id);
}
