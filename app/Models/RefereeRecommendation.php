<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefereeRecommendation extends Model
{
    use HasFactory;

    public $table = 'referee_recommendation';

    protected $fillable = [
        'talent_id','academic','completing_task','express_verbally','express_written','communicate','commitment','emotional','personal','comment','status_id'
    ];

    public function status(){
        return $this->belongsTo(RefereeStatus::class,'status_id');
    }
    public function referee(){
        return $this->belongsTo(User::class,'referee_id');
    }
    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }

}
