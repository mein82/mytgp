<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Talent extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use \Bkwld\Cloner\Cloneable;

    protected $auditEvents = [
        'updated',
    ];

    protected $cloneable_relations = ['academics','specializations','designations','lnpt','cpdnsr','status','awards','interest'];

    public $table  = 'talents';

        protected $fillable = [
                    'user_id',
                    'photo',
                     'title_id',
                     'ic_no',
                     'dob',
                     'gender_id',
                     'ethnic_id',
                     'marital_id',
                     'position',
                     'programme_id',
                     'office_street',
                     'office_state',
                     'office_city',
                     'office_postcode',
                     'office_phone',
                     'mobile_phone',
                     'home_street',
                     'home_state',
                     'home_city',
                     'home_postcode',
                     'home_phone',
                     'official_email',
                     'personal_email',
                     'facebook',
                     'twitter',
                     'other_social',
                     'year_of_appt',
                     'year_of_conf',
                     'ccpd_file',
                     'cpd_file',
                     'cv_file',
                     'lnpt_file',
                     'type_id',
                     'headquarters',
                     'managerial_id',
                     'managerial_remark',
                     'managerial_year',
                     'committee_pos_id',
                     'committee_year',
                     'committee_remark',
                     'programme_pos_id',
                     'programme_year',
                     'programme_remark',
                     'voluntary_id',
                     'voluntary_org',
                     'voluntary_pos_id',
                     'voluntary_year',
                     'research_id',
                     'research_role',
                     'research_title',
                     'research_nmrrid',
                     'present_id',
                     'present_remark',
                     'present_year',
                     'present_type',
                     'present_title',
                     'present_venue',
                     'publish_id',
                     'publish_remark',
                     'publish_title',
                     'publish_year',
                     'statement',
                     'talent_code',
                     'applicant_id',
                     'level_id',
                     'open_id'
                    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function setPositionAttribute($value){
       $this->attributes['position'] = strtoupper($value);

    }

    public function getGenderAttribute(){
        if ($this->gender_id==1)
            return 'MALE';
        else
            return 'FEMALE';

    }

    public function getFullnameAttribute(){
        if(is_null($this->title_id))
            return $this->user->name;
        return $this->title->name.' '.$this->user->name;
    }

    public function getDobAttribute($value){
        if(is_null($value)) return '';
        return date("d-m-Y",strtotime($value));
    }

    public function getAgeAttribute(){
        $datetime1 =  new \DateTime($this->dob);//\DateTime::createFromFormat('ymd', $date);
        $datetime2  = new \DateTime('today');
        $interval = $datetime1->diff($datetime2);
        return $interval->format('%y');
    }

    public function getMarkAgeAttribute(){
        if($this->age<35)
            return 1;
        elseif($this->age>=35 && $this->age<=45)
            return 2;
        else
            return 1;
    }

    public function getMarkHqAttribute(){
        if($this->headquarters=='1')
            return 1;
        elseif($this->headquarters=='0')
            return 2;
        else
            return 0;
    }

    public function getMarkWorkExpAttribute(){
        if(!is_null($this->year_of_appt)){
            $year = date("Y")-$this->year_of_appt;
            if($year<10)
                return 1;
            elseif($year>=10 && $year<=20)
                return 2;
            else
                return 1;
        }else
            return 0;
    }

    public function getMarkManagerExpAttribute(){
        if($this->managerial_id==6)
            return 3;
        elseif($this->managerial_id==5)
            return 2;
        elseif($this->managerial_id>=2 && $this->managerial_id>=4)
            return 1;
        else
            return 0;
    }

    public function getMarkPostgradAttribute(){
        if ($this->academics->whereIn('type_id',[5,7])->first())
            return 3;
        elseif ($this->academics->where('type_id',4)->first())
            return 2;
        elseif ($this->academics->where('type_id',3)->first())
            return 1;
        else
            return 0;
    }

    public function getMarkCommInvAttribute(){
        if($this->committe_id==9)
            return 4;
        elseif($this->committe_id>=4 && $this->committe_id>=8)
            return 3;
        elseif($this->committe_id==3)
            return 2;
        elseif($this->committe_id==2)
            return 1;
        else
            return 0;
    }

    public function getMarkProgInvAttribute(){
        if($this->programme_pos_id==9)
            return 4;
        elseif($this->programme_pos_id>=4 && $this->programme_pos_id>=8)
            return 3;
        elseif($this->programme_pos_id==3)
            return 2;
        elseif($this->programme_pos_id==2)
            return 1;
        else
            return 0;
    }

    public function getMarkLNPTAttribute(){
        if(($this->lnpt->first()->mark??0)>90)
            return 3;
        elseif(($this->lnpt->first()->mark??0)<=90 && ($this->lnpt->first()->mark??0)>=85)
            return 2;
        elseif(($this->lnpt->first()->mark??0)<85)
            return 1;
        else
            return 0;
    }

    public function getMarkSocAttribute(){
        if($this->voluntary_pos_id==6)
            return 3;
        elseif($this->voluntary_pos_id>=2 && $this->voluntary_pos_id>=5)
            return 2;
        elseif($this->voluntary_pos_id==1)
            return 1;
        else
            return 0;
    }

    public function getMarkresearchAttribute(){
        if($this->publish_id==1)
            return 4;
        elseif($this->present_id==1)
            return 3;
        elseif($this->research_role==2)
            return 2;
        elseif($this->research_role==1)
            return 1;
        else
            return 0;   
    }

    
    public function getArsAttribute(){
        return ($this->markage+$this->markworkexp+$this->markhq+$this->markmanagerexp+$this->markpostgrad+$this->markcomminv+$this->markproginv+$this->markLNPT+$this->marksoc+$this->markresearch);
    }

    public function getYearofserviceAttribute(){
        if(!is_null($this->year_of_appt))
            return date("Y")-$this->year_of_appt;
        else
            return '-';
    }

    public function applicant(){
            return $this->hasOne(self::class,'user_id','user_id')->where('level_id',1);
    }

    public function setDobAttribute($value){
        $this->attributes['dob'] = date("Y-m-d",strtotime($value));
    }
    
    public function setOfficeStreetAttribute($value){
       $this->attributes['office_street'] = strtoupper($value);
    }

    public function setOfficeCityAttribute($value){
       $this->attributes['office_city'] = strtoupper($value);
    }

    public function setHomeStreetAttribute($value){
       $this->attributes['home_street'] = strtoupper($value);
    }

    public function setHomeCityAttribute($value){
       $this->attributes['home_city'] = strtoupper($value);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    
    public function title(){
        return $this->belongsTo(Title::class,'title_id');
    }

    public function marital(){
        return $this->belongsTo(Marital::class,'marital_id');
    }

    public function officestate(){
        return $this->belongsTo(State::class,'office_state');
    }

    public function homestate(){
        return $this->belongsTo(State::class,'home_state');
    }
    public function ethnic(){
        return $this->belongsTo(Ethnic::class,'ethnic_id');
    }
    public function programme(){
        return $this->belongsTo(Programme::class,'programme_id');
    }

    public function academics(){
        return $this->hasMany(TalentAcademic::class,'talent_id')->orderBy('year','desc');
    }

    public function specializations(){
        return $this->hasOne(TalentSpecialization::class,'talent_id');
    }
    
    public function designations(){
        return $this->hasMany(TalentDesignation::class,'talent_id');
    }

    public function lnpt(){
        return $this->hasMany(TalentLNPT::class,'talent_id')->orderBy('year','desc');
    }
    
    public function cpdnsr(){
        return $this->hasMany(TalentCPDNSR::class,'talent_id')->orderBy('year','desc');
    }

    public function cpd(){
        return $this->hasOne(TalentCPD::class,'talent_id');
    }
    
    public function status(){
        return $this->hasOne(TalentStatus::class,'talent_id');
    }

    public function awards(){
        return $this->hasMany(TalentAward::class,'talent_id')->orderBy('year','desc');
    }
    public function interest(){
        return $this->hasMany(TalentInterest::class,'talent_id');
    }

    public function managerial(){
        return $this->belongsTo(Managerial::class,'managerial_id');
    }

    public function committee(){
        return $this->belongsTo(Position::class,'committee_pos_id');
    }

    public function projprog(){
        return $this->belongsTo(Position::class,'programme_pos_id');
    }

    public function social(){
        return $this->belongsTo(PositionSocial::class,'voluntary_pos_id');
    }
    
    public function selflog(){
        return $this->hasOne(TalentLogbook::class,'talent_id')->where('series', 0);
    }

    public function selflog1(){
        return $this->hasOne(TalentLogbook::class,'talent_id')->where('series', 1);
    }

    public function selflog2(){
        return $this->hasOne(TalentLogbook::class,'talent_id')->where('series', 2);
    }

    public function selflog3(){
        return $this->hasOne(TalentLogbook::class,'talent_id')->where('series', 3);
    }

    public function superlog1(){
        return $this->hasOne(SupervisorLogbook::class,'talent_id')->where('series', 1);
    }

    public function superlog2(){
        return $this->hasOne(SupervisorLogbook::class,'talent_id')->where('series', 2);
    }

    public function superlog3(){
        return $this->hasOne(SupervisorLogbook::class,'talent_id')->where('series', 3);
    }

    public function twer1(){
        return $this->hasOne(TalentTWER::class,'talent_id')->where('series', 1);
    }
    
    public function twer2(){
        return $this->hasOne(TalentTWER::class,'talent_id')->where('series', 2);
    }

    public function scv1(){
        return $this->hasOne(TalentSCV::class,'talent_id')->where('series', 1);
    }
    
    public function scv2(){
        return $this->hasOne(TalentSCV::class,'talent_id')->where('series', 2);
    }

    public function reflog(){
        return $this->hasMany(RefLogbook::class,'talent_id');
    }

    public function document(){
        return $this->hasMany(TalentFile::class,'talent_id')->orderBy('created_at','desc');
    }

    public function recommend(){
        return $this->hasMany(RefereeRecommendation::class,'talent_id');
    }

    public function panel(){
        return $this->hasOne(TalentPanel::class,'talent_id')->whereHas('panel',function($query){ $query->where('main',1);});
    }
    public function panel_auth(){
        return $this->hasOne(TalentPanel::class,'talent_id')->where('panel_id', \Auth::user()->id);
    }
    public function panels(){
        return $this->hasMany(TalentPanel::class,'talent_id')->whereHas('panel',function($query){ $query->whereNull('main');});
    }

    public function suggestedsupervisor(){
        return $this->hasMany(SuggestSupervisor::class,'talent_id');
    }

    public function panelname(){
        return $this->hasMany(TalentPanelname::class,'talent_id');
    }

    public function supervisor(){
        return $this->hasOne(Supervisor::class,'talent_id')->where('status_id', 1);
    }

    public function supervisors(){
        return $this->hasMany(Supervisor::class,'talent_id')->orderBy('status_id','desc');
    }

    public function course(){
        return $this->hasMany(TalentCourse::class,'talent_id');
    }
    
    public function project(){
        return $this->hasMany(TalentProject::class,'talent_id');
    }

    public function latestproject(){
        return $this->hasOne(TalentProject::class,'talent_id')->orderBy('updated_at','desc');
    }

    public function profile(){
        return $this->hasOne(Profile::class,'talent_id');
    }

    public function achievement(){
        return $this->hasOne(TalentAR::class,'talent_id');
    }

    public function assproject(){
        return $this->hasOne(TalentAssProject::class,'talent_id');
    }

    public function scopeApplicantComplete($query){
        return $query->has('selflog')->whereNotNull('statement')
        ->withCount(['reflog','recommend'=> function ($q){
            $q->whereNotNull('status_id');
        }])
        ->having('recommend_count', '>', 1)
        ->having('reflog_count', '>', 1)
        ->whereHas('scv1', function ($q){
            $q->whereNotNull('status_id');
        });
    }
    
    // public function panels(){
    //     return $this->hasMany(TalentPanel::class,'talent_id')->whereHas('panel',function($query){ $query->whereNull('main');});
    // }

    
    
    
    // public function selfassessment(){
    //     return $this->hasMany(TalentAssessment::class,'talent_id');
    // }

    // public function referees(){
    //     return $this->hasMany(RefereeRecommendation::class,'talent_id');
    // }
    // public function refassessments(){
    //     return $this->hasMany(RefereeAssessment::class,'talent_id');
    // }

    // public function facilitator(){
    //     return $this->hasMany(Facilitator::class,'talent_id');
    // }

    
    

    // public function history(){
    //     return $this->hasMany(DesigHistory::class,'talent_id');
    // }

    



}
