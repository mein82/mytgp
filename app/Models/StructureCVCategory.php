<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureCVCategory extends Model
{
    use HasFactory;

    public $table = 'structure_cv_category';


    public function question(){
         return $this->hasMany(StructureCV::class,'category_id');
     }

}
