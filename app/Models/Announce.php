<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;

    public $table = 'announcement';

    protected $fillable = [
        'content','status_id','link_lable','link','button'
    ];
}
