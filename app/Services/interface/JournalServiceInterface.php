<?php

namespace App\Services\interface;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;


interface JournalServiceInterface
{
    public function save(array $data);
    public function fetchByCategory(string $category = "internal") : Builder;
    public function delete(string $id);
    public function findById(string $id);
    public function update(string $id, mixed $data = []);
}
