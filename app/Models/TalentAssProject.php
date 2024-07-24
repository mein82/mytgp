<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentAssProject extends Model
{
    use HasFactory;

    public $table = 'talent_ass_project';
    
    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }
}
