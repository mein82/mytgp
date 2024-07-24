<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentProject extends Model
{
    use HasFactory;

    public $table = 'talent_project';
    protected $fillable = [
        'talent_id','title','coinvestigator','nmrr_id','mrecapp_date','type_id'
    ];


    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }
    public function getMrecappDateAttribute($value){
        if(is_null($value)) return '';
        return date("d-m-Y",strtotime($value));
    }

    public function setMrecappDateAttribute($value){
            if(!is_null($value))
                $this->attributes['mrecapp_date'] = date("Y-m-d",strtotime($value));
            else 
                $this->attributes['mrecapp_date'] = null;
    }

    public function progress(){
        return $this->hasMany(TalentProjectProgress::class,'project_id');
    }

    public function latestprogress(){
        return $this->hasOne(TalentProjectProgress::class,'project_id')->orderBy('updated_at','desc');
    }

    public function getLatestUpdateAttribute(){
        if($this->updated_at < $this->latestprogress->updated_at)
            return $this->latestprogress->updated_at;
        else
            return $this->updated_at;
    }

}
