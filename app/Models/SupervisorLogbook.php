<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupervisorLogbook extends Model
{
    use HasFactory;

    protected $table = 'supervisor_logbook';

    protected $fillable = [
        'talent_id','supervisor_id','series','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10','q11','q12','q13','q14','q15','q16','q17','q18','q19','q20'
    ];


    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }

    public function supervisor(){
        return $this->belongsTo(User::class,'supervisor_id');
    }

    public function getTotalAttribute(){
        return number_format(($this->q1+$this->q2+$this->q3+$this->q4+$this->q5+$this->q6+$this->q7+$this->q8+$this->q9+$this->q10+$this->q11+$this->q12+$this->q13+$this->q14+$this->q15+$this->q16+$this->q17+$this->q18+$this->q19+$this->q20)*0.25, 1);
    }  

}
