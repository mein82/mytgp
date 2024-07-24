<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefLogbook extends Model
{
    use HasFactory;

     public $table = 'referee_logbook';

      protected $fillable = [
        'talent_id','referee_id','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10','q11','q12','q13','q14','q15','q16','q17','q18','q19','q20'
    ];

    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }

    public function referee(){
        return $this->belongsTo(User::class,'referee_id');
    }

    public function getLAttribute(){
        return number_format($this->q1+$this->q2+$this->q3+$this->q4, 1);
    }
    public function getCAttribute(){
        return number_format($this->q5+$this->q6+$this->q7+$this->q8, 1);
    }
    public function getGAttribute(){
        return number_format($this->q9+$this->q10+$this->q11+$this->q12+$this->q13, 1);
    }
    public function getPAttribute(){
        return number_format($this->q14+$this->q15+$this->q16, 1);
    }
    public function getVAttribute(){
        return number_format($this->q17+$this->q18+$this->q19+$this->q20, 1);
    }

    public function getLPercentAttribute(){
        return number_format(($this->q1+$this->q2+$this->q3+$this->q4)/20*100, 1);
    }
    
    public function getCPercentAttribute(){
        return number_format(($this->q5+$this->q6+$this->q7+$this->q8)/20*100, 1);
    }
    public function getGPercentAttribute(){
        return number_format(($this->q9+$this->q10+$this->q11+$this->q12+$this->q13)/25*100, 1);
    }
    public function getPPercentAttribute(){
        return number_format(($this->q14+$this->q15+$this->q16)/15*100, 1);
    }
    public function getVPercentAttribute(){
        return number_format(($this->q17+$this->q18+$this->q19+$this->q20)/20*100, 1);
    }

    public function getTotalAttribute(){
        return number_format($this->q1+$this->q2+$this->q3+$this->q4+$this->q5+$this->q6+$this->q7+$this->q8+$this->q9+$this->q10+$this->q11+$this->q12+$this->q13+$this->q14+$this->q15+$this->q16+$this->q17+$this->q18+$this->q19+$this->q20, 1);
    }    
}
