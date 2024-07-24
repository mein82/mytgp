<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentFile extends Model
{
    use HasFactory;


    public $table = 'talent_files';

   protected $fillable = [
        'filename','file_id','talent_id','year','point'
    ];

    

    public function type(){
        return $this->belongsTo(FileType::class,'file_id');
    }

    public function talent(){
        return $this->belongsTo(Talent::class,'talent_id');
    }

}
