<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentCourse extends Model
{
    use HasFactory;


    public $table = 'talent_course';
protected $fillable = [
        'status_id','reason','food','accomodation'
    ];
   public function course(){
        return $this->belongsTo(Courses::class,'course_id')->orderBy('domain_id')->orderBy('start_date');
    }

    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }

    // public function attendance(){
    //     return $this->hasMany(CourseAttendance::class,'course_id','course_id');
    // }

    public function status(){
        return $this->belongsTo(TalentCourseStatus::class,'status_id');
    }

    public function attendance(){
        return $this->belongsTo(TalentCourseStatus::class,'attendance_id');
    }
}
