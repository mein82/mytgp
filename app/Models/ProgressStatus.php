<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressStatus extends Model
{
    use HasFactory;

    public $table = 'progress_status';



    public function status(){
        return $this->belongsTo(ProjectStatus::class,'status_id');
    }
}
