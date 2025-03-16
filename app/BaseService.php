<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Laravel\Folio\Console\MakeCommand;

abstract class BaseService
{
    public string|null $table;
    public Model $db;
    public function __construct()
    {
        if ($model = $this->setModel()) {
            $this->db = app($model);
        }
    }
    public function all(){
        return $this->db::all();
    }
    abstract function setModel(): string;
}
