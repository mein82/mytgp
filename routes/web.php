<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $announce = App\Models\Announce::where('status_id',1)->get();
    $banner = App\Models\Banner::where('status_id',1)->get();
    $publication = App\Models\Publication::get();
    $alumni = App\Models\Alumni::inRandomOrder()
                ->limit(3)->get();
    $faq = App\Models\Faqtab::all();
    return view('welcome', compact('announce','banner','publication','alumni','faq'));
});


Route::group(['middleware'=>['auth','verified']], function() {
    Route::get('/dashboard/{role?}', [HomeController::class,'index'])->name('dashboard');
    Route::get('/notification/modal/{id}', [HomeController::class,'modalnotification']);
    Route::post('/register/applicant', [HomeController::class,'registerapplicant'])->name('register.applicant');

    Route::get('/account-setting', [HomeController::class,'accountsetting']);
    Route::post('/change/password', [HomeController::class,'changepassword'])->name('change.password');
    Route::post('/change/email', [HomeController::class,'changeemail'])->name('change.email');
    Route::post('/change/profile/{id}', [HomeController::class,'changeprofile'])->name('change.profile');


    // applicant ---------------------------------------------------------------------------------------
    Route::get('/e-form', [HomeController::class,'eform']);
    Route::post('/insert/e-form', [HomeController::class,'inseform'])->name('create.applicant');
    Route::get('/edit/e-form/{id}', [HomeController::class,'editeform']);
    Route::patch('/update/e-form/{id}', [HomeController::class,'updeform'])->name('update.applicant');

    Route::get('/applicant/referees', [HomeController::class,'applicantreferees']);
    Route::post('/insert/referees', [HomeController::class,'insreferees'])->name('add.referees');
    Route::post('/insert/referee', [HomeController::class,'insreferee'])->name('create.referees');
    Route::get('/referee/{id}/destroy',  [HomeController::class,'destroyreferee'])->name('remove.referees');
    Route::get('/referee/{id}/email',  [HomeController::class,'emailreferee'])->name('email.referees');
    Route::get('/referee/assessment/{id}/email',  [HomeController::class,'emailrefereeassessment'])->name('email.refereeassessment');
    
    Route::get('/applicant/logbook', [HomeController::class,'applicantlogbook']);
    Route::post('/insert/selflogbook', [HomeController::class,'insselflog'])->name('add.selflogbook');
    Route::get('/applicant/view/logbook', [HomeController::class,'applicantlogbookview']);


    Route::post('/referee/search', function() {

        $keyword = \Request::post('keyword');
        $users = [];
        if($keyword!='')
            $users = App\Models\User::
                where(function($query) use ($keyword){ 
                    $query->orWhere('name','like','%'.$keyword.'%')
                    ->orWhere('email','like','%'.$keyword.'%')
                    ->orWhere('username','like','%'.$keyword.'%');
                })
                ->whereDoesntHave('referee', function($query1){
                    $query1
                    ->where('talent_id','=',\Auth::user()->talent->id??0);
                })
                ->where('id','<>',\Auth::user()->id)
                ->whereNotIn('group_id',[1,2,5])->orderBy('name','desc')->get();
       
        if(count($users)>0)
            return view('select-user-list', compact('users'));
        else
            return '';
        // return \Response()->json($list);
    })->name('referee.search');

    Route::get('/applicant/document', [HomeController::class,'applicantdocument']);

    // talent ---------------------------------------------------------------------------------------
    
    Route::get('/talent/logbook/{series}', [HomeController::class,'talentlogbook']);
    Route::post('/insert/talentlogbook', [HomeController::class,'instalentlog'])->name('add.talentlogbook');
    // Route::get('/talent/view/logbook/{series}', [HomeController::class,'talentlogbookview']);

    Route::get('/talent/twer/{series}', [HomeController::class,'talenttwer']);
    Route::post('/insert/talenttwer', [HomeController::class,'instalenttwer'])->name('add.talenttwer');
    Route::get('/remove/twerfile/{file}/{id}', [HomeController::class,'removetwerfile']);
    
    
    Route::get('/talent/structure-cv/{series}', [HomeController::class,'talentscv']);
    Route::post('/insert/talentscv', [HomeController::class,'instalentscv'])->name('add.talentscv');


    Route::get('/talent/training', [HomeController::class,'talenttraining']);
    Route::get('/training/response/{id}/modal', [HomeController::class,'trainingresponse']);
    Route::patch('/insert/response/{id}', [HomeController::class,'insresponse'])->name('update.response');

    Route::get('/talent/project', [HomeController::class,'talentproject']);
    Route::get('/new/project', [HomeController::class,'newproject']);
    Route::post('/add/project', [HomeController::class,'insproject'])->name('add.project');
    Route::get('/new/progress/{id}', [HomeController::class,'newprogress']);
    Route::post('/add/progress', [HomeController::class,'insprogress'])->name('add.progress');
    Route::get('edit/{id}/project', [HomeController::class,'editproject']);
    Route::patch('updateproject/{id}',[HomeController::class,'updateproject'])->name('update.project');
    Route::post('destroy/{id}/project',[HomeController::class,'destroyproject']);
    Route::get('/talent/progress/{id}/modal', [HomeController::class,'progress']);
    Route::post('destroy/{id}/progress',[HomeController::class,'destroyprogress']);
    
    Route::get('/guidance/{id}',function($id){
        return App\Models\ProjectStatus::find($id);    
    });

    Route::get('/talent/document', [HomeController::class,'talentdocument']);

    Route::post('/upload/files', [HomeController::class,'uploadfiles']);
    Route::post('/destroy/{id}/document',[HomeController::class,'destroydocument']);
    Route::post('/destroy/document/bulk',[HomeController::class,'destroybulkdocument']);

    Route::get('/talent/assessment/profile', [HomeController::class,'talentassessmentprofile']);
    Route::post('/update/assessment/profile', [HomeController::class,'savetalentassprofile'])->name('update.assprofile');

    Route::get('/talent/assessment/project/{section?}', [HomeController::class,'talentassessmentproject']);
    Route::post('/update/assessment/project', [HomeController::class,'savetalentassproject'])->name('update.assproject');

    // referee ---------------------------------------------------------------------------------------

    Route::get('/referee/recommendation', [HomeController::class,'recommendationlist']);
    Route::get('/recommendation/{id}', [HomeController::class,'recommendation']);
    Route::patch('/update/recommendation/{id}', [HomeController::class,'updrecommendation'])->name('update.recommendation');
    Route::get('/recommendation/view/{id}', [HomeController::class,'recommendationview']);

    Route::get('/referee/logbook/{id}', [HomeController::class,'refereelogbook']);
    Route::post('/insert/reflogbook', [HomeController::class,'insreflog'])->name('add.reflogbook');
    Route::get('/referee/{ref_id}/view/logbook/{tal_id}', [HomeController::class,'refereelogbookview']);


    // secretariat ---------------------------------------------------------------------------------------

    Route::match(['get', 'post'],'/secretariat/applicants/{status?}', [HomeController::class,'applicants']);
    // Route::get('/secretariat/applicants/search', [HomeController::class,'applicantsearch'])->name('applicant.search');
    Route::get('/secretariat/applicant/summary/{id}', [HomeController::class,'applicantsummary']);
    Route::post('/secretariat/evaluate', [HomeController::class,'evaluate'])->name('secretariat.evaluate');
    Route::get('/applicant/update/{appid}/{id}', [HomeController::class,'applicantupdate'])->name('applicant.update');
    
    Route::get('/applicant/recommendation/{id}/modal', [HomeController::class,'modalrecommendation']);
    Route::get('/applicant/selfcm/{id}/modal', [HomeController::class,'modalselfcm']);
    Route::get('/applicant/refcm/{id}/modal', [HomeController::class,'modalrefcm']);


    Route::get('/secretariat/selections', [HomeController::class,'selections']);
    Route::get('/secretariat/selections/search', [HomeController::class,'selectionsearch'])->name('selection.search');
    Route::get('/applicant/selection/{id}/modal', [HomeController::class,'modalselection']);
    Route::post('/applicant/update/status/{id}', [HomeController::class,'applicantstatus'])->name('status.update');

    Route::match(['get', 'post'],'/secretariat/talents', [HomeController::class,'talents']);
    Route::get('/talent/supervisor/{id}/modal', [HomeController::class,'modalsupervisor']);
    Route::post('/talent/assign/supervisor', [HomeController::class,'assignsupervisor'])->name('assign.supervisor');
    Route::get('/talent/remove/supervisor/{id}', [HomeController::class,'removesupervisor']);
    Route::get('/talent/activate/{talent_id}/supervisor/{super_id}', [HomeController::class,'activatesupervisor']);
    Route::get('/talent/courses/{id}/modal', [HomeController::class,'modalcourses']);
    Route::post('/talent/complete/course', [HomeController::class,'completecourse'])->name('complete.course');
    Route::post('talent/remark/supervisor',[HomeController::class,'remarksupervisor']);
    Route::get('/talent/project/{id}/modal', [HomeController::class,'modalproject']);
    
    Route::get('/secretariat/talent-profile', [HomeController::class,'talentprofile']);
    Route::get('/talent/profile/{id}', [HomeController::class,'viewprofile']);
    Route::get('/talent/profile/{id}/modal', [HomeController::class,'modalprofile']);
    Route::post('update/talentprofile/{id?}',[HomeController::class,'updatetalentprofile'])->name('update.talentprofile');;
    Route::get('talentprofile/{id}/generate',[HomeController::class,'generatetalentprofile'])->name('generate.talentprofile');;

    Route::get('/talent/achievement/{id}', [HomeController::class,'viewachievement']);
    Route::post('update/talentachievement/{id?}',[HomeController::class,'updatetalentachievement'])->name('update.talentachievement');;
    Route::get('talentachievement/{id}/generate',[HomeController::class,'generatetalentachievement'])->name('generate.talentachievement');;


    Route::get('/secretariat/talent-assesment-mark', [HomeController::class,'talentassesmentmark']);
    Route::post('/talent/finalscore',[HomeController::class,'updatetalentfinalscore'])->name('update.talentfinalscore');;


    Route::get('/secretariat/talent/summary/{id}', [HomeController::class,'talentsummary']);

    Route::get('/alumnus', [HomeController::class,'alumni']);
    Route::get('/secretariat/supervisors', [HomeController::class,'supervisors']);

    Route::get('/secretariat/project', [HomeController::class,'project']);


    Route::get('/training', [HomeController::class,'training']);
    Route::get('new/training', [HomeController::class,'newtraining']);
    Route::post('add/training', [HomeController::class,'instraining'])->name('add.course');
    Route::get('edit/{id}/training', [HomeController::class,'edittraining']);
    Route::patch('updatetraining/{id}',[HomeController::class,'updatetraining'])->name('update.course');
    Route::get('destroy/{id}/training',[HomeController::class,'destroytraining']);
    Route::get('training/participants/{id}', [HomeController::class,'participants']);
    Route::post('add/participants', [HomeController::class,'insparticipants'])->name('add.participants');
    Route::post('update/talentcourse', [HomeController::class,'updatetalentcourse'])->name('update.talentcourse');
    Route::post('clear/talentcourse', [HomeController::class,'cleartalentcourse'])->name('clear.talentcourse');
    Route::post('emailinvite/talentcourse', [HomeController::class,'emailinvitetalentcourse'])->name('emailinvite.talentcourse');
    Route::post('delete/talentcourse', [HomeController::class,'deletetalentcourse'])->name('delete.talentcourse');
    
    Route::get('/secretariat/document', [HomeController::class,'document']);

    Route::get('/secretariat/ars', [HomeController::class,'ars']);

    Route::post('/applicant/search', function() {

        $keyword = \Request::post('keyword');
        $cohort = \Request::post('cohort');
        $status = \Request::post('status');
        $applicant = \Request::post('applicant');
        $users = App\Models\User::query();
        if($keyword!='')
            $users = $users->where(function($query) use ($keyword){ 
                    $query->orWhere('name','like','%'.$keyword.'%')
                ->orWhere('email','like','%'.$keyword.'%')
                // ->orWhere('organization','like','%'.$keyword.'%')
                ->orWhere('username','like','%'.$keyword.'%');
                });
        if($applicant==true)
            $users = $users->whereHas('applicant', function ($squery){
                        $squery->whereHas('status', function ($subquery){
                            $subquery->where('status_id',1);
                        }); 
                    }); 
        if($cohort!='')
            $users = $users->whereHas('talent', function ($query) use ($cohort){
                        $query->whereHas('status', function ($subquery) use ($cohort){
                            $subquery->where('cohort', $cohort)->where('final_id',1);
                        });
                    });
        $users = $users->where('group_id', 3)->orderBy('name','asc')->get();
       
        if(count($users)>0)
            return view('select-talent-list', compact('users'));
        else
            return '';
        // return \Response()->json($list);
    })->name('applicant.search');
    
    
    Route::post('/talent/search', function() {

        $keyword = \Request::post('keyword');
        $cohort = \Request::post('cohort');
        $status = \Request::post('status');
        $users = App\Models\User::query();
        if($keyword!='')
            $users = $users->where(function($query) use ($keyword){ 
                    $query->orWhere('name','like','%'.$keyword.'%')
                ->orWhere('email','like','%'.$keyword.'%')
                // ->orWhere('organization','like','%'.$keyword.'%')
                ->orWhere('username','like','%'.$keyword.'%');
                });
        if($cohort!='')
            $users = $users->whereHas('talent', function ($query) use ($cohort){
                        $query->whereHas('status', function ($subquery) use ($cohort){
                            $subquery->where('cohort', $cohort)->where('final_id',1);
                        });
                    });
        $users = $users->where('group_id', 7)->orderBy('name','asc')->get();
       
        if(count($users)>0)
            return view('select-talent-list', compact('users'));
        else
            return '';
        // return \Response()->json($list);
    })->name('talent.search');

    Route::post('/app-talent/search', function() {

        $keyword = \Request::post('keyword');
        $cohort = \Request::post('cohort');
        $status = \Request::post('status');
        $users = App\Models\User::query();
        if($keyword!='')
            $users = $users->where(function($query) use ($keyword){ 
                    $query->orWhere('name','like','%'.$keyword.'%')
                ->orWhere('email','like','%'.$keyword.'%')
                // ->orWhere('organization','like','%'.$keyword.'%')
                ->orWhere('username','like','%'.$keyword.'%');
                });
        if($cohort!='')
            $users = $users->whereHas('talent', function ($query) use ($cohort){
                        $query->whereHas('status', function ($subquery) use ($cohort){
                            $subquery->where('cohort', $cohort)->where('final_id',1);
                        });
                    });
        $users = $users->whereIn('group_id', [3, 7])->orderBy('name','asc')->get();
       
        if(count($users)>0)
            return view('select-talent-list', compact('users'));
        else
            return '';
        // return \Response()->json($list);
    })->name('apptalent.search');

    Route::post('/supervisor/search', function() {

        $keyword = \Request::post('keyword');
        $users = [];
        if($keyword!='')
            $users = App\Models\User::
                where(function($query) use ($keyword){ 
                    $query->orWhere('name','like','%'.$keyword.'%')
                ->orWhere('email','like','%'.$keyword.'%')
                // ->orWhere('organization','like','%'.$keyword.'%')
                ->orWhere('username','like','%'.$keyword.'%');
                })
                ->whereNotIn('group_id',[1,2,5])->orderBy('name','asc')->get();
       
        if(count($users)>0)
            return view('select-user-list', compact('users'));
        else
            return '';
        // return \Response()->json($list);
    })->name('supervisor.search');

    Route::post('/user/search', function() {

        $keyword = \Request::post('keyword');
        $type = \Request::post('type');
        $selected = \Request::post('selected');
        $cohort = \Request::post('cohort');

        $users = App\Models\User::query();
        if($keyword!='')
                $users = $users->
                where(function($query) use ($keyword){ 
                    $query->orWhere('name','like','%'.$keyword.'%')
                ->orWhere('email','like','%'.$keyword.'%')
                // ->orWhere('organization','like','%'.$keyword.'%')
                ->orWhere('username','like','%'.$keyword.'%');
                })
                ;
        if($type=='2')
            $users = $users->where('group_id', 3);
        if($type=='3')
            $users = $users->whereHas('referee');
        if($type=='4'){
            $users = $users->where('group_id', 7);
            if($cohort!=""){
                $users = $users->whereHas('talent.status', function ($talent) use ($cohort){
                    $talent->where('cohort', $cohort)->where('final_id', 1);
                });
            }
        }
        if($type=='5')
            $users = $users->whereHas('supervisor');
        if($selected!="")
            $users = $users->whereIn('id',$selected);
    
        
        $users = $users->whereNotIn('group_id',[1,2,5])->orderBy('name','asc')->get();
        if($selected!="")
            return view('selected-user-list', compact('users'));

        if(count($users)>0)
            return view('select-user-list', compact('users'));
        else
            return '';
        // return \Response()->json($list);
    })->name('user.search');

    Route::get('/setting/notification', [HomeController::class,'notification']);
    Route::get('new/notification', [HomeController::class,'newnotification']);
    Route::post('add/notification', [HomeController::class,'insnotification'])->name('add.notification');
    Route::get('edit/{id}/notification', [HomeController::class,'editnotification']);
    Route::patch('updatenotification/{id}',[HomeController::class,'updatenotification'])->name('update.notification');
    Route::post('destroy/{id}/notification',[HomeController::class,'destroynotification']);
    Route::get('destroy/{id}/notify',[HomeController::class,'destroynotify']);
    

    Route::get('/setting/user', [HomeController::class,'user']);
    Route::get('new/user', [HomeController::class,'newuser']);
    Route::post('add/user', [HomeController::class,'insuser'])->name('add.user');
    Route::get('edit/{id}/user', [HomeController::class,'edituser']);
    Route::patch('updateuser/{id}',[HomeController::class,'updateuser'])->name('update.user');
    Route::post('reset/{id}/user', [HomeController::class,'resetuser'])->name('reset.user');
    Route::get('/impersonate/user/{id}/{back}', [HomeController::class,'impersonate']);
    Route::get('/reverse/impersonate/user', [HomeController::class,'reverseimpersonate']);
    Route::post('destroy/{id}/user', [HomeController::class,'destroyuser'])->name('destroy.user');
    Route::get('/resetpanel/{id}', [HomeController::class,'resetpanel']);

    Route::get('/setting/lock', [HomeController::class,'lockcontrol']);
    Route::get('new/lock', [HomeController::class,'newlock']);
    Route::post('add/lock', [HomeController::class,'inslock'])->name('add.lock');
    Route::get('edit/{id}/lock', [HomeController::class,'editlock']);
    Route::patch('updatelock/{id}',[HomeController::class,'updatelock'])->name('update.lock');
    Route::get('destroy/{id}/lock',[HomeController::class,'destroylock']);
    Route::get('lock/users/{id}', [HomeController::class,'lockusers']);
    Route::post('add/locksusers', [HomeController::class,'inslockusers'])->name('add.lockusers');
    Route::post('delete/lockusers', [HomeController::class,'deletelockusers'])->name('delete.lockusers');
    
    Route::get('/setting/code/grade', [HomeController::class,'grade']);
    Route::get('new/grade', [HomeController::class,'newgrade']);
    Route::post('add/grade', [HomeController::class,'insgrade'])->name('add.grade');
    Route::get('edit/{id}/grade', [HomeController::class,'editgrade']);
    Route::patch('updategrade/{id}',[HomeController::class,'updategrade'])->name('update.grade');
    Route::get('destroy/{id}/grade',[HomeController::class,'destroygrade']);

    Route::get('/setting/code/scheme', [HomeController::class,'scheme']);
    Route::get('new/scheme', [HomeController::class,'newscheme']);
    Route::post('add/scheme', [HomeController::class,'insscheme'])->name('add.scheme');
    Route::get('edit/{id}/scheme', [HomeController::class,'editscheme']);
    Route::patch('updatescheme/{id}',[HomeController::class,'updatescheme'])->name('update.scheme');
    Route::get('destroy/{id}/scheme',[HomeController::class,'destroyscheme']);

    Route::get('/setting/code/title', [HomeController::class,'title']);
    Route::get('new/title', [HomeController::class,'newtitle']);
    Route::post('add/title', [HomeController::class,'institle'])->name('add.title');
    Route::get('edit/{id}/title', [HomeController::class,'edittitle']);
    Route::patch('updatetitle/{id}',[HomeController::class,'updatetitle'])->name('update.title');
    Route::get('destroy/{id}/title',[HomeController::class,'destroytitle']);
    
    Route::get('/setting/code/coursetype', [HomeController::class,'coursetype']);
    Route::get('new/coursetype', [HomeController::class,'newcoursetype']);
    Route::post('add/coursetype', [HomeController::class,'inscoursetype'])->name('add.coursetype');
    Route::get('edit/{id}/coursetype', [HomeController::class,'editcoursetype']);
    Route::patch('updatecoursetype/{id}',[HomeController::class,'updatecoursetype'])->name('update.coursetype');
    Route::get('destroy/{id}/coursetype',[HomeController::class,'destroycoursetype']);

    Route::get('/portal/faq/tab', [HomeController::class,'ftab']);
    Route::get('new/ftab', [HomeController::class,'newftab']);
    Route::post('add/ftab', [HomeController::class,'insftab'])->name('add.ftab');
    Route::get('edit/{id}/ftab', [HomeController::class,'editftab']);
    Route::post('updateftab/{id}',[HomeController::class,'updateftab'])->name('update.ftab');
    Route::post('destroy/{id}/ftab',[HomeController::class,'destroyftab']);

    Route::get('/portal/faq/content', [HomeController::class,'fcontent']);
    Route::get('new/fcontent', [HomeController::class,'newfcontent']);
    Route::post('add/fcontent', [HomeController::class,'insfcontent'])->name('add.fcontent');
    Route::get('edit/{id}/fcontent', [HomeController::class,'editfcontent']);
    Route::post('updatefcontent/{id}',[HomeController::class,'updatefcontent'])->name('update.fcontent');
    Route::post('destroy/{id}/fcontent',[HomeController::class,'destroyfcontent']);

    Route::get('/things-to-know', [HomeController::class,'ttknow']);
    Route::get('new/ttknow', [HomeController::class,'newttknow']);
    Route::post('add/ttknow', [HomeController::class,'insttknow'])->name('add.ttknow');
    Route::get('edit/{id}/ttknow', [HomeController::class,'editttknow']);
    Route::patch('updatettknow/{id}',[HomeController::class,'updatettknow'])->name('update.ttknow');
    Route::post('destroy/{id}/ttknow',[HomeController::class,'destroyttknow']);
    
    Route::get('/term-of-reference', [HomeController::class,'tor']);
    Route::patch('updatetor',[HomeController::class,'updatetor'])->name('update.tor');

    Route::get('destroy/talent/logbook',[HomeController::class,'destroytalentlogbook'])->name('delete.talentlogbook');
    Route::post('destroy/supervisor/logbook',[HomeController::class,'destroysupervisorlogbook'])->name('delete.supervisorlogbook');
    Route::get('reset/talent/scv',[HomeController::class,'resettalentscv'])->name('reset.talentscv');
    Route::get('reset/talent/twer',[HomeController::class,'resettalenttwer'])->name('reset.talenttwer');
    Route::post('open/talent/twer',[HomeController::class,'opentalenttwer'])->name('open.talenttwer');


    Route::get('/portal/announce', [HomeController::class,'announce']);
    Route::get('new/announce', [HomeController::class,'newannounce']);
    Route::post('add/announce', [HomeController::class,'insannounce'])->name('add.announce');
    Route::get('edit/{id}/announce', [HomeController::class,'editannounce']);
    Route::patch('updateannounce/{id}',[HomeController::class,'updateannounce'])->name('update.announce');
    Route::post('destroy/{id}/announce',[HomeController::class,'destroyannounce']);

    Route::get('/portal/banner', [HomeController::class,'banner']);
    Route::get('new/banner', [HomeController::class,'newbanner']);
    Route::post('add/banner', [HomeController::class,'insbanner'])->name('add.banner');
    Route::get('edit/{id}/banner', [HomeController::class,'editbanner']);
    Route::patch('updatebanner/{id}',[HomeController::class,'updatebanner'])->name('update.banner');
    Route::post('destroy/{id}/banner',[HomeController::class,'destroybanner']);
    Route::get('/destroy/banner/{filename}', [HomeController::class,'destroybannerimage']);

    Route::get('/portal/publication', [HomeController::class,'publication']);
    Route::get('new/publication', [HomeController::class,'newpublication']);
    Route::post('add/publication', [HomeController::class,'inspublication'])->name('add.publication');
    Route::get('edit/{id}/publication', [HomeController::class,'editpublication']);
    Route::patch('updatepublication/{id}',[HomeController::class,'updatepublication'])->name('update.publication');
    Route::post('destroy/{id}/publication',[HomeController::class,'destroypublication']);

    // panel ---------------------------------------------------------------------------------------

    Route::match(['get', 'post'],'/panel/applicants', [HomeController::class,'panelapplicants']);
    Route::get('/panel/applicant/summary/{id}', [HomeController::class,'panelappsummary']);
    Route::patch('panel/evaluate', [HomeController::class,'panelevaluate'])->name('panel.evaluate');
    Route::match(['get', 'post'],'/panel/talents', [HomeController::class,'paneltalents']);
    Route::get('/panel/talent/summary/{id}', [HomeController::class,'paneltalentsummary']);
    Route::get('/panel/ars', [HomeController::class,'ars']);


    // supervisor ---------------------------------------------------------------------------------------
    Route::get('/supervisor/talents', [HomeController::class,'supervisortalents']);
    Route::get('/supervisor/talent/summary/{id}', [HomeController::class,'supertalentsummary']);
    Route::get('/supervisor/logbook/{series}/{talent}/modal', [HomeController::class,'supervisorlogbook']);
    Route::post('/insert/supervisorlogbook', [HomeController::class,'inssupervisorlog'])->name('add.supervisorlogbook');
    Route::post('/supervisor/assest/twer', [HomeController::class,'twerassessment'])->name('assesst.twer');
    Route::post('/supervisor/mark/twer', [HomeController::class,'twermark'])->name('mark.twer');
    Route::get('/supervisor/talents/{task}', [HomeController::class,'supervisortalentstask']);
    Route::get('/supervisor/talent/summary/{task}/{id}', [HomeController::class,'supertalentsummarytask']);
   
    Route::get('/onetime/announce-complete', function() {
        $twers = \App\Models\TalentTWER::whereNotNull('mark')->get();
        foreach($twers as $twer){
            if($twer->series==1)
                $year = 'First';
            if($twer->series==2)
                $year = 'Second';
            try{
                Mail::to($twer->talent->user->email)->queue(new \App\Mail\AssComplete($twer->talent->fullname, 'Your Supervisor '.$twer->talent->supervisor->super->name.' has submitted the TWER '.$year.' Year assessment. Thank you.'));
                Mail::to($twer->talent->supervisor->super->email)->queue(new \App\Mail\AssComplete($twer->talent->supervisor->super->name, 'Thank you for the submission of TWER '.$year.' Year assessment for TGP Talent: '.$twer->talent->fullname));
                        
            }catch (\Exception $e) {
                echo 'Error';
            }
        }
        $logbooks = \App\Models\SupervisorLogbook::whereIn('series', [2,3])->get();
        foreach($logbooks as $logbook){
            if($logbook->series==2)
                $year = 'First';
            if($logbook->series==3)
                $year = 'Second';
            try{
                Mail::to($logbook->talent->user->email)->queue(new \App\Mail\AssComplete($logbook->talent->fullname, 'Your Supervisor '.$logbook->supervisor->name.' has submitted the TGP-CM '.$year.' Year assessment. Thank you.'));
                Mail::to($logbook->supervisor->email)->queue(new \App\Mail\AssComplete($logbook->supervisor->name, 'Thank you for the submission of TGP-CM '.$year.' Year assessment for TGP Talent: '.$logbook->talent->fullname));
                        
            }catch (\Exception $e) {
                echo 'Error';
            }
        }
    });

});

require __DIR__.'/auth.php';
