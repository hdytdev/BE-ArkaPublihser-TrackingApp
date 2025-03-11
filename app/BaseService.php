<?php

namespace App;

use DB;

abstract class BaseService
{
    public string|null $table;
    public $db = null;
    public function __construct()
    {
        $this->table = $this->setTableName();
        if ($this->table && !$this->db) {
            $this->db = DB::table($this->table);
        }
    }
    abstract function setTableName(): string;
    public function save(array $data)
    {
        $data['created_at'] = now();
        $data['updated_at'] = now();
        $this->db->insert($data);
    }
}
