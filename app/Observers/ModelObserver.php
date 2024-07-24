<?php

namespace App\Observers;
use Auth;

class ModelObserver {
    
    public $id = 0;

    public function __construct(){
        $this->id = Auth::user()->id;
    }
    
    public function saving($model)
    {
        $model->updated_by = $this->id;
    }

    public function saved($model)
    {
        $model->updated_by = $this->id;
    }


    public function updating($model)
    {
        $model->updated_by = $this->id;
    }

    public function updated($model)
    {
        $model->updated_by = $this->id;
    }


    public function creating($model)
    {
        $model->created_by = $this->id;
    }

    public function created($model)
    {
        $model->created_by = $this->id;
    }



}