<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqcontent extends Model
{
    use HasFactory;

    protected $table = 'faq_content';
    protected $fillable = ['question','answer','tab_id'];

    public function tab(){
        return $this->belongsTo(Faqtab::class,'tab_id');
    } 
}
