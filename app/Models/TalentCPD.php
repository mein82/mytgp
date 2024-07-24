<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentCPD extends Model
{
    use HasFactory;


    public $table = 'talent_cpd';
    protected $fillable = ['a1_10','a11','b1','b2','talent_id','ca1_10','ca11','cb1','cb2'];

    public function getTotalAttribute(){
        return ($this->a1_10+$this->a11+$this->b1+$this->b2);

    }
    public function getCurrtotalAttribute(){
        return ($this->ca1_10+$this->ca11+$this->cb1+$this->cb2);

    }
}
