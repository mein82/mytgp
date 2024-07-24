<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    public $table = 'assessment';


    public function subitems(){
         return $this->hasMany(AssessmentItem::class,'assessment_id')->orderBy('mark');
     }
}
