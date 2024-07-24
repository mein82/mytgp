<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['title','content','public_id','status_id','start_date','end_date'];

    public function notify(){
        return $this->hasMany(Notify::class,'notification_id');
    }
}
