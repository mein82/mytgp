<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuggestSupervisor extends Model
{
    use HasFactory;
    public $table = 'talent_facilitator';

    public function setNameAttribute($value){
       $this->attributes['name'] = strtoupper($value);

    }

    public function setDesignationAttribute($value){
       $this->attributes['designation'] = strtoupper($value);

    }
}
