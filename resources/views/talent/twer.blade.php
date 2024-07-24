<x-app-layout>
<x-slot name="header">
	TWER
</x-slot>

<div class="card">
	<div class="card-header align-items-center border-0 mt-4">
		<h3 class="card-title align-items-start flex-column">
			<span class="fw-bolder mb-2 text-dark">TALENT WORKPLACE EXPERIENCE REPORT (TWER)</span>
			<!-- <span class="text-muted fw-bold fs-7">890,344 Sales</span> -->
		</h3>
		
	</div>
	<!--begin::Card body-->
	<div class="card-body">
		<!--begin::Layout-->
			<div class="d-flex flex-column flex-xl-row">
				<!--begin::Content-->
				<div class="flex-lg-row-fluid me-lg-10">
					<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">

		@php 
		$disabled = (!$edit)? 'disabled':'';
		$audit = $twer->audits;
		if($twer->status_id ==1 && $twer->open_id ==1){
			$disabled = '';
			$edit = true;
		}
		@endphp
		{!! Form::model($twer, array('route' => ['add.talenttwer'], 'method'=>'POST', 'id'=>'kt_new_target_form','files'=>'true')) !!}	 

    	<input type="hidden" name="series" value="{{$series}}">
    	<input type="hidden" name="status_id" value="">
		<div class="fv-row mb-5">
			<!-- <label class="required form-label">Title</label> -->
			<!--begin::Input group-->
			<div class="form-floating">
			{!!  Form::text('title', null, array('class'=>'form-control maxlength-50','placeholder'=>'', $disabled))!!} 
			<label for="statement" class="required">Title</label>
			</div>
			<!--end::Input group-->
			<div class="text-muted fs-7">What change or improvement are you talking about? </div>
			@if(count(array_filter($audit->pluck('old_values.title')->toArray()))>0)
			<!--begin::Accordion-->
			<div class="accordion accordion-icon-toggle" id="kt_accordion_title">
			    <!--begin::Item-->
			    <div class="">
			        <!--begin::Header-->
			        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_title_item">
			            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
						</svg>
					</span></span>
			            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
			        </div>
			        <!--end::Header-->

			        <!--begin::Body-->
			        <div id="kt_accordion_title_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_title">
			            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.title')->toArray()))!!}
			        </div>
			        <!--end::Body-->
			    </div>
			    <!--end::Item-->
			</div>
			<!--end::Accordion-->
			@endif
		</div>
		
		<div class="separator separator-content border-primary border-3 my-10"><span class="w-100px fw-bolder">Plan</span></div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
					<!-- <label class="required form-label">Background</label> -->
					<div class="form-floating">
					{!!  Form::textarea('background', null, array('class'=>'form-control maxlength-100','style'=>'height: 120px','placeholder'=>'',$disabled))!!} 
					<label for="statement" class="required">Background</label>
					</div>
					@if(count(array_filter($audit->pluck('old_values.background')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_background">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_background_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_background_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_background">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.background')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
					<li class="d-flex align-items-center py-1 text-gray-600">
				      	<span class="bullet me-3 bg-warning bullet-vertical"></span> What is the purpose for choosing this issue?
				  	</li>
				  	<li class="d-flex align-items-center py-1 text-gray-600">
				      	<span class="bullet me-3 bg-warning bullet-vertical"></span> What specific performance measure need to be improved?
				  	</li>
				  	<li class="d-flex align-items-center py-1 text-gray-600">
				      	<span class="bullet me-3 bg-warning bullet-vertical"></span> What is the context of the situation for full understanding?
				  	</li>
				  	<li class="d-flex align-items-center py-1 text-gray-600">
				      	<span class="bullet me-3 bg-warning bullet-vertical"></span> Importance of the problem
				  	</li>
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6"><!-- <label class="required form-label">Problem Statement and Effect of the problem</label> -->
				<div class="form-floating">
					{!!  Form::textarea('problem', null, array('class'=>'form-control maxlength-100','style'=>'height: 80px','placeholder'=>'',$disabled))!!} 
					<label for="statement" class="required">Problem Statement and Effect of the problem</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.problem')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_problem">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_problem_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_problem_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_problem">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.problem')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
					<!-- <label class="required form-label">Current Situation : Where do things stand now?</label> -->
					{!!  Form::textarea('situation', null, array('class'=>'form-control maxlength-100','style'=>'height: 170px','placeholder'=>'',$disabled))!!} 
					<label for="statement" class="required">Current Situation : Where do things stand now?</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.situation')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_situation">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_situation_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_situation_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_situation">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.situation')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span> What is the problem - gap in performance 
					</li>
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span> Show facts and processes visually using charts, graphs, VSM, etc.
					</li>
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span> Break the problem into different parts.
				  	</li>
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="mb-3">
						<!-- <label for="cpd_complete" class="form-label">Upload File</label> -->
						<input class="form-control" name="situation_file" type="file">
					</div>
				</div>
				<div class="col-lg-6">
					@if($twer->situation_file!="")
					<a href="{{url('twer').'/'.$twer->situation_file}}"  target="_blank" class="btn btn-primary btn-sm"><span class="svg-icon svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
</svg></span>Attachment</a>
@if($edit)
<a href="{{url('remove/twerfile/situation_file').'/'.$twer->id}}" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
					<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
					<span class="svg-icon svg-icon-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
							<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
							<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
						</svg>
					</span>
					<!--end::Svg Icon-->
				</a>
@endif
@endif
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
					<!-- <label class="required form-label">Target State : What specific outcome is required?</label> -->
					{!!  Form::textarea('target', null, array('class'=>'form-control maxlength-200','style'=>'height: 170px','placeholder'=>'',$disabled))!!} 
					<label for="statement" class="required">Target State : What specific outcome is required?</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.target')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_target">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_target_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_target_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_target">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.target')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>What specific improvement(s) in performance do you need to achieve?
             			<br/>- show visually how much , by when and  with what impact
         			</li>
						<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>Measurable targets (quantity, time)
				</li>
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="mb-3">
						<!-- <label for="cpd_complete" class="form-label">Upload File</label> -->
						<input class="form-control" name="target_file" type="file">
					</div>
				</div>
				<div class="col-lg-6">
					@if($twer->target_file!="")
					<a href="{{url('twer').'/'.$twer->target_file}}"  target="_blank" class="btn btn-primary btn-sm"><span class="svg-icon svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
</svg></span>Attachment</a>
@if($edit)
<a href="{{url('remove/twerfile/target_file').'/'.$twer->id}}" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
					<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
					<span class="svg-icon svg-icon-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
							<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
							<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
						</svg>
					</span>
					<!--end::Svg Icon-->
				</a>
@endif
@endif
				</div>
			</div>
		</div>
		
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
					<!-- <label class="required form-label">Gap Analysis : Why does the problem exists?</label> -->
					{!!  Form::textarea('gap', null, array('class'=>'form-control maxlength-200','style'=>'height: 170px','placeholder'=>'',$disabled))!!} 
					<label for="statement" class="required">Gap Analysis : Why does the problem exist?</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.gap')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_gap">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_gap_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_gap_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_gap">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.gap')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>What condition are preventing you from achieving the goals?
					</li>
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>Why do they exist? What are their cause(s)?
            			<br/>- use the simplest problem analysis tool to show the cause and effect   down to root cause. (5 Why; Fishbone, Pareto chart etc.)
            		</li>

				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="mb-3">
						<!-- <label for="cpd_complete" class="form-label">Upload File</label> -->
						<input class="form-control" name="gap_file" type="file">
					</div>
				</div>
				<div class="col-lg-6">
					@if($twer->gap_file!="")
					<a href="{{url('twer').'/'.$twer->gap_file}}"  target="_blank" class="btn btn-primary btn-sm"><span class="svg-icon svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
</svg></span>Attachment</a>
@if($edit)
<a href="{{url('remove/twerfile/gap_file').'/'.$twer->id}}" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
					<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
					<span class="svg-icon svg-icon-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
							<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
							<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
						</svg>
					</span>
					<!--end::Svg Icon-->
				</a>
@endif
@endif
				</div>
			</div>
		</div>
		
		<div class="separator separator-content border-primary border-3 my-10"><span class="w-200px fw-bolder">Do, Check, Act</span></div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
					<!-- <label class="required form-label">Stratergies Needed / Countermeasures</label> -->
					{!!  Form::textarea('stratergies', null, array('class'=>'form-control maxlength-200','style'=>'height: 170px','placeholder'=>'',$disabled))!!}
					<label for="statement" class="required">Strategies Needed / Counter measures</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.stragtergies')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_stragtergies">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_stragtergies_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_stragtergies_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_stragtergies">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.stragtergies')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>What options for addressing the gaps and improving performance in the current situation?
					</li>
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>Show how your proposed actions will address the specific causes of the gaps or constraints you identified in your analysis. The link should be clear and explicit
					</li>
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
			<!-- <label class="required form-label">Action Plan : How Implement? (4 W's, 1 H)</label> -->
					{!!  Form::textarea('plan', null, array('class'=>'form-control maxlength-200','style'=>'height: 170px','placeholder'=>'',$disabled))!!} 
					<label for="statement" class="required">Action Plan : How to Implement? (What, Who, Why, Where & How)</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.plan')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_plan">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_plan_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_plan_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_plan">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.plan')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>Use Gantt chart (or similar diagram) to display actions, steps, outcomes, timeliness and roles
					</li>
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="mb-3">
						<!-- <label for="cpd_complete" class="form-label">Upload File</label> -->
						<input class="form-control" name="plan_file" type="file">
					</div>
				
				</div><div class="col-lg-6">
					@if($twer->plan_file!="")
					<a href="{{url('twer').'/'.$twer->plan_file}}"  target="_blank" class="btn btn-primary btn-sm"><span class="svg-icon svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
</svg></span>Attachment</a>
@if($edit)
<a href="{{url('remove/twerfile/plan_file').'/'.$twer->id}}" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
					<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
					<span class="svg-icon svg-icon-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
							<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
							<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
						</svg>
					</span>
					<!--end::Svg Icon-->
				</a>
@endif
@endif
				</div>
			</div>
		</div>
		
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
			<!-- <label class="required form-label">Effect Confirmation</label> -->
					{!!  Form::textarea('effect', null, array('class'=>'form-control maxlength-100','style'=>'height: 100px','placeholder'=>'',$disabled))!!} 
					<label for="statement" class="required">Effect Confirmation</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.effect')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_effect">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_effect_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_effect_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_effect">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.effect')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>What measurable results did the solution achieve? (or will be measured to verify effectiveness)?
					</li>
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>Who’s responsible for ongoing measurement?
					</li>
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
				<!-- <label class="required form-label">Follow up. How will you ensure on-going PDCA?</label> -->
					{!!  Form::textarea('followup', null, array('class'=>'form-control maxlength-100','style'=>'height: 100px','placeholder'=>'',$disabled))!!}
					<label for="statement" class="required">Follow up. How will you ensure on-going PDCA?</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.followup')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_followup">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_followup_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_followup_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_followup">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.followup')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6"> 
					<li class="d-flex align-items-center py-1 text-gray-600">
						<span class="bullet me-3 bg-warning bullet-vertical"></span>What processes will you use to enable, assure and sustain success? 
					</li>
				</div>
			</div>
		</div>
		<div class="separator separator-content border-primary border-3 my-10"><span class="w-100px fw-bolder">Insights</span></div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-12">
				<div class="form-floating">
				<!-- <label class="required form-label">Follow up. How will you ensure on-going PDCA?</label> -->
					{!!  Form::textarea('spread', null, array('class'=>'form-control maxlength-100','style'=>'height: 80px','placeholder'=>'',$disabled))!!}
					<label for="statement" class="required">Action for Spread</label>
				</div>
				<div class="text-muted fs-7">How will you share your learning with others? </div>
				@if(count(array_filter($audit->pluck('old_values.spread')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_spread">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_spread_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_spread_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_spread">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.spread')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
				<!-- <label class="required form-label">Follow up. How will you ensure on-going PDCA?</label> -->
					{!!  Form::textarea('well', null, array('class'=>'form-control maxlength-100','style'=>'height: 100px','placeholder'=>'',$disabled))!!}
					<label for="statement" class="required">What went well</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.well')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_well">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_well_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_well_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_well">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.well')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
				<div class="form-floating">
				<!-- <label class="required form-label">Follow up. How will you ensure on-going PDCA?</label> -->
					{!!  Form::textarea('notwell', null, array('class'=>'form-control maxlength-100','style'=>'height: 100px','placeholder'=>'',$disabled))!!}
					<label for="statement" class="required">What did not go well</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.notwell')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_notwell">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_notwell_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_notwell_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_notwell">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.notwell')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
			</div>
		</div>
		<div class="fv-row mb-5">
			<div class="row">
				<div class="col-6">
				<div class="form-floating">
				<!-- <label class="required form-label">Follow up. How will you ensure on-going PDCA?</label> -->
					{!!  Form::textarea('helped', null, array('class'=>'form-control maxlength-100','style'=>'height: 100px','placeholder'=>'',$disabled))!!}
					<label for="statement" class="required">What helped</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.helped')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_helped">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_helped_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_helped_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_helped">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.helped')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
				<div class="col-6">
				<div class="form-floating">
				<!-- <label class="required form-label">Follow up. How will you ensure on-going PDCA?</label> -->
					{!!  Form::textarea('hindered', null, array('class'=>'form-control maxlength-100','style'=>'height: 100px','placeholder'=>'',$disabled))!!}
					<label for="statement" class="required">What hindered</label>
				</div>
				@if(count(array_filter($audit->pluck('old_values.hindered')->toArray()))>0)
					<!--begin::Accordion-->
					<div class="accordion accordion-icon-toggle" id="kt_accordion_hindered">
					    <!--begin::Item-->
					    <div class="">
					        <!--begin::Header-->
					        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_hindered_item">
					            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
									<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
								</svg>
							</span></span>
					            <div class="fs-7 text-gray-500 mb-0 ms-4">History</div>
					        </div>
					        <!--end::Header-->

					        <!--begin::Body-->
					        <div id="kt_accordion_hindered_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_hindered">
					            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.hindered')->toArray()))!!}
					        </div>
					        <!--end::Body-->
					    </div>
					    <!--end::Item-->
					</div>
					<!--end::Accordion-->
					@endif
				</div>
			</div>
		</div>
		@if($edit)
		<div class="d-flex flex-column m-5 fv-row rounded-3 p-7 border border-dashed border-gray-500 bg-light-primary">
                                                    <!--begin::Label-->
		    <div class="fs-5 fw-bolder form-label mb-3">Send notification?
		    <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Click on checkbox below to send email notification to your supervisor."></i></div>
		    <!--end::Label-->
		    <!--begin::Checkbox-->
		    <label class="form-check form-check-custom form-check-solid">
		        <input class="form-check-input bg-dark" type="checkbox" value="1" name="notify">
		        <span class="form-check-label text-gray-600">Inform your supervisor about your updates. </span>
		    </label>

		    
		    <!--end::Checkbox-->
		</div>

		<div class="text-center">
		<button type="submit" id="kt_modal_new_target_submit_draf" class="btn btn-warning me-5">
			<span class="indicator-label">Save Draft</span>
			<span class="indicator-progress">Please wait...
			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
		</button>
		<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
			<span class="indicator-label">Submit</span>
			<span class="indicator-progress">Please wait...
			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
		</button>
        </div>
        @endif
        {!! Form::close() !!} 

        </div>
	<!--end::Content-->
				</div>
				<!--end::Content-->
				<!--begin::Sidebar-->
				@if($twer->comment->count()>0)
				<div class="flex-column flex-lg-row-auto w-100 w-350px mb-10">
					<div class="card card-flush bg-light-success mb-0 table-responsive" data-kt-sticky="true" data-kt-sticky-name="docs-sticky-summary"  data-kt-sticky-offset="{default: false, lg: '350px'}" data-kt-sticky-width="{lg: '350px', xl: '350px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95" style="">
						<div class="card-body fs-6 pe-3">
							<h3 class="fs-7 text-gray-500 mb-0">Comment History</h3>
							<div class="scroll mh-450px">
								<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 g-3">
								<tbody class="fw-bold fs-7">
									@foreach($twer->comment as $c)
									<tr>
										<td>
											{{$c->comment}}<br/>
											<span class="text-muted fs-8">{{$c->created_at}}</span>
										</td>
									</tr>
									@endforeach
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				@endif
			</div>
	</div>
	<!--end::Card body-->
</div>


<x-slot name="scripts">
<script>
"use strict";
var KTAppEcommerceSaveProduct = function() {

	return {
        init: function() {
        	(() => {
                let e;
                const t = document.getElementById("kt_new_target_form"),
                    o = document.getElementById("kt_modal_new_target_submit"),
                    s = document.querySelector("[name='status_id']"),
                    d = document.getElementById("kt_modal_new_target_submit_draf");
                e = FormValidation.formValidation(t, {
                    fields: {
                        title: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        background: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        problem: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        situation: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        target: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        gap: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        stratergies: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        plan: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        effect: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        followup: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        spread: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        well: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        notwell: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        helped: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        hindered: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }), o.addEventListener("click", (a => {
                    a.preventDefault(), e && e.validate().then((function(e) {
                        console.log("validated!"), "Valid" == e ? (o.setAttribute("data-kt-indicator", "on"), o.disabled = !0, 
                        	s.value = 1, t.submit()) : Swal.fire({
                            html: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                })),
                d.addEventListener("click", (a => {
                    a.preventDefault(), d.setAttribute("data-kt-indicator", "on"), o.disabled = !0, t.submit()
                }))
            })()
		}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSaveProduct.init()	
	// $('.maxlength').maxlength({
	//     warningClass: "badge badge-success",
	//     limitReachedClass: "badge badge-warning"
	// });
	$('.maxlength-50').textcounter({
        type                     : "word",            // "character" or "word"
        min                      : 0,                      // minimum number of characters/words
        max                      : 50,                    // maximum number of characters/words, -1 for unlimited, 'auto' to use maxlength attribute
        countContainerElement    : "div",                  // HTML element to wrap the text count in
        countContainerClass      : "text-count-wrapper",   // class applied to the countContainerElement
        inputErrorClass          : "error",                // error class appended to the input element if error occurs
        counterErrorClass        : "error",                // error class appended to the countContainerElement if error occurs
        counterText              : "Total Count: %d",        // counter text
        errorTextElement         : "div",                  // error text element
        minimumErrorText         : "Minimum not met",      // error message for minimum not met,
        maximumErrorText         : "Maximum exceeded",     // error message for maximum range exceeded,
        displayErrorText         : true,                   // display error text messages for minimum/maximum values
        stopInputAtMaximum       : true,                   // stop further text input if maximum reached
        countSpaces              : false,                  // count spaces as character (only for "character" type)
        countDown                : true,                  // if the counter should deduct from maximum characters/words rather than counting up
        countDownText            : "Remaining word(s): %d"
    });
	$('.maxlength-100').textcounter({
        type                     : "word",            // "character" or "word"
        min                      : 0,                      // minimum number of characters/words
        max                      : 100,                    // maximum number of characters/words, -1 for unlimited, 'auto' to use maxlength attribute
        countContainerElement    : "div",                  // HTML element to wrap the text count in
        countContainerClass      : "text-count-wrapper",   // class applied to the countContainerElement
        inputErrorClass          : "error",                // error class appended to the input element if error occurs
        counterErrorClass        : "error",                // error class appended to the countContainerElement if error occurs
        counterText              : "Total Count: %d",        // counter text
        errorTextElement         : "div",                  // error text element
        minimumErrorText         : "Minimum not met",      // error message for minimum not met,
        maximumErrorText         : "Maximum exceeded",     // error message for maximum range exceeded,
        displayErrorText         : true,                   // display error text messages for minimum/maximum values
        stopInputAtMaximum       : true,                   // stop further text input if maximum reached
        countSpaces              : false,                  // count spaces as character (only for "character" type)
        countDown                : true,                  // if the counter should deduct from maximum characters/words rather than counting up
        countDownText            : "Remaining word(s): %d"
    });
	$('.maxlength-200').textcounter({
        type                     : "word",            // "character" or "word"
        min                      : 0,                      // minimum number of characters/words
        max                      : 200,                    // maximum number of characters/words, -1 for unlimited, 'auto' to use maxlength attribute
        countContainerElement    : "div",                  // HTML element to wrap the text count in
        countContainerClass      : "text-count-wrapper",   // class applied to the countContainerElement
        inputErrorClass          : "error",                // error class appended to the input element if error occurs
        counterErrorClass        : "error",                // error class appended to the countContainerElement if error occurs
        counterText              : "Total Count: %d",        // counter text
        errorTextElement         : "div",                  // error text element
        minimumErrorText         : "Minimum not met",      // error message for minimum not met,
        maximumErrorText         : "Maximum exceeded",     // error message for maximum range exceeded,
        displayErrorText         : true,                   // display error text messages for minimum/maximum values
        stopInputAtMaximum       : true,                   // stop further text input if maximum reached
        countSpaces              : false,                  // count spaces as character (only for "character" type)
        countDown                : true,                  // if the counter should deduct from maximum characters/words rather than counting up
        countDownText            : "Remaining word(s): %d"
    });
}));

</script>
</x-slot>
</x-app-layout>