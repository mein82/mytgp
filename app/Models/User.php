<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use OwenIt\Auditing\Contracts\Auditable;
// use App\Traits\UUID;


class User extends Authenticatable implements MustVerifyEmail, Auditable
{
    use HasApiTokens, HasFactory, Notifiable;
    use \OwenIt\Auditing\Auditable;
    // use UUID;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $keyName = 'uuid';

    protected $fillable = [
        'username','name', 'email', 'password','group_id','status_id','avatar','designation','grade','organization','address','contactno','mobile','dob','email_verified_at','grade_id','scheme_id','programme_id','main'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
     protected $auditEvents = [
        'updated',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setNameAttribute($value){
       $this->attributes['name'] = strtoupper($value);

    }

    public function getFirstnameAttribute(){
       $arr = explode(" ", $this->name);
       return $arr[0];

    }

    public function getFullDesignationAttribute(){
        return $this->designation.' '.($this->scheme->name??''). $this->grade_->name??'';
 
     }

    public function setDesignationAttribute($value){
       $this->attributes['designation'] = strtoupper($value);

    }

    public function setOrganizationAttribute($value){
       $this->attributes['organization'] = strtoupper($value);

    }
    
    public function setAddressAttribute($value){
       $this->attributes['address'] = strtoupper($value);
    }

    public function getDobAttribute($value){
        if(is_null($value)) return '';
        return date("d-m-Y",strtotime($value));
    }

    public function setDobAttribute($value){
        $this->attributes['dob'] = date("Y-m-d",strtotime($value));
    }
    
    public function group(){
        return $this->belongsTo(Group::class,'group_id');
    }

    public function getRoleAttribute(){
        $role = '';
        if($this->group_id==2)
            $role .= '<span class="me-2 mb-1 badge badge-success fw-bold">Secretariat</span>';
        if($this->group_id==3)
            $role .= '<span class="me-2 mb-1 badge badge-info fw-bold">Applicant</span>';
        if($this->group_id==4 || $this->referee->count()>0)
            $role .= '<span class="me-2 mb-1 badge badge-light-info fw-bold">Referee</span>';
        if($this->group_id==5)
            $role .= '<span class="me-2 mb-1 badge badge-primary fw-bold">Panel</span>';
        if($this->group_id==6 || $this->supervisor->count()>0)
            $role .= '<span class="me-2 mb-1 badge badge-light-danger fw-bold">Supervisor</span>';
        if($this->group_id==7)
            $role .= '<span class="me-2 mb-1 badge badge-danger fw-bold">Talent</span>';

        return $role;
    }

    public function talent(){
         return $this->hasOne(Talent::class,'user_id')->where('level_id',2);
    }

    public function applicant(){
         return $this->hasOne(Talent::class,'user_id')->where('level_id',1);
    }

    public function notification(){
         return $this->hasMany(Notify::class,'user_id');
    }

    public function referee(){
        return $this->hasMany(RefereeRecommendation::class,'referee_id');
    }

    public function supervisor(){
        return $this->hasMany(Supervisor::class,'super_id')->whereHas('talent.status', function($q){$q->where('final_id',1);});
    }

    public function scheme(){
        return $this->belongsTo(Scheme::class,'scheme_id');
    }

    public function grade_(){
        return $this->belongsTo(Grade::class,'grade_id');
    }
    public function programme(){
        return $this->belongsTo(Programme::class,'programme_id');
    }

    public function locks(){
        return $this->hasMany(LockUser::class,'user_id');
    }

}
