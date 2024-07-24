<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentCPDNSR extends Model
{
    use HasFactory;

    public $table = 'talent_cpd_nsr';
    protected $fillable = [
        'type','year','mark','talent_id'
    ];
}
