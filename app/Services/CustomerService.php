<?php

namespace App\Services;

use App\BaseService;
use App\Interface\CustomerServiceInterface;
use App\Models\Customer;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerService extends BaseService implements CustomerServiceInterface
{
    public function setModel(): string
    {
        return Customer::class;
    }

    public function getDataWithPagination(int $perpage = 50): LengthAwarePaginator
    {
        return $this->model::with([
            'institution'
        ])->paginate($perpage);
    }

}
