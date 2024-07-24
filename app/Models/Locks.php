<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locks extends Model
{
    use HasFactory;

    protected $fillable = ['type_id','name','start_date','end_date'];

    public function users(){
        return $this->hasMany(LockUser::class,'lock_id');
    }

    public function type(){
        return $this->belongsTo(LocksType::class,'type_id');
    } 

}
