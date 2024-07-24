<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $table = 'talent_supervisor';
    
    public function talents(){
        return $this->hasMany(Talent::class,'talent_id');
    }

    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }

    public function super(){
        return $this->belongsTo(User::class,'super_id');
    }
}
