<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentAssessment extends Model
{
    use HasFactory;

    public $table = 'talent_assessment';
    
   
    public function assessment(){
         return $this->belongsTo('App\Assessment','assessment_id');
    }
     
   
}
