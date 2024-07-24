<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentAssProfile extends Model
{
    use HasFactory;

    public $table = 'talent_ass_profile';
    
    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }
    
}
