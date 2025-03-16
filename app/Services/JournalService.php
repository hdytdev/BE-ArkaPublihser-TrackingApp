<?php

namespace App\Services;
use App\BaseService;
use App\Models\Journal;
use App\Services\interface\JournalServiceInterface;
class JournalService extends BaseService implements JournalServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function setModel(): string
    {
        return Journal::class;
    }
    public function fetchByCategory($category = 'internal')
    {
        return $this->db::where("category", $category);
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
        $data = $this->db::find($id)->update($datas);
        return $data;
    }

    public function new($data)
    {
        return $this->db->create($data);
    }
}
