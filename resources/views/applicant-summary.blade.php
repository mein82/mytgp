<!--begin::Navbar-->
<div class="card">
	<div class="card-body pt-9 pb-0">
		<!--begin::Details-->
		<div class="d-flex flex-wrap flex-sm-nowrap">
			<!--begin: Pic-->
			<div class="me-7 mb-4">
				<div class="symbol symbol-100px symbol-lg-150px symbol-fixed position-relative border">
					<img src="{{url('')}}/photo/{{$applicant->user->avatar??'default.png'}}" alt="image" />
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
							<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$applicant->title->name??''}} {{$applicant->user->name}}</a>
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
						<div class="d-flex flex-wrap fw-bold fs-6 pe-2">
							<a href="#" class="d-flex align-items-center text-gray-700 text-hover-primary me-5 mb-2">
							<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
									<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->{{$applicant->user->designation}} {{$applicant->user->scheme->name??''}}{{$applicant->user->grade_->name??''}}</a>
							<a href="#" class="d-flex align-items-center text-gray-700 text-hover-primary me-5 mb-2">
							<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
									<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->{{$applicant->user->email}}</a>
							<a href="#" class="d-flex align-items-center text-gray-700 text-hover-primary mb-2">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-4 me-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
									<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->{{$applicant->user->organization}}</a>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
					
					
				</div>
				<!--end::Title-->
				<!--begin::Stats-->
				<div class="d-flex flex-wrap flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column flex-grow-1 pe-8">
						<!--begin::Stats-->
						<div class="d-flex flex-wrap justify-content-center">
							<!--begin::Stat-->
							<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
								<!--begin::Label-->
								<div class="fw-bold fs-8 text-gray-400 mb-1">Age</div>
								<!--end::Label-->
								<!--begin::Number-->
								<div class="d-flex align-items-center">
									
									<div class="fs-5 text-gray-800 fw-bolder">{{getAgeFromIdentity($applicant->ic_no)}}</div>
								</div>
								<!--end::Number-->
								
							</div>
							<!--end::Stat-->
							<!--begin::Stat-->
							<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
								<!--begin::Label-->
								<div class="fw-bold fs-8 text-gray-400 mb-1">Programme</div>
								<!--end::Label-->
								<!--begin::Number-->
								<div class="d-flex align-items-center">
									
									<div class="fs-5 text-gray-800 fw-bolder">{{$applicant->programme->name??''}}</div>
								</div>
								<!--end::Number-->
								
							</div>
							<!--end::Stat-->
							<!--begin::Stat-->
							<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
								<!--begin::Label-->
								<div class="fw-bold fs-8 text-gray-400 mb-1">Applicant ID</div>
								<!--end::Label-->
								<!--begin::Number-->
								<div class="d-flex align-items-center">
									
									<div class="fs-5 text-gray-800 fw-bolder">{{$applicant->applicant_id}}</div>
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
		<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5 active" data-bs-toggle="tab" href="#kt_overview">Overview</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_ars">Application Ranking System</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_applicant_detail">Applicant Details</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_recommendation">Recommendations</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_structured_cv">Structured CV <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="For panel assessment"></i></a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#kt_documents">Documents</a>
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
	<div class="tab-pane fade show active" id="kt_overview">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Applicant Overview</h3>
			<!--end::Heading-->
			@if(Auth::user()->group_id<=2)
			<!--begin::Actions-->
			<div class="d-flex">
				<div class="me-0">
					<button class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<i class="bi bi-three-dots fs-3"></i>
					</button>
					<!--begin::Menu 3-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
						<!--begin::Heading-->
						<div class="menu-item px-3">
							<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Actions</div>
						</div>
						<!--end::Heading-->
						
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_personality" class="menu-link flex-stack px-3">Upload Personality Test
							<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_app_id" class="menu-link flex-stack px-3">Applicant ID
							<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Set applicant ID"></i></a>
						</div>
						<!--end::Menu item-->
						
					</div>
					<!--end::Menu 3-->
				</div>
				<!--end::Menu-->
			</div>
			<!--end::Actions-->
			@endif
		</div>
		<div class="row g-5">
			<!--begin::Col-->
			<div class="col-xl-9">
				<!--begin::Tables Widget 1-->
				<div class="card card-xl-stretch mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Competency Assessment</span>
						</h3>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						@php
						$ref = []; 
						foreach($applicant->reflog as $log){
							$ref[] = $log;
							
						}
						$totalself = ($applicant->selflog->l??'0')+($applicant->selflog->c??'0')+($applicant->selflog->g??'0')+($applicant->selflog->p??'0')+($applicant->selflog->v??'0');
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
						            <th class="fw-bolder text-center bg-light-primary">CM</th>
						            <th class="fw-bolder text-center bg-light-primary">Level</th>
						            <th class="fw-bolder text-center bg-light-warning">Ref1 CM</th>
						            <th class="fw-bolder text-center bg-light-warning">Ref2 CM</th>
						            <th class="fw-bolder text-center bg-light-warning">Avg</th>
						            <th class="fw-bolder text-center bg-light-warning">Level</th>
						        </tr>
						    </thead>
						    <tbody>
							<tr class="border-dashed border-bottom border-gray-300">
								<td class="fw-bold">Leadership</td>
								<td class="text-center bg-light-primary">{{$applicant->selflog->l_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($applicant->selflog->l_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])?$ref[0]->l_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[1])?$ref[1]->l_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->l_percent+$ref[1]->l_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->l_percent+$ref[1]->l_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
							<td class="fw-bold">Interpersonal Relationship</td>
								<td class="text-center bg-light-primary">{{$applicant->selflog->c_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($applicant->selflog->c_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])?$ref[0]->c_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[1])?$ref[1]->c_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->c_percent+$ref[1]->c_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->c_percent+$ref[1]->c_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
								<td class="fw-bold">Organizational Governance</td>
								<td class="text-center bg-light-primary">{{$applicant->selflog->g_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($applicant->selflog->g_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])?$ref[0]->g_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[1])?$ref[1]->g_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->g_percent+$ref[1]->g_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->g_percent+$ref[1]->g_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
							<td class="fw-bold">Professional Values</td>
								<td class="text-center bg-light-primary">{{$applicant->selflog->p_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($applicant->selflog->p_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])?$ref[0]->p_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[1])?$ref[1]->p_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->p_percent+$ref[1]->p_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->p_percent+$ref[1]->p_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="border-dashed border-bottom border-gray-300">
							<td class="fw-bold">Personal Values</td>
								<td class="text-center bg-light-primary">{{$applicant->selflog->v_percent??'0.0'}}</td>
								<td class="text-center bg-light-primary" >{{getlevel($applicant->selflog->v_percent??'0.0')}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])?$ref[0]->v_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[1])?$ref[1]->v_percent:'0.0'}}</td>
								<td class="text-center bg-light-warning">{{isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->v_percent+$ref[1]->v_percent)/2,1,'.'):0.0}}</td>
								<td class="text-center bg-light-warning">{{getLevel(isset($ref[0])&& isset($ref[1]) ?number_format(($ref[0]->v_percent+$ref[1]->v_percent)/2,1,'.'):0.0)}}</td>
							</tr>
							<tr class="fw-bold fs-5 text-gray-900 border-dashed border-bottom border-gray-300 bg-light-dark">
						            <th class="fw-bold">Overall</th>
						            <th class="text-center bg-light-primary">{{number_format($totalself,1)}}</th>
						            <th class="text-center bg-light-primary">{{getLevel($applicant->selflog->total??0)}}</th>
						            <th class="text-center bg-light-warning">{{number_format($totalref1,1)}}</th>
						            <th class="text-center bg-light-warning">{{number_format($totalref2,1)}}</th>
						            <th class="text-center bg-light-warning">{{number_format(($totalref1+$totalref2)/2,1)}}</th>
						            <th class="text-center bg-light-warning">{{getLevel(($totalref1+$totalref2)/2)}}</th>
						        </tr>
								
						    </tbody>
						</table>

						<div class="alert alert-dismissible bg-light-danger border border-danger border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
							<span class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
							<rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
							<rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="black"/>
							</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Content-->
							<div class="d-flex flex-column pe-0 pe-sm-10">
								<h5 class="mb-1">Info</h5>
								<div class="table-responsive">
										<!--begin::Table-->
										<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-2">
											<!--begin::Table head-->
											<thead>
												<tr class="border-0">
													<th class="p-0 min-w-150px"></th>
													<th class="p-0 min-w-150px"></th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
													<td class="text-dark fw-bold">TGP Level 1</td>
													<td class="text-end">
														< 50
													</td>
												</tr>
												<tr>
													<td class="text-dark fw-bold">TGP Level 2</td>
													<td class="text-end">
														50 - 69
													</td>
												</tr>
												<tr>
													<td class="text-dark fw-bold">TGP Level 3</td>
													<td class="text-end">
														70 - 89
													</td>
												</tr>
												<tr>
													<td class="text-dark fw-bold">TGP Level 4</td>
													<td class="text-end">
														90 - 100
													</td>
												</tr>
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
							</div>
							<!--end::Content-->
						</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3">
				<!--begin::Tables Widget 1-->
				<div class="card card-xl-stretch mb-xl-8">
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<h1 class="fw-bolder fs-3 my-7" id="active-bg-colors">CPD/NSR Point</h1>
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
							    	@foreach($applicant->cpdnsr as $item)
							        <tr>
							            <td>{{$item->type}}</td>
							            <td class="text-center">{{$item->year}}</td>
							            <td class="text-center">{{$item->mark}}</td>
							        </tr>
							        @endforeach
							    </tbody>
							</table>
							<h1 class="fw-bolder fs-3 my-7" id="active-bg-colors">LNPT</h1>
							<table class="table table-rounded table-striped border gy-3y gs-7">
							    <thead>
							        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
							            <th class="text-center">Year</th>
							            <th class="text-center">Mark</th>
							            
							        </tr>
							    </thead>
							    <tbody>
							        @foreach($applicant->lnpt as $lnpt)
								    <tr><td class="text-center" width="50%">{{ $lnpt->year}}</td><td class="text-center">{{$lnpt->mark}}</td></tr>
								    @endforeach

							    </tbody>
							</table>
						</div>
						<!--end::Table container-->
					</div>
				</div>
				<!--endW::Tables Widget 1-->
			</div>
			<!--end::Col-->
		</div>

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
    					<input type="hidden" name="applicant_id" value="{{$applicant->id}}">
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Input-->
								<div>
									<select name="series" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option"  data-allow-clear="true">
										<option></option>
										<option value="1">Enrollment</option>
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
								<div class="col-12">
									<div class="text-primary m-2 p-2">{!!nl2br($applicant->scv1->$q??'')!!}</div>
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
		
	</div>
	<div class="tab-pane fade" id="kt_ars">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Application Ranking System</h3>
			<!--end::Heading-->
		</div>
		<div class="row g-9">
			<!--begin::Col-->
			<div class="col-md-12">
				<!--begin::Card-->
				<div class="card mb-6 mb-xl-9">
					<!--begin::Card body-->
					<div class="card-body">
						<table id="kt_table_users" class="table border table-rounded gy-3 gs-5 table-row-bordered table-row-gray-300 fs-6">
							<thead>
							<tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0 bg-light">
							<th>#</th>
							<th>Item</th>
							<th>Score</th>
							</tr>
							</thead>
							<tbody class="text-gray-800">
								<tr>
									<td>1.</td>
									<td>Age</td>
									<td>{{$applicant->markage}}</td>
								</tr>
								<tr>
									<td>2.</td>
									<td>Years of Working Experience</td>
									<td>{{$applicant->markworkexp}}</td>
								</tr>
								<tr>
									<td>3.</td>
									<td>Workplace</td>
									<td>{{$applicant->markhq}}</td>
								</tr>
								<tr>
									<td>4.</td>
									<td>Managerial/Leadership Experience</td>
									<td>{{$applicant->markmanagerexp}}</td>
								</tr>
								<tr>
									<td>5.</td>
									<td>Postgraduate Qualification</td>
									<td>{{$applicant->markpostgrad}}</td>
								</tr>
								<tr>
									<td>6.</td>
									<td>Workplace Involvement in the past 2 years (Committee)</td>
									<td>{{$applicant->markcomminv}}</td>
								</tr>
								<tr>
									<td>7.</td>
									<td>Workplace Involvement in the past 2 years (Project/Programme)</td>
									<td>{{$applicant->markproginv}}</td>
								</tr>
								<tr>
									<td>8.</td>
									<td>LNPT</td>
									<td>{{$applicant->markLNPT}}</td>
								</tr>
								<tr>
									<td>9.</td>
									<td>Social/Voluntary Involvement work or project e.g, NGO</td>
									<td>{{$applicant->marksoc}}</td>
								</tr>
								<tr>
									<td>10.</td>
									<td>Involvement in research in the past two years (listed in NMRR)</td>
									<td>{{$applicant->markresearch}}</td>
								</tr>
							</tbody>
							<tfooter>	
								<tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0 bg-light">
									<th></th>
									<th>Total</th>
									<th>{{$applicant->ars}}</th>
								</tr>
							</tfooter>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="kt_applicant_detail">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Applicant Detail</h3>
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->ic_no}}</span>
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
								<span class="fw-bold text-gray-800 fs-6">{{$applicant->dob}}</span>
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
								<span class="fw-bolder fs-6 text-gray-800 me-2">{{$applicant->gender}}</span>
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
								<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{$applicant->marital->name??''}}</a>
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
								<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{$applicant->ethnic->name??''}}</a>
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->position}}</span>
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->user->designation}} {{$applicant->user->scheme->name??''}}{{$applicant->user->grade_->name??''}}</span>
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
								<span class="fw-bold fs-6 text-gray-800">{{$applicant->user->organization}}</span><br/>
								<span class="fw-bold fs-6 text-gray-800">{{$applicant->office_street}}</span><br/>
								<span class="fw-bold fs-6 text-gray-800">{{$applicant->office_postcode}} {{$applicant->office_city}}, {{$applicant->officestate->name??''}} </span><br/>
								<span class="fw-bold fs-6 text-gray-800">@if(!is_null($applicant->office_phone)) {{$applicant->office_phone}} (Office) @endif @if(!is_null($applicant->mobile_phone)) {{$applicant->mobile_phone}} (Mobile) @endif </span>

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
								<span class="fw-bold fs-6 text-gray-800">{{$applicant->home_street}}</span><br/>
								<span class="fw-bold fs-6 text-gray-800">{{$applicant->home_postcode}} {{$applicant->home_city}}, {{$applicant->homestate->name??''}} </span><br/>
								<span class="fw-bold fs-6 text-gray-800">@if(!is_null($applicant->home_phone)) {{$applicant->home_phone}} @endif</span>
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->official_email}}(O) @if(!is_null($applicant->personal_email)), {{$applicant->personal_email}} (P) @endif</span>
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->facebook}}</span><br/>
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->twitter}}</span>
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->other_social}}</span>
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
										@foreach($applicant->academics as $item)
										<tr><td><span class="fw-bolder fs-6 text-gray-800">{{$item->institute}}</span> ({{$item->year}}) <br/> <span class="fs-6 text-gray-600">{{$item->qualification}}</span></td></tr>
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
							<a href="#" class="fs-4 fw-bolder mb-1 text-gray-900 text-hover-primary">Specialisation</a>
						</div>
						<!--end::Title-->
						<div class="h-2px w-100 bg-primary mb-1"></div>
						<!--begin::Content-->
						@if($applicant->specializations)
						<!--begin::Input group-->
						<div class="row mt-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Specialization</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->specializations->specialization}} </span> <br/>Date of Gazettment: {{$applicant->specializations->date_of_gazettement}} <br/>NSR No:{{$applicant->specializations->nsr_no}} <br/><span class="fs-6 text-gray-600">{{$applicant->specializations->subspecialization}}</span>
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->year_of_appt}}</span>
							</div>
							<!--end::Col-->
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Year of first confirmation </label>
							<!--end::Label-->
							<div class="col-lg-2">
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->year_of_conf}}</span>
							</div>
							
						</div>
						<!--end::Input group-->
						<label class="fw-bold text-primary my-5">Previous designations from 1st appoinment <small>(Govt.)</small> </label>
						<div class="card-scroll mh-250px">
							<div class="table-responsive">
								<table class="table table-row-dashed table-row-gray-500 gy-5 mb-0">
									<tbody>
									@foreach($applicant->designations as $item)
									<tr><td><span class="fw-bolder fs-6 text-gray-800">{{$item->designation}} </span> ({{$item->start_date}} - {{$item->end_date}}) <br/> <span class="fs-6 text-gray-600">{{$item->organization}}</span></td></tr>
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
								@foreach($applicant->awards as $item)
								<tr><td><span class="fw-bolder fs-6 text-gray-800">{{$item->title}} </span> ({{$item->year}}) </td></tr>
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
								@foreach($applicant->interest as $item)
								<tr><td><span class="fw-bolder fs-6 text-gray-800">{{$item->area}} </span> @if($item->title!="")- <span class="fs-6 text-gray-600">{{$item->title}}</span> @endif </td></tr>
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
								<span class="fw-bolder fs-6 text-gray-800">@if($applicant->headquarters==1) Yes @elseif($applicant->headquarters===0) No @endif</span>
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->managerial->name??''}}</span> @if($applicant->managerial_id>1) <br/>{{$applicant->managerial_year??''}} - <span class="fs-6 text-gray-600">{{$applicant->managerial_remark}}</span>@endif
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->committee->name??''}} </span>@if($applicant->committee_id>1) <br/>{{$applicant->committee_year??''}} - <span class="fs-6 text-gray-600">{{$applicant->committee_remark}}</span>@endif
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
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->projprog->name??''}} </span>@if($applicant->programme_pos_id>1)<br/>{{$applicant->programme_year??''}} - <span class="fs-6 text-gray-600">{{$applicant->programme_remark}}</span>@endif
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
								<span class="fw-bolder fs-6 text-gray-800">@if($applicant->voluntary_id==1) Yes @elseif($applicant->voluntary_id===0) No @endif</span>
								@if($applicant->voluntary_id==1)
								<br/> {{$applicant->voluntary_year??''}} - {{$applicant->voluntary_org??''}}, <span class="fs-6 text-gray-600">{{$applicant->voluntary_pos}}</span>@endif
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--end::Content-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				
				
			</div>
			<!--end::Col-->
		</div>
		<div class="row g-9">
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
								<span class="fw-bolder fs-6 text-gray-800">@if($applicant->research_id==1) Yes @elseif($applicant->research_id===0) No @endif</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						@if($applicant->research_id==1)
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="fw-bold text-muted">What is your role in that research?</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-12">
								<span class="fw-bolder fs-6 text-gray-800">@if($applicant->research_role==1) Co-Investigator @elseif($applicant->research_role==2) Primary Investigator @endif</span>
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
								<span class="fw-bolder fs-6 text-gray-800">@if($applicant->present_id==1) Yes @elseif($applicant->present_id===0) No @endif</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						@if($applicant->present_id==1)
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="fw-bold text-muted"><span class="bullet bg-primary pb-2 me-5"></span> If YES, please state the conference/seminar</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-12">
								<span class="fw-bolder fs-6 text-gray-800">{{$applicant->present_remark}}</span> ({{$applicant->present_year}})
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
								<span class="fw-bolder fs-6 text-gray-800">@if($applicant->publish_id==1) Yes @elseif($applicant->publish_id===0) No @endif</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						@if($applicant->publish_id==1)
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="fw-bold text-muted">If YES, please state the journal or the technical report</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-12">
								{{$applicant->publish_year}} - <span class="fw-bolder fs-6 text-gray-800">{{$applicant->publish_remark}}</span> 
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
						<span class="fw-bolder fs-6 text-gray-800">{!!nl2br($applicant->statement)!!}</span>
						<!--end::Content-->
						
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->

				
					</div>
	</div>

	<div class="tab-pane fade" id="kt_recommendation">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Referee Recommendation</h3>
			<!--end::Heading-->
		</div>
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
			
			<!--begin::Card body-->
			<div class="card-body p-9">
				<div class="row">
				    @foreach($applicant->recommend as $item)
				    <!--begin::Col-->
				    <div class="col-lg-6 mb-10 mb-lg-0">
				        <div class="border rounded py-5 px-5">
				        <div class="d-flex align-items-center">
				        <!--begin::User-->
				            <div class="d-flex align-items-center flex-grow-1">
				                <!--begin::Avatar-->
				                <div class="symbol symbol-45px me-5">
				                    @if($item->referee->avatar !='default.png')
				                    <img alt="Pic" src="{{url('')}}/photo/{{$item->referee->avatar}}" />
				                    @else
				                    <span class="symbol-label bg-light-primary text-primary fw-bold">{{substr($item->referee->name, 0,1)}}</span>
				                    @endif

				                </div>
				                <!--end::Avatar-->
				                <!--begin::Info-->
				                <div class="d-flex flex-column">
				                    <!--begin::Name-->
				                    <div class="d-flex align-items-center mb-2">
				                        <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bolder me-1">{{$item->referee->name}}</a>
				                    </div>
				                    <!--end::Name-->
				                    <!--begin::Info-->
				                    <div class="d-flex flex-wrap fw-bold fs-6 mb-2 pe-2">
				                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
				                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
				                        <span class="svg-icon svg-icon-4 me-1">
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
				                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
				                            </svg>
				                        </span>
				                        <!--end::Svg Icon-->{{$item->referee->email}}</a>
				                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
				                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
				                        <span class="svg-icon svg-icon-4 me-1">
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
				                                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
				                            </svg>
				                        </span>
				                        <!--end::Svg Icon-->{{$item->referee->designation}}</a>
				                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
				                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
				                        <span class="svg-icon svg-icon-4 me-1">
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
				                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
				                            </svg>
				                        </span>
				                        <!--end::Svg Icon-->{{$item->referee->organization}}</a>
				                        
				                    </div>
				                    <!--end::Info-->
				                    <div class="d-flex flex-wrap fw-bold fs-6 pe-2">
				                        <span class="badge badge-light-{{($item->status_id==1)?'success':(($item->status_id==2)?'danger':'warning')}} fw-bold">{{($item->status_id==1)?'Recommeded':(($item->status_id==2)?'Not Recommeded':'Pending')}}</span>
				                    </div>
				                </div>
				                <!--end::Info-->
				            </div>
				            <!--end::User-->
				        </div>
				        @if(!is_null($item->status_id))
				        <div class="separator my-5"></div>
			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <span class="required">Academic excellence</span>
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
									<!--begin::Radio group-->
									<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->academic==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                        <!-- <span class="badge badge-light-{{($item->academic>=3 && $item->academic<6)?'success':(($item->academic==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->academic)}}</span> -->
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->
			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <span class="required">Ability to excel in completing tasks</span>
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                        <!--begin::Description-->
			                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
			                        <!--end::Description-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
			                        <!-- <span class="badge badge-light-{{($item->completing_task>=3 && $item->completing_task<6)?'success':(($item->completing_task==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->completing_task)}}</span> -->
									<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->completing_task==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->

			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <span class="required">Ability to express thoughts</span>
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                        <!--begin::Description-->
			                        <div class="fs-7 fw-bold text-muted">a) Verbal</div>
			                        <!--end::Description-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
									<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->express_verbally==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                        <!-- <span class="badge badge-light-{{($item->express_verbally>=3 && $item->express_verbally<6)?'success':(($item->express_verbally==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->express_verbally)}}</span> -->
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->

			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                        <!--begin::Description-->
			                        <div class="fs-7 fw-bold text-muted">b) Written</div>
			                        <!--end::Description-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
									<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->express_written==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                        <!-- <span class="badge badge-light-{{($item->express_written>=3 && $item->express_written<6)?'success':(($item->express_written==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->express_written)}}</span> -->
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->

			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <span class="required">Ability to communicate with patients and peers</span>
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                        <!--begin::Description-->
			                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
			                        <!--end::Description-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
								<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->communicate==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                        <!-- <span class="badge badge-light-{{($item->communicate>=3 && $item->communicate<6)?'success':(($item->communicate==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->communicate)}}</span> -->
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->

			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <span class="required">Commitment to complete TGP programme</span>
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                        <!--begin::Description-->
			                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
			                        <!--end::Description-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
								<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->commitment==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                        <!-- <span class="badge badge-light-{{($item->commitment>=3 && $item->commitment<6)?'success':(($item->commitment==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->commitment)}}</span> -->
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->

			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <span class="required">Emotional stability and maturity</span>
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                        <!--begin::Description-->
			                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
			                        <!--end::Description-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
								<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->emotional==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                        <!-- <span class="badge badge-light-{{($item->emotional>=3 && $item->emotional<6)?'success':(($item->emotional==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->emotional)}}</span> -->
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->

			                <!--begin::Input group-->
			                <div class="mb-10">
			                    <!--begin::Heading-->
			                    <div class="mb-3">
			                        <!--begin::Label-->
			                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
			                            <span class="required">General personal well being</span>
			                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
			                        </label>
			                        <!--end::Label-->
			                        <!--begin::Description-->
			                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
			                        <!--end::Description-->
			                    </div>
			                    <!--end::Heading-->
			                    <!--begin::Row-->
			                    <div class="fv-row">
								<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
										@for ($i=1;$i<=6;$i++)	
										<!--begin::Radio-->
										<label class="fs-8 py-2 disabled btn btn-outline-secondary text-dark text-hover-white text-active-white btn-outline btn-active-success @if($item->personal==$i) active @endif "  data-kt-button="true">
										<!--begin::Input-->
										{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
										<!--end::Input-->
										{{getrecommend($i)}}</label>
										<!--end::Radio-->
										@endfor
										
									</div>
			                        <!-- <span class="badge badge-light-{{($item->personal>=3 && $item->personal<6)?'success':(($item->personal==2)?'warning':'danger')}} fw-bold">{{getrecommend($item->personal)}}</span> -->
			                    </div>
			                    <!--end::Row-->
			                </div>
			                <!--end::Input group-->
			                <!--begin::Input group-->
			                <div class="d-flex flex-column mb-5 fv-row">
			                    <!--begin::Label-->
			                    <label class="fs-5 fw-bold mb-2">Other comments</label>
			                    <!--end::Label-->
			                    {{$item->comment??'-'}}
			                </div>
			                <!--end::Input group-->


				        @endif
				    </div>
				    </div>
				    <!--end::Col-->
				    @endforeach
				</div>
				<!--end::Row-->
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="kt_documents">
		<div class="d-flex flex-wrap flex-stack p-5">
			<!--begin::Heading-->
			<h3 class="fw-bolder my-2">Documents</h3>
			<!--end::Heading-->
		</div>
		<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
			@foreach($applicant->document as $item)
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
</div>

@if(Auth::user()->group_id==5)
{!! Form::model($decision,array('route' => ['panel.evaluate'], 'method'=>'PATCH', 'id' => 'kt_panel_formvalidation')) !!}
{!!  Form::hidden('talent_id', $applicant->id)!!}

<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<!--begin::Header-->
			<div class="card-header border-0 pt-5">
				<h3 class="card-title align-items-start flex-column">
					<span class="card-label fw-bolder fs-3 mb-1">Decision</span>
				</h3>
			</div>
			<div class="card-body py-3">
				@if(Auth::user()->main==1)
				<div class="row mb-5">  
					<div class="col"> 
					<h4 class="mb-5 fs-6 text-primary">Individual Panel Suggestion</h4>
						<div class="table-responsive">
		 				<table class="table table-rounded table-striped border gy-4 gs-5">
							<thead>
		   					<tr class="fw-bolder fs-6 text-gray-800"><th>Name</th><th>Status</th><th>Comment</th></tr>
		   				</thead>
		   				<tbody>
							@foreach($applicant->panels as $pan)
							<tr><td>{{$pan->panel->name}}</td><td>{{$pan->status->name??''}} {!!($pan->status_id==3)?'<br/><span class="col-red">'.$pan->reason.'</span>':''!!}</td><td>{!!nl2br($pan->comment)!!}</td></tr>
							@endforeach
							@if($applicant->panels->count()==0)
							<tr><td colspan="3" class="text-center">No record.</td></tr>
							@endif
						</tbody>
						</table>
						</div>
					</div>
				</div>  
				@endif 
				<!--begin::Row-->
				<div class="row mb-7">
					<!--begin::Col-->
					<div class="col-6">
						<div class="fv-row mb-5">
							<!--begin::Row-->
							<div class="row">
								<!--begin::Col-->
								<div class="col-12">
								<!-- <label for="status_id" class="form-label">Suggestion</label> -->
									{!!  Form::select('status_id', $status->prepend('', ''), null, array('class'=>'form-select form-select-lg','data-placeholder'=>'Suggestion..','data-allow-clear'=>'true','data-hide-search'=>'true','data-control'=>'select2','id'=>'status_id')) !!} 
								</div>
							</div>
						</div>
							
						<div class="fv-row mb-5">
							<div class="form-floating">
							{!!  Form::textarea('comment', null, array('class'=>'form-control','id'=>'statement','placeholder'=>'','data-kt-autosize'=>'true'))!!} 
							    <label for="comment">Overall Comment</label>
							</div>
							<!--end::Input group-->
						</div>
						
					</div>
					<div class="col-6">
						<div class="fv-row">
							<!--begin::Row-->
							<div class="row">
								<!--begin::Col-->
								<div class="col-12">
								<div class="form-floating">
								<!--begin::Input group-->
								{!!  Form::textarea('reason', null, array('class'=>'form-control','id'=>'statement','placeholder'=>'','data-kt-autosize'=>'true','id'=>'reason',(($decision->status_id??'')==2)?'disabled':''))!!} 
								<label for="reason" class="form-label">Reason for Rejecting</label>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				@if(Auth::user()->main==1)
				<div class="row">
					<div class="col-6">
						<div class="fv-row mt-11">
							<!--begin::Row-->
							<div class="row">
								<!--begin::Col-->
								<div class="col-12">
								<div class="form-floating">
								<!--begin::Input group-->
								{!!  Form::textarea('research', null, array('class'=>'form-control','id'=>'statement','placeholder'=>'','data-kt-autosize'=>'true','id'=>'reason',(($decision->status_id??'')==2)?'disabled':''))!!} 
								<label for="reason" class="form-label">Proposed Project/ Research By Head of The Programme</label>
								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<h4 class="mb-5 fs-6 text-primary">Area of Interest for TGP Project/ Research</h4>
						<div class="card-scroll h-150px">
							<div class="table-responsive mb-7">
								<table class="table table-rounded border gy-4 gs-5 table-row-dashed table-row-gray-400">
									<tbody>
									@foreach($applicant->interest as $item)
									<tr>
									<td><span class="fw-bolder fs-6 text-gray-800">{{$item->area}} </span> @if($item->title!="")- <span class="fs-6 text-gray-600">{{$item->title}}</span> @endif</td>
									</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
					<h4 class="mb-5 fs-6 text-primary">Suggested Supervisors</h4>
					<!--begin::Repeater-->
					<div id="kt_docs_repeater_supervisor">
					    <!--begin::Form group-->
					    <div class="form-group">
					        <div data-repeater-list="kt_docs_repeater_supervisor">
					            @foreach($applicant->suggestedsupervisor as $super)
					            <div data-repeater-item>
					                <div class="form-group row mb-3">
					                    <div class="col-md-5">
											{!!  Form::hidden('id', $super->id)!!} 
					                        <input type="text" class="form-control mb-2 mb-md-0" name="name" placeholder="Fullname" value="{{$super->name}}" />
					                    </div>
					                    <div class="col-md-5">
					                        <input type="text" class="form-control mb-2 mb-md-0" name="designation" placeholder="Designation"  value="{{$super->designation}}"/>
					                    </div>
					                    <div class="col-md-2">
					                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger py-4">
					                            <i class="la la-trash-o fs-2"></i>
					                        </a>
					                    </div>
					                </div>
					            </div>
					            @endforeach
					            @if($applicant->suggestedsupervisor->count()==0)
					            <div data-repeater-item>
					                <div class="form-group row mb-3">
					                    <div class="col-md-5">
											<input type="hidden" value="" name="id">
					                        <input type="text" class="form-control mb-2 mb-md-0" name="name" placeholder="Fullname" />
					                    </div>
					                    <div class="col-md-5">
					                        <input type="text" class="form-control mb-2 mb-md-0" name="designation" placeholder="Designation"  />
					                    </div>
					                    <div class="col-md-2">
					                        <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
					                            <i class="la la-trash-o fs-1"></i>
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
					<div class="col-6">
					<h4 class="mb-5 fs-6 text-primary">List of Panels</h4>
					<!--begin::Repeater-->
					<div id="kt_docs_repeater_panel">
					    <!--begin::Form group-->
					    <div class="form-group">
					        <div data-repeater-list="kt_docs_repeater_panel">
					        	@foreach($applicant->panelname as $panel)
					            <div data-repeater-item>
					                <div class="form-group row mb-3">
					                    <div class="col-md-5">
											{!!  Form::hidden('id', $panel->id)!!} 
					                        <input type="text" class="form-control mb-2 mb-md-0" name="name" placeholder="Fullname" value="{{$panel->name}}" />
					                    </div>
					                    <div class="col-md-5">
					                        <input type="text" class="form-control mb-2 mb-md-0" name="designation" placeholder="Designation"  value="{{$panel->designation}}"/>
					                    </div>
					                    <div class="col-md-2">
					                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger py-4">
					                            <i class="la la-trash-o fs-2"></i>
					                        </a>
					                    </div>
					                </div>
					            </div>
					            @endforeach
					            @if($applicant->panelname->count()==0)
					            <div data-repeater-item>
					                <div class="form-group row mb-3">
					                    <div class="col-md-5">
											<input type="hidden" value="" name="id">
					                        <input type="text" class="form-control mb-2 mb-md-0" name="name" placeholder="Fullname" />
					                    </div>
					                    <div class="col-md-5">
					                        <input type="text" class="form-control mb-2 mb-md-0" name="designation" placeholder="Designation" />
					                    </div>
					                    <div class="col-md-2">
					                        <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
					                            <i class="la la-trash-o fs-1"></i>
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
				@endif
			
			</div>
			<div class="card-footer d-flex justify-content-end py-6 px-9">
				<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
				<button type="submit" class="btn btn-primary" id="kt_panel_submit">
				    <span class="indicator-label">
				        Save Changes
				    </span>
				    <span class="indicator-progress">
				        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
				    </span>
				</button>
			</div>
		</div>
	</div>
</div>
 {!! Form::close() !!}
@endif
@if(Auth::user()->group_id<=2)
@if($applicant->panels->count()>0 || $applicant->panel)
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
				   					@foreach($applicant->panels as $panel)
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
						@if($applicant->panel)
						<div class="table-responsive">
							<table class="table table-rounded table-striped border gy-4 gs-5">
								<thead>
				   					<tr class="fw-bolder fs-6 text-gray-800"><th width="30%">Name</th><th width="10%">Status</th><th>Comment</th></tr>
				   				</thead>
				   				<tbody>
									<tr><td>{{$applicant->panel->panel->name}}</td>
										<td>{{$applicant->panel->status->name??''}} </td>
										<td>
										<div class="flex flex-column">
										@if($applicant->panel->status_id==3)<div class="fw-bold">Reason:</div> <div class="text-danger">{{$applicant->panel->reason}}</div>@endif
										</div>
										<div class="flex flex-column">
										<div class="fw-bold">Comment:</div>{{$applicant->panel->comment}}
										</div>

									</td></tr>
				   				</tbody>
				   			</table>
				   		</div>
						@endif
				   	</div>
					<div class="col px-10">

						@if($applicant->panel)
						<h4 class="mb-5 text-primary fs-6">Proposed Project Research by Head of The Programme, if accepted</h4>
						<span class="fw-bolder fs-6 text-gray-800">{{$applicant->panel->research}}</span>
						@endif

						<div class="separator border-primary my-10"></div>

						<h4 class="mb-5 text-primary fs-6">Suggested Supervisor</h4>
						<div class="table-responsive mb-5">
							<table class="table table-row-dashed table-row-gray-300 gy-3">
							<tbody>
								@foreach($applicant->suggestedsupervisor as $super)
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
								@foreach($applicant->panelname as $panel)
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
{!! Form::open(array('route' => ['secretariat.evaluate'], 'method'=>'POST', 'id' => 'kt_sec_formvalidation')) !!}
{!!  Form::hidden('talent_id', $applicant->id)!!}

<div class="row g-5">
	<div class="col-xl-12">
		<div class="card mb-5 mb-xxl-8">
			<!--begin::Header-->
			<div class="card-header border-0 pt-5">
				<h3 class="card-title align-items-start flex-column">
					<span class="card-label fw-bolder fs-3 mb-1">Final Decision</span>
				</h3>
			</div>
			<div class="card-body py-3">
				<!--begin::Row-->
				<div class="row">
					<!--begin::Col-->
					
					<div class="col-6">
						<div class="fv-row mb-5">
							<!--begin::Row-->
							<div class="row">
								<!--begin::Col-->
								<div class="col-12">
								<!-- <label for="status_id" class="form-label">Suggestion</label> -->
									{!!  Form::select('status_id', $status->prepend('', ''), $applicant->status->status_id, array('class'=>'form-select form-select-lg','data-placeholder'=>'Suggestion..','data-allow-clear'=>'true','data-hide-search'=>'true','data-control'=>'select2','id'=>'status_id')) !!} 
								</div>
							</div>
						</div>
						
						<div class="fv-row mb-5">
										<!--begin::Input group-->
							<div class="form-floating">
							{!!  Form::textarea('comment', $applicant->status->comment, array('class'=>'form-control','id'=>'statement','placeholder'=>'','data-kt-autosize'=>'true'))!!} 
							    <label for="comment">Comment</label>
							</div>
							<!--end::Input group-->
						</div>
						<div class="fv-row mb-5">
											<!--begin::Input group-->
							<div class="form-floating">
							{!!  Form::textarea('research', $applicant->status->research, array('class'=>'form-control','id'=>'statement','placeholder'=>'','data-kt-autosize'=>'true'))!!} 
							    <label for="research">Proposed Research Area/Topic</label>
							</div>
							<!--end::Input group-->
						</div>
					</div>
					<div class="col-4">
						<div class="fv-row">
							<!--begin::Row-->
							<div class="row">
								<!--begin::Col-->
								<div class="col-12">
								<div class="form-floating">
								<!--begin::Input group-->
								{!!  Form::textarea('reason', $applicant->status->reason, array('class'=>'form-control','id'=>'statement','placeholder'=>'','data-kt-autosize'=>'true','id'=>'reason'))!!} 
								<label for="reason" class="form-label">Reason</label>
								</div>
							</div>
							</div>
						</div>
					</div>
					
				</div>
			
			</div>
			<div class="card-footer d-flex justify-content-end py-6 px-9">
				<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
				<button type="submit" class="btn btn-primary" id="kt_sec_submit">
				    <span class="indicator-label">
				        Save Changes
				    </span>
				    <span class="indicator-progress">
				        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
				    </span>
				</button>
			</div>
		</div>
	</div>
</div>
 {!! Form::close() !!}
@endif


<!--begin::Modal - Applicant selections-->
<div class="modal fade" id="kt_modal_app_id" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Set Applicant ID</h2>
                <!--end::Modal title-->
                 
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <div class="d-flex flex-column modal-load">
                    <div class="form-floating">
					    {!!  Form::text('applicant_id', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'','id'=>'applicant_id'))!!} 
					    <label for="floatingInput">Applicant ID</label>
					</div>
                </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Applicant selections-->
<!--begin::Modal - Personality Test selections-->
<div class="modal fade" id="kt_modal_personality" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Upload Personality Test</h2>
                <!--end::Modal title-->
                 
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
				<!--begin::Form-->
				<form class="form" action="#" method="post">
					<!--begin::Input group-->
					<div class="form-group row">
						<!--begin::Col-->
						<div class="col-lg-12">
							<!--begin::Dropzone-->
							<div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_3">
								<!--begin::Controls-->
								<div class="dropzone-panel mb-lg-0 mb-2">
									<a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
									<a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
								</div>
								<!--end::Controls-->

								<!--begin::Items-->
								<div class="dropzone-items wm-200px">
									<div class="dropzone-item" style="display:none">
										<!--begin::File-->
										<div class="dropzone-file">
											<div class="dropzone-filename" title="some_image_file_name.jpg">
												<span data-dz-name>some_image_file_name.jpg</span>
												<strong>(<span data-dz-size>340kb</span>)</strong>
											</div>

											<div class="dropzone-error" data-dz-errormessage></div>
										</div>
										<!--end::File-->

										<!--begin::Progress-->
										<div class="dropzone-progress">
											<div class="progress">
												<div
													class="progress-bar bg-primary"
													role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
												</div>
											</div>
										</div>
										<!--end::Progress-->

										<!--begin::Toolbar-->
										<!-- <div class="dropzone-toolbar">
											<span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
										</div> -->
										<!--end::Toolbar-->
									</div>
								</div>
								<!--end::Items-->
							</div>
							<!--end::Dropzone-->

							<!--begin::Hint-->
							<!-- <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span> -->
							<!--end::Hint-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
				</form>
				<!--end::Form-->



                
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Personality Test selections-->

<x-slot name="scripts">
<script>

@if(Auth::user()->group_id==5)
// Define form element
const form = document.getElementById('kt_panel_formvalidation');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            'status_id': {
                validators: {
                    notEmpty: {
                        message: 'This field is required'	
                    }
                }
            },
            'reason': {
                validators: {
                    callback: {
                        message: 'This field is required',
                        callback: function(e) {
							if(($('#status_id').val()==3 || $('#status_id').val()==5) && e.value==''){
								return false;
							} else{
								return true;
							}
							// return ($('#status_id').val()!=3 && $('#status_id').val()!=5 && e.value=="")
                        }
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const submitButton = document.getElementById('kt_panel_submit');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();
     
    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                submitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton.disabled = false;

                    // Show popup confirmation
                    // Swal.fire({
                    //     text: "Form has been successfully submitted!",
                    //     icon: "success",
                    //     buttonsStyling: false,
                    //     confirmButtonText: "Ok, got it!",
                    //     customClass: {
                    //         confirmButton: "btn btn-primary"
                    //     }
                    // });

                    form.submit(); // Submit form
                }, 2000);
            }
        });
    }
});

@endif

@if(Auth::user()->group_id<=2)

const form_sec = document.getElementById('kt_sec_formvalidation');

// Init form_sec validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator_sec = FormValidation.formValidation(
    form_sec,
    {
        fields: {
            'status_id': {
                validators: {
                    notEmpty: {
                        message: 'This field is required'	
                    }
                }
            },
            'reason': {
                validators: {
                    callback: {
                        message: 'This field is required',
                        callback: function(e) {
							if(($('#status_id').val()==3 || $('#status_id').val()==5) && e.value==''){
								return false;
							} else{
								return true;
							}
                        }
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

const submitButton_sec = document.getElementById('kt_sec_submit');
submitButton_sec.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form_sec before submit
    if (validator_sec) {
        validator_sec.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                submitButton_sec.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                submitButton_sec.disabled = true;

                // Simulate form_sec submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton_sec.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton_sec.disabled = false;

                    // Show popup confirmation
                    // Swal.fire({
                    //     text: "Form has been successfully submitted!",
                    //     icon: "success",
                    //     buttonsStyling: false,
                    //     confirmButtonText: "Ok, got it!",
                    //     customClass: {
                    //         confirmButton: "btn btn-primary"
                    //     }
                    // });

                    form_sec.submit(); // Submit form
                }, 2000);
            }
        });
    }
});
@endif
$('#kt_docs_repeater_panel').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});

$('#kt_docs_repeater_supervisor').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});

$('#status_id').change(function(){
    if($(this).val()>=3){
        $('#reason').val('');
        $('#reason').prop('disabled',false);
    }else{
        $('#reason').prop('disabled',true);
    }
});
$("#applicant_id").on("keyup", function(event) {
    val = $(this).val();
    if (event.keyCode === 13) {
       $.get('{{url('')}}/applicant/update/' + val+'/{{$applicant->user_id}}', function(data) {
            window.location.reload();
        });
    }
});



// set the dropzone container id
const id = "#kt_dropzonejs_example_3";
const dropzone = document.querySelector(id);

// set the preview element template
var previewNode = dropzone.querySelector(".dropzone-item");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
    url: "{{url('upload/files')}}", // Set the url for your upload script location
    parallelUploads: 20,
    paramName: "filename",
	maxFilesize: 20, // Max filesize in MB
    previewTemplate: previewTemplate,
    previewsContainer: id + " .dropzone-items", // Define the container to display the previews
    clickable: id + " .dropzone-select", // Define the element that should be used as click trigger to select files.
	acceptedFiles: ".doc,.docx,.pdf,.ppt,.pptx",
	headers: {
		'x-csrf-token': document.head.querySelector('meta[name="csrf-token"]').content,
	},
});

myDropzone.on("addedfile", function (file) {
    // Hookup the start button
    const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
    dropzoneItems.forEach(dropzoneItem => {
        dropzoneItem.style.display = '';
    });
});

// Update the total progress bar
myDropzone.on("totaluploadprogress", function (progress) {
    const progressBars = dropzone.querySelectorAll('.progress-bar');
    progressBars.forEach(progressBar => {
        progressBar.style.width = progress + "%";
    });
});

myDropzone.on("sending", function (file,xhr,data){
	data.append("file_id", 4);
	data.append("user_id", "{{$applicant->user_id}}");

    // Show the total progress bar when upload starts
    const progressBars = dropzone.querySelectorAll('.progress-bar');
    progressBars.forEach(progressBar => {
        progressBar.style.opacity = "1";
    });
});

// Hide the total progress bar when nothing"s uploading anymore
myDropzone.on("complete", function (progress) {
    const progressBars = dropzone.querySelectorAll('.dz-complete');

    setTimeout(function () {
        progressBars.forEach(progressBar => {
            progressBar.querySelector('.progress-bar').style.opacity = "0";
            progressBar.querySelector('.progress').style.opacity = "0";
        });
    }, 300);
});




</script>
</x-slot>