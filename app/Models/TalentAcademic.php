<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentAcademic extends Model
{
    use HasFactory;

    public $table = 'talent_academics';
    
    protected $fillable = [
        'type_id','types','qualification', 'year', 'institute','talent_id'
    ];
    
    public function type(){
        return $this->belongsTo(Qualification::class,'type_id');
     } 

     public function setQualificationAttribute($value){
       $this->attributes['qualification'] = strtoupper($value);

    }
    public function setInstituteAttribute($value){
       $this->attributes['institute'] = strtoupper($value);

    }
}
