<?php

namespace App\Services;
use App\BaseService;
use App\Services\interface\JournalServiceInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
class JournalService extends BaseService implements JournalServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function setTableName(): string
    {
        return "journals";
    }
    public function fetchWithPaginate($perPage = 5): LengthAwarePaginator{
        return $this->db->paginate($perPage);
    }
    public function delete(string $id){
        if( $item = $this->db->find($id) ){
            return $this->db->where(['id'=>$id])->delete();
        }
       return;
    }
}
