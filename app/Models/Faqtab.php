<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqtab extends Model
{
    use HasFactory;
    protected $table = 'faq_tab';
    protected $fillable = ['title'];

    public function content(){
        return $this->hasMany(Faqcontent::class,'tab_id');
    }
}
