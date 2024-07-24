<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class TalentTWER extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public $table = 'talent_twer';

    protected $auditEvents = [
        'updated',
    ];

    protected $auditExclude = [
        'status_id'
    ];

    protected $fillable = ['series', 'talent_id', 'title', 'background', 'problem', 'situation', 'situation_file', 'target', 'target_file', 'gap', 'gap_file', 'stratergies', 'plan', 'plan_file', 'effect', 'followup', 'spread', 'well', 'notwell', 'helped', 'hindered','status_id'];

    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }

    public function comment(){
        return $this->hasMany(TalentTWERComment::class,'twer_id')->orderBy('created_at','desc');
    }

}
