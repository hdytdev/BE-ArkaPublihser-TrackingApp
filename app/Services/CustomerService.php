<?php

namespace App\Services;

use App\BaseService;
use App\Services\interface\CustomerServiceInterface;
use App\Models\Customer;
use Log;
use Illuminate\Support\Str;

class CustomerService extends BaseService implements CustomerServiceInterface
{
    public $searchQuery;
    public function setModel(): string
    {
        return Customer::class;
    }
    public function fetchAll(){
        return $this->db->paginate(10);
    }
    public function create($data)
    {
        $data["customer_id"] = $this->generateCustomerId();
       return $this->db->insert($data);
    }
    public function generateCustomerId(){
        return Str::upper("CUS-".uniqid());
    }
}
