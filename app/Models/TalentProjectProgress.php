<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentProjectProgress extends Model
{
    use HasFactory;

    public $table = 'talent_project_progress';
    
    protected $fillable = [
        'project_id','description','filename'
    ];

    public function status(){
        return $this->hasMany(ProgressStatus::class,'progress_id');
    }

    public function project(){
        return $this->belongsTo(TalentProject::class,'project_id');
    }
}
