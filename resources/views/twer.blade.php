
<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack pt-10 pb-8">
	<!--begin::Heading-->
	<h3 class="fw-bolder my-2">TALENT WORKPLACE EXPERIENCE REPORT 
	<span class="fs-6 text-gray-400 fw-bold ms-1">(TWER)</span></h3>
	<!--end::Heading-->
	<!--begin::Controls-->
	<div class="d-flex flex-wrap my-1">
		<!--begin::Tab nav-->
		<ul class="nav nav-pills me-5">
			<li class="nav-item m-0">
				<a class="btn btn-sm btn-light btn-color-muted btn-active-primary active me-3" data-bs-toggle="tab" href="#kt_twer1_pane">
					1st Year
				</a>
			</li>
			<li class="nav-item m-0">
				<a class="btn btn-sm btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_twer2_pane">
					2nd Year
				</a>
			</li>
		</ul>
		<!--end::Tab nav-->
		<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
			<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
						<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
						<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
						<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</button>
		<!--begin::Menu 1-->
		<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
			<!--begin::Header-->
			<div class="px-7 py-5">
				<div class="fs-5 text-dark fw-bolder">Actions</div>
			</div>
			<!--end::Header-->
			<!--begin::Menu separator-->
			<div class="separator border-gray-200"></div>
			<!--end::Menu separator-->
			{!! Form::open(array('route' => ['reset.talenttwer'], 'method'=>'GET')) !!}
			<input type="hidden" name="talent_id" value="{{$talent->id}}">
			<!--begin::Form-->
			<div class="px-7 py-5">
				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Input-->
					<div>
						<select name="series" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option"  data-allow-clear="true">
							<option></option>
							<option value="1">1st Year</option>
							<option value="2">2nd Year</option>
						</select>
					</div>
					<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Actions-->
				<div class="d-flex justify-content-end">
					<!-- <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button> -->
					<button type="submit" class="btn btn-sm btn-primary">Reset</button>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Form-->
			{!! Form::close() !!}
		</div>
		<!--end::Menu 1-->
	</div>
	<!--end::Controls-->
</div>
<!--end::Toolbar-->

@php
if($talent->twer1){
	$audit = $talent->twer1->audits;
}else{ 
	$audit = collect();
}
if($talent->twer2){
	$audit2 = $talent->twer2->audits;
}else{ 
	$audit2 = collect();
}
@endphp


<!--begin::Tab Content-->
<div class="tab-content">
	<!--begin::Tab pane-->
	<div id="kt_twer1_pane" class="tab-pane fade show active">
	<div class="card card-docs mb-2">
	<!--begin::Card Body-->
	<div class="card-body fs-6 text-gray-700">
		<!--begin::Layout-->
		<div class="d-flex flex-column flex-xl-row">
			<!--begin::Content-->
			<div class="flex-lg-row-fluid me-lg-10">
				<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
					<div class="fv-row mb-10">
						<label class="required form-label">Title</label>
						<!--begin::Input group-->
						<div class="text-muted fs-7">What change or improvement are you talking about? </div>
						<div class="text-primary mt-3">
							{{$talent->twer1->title??''}}
						</div>
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
							<label class="required form-label">Background</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->background??'')!!}
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
							<label class="required form-label">Problem Statement and Effect of the problem</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->problem??'')!!}
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Current Situation : Where do things stand now?</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->situation??'')!!}
								@if($talent->twer1 && $talent->twer1->situation_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer1->situation_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
							</div>
							@if(count(array_filter($audit->pluck('old_values.situation')->toArray()))>0)
							<!--begin::Accordion-->
							<div class="accordion accordion-icon-toggle" id="kt_accordion_situation">
							    <!--begin::Item-->
							    <div class="mb-5">
							        <!--begin::Header-->
							        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_situation_item">
							            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
										</svg>
									</span></span>
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Target State : What specific outcome is required?</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->target??'')!!}
								@if($talent->twer1 && $talent->twer1->target_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer1->target_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Gap Analysis : Why does the problem exist?</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->gap??'')!!}
								@if($talent->twer1 && $talent->twer1->gap_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer1->gap_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				
				<div class="separator separator-content border-primary border-3 my-10"><span class="w-200px fw-bolder">Do, Check, Act</span></div>
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Strategies Needed / Counter measures</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->stratergies??'')!!}
							</div>
							@if(count(array_filter($audit->pluck('old_values.stratergies')->toArray()))>0)
							<!--begin::Accordion-->
							<div class="accordion accordion-icon-toggle" id="kt_accordion_stratergies">
							    <!--begin::Item-->
							    <div class="">
							        <!--begin::Header-->
							        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_stratergies_item">
							            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
										</svg>
									</span></span>
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
							        </div>
							        <!--end::Header-->

							        <!--begin::Body-->
							        <div id="kt_accordion_stratergies_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_stratergies">
							            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.stratergies')->toArray()))!!}
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Action Plan : How to implement? (What, Who, Why, Where & How)</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->plan??'')!!}
								@if($talent->twer1 && $talent->twer1->plan_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer1->plan_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
	
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
					<label class="required form-label">Effect Confirmation</label>
						<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->effect??'')!!}
							</div>
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Follow up. How will you ensure on-going PDCA?</label>
						<div class="text-primary mt-3">
								{!!nl2br($talent->twer1->followup??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-12">
						<label class="required form-label">Action for Spread</label>
						<div class="text-muted fs-7">How will you share your learning with others? </div>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer1->spread??'')!!}
						</div>
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label for="statement" class="form-label required">What went well</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer1->well??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
						<label for="statement" class="form-label required">What did not go well</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer1->notwell??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label for="statement" class="form-label required">What helped</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer1->helped??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
						<label for="statement" class="form-label required">What hindered</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer1->hindered??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
			@if(Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0)
			{!! Form::model($talent->twer1??'null', array('route' => ['mark.twer'], 'method'=>'POST', 'id' => 'kt_add_mark_form')) !!}
    		<input type="hidden" name="id" value="{{$talent->twer1->id??'null'}}">
    		<input type="hidden" name="mark" class="mark1" value="">
			<div class="fv-row mb-10">
				<div class="d-flex flex-column rounded-3 p-7 border border-dashed border-gray-400 bg-light-warning">
					<div class="fs-5 fw-bolder form-label mb-3">Assessment at end of programme (Year 1)<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Drag the slider to assign grade to your Talent"></i></div>

					<!-- <div class="separator separator-dashed mb-7"></div> -->
						<div id="kt_slider_basic" class="mt-3 me-6"></div>
						<div class="pt-5">
							<div class="fw-bolder text-gray-700 mb-2"><span id="kt_slider_basic_min"></span></div>
						</div>
						<!-- <div class="form-floating">
						    <input type="text" class="form-control"  name="mark" id="floatingInput" value="{{$talent->twer1->mark??''}}" />
						    <label for="floatingInput">Mark</label>
						</div> -->
						@if(!is_null($talent->twer1->mark??null))
						<div class="form-floating" style="height:100px;top:-100px;z-index:1;margin-bottom:-100px"></div>
						@endif
						<div class="d-flex justify-content-end">
					<!--begin::Button-->
					<button type="submit" id="kt_add_mark_submit" class="btn btn-sm  @if(!$talent->twer1 || !is_null($talent->twer1->mark)) btn-secondary disabled @else btn-primary @endif">
						<span class="indicator-label">@if(!is_null($talent->twer1->mark??null)) Submitted @else Submit @endif</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Button-->
				</div>	
				</div>
			</div>
			{!! Form::close() !!}
			@endif
		</div>
	<!--end::Content-->
	</div>
	<!--end::Content-->
	<!--begin::Sidebar-->
	<div class="flex-column flex-lg-row-auto w-100 w-350px mb-10">
		<!--begin::Card-->
		<div class="card card-flush bg-light-success mb-0 table-responsive">
			<!--begin::Card body-->
			@if(Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0)
			{!! Form::model($talent->twer1??'null', array('route' => ['assesst.twer'], 'method'=>'POST', 'id' => 'kt_add_twer_form')) !!}
    		<input type="hidden" name="id" value="{{$talent->twer1->id??'null'}}">
			<div class="card-body fs-6 pe-3">
				<div class="scroll" id="twerContent">
					<h3 class="f-6 mb-3">Checklist</h3>
					<div class="text-muted fs-7 mb-2">Highly recommended for direct/face to face discussion.</div>
					<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 fs-6 g-3">
					<thead>
						<tr class="fw-bolder text-gray-700">
							<th>CM</th>
							<th>Discussed</th>
						</tr>
					</thead>
					<!--begin::Table body-->
					<tbody class="fw-bold fs-7">
						<!--begin::Table row-->
						@foreach($logcategory as $cat)
						<tr>
							<td class="">{{$cat->name}}</td>
							<td>
								<!--begin::Checkbox-->
								<label class="form-check form-check-sm form-check-custom justify-content-end">
									<input class="form-check-input"  type="checkbox" value="{{$cat->id}}" @if(in_array($cat->id,explode(",",$talent->twer1->checklist??''))) checked @endif name="checklist[]">
								</label>
								<!--end::Checkbox-->
							</td>
						</tr>
						@endforeach
					</tbody>
					<!--end::Table body-->
					</table>


					
					<div class="fv-row mb-5">
						<div class="form-floating">
						    <textarea class="form-control"  name="comment"  style="height: 100px"></textarea>
						    <label for="floatingTextarea">Comments</label>
						</div>
					</div>
					<div class="fv-row mb-5">
		                                                    <!--begin::Label-->
						<div class="fs-5 fw-bolder form-label mb-3">Send notification?
						<i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Click on checkbox below to send email notification to your Talent."></i></div>
						<!--end::Label-->
						<!--begin::Checkbox-->
						<label class="form-check form-check-custom form-check-solid">
						   <input class="form-check-input bg-dark" type="checkbox" value="1" name="notify">
						   <span class="form-check-label">Inform your Talent about your comment. </span>
						</label>

					    
					    <!--end::Checkbox-->
					</div>
					<div class="d-flex justify-content-end">
						<!--begin::Button-->
						<button type="submit" id="kt_add_twer_submit" class="btn btn-sm btn-primary @if(!$talent->twer1) disabled @endif">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
						<!--end::Button-->
					</div>
					<div class="fv-row">
					     <h3 class="fs-7 text-gray-500 mb-0">Comment History</h3>
					     @if($talent->twer1 && $talent->twer1->comment->count()>0)
						<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 g-3">
						<tbody class="fw-bold fs-7">
							@foreach($talent->twer1->comment as $c)
							<tr>
								<td>
									{{$c->comment}}<br/>
									<span class="text-muted fs-8">{{$c->created_at}}</span>
								</td>
							</tr>
							@endforeach
						</tbody>
						</table>
						@endif
					</div>
				</div>
					
			</div>
			<!--end::Card body-->
			{!! Form::close() !!}
			@else
			<div class="card-body fs-6 pe-3">
				<div class="scroll" id="twerContent">
				<h3 class="f-6 mb-5">Mark <span class="badge badge-primary fw-bolder p-3 ms-3 fs-6">{{$talent->twer1->mark??''}}</span></h3>
				<h3 class="f-7 mb-5  text-gray-800">Checklist</h3>

				<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 fs-6 g-3">
				<thead>
					<tr class="fw-bolder text-gray-700">
						<th>CM</th>
						<th>Discussed</th>
					</tr>
				</thead>
				<!--begin::Table body-->
				<tbody class="fw-bold fs-7">
					<!--begin::Table row-->
					@foreach($logcategory as $cat)
					<tr>
						<td class="">{{$cat->name}}</td>
						<td>
							<!--begin::Checkbox-->
							<label class="form-check form-check-sm form-check-custom justify-content-end">
								<input class="form-check-input" disabled type="checkbox" value="{{$cat->id}}" @if(in_array($cat->id,explode(",",$talent->twer1->checklist??''))) checked @endif name="checklist[]">
							</label>
							<!--end::Checkbox-->
						</td>
					</tr>
					@endforeach
				</tbody>
				<!--end::Table body-->
				</table>
				<div class="mb-10">
					<div class="form-check form-check-custom form-check-solid">
						<input class="form-check-input opentwer" name="open_id" type="checkbox"  @if($talent->twer1 && $talent->twer1->open_id) checked="checked" @endif value="1" id="opentwer1">
						<label class="form-check-label indicator-label" for="opentwer1">Open for editing</label>
						<span class="form-check-label indicator-progress">
							Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
						</span>
					</div>
				</div>
				<div class="fv-row mb-5">
					@if($talent->twer1 && $talent->twer1->comment->count()>0)
					<label for="statement" class="form-label">Comment History</label>
					<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 g-3">
					<tbody class="fw-bold fs-7">
						@foreach($talent->twer1->comment as $c)
						<tr>
							<td>
								{{$c->comment}}<br/>
								<span class="text-muted fs-8">{{$c->created_at}}</span>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
								
					@endif
				</div>
				</div>
			
			</div>
			@endif
		</div>
	</div>
			<!--end::Sidebar-->
		</div>
		<!--end::Layout-->
	</div>
	<!--end::Card Body-->
</div>
	</div>
	<!--end::Tab pane-->
	<!--begin::Tab pane-->
	<div id="kt_twer2_pane" class="tab-pane fade">
	<div class="card card-docs mb-2">
	<!--begin::Card Body-->
	<div class="card-body fs-6 text-gray-700">
		<!--begin::Layout-->
		<div class="d-flex flex-column flex-xl-row">
			<!--begin::Content-->
			<div class="flex-lg-row-fluid me-lg-10">
				<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
					<div class="fv-row mb-10">
						<label class="required form-label">Title</label>
						<!--begin::Input group-->
						<div class="text-muted fs-7">What change or improvement are you talking about? </div>
						<div class="text-primary mt-3">
							{{$talent->twer2->title??''}}
						</div>
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
							<label class="required form-label">Background</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->background??'')!!}
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
							<label class="required form-label">Problem Statement and Effect of the problem</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->problem??'')!!}
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Current Situation : Where do things stand now?</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->situation??'')!!}
								@if($talent->twer2 && $talent->twer2->situation_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer2->situation_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
							</div>
							@if(count(array_filter($audit->pluck('old_values.situation')->toArray()))>0)
							<!--begin::Accordion-->
							<div class="accordion accordion-icon-toggle" id="kt_accordion_situation">
							    <!--begin::Item-->
							    <div class="mb-5">
							        <!--begin::Header-->
							        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_situation_item">
							            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
										</svg>
									</span></span>
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Target State : What specific outcome is required?</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->target??'')!!}
								@if($talent->twer2 && $talent->twer2->target_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer2->target_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Gap Analysis : Why does the problem exist?</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->gap??'')!!}
								@if($talent->twer2 && $talent->twer2->gap_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer2->gap_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				
				<div class="separator separator-content border-primary border-3 my-10"><span class="w-200px fw-bolder">Do, Check, Act</span></div>
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Strategies Needed / Counter measures</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->stratergies??'')!!}
							</div>
							@if(count(array_filter($audit->pluck('old_values.stratergies')->toArray()))>0)
							<!--begin::Accordion-->
							<div class="accordion accordion-icon-toggle" id="kt_accordion_stratergies">
							    <!--begin::Item-->
							    <div class="">
							        <!--begin::Header-->
							        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_stratergies_item">
							            <span class="accordion-icon"><span class="svg-icon svg-icon-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
											<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
										</svg>
									</span></span>
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
							        </div>
							        <!--end::Header-->

							        <!--begin::Body-->
							        <div id="kt_accordion_stratergies_item" class="collapse fs-7 ps-10" data-bs-parent="#kt_accordion_stratergies">
							            {!!implode('<div class="separator my-2"></div>',array_filter($audit->pluck('old_values.stratergies')->toArray()))!!}
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Action Plan : How to implement? (What, Who, Why, Where & How)</label>
							<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->plan??'')!!}
								@if($talent->twer2 && $talent->twer2->plan_file!="")
								<br/><a href="{{url('twer').'/'.$talent->twer2->plan_file}}"  target="_blank" class="btn btn-light-primary btn-sm mt-3"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
								<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
								<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
								</svg></span>Attachment</a>
								@endif
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
							            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
	
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
					<label class="required form-label">Effect Confirmation</label>
						<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->effect??'')!!}
							</div>
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label class="required form-label">Follow up. How will you ensure on-going PDCA?</label>
						<div class="text-primary mt-3">
								{!!nl2br($talent->twer2->followup??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-12">
						<label class="required form-label">Action for Spread</label>
						<div class="text-muted fs-7">How will you share your learning with others? </div>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer2->spread??'')!!}
						</div>
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label for="statement" class="form-label required">What went well</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer2->well??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
						<label for="statement" class="form-label required">What did not go well</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer2->notwell??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-6">
						<label for="statement" class="form-label required">What helped</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer2->helped??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
						<label for="statement" class="form-label required">What hindered</label>
						<div class="text-primary mt-3">
							{!!nl2br($talent->twer2->hindered??'')!!}
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
						            <h3 class="fs-7 text-gray-500 mb-0 ms-4">History</h3>
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
			@if(Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0)
			{!! Form::model($talent->twer2??'null', array('route' => ['mark.twer'], 'method'=>'POST', 'id' => 'kt_add_mark_form2')) !!}
    		<input type="hidden" name="id" value="{{$talent->twer2->id??'null'}}">
    		<input type="hidden" name="mark" class="mark2" value="">
			<div class="fv-row mb-10">
				<div class="d-flex flex-column rounded-3 p-7 border border-dashed border-gray-400 bg-light-warning">
					<div class="fs-5 fw-bolder form-label mb-3">Assessment at end of programme (Year 2)<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Drag the slider to assign grade to your Talent"></i></div>

					<!-- <div class="separator separator-dashed mb-7"></div> -->
						<div id="kt_slider_basic2" class="mt-3 me-6"></div>
						<div class="pt-5">
		        				<div class="fw-bolder text-gray-700 mb-2"><span id="kt_slider_basic_min2"></span></div>
		    				</div>
						<!-- <div class="form-floating">
						    <input type="text" class="form-control"  name="mark" id="floatingInput" value="{{$talent->twer2->mark??''}}" />
						    <label for="floatingInput">Mark</label>
						</div> -->
						@if(!is_null($talent->twer2->mark??null))
						<div class="form-floating" style="height:100px;top:-100px;z-index:1;margin-bottom:-100px"></div>
						@endif
						<div class="d-flex justify-content-end">
					<!--begin::Button-->
					<button type="submit" id="kt_add_mark_submit2" class="btn btn-sm @if(!$talent->twer2 || !is_null($talent->twer2->mark)) btn-secondary disabled @else btn-primary @endif">
						<span class="indicator-label">@if(!is_null($talent->twer2->mark??null)) Submitted @else Submit @endif</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Button-->
				</div>	
				</div>
			</div>
			{!! Form::close() !!}
			@endif
		</div>
	<!--end::Content-->
	</div>
	<!--end::Content-->
	<!--begin::Sidebar-->
	<div class="flex-column flex-lg-row-auto w-100 w-350px mb-10">
		<!--begin::Card-->
		<div class="card card-flush bg-light-success mb-0 table-responsive">
			<!--begin::Card body-->
			@if(Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0)
			{!! Form::model($talent->twer2??'null', array('route' => ['assesst.twer'], 'method'=>'POST', 'id' => 'kt_add_twer_form2')) !!}
    		<input type="hidden" name="id" value="{{$talent->twer2->id??'null'}}">
			<div class="card-body fs-6 pe-3">
				<div class="scroll" id="twerContent">
					<h3 class="f-6 mb-3">Checklist</h3>
					<div class="text-muted fs-7 mb-2">Highly recommended for direct/face to face discussion.</div>
					<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 fs-6 g-3">
					<thead>
						<tr class="fw-bolder text-gray-700">
							<th>CM</th>
							<th>Discussed</th>
						</tr>
					</thead>
					<!--begin::Table body-->
					<tbody class="fw-bold fs-7">
						<!--begin::Table row-->
						@foreach($logcategory as $cat)
						<tr>
							<td class="">{{$cat->name}}</td>
							<td>
								<!--begin::Checkbox-->
								<label class="form-check form-check-sm form-check-custom justify-content-end">
									<input class="form-check-input"  type="checkbox" value="{{$cat->id}}" @if(in_array($cat->id,explode(",",$talent->twer2->checklist??''))) checked @endif name="checklist[]">
								</label>
								<!--end::Checkbox-->
							</td>
						</tr>
						@endforeach
					</tbody>
					<!--end::Table body-->
					</table>


					
					<div class="fv-row mb-5">
						<div class="form-floating">
						    <textarea class="form-control"  name="comment"  style="height: 100px"></textarea>
						    <label for="floatingTextarea">Comments</label>
						</div>
					</div>
					<div class="fv-row mb-5">
		                                                    <!--begin::Label-->
						<div class="fs-5 fw-bolder form-label mb-3">Send notification?
						<i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Click on checkbox below to send email notification to your Talent."></i></div>
						<!--end::Label-->
						<!--begin::Checkbox-->
						<label class="form-check form-check-custom form-check-solid">
						   <input class="form-check-input bg-dark" type="checkbox" value="1" name="notify">
						   <span class="form-check-label">Inform your Talent about your comment. </span>
						</label>

					    
					    <!--end::Checkbox-->
					</div>
					<div class="d-flex justify-content-end">
						<!--begin::Button-->
						<button type="submit" id="kt_add_twer_submit2" class="btn btn-sm btn-primary @if(!$talent->twer2) disabled @endif">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
						<!--end::Button-->
					</div>
					<div class="fv-row">
					     <h3 class="fs-7 text-gray-500 mb-0">Comment History</h3>
					     @if($talent->twer2 && $talent->twer2->comment->count()>0)
						<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 g-3">
						<tbody class="fw-bold fs-7">
							@foreach($talent->twer2->comment as $c)
							<tr>
								<td>
									{{$c->comment}}<br/>
									<span class="text-muted fs-8">{{$c->created_at}}</span>
								</td>
							</tr>
							@endforeach
						</tbody>
						</table>
						@endif
					</div>
				</div>
					
			</div>
			<!--end::Card body-->
			{!! Form::close() !!}
			@else
			<div class="card-body fs-6 pe-3">
				<div class="scroll" id="twerContent">
				<h3 class="f-6 mb-5">Mark <span class="badge badge-primary fw-bolder p-3 ms-3 fs-6">{{$talent->twer2->mark??''}}</span></h3>
				<h3 class="f-7 mb-5  text-gray-800">Checklist </h3>

				<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 fs-6 g-3">
				<thead>
					<tr class="fw-bolder text-gray-700">
						<th>CM</th>
						<th>Discussed</th>
					</tr>
				</thead>
				<!--begin::Table body-->
				<tbody class="fw-bold fs-7">
					<!--begin::Table row-->
					@foreach($logcategory as $cat)
					<tr>
						<td class="">{{$cat->name}}</td>
						<td>
							<!--begin::Checkbox-->
							<label class="form-check form-check-sm form-check-custom justify-content-end">
								<input class="form-check-input" disabled type="checkbox" value="{{$cat->id}}" @if(in_array($cat->id,explode(",",$talent->twer2->checklist??''))) checked @endif name="checklist[]">
							</label>
							<!--end::Checkbox-->
						</td>
					</tr>
					@endforeach
				</tbody>
				<!--end::Table body-->
				</table>

				<div class="mb-10">
					<div class="form-check form-check-custom form-check-solid">
						<input class="form-check-input opentwer" name="open_id" @if($talent->twer2 && $talent->twer2->open_id) checked="checked" @endif type="checkbox" value="2" id="opentwer2">
						<label class="form-check-label indicator-label" for="opentwer2">Open for editing</label>
						<span class="form-check-label indicator-progress">
							Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
						</span>
					</div>
				</div>
				
				<div class="fv-row mb-5">
					@if($talent->twer2 && $talent->twer2->comment->count()>0)
					<label for="statement" class="form-label">Comment History</label>
					<table class="table align-middle table-rounded table-row-dashed table-row-gray-500 g-3">
					<tbody class="fw-bold fs-7">
						@foreach($talent->twer2->comment as $c)
						<tr>
							<td>
								{{$c->comment}}<br/>
								<span class="text-muted fs-8">{{$c->created_at}}</span>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
								
					@endif
				</div>
				</div>
			
			</div>
			@endif
		</div>
	</div>
			<!--end::Sidebar-->
		</div>
		<!--end::Layout-->
	</div>
	<!--end::Card Body-->
</div>
	</div>
	<!--end::Tab pane-->
</div>
<!--end::Tab Content-->


<x-slot name="scripts2">
<script>
	
"use strict";
var KTAppEcommerceSaveTwer = function() {

	return {
        init: function() {
                (() => {
                let e;
                const t = document.getElementById("kt_add_twer_form"),
                    o = document.getElementById("kt_add_twer_submit"),
					r = document.getElementById("kt_add_twer_form2"),
                    s = document.getElementById("kt_add_twer_submit2");
	                	o.addEventListener("click", (a => {
	                    a.preventDefault(), 
	                        o.setAttribute("data-kt-indicator", "on"), o.disabled = !0, 
	                        $.ajax({
							type: 'POST',
							data : $('#kt_add_twer_form').serialize(),
					    		url: "{{url('')}}/supervisor/assest/twer",
						}).done(function(){
							o.removeAttribute("data-kt-indicator"), o.disabled = !1,
							Swal.fire({
		                            html: "Comment have been save.",
		                            icon: "success",
		                            buttonsStyling: !1,
		                            confirmButtonText: "Ok, got it!",
		                            customClass: {
		                                confirmButton: "btn btn-primary"
		                            }
		                        	})
						})
                    	})),
						s.addEventListener("click", (a => {
	                    a.preventDefault(), 
	                        s.setAttribute("data-kt-indicator", "on"), s.disabled = !0, 
	                        $.ajax({
							type: 'POST',
							data : $('#kt_add_twer_form2').serialize(),
					    		url: "{{url('')}}/supervisor/assest/twer",
						}).done(function(){
							s.removeAttribute("data-kt-indicator"), s.disabled = !1,
							Swal.fire({
		                            html: "Comment have been save.",
		                            icon: "success",
		                            buttonsStyling: !1,
		                            confirmButtonText: "Ok, got it!",
		                            customClass: {
		                                confirmButton: "btn btn-primary"
		                            }
		                        	})
						})
                    	}))
                
            	})(),
            	(() => {
                const u = document.getElementById("kt_add_mark_form"),
                    p = document.getElementById("kt_add_mark_submit"),
					v = document.getElementById("kt_add_mark_form2"),
                    w = document.getElementById("kt_add_mark_submit2");
	                	p.addEventListener("click", (a => {
	                    a.preventDefault(), 
	                        p.setAttribute("data-kt-indicator", "on"), p.disabled = !0, 
	                        $.ajax({
							type: 'POST',
							data : $('#kt_add_mark_form').serialize(),
					    		url: "{{url('')}}/supervisor/mark/twer",
						}).done(function(){
							p.removeAttribute("data-kt-indicator"), p.disabled = !1,
							Swal.fire({
		                            html: "Mark have been save.",
		                            icon: "success",
		                            buttonsStyling: !1,
		                            confirmButtonText: "Ok, got it!",
		                            customClass: {
		                                confirmButton: "btn btn-primary"
		                            }
		                        	}), p.classList.add('btn-secondary', 'disabled'),p.textContent = 'Submitted';
						})
                    	})),
						w.addEventListener("click", (a => {
	                    a.preventDefault(), 
	                        w.setAttribute("data-kt-indicator", "on"), w.disabled = !0, 
	                        $.ajax({
							type: 'POST',
							data : $('#kt_add_mark_form2').serialize(),
					    		url: "{{url('')}}/supervisor/mark/twer",
						}).done(function(){
							w.removeAttribute("data-kt-indicator"), w.disabled = !1,
							Swal.fire({
		                            html: "Mark have been save.",
		                            icon: "success",
		                            buttonsStyling: !1,
		                            confirmButtonText: "Ok, got it!",
		                            customClass: {
		                                confirmButton: "btn btn-primary"
		                            }
		                        	}),w.classList.add('btn-secondary', 'disabled'),w.textContent = 'Submitted';
						})
                    	}))
                
            	})();
        
	}
    }
}();
KTUtil.onDOMContentLoaded((function() {
$('#twerContent').height(screen.height*0.65);
@if(Auth::user()->group_id==1)
const oi = document.querySelectorAll(".opentwer").forEach((e => {
e.addEventListener("change", (a => {
	a.preventDefault(), 
		e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, 
		$.ajax({
		type: 'POST',
		data: {talent_id: "{{$talent->id}}",series:e.value,flag:e.checked},
		url: "{{url('open/talent/twer')}}",
	}).done(function(){
		e.removeAttribute("data-kt-indicator"), e.disabled = !1,
		Swal.fire({
				html: "TWER is "+(e.checked?"open":"close")+" to talent for editing",
				icon: e.checked?"success":"error",
				buttonsStyling: !1,
				confirmButtonText: "Ok, got it!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
				})
	})
}))
}))
@endif
@if(Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0)

    KTAppEcommerceSaveTwer.init()
    
    var slider = document.querySelector("#kt_slider_basic");
	var valueMin = document.querySelector("#kt_slider_basic_min");
	noUiSlider.create(slider, {
	    start: [{{$talent->twer1->mark??'15'}}],
	    connect: "lower",
	    step: 1,
	    tooltips: true,
	    format: wNumb({
	        decimals: 0
	    }),
	    range: {
	        "min": 0,
	        "max": 25
	    }
	});
	var slider2 = document.querySelector("#kt_slider_basic2");
	var valueMin2 = document.querySelector("#kt_slider_basic_min2");
	noUiSlider.create(slider2, {
	    start: [{{$talent->twer2->mark??'15'}}],
	    connect: "lower",
	    step: 1,
	    tooltips: true,
	    format: wNumb({
	        decimals: 0
	    }),
	    range: {
	        "min": 0,
	        "max": 25
	    }
	});
	
	slider.noUiSlider.on("update", function (values, handle) {
		var range_text = '';
		document.querySelector("[class='mark1']").value = values[handle];
		if(values[handle]<10)
			range_text = 'Room for improvement';
		else if(values[handle]>=10 && values[handle]<20)
			range_text = 'Satisfactory';
	     else
			range_text = 'Excellent';
	     
	     valueMin.innerHTML = range_text;
	});

	slider2.noUiSlider.on("update", function (values, handle) {
		var range_text = '';
		document.querySelector("[class='mark2']").value = values[handle];
		if(values[handle]<10)
			range_text = 'Room for improvement';
		else if(values[handle]>=10 && values[handle]<20)
			range_text = 'Satisfactory';
		else
			range_text = 'Excellent';
		
		valueMin2.innerHTML = range_text;
	});

         
@endif	
}));

</script>
</x-slot>

