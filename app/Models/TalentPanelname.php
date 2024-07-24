<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentPanelname extends Model
{
    use HasFactory;

    public $table = 'talent_panel_name';

    public function setNameAttribute($value){
       $this->attributes['name'] = strtoupper($value);

    }

    public function setDesignationAttribute($value){
       $this->attributes['designation'] = strtoupper($value);

    }
}
