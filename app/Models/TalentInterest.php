<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentInterest extends Model
{
    use HasFactory;

    public $table = 'talent_interest';
    
   protected $fillable = [
        'area','title','talent_id'
    ];
}
