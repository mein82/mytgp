<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentStatus extends Model
{
    use HasFactory;

    public $table = 'talent_status';

    protected $fillable = [
        'talent_id','status_id','final_id','remark','cohort','enrollment' ];

    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }

    public function finals(){
        return $this->belongsTo(StatusFinal::class,'final_id');
    }

     public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }
}
