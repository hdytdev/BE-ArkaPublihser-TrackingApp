<?php

namespace App\Services;

use App\BaseService;
use App\Services\interface\CustomerServiceInterface;
use App\Models\Customer;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Log;
use Illuminate\Support\Str;

class CustomerService extends BaseService implements CustomerServiceInterface
{
    public $searchQuery;
    public function setModel(): string
    {
        return Customer::class;
    }
    public function fetchAllWithSearch(string $query)
    {
        return $this->db->orWhere(function (Builder $builder) use ($query) {
            $builder->where('nama',"like", '%' . $query . "%");
            $builder->orWhere("customer_id","=",trim($query));
            $builder->orWhere("no_telp","=",trim($query));
        })->paginate(10);
    }
    public function create($data)
    {
        $data["customer_id"] = $this->generateCustomerId();
        return $this->db->insert($data);
    }
    public function generateCustomerId()
    {
        return Str::upper("CUS-" . uniqid());
    }
    public function delete(string $id): bool
    {
        return $this->db::find($id)->delete();
    }
}
