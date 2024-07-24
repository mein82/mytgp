<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    public $table  = 'logbook';

    public function category(){
        return $this->belongsTo(AssessmentCategory::class,'category_id');
    } 
}
