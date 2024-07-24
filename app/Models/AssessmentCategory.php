<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentCategory extends Model
{
    use HasFactory;

    public $table = 'assessment_category';
    
   
    public function logbook(){
         return $this->hasMany(Logbook::class,'category_id');
     }

     public function assessment(){
         return $this->hasMany(Assessment::class,'category_id');
     }

     public function improvement(){
        return $this->hasMany(Improvement::class,'category_id');
    }
     
}
