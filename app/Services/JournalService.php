<?php

namespace App\Services;
use App\BaseService;
use App\Services\interface\JournalServiceInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;
class JournalService extends BaseService implements JournalServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function setTableName(): string
    {
        return "journals";
    }
    public function fetchByCategory($category = 'internal'): Builder
    {
        return $this->db->where('category', $category);
    }
    public function delete(string $id)
    {
        if ($item = $this->db->find($id)) {
            return $this->db->where(['id' => $id])->delete();
        }
        return;
    }
    public function findById(string $id)
    {
        return $this->db->find($id);
    }
    public function update(string $id, mixed $datas = [])
    {
        $data = $this->db->where('id', $id)->update($datas);
        return $data;
    }
}
