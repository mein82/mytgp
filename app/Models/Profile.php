<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public $table = 'talent_profile';
    protected $fillable = ['talent_id','personality_flag','personality_test','assessor_comment','proposed_project','proposed_supervisor',
	'strength_L','lack_L','strength_C','lack_C','strength_G','lack_G',
	'point_type','cpd_year','lnpt_y1','lnpt_y2','lnpt_y3','lnpt_m1','lnpt_m2','lnpt_m3','lnpt_r1','lnpt_r2','lnpt_r3','a110','a11','b1','b2b3','a1a2','a3','a4','a5','a61','a62','a7','a8','a9',
	'image_L','image_C','image_G','image_P','image_V',
	'generated'];

    public function talent(){
		return $this->belongsTo(Talent::class,'talent_id');
	}

	public function getTotalcpdAttribute(){
		return ($this->a110+$this->a11+$this->b1+$this->b2b3);
	}

	public function getTotalnsrAttribute(){
		return ($this->a1a2+$this->a3+$this->a4+$this->a5+$this->a61+$this->a62+$this->a7+$this->a8+$this->a9);
	}
}
