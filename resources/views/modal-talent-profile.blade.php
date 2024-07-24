{!! Form::model($talent->profile,array('route' => ['update.talentprofile',$talent->id], 'method'=>'PATCH', 'novalidate' => 'novalidate')) !!}	
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
							
							<div class="fs-5 text-gray-800 fw-bolder">{{$talent->status->cohort??''}}/{{$talent->status->enrollment??''}}</div>
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
			<div class="col-6">
				
			<div class="form-floating mb-7">
				{!!  Form::text('name', $talent->user->name, array('class'=>'form-control','id'=>'name','placeholder'=>''))!!} 
				<label for="name">Name</label>
			</div>

			<div class="form-floating mb-7">
				{!!  Form::text('talent_code', $talent->talent_code, array('class'=>'form-control','id'=>'talent_code','placeholder'=>''))!!} 
				<label for="talent_code">Talent ID</label>
			</div>

			<!--begin::Input group-->
			<div class="form-floating mb-7">
				{!!  Form::text('designation', $talent->user->designation, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
				<label for="floatingInput">Designation</label>
			</div>
			<!--end::Input group-->
			<div class="fv-row mb-10">
				<!--begin::Row-->
				<div class="row">
					<!--begin::Col-->
					<div class="col-lg-6">
							{!!  Form::select('scheme_id', $schemes, $talent->user->scheme_id, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Schemes...','data-hide-search'=>'true','data-control'=>'select2') )!!} 
					</div>
					<div class="col-lg-6">
							{!!  Form::select('grade_id', $grades, $talent->user->grade_id, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Grade...','data-hide-search'=>'true','data-control'=>'select2') )!!} 
					</div>
					
				</div>
			</div>
			<div class="fv-row mb-10">
			<div class="row">
						<div class="col-lg-12">
							<div class="form-floating">
								{!!  Form::text('organization', $talent->user->organization, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Organisation</label>
							</div>
						</div>
					</div>
			</div>
			</div>
	<div class="col-4 ps-15">
<!--begin::Table container-->
		<h1 class="fw-bolder fs-5 mb-3" id="active-bg-colors">CPD/NSR Point</h1>
			<div class="table-responsive">
				<table class="table table-rounded table-striped border  gy-3 gs-5 ge-5">
					<thead>
						<tr class="fw-bold fs-7 text-gray-800 border-dashed border-bottom border-gray-300">
							<th class="text-center"></th>
							<th class="text-center">Year</th>
							<th class="text-center">Score</th>
						</tr>
						
					</thead>
					<tbody>
						@foreach($talent->cpdnsr as $item)
						<tr>
							<td>{{$item->type}}</td>
							<td class="text-center">{{$item->year}}</td>
							<td class="text-center">{{$item->mark}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<h1 class="fw-bolder  fs-5 mt-5 mb-3" id="active-bg-colors">LNPT</h1>
				<table class="table table-rounded table-striped border gy-3 gs-7">
					<thead>
						<tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
							<th class="text-center">Year</th>
							<th class="text-center">Mark</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($talent->lnpt as $lnpt)
						<tr><td class="text-center" width="50%">{{ $lnpt->year}}</td><td class="text-center">{{$lnpt->mark}}</td></tr>
						@endforeach

					</tbody>
				</table>
			</div>
			<!--end::Table container-->
	</div>
</div>
<div class="d-flex flex-column mb-8">
	<label class="fs-6 fw-bold mb-2">PERSONAL STATEMENT</label>
	{!! Form::textarea('statement', $talent->statement,['class'=>'form-control form-control-solid', 'rows'=>'7']) !!}
</div>
<div class="d-flex flex-column mb-8">
	<label class="fs-6 fw-bold mb-2">PERSONALITY TEST SUMMARY</label>
	<!-- {!! Form::text('personality_flag', null ,['class'=>'form-control form-control-solid mb-1']) !!} -->
	{!! Form::textarea('personality_test',null,['class'=>'form-control form-control-solid', 'rows'=>'5']) !!}
</div>
<div class="d-flex flex-column mb-8">
	<label class="fs-6 fw-bold mb-2">TGP PROJECT - Area of Interest</label>
	<div class="d-flex flex-column ms-5">
	<div class="alert alert-dismissible bg-light-info border border-info border-dashed w-100 p-5 mb-10">
		@foreach($talent->interest as $item)
		<li class="d-flex align-items-center py-2">
		<span class="bullet bg-info me-5"></span><span class="fw-bolder fs-6 text-gray-800">{{$item->area}} @if($item->title!="")- <span class="fs-6 text-gray-600">{{$item->title}}</span></span>  @endif 
		</li>
		@endforeach
	</div>
	</div>
</div>
<div class="d-flex flex-column mb-8">
	<label class="fs-6 fw-bold mb-5">PANELS COMMENT</label>
	{!! Form::textarea('assessor_comment',null,['class'=>'form-control form-control-solid', 'rows'=>'3']) !!}

</div>

<div class="d-flex flex-column mb-8">
	<label class="fs-6 fw-bold mb-5">TGP COMPETENCY ASSESSMENT</label>
	@php
						$ref = []; 
						foreach($talent->reflog as $log){
							$ref[] = $log;
							
						}
						$totalself = ($talent->selflog->l??'0')+($talent->selflog->c??'0')+($talent->selflog->g??'0')+($talent->selflog->p??'0')+($talent->selflog->v??'0');
						$totalref1 = (isset($ref[0])?$ref[0]->l:'0')+(isset($ref[0])?$ref[0]->c:'0')+(isset($ref[0])?$ref[0]->g:'0')+(isset($ref[0])?$ref[0]->p:'0')+(isset($ref[0])?$ref[0]->v:'0');
						$totalref2 = (isset($ref[1])?$ref[1]->l:'0')+(isset($ref[1])?$ref[1]->c:'0')+(isset($ref[1])?$ref[1]->g:'0')+(isset($ref[1])?$ref[1]->p:'0')+(isset($ref[1])?$ref[1]->v:'0');
						@endphp
						<!--begin::Table container-->
						<div class="table-responsive">
						<table class="table table-rounded border gy-3 gs-5 ge-5">
						    <thead>
						        <tr class="fw-bold fs-7 text-gray-800 border-dashed border-bottom border-gray-400">
						            <th rowspan="2" class="text-center"></th>
						            <th colspan="2" class="fw-bolder text-center bg-light-primary">Self Assessment</th>
						            <th colspan="4" class="fw-bolder text-center bg-light-warning">Referee Assessment</th>
						        </tr>
						        <tr class="fw-bold fs-7 text-gray-800 border-bottom border-gray-200">
						            <th class="fw-bolder text-center bg-light-primary">Score</th>
						            <th class="fw-bolder text-center bg-light-primary">Level</th>
						            <th class="fw-bolder text-center bg-light-warning">Average Score</th>
						            <th class="fw-bolder text-center bg-light-warning">Level</th>
						        </tr>
						    </thead>
						    <tbody>
							<tr class="border-dashed border-bottom border-gray-300">
								<td class="fw-bold">Leadership</td>
								<td class="text-center bg-light-primary">{{$talent->selflog->l_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($talent->selflog->l_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->l_percent+$ref[1]->l_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->l_percent+$ref[1]->l_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
							<td class="fw-bold">Interpersonal Relationship</td>
								<td class="text-center bg-light-primary">{{$talent->selflog->c_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($talent->selflog->c_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->c_percent+$ref[1]->c_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->c_percent+$ref[1]->c_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
								<td class="fw-bold">Organizational Governance</td>
								<td class="text-center bg-light-primary">{{$talent->selflog->g_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($talent->selflog->g_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->g_percent+$ref[1]->g_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->g_percent+$ref[1]->g_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
							<td class="fw-bold">Professional Values</td>
								<td class="text-center bg-light-primary">{{$talent->selflog->p_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($talent->selflog->p_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->p_percent+$ref[1]->p_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->p_percent+$ref[1]->p_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
							<td class="fw-bold">Personal Values</td>
								<td class="text-center bg-light-primary">{{$talent->selflog->v_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($talent->selflog->v_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->v_percent+$ref[1]->v_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->v_percent+$ref[1]->v_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="fw-bold fs-5 text-gray-900 border-dashed border-bottom border-gray-300 bg-light-dark">
						            <th class="fw-bold">Overall</th>
						            <th class="text-center bg-light-primary">{{number_format($totalself,1)}}</th>
						            <th class="text-center bg-light-primary">{{getLevel($talent->selflog->total??0)}}</th>
						            <th class="text-center bg-light-warning">{{number_format(($totalref1+$totalref2)/2,1)}}</th>
						            <th class="text-center bg-light-warning">{{getLevel(($totalref1+$totalref2)/2)}}</th>
						        </tr>
								
						    </tbody>
						</table>
					</div>

</div>
<div class="d-flex flex-column mb-8">
	<label class="fs-6 fw-bold mb-5">ASSESSMENT SUMMARY</label>
	<div class="d-flex flex-row row">
	@php
		$code = ["","L","C","G","P","V"];
	@endphp
	@foreach($domain as $dom)
	@php
		$att = $code[$dom->id]."_percent";
	@endphp
	{!!  Form::hidden('image_'.$code[$dom->id], null , array('id'=>'image_'.$code[$dom->id]))!!} 

			<div class="col-6">
				<span class="fw-bolder text-uppercase">{{$dom->name}}</span>
				<div class="m-10">
				<!-- <div id="kt_apexcharts_{{$code[$dom->id]}}" style="height: 350px;"></div> -->
				<div id="canvas-holder" style="width:100%" class="text-center">
					<canvas id="chart_{{$code[$dom->id]}}"></canvas>
					<div id="preview_{{$code[$dom->id]}}" class="fw-bolder"></div>
				</div>
				</div>
			</div>
			<div class="col-6">
				<div class="fw-bolder">AREA FOR IMPROVEMENT (SUBDOMAIN BELOW LEVEL 1 & 2)</div> <div class="text-small mb-5">(based on referees’ assessment*)</div>
				<div class="mb-15">
					@if(getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->$att+$ref[1]->$att)/2,1,'.'):0.0)<3)
						{!!$dom->improvement->pluck('item')->implode('<br/>')!!}
					@else
					-
					@endif
				</div>
			</div>
	@endforeach

</div>
</div>
<div class="d-flex flex-column mb-8">
	<button type="submit" class="btn btn-primary">SUBMIT</button>
</div>

 {!! Form::close()!!}
 <script src="{{url('assets')}}/js/gauge.js"></script>
 
  <script>
var opts = {
	staticLabels: {
      font: "10px sans-serif",
      labels: [0, 25, 50, 75, 100],
      fractionDigits: 0
    },
	staticZones: [
      {strokeStyle: "red", min: 0, max: 25},
      {strokeStyle: "orange", min: 25, max: 50},
      {strokeStyle: "yellow", min: 50, max: 75},
      {strokeStyle: "green", min: 75, max: 100}
    ],
  angle: 0, // The span of the gauge arc
  lineWidth: 0.35, // The line thickness
  radiusScale: 1, // Relative radius
  pointer: {
    length: 0.6, // // Relative to gauge radius
    strokeWidth: 0.035, // The thickness
    color: '#000000' // Fill color
  },
  limitMax: false,     // If false, max value increases automatically if value > maxValue
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
  
};

@foreach($domain as $dom)	
@php
	$att = $code[$dom->id];
	$attp = $att."_percent";
@endphp
var target = document.getElementById("chart_{{$att}}"); // your canvas element
var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
gauge.maxValue = 100; // set max gauge value
gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge.animationSpeed = 32; // set animation speed (32 is default value)
gauge.set({{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->$attp+$ref[1]->$attp)/2,1,'.'):0.0}});
$("#preview_{{$att}}").html("{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->$attp+$ref[1]->$attp)/2,1,'.'):0.0}}%");
// gauge.setTextField(document.getElementById("preview_{{$att}}"));
$("#image_{{$att}}").val(target.toDataURL());
@endforeach
</script>