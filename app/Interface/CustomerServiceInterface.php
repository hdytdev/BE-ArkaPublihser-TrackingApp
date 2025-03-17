<?php

namespace App\Interface;

use Illuminate\Pagination\LengthAwarePaginator;

interface CustomerServiceInterface
{
public function getDataWithPagination(int $perpage = 10) : LengthAwarePaginator;
public function delete($id);
}
