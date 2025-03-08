<?php

namespace App\Services;

use App\BaseService;
use App\Customer\CustomerServiceInterface;

class CustomerService extends BaseService implements CustomerServiceInterface
{
    public function setTableName(): string
    {
        return 'customers';
    }
    public function getFullDetail()
    {
        return $this->db->get();
    }
}
