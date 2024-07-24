<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
   use HasFactory;
    public $table = 'code_course';

    protected $fillable = ['name','color_id']; 

    public function color(){
        return $this->belongsTo(Color::class,'color_id');
    } 
}
