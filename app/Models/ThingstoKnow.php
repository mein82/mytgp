<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThingstoKnow extends Model
{
    use HasFactory;
    public $table = 'things_to_know';
    protected $fillable = [
        'title','url','image','group_id'
    ];
}
