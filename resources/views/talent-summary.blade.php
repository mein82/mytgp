<x-app-layout activemenu="talent-evaluate">
<x-slot name="header">
	Talent
</x-slot>
<x-slot name="subheader">
Overview
</x-slot>

<!--begin::Navbar-->
<div class="card">
	<div class="card-body pt-9 pb-0">
		<!--begin::Details-->
		<div class="d-flex flex-wrap flex-sm-nowrap">
			<!--begin: Pic-->
			<div class="me-7 mb-4">
				<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative border">
					<img src="{{url('')}}/photo/{{$talent->user->avatar}}" alt="image" />
					<!-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div> -->
				</div>
			</div>
			<!--end::Pic-->
			<!--begin::Info-->
			<div class="flex-grow-1">
				<!--begin::Title-->
				<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
					<!--begin::User-->
					<div class="d-flex flex-column">
						<!--begin::Name-->
						<div class="d-flex align-items-center mb-2">
							<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$talent->title->name??''}} {{$talent->user->name}}</a>
							<a href="#">
								<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
								<span class="svg-icon svg-icon-1 svg-icon-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
										<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
										<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Name-->
						<!--begin::Info-->
						<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
							<a href="#" class="d-flex align-items-center text-gray-700 text-hover-primary me-5 mb-2">
							<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
									<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->{{$talent->user->designation}} {{$talent->user->scheme->name??''}}{{$talent->user->grade_->name??''}}</a>
							<a href="#" class="d-flex align-items-center text-gray-700 text-hover-primary me-5 mb-2">
							<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
									<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->{{$talent->user->email}}</a>
							<a href="#" class="d-flex align-items-center text-gray-700 text-hover-primary mb-2">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
									<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->{{$talent->user->organization}}</a>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
					<!--begin::Actions-->
					<div class="d-flex my-4">
						<div class="me-0">
							<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="bi bi-three-dots fs-3"></i>
							</button>
							<!--begin::Menu 3-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="menu-item px-3">
									<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Actions</div>
								</div>
								<!--end::Heading-->
								
								@if(Auth::user()->group_id<=2)
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="{{url('/edit/e-form/'.$talent->id)}}" class="menu-link flex-stack px-3">Talent Profile
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Edit talent e-form"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_app_selection" data-id="{{$talent->id}}" class="menu-link flex-stack px-3">Talent Status
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Update talent status"></i></a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_supervisor" data-id="{{$talent->id}}" class="menu-link flex-stack px-3">Supervisor
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Manage supervisor"></i></a>
								</div>
								<!--end::Menu item-->
								@endif
								
								
								
							</div>
							<!--end::Menu 3-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Actions-->
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
									
									<div class="fs-5 text-gray-800 fw-bolder">{{$talent->talent_code??''}}</div>
								</div>
								<!--end::Number-->
								
							</div>
							<!--end::Stat-->
							<!--begin::Stat-->
							<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
								<!--begin::Label-->
								<div class="fw-bold fs-8 text-gray-400 mb-1">Enrollment</div>
								<!--end::Label-->
								<!--begin::Number-->
								<div class="d-flex align-items-center">
									
									<div class="fs-5 text-gray-800 fw-bolder">{{$talent->status->enrollment??''}}</div>
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
		<!--end::Details-->
		<!--begin::Navs-->
		<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-7 fw-bolder">
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5 active" data-bs-toggle="tab" href="#kt_domain_chart">Domain Development Chart</a>
			</li>
			<!--end::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_course_attendance">Courses Attendance</a>
			</li>
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_project_progress">Project Progress</a>
			</li>
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_twer">TWER</a>
			</li>
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_structured_cv">Structured CV <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="For panel assessment"></i></a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_talent_profile">Talent Profile</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_documents">Documents</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_panel">Panels Comment</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_history">History</a>
			</li>
			<!--end::Nav item-->
		</ul>
		<!--begin::Navs-->
	</div>
</div>
<!--end::Navbar-->

<div class="tab-content mb-5 mb-xxl-8">
	<div class="tab-pane fade show active" id="kt_domain_chart">
		@include('logbook-chart')
	</div>
	<div class="tab-pane fade" id="kt_course_attendance">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Professional Development Attendances</h3>
			<!--end::Heading-->
		</div>
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
			
			<!--begin::Card body-->
			<div class="card-body p-9 table-responsive">
				@if($talent->course->where('attendance_id',4)->count()==0)
				No record
				@else
				<table id="kt_table_users" class="table border table-rounded gy-3 gs-5 table-row-bordered table-row-gray-300 fs-6">
					<thead>
					<tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0 bg-light">
					<th>#</th>
					<th>Training/Course</th>
					<th>Year</th>
					</tr>
					</thead>
					<tbody class="text-gray-800">
						@php $i=0; $domain = ''; @endphp
						@foreach($talent->course->where('attendance_id',4) as $course)
						@php $i++; @endphp
						@if($domain != $course->course->domain_id)
							<tr><td colspan="3" class="bg-light-primary fw-bold">{{$course->course->domain->name??''}}</td></tr>
						@endif
						@php $domain = $course->course->domain_id; @endphp
						<tr>
							<td>{{$i}}.</td>
							<td>{{$course->course->title}}</td>
							<td>{{date("Y",strtotime($course->course->start_date))}}</td>
						</tr>
						@endforeach
					</tbody>
					</table>
					@endif
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="kt_project_progress">
		@include('project-progress')
	</div>
	<div class="tab-pane fade" id="kt_twer">
		@include('twer')
	</div>

	<div class="tab-pane fade" id="kt_talent_profile">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Profile</h3>
			<!--end::Heading-->
		</div>
		<div class="row g-9">
			<!--begin::Col-->
			<div class="col-md-4 col-lg-12 col-xl-4">
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Personal Detail</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-warning mb-7"></div>
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">IC No</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->ic_no}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Date of birth</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span class="fw-bold text-gray-800 fs-6">{{$talent->dob}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Gender</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 d-flex align-items-center">
								<span class="fw-bolder fs-6 text-gray-800 me-2">{{$talent->gender}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Marital Status</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{$talent->marital->name??''}}</a>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Ethnic</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{$talent->ethnic->name??''}}</a>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Professional Detail</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-warning mb-7"></div>
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Position</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->position}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Designation</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->user->designation}} {{$talent->user->scheme->name??''}}{{$talent->user->grade_->name??''}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Organization</label>
							<!--begin::Label-->
							<!--begin::Label-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{$talent->user->organization}}</span><br/>
								<span class="fw-bold fs-6 text-gray-800">{{$talent->office_street}}</span><br/>
								<span class="fw-bold fs-6 text-gray-800">{{$talent->office_postcode}} {{$talent->office_city}}, {{$talent->officestate->name??''}} </span><br/>
								<span class="fw-bold fs-6 text-gray-800">@if(!is_null($talent->office_phone)) {{$talent->office_phone}} (Office) @endif @if(!is_null($talent->mobile_phone)) {{$talent->mobile_phone}} (Mobile) @endif </span>

							</div>
							<!--begin::Label-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-10">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Home Address</label>
							<!--begin::Label-->
							<!--begin::Label-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">{{$talent->home_street}}</span><br/>
								<span class="fw-bold fs-6 text-gray-800">{{$talent->home_postcode}} {{$talent->home_city}}, {{$talent->homestate->name??''}} </span><br/>
								<span class="fw-bold fs-6 text-gray-800">@if(!is_null($talent->home_phone)) {{$talent->home_phone}} @endif</span>
							</div>
							<!--begin::Label-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Email</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->official_email}}(O) @if(!is_null($talent->personal_email)), {{$talent->personal_email}} (P) @endif</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Other Social Media Address</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->facebook}}</span><br/>
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->twitter}}</span>
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->other_social}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
					</div>
				</div>
				
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 col-lg-12 col-xl-4">
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Academic</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-primary mb-1"></div>
						<!--begin::Content-->
						<div class="card-scroll mh-250px">
						<div class="table-responsive">
						  <table class="table table-row-dashed table-row-gray-300 gy-5 mb-0">
						   <tbody>
						   	@foreach($talent->academics as $item)
						    <tr>
						     <td><span class="fw-bolder fs-6 text-gray-800">{{$item->institute}}</span> ({{$item->year}}) <br/> <span class="fs-6 text-gray-600">{{$item->qualification}}</span></td>
						    </tr>
						    @endforeach
						    
						   </tbody>
						  </table>
						</div>
						</div>
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->

				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Specialization</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-primary mb-1"></div>
						<!--begin::Content-->
						@if($talent->specializations)
						<!--begin::Input group-->
						<div class="row mt-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Specialization</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->specializations->specialization}} </span> <br/>Date of Gazettment: {{$talent->specializations->date_of_gazettement}} <br/>NSR No:{{$talent->specializations->nsr_no}} <br/><span class="fs-6 text-gray-600">{{$talent->specializations->subspecialization}}</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						@endif
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->

				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Designation</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-primary mb-7"></div>
						<!--begin::Content-->
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Year of first appointment </label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-2">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->year_of_appt}}</span>
							</div>
							<!--end::Col-->
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Year of first confirmation </label>
							<!--end::Label-->
							<div class="col-lg-2">
								<span class="fw-bolder fs-6 text-gray-800">{{$talent->year_of_conf}}</span>
							</div>
							
						</div>
						<!--end::Input group-->
						<label class="fw-bold text-primary my-5">Previous designations from 1st appoinment <small>(Govt.)</small> </label>
						<div class="card-scroll mh-250px">
						 <div class="table-responsive">
						  <table class="table table-row-dashed table-row-gray-500 gy-5 mb-0">
						   <tbody>
						   	@foreach($talent->designations as $item)
						    <tr>
						     <td><span class="fw-bolder fs-6 text-gray-800">{{$item->designation}} </span> ({{$item->start_date}} - {{$item->end_date}}) <br/> <span class="fs-6 text-gray-600">{{$item->organization}}</span></td>
						    </tr>
						    @endforeach
						    
						   </tbody>
						  </table>
						</div>
						</div>
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">APC/Award</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-primary mb-1"></div>
						<!--begin::Content-->
						<div class="table-responsive">
						  <table class="table table-row-dashed table-row-gray-500 gy-5 mb-0">
						   <tbody>
						   	@foreach($talent->awards as $item)
						    <tr>
						     <td><span class="fw-bolder fs-6 text-gray-800">{{$item->title}} </span> ({{$item->year}}) </td>
						    </tr>
						    @endforeach
						    
						   </tbody>
						  </table>
						</div>
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 col-lg-12 col-xl-4">
				
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Area of Interest for TGP Project/ Research</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-success mb-1"></div>
						<!--begin::Content-->
						<div class="table-responsive">
					  <table class="table table-row-dashed table-row-gray-300 gy-5 mb-0">
					   <tbody>
					   	@foreach($talent->interest as $item)
					    <tr>
					     <td><span class="fw-bolder fs-6 text-gray-800">{{$item->area}} </span> @if($item->title!="")- <span class="fs-6 text-gray-600">{{$item->title}}</span> @endif </td>
					    </tr>
					    @endforeach
					    
					   </tbody>
					  </table>
					</div>
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->

				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Experience</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-success mb-7"></div>
						<!--begin::Content-->
						<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">Are you currently working at any division at MOH headquarters?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">@if($talent->headquarters==1) Yes @elseif($talent->headquarters===0) No @endif</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">What is your highest managerial or leadership position throughout your service?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">{{$talent->managerial->name??''}}</span> @if($talent->managerial_id>1) <br/>{{$talent->managerial_year??''}} - <span class="fs-6 text-gray-600">{{$talent->managerial_remark}}</span>@endif
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">What is your highest position in any committee you have been involved in for the past 2 years?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">{{$talent->committee->name??''}} </span>@if($talent->committee_id>1) <br/>{{$talent->committee_year??''}} - <span class="fs-6 text-gray-600">{{$talent->committee_remark}}</span>@endif
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">What is your highest position in any project/programme you have been involved in for the past 2 years?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">{{$talent->projprog->name??''}} </span>@if($talent->programme_pos_id>1)<br/>{{$talent->programme_year??''}} - <span class="fs-6 text-gray-600">{{$talent->programme_remark}}</span>@endif
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->


				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">Are you involved in any NGO or voluntary work for the past 2 years?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">@if($talent->voluntary_id==1) Yes @elseif($talent->voluntary_id===0) No @endif</span>
						@if($talent->voluntary_id==1)
						<br/> {{$talent->voluntary_year??''}} - {{$talent->voluntary_org??''}}, <span class="fs-6 text-gray-600">{{$talent->voluntary_pos}}</span>@endif
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Research</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-success mb-7"></div>
						<!--begin::Content-->
						<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">Are you involved in any research registered under National Medical Research Register (NMRR) for the past 2 years?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">@if($talent->research_id==1) Yes @elseif($talent->research_id===0) No @endif</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				@if($talent->research_id==1)
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">What is your role in that research?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">@if($talent->research_role==1) Co-Investigator @elseif($talent->research_role==2) Primary Investigator @endif</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">Did you present your research findings at any conference/seminar?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">@if($talent->present_id==1) Yes @elseif($talent->present_id===0) No @endif</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				@if($talent->present_id==1)
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted"><span class="bullet bg-primary pb-2 me-5"></span> If YES, please state the conference/seminar</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">{{$talent->present_remark}}</span> ({{$talent->present_year}})
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				@endif
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">Did you publish your research findings at any journal or as a technical report?</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						<span class="fw-bolder fs-6 text-gray-800">@if($talent->publish_id==1) Yes @elseif($talent->publish_id===0) No @endif</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				@if($talent->publish_id==1)
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="fw-bold text-muted">If YES, please state the journal or the technical report</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-12">
						{{$talent->publish_year}} - <span class="fw-bolder fs-6 text-gray-800">{{$talent->publish_remark}}</span> 
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				@endif
				@endif
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Title-->
						<div class="mb-2">
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Personal Statement</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-success mb-7"></div>
						<!--begin::Content-->
						<span class="fw-bolder fs-6 text-gray-800">{!!nl2br($talent->statement)!!}</span>
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Col-->
		</div>

	</div>
	<div class="tab-pane fade" id="kt_documents">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Documents</h3>
			<!--end::Heading-->
		</div>
		<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
			@foreach($talent->document as $item)
			<!--begin::Col-->
			<div class="col-md-6 col-lg-4 col-xl-3">
				<!--begin::Card-->
				<div class="card h-100">
					<!--begin::Card body-->
					<div class="card-body d-flex justify-content-center text-center flex-column p-8">
						<!--begin::Name-->
						<a target="_blank" href="{{url('attachment/'.$item->type->filepath.$item->filename)}}" class="text-gray-800 text-hover-primary d-flex flex-column">
							<!--begin::Image-->
							<div class="symbol symbol-40px mb-5">
								<img src="{{url('')}}/assets/media/svg/files/pdf.svg" alt="">
							</div>
							<!--end::Image-->
							<!--begin::Title-->
							<div class="fs-6 fw-bolder mb-2">{{$item->type->name??''}}</div>
							<!--end::Title-->
						</a>
						<!--end::Name-->
						<!--begin::Description-->
						<div class="fs-8 fw-bold text-gray-400">{{time_elapsed_string($item->created_at)}}</div>
						<!--end::Description-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Col-->
			@endforeach
		</div>
	</div>
	<div class="tab-pane fade" id="kt_history">
	
	</div>
	<div class="tab-pane fade" id="kt_structured_cv">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Structured CV</h3>
			<!--end::Heading-->
			<div class="d-flex flex-wrap">
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
						{!! Form::open(array('route' => ['reset.talentscv'], 'method'=>'DELETE')) !!}
    					<input type="hidden" name="talent_id" value="{{$talent->id}}">
    					<input type="hidden" name="applicant_id" value="{{$talent->applicant->id??''}}">
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Input-->
								<div>
									<select name="series" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option"  data-allow-clear="true">
										<option></option>
										<option value="1">Enrollment</option>
										<option value="2">Completed</option>
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
		</div>
		<div class="card mb-5 mb-xl-10">
			<!--begin::Card body-->
			<div class="card-body p-9">
				<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
					<!--begin::Wrapper-->
					<div class="d-flex flex-stack flex-grow-1">
						<!--begin::Content-->
						<div class="fw-bold">
							<div class="fs-6 fw-bold text-gray-700">
							Arahan:
							<ol>
								<li>Sila nilai berdasarkan kriteria yang diberi.</li>
								<li>Pemarkahan adalah berdasarkan perbandingan CV yang dihantar semasa permohonan dan sebelum tamat program.</li>
							</ol>
						</div>
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
				</div>

				<div class="table-responsive mt-10">
					<table class="table align-middle table-rounded border gy-5 gs-5 border-gray-300 table-row-bordered table-row-gray-300 fs-5">
						<thead>
							<tr class="bg-secondary fw-bold fs-6 text-gray-800 border-bottom border-gray-500">
							<th class="w-50px">Bil</th>
							<th>Kriteria</th>
							<th class="w-150px text-center">Maksimum</th>
							<th class="w-150px text-center">Markah</th>
							</tr>
						</thead>
						<tbody>
							@php $i=0; $p=0 @endphp
							@foreach($scvcategory as $item)
							@php $i++;@endphp
							<tr>
							<td class="align-top">{{$i}}.</td>
							<td>
							<span class="fw-bolder">{{$item->title}}</span>
							<ul>
								@foreach($item->question as $sub)
								@php $p++; 
								$q = 'q'.$p; @endphp 
								<li class="m-3 fw-bold">{!!$sub->q!!}</li>
								<div class="row">
								<div class="col-6">
									<span class="fst-italic fs-6 text-gray-600">Before TGP</span><br/><div class="text-primary m-2 p-2">{!!nl2br($talent->applicant->scv1->$q??'')!!}</div>
								</div>
								<div class="col-6">
									<span class="fst-italic fs-6 text-gray-600">After TGP</span><br/><div class="text-success m-2 p-2">{!!nl2br($talent->scv2->$q??'')!!}</div>
								</div>
								</div>
								@endforeach
							</ul>
							</td>
							<td class="text-center align-items-center">{{$item->mark}}</td>
							<td class="text-center">
								<div class="fv-row"> 
								{!! Form::text('m[]', null,['class'=>'form-control form-control-solid']) !!}
								</div>
							</td>
							</tr>
							@endforeach
							<tr>
							<td colspan="4">
								<div class="fv-row"> 
								<div class="form-floating">
								{!! Form::textarea('m[]', null,['class'=>'form-control form-control-solid rounded-2',  'id'=>"floatingTextarea2", 'style'=>"height: 100px"]) !!}
								<label for="floatingTextarea2">Komen</label>
								</div>
								</div>
							</td>
							</tr>
						</tbody>
					</table>
				</div>


			</div>
		</div>
		@if(Auth::user()->group_id==5)
		<div class="d-flex justify-content-end">
			<!--begin::Button-->
			<a href="{{url('dashboard')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
			<!--end::Button-->
			<!--begin::Button-->
			<button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
				<span class="indicator-label">Submit</span>
				<span class="indicator-progress">Please wait...
				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
			</button>
			<!--end::Button-->
		</div>
		@endif
	</div>
	<div class="tab-pane fade" id="kt_panel">
	<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Panel Decision</h3>
			<!--end::Heading-->
		</div>
@if($talent->applicant->panels->count()>0 || $talent->applicant->panel)
<div class="row g-5">
	<div class="col-xl-12">
		<div class="card mb-5">
			<!--begin::Header-->
			<div class="card-header border-0 pt-5">
				<h3 class="card-title align-items-start flex-column">
					<span class="card-label fw-bolder fs-3 mb-1">Panel Decision</span>
				</h3>
			</div>
			<div class="card-body py-3">
				<div class="row mb-5">
					<div class="col px-10">
						<h4 class="mb-5 text-primary fs-6">Individual Panel</h4>
						<div class="table-responsive">
							<table class="table table-rounded table-striped border gy-4 gs-5">
								<thead>
				   					<tr class="fw-bolder fs-6 text-gray-800"><th width="30%">Name</th><th width="10%">Status</th><th>Comment</th></tr>
				   				</thead>
				   				<tbody>
				   					@foreach($talent->applicant->panels as $panel)
									<tr><td>{{$panel->panel->name}}</td>
										<td>{{$panel->status->name??''}} </td>
										<td>
											<div class="flex flex-column">
											@if($panel->status_id==3)<div class="fw-bold">Reason:</div> <div class="text-danger">{{$panel->reason}}</div>@endif
											</div>
											<div class="flex flex-column">
											<div class="fw-bold">Comment:</div> {{$panel->comment}}
											</div>
											</div>
										</td>
									</tr>
									@endforeach
				   				</tbody>
				   			</table>
				   		</div>
				   		<h4 class="mb-5 text-primary fs-6">Main Panel</h4>
						@if($talent->applicant->panel)
						<div class="table-responsive">
							<table class="table table-rounded table-striped border gy-4 gs-5">
								<thead>
				   					<tr class="fw-bolder fs-6 text-gray-800"><th width="30%">Name</th><th width="10%">Status</th><th>Comment</th></tr>
				   				</thead>
				   				<tbody>
									<tr><td>{{$talent->applicant->panel->panel->name}}</td>
										<td>{{$talent->applicant->panel->status->name??''}} </td>
										<td>
										<div class="flex flex-column">
										@if($talent->applicant->panel->status_id==3)<div class="fw-bold">Reason:</div> <div class="text-danger">{{$talent->applicant->panel->reason}}</div>@endif
										</div>
										<div class="flex flex-column">
										<div class="fw-bold">Comment:</div>{{$talent->applicant->panel->comment}}
										</div>

									</td></tr>
				   				</tbody>
				   			</table>
				   		</div>
						@endif
				   	</div>
					<div class="col px-10">

						@if($talent->applicant->panel)
						<h4 class="mb-5 text-primary fs-6">Proposed Project Research by Head of The Programme, if accepted</h4>
						<span class="fw-bolder fs-6 text-gray-800">{{$talent->applicant->panel->research}}</span>
						@endif

						<div class="separator border-primary my-10"></div>

						<h4 class="mb-5 text-primary fs-6">Suggested Supervisor</h4>
						<div class="table-responsive mb-5">
							<table class="table table-row-dashed table-row-gray-300 gy-3">
							<tbody>
								@foreach($talent->applicant->suggestedsupervisor as $super)
								<tr>
								 <td><span class="fw-bolder fs-6 text-gray-800">{{$super->name}}</span> <br/> <span class="fs-6 text-gray-600">{{$super->designation}}</span></td>
								</tr>
								@endforeach
							</tbody>
							</table>
						</div>
						<div class="separator border-primary mb-10"></div>

						<h4 class="mb-5 text-primary fs-6">List of Panels</h4>
						<div class="table-responsive mb-5">
							<table class="table table-row-dashed table-row-gray-300 gy-3">
								<tbody>
								@foreach($talent->applicant->panelname as $panel)
								<tr>
								 <td><span class="fw-bolder fs-6 text-gray-800">{{$panel->name}}</span> <br/> <span class="fs-6 text-gray-600">{{$panel->designation}}</span></td>
								</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
@endif
</div>
</div>


<x-slot name="scripts3">
<script>
"use strict";
var KTModalNewCard = function() {
    var t, e, n, r, o, i;
    return {
        init: function() {
          (i = document.querySelector("#kt_modal_app_selection")) && (o = new bootstrap.Modal(i), r = document.querySelector("#kt_formvalidation_status"), t = document.getElementById("kt_formvalidation_text_submit"), n = FormValidation.formValidation(r, {
                fields: {
                    cohort: {
                        validators: {
                            integer :{
                                message: "Numbers only."
                            },
                            callback: {
                                message: "This field is required.",
                                callback: function(e) {
                                    var t = e.value;
                                    if (t =="" && $("[name='convert']").is(':checked')) return !1
                                }
                            }
                        }
                    },
                    talent_code: {
                        validators: {
                            callback: {
                                message: "This field is required.",
                                callback: function(e) {
                                    var t = e.value;
                                    if (t =="" && $("[name='convert']").is(':checked')) return !1
                                }
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
            }), t.addEventListener("click", (function(e) {
                e.preventDefault(), n && n.validate().then((function(e) { 
                    console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1, 
                        r.submit()
                    }), 1e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
	$('#kt_modal_supervisor').modal({backdrop:'static', keyboard:false});
    $("#kt_modal_supervisor").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "{{url('talent/supervisor')}}/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
        });
        
    });

    $("#kt_modal_app_selection").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "{{url('applicant/selection')}}/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
            // $('.loading').hide();
          })  .done(function() {
           KTModalNewCard.init();

        });
    });
    $('#kt_modal_app_selection').on('hide.bs.modal', function(e){ 
        $(this).removeData('bs.modal');
        $(this).find('.modal-load').html('');
    }) ;

    
    
}));
</script>
</x-slot>
</x-app-layout>

