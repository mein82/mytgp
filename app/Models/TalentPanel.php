<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentPanel extends Model
{
    use HasFactory;

    public $table = 'talent_panel';
    protected $fillable = [
        'talent_id','panel_id','comment','status_id','remark','facilitator','research','reason'
    ];
    
    public function panel(){
        return $this->belongsTo(User::class,'panel_id');
    }

    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }
    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }
}
