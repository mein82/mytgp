<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentDesignation extends Model
{
    use HasFactory;

       public $table = 'talent_designations';
    
   protected $fillable = [
        'designation','organization', 'start_date','end_date','talent_id'
    ];

    public function setDesignationAttribute($value){
       $this->attributes['designation'] = strtoupper($value);

    }
public function setOrganizationAttribute($value){
       $this->attributes['organization'] = strtoupper($value);

    }
}
