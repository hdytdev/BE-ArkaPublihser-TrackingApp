<?php

namespace App\Repositories;

use DB;

class CustomerRepository
{
    public $table = "customers";
    public function getAll()
    {
       $customer = DB::table($this->table)->get();
       return $customer;
    }
}
