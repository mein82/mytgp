<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Markdown;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Talent;
use App\Models\Notification;
use App\Models\Notify;
use App\Models\Title;
use App\Models\Ethnic;
use App\Models\Grade;
use App\Models\Marital;
use App\Models\Programme;
use App\Models\Qualification;
use App\Models\Scheme;
use App\Models\State;
use App\Models\Managerial;
use App\Models\Position;
use App\Models\PositionSocial;
use App\Models\TalentStatus;
use App\Models\TalentAcademic;
use App\Models\TalentAward;
use App\Models\TalentCPD;
use App\Models\TalentDesignation;
use App\Models\TalentInterest;
use App\Models\TalentLNPT;
use App\Models\TalentCPDNSR;
use App\Models\TalentFile;
use App\Models\TalentSpecialization;
use App\Models\RefereeRecommendation;
use App\Models\AssessmentCategory;
use App\Models\TalentLogbook;
use App\Models\LogBook;
use App\Models\RefLogbook;
use App\Models\Status;
use App\Models\TalentPanel;
use App\Models\TalentPanelname;
use App\Models\SuggestSupervisor;
use App\Models\TalentTWER;
use App\Models\StatusFinal;
use App\Models\Supervisor;
use App\Models\TalentCourse;
use App\Models\TalentProject;
use App\Models\Courses;
use App\Models\CourseDomain;
use App\Models\TalentCourseStatus;
use App\Models\ProjectStatus;
use App\Models\TalentProjectProgress;
use App\Models\ProgressStatus;
use App\Models\FileType;
use App\Models\StructureCVCategory;
use App\Models\TalentSCV;
use App\Models\SupervisorLogbook;
use App\Models\Group;
use App\Models\TalentTWERComment;
use App\Models\Profile;
use App\Models\LockUser;
use App\Models\Locks;
use App\Models\LocksType;
use App\Models\CourseType;
use App\Models\Alert;
use App\Models\Color;
use App\Models\ThingstoKnow;
use App\Models\TOR;
use App\Models\Announce;
use App\Models\Banner;
use App\Models\Publication;
use App\Models\CourseAttendance;
use App\Models\Faqtab;
use App\Models\Faqcontent;
use App\Models\TalentAssProfile;
use App\Models\TalentAssProject;
use App\Models\TalentAR;

use App\Mail\ProposeReferee;
use App\Mail\NewReferee;
use App\Mail\RecommendationComplete;
use App\Mail\CourseInvite;
use App\Mail\NotificationMail;
use App\Mail\InformSupervisor;
use App\Mail\InformTalent;
use App\Mail\Assessment;
use App\Mail\AssComplete;
// use App\Mail\AssCompleteSup;


use Auth;
use DataTables;
//observer
use App\Observers\ModelObserver;
use App\Rules\MatchPassword;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $alerts = Alert::whereNull('read')->where('user_id', Auth::user()->id)->get();
            \View::share('alerts', $alerts);
            return $next($request);
        });
        
    }

    function index($role=''){
        
        \View::share('dashboard', $role);

        \Session::put('firstlogin',(\Session::get('firstlogin')+1));

        $talent = null;$talents = array();
        $applicant = null;$applicants = array();

        $incomplete =array();$complete =array();

        $courses = array();
        // $setting = Setting::first();

        $notification = array();
        
        $thingstoknow = ThingstoKnow::whereRaw('FIND_IN_SET('.Auth::user()->group_id.',group_id)')->get();
        $tor = TOR::get();
        

        if(Auth::user()->group_id==2 || Auth::user()->group_id==1){//sekretariat/admin
            $applicants = User::where('group_id',3)
            ->where(function($quer) {
                $quer->orWhereHas('applicant', function ($query){
                    $query->whereHas('status', function ($subquery){
                        $subquery->where('status_id',1);
                    });
                });
            })
            ->get();
            $talents = Talent::whereHas('user', function ($subquery){
                            $subquery->where('group_id',7);
                            })->where('level_id',2)->get();
           
            
        }
        if(Auth::user()->group_id==3){//applicant
            $applicant = Talent::where('user_id',Auth::user()->id)->where('level_id',1)
                        ->first();
        }

        if(Auth::user()->group_id==7){//talent
            $talent = Talent::where('user_id',Auth::user()->id)
                        ->where('level_id',2)
                        ->first();

            $applicant = Talent::where('user_id',Auth::user()->id)->where('level_id',1)
                        ->first();            
            if(!$applicant){
                $newModel = $talent->duplicate()->fill([
                    'level_id' => 1
                ]);
                $newModel->save();
            
            }
        }

        // if(Auth::user()->group_id==4 ||Auth::user()->referee->count()>0){//referee

        // }

        if(Auth::user()->group_id==5){//panel
            $applicants = Talent::whereHas('user', function ($subquery){
                $subquery->where('group_id',3)->when(!is_null(Auth::user()->programme_id), function($query){
                    $query->where('programme_id',Auth::user()->programme_id);});
                })
                ->whereHas('status', function ($subquery){
                    $subquery->where('status_id',1);
                });
            if(!is_null(Auth::user()->programme_id))
            $applicants = $applicants->where('programme_id',Auth::user()->programme_id);


            $talents = Talent::whereHas('user', function ($subquery){
                            $subquery->where('group_id',7);
                            });
            if(!is_null(Auth::user()->programme_id))
                  $talents = $talents->where('programme_id',Auth::user()->programme_id);

                $talents = $talents->where('level_id',2)->get();

        }
        // if(Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0){//supervisor
        //     // $talents = Supervisor::where('super_id',Auth::user()->id)->get();
        // }

        $courses = Courses::whereYear('start_date', date("Y"))->orderBy('start_date')->get();
        $month = Courses::selectRaw(\DB::raw('month(start_date) as month'))->distinct('month(start_date)')->whereYear('start_date', date("Y"))->orderBy(\DB::raw('month(start_date)'))->pluck('month');
        $notify = Notification::where('start_date','<=',date("Y-m-d"))
        ->where('end_date','>=',date("Y-m-d"))->orderBy('created_at','desc')->get();
        return view('dashboard',compact('applicant','talent','notify','complete','notification','talent','incomplete','talents','applicants','courses','month','thingstoknow','tor'));
    }

    function modalnotification($id)
    {
        $announce = Notification::where('id',$id)->first();
        if ($announce->public_id!=1) {
            $announce->title = '<h1 class="mb-3 fs-3">'.$announce->title.'</h1><div class="accordion accordion-icon-toggle" id="kt_accordion_2"><div><div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1"><span class="accordion-icon"><span class="svg-icon svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
        </svg></span></span><h3 class="fs-6 text-gray-600 fw-bold mb-0 ms-4">Recepients</h3></div><div id="kt_accordion_2_item_1" class="fs-7 text-primary collapse ps-10" data-bs-parent="#kt_accordion_2"> '.($announce->notify->pluck('user.name')->implode(', ')).'</div></div></div>';
        }else{
             $announce->title = '<h1 class="mb-3">'.$announce->title.'</h1>';
        }
        return response()->json($announce);
    }

    function registerapplicant(){
        $user = User::where('id',Auth::user()->id)->first();
        $user->group_id = 3;
        $user->save();

        return redirect('dashboard')->with('status','You are now an applicant. Please proceed to complete the task below.');
    } 

    function accountsetting(){
        $grades = Grade::pluck('name', 'id');
        $schemes = Scheme::pluck('name', 'id');
        return view('account-setting',compact('grades','schemes'));
    }

    function changepassword(Request $req){
        $req->validate([
            'currentpassword' => [new MatchPassword()],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($req->newpassword)]);

        return redirect()->back()->with('status','Password have been changed');

    }

    function changeemail(Request $req){

        $req->validate([
            'confirmemailpassword' => [new MatchPassword()],
            'emailaddress' => 'email|unique:users,email,'.auth()->user()->id.',id',
        ]);

        User::find(auth()->user()->id)->update(['email'=> $req->emailaddress]);

        return redirect()->back()->with('status','Email have been changed');
        
    }

    function changeprofile($id, Request $req){
        $user = User::where('id',$id)->first();
        
        if ($req->hasFile('avatar')){
            
            // if (!is_null($talent) && file_exists(public_path('photo/'.$talent->photo))) unlink(public_path('photo/'.$talent->photo));
            $file = $req->file('avatar');
            $filename = $file->getClientOriginalName();
            //Move Uploaded File
            $destinationPath = public_path('photo');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            
            $file->move($destinationPath,$newname);
            
            $img = \Image::make($destinationPath.'/'.$newname);
            $img->resize(99, 142)->save();
            $req->merge(array('avatar' =>$newname));

            if($user->avatar!='default.png'&& file_exists(public_path('photo/'.$user->avatar))) unlink(public_path('photo/'.$user->avatar));
        }

        $user->fill($req->input())->save();

        return redirect()->back()->with('status','Profile have been updated.');

    }

    function eform(){
        $title = Title::pluck('name','id')->prepend('', '');
        $ethnic = Ethnic::pluck('name', 'id')->prepend('', '');
        $marital = Marital::pluck('name', 'id')->prepend('', '');
        $state = State::pluck('name', 'id')->prepend('', '');
        $qualification = Qualification::pluck('name', 'id')->prepend('', '');
        $programme = Programme::pluck('name', 'id')->prepend('', '');
        $grades = Grade::pluck('name', 'id')->prepend('', '');
        $schemes = Scheme::pluck('name', 'id')->prepend('', '');
        $managerial = Managerial::pluck('name', 'id')->prepend('', '');
        $position = Position::pluck('name', 'id')->prepend('', '');
        $social = PositionSocial::pluck('name', 'id')->prepend('', '');

        $talent = Talent::where('user_id',Auth::user()->id)->first();

        return view('applicant.e-form',compact('title','ethnic','marital','state','qualification','programme','schemes','grades','managerial','position','social','talent'));
    }

    function inseform(Request $req){
        // dd($req);
        $steps = 0; $step2 = false; $step3 = false; $step4 = false;
        $user = User::where('id',Auth::user()->id)->first();
        
        $talent = new Talent(); 
        

        if ($req->hasFile('avatar')){
            $rules = array(
                'avatar' => 'mimes:jpg,jpeg,png'
            );
        
            $validator = \Validator::make($req->all(), $rules);

            if ($validator->fails()) {
                return \Redirect::back()->with('error','Image file only.')->withInput(); 
            }
            // if (!is_null($talent) && file_exists(public_path('photo/'.$talent->photo))) unlink(public_path('photo/'.$talent->photo));
            $file = $req->file('avatar');
            $filename = $file->getClientOriginalName();
            if (array_search_partial($filename)) {
                return \Redirect::back()->with('error','Image file only.')->withInput(); 
            }

            //Move Uploaded File
            $destinationPath = public_path('photo');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            
            $file->move($destinationPath,$newname);
            try {
                // Validate the value...
                $img = \Image::make($destinationPath.'/'.$newname);
                $img->resize(99, 142)->save();
                $req->merge(array('avatar' =>$newname));

            } catch (Exception  $e) {
      
                dd("Error");
               
            
            }
        }
        if($user->group_id==3)
            $req->merge(array('level_id' =>1));
        else
            $req->merge(array('level_id' =>2));

        $req->merge(array('user_id' =>$user->id));



        $user->fill($req->input())->save();
        $talent->fill($req->input())->save();

        $req->merge(array('talent_id' =>$talent->id));
            
        $talentstatus = New TalentStatus();
        $talentstatus->talent_id = $talent->id;
        $talentstatus->status_id = 1;
        $talentstatus->save();
        $steps++;

        //academic
        foreach ($req->kt_docs_repeater_academic as $key) {
            if(!is_null($key['type_id'])){
                $step2 = true;
                TalentAcademic::observe(new ModelObserver);
                $academic = new TalentAcademic(); 
                $req->merge(array('type_id' =>$key['type_id'],'qualification'=>$key['qualification'],'year'=>$key['aca_year'],'institute'=>$key['institute']));
                $academic->fill($req->input())->save();
            }
        }

        if($step2) $steps++;

        //specialization
        if ($req->specialization!=''){
            $specialization = new TalentSpecialization(); 
            $specialization->fill($req->input())->save();
        }

        //previous designation
        foreach ($req->kt_docs_repeater_designation as $key) {
            if(!is_null($key['prev_desig'])){
                $step3 = true;
                $designation = new TalentDesignation(); 
                $designation->talent_id = $talent->id;
                $designation->designation = $key['prev_desig'];
                $designation->organization = $key['prev_org'];
                // $date = explode(" to ",$key['date_range']);
                $designation->start_date = $key['prev_start'];//date("m-Y",strtotime($date[0]));
                $designation->end_date = $key['prev_end'];//date("m-Y",strtotime($date[1]));
                $designation->save();
            }
        }

        if($step3) $steps++;
        //lnpt
        foreach ($req->kt_docs_repeater_lnpt as $key) {
             if(!is_null($key['lnpt_year'])){
                $lnpt = new TalentLNPT();   
                $req->merge(array('year'=>$key['lnpt_year'],'mark'=>$key['lnpt_mark']));
                $lnpt->fill($req->input())->save();
            }
        }

        //cpd
        foreach ($req->kt_docs_repeater_cpdnsr as $key) {
             if(!is_null($key['cpdnsr_year'])){
                $cpd = new TalentCPDNSR();   
                $req->merge(array('type'=>$key['cpdnsr_type'], 'year'=>$key['cpdnsr_year'],'mark'=>$key['cpdnsr_mark']));
                $cpd->fill($req->input())->save();
            }
        }

        //apc/awrad
        foreach ($req->kt_docs_repeater_apc as $key) {
            if(!is_null($key['apc_title'])){
                $award = new TalentAward();   
                $req->merge(array('year'=>$key['apc_year'],'title'=>$key['apc_title']));
                $award->fill($req->input())->save();
            }
        }


        //interest
        foreach ($req->kt_docs_repeater_interest as $key) {
            if(!is_null($key['res_area'])){
                $interest = new TalentInterest(); 
                $req->merge(array('area'=>$key['res_area'],'title'=>$key['res_title']));
                $interest->fill($req->input())->save();
            }
        }


        //cpd log book
        if ($req->hasFile('cpd_complete')){
            $rules = array(
                'cpd_complete' => 'mimes:pdf'
            );
        
            $validator = \Validator::make($req->all(), $rules);

            if ($validator->fails()) {
                return \Redirect::back()->with('error','PDF file only.')->withInput(); 
            }
            $steps++;
            $destinationPath = public_path('attachment/cpd');
            $file = $req->file('cpd_complete');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);

            $myfile = new TalentFile();
            $myfile->talent_id = $talent->id;
            $myfile->file_id = 1;
            $myfile->filename=$newname;
            $myfile->save();
        }
        if ($req->hasFile('cpd_current')){
            $rules = array(
                    'cpd_current' => 'mimes:pdf'
            );
        
            $validator = \Validator::make($req->all(), $rules);

            if ($validator->fails()) {
                return \Redirect::back()->with('error','PDF file only.')->withInput(); 
            } 
            $destinationPath = public_path('attachment/cpd');
            $file = $req->file('cpd_current');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);
            
            $myfile = new TalentFile();
            $myfile->talent_id = $talent->id;
            $myfile->file_id = 2;
            $myfile->filename=$newname;
            $myfile->save();
        }

        if($steps<4)
            return redirect('dashboard')->with('status','You draft have been saved.');
        else
            return redirect('dashboard')->with('status','Congratulations! You have completed your profile.');
    }


    function editeform($id){
        $talent = Talent::find($id);
        $title = Title::pluck('name','id')->prepend('', '');
        $ethnic = Ethnic::pluck('name', 'id')->prepend('', '');
        $marital = Marital::pluck('name', 'id')->prepend('', '');
        $state = State::pluck('name', 'id')->prepend('', '');
        $qualification = Qualification::pluck('name', 'id')->prepend('', '');
        $programme = Programme::pluck('name', 'id')->prepend('', '');
        $grades = Grade::pluck('name', 'id')->prepend('', '');
        $schemes = Scheme::pluck('name', 'id')->prepend('', '');
        $managerial = Managerial::pluck('name', 'id')->prepend('', '');
        $position = Position::pluck('name', 'id')->prepend('', '');
        $social = PositionSocial::pluck('name', 'id')->prepend('', '');

        return view('applicant.e-form-edit',compact('talent','title','ethnic','marital','state','qualification','programme','schemes','grades','managerial','position','social'));

    }

    function updeform(Request $req, $id){

        $steps = 0; $step2 = false; $step3 = false; $step4 = false;
        $talent = Talent::where('id',$id)->first();
        $talent->fill($req->input())->save();

        $user = User::where('id',$talent->user_id)->first();
        if ($req->hasFile('avatar')){
            $rules = array(
                'avatar' => 'image|mimes:jpg,jpeg,png'
            );
        
            $validator = \Validator::make($req->all(), $rules);

            if ($validator->fails()) {
                return \Redirect::back()->with('error','Image file only.')->withInput(); 
            }
            $file = $req->file('avatar');
            $filename = $file->getClientOriginalName();

            if (array_search_partial($filename)) {
                return \Redirect::back()->with('error','Image file only.')->withInput(); 
            }

            if (!is_null($talent) && file_exists(public_path('photo/'.$talent->photo))) unlink(public_path('photo/'.$talent->photo));
            //Move Uploaded File
            $destinationPath = public_path('photo');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            
            $file->move($destinationPath,$newname);
            
            try {
                // Validate the value...
                $img = \Image::make($destinationPath.'/'.$newname);
                $img->resize(99, 142)->save();
                $req->merge(array('avatar' =>$newname));

            } catch (\Exception  $e) {
                unlink($destinationPath.'/'.$newname);
                dd("Error");
            
            }
           
        }


        $user->fill($req->input())->save();

        $req->merge(array('talent_id' =>$talent->id));

        //academic
        $exid = [];
        foreach ($req->kt_docs_repeater_academic as $key) {
            if(!is_null($key['type_id'])){
                $steps++;
                TalentAcademic::observe(new ModelObserver);
                if(!is_null($key['id'])) {
                    $academic = TalentAcademic::find($key['id']);
                } else {
                    $academic = new TalentAcademic(); 
                    
                }
                $req->merge(array('type_id' =>$key['type_id'],'qualification'=>$key['qualification'],'year'=>$key['aca_year'],'institute'=>$key['institute']));
                $academic->fill($req->input())->save();
                $exid[] = $academic->id;
            }
        }
        TalentAcademic::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();


        //specialization
        if ($req->specialization!=''){
            $specialization = TalentAcademic::where('talent_id',$talent->id)->first();
            if (!$specialization) $specialization = new TalentSpecialization(); 
            $specialization->fill($req->input())->save();
        }

        $exid = [];
        foreach ($req->kt_docs_repeater_designation as $key) {
            if(!is_null($key['prev_desig'])){
                $step3 = true;
                if(!is_null($key['id'])) {
                    $designation = TalentDesignation::find($key['id']);
                } else {
                    $designation = new TalentDesignation(); 
                }
                $designation->talent_id = $talent->id;
                $designation->designation = $key['prev_desig'];
                $designation->organization = $key['prev_org'];
                // $date = explode(" to ",$key['date_range']);
                $designation->start_date = $key['prev_start'];//date("m-Y",strtotime($date[0]));
                $designation->end_date = $key['prev_end'];//date("m-Y",strtotime($date[1]));
                $designation->save();
                $exid[] = $designation->id;
            }
        }
        TalentDesignation::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();


        if($step3) $steps++;
        //lnpt
        $exid = [];
        foreach ($req->kt_docs_repeater_lnpt as $key) {
             if(!is_null($key['lnpt_year'])){
                if(!is_null($key['id'])) {
                    $lnpt = TalentLNPT::find($key['id']);
                } else {
                    $lnpt = new TalentLNPT();  
                } 
                $req->merge(array('year'=>$key['lnpt_year'],'mark'=>$key['lnpt_mark']));
                $lnpt->fill($req->input())->save();
                $exid[] = $lnpt->id;
            }
        }
        TalentLNPT::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();


        //cpd
        $exid = [];
        foreach ($req->kt_docs_repeater_cpdnsr as $key) {
             if(!is_null($key['cpdnsr_year'])){
                if(!is_null($key['id'])) {
                    $cpd = TalentCPDNSR::find($key['id']);
                } else {
                    $cpd = new TalentCPDNSR();  
                } 
                $req->merge(array('type'=>$key['cpdnsr_type'], 'year'=>$key['cpdnsr_year'],'mark'=>$key['cpdnsr_mark']));
                $cpd->fill($req->input())->save();
                $exid[] = $cpd->id;
            }
        }
        TalentCPDNSR::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();

        //apc/awrad
        $exid = [];
        foreach ($req->kt_docs_repeater_apc as $key) {
            if(!is_null($key['apc_title'])){
                if(!is_null($key['id'])) {
                    $award = TalentAward::find($key['id']);
                } else {
                    $award = new TalentAward();
                }
                $req->merge(array('year'=>$key['apc_year'],'title'=>$key['apc_title']));
                $award->fill($req->input())->save();
                $exid[] = $award->id;
            }
        }
        TalentAward::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();


        //interest
        $exid = [];
        foreach ($req->kt_docs_repeater_interest as $key) {
            if(!is_null($key['res_area'])){
                if(!is_null($key['id'])) {
                    $interest = TalentInterest::find($key['id']);
                } else {
                    $interest = new TalentInterest();
                } 
                $req->merge(array('area'=>$key['res_area'],'title'=>$key['res_title']));
                $interest->fill($req->input())->save();
                $exid[] = $interest->id;
            }
        }
        TalentInterest::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();

        //cpd log book
        if ($req->hasFile('cpd_complete')){
            $rules = array(
                'cpd_complete' => 'mimes:pdf'
            );
        
            $validator = \Validator::make($req->all(), $rules);

            if ($validator->fails()) {
                return \Redirect::back()->with('error','PDF file only.')->withInput(); 
            }
            
            $steps++;
            $destinationPath = public_path('attachment/cpd');
            $file = $req->file('cpd_complete');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);

            $myfile = new TalentFile();
            $myfile->talent_id = $talent->id;
            $myfile->file_id = 1;
            $myfile->filename=$newname;
            $myfile->save();
        }
        if ($req->hasFile('cpd_current')){
            $rules = array(
                'cpd_current' => 'mimes:pdf'
            );
        
            $validator = \Validator::make($req->all(), $rules);

            if ($validator->fails()) {
                return \Redirect::back()->with('error','PDF file only.')->withInput(); 
            } 
            $destinationPath = public_path('attachment/cpd');
            $file = $req->file('cpd_current');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);
            
            $myfile = new TalentFile();
            $myfile->talent_id = $talent->id;
            $myfile->file_id = 2;
            $myfile->filename=$newname;
            $myfile->save();
        }

        if(Auth::user()->group_id==7 || Auth::user()->group_id<=2)
            return redirect('dashboard')->with('status','You have updated your profile.');
        if($steps<4)
            return redirect('dashboard')->with('status','You draft have been saved.');
        else
            return redirect('dashboard')->with('status','Congratulations! You have completed your profile.');
    }

    function applicantreferees(){
        $alert = Alert::where('user_id',Auth::user()->id)->where('title','Assessment Complete')->update(['read'=>1]);
        \View::share('alerts', Alert::whereNull('read')->where('user_id', Auth::user()->id)->get());
        $referees = RefereeRecommendation::where('talent_id',Auth::user()->applicant->id)->get();
        return view('applicant.referees',compact('referees'));
    }

    function insreferees(Request $req){
        $talent = Talent::where('user_id',Auth::user()->id)->first();
        
        $count = $talent->recommend->count();
        foreach($req->users as $u){
            if($count==2)
                break;
            
            $user = User::where('id',$u)->first();
            $referee =  new RefereeRecommendation();
            $referee->talent_id= $talent->id;
            $referee->referee_id = $user->id;
            $referee->save();

            $alert = new Alert();
            $alert->url = '/referee/recommendation';
            $alert->title = 'Referee Recommendation';
            $alert->description = 'Please response';
            $alert->user_id = $user->id;
            $alert->save();
            
            $count++;
            
            try{
                Mail::to($user->email)->send(new ProposeReferee($user, $talent));
            }catch (\Exception $e) {
                return redirect('applicant/referees')->with('error','There is an error while sending the email. Please click on the resend email link.');
            }
            // dd($count);

            // $markdown = new Markdown(view(), config('mail.markdown'));

            // return $markdown->render('email.propose-referee',[
            //    'user' => $user,
            //    'talent' => $talent
            //    ]);
        }
        
        return redirect('applicant/referees')->with('status', 'Referees have been added.');
    }

    function insreferee(Request $req){


        $talent = Talent::where('user_id',Auth::user()->id)->first();
        
        $randompwd = generateRandomString(); 
        
        // $user = User::first();
        $user = new User();
        $req->merge(array('email_verified_at' => date('Y-m-d H:i:s'), 'group_id' => 4, 'password' => Hash::make($randompwd)));
        $user->fill($req->input())->save();
        
         
        $referee =  new RefereeRecommendation();
        $referee->talent_id= $talent->id;
        $referee->referee_id = $user->id;
        $referee->save();

        $alert = new Alert();
        $alert->url = '/referee/recommendation';
        $alert->title = 'Referee Recommendation';
        $alert->description = 'Please response';
        $alert->user_id = $user->id;
        $alert->save();

        try{
           //email to referee login id
             Mail::to($user->email)->send(new NewReferee($randompwd, $user, $talent));
        }catch (\Exception $e) {
            return redirect('applicant/referees')->with('error','There is an error while sending the email. Please click on the resend email link.');
        }
         
        // $markdown = new Markdown(view(), config('mail.markdown'));

        //     return $markdown->render('email.propose-new-referee',[
        //        'user' => $user,
        //        'talent' => $talent,
        //        'randompwd' => $randompwd
        //        ]);
        
        return redirect('applicant/referees')->with('status', 'Referees have been added.');
    }

    function destroyreferee($id){
         $affectedRows  = RefereeRecommendation::where('id', '=', $id)->delete();
        return redirect()->back()->with('status', 'Referee have been removed.');
    }

    function emailreferee($id){
        $ref = RefereeRecommendation::where('id', '=', $id)->first();
        $user = User::where('id',$ref->referee_id)->first();
        $talent = Talent::where('id',$ref->talent_id)->first();

        try{
            Mail::to($user->email)->send(new ProposeReferee($user, $talent));
        }catch (\Exception $e) {
            return redirect('applicant/referees')->with('error','There is an error while sending the email. Please click on the resend email link.');
        }

        return redirect()->back()->with('status', 'A reminder has been sent via email notification to the referee.');
    }

    function emailrefereeassessment($id){
        $ref = RefereeRecommendation::where('id', '=', $id)->first();
        $user = User::where('id',$ref->referee_id)->first();
        $talent = Talent::where('id',$ref->talent_id)->first();

        try{
            Mail::to($user->email)->send(new Assessment($user, $talent));
        }catch (\Exception $e) {
            return redirect('applicant/referees')->with('error','There is an error while sending the email. Please click on the resend email link.');
        }

        return redirect()->back()->with('status', 'A reminder has been sent via email notification to the referee.');
    }
    
    function applicantlogbook(){

        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $edit = true;
        $logbook = new TalentLogbook();
        return view('applicant.logbook', compact('category','edit','logbook'));
    }

    function insselflog(Request $req){

        $logbook = TalentLogbook::where('talent_id',Auth::user()->talent->id??Auth::user()->applicant->id)->first();
        if(!$logbook) $logbook = new TalentLogbook();
        $req->merge(array('talent_id' =>Auth::user()->talent->id??Auth::user()->applicant->id, 'series'=> 0));
        $logbook->fill($req->input())->save();

        return redirect('dashboard')->with('status', 'Assessment have been done.');

    }

    function applicantlogbookview(){

        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $edit = false;
        $logbook = TalentLogbook::where('talent_id', Auth::user()->applicant->id)->where('series', 0)->first();
        return view('applicant.logbook', compact('category','edit','logbook'));
    }


    function talentlogbook($series){

        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $edit = false;
        
        $talent_id = Auth::user()->talent->id??Auth::user()->applicant->id;
        
        $logbook = TalentLogbook::where('talent_id', $talent_id)->where('series', $series)->first();
        if (!$logbook){
            $edit = true;
            $logbook = new TalentLogbook();
        }

        return view('talent.logbook', compact('category','edit','logbook','series'));
    }

    function instalentlog(Request $req){
        $logbook = TalentLogbook::where('talent_id',Auth::user()->talent->id??Auth::user()->applicant->id)->where('series', $req->series)->first();
        if(!$logbook) $logbook = new TalentLogbook();
        $req->merge(array('talent_id' =>Auth::user()->talent->id??Auth::user()->applicant->id));
        $logbook->fill($req->input())->save();

        return redirect('dashboard')->with('status', 'Assessment have been done.');

    }

    function talentlogbookview($series){

        $category = AssessmentCategory::orderBy('sort')->get();
        $edit = false;
        $logbook = TalentLogbook::where('talent_id', Auth::user()->talent->id??Auth::user()->applicant->id)->where('series', $series)->first();
        return view('talent.logbook', compact('category','edit','logbook'));
    }


    function talenttwer($series){
        $lock = true;
        $edit = false;
        if($series==1){
            if((Auth::user()->locks->where('lock.type_id',5)->first()->lock->end_date??'')!=''){
                $lock = true;
                $date = Auth::user()->locks->where('lock.type_id',5)->first()->lock->end_date??date("Y-m-d");
            }
            
            if(($date<date("Y-m-d"))){
                $edit = false;
            }else{
                $edit = true;
            }
        }
        if($series==2){
            if((Auth::user()->locks->where('lock.type_id',6)->first()->lock->end_date??'')!=''){
                $lock = false;
                $date = Auth::user()->locks->where('lock.type_id',6)->first()->lock->end_date??date("Y-m-d");
            }
            
            if(($date<date("Y-m-d"))){
                $edit = false;
            }else{
                $edit = true;
            }
        }
        
        $twer = TalentTWER::where('talent_id', Auth::user()->talent->id??Auth::user()->applicant->id)->where('series', $series)->first();
        if (!$twer){
            // $edit = true;
            $twer = new TalentTWER();
        }else{
            // if($edit){
            //     if($twer->status_id==1)
            //         $edit = false;
            //     else{
            //         $edit = true;
            //     }
            // }
        }
        
        $alert = Alert::where('user_id',Auth::user()->id)->where('title','TWER Comment')->update(['read'=>1]);
        \View::share('alerts', Alert::whereNull('read')->where('user_id', Auth::user()->id)->get());
        


        return view('talent.twer', compact('twer','edit','series'));

    }

    function instalenttwer(Request $req){
        $twer = TalentTWER::where('talent_id', Auth::user()->talent->id??Auth::user()->applicant->id)->where('series', $req->series)->first();
        if(!$twer) $twer = new TalentTWER();
        // dd($twer->talent->supervisor->super->email);
        $destinationPath = public_path('twer');
        if ($req->hasFile('situation_file')){
            $file = $req->file('situation_file');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);
            $req->merge(array('situation_file' => $newname));
        }
        if ($req->hasFile('target_file')){
            $file = $req->file('target_file');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);
            $req->merge(array('target_file' => $newname));
        }
        if ($req->hasFile('gap_file')){
            $file = $req->file('gap_file');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);
            $req->merge(array('gap_file' => $newname));
        }
        if ($req->hasFile('plan_file')){
            $file = $req->file('plan_file');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);
            $req->merge(array('plan_file' => $newname));
        }

        $req->merge(array('talent_id' =>Auth::user()->talent->id??Auth::user()->applicant->id, 'open_id'=>NULL));
        $twer->fill($req->input())->save();

        if($req->notify==1){
            $alert = new Alert();
            $alert->url = '/supervisor/talent/summary/twer/'.Auth::user()->id;
            $alert->title = 'TWER Updates';
            $alert->description = 'from talent '.Auth::user()->name;
            $alert->user_id = $twer->talent->supervisor->super_id;
            $alert->save();
            try{
            Mail::to($twer->talent->supervisor->super->email)->queue(new InformSupervisor($twer->talent, 'TWER'));
            }catch (\Exception $e) {
                return redirect('dashboard')->with('error','There is an error while sending the email.');
            }
        } 
        if($req->status_id==1)
            return redirect('dashboard')->with('status', 'TWER have been submitted.');
        else
            return redirect('dashboard')->with('status', 'TWER have been saved.');

    }

    function removetwerfile($file, $id){
        $twer = TalentTWER::find($id);
        if(!is_null($twer->$file)){
            if (file_exists(public_path('twer/'.$twer->$file))) unlink(public_path('twer/'.$twer->$file));
            $twer->$file = null;
            $twer->save();
        }

        return redirect()->back()->with('status','File have been removed');

    }

    function recommendationlist(){
        $alert = Alert::where('user_id',Auth::user()->id)->where('title','Referee Recommendation')->update(['read'=>1]);
        \View::share('alerts', Alert::whereNull('read')->where('user_id', Auth::user()->id)->get());
        $recommendation = RefereeRecommendation::where('referee_id',Auth::user()->id)->get();
        return view('referee.recommendation-list', compact('recommendation'));

    }

    function recommendation($id){
        $recommend = RefereeRecommendation::where('id', $id)->first();
        $edit = true;
        return view('referee.recommendation',compact('recommend','edit'));
    }

    function updrecommendation($id, Request $req){
        $recommend = RefereeRecommendation::where('id',$id)->first();
        $recommend->fill($req->input())->save();
        

        return redirect('referee/recommendation')->with('status', 'Your recommendation have been submitted. Please proceed with assessment.');
    }

    function recommendationview($id){
        $recommend = RefereeRecommendation::where('id', $id)->first();
        $edit = false;
        return view('referee.recommendation',compact('recommend','edit'));
    }

    function refereelogbook($id){
        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $edit = true;
        $talent = Talent::where('id', $id)->first();
        $logbook = new RefLogbook();
        return view('referee.logbook', compact('category','talent', 'logbook', 'edit'));
    }

    function insreflog(Request $req){
        $logbook = RefLogbook::where('talent_id', $req->talent_id)->where('referee_id', $req->referee_id)->first();
        if(!$logbook) $logbook = new RefLogbook();
        $logbook->fill($req->input())->save();
        $talent = Talent::where('id', $req->talent_id)->first();
        $referee = User::where('id', $req->referee_id)->first();

        $alert = new Alert();
        $alert->url = '/applicant/referees';
        $alert->title = 'Assessment Complete';
        $alert->description = 'By '.$referee->name;
        $alert->user_id = $talent->user_id;
        $alert->save();

        try{
            Mail::to($talent->user->email)->queue(new RecommendationComplete($talent,$referee));
        }catch (\Exception $e) {
            return redirect('referee/recommendation')->with('error','There is an error while sending the email.');
        }


        return redirect('referee/recommendation')->with('status', 'Assessment have been done.');

    }

    function refereelogbookview($ref_id, $tal_id){
        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $edit = false;
        $talent = Talent::where('id', $tal_id)->first();
        $logbook = RefLogbook::where('talent_id', $tal_id)->where('referee_id', $ref_id)->first();
        return view('referee.logbook', compact('category','talent','logbook', 'edit'));
    }

    function applicants(Request $req, $status =''){
        $programme = Programme::pluck('name','id');
        $key_programme = $req->programme;
        $state = State::pluck('name', 'id');
        $key_state = $req->state;
        $data = User::where('group_id',3)
            ->when($status=='', function ($query){
                return $query->whereHas('applicant', function ($squery){
                    $squery->whereHas('status', function ($subquery){
                        $subquery->where('status_id',1);
                    }); 
                });
            })
            ->when($status=='defferred', function ($query){
                return $query->whereHas('applicant', function ($squery){
                    $squery->whereHas('status', function ($subquery){
                        $subquery->where('status_id',5);
                    }); 
                });
            })
            ->when($status=='rejected', function ($query){
                return $query->whereHas('applicant', function ($squery){
                    $squery->whereHas('status', function ($subquery){
                        $subquery->where('status_id',3);
                    }); 
                });
            })
            // ->where(function($q) use ($req){
            //     $q->whereHas('applicant', function ($squery) use($req){
            //         $squery->whereHas('status', function ($subquery){
            //             $subquery->where('status_id',1);
            //         }); 
            //     });
            // })
            ->has('applicant')->get();
        return view('secretariat.applicants', compact('programme','data','key_programme','state','key_state'));
    }

    function applicantsearch(Request $req){

        if ($req->ajax()) {
            $data = User::where('group_id',3)->where(function($q) use ($req){
                       $q->whereHas('talent', function ($squery) use($req){
                        if($req->programme!=""){
                                $squery->where('programme_id',$req->programme);
                        }
                        $squery->whereHas('status', function ($subquery){
                            $subquery->where('status_id',1);
                        }); 
                    });
                
            });
            return Datatables::of($data)
                // ->addIndexColumn()
                ->editColumn('name', function(User $user){
                    return $user->name .'<br/><span class="text-primary fs-7">'.$user->designation.'</span><br/><span class="text-gray-500 fs-7">'.$user->organization.'</span>';
                })
                ->addColumn('programme', function($data){
                    return $data->talent->programme->name??'';
                })
                ->addColumn('eform', function($data){
                    if(!is_null($data->talent->statement)){
                        return '<span class="ms-2 badge badge-success fw-bold">Complete</span>';
                    }
                    else{
                        $text = '<span class="ms-2 mb-1 badge badge-warning fw-bold">Personal Statement</span>';
                        if($data->talent->academics->count()==0)
                            $text .= '<span class="ms-2 badge badge-warning fw-bold">Academics Info</span>';
                        if(is_null($data->talent->committee_pos_id))
                            $text .= '<span class="ms-2 badge badge-warning fw-bold">Professional Info</span>';

                        return $text;
                    }
                })
                ->addColumn('recommendation', function($data){
                    if($data->talent->recommend->whereNotNull('status_id')->count()==2){
                        return '<a href="#" class="ms-2 badge badge-success text-hover-inverse-success fw-bold">Complete</a>';
                    }
                    else{
                        if($data->talent->recommend->count()==0)
                            return '<span href="#" class="ms-2 badge badge-danger fw-bold">No referee</span>';
                        if($data->talent->recommend->count()<2)
                            return '<a href="#" class="ms-2 badge badge-warning text-hover-inverse-warning fw-bold">Incomplete Referee</a>';

                        return '<a href="#" class="ms-2 badge badge-light-warning text-hover-inverse-warning fw-bold">Pending ('.$data->talent->recommend->whereNull('status_id')->count().')</a>';
                       
                        
                    }
                })
                ->addColumn('selfcm', function($data){
                    if($data->talent->recommend->count()>0){
                        if($data->talent->selflog){
                            return '<a href="#" class="ms-2 badge badge-success text-hover-inverse-success fw-bold">Complete</a>';
                        }
                        else
                            return '<a href="#" class="ms-2 badge badge-warning text-hover-inverse-warning fw-bold">Pending</a>';
                    }
                })
                ->addColumn('refcm', function($data){
                    if($data->talent->recommend->count()>0){
                        if($data->talent->reflog->count()==2){
                            return '<a href="#" class="ms-2 badge badge-success text-hover-inverse-success fw-bold">Complete</a>';
                        }
                        else
                            return '<a href="#" class="ms-2 badge badge-light-warning text-hover-inverse-warning fw-bold">Pending ('.(2-$data->talent->reflog->count()).')</a>';
                    }
                })
                ->addColumn('sorta', function($data){
                    $count = 0;
                    if(!is_null($data->talent->statement)) $count++;
                    if($data->talent->recommend->count()==2) $count++; 
                    if($data->talent->recommend->whereNotNull('status_id')->count()==2) $count++;
                    if($data->talent->selflog) $count++;
                    if($data->talent->reflog->count()==2) $count++;
                    return $count;
                })
                // ->addColumn('action', function($data){
                //     $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                //     return $actionBtn;
                // })
                // ->orderColumn('sorta')
                ->rawColumns(['sorta','refcm','selfcm','recommendation','eform','programme','name'])
                ->make(true);
        }

    }

    function modalrecommendation($id){
        $list = RefereeRecommendation::whereHas('talent', function ($query) use ($id){
                $query->where('user_id', $id);
        })->get();
        return view('secretariat.modal-applicant-recommendation', compact('list'));
    }

    function modalselfcm($id){
        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $logbook = TalentLogbook::whereHas('talent', function ($query) use ($id){
                     $query->where('user_id', $id);
                })->where('series', 0)->first();
        return view('secretariat.modal-applicant-selfcm', compact('logbook','category'));
    }

    function modalrefcm($id){
        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $logbooks = RefLogbook::whereHas('talent', function ($query) use ($id){
                     $query->where('user_id', $id);
                })->get();
        return view('secretariat.modal-applicant-refcm', compact('logbooks','category'));
    }

    function applicantsummary($id){
        $applicant = Talent::where('user_id', $id)->first();
        $status = Status::where('id','<>',4)->pluck('name','id');
        $scvcategory = StructureCVCategory::get();
        
        return view('secretariat.applicant-summary', compact('applicant','status','scvcategory'));
    }

    function evaluate(Request $request){
        $submission  = TalentStatus::where('talent_id',$request->talent_id)->first();
        $submission->comment = $request->comment;
        $submission->research = $request->research;
        $submission->status_id = $request->status_id;
        if($request->status_id==2) $submission->accepted = 1;
        else $submission->accepted = NULL;
        $submission->reason = $request->reason;
        $submission->save();

        return redirect('secretariat/applicants')->with('status', 'Applicant have been evaluated.');
            
    }

    function applicantupdate($appid, $user_id){
        $talent = Talent::where('user_id',$user_id)->first();
        $talent->applicant_id = $appid;
        $talent->save();
    }


    function panelapplicants(Request $req){
        $key_status = $req->status;
        $data = User::with('applicant')->where('group_id',3)
        ->when(!is_null(Auth::user()->programme_id), function($query){
                $query->where('programme_id',Auth::user()->programme_id);})
        ->whereHas('applicant', function ($query){
            if(!is_null(Auth::user()->programme_id))
                $query->where('programme_id',Auth::user()->programme_id);
            $query->whereHas('status', function ($subquery){
                $subquery->where('status_id',1);
            });
        })
        ->get();

        return view('panel.applicants', compact('data','key_status'));
    }

    function panelappsummary($id){
        $applicant = Talent::where('id', $id)->first();
        $status = Status::where('id','<>',4)->pluck('name','id');
        if(is_null(Auth::user()->programme_id))//head of panel
            $decision = TalentPanel::whereHas('panel',function($query){ $query->where('main',1);})
                        ->where('talent_id',$id)->first();
        else
            $decision = TalentPanel::where('panel_id', Auth::user()->id)->where('talent_id',$id)->first();
// dump($decision, Auth::user()->id, $id);
        $scvcategory = StructureCVCategory::get();
        return view('panel.applicant-summary', compact('applicant','status','decision','scvcategory'));
    }

    function panelevaluate(Request $req){
        if(is_null(Auth::user()->programme_id))//head of panel
            $assessment = TalentPanel::whereHas('panel',function($query){ $query->where('main',1);})
                        ->where('talent_id',$req->talent_id)->first();
        else    
            $assessment = TalentPanel::where('panel_id',Auth::user()->id)->where('talent_id',$req->talent_id)->first();
        
        $req->merge(array('talent_id' =>$req->talent_id, 'panel_id' =>Auth::user()->id));
        
        if(!$assessment)
            $assessment = new TalentPanel();
        $assessment->fill($req->input())->save();
        // dd($req->kt_docs_repeater_supervisor);
        $exid = [];
        if(is_array($req->kt_docs_repeater_supervisor))
        foreach ($req->kt_docs_repeater_supervisor as $key) {
            if(!is_null($key['name'])){
                if(!is_null($key['id'])) {
                    $supervisor = SuggestSupervisor::find($key['id']);
                } else {
                    $supervisor = new SuggestSupervisor(); 
                }
                $supervisor->talent_id = $req->talent_id;
                $supervisor->name = $key['name'];
                $supervisor->designation = $key['designation'];
                $supervisor->save();
                $exid[] = $supervisor->id;
            }
        }
        SuggestSupervisor::where('talent_id', $req->talent_id)->whereNotIn('id',$exid)->delete();

        $exid = [];
        if(is_array($req->kt_docs_repeater_panel))
        foreach ($req->kt_docs_repeater_panel as $key) {
            if(!is_null($key['name'])){
                if(!is_null($key['id'])) {
                    $panel = TalentPanelname::find($key['id']);
                } else {
                    $panel = new TalentPanelname(); 
                }
                $panel->talent_id = $req->talent_id;
                $panel->name = $key['name'];
                $panel->designation = $key['designation'];
                $panel->save();
                $exid[] = $panel->id;
            }
        }
        TalentPanelname::where('talent_id',$req->talent_id)->whereNotIn('id',$exid)->delete();
        
        return redirect('panel/applicants')->with('status', 'Applicant have been evaluated.');
    }

    function paneltalents(Request $req){
        $key_status = $req->status;
        $status = StatusFinal::pluck('name','id');
        $data = User::with('talent')->where('group_id',7)
        ->whereHas('talent', function ($query){
            if(!is_null(Auth::user()->programme_id))
                $query->where('programme_id',Auth::user()->programme_id);
        })
        ->get();

        return view('panel.talents', compact('data','status','key_status'));

    }

    function selections(){
        $programme = Programme::pluck('name','id');
        $data = User::where('group_id',3)->where(function($q) {
                       $q->whereHas('applicant', function ($squery){
                        $squery->whereHas('status', function ($subquery){
                            $subquery->where('status_id','<>',1);
                        }); 
                    });
                
            })->get();
        
        return view('secretariat.applicant-selections',compact('programme','data'));
    }

    function selectionsearch(Request $req){

        if ($req->ajax()) {
            if (isset($_REQUEST['columnsDef']) && is_array($_REQUEST['columnsDef'])) {
                foreach ($_REQUEST['columnsDef'] as $field) {
                    $columnsDefault[$field] = true;
                }
            }

            $dataold = User::where('group_id',3)->whereHas('talent.status', function ($subquery){
                            $subquery->where('status_id','<>', 1);
                    });
            

            return  Datatables::of($dataold)
                ->filter(function ($query) {
                    if (isset($_REQUEST['search']['value']) && $_REQUEST['search']['value']) {
                        $query->where(function($query) {
                            $query->orWhere('name', 'like', "%" . $_REQUEST['search']['value'] . "%")
                                ->orWhereHas('talent.programme', function ($squery) {
                                    $squery->where('name', 'like',  "%" . $_REQUEST['search']['value'] . "%");
                                });
                            })
                        ;
                    }
                })
                // ->addIndexColumn()
                ->editColumn('name', function(User $user){
                    return $user->name .'<br/><span class="text-primary fs-7">'.$user->designation.'</span><br/><span class="text-gray-500 fs-7">'.$user->organization.'</span>';
                })
                ->addColumn('programme', function($data){
                    return $data->talent->programme->name??'';
                })
                ->addColumn('status', function($data){
                    return $data->talent->status->status->name??'';
                })
                ->rawColumns(['programme','name','status'])
                ->make(true)
                ;

            // $obj = json_decode($alldata);
            // dd();
            // $data = [];
            // // internal use; filter selected columns only from raw data
            // foreach ($alldata as $d) {
            //     $data[] = $this->filterArray($d, $columnsDefault);
            // }

            // if (isset($_REQUEST['search']['value']) && $_REQUEST['search']['value']) {
            //     $data = $this->arraySearch($data, $_REQUEST['search']['value']);
            // }

            // $totalRecords = $totalDisplay = count($data);

            // // sort
            // if (isset($_REQUEST['order'][0]['column']) && $_REQUEST['order'][0]['dir']) {
            //     $column = $_REQUEST['order'][0]['column'];
            //     $dir    = $_REQUEST['order'][0]['dir'];
            //     usort($data, function ($a, $b) use ($column, $dir) {
            //         $a = array_slice($a, $column, 1);
            //         $b = array_slice($b, $column, 1);
            //         $a = array_pop($a);
            //         $b = array_pop($b);

            //         if ($dir === 'asc') {
            //             return $a > $b ? 1 : -1;
            //         }

            //         return $a < $b ? 1 : -1;
            //     });
            // }

            // // pagination length
            // if (isset($_REQUEST['length'])) {
            //     $data = array_splice($data, $_REQUEST['start'], $_REQUEST['length']);
            // }

            // //$data = $this->reformat($data);

            // $result = [
            //     'recordsTotal'    => $totalRecords,
            //     'recordsFiltered' => $totalDisplay,
            //     'data'            => $data,
            // ];

            // return response()->json($result);
            // echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }

    }

    function modalselection($id){
        $status = Status::where('id','<>',4)->pluck('name','id');

        $talent = TalentStatus::where('talent_id', $id)->first();
        $final = StatusFinal::pluck('name','id');

        return view('secretariat.modal-applicant-selection',compact('status','talent','final'));
    }

    function applicantstatus($id, Request $req){
        
        $status = TalentStatus::find($id);
        $status->fill($req->input())->save();
        Talent::find($status->talent->id)->update(['talent_code' => $req->talent_code]);
        $talent = Talent::find($status->talent->id);
        if($req->convert=="on"){
            $user = User::find($status->talent->user_id)->update(['group_id' => 7]);

            $newModel = $talent->duplicate()->fill([
                'level_id' => 2
            ]);
            $newModel->save();


        }

        return redirect()->back()->with('status','Status have been updated');
    }

    function talents(Request $req){
        $key_status = $req->status;
        $key_programme = $req->programme;

        $programme = Programme::pluck('name','id');
        $status = StatusFinal::pluck('name','id');
        $data = User::where('group_id',7)->whereHas('talent', function($q1){
            $q1->where('level_id', 2)->whereHas('status', function($q2){
                // $q2->where('final_id','<>',2);
            });
        })->get();
        
        return view('secretariat.talents', compact('programme','data','status','key_status','key_programme'));
    }

    function supervisors(Request $req){
        $programme = Programme::pluck('name','id');

        $data = User::whereHas('supervisor.talent.status', function($q){$q->where('cohort','>',12);})
        ->get();
        
        return view('secretariat.supervisors', compact('programme','data'));
    }

    function talentprofile(){

        $programme = Programme::pluck('name','id');
        $data = User::where('group_id',7)->whereHas('talent', function($q1){
            $q1->whereHas('status', function($q2){
                $q2->where('final_id',1);
            });
        })->get();
        return view('secretariat.talent-profile', compact('programme','data'));
    }

    function modalsupervisor($id){
        $users = User::where('status_id', 1)->whereNotIn('group_id',[1,2,5])->orderBy('name')->get();
        $supervisor = Supervisor::has('super')->where('talent_id',$id)
        // whereHas('talent', function ($query) use ($id){
        //     $query->where('user_id', $id);
        // })
        ->get();

        return view('secretariat.modal-talent-supervisor', compact('supervisor','users','id'));
    }

    function assignsupervisor(Request $req){
        $talent = Talent::where('id', $req->u_id)->first();
        foreach($req->users as $super_id){
            $check = Supervisor::where('talent_id',$talent->id)->where('super_id',$super_id)->first();
            if(!$check){
                $supervisor = new Supervisor();
                $supervisor->talent_id = $talent->id;
                $supervisor->super_id = $super_id;
                $supervisor->save();
            }
        }
    }

    function removesupervisor($id){
            // dum($id);
            Supervisor::where('id',$id)->delete();
    }

    function activatesupervisor($talent_id,$super_id){
        Supervisor::where('talent_id',$talent_id)->update(['status_id'=>null]);
        Supervisor::where('talent_id',$talent_id)->where('super_id', $super_id)->update(['status_id'=>1]);
    }

    function supervisortalents(){

        $programme = Programme::pluck('name','id');
        $status = StatusFinal::pluck('name','id');
        $data = User::where('group_id',7)
        ->whereHas('talent', function ($query) {
            $query->whereHas('supervisor', function ($quer) {
                $quer->where('super_id', Auth::user()->id);
            });
        })->get();

        return view('supervisor.talents', compact('programme','data','status'));
    }

    function supervisortalentstask($task){

        $programme = Programme::pluck('name','id');
        $status = StatusFinal::pluck('name','id');
        $data = User::where('group_id',7)
        ->whereHas('talent', function ($query) {
            $query->whereHas('supervisor', function ($quer) {
                $quer->where('super_id', Auth::user()->id);
            });
        })->get();

        return view('supervisor.talents-task', compact('programme','data','status','task'));
    }

    function supertalentsummarytask($task, $id){
        $alert = Alert::where('user_id',Auth::user()->id)->where('title','TWER Updates')->update(['read'=>1]);
        \View::share('alerts', Alert::whereNull('read')->where('user_id', Auth::user()->id)->get());
        
        $talent = Talent::where('user_id', $id)->where('level_id',2)->first();
        $scvcategory = StructureCVCategory::get();
        $logcategory = AssessmentCategory::whereNotNull('sort')->get();
        return view('supervisor.talent-summary-task', compact('talent','scvcategory','logcategory','task'));
    }

    function modalcourses($id){
        $courses = TalentCourse::whereHas('talent', function ($query) use ($id){
            $query->where('user_id', $id);
        })->orderBy('created_at','desc')->get();

        $talentstatus = TalentStatus::whereHas('talent', function ($query) use ($id){
            $query->where('user_id', $id);
        })->first();
        return view('secretariat.modal-talent-courses', compact('courses','id','talentstatus'));
    }

    function completecourse(Request $req){
        $status  = TalentStatus::whereHas('talent', function ($query) use ($req){
            $query->where('user_id', $req->id);
        })->first();
        $status->course_complete = $req->course_complete;
        $status->save();
        
        return redirect()->back()->with('status', 'Status for Course Completion have been updated.'); 
    }

    function remarksupervisor(Request $req){
        $item = Supervisor::find($req->id);
        $item->remark = $req->val;
        $item->save();
    }

    function modalproject($id){

        $project = TalentProject::whereHas('talent', function ($query) use ($id){
            $query->where('user_id', $id);
        })->orderBy('created_at','desc')->get();

        return view('secretariat.modal-talent-project',compact('project'));
    }

    function talentsummary($id){
        $talent = Talent::where('user_id', $id)->where('level_id',2)->first();
        $scvcategory = StructureCVCategory::get();
        $logcategory = AssessmentCategory::whereNotNull('sort')->get();
        return view('talent-summary', compact('talent','scvcategory','logcategory'));
    }

    function supertalentsummary($id){
        $talent = Talent::where('user_id', $id)->where('level_id',2)->first();
        $scvcategory = StructureCVCategory::get();
        $logcategory = AssessmentCategory::whereNotNull('sort')->get();

        return view('talent-summary', compact('talent','scvcategory','logcategory'));
    }

    function training(){

        $data = Courses::orderBy('start_date','desc')->get();
        return view('secretariat.training', compact('data'));
    }

    function newtraining(){
        $domain = AssessmentCategory::whereNotNull('sort')->pluck('name','id');
        $type = CourseType::pluck('name','id');
        $type = CourseType::pluck('name','id');
        return view('secretariat.training-form', compact('type','domain'));
    }

    function instraining( Request $req){
        $course = new Courses();
        $course->fill($req->input())->save();
        return redirect('training')->with('status', 'New course have been added.');
    }

    function edittraining($id){
        $domain = AssessmentCategory::pluck('name','id');
        $type = CourseType::pluck('name','id');
        $course = Courses::where('id',$id)->first();
        return view('secretariat.training-edit',compact('type','course','domain'));
    }

    function updatetraining($id, Request $req){
        $course = Courses::where('id',$id)->first();
        if($req->food_id==""){
            $req->merge(array('food_id' =>null));
        }
        if($req->accomodation_id==""){
            $req->merge(array('accomodation_id' =>null));
        }
        $course->fill($req->input())->save();
        return redirect('training')->with('status', 'Course have been updated.');
    }

    public function destroytraining($id){
        $affectedRows  = Courses::where('id', '=', $id)->delete();
        $affectedRows  = TalentCourse::where('course_id', '=', $id)->delete();
    }

    function participants($id){
        $course = Courses::where('id',$id)->first();
        $list = TalentCourse::where('course_id',$id)->orderBy('created_at')->get();
        $talent = User::where('group_id',7)->get();
        $status = TalentCourseStatus::where('id','<=',3)->pluck('name','id');
        $attendance = TalentCourseStatus::where('id','>=',4)->pluck('name','id');
        return view('secretariat.training-participants',compact('course','list','talent','status','attendance'));

    } 

    function insparticipants(Request $req){
        if(is_array($req->users))
        foreach($req->users as $u){
            $talent = Talent::where('user_id',$u)->where('level_id',2)->first();

            $talentcourse = TalentCourse::where('id',$req->course_id)->where('talent_id', $talent->id)->first();
            if(!$talentcourse)
                $talentcourse = new TalentCourse();

            $talentcourse->talent_id= $talent->id;
            $talentcourse->course_id = $req->course_id;
            $talentcourse->save();

        }

        return redirect()->back()->with('status', 'Participants have been updated.'); 
    }
    
    function updatetalentcourse(Request $req){
        // dd($req);
        $talentcourse = TalentCourse::where('id',$req->id)->first();
        if($req->status_id!="") $talentcourse->status_id = $req->status_id;
        if($req->reason!="") $talentcourse->reason = $req->reason; 
        if($req->attendance_id!="") $talentcourse->attendance_id = $req->attendance_id; 
        if($req->remark!="") $talentcourse->remark = $req->remark; 
        $talentcourse->save();
    }

    function cleartalentcourse(Request $req){
        $talentcourse = TalentCourse::whereIn('id',$req->id)->update(['status_id'=>null]);
    }

    function emailinvitetalentcourse(Request $req){
        $talentcourse = TalentCourse::whereIn('id',$req->id)->get();
        $course = Courses::find($req->course);
        $talent = Talent::whereIn('id', $talentcourse->pluck('talent_id'))->get();

        Mail::to($talent->pluck('user.email'))->queue(new CourseInvite($course));

        $talentcourse = TalentCourse::whereIn('id',$req->id)->update(['mail'=>1]);


        if(is_array($req->id))
            foreach($talent as $t){
                $alert = new Alert();
                $alert->url = '/talent/training';
                $alert->title = 'Training invitation';
                $alert->description = 'Please response';
                $alert->user_id = $t->user_id;
                $alert->save();
            }
        // dump($talent->pluck('user.email'));
    }

    function deletetalentcourse(Request $req){
        $talentcourse = TalentCourse::whereIn('id',$req->id)->delete();
    }


    function talenttraining(){

        $data = TalentCourse::where('talent_id', Auth::user()->talent->id)->orderBy('created_at','desc')->get();
        $alert = Alert::where('user_id',Auth::user()->id)->where('title','Training invitation')->update(['read'=>1]);
        \View::share('alerts', Alert::whereNull('read')->where('user_id', Auth::user()->id)->get());
        
        return view('talent.training', compact('data'));
    }

    function trainingresponse($id){
        $talentcourse = TalentCourse::find($id);

        return view('talent.modal-training-response', compact('talentcourse'));
    }

    function insresponse($id, Request $req){
        if($req->food==""){
            $req->merge(array('food' =>null));
        }
        if($req->accomodation==""){
            $req->merge(array('accomodation' =>null));
        }
        $talentcourse = TalentCourse::find($id);
        $talentcourse->fill($req->input())->save();

        return redirect()->back()->with('status', 'Response have been updated.'); 

    }

    function talentproject(){
        $data = TalentProject::where('talent_id', Auth::user()->talent->id)->get();
        return view('talent.project', compact('data'));
    }

    function newproject(){
        return view('talent.project-form');
    }

    function insproject(Request $req){

        $project = new TalentProject();
        $req->merge(array('talent_id' =>Auth::user()->talent->id));
        $project->fill($req->input())->save();
        $status = ProjectStatus::get();

        return view('talent.progress-form', compact('project','status'));
    }

    function newprogress($id){
        $project = TalentProject::find($id);
        $status = ProjectStatus::where('type_id', $project->type_id)->get();
        return view('talent.progress-form', compact('project','status'));
    }

    function insprogress(Request $req){
        if ($req->hasFile('document')){
            $file = $req->file('document');
            $destinationPath = public_path('project');
        
            $newname = $this->newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);
            $req->merge(array('filename' =>$newname));
            
        }
        $progress = new TalentProjectProgress();
        $progress->fill($req->input())->save();
        
        foreach($req->project_status as $status){
            $progressstatus = new ProgressStatus();
            $progressstatus->status_id = $status;
            $progressstatus->progress_id = $progress->id;
            $progressstatus->save();
        }
        // dd($progress->project->talent->supervisor->super->email);
        if($req->notify==1){
            try{
            Mail::to($progress->project->talent->supervisor->super->email)->queue(new InformSupervisor($progress->project->talent, 'Project Progress'));
            }catch (\Exception $e) {
                return redirect('talent/project')->with('error','There is an error while sending the email.');
            }
        } 

        return redirect('talent/project')->with('status', 'Progress have been added.'); 
    }

    function newName($path, $filename) {
        $res = "$path/$filename";
        if (!file_exists($res)) return $filename;
        $fnameNoExt = pathinfo($filename,PATHINFO_FILENAME);
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
        $i = 1;
        while(file_exists($path."/".$fnameNoExt."_".str_pad($i, 2, '0', STR_PAD_LEFT).".".$ext)) $i++;
        return $fnameNoExt."_".str_pad($i, 2, '0', STR_PAD_LEFT).".".$ext;
    }

    function editproject($id){
        $project = TalentProject::find($id);

        return view('talent.project-edit',compact('project'));
    }

    function updateproject($id, Request $req){

        $project = TalentProject::find($id);
        $project->fill($req->input())->save();
        return redirect('talent/project')->with('status', 'Project have been updated.'); 

    }

    function destroyproject($id){
        $files  = TalentProjectProgress::where('project_id', '=', $id)->where('filename','<>','')->get();
        foreach($files as $item){
        if (file_exists(public_path('project/'.$item->filename))) unlink(public_path('project/'.$item->filename));
        }

        $affectedRows  = TalentProjectProgress::where('project_id', '=', $id)->delete();
        $affectedRows  = TalentProject::where('id', '=', $id)->delete();

    }

    function progress($id){

        $project  = TalentProject::where('id', '=', $id)->first();

        return view('talent.modal-progress', compact('project'));
    }


    function destroyprogress($id){
        $files  = TalentProjectProgress::where('id', '=', $id)->where('filename','<>','')->get();
        foreach($files as $item){
        if (file_exists(public_path('project/'.$item->filename))) unlink(public_path('project/'.$item->filename));
        }

        $affectedRows  = TalentProjectProgress::where('id', '=', $id)->delete();
    }

    function talentdocument(){

        $filetype = FileType::where('view',1)->get();
        $data = TalentFile::where('talent_id', Auth::user()->talent->id)->orderBy('created_at','desc')->get();
        return view('talent.document', compact('filetype','data'));
    }

    function talentassessmentprofile(){
        
        $audit = \OwenIt\Auditing\Models\Audit::select(\DB::raw("JSON_UNQUOTE(JSON_EXTRACT(old_values, '$.position')) as position"))
        ->where(function($qa){ 
            $qa->where('auditable_type', Talent::class)->orWhere('auditable_type', User::class);
        })
        ->where(function($q){ $q->where('auditable_id', Auth::user()->applicant->id)->orWhere('auditable_id',Auth::user()->talent->id)->orWhere('auditable_id',Auth::user()->id);
        })
        ->whereNotNull('old_values->position')
        ->first();

        $grade = Grade::pluck('name','id')->prepend('', '');
        $scheme = Scheme::pluck('name','id')->prepend('', '');
        $programme = Programme::pluck('name','id')->prepend('', '');

        $profile = TalentAssProfile::where('talent_id', Auth::user()->talent->id)->first();
        return view('talent.assessment-profile', compact('audit','programme', 'profile'));
    }

    function savetalentassprofile(Request $req){
        $profile = TalentAssProfile::where('talent_id', $req->talent_id)->first()??new TalentAssProfile();
        
        $profile->talent_id = $req->talent_id;
        $profile->old_position = $req->old_position;
        $profile->curr_position = $req->curr_position;
        $profile->cpdnsr = json_encode($req->kt_docs_repeater_cpdnsr);
        $profile->lnpt = json_encode($req->kt_docs_repeater_lnpt);
        $profile->supervisor = is_array($req->kt_docs_repeater_sv)?json_encode($req->kt_docs_repeater_sv):'[]';

        $profile->save();
        
        return redirect()->back()->with('status','Your Talent Profile have been updated');
    }

    function talentassessmentproject($section = ''){
        $project = TalentAssProject::where('talent_id', Auth::user()->talent->id??'')->first()??new TalentAssProject();
        return view('talent.assessment-project', compact('section','project'));
    }

    function savetalentassproject(Request $req){
        $project = TalentAssProject::where('talent_id', $req->talent_id)->first()??new TalentAssProject();
        
        $project->talent_id = $req->talent_id;
        if($req->tab==1) $project->exec_summary = $req->exec_summary;
        if($req->tab==2){
            $project->project_title = $req->project_title;
            $project->project_presentation = $req->project_presentation;
            $project->project_publication = $req->project_publication;
        }
        if($req->tab==3){
            if ($req->hasFile('file_report')){
                $destinationPath = public_path('project');
                $file = $req->file('file_report');
                $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
                $file->move($destinationPath,$newname);
    
                $project->file_report = $newname;
                
            }
        }
        if($req->tab==4){
            if ($req->hasFile('file_presentation')){
                $destinationPath = public_path('project');
                $file = $req->file('file_presentation');
                $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
                $file->move($destinationPath,$newname);
    
                $project->file_presentation = $newname;
                
            }
        }
        $project->save();
        
        return redirect()->back()->with('status','Your TGP Project have been updated');
    }

    function applicantdocument(){

        $filetype = FileType::where('view',1)->get();
        $data = TalentFile::where('talent_id', Auth::user()->applicant->id??'')->orderBy('created_at','desc')->get();
        return view('talent.document', compact('filetype','data'));
    }

    function uploadfiles(Request $req){
        // dd($req);
        $type = FileType::find($req->file_id);
        $file = $req->file('filename');
        $destinationPath = public_path('attachment').'/'.$type->filepath;
        //dd($destinationPath);
        $newname = $this->newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
        $file->move($destinationPath,$newname);
        

        if($req->user_id !=''){
            $talent_id = Talent::where('user_id', $req->user_id)
            ->first()->id;
        }else {
            $talent_id = Auth::user()->talent->id??Auth::user()->applicant->id;
        }

        $document = new TalentFile();
        $req->merge(array('filename' =>$newname,'talent_id'=> $talent_id));
        $document->fill($req->input())->save();
        
    }

    function destroydocument($id){
        $file = TalentFile::where('id',$id)->first();
        if (file_exists(public_path('attachment/'.$file->type->filepath.$file->filename))) unlink(public_path('attachment/'.$file->type->filepath.$file->filename));
        $file->delete();
        // return redirect()->back()->with('status', 'File have been removed.');
    }

    function destroybulkdocument(Request $req){
        $files = TalentFile::whereIn('id',$req->id)->get();

        foreach($files as $file){
            if (file_exists(public_path('attachment/'.$file->type->filepath.$file->filename))) unlink(public_path('attachment/'.$file->type->filepath.$file->filename));
            $file->delete();
        }
        
        // return redirect()->back()->with('status', 'File have been removed.');
    }

    function talentscv($series){
        $category = StructureCVCategory::get();
        $edit = false;
        if($series == 1)
            $talent_id = Auth::user()->applicant->id??0;
        else
            $talent_id = Auth::user()->talent->id??0;

        $scv = TalentSCV::where('talent_id', $talent_id)->where('series', $series)->first();

        if (!$scv){
            $edit = true;
            $scv = new TalentSCV();
        }else{
            if($scv->status_id==1)
                $edit = false;
            else{
                $edit = true;
            }
        }
        return view('talent.structure-cv', compact('category','scv','edit','series'));
    }

    function instalentscv(Request $req){
        if($req->series == 1)
            $talent_id = Auth::user()->applicant->id;
        else
            $talent_id = Auth::user()->talent->id;

        $scv = TalentSCV::where('talent_id', $talent_id)->where('series', $req->series)->first();
        if(!$scv) $scv = new TalentSCV();
        $answer = array();
        $i = 0;
        foreach($req->q as $qu){
            $i++;
            $answer["q" . $i] = $qu;
        }
        $answer['talent_id'] = $talent_id;
        $req->merge($answer);
        $scv->fill($req->input())->save();

        return redirect('dashboard')->with('status', 'Structure CV have been updated.');
    }

    function supervisorlogbook($series, $id){

        $category = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $edit = false;
        $logbook = SupervisorLogbook::where('talent_id', $id)->where('series', $series)->first();
        if (!$logbook){
            $edit = true;
            $logbook = new SupervisorLogbook();
        }

        return view('supervisor.logbook', compact('category','edit','logbook','series','id'));
    }

    function inssupervisorlog(Request $req){
        $logbook = SupervisorLogbook::where('talent_id',$req->talent_id)->where('series', $req->series)->first();
        if(!$logbook) $logbook = new SupervisorLogbook();
        $req->merge(array('supervisor_id' => Auth::user()->id));
        $logbook->fill($req->input())->save();
        if($req->series==2)
            $year = 'First';
        if($req->series==3)
            $year = 'Second';
        try{
            Mail::to($logbook->talent->user->email)->queue(new AssComplete($logbook->talent->fullname, 'Your Supervisor '.Auth::user()->name.' has submitted the TGP-CM '.$year.' Year assessment. Thank you.'));
            Mail::to(Auth::user()->email)->queue(new AssComplete(Auth::user()->name, 'Thank you for the submission of TGP-CM '.$year.' Year assessment for TGP Talent: '.$logbook->talent->fullname));
                     
        }catch (\Exception $e) {
            return redirect('dashboard')->with('error','There is an error while sending the email.');
        }
        return redirect()->back()->with('status', 'Assessment have been done.');

    }

    function twerassessment(Request $req){
        $twer = TalentTWER::find($req->id);
        // $twer->mark = $req->mark;
        // $twer->comment = $req->comment;
        $twer->checklist = implode(",",$req->checklist??array());
        $twer->save();

        if($req->comment!=''){
            $comment = new TalentTWERComment();
            $comment->comment = $req->comment;
            $comment->twer_id = $twer->id;
            $comment->save();

            if($req->notify==1){
                $alert = new Alert();
                $alert->url = '/talent/twer/'.$twer->series;
                $alert->title = 'TWER Comment';
                $alert->description = 'from your Supervisor';
                $alert->user_id = $twer->talent->user_id;
                $alert->save();
                
                try{
                Mail::to($twer->talent->user->email)->queue(new InformTalent());
                }catch (\Exception $e) {
                    return redirect('dashboard')->with('error','There is an error while sending the email.');
                }
            } 
        }
    }

    function twermark(Request $req){
        $twer = TalentTWER::find($req->id);
        $twer->mark = $req->mark;
        // $twer->comment = $req->comment;
        $twer->save();
        if($twer->series==1)
            $year = 'First';
        if($twer->series==2)
            $year = 'Second';

        if($twer->mark="")
            return redirect()->back()->with('error','Theres an error. Please retry.');
        try{
            Mail::to($twer->talent->user->email)->queue(new AssComplete($twer->talent->fullname, 'Your Supervisor '.Auth::user()->name.' has submitted the TWER '.$year.' Year assessment. Thank you.'));
            Mail::to(Auth::user()->email)->queue(new AssComplete(Auth::user()->name, 'Thank you for the submission of TWER '.$year.' Year assessment for TGP Talent: '.$twer->talent->fullname.'<span style="color:white">'.$twer->mark.'</span>'));
                     
        }catch (\Exception $e) {
            return redirect()->back()->with('error','There is an error while sending the email.');
        }
    }


    function paneltalentsummary($id){
        $talent = Talent::where('user_id', $id)->where('level_id',2)->first();
        $scvcategory = StructureCVCategory::get();
        $logcategory = AssessmentCategory::whereNotNull('sort')->get();
        return view('talent-summary', compact('talent','scvcategory','logcategory'));
    }

    function notification(){

        $data = Notification::orderBy('created_at','desc')->get();

        return view('secretariat.notification', compact('data'));
    }

    function newnotification(){

        return view('secretariat.notification-form');
    }

    public function insnotification(Request $req){
        
        $notify = new Notification();
        $notify->fill($req->input())->save();
        
        if(is_array($req->user_id)){
            foreach($req->user_id as $user_id){
                $tnotify = new Notify();
                $tnotify->user_id = $user_id;
                $tnotify->notification_id = $notify->id;
                $tnotify->save();
            }
            
        }

        if($req->send==1){
            $usermail = User::whereIn('id',$req->user_id)->pluck('email');
            Mail::to($usermail)->queue(new NotificationMail($notify));
        }

       return redirect('setting/notification')->with('status', 'Notification have been added.'); 
       
    }

    function editnotification($id){
        
    $notify = Notification::where('id',$id)->first();
    
    return view('secretariat.notification-edit',compact('notify'));
   }

   function updatenotification($id, Request $req){
        $notify = Notification::where('id',$id)->first();
        $notify->fill($req->input())->save();
        $usermail = collect();
        Notify::where('notification_id',$notify->id)->delete();
        if(is_array($req->user_id))
        foreach($req->user_id as $user_id){
            $tnotify = new Notify();
            $tnotify->user_id = $user_id;
            $tnotify->notification_id = $notify->id;
            $tnotify->save();
        }
        if($req->send==1 ){
            if(is_array($req->user_id))
                $usermail = User::whereIn('id',$req->user_id)->pluck('email');
            else{
                if($req->public_id==1){

                }elseif($req->public_id==2){//applicant
                    $usermail = User::where('group_id',3)->has('applicant')->pluck('email');
                }elseif($req->public_id==3){//referee
                    $usermail = User::where('group_id',4)->has('referee')->pluck('email');
                }elseif($req->public_id==4){//talent
                    $usermail = User::where('group_id',7)->has('talent')->pluck('email');
                }elseif($req->public_id==5){//supervisor
                    $usermail = User::where('group_id',6)->has('supervisor')->pluck('email');
                }  
                
            }
            if($usermail->count()>0)
                Mail::to($usermail)->queue(new NotificationMail($notify));
        }
    
     return redirect('setting/notification')->with('status', 'Notification have been updated.');    
        
   }

   function destroynotification($id){
         $affectedRows  = Notification::where('id', '=', $id)->delete();
         $affectedRows  = Notify::where('notification_id', '=', $id)->delete();
        // return redirect()->back()->with('status', 'Referee have been removed.');
    }

    function destroynotify($id){
         $affectedRows  = Notify::where('id', '=', $id)->delete();
        // return redirect()->back()->with('status', 'Referee have been removed.');
    }


    function user(){

        $data = User::orderBy('created_at','desc')->whereNotIn('group_id',[1,2])->get();
        $group = Group::whereNotIn('id',[1,2])->pluck('name','id')->prepend('', '');
        return view('secretariat.user', compact('data','group'));
    }

    function edituser($id){
        
        $user = user::where('id',$id)->first();
        if($user->group_id==3)
            $group = Group::where('id','<>',7)->pluck('name','id')->prepend('', '');
        elseif($user->group_id==7)
            $group = Group::where('id','<>',3)->pluck('name','id')->prepend('', '');
        else
            $group = Group::pluck('name','id')->prepend('', '');

        $grade = Grade::pluck('name','id')->prepend('', '');
        $scheme = Scheme::pluck('name','id')->prepend('', '');
        $programme = Programme::pluck('name','id')->prepend('', '');
    return view('secretariat.user-edit',compact('user','group','grade','scheme','programme'));
   }

   function updateuser($id, Request $req){
        $rules = array(
                    'username' => 'nullable|unique:users,username,'.$id.',id',
                    'email' => 'nullable|email|unique:users,email,'.$id.',id',
            );
        
        $validator = \Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator)->withInput(); 
        } 

        $user = user::where('id',$id)->first();
        if($req->email_verified==1) $req->merge(array('email_verified_at'=>date("Y-m-d H:i:s")));
        $user->fill($req->input())->save();
        
         return redirect('setting/user')->with('status', 'User have been updated.');    
        
   }


   function newuser(){
        $group = Group::pluck('name','id')->prepend('', '');
        $grade = Grade::pluck('name','id')->prepend('', '');
        $scheme = Scheme::pluck('name','id')->prepend('', '');
        $programme = Programme::pluck('name','id')->prepend('', '');
        return view('secretariat.user-form', compact('group','grade','scheme','programme'));
    }

    public function insuser(Request $req){
        $rules = array(
                    'username' => 'nullable|unique:users,username',
                    'email' => 'nullable|email|unique:users,email',
            );
        
        $validator = \Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator)->withInput(); 
        } 

        $notify = new user();
        $req->merge(array('email_verified_at'=>date("Y-m-d H:i:s"),'password' =>Hash::make('mytgp@'.date("Y"))));
        $notify->fill($req->input())->save();
        
       return redirect('setting/user')->with('status', 'User have been added.'); 
       
    }

    function resetuser($id){
        $user =  User::where('id', '=', $id)->first();
        $user->password = \Hash::make('P@ssw0rd');
        $user->save();
        // return redirect()->back()->with('status', 'Password have been reset to "P@ssw0rd".');
    }

    function impersonate($id, $url){
        $reverse_id = Auth::user()->id;
        Auth::loginUsingId($id);
        \Session::put('impersonate',$reverse_id );
        \Session::put('redirect_back',$url );
        return redirect('dashboard');
    }

    function resetpanel($id){
        $deleted = TalentPanel::whereHas('talent', function ($q) use ($id){
            $q->where('user_id', $id);
        })->delete();

        
        return redirect()->back()->with('status','Panel Decision have been reset.');
    }

    function reverseimpersonate(){
        Auth::loginUsingId(\Session::get('impersonate'));
        \Session::forget('impersonate');
        return redirect(str_replace("-","/",\Session::get('redirect_back')));
    }

    function modalprofile($id){
        $user = User::where('id', $id)->first();
        $domain = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $grades = Grade::pluck('name', 'id')->prepend('', '');
        $schemes = Scheme::pluck('name', 'id')->prepend('', '');
        return view('secretariat.modal-talent-profile', compact('user','domain','grades','schemes'));


    }

    function viewachievement($id){
        $user = User::where('id', $id)->first();
        $domain = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $grades = Grade::pluck('name', 'id')->prepend('', '');
        $schemes = Scheme::pluck('name', 'id')->prepend('', '');
        return view('secretariat.talent-achievement-view', compact('user','domain','grades','schemes'));
    }
    
    function viewprofile($id){
        $user = User::where('id', $id)->first();
        $domain = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $grades = Grade::pluck('name', 'id')->prepend('', '');
        $schemes = Scheme::pluck('name', 'id')->prepend('', '');
        return view('secretariat.talent-profile-view', compact('user','domain','grades','schemes'));


    }
    function updatetalentachievement($id, Request $req){
        $talent = Talent::where('id', $id)->first();
        $profile = TalentAR::where('talent_id', $id)->first();
        if(!$profile) $profile = new TalentAR();
        $req->merge(array('talent_id'=> $id));
        $profile->fill($req->input())->save();
        
        $exid = [];
        if(is_array($req->kt_docs_repeater_lnpt)){
            foreach ($req->kt_docs_repeater_lnpt as $key) {
                if(!is_null($key['lnpt_year'])){
                    if(!is_null($key['id'])) {
                        $lnpt = TalentLNPT::find($key['id']);
                    } else {
                        $lnpt = new TalentLNPT();  
                    } 
                    $req->merge(array('year'=>$key['lnpt_year'],'mark'=>$key['lnpt_mark']));
                    $lnpt->fill($req->input())->save();
                    $exid[] = $lnpt->id;
                }
            }
            TalentLNPT::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();

        }else {
            TalentLNPT::where('talent_id',$talent->id)->delete(); 
        }
        //cpd
        $exid = [];
        if(is_array($req->kt_docs_repeater_cpdnsr)){
            foreach ($req->kt_docs_repeater_cpdnsr as $key) {
             if(!is_null($key['cpdnsr_year'])){
                if(!is_null($key['id'])) {
                    $cpd = TalentCPDNSR::find($key['id']);
                } else {
                    $cpd = new TalentCPDNSR();  
                } 
                $req->merge(array('type'=>$key['cpdnsr_type'], 'year'=>$key['cpdnsr_year'],'mark'=>$key['cpdnsr_mark']));
                $cpd->fill($req->input())->save();
                $exid[] = $cpd->id;
            }
        }
        TalentCPDNSR::where('talent_id',$talent->id)->whereNotIn('id',$exid)->delete();

        }else {
            TalentCPDNSR::where('talent_id',$talent->id)->delete(); 
        }

        $destinationPath = public_path('radar');
        $domain = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        foreach($domain as $dom){
            $image = 'image_super_'.$dom->code;
            if ($req->$image) {
                $base64Image = explode(";base64,", $req->$image);
                $explodeImage = explode("image/", $base64Image[0]);
                $imageType = $explodeImage[1];
                $image_base64 = base64_decode($base64Image[1]);
                $uniq = 'super_'.$dom->code.$talent->talent_code . '.'.$imageType;
                $file = $destinationPath.'/'. $uniq;
                file_put_contents($file, $image_base64);
            }
            $image = 'image_self_'.$dom->code;
            if ($req->$image) {
                $base64Image = explode(";base64,", $req->$image);
                $explodeImage = explode("image/", $base64Image[0]);
                $imageType = $explodeImage[1];
                $image_base64 = base64_decode($base64Image[1]);
                $uniq = 'self_'.$dom->code.$talent->talent_code . '.'.$imageType;
                $file = $destinationPath.'/'. $uniq;
                file_put_contents($file, $image_base64);
            }
        }

        return redirect()->back()->with('status', 'Talent Achievement Record have been updated.'); 

    }

    function updatetalentprofile($id, Request $req){
        $talent = Talent::where('id', $id)->first();
        $talent->fill($req->input())->save();

        $user = User::where('id',$talent->user_id)->first();
        $user->fill($req->input())->save();


        $destinationPath = public_path('graph');
        
        if ($req->image_L) {
            $base64Image = explode(";base64,", $req->image_L);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $uniq = 'talent_L'.$talent->talent_code . '.'.$imageType;
            $file = $destinationPath.'/'. $uniq;
            file_put_contents($file, $image_base64);
            $req->merge(array('image_L' =>$uniq));
        }
        if ($req->image_C) {
            $base64Image = explode(";base64,", $req->image_C);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $uniq = 'talent_C'.$talent->talent_code . '.'.$imageType;
            $file = $destinationPath.'/'. $uniq;
            file_put_contents($file, $image_base64);
            $req->merge(array('image_C' =>$uniq));
        }
        if ($req->image_G) {
            $base64Image = explode(";base64,", $req->image_G);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $uniq = 'talent_G'.$talent->talent_code . '.'.$imageType;
            $file = $destinationPath.'/'. $uniq;
            file_put_contents($file, $image_base64);
            $req->merge(array('image_G' =>$uniq));
        }

        if ($req->image_P) {
            $base64Image = explode(";base64,", $req->image_P);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $uniq = 'talent_P'.$talent->talent_code . '.'.$imageType;
            $file = $destinationPath.'/'. $uniq;
            file_put_contents($file, $image_base64);
            $req->merge(array('image_P' =>$uniq));
        }
        if ($req->image_V) {
            $base64Image = explode(";base64,", $req->image_V);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $uniq = 'talent_V'.$talent->talent_code . '.'.$imageType;
            $file = $destinationPath.'/'. $uniq;
            file_put_contents($file, $image_base64);
            $req->merge(array('image_V' =>$uniq));
        }
        $profile = Profile::where('talent_id', $id)->first();
        if(!$profile) $profile = new Profile();

        $req->merge(array('generated' =>0,'talent_id'=> $id));
        $profile->fill($req->input())->save();

        return redirect('secretariat/talent-profile')->with('status', 'Profile have been updated.'); 
    }
    function generatetalentachievement($id){
        $talent = Talent::where('id', $id)->first();
        $profile = TalentAR::where('talent_id',$id)->first();
         
        $my_template = new \PhpOffice\PhpWord\TemplateProcessor(public_path('template/TAR_template.docx'));
        $my_template->setValue('name', $profile->name);
        $my_template->setValue('age', getAgeFromIdentity($talent->ic_no));
        $my_template->setValue('talent_id', $talent->talent_code);
        $my_template->setValue('programme', htmlspecialchars($talent->programme->name));
        $my_template->setValue('cohort', $talent->status->cohort);

        $my_template->setValue('prev_position', htmlspecialchars($profile->prev_position));
        $my_template->setValue('cur_position', htmlspecialchars($profile->cur_position));

        $my_template->setValue('supervisor', htmlspecialchars($profile->supervisor));
        $my_template->setImageValue('photo', array('path' => public_path('photo/'.$talent->user->avatar)));

        $my_template->setValue('project_title', htmlspecialchars($profile->project_title));
        $my_template->setValue('project_presentation', htmlspecialchars($profile->project_presentation));
        $my_template->setValue('project_publication', htmlspecialchars($profile->project_publication));


        $cpd = array();
        foreach($talent->cpdnsr as $item){
            $itemx = new \stdClass;
            $itemx->cpd = $item->year.' - '.$item->mark;
            $cpd[] = $itemx;
        }
        $my_template->cloneRowAndSetValues('cpd', $cpd);
        $lnpt = array();
        foreach($talent->lnpt as $item){
            $itemx = new \stdClass;
            $itemx->lnpt = $item->year.' - '.$item->mark;
            $lnpt[] = $itemx;
        }
        $my_template->cloneRowAndSetValues('lnpt', $lnpt);

        $training = array();
        foreach($talent->course->where('attendance_id',4) as $item){
            $itemx = new \stdClass;
            $itemx->training = htmlspecialchars($item->course->title);
            $itemx->year = date("Y", strtotime($item->course->start_date));
            $training[] = $itemx;
        }
        $my_template->cloneRowAndSetValues('training', $training);
        
        $domain = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        foreach($domain as $dom){
            $scorea1 = array();
            $scorez1 = array();
            $scorea2 = array();
            $scorez2 = array();
            $a1 = 'score'.$dom->code.'A1'; // supervisor assessment
            $z1 = 'score'.$dom->code.'Z1';
            $a2 = 'score'.$dom->code.'A2'; //self-assessment
            $z2 = 'score'.$dom->code.'Z2';
            foreach($dom->logbook as $label)  {
                $q = 'q'.$label->id;
                $item = new \stdClass;
                $item->$a1 = $talent->superlog2->$q??0;
                $scorea1[] = $item;

                $item = new \stdClass;
                $item->$z1 = $talent->superlog3->$q??0;
                $scorez1[] = $item;

                $item = new \stdClass;
                $item->$a2 = $talent->selflog2->$q??0;
                $scorea2[] = $item;

                $item = new \stdClass;
                $item->$z2 = $talent->selflog3->$q??0;
                $scorez2[] = $item;
            }
            $my_template->cloneRowAndSetValues($a1, $scorea1);// supervisor assessment
            $my_template->cloneRowAndSetValues($z1, $scorez1);
            $my_template->cloneRowAndSetValues($a2, $scorea2);//self-assessment
            $my_template->cloneRowAndSetValues($z2, $scorez2);
        // dd($a1, $scorea1,$z1, $scorez1);

            $my_template->setImageValue('image_'.$dom->code.'1', array('path' => public_path('radar/super_'.$dom->code.$talent->talent_code.".png")));
            $my_template->setImageValue('image_'.$dom->code.'2', array('path' => public_path('radar/self_'.$dom->code.$talent->talent_code.".png")));
        }	

        $total = 0;
        if(($talent->superlog2->total??0)<($talent->superlog3->total??0))
            $tgpcm = $talent->superlog3->total??0;
        else
            $tgpcm = $talent->superlog2->total??0;
        $total += $tgpcm; 
        if(($talent->twer1->mark??0)<($talent->twer2->mark??0))
            $tgptwer = $talent->twer2->mark??0;
        else
            $tgptwer = $talent->twer1->mark??0;
        $total += $tgptwer+$talent->course->where('attendance_id',4)->count()??'0'; 
            
        $my_template->setValue('mark_training', $talent->course->where('attendance_id',4)->count()??'0');
        $my_template->setValue('mark_cm', $tgpcm);
        $my_template->setValue('mark_twer', $tgptwer);
        $my_template->setValue('total', $total);


        $filename = 'TALENTACHIEVEMENT_'.$talent->talent_code.'.docx';
        $my_template->saveAs(public_path('attachment/talent_AR/'.$filename));
        
        return response()->download(public_path('attachment/talent_AR/'.$filename))->deleteFileAfterSend(true);

    }

    function generatetalentprofile($id){
        $user = User::where('id', $id)->first();
        $talent = $user->talent;
        $applicant = $user->applicant;
        $profile = Profile::where('talent_id',$talent->id)->first();
         
        $my_template = new \PhpOffice\PhpWord\TemplateProcessor(public_path('template/TALENTPROFILE.docx'));
        $my_template->setValue('name', $talent->user->name);
        $my_template->setValue('designation', htmlspecialchars($talent->user->designation).' '.(($talent->user->scheme->name??'').' '.($talent->user->grade_->name??'')));
        $my_template->setValue('talent_code', $talent->talent_code);
        $my_template->setValue('organization', htmlspecialchars($talent->user->organization));
        $my_template->setValue('age', getAgeFromIdentity($talent->ic_no));
        $my_template->setValue('programme', htmlspecialchars($talent->programme->name));
        $my_template->setImageValue('profile_img', array('path' => public_path('photo/'.$talent->user->avatar)));
        $my_template->setValue('enrollment', $talent->status->cohort.'/'.$talent->status->enrollment);
        $cpd = array();
        foreach($talent->cpdnsr as $item){
            $itemx = new \stdClass;
            $itemx->score1 = $item->year.' - '.$item->mark;
            $cpd[] = $itemx;
        }
        $my_template->cloneRowAndSetValues('score1', $cpd);
        $lnpt = array();
        foreach($talent->lnpt as $item){
            $itemx = new \stdClass;
            $itemx->score2 = $item->year.' - '.$item->mark;
            $lnpt[] = $itemx;
        }
        $my_template->cloneRowAndSetValues('score2', $lnpt);
        $project = [];
        foreach($talent->interest as $item){
            $itemx = new \stdClass;
            $itemx->project = $item->area.(($item->title!="")?' - '.$item->title:'');
            $project[] = $itemx;
        }
        $my_template->cloneRowAndSetValues('project', $project);

        $domain = AssessmentCategory::whereNotNull('sort')->orderBy('sort')->get();
        $code = ["","L","C","G","P","V"];
        $ass = [];
        $ref = []; 
        foreach($applicant->reflog as $log){
            $ref[] = $log;
        }
        foreach($domain as $dom){
            $att = $code[$dom->id];
            $attp = $att."_percent";
            $itemx = new \stdClass;
            $itemx->domain = $dom->name;
            $itemx->score1 = $applicant->selflog->$attp??'0.0';
            $itemx->level1 = getlevel($applicant->selflog->$attp??'0.0');
            $itemx->score2 = isset($ref[0]) && isset($ref[1])?number_format(($ref[0]->$attp+$ref[1]->$attp)/2,1,'.'):0.0;
            $itemx->level2 = getlevel(isset($ref[0]) && isset($ref[1])?number_format(($ref[0]->$attp+$ref[1]->$attp)/2,1,'.'):0.0);
            $ass[] = $itemx;
        }
        $my_template->cloneRowAndSetValues('domain', $ass);
        $my_template->setValue('tscore1', $applicant->selflog->total??'0.0');
        $my_template->setValue('tlevel1', getlevel($applicant->selflog->total??'0.0'));
        $my_template->setValue('tscore2', isset($ref[0]) && isset($ref[1])?number_format(($ref[0]->total+$ref[1]->total)/2,1,'.'):0.0);
        $my_template->setValue('tlevel2', getlevel(isset($ref[0]) && isset($ref[1])?number_format(($ref[0]->total+$ref[1]->total)/2,1,'.'):0.0));

        $graph = [];
        foreach($domain as $dom){
            $att = $code[$dom->id];
            $attp = $att."_percent";
            $imp = 'improvement_'.$att;
            $mark = isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->$attp+$ref[1]->$attp)/2,1,'.'):0.0;
            $improve = [];
            if($mark<90){
                foreach($dom->improvement as $item){
                    $itemx = new \stdClass;
                    $itemx->$imp = htmlspecialchars($item->item);
                    $improve[] = $itemx;
                }
            }else{
                $itemx = new \stdClass;
                $itemx->$imp = '-';
                $improve[] = $itemx;
            }
            $my_template->setValue('mark_'.$att, $mark.'%');
            $my_template->setImageValue('image_'.$att, array('path' => public_path('graph/talent_'.$att.$talent->talent_code.".png")));
            $my_template->cloneRowAndSetValues('improvement_'.$att, $improve);
        }
        

        $my_template->setValue('statement', str_replace("<br />","</w:t><w:br/><w:t>",nl2br(htmlspecialchars($talent->statement))));
        $my_template->setValue('personality_test', str_replace("<br />","</w:t><w:br/><w:t>",nl2br(htmlspecialchars($profile->personality_test))));
        $my_template->setValue('assessor_comment', str_replace("<br />","</w:t><w:br/><w:t>",nl2br(htmlspecialchars($profile->assessor_comment))));

        $filename = 'TALENTPROFILE_'.$talent->talent_code.'.docx';
        
        $my_template->saveAs(public_path('attachment/talent_profile/'.$filename));

        
        shell_exec('export HOME=/tmp && /bin/soffice --headless --convert-to pdf --outdir '.public_path('attachment/talent_profile/').' '.public_path('attachment/talent_profile/'.$filename));
        $profile->generated = 1;
        $profile->save();

        return redirect()->back()->with('status','File have been generated.');
    }

    function document(){

        $filetype = FileType::get();
        $users = User::whereIn('group_id',[3,7])->orderBy('name')->get();
        $data = TalentFile::orderBy('created_at','desc')->get();
        return view('secretariat.document', compact('filetype','users','data'));
    }

    function lockcontrol(){

        $data = Locks::get();

        return view('secretariat.lock-control', compact('data'));
    }

    function newlock(){
        $type = LocksType::pluck('name','id');
        return view('secretariat.lock-control-form',compact('type'));
    }

    
    function inslock(Request $req){
        $lock = new Locks();
        $lock->fill($req->input())->save();

        return redirect('/setting/lock')->with('status', 'Access have been added.');         
    }

    function editlock($id, Request $req){
        $data = Locks::find($id);
        $type = LocksType::pluck('name','id');
        return view('secretariat.lock-control-edit', compact('data','type'));
    }

    function updatelock($id,Request $req){
        $lock = Locks::find($id);
        $lock->fill($req->input())->save();

        return redirect('/setting/lock')->with('status', 'Access have been updated.');         
    }

    function lockusers($id){
        $locks = Locks::where('id',$id)->first();
        // $list = LockUser::where('lock_id',$id)->orderBy('created_at')->get();
        return view('secretariat.lock-control-users',compact('locks'));
    }

    function inslockusers(Request $req){
        if(is_array($req->users))
        foreach($req->users as $u){
            $lockusers = LockUser::where('id',$req->lock_id)->where('user_id', $u)->first();
            if(!$lockusers)
                $lockusers = new LockUser();

            $lockusers->user_id= $u;
            $lockusers->lock_id = $req->lock_id;
            $lockusers->save();

        }

        return redirect()->back()->with('status', 'Users have been added.'); 
    }
    function deletelockusers(Request $req){
        dump($req);
        $lockusers = LockUser::whereIn('id',$req->id)->delete();
    }
    function destroylock(Request $req){
        $affectedRows  = LockUser::where('lock_id', $req->id)->delete();
        $affectedRows  = Locks::where('id', $req->id)->delete();
    }

    function grade(){
        $data = Grade::orderBy('name')->get();
        return view('secretariat.grade', compact('data'));
    }

    function newgrade(){
        return view('secretariat.grade-form');
    }

    function insgrade( Request $req){
        $grade = new Grade();
        $grade->fill($req->input())->save();
        return redirect('setting/code/grade')->with('status', 'New grade have been added.');
    }

    function editgrade($id){
        $grade = Grade::where('id',$id)->first();
        return view('secretariat.grade-edit',compact('grade'));
    }

    function updategrade($id, Request $req){
        $grade = Grade::where('id',$id)->first();
        $grade->fill($req->input())->save();
        return redirect('setting/code/grade')->with('status', 'Grade have been updated.');
    }

    public function destroygrade($id){
        $affectedRows  = Grade::where('id', '=', $id)->delete();
    }

    function title(){
        $data = Title::orderBy('name')->get();
        return view('secretariat.title', compact('data'));
    }

    function newtitle(){
        return view('secretariat.title-form');
    }

    function institle( Request $req){
        $title = new Title();
        $title->fill($req->input())->save();
        return redirect('setting/code/title')->with('status', 'New title have been added.');
    }

    function edittitle($id){
        $title = Title::where('id',$id)->first();
        return view('secretariat.title-edit',compact('title'));
    }

    function updatetitle($id, Request $req){
        $title = Title::where('id',$id)->first();
        $title->fill($req->input())->save();
        return redirect('setting/code/title')->with('status', 'Title have been updated.');
    }

    public function destroytitle($id){
        $affectedRows  = Title::where('id', '=', $id)->delete();
    }

    function scheme(){
        $data = Scheme::orderBy('name')->get();
        return view('secretariat.scheme', compact('data'));
    }

    function newscheme(){
        return view('secretariat.scheme-form');
    }

    function insscheme( Request $req){
        $scheme = new Scheme();
        $scheme->fill($req->input())->save();
        return redirect('setting/code/scheme')->with('status', 'New scheme have been added.');
    }

    function editscheme($id){
        $scheme = Scheme::where('id',$id)->first();
        return view('secretariat.scheme-edit',compact('scheme'));
    }

    function updatescheme($id, Request $req){
        $scheme = Scheme::where('id',$id)->first();
        $scheme->fill($req->input())->save();
        return redirect('setting/code/scheme')->with('status', 'Scheme have been updated.');
    }

    public function destroyscheme($id){
        $affectedRows  = Scheme::where('id', '=', $id)->delete();
    }


    function coursetype(){
        $data = CourseType::orderBy('name')->get();
        return view('secretariat.coursetype', compact('data'));
    }

    function newcoursetype(){
        $color = Color::get();
        return view('secretariat.coursetype-form', compact('color'));
    }

    function inscoursetype( Request $req){
        $coursetype = new CourseType();
        $coursetype->fill($req->input())->save();
        return redirect('setting/code/coursetype')->with('status', 'New Course Type have been added.');
    }

    function editcoursetype($id){
        $coursetype = CourseType::where('id',$id)->first();
        $color = Color::get();
        return view('secretariat.coursetype-edit',compact('coursetype','color'));
    }

    function updatecoursetype($id, Request $req){
        $coursetype = CourseType::where('id',$id)->first();
        $coursetype->fill($req->input())->save();
        return redirect('setting/code/coursetype')->with('status', 'Course Type have been updated.');
    }

    public function destroycoursetype($id){
        $affectedRows  = CourseType::where('id', '=', $id)->delete();
    }

    function ftab(){
        $data = Faqtab::all();
        return view('secretariat.faqtab', compact('data'));
    }

    function newftab(){
        return view('secretariat.ftab-form');
    }

    function insftab( Request $req){
        $ftab = new Faqtab();
        $ftab->fill($req->input())->save();
        return redirect('portal/faq/tab')->with('status', 'New Faq tab have been added.');
    }

    function editftab($id){
        $ftab = Faqtab::where('id',$id)->first();
        return view('secretariat.ftab-edit',compact('ftab'));
    }

    function updateftab($id, Request $req){
        $ftab = Faqtab::where('id',$id)->first();
        $ftab->fill($req->input())->save();
        return redirect('portal/faq/tab')->with('status', 'Faq tab have been updated.');
    }

    public function destroyftab($id){
        $affectedRows  = Faqtab::where('id', '=', $id)->delete();
    }

    function fcontent(){
        $data = Faqcontent::all();
        return view('secretariat.faqcontent', compact('data'));
    }

    function newfcontent(){
        $tab = Faqtab::pluck('title','id');
        return view('secretariat.fcontent-form',compact('tab'));
    }

    function insfcontent( Request $req){
        $fcontent = new Faqcontent();
        $fcontent->fill($req->input())->save();
        return redirect('portal/faq/content')->with('status', 'New Faq content have been added.');
    }

    function editfcontent($id){
        $tab = Faqtab::pluck('title','id');
        $fcontent = Faqcontent::where('id',$id)->first();
        return view('secretariat.fcontent-edit',compact('fcontent','tab'));
    }

    function updatefcontent($id, Request $req){
        $fcontent = Faqcontent::where('id',$id)->first();
        $fcontent->fill($req->input())->save();
        return redirect('portal/faq/content')->with('status', 'Faq content have been updated.');
    }

    public function destroyfcontent($id){
        $affectedRows  = Faqcontent::where('id', '=', $id)->delete();
    }

    function ttknow(){
        $data = ThingstoKnow::get();
        return view('secretariat.things-to-know', compact('data'));
    }

    function newttknow(){
        $group = Group::pluck('name','id');
        return view('secretariat.ttknow-form',compact('group'));
    }

    function insttknow( Request $req){
        $req->merge(array('group_id' =>implode(",", $req->group_id)));

        $ttknow = new ThingstoKnow();
        if ($req->hasFile('filename')){
            $destinationPath = public_path('thingstoknow');
            $file = $req->file('filename');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);

            $req->merge(array('url' =>$newname));
            
        }
        if ($req->hasFile('image')){
            $destinationPath = public_path('thingstoknow');
            $file = $req->file('image');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            $file->move($destinationPath,$newname);

            $req->merge(array('image' =>$newname));
            
        }
        $ttknow->fill($req->input())->save();

        return redirect('things-to-know')->with('status', 'New things-to-know have been added.');
    }

    function editttknow($id){
        $group = Group::pluck('name','id');
        $ttknow = ThingstoKnow::where('id',$id)->first();
        return view('secretariat.ttknow-edit',compact('ttknow','group'));
    }

    function updatettknow($id, Request $req){
        $req->merge(array('group_id' =>implode(",", $req->group_id)));

        $ttknow = ThingstoKnow::where('id',$id)->first();
        $ttknow->fill($req->input())->save();
        return redirect('things-to-know')->with('status', 'things-to-know have been updated.');
    }

    public function destroyttknow($id){
        $ttknow  = ThingstoKnow::where('id', '=', $id)->first();

        if (!is_null($ttknow) && file_exists(public_path('thingstoknow/'.$ttknow->url))) unlink(public_path('thingstoknow/'.$ttknow->url));
        if (!is_null($ttknow) && file_exists(public_path('thingstoknow/'.$ttknow->image))) unlink(public_path('thingstoknow/'.$ttknow->image));
        $ttknow->delete();
    }

    function tor(){
        $data = TOR::get();
        return view('secretariat.tor', compact('data'));
    }

    function updatetor(Request $req){

        foreach($req->group_id as $key=>$content){
            $tor = TOR::where('group_id', $key)->first();
            if(!$tor) $tor = new TOR();
            $tor->group_id  = $key;
            $tor->content  = $content;
            $tor->save();
        }
        return redirect('term-of-reference')->with('status', 'TOR have been updated.');

    }

    function destroytalentlogbook(Request $req){
        $delete = TalentLogbook::where('talent_id',$req->talent_id)->where('series', $req->series)->delete();
        return redirect()->back()->with('status', 'Logbook have been reset.');

    }

    function destroysupervisorlogbook(Request $req){
        $talent = Talent::where('id',$req->talent_id)->first();
        $super = 'superlog'.$req->series;
        $supervisor_id = $talent->$super->supervisor_id??'';
        if($supervisor_id=='')
        return redirect()->back()->with('error', 'Unable to reset Logbook.');
        $delete = SupervisorLogbook::where('talent_id',$req->talent_id)->where('supervisor_id',$supervisor_id)->where('series', $req->series)->delete();
        return redirect()->back()->with('status', 'Logbook have been reset.');

    }

    function resettalentscv(Request $req){
        if($req->series==1)
            $delete = TalentSCV::where('talent_id',$req->applicant_id)->where('series', $req->series)->update(['status_id'=>NULL]);
        else
            $delete = TalentSCV::where('talent_id',$req->talent_id)->where('series', $req->series)->update(['status_id'=>NULL]);

        return redirect()->back()->with('status', 'Structured CV have been reset.');

    }

    function resettalenttwer(Request $req){
        $delete = TalentTWER::where('talent_id',$req->talent_id)->where('series', $req->series)->update(['status_id'=>NULL]);
        return redirect()->back()->with('status', 'TWER have been reset.');

    }

    function opentalenttwer(Request $req){
        $update = TalentTWER::where('talent_id',$req->talent_id)->where('series', $req->series)->update(['open_id'=>$req->flag=="true"?1:NULL]);
    }


    function ars(Request $req){
        $programme = Programme::pluck('name','id');

        $data = User::where('group_id',3)->where(function($q) use ($req){
                       $q->whereHas('applicant', function ($squery) use($req){
                        if(!is_null(Auth::user()->programme_id))
                            $squery->where('programme_id',Auth::user()->programme_id);
                        $squery->whereHas('status', function ($subquery){
                            $subquery->where('status_id',1);
                        }); 
                    });
                
            })->get();
        return view('application-ranking-system', compact('programme','data'));

    }

    function alumni(){

        return view('secretariat.alumni');
    }

    function announce(){
        $data = Announce::get();
        return view('secretariat.announce', compact('data'));
    }

    function newannounce(){
        return view('secretariat.announce-form');
    }

    function insannounce( Request $req){
        if($req->kt_docs_repeater_button!="" && !is_null($req->kt_docs_repeater_button[0]["btn"]))
            $req->merge(array('button' =>json_encode($req->kt_docs_repeater_button)));
        $announce = new Announce();
        $announce->fill($req->input())->save();
        return redirect('portal/announce')->with('status', 'New announcement have been added.');
    }

    function editannounce($id){
        $announce = Announce::where('id',$id)->first();
        return view('secretariat.announce-edit',compact('announce'));
    }

    function updateannounce($id, Request $req){
        if($req->kt_docs_repeater_button!="" && !is_null($req->kt_docs_repeater_button[0]["btn"]))
            $req->merge(array('button' =>json_encode($req->kt_docs_repeater_button)));
        else
        $req->merge(array('button' => NULL));
        $announce = Announce::where('id',$id)->first();
        $announce->fill($req->input())->save();
        return redirect('portal/announce')->with('status', 'Announcement have been updated.');
    }

    public function destroyannounce($id){
        $affectedRows  = Announce::where('id', '=', $id)->delete();
    }

    function banner(){
        $data = Banner::get();
        return view('secretariat.banner', compact('data'));
    }

    function newbanner(){
        return view('secretariat.banner-form');
    }

    function insbanner( Request $req){
        if ($req->hasFile('filename')){
            
            // if (!is_null($talent) && file_exists(public_path('photo/'.$talent->photo))) unlink(public_path('photo/'.$talent->photo));
            $file = $req->file('filename');
            $filename = $file->getClientOriginalName();
            //Move Uploaded File
            $destinationPath = public_path('web');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            
            $file->move($destinationPath,$newname);
            
            $req->merge(array('filename' =>$newname));
        }

        $banner = new Banner();
        $banner->fill($req->input())->save();
        return redirect('portal/banner')->with('status', 'New banner have been added.');
    }

    function editbanner($id){
        $banner = Banner::where('id',$id)->first();
        return view('secretariat.banner-edit',compact('banner'));
    }

    function updatebanner($id, Request $req){
        if ($req->hasFile('filename')){
            
            // if (!is_null($talent) && file_exists(public_path('photo/'.$talent->photo))) unlink(public_path('photo/'.$talent->photo));
            $file = $req->file('filename');
            $filename = $file->getClientOriginalName();
            //Move Uploaded File
            $destinationPath = public_path('web');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            
            $file->move($destinationPath,$newname);
            
            $req->merge(array('filename' =>$newname));
        }
        $banner = Banner::where('id',$id)->first();
        $banner->fill($req->input())->save();
        return redirect('portal/banner')->with('status', 'Banner have been updated.');
    }

    public function destroybanner($id){
        $item  = Banner::where('id', '=', $id)->first();
        
        if ($item->filename!="" && file_exists(public_path('web/'.$item->filename))) unlink(public_path('web/'.$item->filename));
        
        $affectedRows  = Banner::where('id', '=', $id)->delete();

    }

    public function destroybannerimage($filename){
        
        if ($filename!="" && file_exists(public_path('web/'.$filename))) unlink(public_path('web/'.$filename));
        
        $affectedRows  = Banner::where('filename', '=', $filename)->update(['filename'=>'']);

        return redirect()->back()->with('status', 'Image have been remove.');
    }

    function publication(){
        $data = Publication::get();
        return view('secretariat.publication', compact('data'));
    }

    function newpublication(){
        return view('secretariat.publication-form');
    }

    function inspublication( Request $req){
        if ($req->hasFile('filename')){
            
            // if (!is_null($talent) && file_exists(public_path('photo/'.$talent->photo))) unlink(public_path('photo/'.$talent->photo));
            $file = $req->file('filename');
            $filename = $file->getClientOriginalName();
            //Move Uploaded File
            $destinationPath = public_path('web');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            
            $file->move($destinationPath,$newname);
            
            $req->merge(array('filename' =>$newname));
        }
        if ($req->hasFile('image')){
            
            // if (!is_null($talent) && file_exists(public_path('photo/'.$talent->photo))) unlink(public_path('photo/'.$talent->photo));
            $file = $req->file('image');
            $image = $file->getClientOriginalName();
            //Move Uploaded File
            $destinationPath = public_path('web');
            $newname = newName($destinationPath,str_replace(" ","_",$file->getClientOriginalName()));
            
            $file->move($destinationPath,$newname);
            
            $req->merge(array('image' =>$newname));
        }
        $publication = new Publication();
        $publication->fill($req->input())->save();
        return redirect('portal/publication')->with('status', 'New publication have been added.');
    }

    function editpublication($id){
        $publication = Publication::where('id',$id)->first();
        return view('secretariat.publication-edit',compact('publication'));
    }

    function updatepublication($id, Request $req){
        $publication = Publication::where('id',$id)->first();
        $publication->fill($req->input())->save();
        return redirect('portal/publication')->with('status', 'Publication have been updated.');
    }

    public function destroypublication($id){
        $item  = Publication::where('id', '=', $id)->first();
        
        if ($item->filename!="" && file_exists(public_path('web/'.$item->filename))) unlink(public_path('web/'.$item->filename));
        $affectedRows  = Publication::where('id', '=', $id)->delete();
    }

    function destroyuser($id){
         $user  = User::where('id', '=', $id)->first();
         if ($user->avatar!='default.png' && file_exists(public_path('photo/'.$user->avatar))) unlink(public_path('photo/'.$user->avatar));
         $l1 = LockUser::where('user_id', $user->id)->delete();

         if($user->group_id==3 || $user->group_id==7){
         //if talent delete all related data table
            $talent  = Talent::where('user_id', '=', $id)->first();
            if(!is_null($talent)){
            // if ($talent->cv_file!='' && file_exists(public_path('attachment/'.$talent->cv_file))) unlink(public_path('attachment/'.$talent->cv_file));
            // if ($talent->cpd_file!='' && file_exists(public_path('attachment/'.$talent->cpd_file))) unlink(public_path('attachment/'.$talent->cpd_file));
                
                $t1 = TalentAcademic::where('talent_id', '=', $talent->id)->delete();
                // $t1 = TalentAssessment::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentAward::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentCourse::where('talent_id', '=', $talent->id)->delete();
                $t1 = CourseAttendance::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentCPDNSR::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentDesignation::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentInterest::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentLNPT::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentLogbook::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentPanel::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentPanelname::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentSCV::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentSpecialization::where('talent_id', '=', $talent->id)->delete();
                $t1 = TalentStatus::where('talent_id', '=', $talent->id)->delete();
                // $t1 = RefereeAssessment::where('talent_id', '=', $talent->id)->delete();
                $t1 = RefereeRecommendation::where('talent_id', '=', $talent->id)->delete();
                $t1 = RefLogbook::where('talent_id', '=', $talent->id)->delete();
                $t1 = Supervisor::where('talent_id', '=', $talent->id)->delete();
                $t1 = SupervisorLogbook::where('talent_id', '=', $talent->id)->delete();
                $t1 = SuggestSupervisor::where('talent_id', '=', $talent->id)->delete();

                // $t1 = DesigHistory::where('talent_id', '=', $talent->id)->delete();
                foreach($talent->project as $project){
                    $p1 = TalentProjectProgress::where('project_id', '=', $project->id)->first();
                    if ($p1 && $p1->filename!='' && file_exists(public_path('project/'.$p1->filename))) unlink(public_path('project/'.$p1->filename));
                    if ($p1) $p1->delete();
                }
                $t1 = TalentProject::where('talent_id', '=', $talent->id)->delete();

                foreach($talent->document as $document){
                    $d1 = TalentFile::where('id', '=', $document->id)->first();
                    if ($d1->filename!='' && file_exists(public_path('attachment/'.$d1->type->filepath.$d1->filename))) unlink(public_path('attachment/'.$d1->type->filepath.$d1->filename));
                    $d1->delete();
                }

                $w = TalentTWER::where('talent_id', '=', $talent->id)->get();
                foreach($w as $twer){
                    $w1 = TalentTWERComment::where('twer_id', '=', $twer->id)->delete();
                }
                $w1 = TalentTWER::where('talent_id', '=', $talent->id)->first();
                if ($w1){
                    if ($w1->situation_file!='' && file_exists(public_path('twer/'.$w1->situation_file))) unlink(public_path('twer/'.$w1->situation_file));
                    if ($w1->target_file!='' && file_exists(public_path('twer/'.$w1->target_file))) unlink(public_path('twer/'.$w1->target_file));
                    if ($w1->gap_file!='' && file_exists(public_path('twer/'.$w1->gap_file))) unlink(public_path('twer/'.$w1->gap_file));
                    if ($w1->plan_file!='' && file_exists(public_path('twer/'.$w1->plan_file))) unlink(public_path('twer/'.$w1->plan_file));
                }
                $w1 = TalentTWER::where('talent_id', '=', $talent->id)->delete();

                $t1 = Talent::where('user_id', '=', $id)->delete();
                
               }
          }elseif($user->group_id==4){// if referee check if there is talent
                $t1 = RefLogbook::where('referee_id', '=', $id)->delete();
                $t1 = RefereeRecommendation::where('referee_id', '=', $id)->delete();
                
                //$talent = RefereeRecommendation::where('referee_id', '=', $id)->first();
                //if ($talent) return redirect('users')->with('warning', 'Unable to remove user. Theres applicant users under this referee.');
                //else{
                    //$affectedRows  = User::where('id', '=', $id)->delete();
                //}
          }elseif($user->group_id==5){//panel
                $panel = TalentPanel::where('panel_id', '=', $id)->first();
                if ($panel) return redirect('users')->with('warning', 'Unable to remove user. Theres applicant users under this panel.');
                
               // $affectedRows  = User::where('id', '=', $id)->delete();
          
          }elseif($user->group_id==6){//supervisor
                $super = Supervisor::where('super_id', '=', $id)->first();
                if ($super) return redirect('users')->with('warning', 'Unable to remove user. Theres applicant users under this supervisor.');
                
               // $affectedRows  = User::where('id', '=', $id)->delete();
          }
        
        // if ($user->avatar!='' && file_exists(public_path('photo/'.$user->avatar))) unlink(public_path('photo/'.$user->avatar));

        $affectedRows = Notify::where('user_id', '=', $id)->delete();
        $affectedRows  = User::where('id', '=', $id)->delete();

        return redirect()->back()->with('status', 'You have removed an item.');
        
    }

    function project(){
        $data = TalentProject::orderBy('created_at','desc')->get();
        return view('secretariat.project', compact('data'));
    }

    function talentassesmentmark(Request $req){
        $key_status = $req->status;
        $key_programme = $req->programme;

        $programme = Programme::pluck('name','id');
        $status = StatusFinal::pluck('name','id');
        $data = User::where('group_id',7)->whereHas('talent', function($q1){
            $q1->where('level_id', 2)->whereHas('status', function($q2){
                $q2->where('cohort','>=',12);
            });
        })->get();
        
        return view('secretariat.talent-assesment-mark', compact('programme','data','status','key_status','key_programme'));
    }

    function updatetalentfinalscore(Request $req){
        $talent = Talent::find($req->id);
        $score = $talent->finalmark;
        $data = ['cv' => 0, 'project' => 0, 'self' => 0];
        if(!is_null($score)){
            $data = json_decode($score);
            if($req->type=='cv'){
                $data->cv = $req->val;
            }elseif($req->type=='project'){
                $data->project = $req->val;
            }elseif($req->type=='self'){
                $data->self = $req->val;
            }
        }
        $talent->finalmark = json_encode($data);
        $talent->save();
    }
}
