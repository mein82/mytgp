<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentLNPT extends Model
{
    use HasFactory;

    public $table = 'talent_lnpt';
    
    protected $fillable = [
        'year','mark','talent_id'
    ];
}
