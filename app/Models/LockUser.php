<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LockUser extends Model
{
    use HasFactory;

    protected $table = 'locks_user';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function lock(){
        return $this->belongsTo(Locks::class,'lock_id');
    } 
}
