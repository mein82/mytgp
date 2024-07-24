<x-app-layout activemenu="talent-evaluate">
<x-slot name="header">
	Talent
</x-slot>
<x-slot name="subheader">
Achievement Report
</x-slot>
@php
$talent = $user->talent;
$audit = $talent->user->audits;
@endphp
{!! Form::model($talent->achievement,array('route' => ['update.talentachievement',$talent->id], 'method'=>'post', 'novalidate' => 'novalidate')) !!}	

<div class="card">
    <div class="card-body">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-150px symbol-fixed position-relative border">
                    <img src="{{url('')}}/photo/{{$talent->user->avatar}}" alt="image" />
                    <!-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div> -->
                </div>
            </div>
            <!--end::Pic--><!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$talent->title->name??''}} {{$talent->user->name}}</a>
                        </div>
                        <!--end::Name-->
                        
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
                <!--begin::Stats-->
                <div class="d-flex flex-wrap flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Age</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    
                                    <div class="fs-5 text-gray-800 fw-bolder">{{getAgeFromIdentity($talent->ic_no)}}</div>
                                </div>
                                <!--end::Number-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Programme</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    
                                    <div class="fs-5 text-gray-800 fw-bolder">{{$talent->programme->name??''}}</div>
                                </div>
                                <!--end::Number-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Cohort</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-5 text-gray-800 fw-bolder">{{$talent->status->cohort??''}}</div>
                                </div>
                                <!--end::Number-->
                                
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Talent ID</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    
                                    <div class="fs-5 text-gray-800 fw-bolder">{{$talent->talent_code}}</div>
                                </div>
                                <!--end::Number-->
                                
                            </div>
                            <!--end::Stat-->
                            
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->
                    
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>

        <div class="separator my-5"></div>

		<!--end::Details-->
		<div class="row d-flex justify-content-between">
			<div class="col-4">
                <div class="form-floating mb-7">
                    {!!  Form::text('name', $talent->achievement->name??$talent->fullname, array('class'=>'form-control','id'=>'name','placeholder'=>''))!!} 
                    <label for="name">Name</label>
                </div>
                <!--begin::Input group-->
                <div class="form-floating mb-7">
                    {!!  Form::text('prev_position', $talent->achievement->prev_position??implode('',array_filter($audit->pluck('old_values.designation')->toArray())), array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                    <label for="floatingInput">Previous Designation</label>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="form-floating mb-7">
                    {!!  Form::text('cur_position', $talent->achievement->cur_position??$talent->user->designation, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                    <label for="floatingInput">Current Designation</label>
                </div>
                <!--end::Input group-->
                @php
                $arr = array();
                $supervisors = $talent->achievement->supervisor??'';
                if($supervisors==''){
                    foreach($talent->supervisors as $sv){
                        $arr[]= $sv->super->name. ' ('.$sv->remark.')';
                    }
                    $supervisors = implode('&#13;&#10;',$arr);
                }
                @endphp
                <div class="form-floating mb-7">
                    <textarea class="form-control" id="supervisor" style="height: 100px" name="supervisor">{!!$supervisors!!}</textarea>
                    <label for="supervisor">Supervisor</label>
                </div>
                <div class="separator separator-dotted separator-content border-dark mb-10"><span class="w-200px fw-bolder">TGP Project</span></div>
                <div class="form-floating mb-7">
                    <textarea class="form-control" name="project_title" style="height: 100px">{{$talent->achievement->project_title??($talent->assproject->project_title??'')}}</textarea>
                    <label for="supervisor">Title of TGP Project</label>
                </div>

                <div class="form-floating mb-7">
                    <textarea class="form-control" name="project_presentation" style="height: 100px">{{$talent->achievement->project_presentation??($talent->assproject->project_presentation??'')}}</textarea>
                    <label for="supervisor">Presentation</label>
                </div>

                <div class="form-floating mb-7">
                    <textarea class="form-control" name="project_publication" style="height: 100px">{{$talent->achievement->project_publication??($talent->assproject->project_publication??'')}}</textarea>
                    <label for="supervisor">Publication</label>
                </div>
            </div>
            <div class="col-4">
                <div class="separator separator-dotted separator-content border-dark mb-10"><span class="w-200px fw-bolder">CPD/NSR<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The last 3 years"></i></span></div>
                <div class="mb-10 fv-row row">
                    <div id="kt_docs_repeater_cpdnsr">
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div data-repeater-list="kt_docs_repeater_cpdnsr">
                                @foreach($talent->cpdnsr->take(3) as $cpdnsr)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-3">
                                            {!!  Form::select('cpdnsr_type',['CPD'=>'CPD','NSR'=>'NSR'], $cpdnsr->type, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Type...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-4">
                                            {!!  Form::selectYear('cpdnsr_year', date("Y"), date("Y")-4, $cpdnsr->year, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::hidden('id', $cpdnsr->id)!!} 
                                                {!!  Form::text('cpdnsr_mark', $cpdnsr->mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @if($talent->cpdnsr->count()==0)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-3">
                                            {!!  Form::select('cpdnsr_type',['CPD'=>'CPD','NSR'=>'NSR'], null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Type...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-4">
                                            {!!  Form::selectYear('cpdnsr_year', date("Y"), date("Y")-4, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::hidden('id', '')!!} 
                                                {!!  Form::text('cpdnsr_mark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                <i class="la la-plus"></i>Add
                            </a>
                        </div>
                        <!--end::Form group-->
                    </div>
                    <!--end::Repeater-->

                </div>
                <div class="separator separator-dotted separator-content border-dark mb-10"><span class="w-200px fw-bolder">LNPT <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The last 3 years"></i></span></div>
					
                <div class="mb-10 fv-row row">
                    <div id="kt_docs_repeater_lnpt">
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div data-repeater-list="kt_docs_repeater_lnpt">
                                @foreach($talent->lnpt->take(3) as $lnpt)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-5">
                                            {!!  Form::selectYear('lnpt_year', date("Y"), date("Y")-50, $lnpt->year, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::hidden('id', $lnpt->id)!!} 
                                                {!!  Form::text('lnpt_mark', $lnpt->mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @if($talent->lnpt->count()==0)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-5">
                                            {!!  Form::selectYear('lnpt_year', date("Y"), date("Y")-4, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::hidden('id', '')!!} 
                                                {!!  Form::text('lnpt_mark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                <i class="la la-plus"></i>Add
                            </a>
                        </div>
                        <!--end::Form group-->
                    </div>
                    <!--end::Repeater-->
                </div>
            </div>
            <div class="col-4">
                <table class="table table-rounded table-striped border gy-3 gs-7">
					<thead>
						<tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
							<th class="text-center">#</th>
							<th class="text-center">List of Professional Training</th>
						</tr>
					</thead>
					<tbody>
                        @php $i=0;@endphp
						@foreach($talent->course->where('attendance_id',4) as $training)
                        @php $i++;@endphp
						<tr class=" fst-italic"><td>{{$i}}.</td><td>{{$training->course->title}} <span class="fw-bold text-danger">({{date("Y", strtotime($training->course->start_date))}})</span></td></tr>
						@endforeach

					</tbody>
				</table>
                @php 
                    $subtotal1 = $talent->course->where('attendance_id',4)->count()??'0';
                    if(($talent->superlog2->total??0)<($talent->superlog3->total??0))
                        $tgpcm = $talent->superlog3->total??0;
                    else
                        $tgpcm = $talent->superlog2->total??0;
                    $subtotal1 += $tgpcm; 
                    if(($talent->twer1->mark??0)<($talent->twer2->mark??0))
                        $tgptwer = $talent->twer2->mark??0;
                    else
                        $tgptwer = $talent->twer1->mark??0;
                        $subtotal1 += $tgptwer; 

                @endphp
                <table class="table table-rounded table-striped border gy-3 gs-7">
                    <thead>
						<tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200 bg-light-warning">
							<th class="text-center align-middle" rowspan="2">TRAINING ATTENDANCE<br/>(10 MARKS)</th>
							<th class="text-center" colspan="2">SUPERVISOR ASSESSMENT</th>
							<th class="text-center align-middle" rowspan="2">TOTAL<br/>(60 MARKS)</th>
						</tr>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200 bg-light-warning">
                        <th class="text-center">TGP CM<br/>(25 MARKS)</th>
                        <th class="text-center">TGP TWER<br/>(25 MARKS)</th>
                        </tr>
					</thead>	
                    <tbody>
                        <tr>
                            <td class="text-center">{{$talent->course->where('attendance_id',4)->count()??'0'}}</td>
                            <td class="text-center">{{$tgpcm}}</td>
                            <td class="text-center">{{$tgptwer}}</td>
                            <td class="text-center">{{$subtotal1}}</td>
                        </tr>
                    </tbody>					
                </table>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center mb-20">
            <div class="col-8">
            <button type="button" class="btn btn-primary me-5 save w-150px">Save</button> <a href="{{url('/talentachievement/'.$talent->id.'/generate')}}" target="_blank" class="btn btn-success @if(!$talent->achievement) disabled bg-secondary @endif me-5 w-150px">Generate Doc</a><a href="{{url('/secretariat/talent-profile')}}" class="btn bg-secondary w-150px me-5">Back</a>
        </div>
        </div>
        <div class="row d-flex justify-content-between mt-10">
            <div class="col-6">
                <div class="separator separator-dashed separator-content border-primary mb-10"><span class="w-600px fw-bolder">TGP COMPETENCY DOMAIN DEVELOPMENT CHART<br/>(Supervisor Assessment)</span></div>
            @php $category = []; $super1 = []; $super2 = []; @endphp
            @foreach($domain as $dom)
            @php
                $x = 0;$y = 0;
                $q = [];$cat = []; $sub1 = []; $sub2 = [];
            @endphp
                <div class="fw-bolder my-5 fs-4">{{$dom->name}} </div>
                <div class="row d-flex  align-items-stretch">
                    <div class="col-4">
                        <div class="fw-bolder my-3 fs-7">TGP Competency Subdomain</div>
                        <div class="border rounded p-1 fs-7 fst-italic bg-gray-200">   
                            @foreach($dom->logbook as $label)   
                            @php 
                                $x++; 
                                $q[] = 'q'.$label->id;
                            @endphp  
                            <div class="d-flex"><div class="fw-bold me-2">{{$dom->code.$x}}</div><div class="text-truncate">{{$label->item}}</div></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Pre-TGP</div>
                            @foreach($q as $ques)   
                            @php 
                            $y++; 
                            $cat[] =  $dom->code.$y;
                            $sub1[] = $talent->superlog2->$ques??0; 
                            @endphp
                            <div class="">{{$talent->superlog2->$ques??0}}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Post-TGP</div>
                            @foreach($q as $ques)   
                            @php $sub2[] = $talent->superlog3->$ques??0; @endphp
                            <div class="">{{$talent->superlog3->$ques??0}}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-3">
                        <canvas id="kt_chartjs_super_{{$dom->code}}"  class="w-100 h-100"></canvas>
                        {!!  Form::hidden('image_super_'.$dom->code, null , array('id'=>'image_super_'.$dom->code))!!} 
                    </div>
                </div>
            @php $category[] = $cat; $super1[] = $sub1; $super2[]= $sub2; 
            $labels[0] = date("Y",strtotime($talent->superlog2->created_at??date("Y-m-d")));
            $labels[1] = date("Y",strtotime($talent->superlog3->created_at??date("Y-m-d")));
            @endphp
            @endforeach
            </div>
            <div class="col-6">
                <div class="separator separator-dashed separator-content border-primary mb-10"><span class="w-600px fw-bolder">TGP COMPETENCY DOMAIN DEVELOPMENT CHART<br/>(Self-Assessment)</span></div>
                @php $category = []; $self1 = []; $self2 = []; @endphp
            @foreach($domain as $dom)
            @php
                $x = 0;$y = 0;
                $q = [];$cat = []; $sub1 = []; $sub2 = [];
            @endphp
                <div class="fw-bolder my-5 fs-4">{{$dom->name}} </div>
                <div class="row d-flex  align-items-stretch">
                    <div class="col-4">
                        <div class="fw-bolder my-3 fs-7">TGP Competency Subdomain</div>
                        <div class="border rounded p-1 fs-7 fst-italic bg-gray-200">   
                            @foreach($dom->logbook as $label)   
                            @php 
                                $x++; 
                                $q[] = 'q'.$label->id;
                            @endphp  
                            <div class="d-flex"><div class="fw-bold me-2">{{$dom->code.$x}}</div><div class="text-truncate">{{$label->item}}</div></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Pre-TGP</div>
                            @foreach($q as $ques)   
                            @php 
                                $y++; 
                                $cat[] =  $dom->code.$y;
                                $sub1[] = $talent->selflog2->$ques??0; 
                            @endphp
                            <div class="">{{$talent->selflog2->$ques??0}}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Post-TGP</div>
                            @foreach($q as $ques)   
                            @php $sub2[] = $talent->selflog3->$ques??0; @endphp
                            <div class="">{{$talent->selflog3->$ques??0}}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-3">
                        <canvas id="kt_chartjs_self_{{$dom->code}}"  class="w-100 h-100"></canvas>
                        {!!  Form::hidden('image_self_'.$dom->code, null , array('id'=>'image_self_'.$dom->code))!!} 
                    </div>
                </div>
            @php $category[] = $cat; $self1[] = $sub1; $self2[]= $sub2; 
            $labels[0] = date("Y",strtotime($talent->selflog2->created_at??date("Y-m-d")));
            $labels[1] = date("Y",strtotime($talent->selflog3->created_at??date("Y-m-d")));
            @endphp
            @endforeach
        </div>
        </div>
        
    </div>
</div>

 {!! Form::close()!!}
<x-slot name="scripts3">
<script>"use strict";
var KTAppEcommerceSavelogbook = function() {

	return {
        init: function() {

                var f = KTUtil.getCssVariableValue('--bs-font-sans-serif');
                
                var e, c, d;
                c = () => {

                    @php $i=0 @endphp
                    @foreach($domain as $dom)

                    e = document.getElementById("kt_chartjs_self_{{$dom->code}}");

                    e && new Chart(e, {
                        type: 'radar',
                        data: {
                            labels: <?php echo json_encode($category[$i], JSON_NUMERIC_CHECK)?>,
                            datasets:[{
                            label: "{{$labels[0]}}",
                            data: <?php echo json_encode($self1[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            pointBackgroundColor: 'rgb(255, 99, 132)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(255, 99, 132)'
                        }, {
                            label: "{{$labels[1]}}",
                            data: <?php echo json_encode($self2[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgb(54, 162, 235)',
                            pointBackgroundColor: 'rgb(54, 162, 235)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(54, 162, 235)'
                        }]
                        },
                        options: {
                            plugins: {
                                title: {
                                    display: false,
                                },
                                legend: {
                                    labels: {
                                        // This more specific font property overrides the global property
                                        font: {
                                            size: 10,
                                            family: f
                                        }
                                    },
                                    position: 'bottom'
                                }
                            },
                            responsive: true,
                            scales: {
                                r: {
                                    ticks: {
                                        stepSize: 1,
                                        font: { size: 10 },
                                    },
                                    pointLabels: {
                                    font: { size: 10}
                                },
                                min: 0,
                                max: 5  
                                }
                            }
                        }
                    })//, $("#image_{{$dom->code}}").val(e.toDataURL())
                    @if($dom->id<5)
                        ,
                    @endif
                    @php $i++; @endphp
                    @endforeach
                    };
                d = () => {

                    @php $i=0 @endphp
                    @foreach($domain as $dom)
                    
                    e = document.getElementById("kt_chartjs_super_{{$dom->code}}");
                    
                    e && new Chart(e, {
                        type: 'radar',
                        data: {
                            labels: <?php echo json_encode($category[$i], JSON_NUMERIC_CHECK)?>,
                            datasets:[{
                            label: "{{$labels[0]}}",
                            data: <?php echo json_encode($super1[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            pointBackgroundColor: 'rgb(255, 99, 132)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(255, 99, 132)'
                        }, {
                            label: "{{$labels[1]}}",
                            data: <?php echo json_encode($super2[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgb(54, 162, 235)',
                            pointBackgroundColor: 'rgb(54, 162, 235)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(54, 162, 235)'
                        }]
                        },
                        options: {
                            plugins: {
                                title: {
                                    display: false,
                                },
                                legend: {
                                    labels: {
                                        // This more specific font property overrides the global property
                                        font: {
                                            size: 10,
                                            family: f
                                        }
                                    },
                                    position: 'bottom'
                                }
                            },
                            responsive: true,
                            scales: {
                                r: {
                                    ticks: {
                                        stepSize: 1,
                                        font: { size: 10 },
                                    },
                                    pointLabels: {
                                    font: { size: 10 }
                                },
                                min: 0,
                                max: 5  
                                }
                            }
                        }
                    })//, $("#image_{{$dom->code}}").val(e.toDataURL())
                    @if($dom->id<5)
                        ,
                    @endif
                    @php $i++; @endphp
                    @endforeach
                    };

                    c(), d();
        
	    }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSavelogbook.init()

    $('#kt_docs_repeater_lnpt, #kt_docs_repeater_cpdnsr').repeater({
      initEmpty: false,
      
      show: function () {
          $(this).slideDown();
          $(this).find('[data-kt-repeater="select2"]').select2();
      },

      hide: function (deleteElement) {
          $(this).slideUp(deleteElement);
      },
      ready: function(){}

    });
    $('.save').on('click', function(){
        canvasLoaded();
        $('form').submit();
    });
}));

function canvasLoaded(){
    @foreach($domain as $dom)	
        var target = document.getElementById("kt_chartjs_super_{{$dom->code}}"); // your canvas element
        $("#image_super_{{$dom->code}}").val(target.toDataURL("image/png"));
        var targets = document.getElementById("kt_chartjs_self_{{$dom->code}}"); // your canvas element
        $("#image_self_{{$dom->code}}").val(targets.toDataURL("image/png"));
    @endforeach
}
</script>
</x-slot>
</x-app-layout>