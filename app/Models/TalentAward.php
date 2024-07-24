<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentAward extends Model
{
    use HasFactory;

      public $table = 'talent_awards';
    
   protected $fillable = [
        'year','title','talent_id'
    ];
}
