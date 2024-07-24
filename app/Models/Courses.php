<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id','platform_id','domain_id','food_id','accomodation_id','title','start_date', 'end_date', 'close_date','status_id','remark'
    ];

     public function status(){
        return $this->belongsTo(CourseStatus::class,'status_id');
     } 

     public function participants(){
        return $this->hasMany(TalentCourse::class,'course_id');
     }

     public function domain(){
        return $this->belongsTo(AssessmentCategory::class,'domain_id');
     }

     public function type(){
        return $this->belongsTo(CourseType::class,'type_id');
     }

     public function getPlatformAttribute(){
        if ($this->platform_id==1)
            return 'Physical';
        elseif ($this->platform_id==2)
            return 'Online';

     }

     public function scopeMonthly($query, $month){
        return $query->whereMonth('start_date', $month)->whereYear('start_date', date("Y"));
     }
}
