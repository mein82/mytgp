<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TOR extends Model
{
    use HasFactory;

    protected $table = 'terms';
     protected $fillable = ['content', 'group_id'];
}
