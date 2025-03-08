<?php

namespace App\Services;

use App\BaseService;
use App\Customer\CustomerServiceInterface;
use Log;

class CustomerService extends BaseService implements CustomerServiceInterface
{
    public $searchQuery;
    public function setTableName(): string
    {
        return 'customers';
    }

    public function withSearch(string $search): self
    {
        $this->searchQuery = $search;
        return $this;
    }

    public function getFullDetail()
    {
        return rescue(function () {
            return $this->db->swhere('title', "%" . $this->searchQuery . "%")->get();
        }, function ($error) {
            Log::error($error,context: ['error_code'=>"ERCUSSER01"]);
            return  "Ada kesalahan pada server:ERCUSSER01";
        });
    }
}
