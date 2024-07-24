<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentAR extends Model
{
    use HasFactory;

    public $table = 'talent_achievement';
    protected $fillable = [
        'talent_id','name','prev_position','cur_position','supervisor','project_title','project_presentation','project_publication'
    ];
    
    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }
}
