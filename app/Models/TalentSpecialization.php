<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentSpecialization extends Model
{
    use HasFactory;

    public $table = 'talent_specialization';
    protected $primaryKey = 'talent_id';

    protected $fillable = [
        'talent_id','specialization','date_of_gazettement', 'nsr_no', 'subspecialization'
    ];

       
    public function setSpecializationAttribute($value){
       $this->attributes['specialization'] = strtoupper($value);

    }

    public function setSubspecializationAttribute($value){
       $this->attributes['subspecialization'] = strtoupper($value);

    }
    public function getDateOfGazettementAttribute($value){
        return date("d-m-Y",strtotime($value));
   }

   public function setDateOfGazettementAttribute($value){
        $this->attributes['date_of_gazettement'] = date("Y-m-d",strtotime($value));
   }
}
