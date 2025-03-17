<?php

namespace App;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

abstract class BaseService
{
    protected Model $model;

    public function __construct()
    {
        if ($model = $this->setModel()) {
            $this->model = app($model);
        }
    }

    public function getModel(): Model
    {
        return $this->model;
    }
    abstract public function setModel(): string;
    public function delete($id)
    {
        return $this->model::find($id)->delete();
    }
}
