<x-app-layout>
<x-slot name="header">
	Profile
</x-slot>
{!!  Form::hidden('group', Auth::user()->group_id)!!} 
<!--begin::Stepper-->
<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper">
<!--begin::Aside-->
<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-350px me-9">
	<!--begin::Wrapper-->
	<div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
		<!--begin::Nav-->
		<div class="stepper-nav">
			<!--begin::Step 1-->
				<div class="stepper-item current" data-kt-stepper-element="nav">
					<!--begin::Line-->
					<div class="stepper-line w-40px"></div>
					<!--end::Line-->
					<!--begin::Icon-->
					<div class="stepper-icon w-40px h-40px">
						<i class="stepper-check fas fa-check"></i>
						<span class="stepper-number">1</span>
					</div>
					<!--end::Icon-->
					<!--begin::Label-->
					<div class="stepper-label">
						<h3 class="stepper-title">Personal Info</h3>
						<div class="stepper-desc fw-bold">Setup Your Personal Info</div>
					</div>
					<!--end::Label-->
				</div>
				<!--end::Step 1-->
				<!--begin::Step 2-->
				<div class="stepper-item" data-kt-stepper-element="nav">
					<!--begin::Line-->
					<div class="stepper-line w-40px"></div>
					<!--end::Line-->
					<!--begin::Icon-->
					<div class="stepper-icon w-40px h-40px">
						<i class="stepper-check fas fa-check"></i>
						<span class="stepper-number">2</span>
					</div>
					<!--end::Icon-->
					<!--begin::Label-->
					<div class="stepper-label">
						<h3 class="stepper-title">Academic & Specialisation</h3>
						<!-- <div class="stepper-desc fw-bold">Setup Your Academic & Specialisation</div> -->
					</div>
					<!--end::Label-->
				</div>
				<!--end::Step 2-->
				<!--begin::Step 3-->
				<div class="stepper-item" data-kt-stepper-element="nav">
					<!--begin::Line-->
					<div class="stepper-line w-40px"></div>
					<!--end::Line-->
					<!--begin::Icon-->
					<div class="stepper-icon w-40px h-40px">
						<i class="stepper-check fas fa-check"></i>
						<span class="stepper-number">3</span>
					</div>
					<!--end::Icon-->
					<!--begin::Label-->
					<div class="stepper-label">
						<h3 class="stepper-title">Professional Info</h3>
						<div class="stepper-desc fw-bold">Your Professional Info</div>
					</div>
					<!--end::Label-->
				</div>
				<!--end::Step 3-->
				<!--begin::Step 4-->
				<div class="stepper-item" data-kt-stepper-element="nav">
					<!--begin::Line-->
					<div class="stepper-line w-40px"></div>
					<!--end::Line-->
					<!--begin::Icon-->
					<div class="stepper-icon w-40px h-40px">
						<i class="stepper-check fas fa-check"></i>
						<span class="stepper-number">4</span>
					</div>
					<!--end::Icon-->
					<!--begin::Label-->
					<div class="stepper-label">
						<h3 class="stepper-title">Personal Statement</h3>
						<!-- <div class="stepper-desc fw-bold"></div> -->
					</div>
					<!--end::Label-->
				</div>
				<!--end::Step 4-->
			
		</div>
		<!--end::Nav-->
	</div>
	<!--end::Wrapper-->
</div>
<!--begin::Aside-->
<!--begin::Content-->
<div class="card d-flex flex-row-fluid flex-center">
	<!--begin::Form-->
	<form class="card-body py-20 w-100 w-xl-800px px-1" novalidate="novalidate" id="kt_create_account_form" action="{{route('create.applicant')}}" method="POST" enctype="multipart/form-data">
				<!--begin::Step 1-->
		<div class="current" data-kt-stepper-element="content">
		@csrf
		<!--begin::Wrapper-->
			<div class="w-100">
				<!--begin::Heading-->
				<div class="pb-10 pb-lg-15">
					<!--begin::Title-->
					<h2 class="fw-bolder d-flex align-items-center text-dark">Personal Info
					<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="All fields are required"></i></h2>
					<!--end::Title-->
					<!--begin::Notice-->
					<div class="text-muted fw-bold fs-6">Setup your personal info.
					<!-- <a href="#" class="link-primary fw-bolder">Help Page</a> --></div>
					<!--end::Notice-->
				</div>
				<!--end::Heading-->
				<!--begin::Input group-->
				<div class="fv-row mb-10">

						<div class="row mb-6">
							<!--begin::Col-->
							<div class="col-lg-8">
								<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('{{url("")}}/assets/media/svg/avatars/blank.svg')">
									<!--begin::Preview existing avatar-->
									<div class="image-input-wrapper w-125px h-150px" style="background-image: none;"></div>
									<!--end::Preview existing avatar-->
									<!--begin::Label-->
									<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
										<i class="bi bi-pencil-fill fs-7"></i>
										<!--begin::Inputs-->
										<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
										<input type="hidden" name="avatar_file" value="{{Auth::user()->avatar}}">
										<input type="hidden" name="avatar_remove" value="1">
										<!--end::Inputs-->
									</label>
									<!--end::Label-->
									<!--begin::Cancel-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
										<i class="bi bi-x fs-2"></i>
									</span>
									<!--end::Cancel-->
									<!--begin::Remove-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
										<i class="bi bi-x fs-2"></i>
									</span>
									<!--end::Remove-->
								</div>
							</div>
							<!--end::Col-->
						</div>
					</div>
				<!--end::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Input-->
							{!!  Form::select('title_id',$title,null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Title...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
						<div class="col-lg-8">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('name', Auth::user()->name, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							    <label for="floatingInput">Fullname</label>
							</div>
							<!--end::Input group-->
						</div>
					</div>
				</div>
				<div class="fv-row mb-10">	
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('ic_no', null, array('class'=>'form-control','id'=>'ic_no','placeholder'=>''))!!} 
							    <label for="ic_no">IC No</label>
							</div>
							<!--end::Input group-->
						</div>
						<div class="col-lg-4">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('dob', null, array('class'=>'form-control','id'=>'dob','placeholder'=>''))!!} 
							    <label for="dob">Date of birth</label>
							</div>
							<!--end::Input group-->
						</div>
						<div class="col-lg-4">
							<!--begin::Input-->
							{!!  Form::select('gender_id',[''=>'','1' => 'MALE', '2' => 'FEMALE'],null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Gender...','data-hide-search'=>'true','data-control'=>'select2','id'=>'gender_id')) !!} 
						</div>
					</div>
				</div>
				<div class="fv-row mb-10"><!--end::Input-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-4">
							 {!!  Form::select('marital_id', $marital, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Marital status...','data-hide-search'=>'true','data-control'=>'select2') )!!} 

						
						</div>
						<div class="col-lg-4">
							 {!!  Form::select('ethnic_id', $ethnic, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Ethnic...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
						
					</div>

				
				</div>
				<!--end::Input group-->
				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">Current Position</span></div>

				<div class="fv-row mb-10">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-6">
							<!--begin::Input-->
							 <div class="form-floating">
							 	{!!  Form::text('position', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							 	  <label for="floatingInput">Position</label>
							</div>
						</div>
						<div class="col-lg-6">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('designation', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							    <label for="floatingInput">Designation</label>
							</div>
							<!--end::Input group-->
						</div>
					</div>
				</div>
				<div class="fv-row mb-10">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-3">
							 {!!  Form::select('scheme_id', $schemes, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Schemes...','data-hide-search'=>'true','data-control'=>'select2') )!!} 
						</div>
						<div class="col-lg-3">
							 {!!  Form::select('grade_id', $grades, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Grade...','data-hide-search'=>'true','data-control'=>'select2') )!!} 
						</div>
						<div class="col-lg-6">
							 {!!  Form::select('programme_id', $programme, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Programme...','data-hide-search'=>'true','data-control'=>'select2') )!!} 
						</div>
					</div>
				</div>
				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-floating">
								{!!  Form::text('organization', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Organisation</label>
							</div>
						</div>
					</div>

				</div>

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">Office Address</span></div>

				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-floating">
								{!!  Form::text('office_street', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Street</label>
							</div>
						</div>
					</div>
				</div>
				<div class="fv-row mb-10">
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('office_city', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							    <label for="floatingInput">City</label>
							</div>
							<!--end::Input group-->
						</div>
						<div class="col-lg-4">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('office_postcode', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'','id'=>'dob'))!!} 
							    <label for="floatingInput">Postcode</label>
							</div>
							<!--end::Input group-->
						</div>
						<div class="col-lg-4">
							<!--begin::Input-->
							{!!  Form::select('office_state', $state, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'State...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
					</div>
				</div>

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">Home Address</span></div>

				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-floating">
								{!!  Form::text('home_street', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Street</label>
							</div>
						</div>
					</div>
				</div>
				<div class="fv-row mb-10">
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('home_city', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							    <label for="floatingInput">City</label>
							</div>
							<!--end::Input group-->
						</div>
						<div class="col-lg-4">
							<!--begin::Input group-->
							<div class="form-floating">
							    {!!  Form::text('home_postcode', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'','id'=>'dob'))!!} 
							    <label for="floatingInput">Postcode</label>
							</div>
							<!--end::Input group-->
						</div>
						<div class="col-lg-4">
							<!--begin::Input-->
							{!!  Form::select('home_state', $state, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'State...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
					</div>
				</div>

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">Phone Number</span></div>

				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('office_phone', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Office</label>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('mobile_phone', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Mobile</label>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('home_phone', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Home (Optional)</label>
							</div>
						</div>
					</div>
				</div>

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">Email Address</span></div>

				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('official_email', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Official</label>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('personal_email', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Personal (Optional)</label>
							</div>
						</div>
						
					</div>
				</div>

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-300px fw-bold">Other Social Media Address (Optional)</span></div>

				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('facebook', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Facebook</label>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('twitter', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Twitter</label>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-floating">
								{!!  Form::text('other_social', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Others (Please Specify)</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Step 1-->
		<!--begin::Step 2-->
		<div data-kt-stepper-element="content">
			<!--begin::Wrapper-->
			<div class="w-100">
				<!--begin::Heading-->
				<div class="pb-10 pb-lg-15">
					<!--begin::Title-->
					<h2 class="fw-bolder text-dark">Academic & Specialisation</h2>
					<!--end::Title-->
					
				</div>
				<!--end::Heading-->
				<div class="mb-10 fv-row">
				<!--begin::Repeater-->
				<div id="kt_docs_repeater_academic">
				    <!--begin::Form group-->
				    <div class="form-group">
				        <div data-repeater-list="kt_docs_repeater_academic">
				            <div data-repeater-item>
				                <div class="form-group row mt-5">
				                    <div class="col-md-3">
				                         {!!  Form::select('type_id', $qualification, null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Type...','data-kt-repeater'=>'select2')) !!} 

				                        
				                    </div>
				                    <div class="col-md-3">
				                        <div class="form-floating">
											{!!  Form::text('qualification', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
											 <label for="floatingInput">Qualification</label>
										</div>
				                    </div>
				                    <div class="col-md-2">
				                        {!!  Form::selectYear('aca_year', date("Y"), date("Y")-65, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
				                    </div>
				                    <div class="col-md-3">
				                       <div class="form-floating">
											{!!  Form::text('institute', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
											 <label for="floatingInput">University/Institution</label>
										</div>
				                    </div>
				                    <div class="col-md-1">
				                        <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
				                            <i class="la la-trash-o fs-2"></i>
				                        </a>
				                       
				                    </div>
				                </div>
				            </div>
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
				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">Specialisation<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Any specialisation of your profession"></i></span></div>

				<div class="fv-row mb-10">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-floating mb-7">
								{!!  Form::text('specialization', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Specialisation (If any)</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-floating mb-7">
								{!!  Form::text('date_of_gazettement', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'','id'=>'date_of_gazettement'))!!} 
								 <label for="floatingInput">Date of Gazettement (If any)</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-floating mb-7">
								{!!  Form::text('nsr_no', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">NSR No (If any)</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-floating mb-7">
								{!!  Form::text('subspecialization', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Sub-speciality/area of interest (If any)</label>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Step 2-->
		<!--begin::Step 3-->
		<div data-kt-stepper-element="content">
			<!--begin::Wrapper-->
			<div class="w-100">
				<!--begin::Heading-->
				<div class="pb-10 pb-lg-12">
					<!--begin::Title-->
					<h2 class="fw-bolder text-dark">Professional Info</h2>
					<!--end::Title-->
					
				</div>
				<!--end::Heading-->
				<!--begin::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-6">
							<!--begin::Input-->
							 	 <label class="form-label">Year of first appointment <small>(Govt.)</small></label>
							 	 <select name="year_of_appt" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
								<option value="" @if(optional($talent)->year_of_appt==null) selected="" @endif></option>
								@for($i=date("Y");$i>date("Y")-65; $i--)
								<option value="{{$i}}" @if(optional($talent)->year_of_appt==$i) selected="" @endif>{{$i}}</option>
								@endfor
							</select>
						
						</div>
						<div class="col-lg-6">
							<!--begin::Input group-->
							 	 <label class="form-label">Year of confirmation <small>(Govt.)</small></label>
								<select name="year_of_conf" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
									<option value="" @if(optional($talent)->year_of_conf==null) selected="" @endif></option>
									@for($i=date("Y");$i>date("Y")-65; $i--)
									<option value="{{$i}}" @if(optional($talent)->year_of_conf==$i) selected="" @endif>{{$i}}</option>
									@endfor
								</select>
							<!--end::Input group-->
						</div>
						
					</div>
				</div>
				<div class="mb-10 fv-row">
					<!--begin::Label-->
					<label class="d-flex align-items-center form-label mb-3">Are you currently working at any division at MOH headquarters?
					</label>
					<!--end::Label-->
					<!--begin::Row-->
					<div class="row mb-2" data-kt-buttons="true">
						<!--begin::Col-->
						<div class="col">
							<!--begin::Option-->
							<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-3">
								<input type="radio" class="btn-check" name="headquarters" value="1" />
								<span class="fw-bolder fs-5">Yes</span>
							</label>
							<!--end::Option-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col">
							<!--begin::Option-->
							<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-3">
								<input type="radio" class="btn-check" name="headquarters" value="0" />
								<span class="fw-bolder fs-5">No</span>
							</label>
							<!--end::Option-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-400px fw-bolder">Previous designations started from 1st appoinment <small>(Govt.)</small></span></div>
					<!--end::Input group-->
				<div class="mb-10 fv-row">
					<!--begin::Repeater-->
					<div id="kt_docs_repeater_designation">
					    <!--begin::Form group-->
					    <div class="form-group">
					        <div data-repeater-list="kt_docs_repeater_designation">
					            <div data-repeater-item>
					                <div class="form-group row mt-5">
					                    <div class="col-md-4">
					                         <div class="form-floating">
												{!!  Form::text('prev_desig', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
												 <label for="floatingInput">Designation</label>
											</div>
					                        
					                    </div>
					                    <div class="col-md-3">
					                        <div class="form-floating">
												{!!  Form::text('prev_org', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
												 <label for="floatingInput">Organisation</label>
											</div>
					                    </div>
					                    <div class="col-md-2">
					                       	<div class="form-floating">
												{!!  Form::text('prev_start',null, array('class'=>'form-control','id'=>'kt_input_startdate','placeholder'=>''))!!} 
												 <label for="kt_input_startdate">Start Date</label>
											</div>
					                    </div>
					                   <div class="col-md-2">
					                       	<div class="form-floating">
												{!!  Form::text('prev_end',null, array('class'=>'form-control','id'=>'kt_input_enddate','placeholder'=>''))!!} 
												 <label for="kt_input_enddate">End Date</label>
											</div>
					                    </div>
					                   
					                    <div class="col-md-1">
					                        <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
					                            <i class="la la-trash-o fs-2"></i>
					                        </a>
					                       
					                    </div>
					                </div>
					            </div>
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

				<div class="mb-5 fv-row">
					<label class="d-flex align-items-center form-label mb-3">What is your highest managerial or leadership position throughout your service?
					</label>
					<!--end::Label-->
					<!--begin::Row-->
					<div class="row mb-2">
						<div class="col-lg-4">

						{!!  Form::select('managerial_id',$managerial,null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
						<div class="col-lg-3 managerial d-none">
							 <select name="managerial_year" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
								<option value="" @if(optional($talent)->managerial_year==null) selected="" @endif></option>
								@for($i=date("Y");$i>date("Y")-65; $i--)
								<option value="{{$i}}" @if(optional($talent)->managerial_year==$i) selected="" @endif>{{$i}}</option>
								@endfor
							</select>

						</div>
						<div class="col-lg-5 managerial d-none">
							<div class="form-floating">
								{!!  Form::text('managerial_remark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
								 <label for="floatingInput">Please state</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7">
					<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">CPD/NSR<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The last 3 years"></i></span></div>
						<div class="mb-10 fv-row row">
						<div id="kt_docs_repeater_cpdnsr">
						    <!--begin::Form group-->
						    <div class="form-group">
						        <div data-repeater-list="kt_docs_repeater_cpdnsr">
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
													{!!  Form::hidden('id', null)!!} 
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
					<div class="col-lg-5">
					<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">LNPT <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The last 3 years"></i></span></div>

						<div class="mb-10 fv-row row">
						<div id="kt_docs_repeater_lnpt">
						    <!--begin::Form group-->
						    <div class="form-group">
						        <div data-repeater-list="kt_docs_repeater_lnpt">
						            <div data-repeater-item>
						                <div class="form-group row mt-5">
						                     <div class="col-md-5">
					                         {!!  Form::selectYear('lnpt_year', date("Y"), date("Y")-4, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
					                        
					                    </div>
					                    <div class="col-md-4">
					                        <div class="form-floating">
												{!!  Form::hidden('id', null)!!} 
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
				</div>


				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">APC / Awards <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Year of Anugerah Perkhidmatan Cemerlang (APC) / Other awards (If applicable)"></i></span></div>

				<div class="mb-10 fv-row">
										<!--begin::Repeater-->
				<div id="kt_docs_repeater_apc">
				    <!--begin::Form group-->
				    <div class="form-group">
				        <div data-repeater-list="kt_docs_repeater_apc">
				            <div data-repeater-item>
				                <div class="form-group row mt-5">
				                    <div class="col-md-2">
				                         {!!  Form::selectYear('apc_year', date("Y"), date("Y")-65, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
				                        
				                    </div>
				                    <div class="col-md-5">
				                        <div class="form-floating">
											{!!  Form::text('apc_title', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
											 <label for="floatingInput">Title</label>
										</div>
				                    </div>
				                    
				                   
				                    <div class="col-md-1">
				                        <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
				                            <i class="la la-trash-o fs-2"></i>
				                        </a>
				                       
				                    </div>
				                </div>
				            </div>
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

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-400px fw-bolder">Area of Interest for TGP Project/ Research</span></div>

				<div class="mb-10 fv-row">
				<div id="kt_docs_repeater_interest">
				    <!--begin::Form group-->
				    <div class="form-group">
				        <div data-repeater-list="kt_docs_repeater_interest">
				            <div data-repeater-item>
				                <div class="form-group row mt-5">
				                    <div class="col-md-5">
				                         <div class="form-floating">
											{!!  Form::text('res_area', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
											 <label for="floatingInput">Area of Interest</label>
										</div>
				                        
				                    </div>
				                    <div class="col-md-5">
				                        <div class="form-floating">
											{!!  Form::text('res_title', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
											 <label for="floatingInput">Suggested Title</label>
										</div>
				                    </div>
				                   
				                   
				                    <div class="col-md-1">
				                        <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
				                            <i class="la la-trash-o fs-2"></i>
				                        </a>
				                       
				                    </div>
				                </div>
				            </div>
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

				<div class="separator separator-dotted border-dark my-10"></div>
				<div class="mb-10 fv-row">
					<label class="d-flex align-items-center form-label mb-3">What is your highest position in any committee you have been involved in for the past 2 years?
					</label>
					<!--end::Label-->
					<!--begin::Row-->
					<div class="row mb-2">
						<div class="col-lg-4">
							{!!  Form::select('committee_pos_id',$position,null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
						<div class="col-lg-3 committee d-none">
							  <select name="committee_year" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
								<option value="" @if(optional($talent)->committee_year==null) selected="" @endif></option>
								@for($i=date("Y");$i>date("Y")-65; $i--)
								<option value="{{$i}}" @if(optional($talent)->committee_year==$i) selected="" @endif>{{$i}}</option>
								@endfor
							</select>
						</div>
						<div class="col-lg-5 committee d-none">
							<div class="form-floating">
							{!!  Form::text('committee_remark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							<label for="floatingInput">Name of Committee</label>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-10 fv-row">
				<label class="d-flex align-items-center form-label mb-3">What is your highest position in any project/programme you have been involved in for the past 2 years?
				</label>
				<!--end::Label-->
				<!--begin::Row-->
				<div class="row mb-2">
					<div class="col-lg-4">

						{!!  Form::select('programme_pos_id',$position,null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
					</div>
					<div class="col-lg-3 programme d-none">
						<select name="programme_year" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
								<option value="" @if(optional($talent)->programme_year==null) selected="" @endif></option>
								@for($i=date("Y");$i>date("Y")-65; $i--)
								<option value="{{$i}}" @if(optional($talent)->programme_year==$i) selected="" @endif>{{$i}}</option>
								@endfor
							</select>
					</div>
					<div class="col-lg-5 programme d-none">
						<div class="form-floating">
						{!!  Form::text('programme_remark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
						<label for="floatingInput">Name of Project/Programme</label>
						</div>
					</div>
				</div>
			</div>

			<div class="mb-10 fv-row">
				<label class="d-flex align-items-center form-label mb-3">Are you involved in any NGO or voluntary work for the past 2 years?
				</label>
				<!--end::Label-->
				<!--begin::Row-->
				<div class="row mb-2">
					<div class="col-lg-3">
						{!!  Form::select('voluntary_id',['1' => 'YES', '0' =>'NO'], null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
					</div>
					<div class="col-lg-3 voluntary d-none">
						 <select name="voluntary_year" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
								<option value="" @if(optional($talent)->voluntary_year==null) selected="" @endif></option>
								@for($i=date("Y");$i>date("Y")-65; $i--)
								<option value="{{$i}}" @if(optional($talent)->voluntary_year==$i) selected="" @endif>{{$i}}</option>
								@endfor
							</select>
					</div>
					<div class="col-lg-3 voluntary d-none">
						<div class="form-floating">
						{!!  Form::text('voluntary_org', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
						<label for="floatingInput">State the organisation</label>
						</div>
					</div>
					<div class="col-lg-3 voluntary d-none">
						{!!  Form::select('voluntary_pos_id',$social,null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose Position..','data-hide-search'=>'true','data-control'=>'select2')) !!} 
					</div>
				</div>
			</div>

			<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">Research <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Please choose only 1 research"></i></span></div>
			<div class="mb-10 fv-row">
				<label class="d-flex align-items-center form-label mb-3">Are you involved in any research registered under National Medical Research Register (NMRR) for the past 2 years?
				</label>
				<!--end::Label-->
				<!--begin::Row-->
				<div class="row mb-5">
					<div class="col-lg-2">

						{!!  Form::select('research_id',[ ''=>'', '1' => 'YES', '0' =>'NO'], null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
					</div>
				</div>
				<div class="row mb-10">
					<div class="col-lg-4 research d-none">
						<div class="form-floating">
						    {!!  Form::select('research_role',[ ''=>'', '1' => 'Co-Investigator', '2' =>'Primary Investigator'], null, array('class'=>'form-select form-select-lg form-select-solid fs-6 pt-5','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2', 'id'=>'floatingSelect')) !!} 
						    <label for="floatingSelect">What is your role?</label>
						</div>
					</div>
					<div class="col-lg-5 research d-none">
						<div class="form-floating">
						{!!  Form::text('research_title', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
						<label for="floatingInput">Please state the title</label>
						</div>
					</div>
					<div class="col-lg-3 research d-none">
						<div class="form-floating">
						{!!  Form::text('research_nmrrid', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
						<label for="floatingInput">NMRR ID</label>
						</div>
					</div>
					</div>
					<div class="row mb-5 research d-none">	
					<label class="form-label">Did you present your research findings at any conference/seminar?</label>
								 
						<div class="col-lg-2">
							{!!  Form::select('present_id',[''=>'','1' => 'YES', '0' =>'NO'], null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
						<div class="col-lg-7 present d-none">
							<div class="form-floating">
							{!!  Form::text('present_remark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							<label for="floatingInput">If YES, please state the conference/seminar</label>
							</div>
						</div>
						<div class="col-lg-3 present d-none">
					 		<select name="present_year" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
								<option value=""></option>
								@for($i=date("Y");$i>date("Y")-65; $i--)
								<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</div>

					</div>
					<div class="row mb-5 research present d-none">	
						<div class="col-lg-2 present d-none">
							{!!  Form::select('present_type',[ ''=>'', 'Oral' => 'Oral', 'Poster' =>'Poster','Others'=>'Others'], null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Presentation Type...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
						<div class="col-lg-5 present d-none">
							<div class="form-floating">
							{!!  Form::text('present_title', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							<label for="floatingInput">Please state the title</label>
							</div>
						</div>
						<div class="col-lg-5 present d-none">
							<div class="form-floating">
							{!!  Form::text('present_venue', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							<label for="floatingInput">Please state the venue</label>
							</div>
						</div>

					</div>
					<div class="row mb-10 research d-none">	
					<label class="form-label">Did you publish your research findings at any journal or as a technical report?</label>
								 
						<div class="col-lg-2">
							{!!  Form::select('publish_id',[''=>'','1' => 'YES', '0' =>'NO'], null, array('class'=>'form-select form-select-lg form-select-solid','data-placeholder'=>'Choose...','data-hide-search'=>'true','data-control'=>'select2')) !!} 
						</div>
					</div>
					<div class="row mb-10 research d-none">	
						<div class="col-lg-5 publish d-none">
							<div class="form-floating">
							{!!  Form::text('publish_remark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							<label for="floatingInput">If YES, please state the journal or the technical report</label>
							</div>
						</div>
						<div class="col-lg-5 publish d-none">
							<div class="form-floating">
							{!!  Form::text('publish_title', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
							<label for="floatingInput">Please state the title</label>
							</div>
						</div>
						<div class="col-lg-2 publish d-none">
							<select name="publish_year" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Year..">
								<option value=""></option>
								@for($i=date("Y");$i>date("Y")-65; $i--)
								<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</div>
					</div>
				</div>

			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Step 3-->
		<!--begin::Step 4-->
		<div data-kt-stepper-element="content">
			<!--begin::Wrapper-->
			<div class="w-100">
				<!--begin::Heading-->
				<div class="pb-10 pb-lg-15">
					<!--begin::Title-->
					<h2 class="fw-bolder text-dark">Personal Statement</h2>
					<!--end::Title-->
					<!--begin::Notice-->
					<div class="text-muted fw-bold fs-6">Key in your personal statement below and then upload your <a href="#" class="text-primary fw-bolder">CPD Log Book</a>.</div>
					<!--end::Notice-->
				</div>
				<!--end::Heading-->
				<div class="row mb-5">	
					<div class="col">
						<p>TGP strives to select the applicants with the highest potential to fulfil the aim of the MOH in developing future leaders among technical healthcare professionals. The Personal Statement is an opportunity for you to promote yourself to the TGP Selection Panel. The statement should be approximately 250 words in length and includes the following information:</p>


						<div class="d-flex flex-column">
						<ul>
							<li class="d-flex align-items-center py-2">
							<span class="bullet bg-primary me-3"></span>Why do you want to join TGP?
							</li>
							<li class="d-flex align-items-center py-2">
							<span class="bullet bg-primary me-3"></span> Why do you think TGP should select you?
							</li>
							<li class="d-flex align-items-center py-2">
							<span class="bullet bg-primary me-3"></span> What do you expect from TGP?
							</li>
							<li class="d-flex align-items-center py-2">
							<span class="bullet bg-primary me-3"></span> Where do you see yourself 5 years from now?
							</li>
							<li class="d-flex align-items-center py-2">
							<span class="bullet bg-primary me-3"></span> What is your proposed TGP project and why?
							</li>
						</ul>
						</div>
					</div>
				</div>

				<div class="fv-row mb-15">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						
						<div class="col-lg-12">
							<!--begin::Input group-->
							<!-- <div class="form-floating mb-7"> -->
							    {!!  Form::textarea('statement', null, array('class'=>'form-control','id'=>'statement','placeholder'=>'','rows'=>'3'))!!} 
							    <!-- <label for="statement">Personal Statement</label> -->
							<!-- </div> -->
							<!--end::Input group-->

						</div>
					</div>
				</div>

				<div class="separator separator-dotted separator-content border-dark my-10"><span class="w-200px fw-bolder">CPD Log Book</span></div>
				<div class="fv-row mb-15">
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label for="cpd_complete" class="form-label">Completed Year</label>
								<input class="form-control" name="cpd_complete" type="file" id="cpd_complete" accept = "application/pdf">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
							  <label for="cpd_current" class="form-label">Current Year (Optional)</label>
							  <input class="form-control" name="cpd_current" type="file" id="cpd_current" accept = "application/pdf">
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Step 4-->
		
		<!--begin::Actions-->
		<div class="d-flex flex-stack pt-10">
			<!--begin::Wrapper-->
			<div class="mr-2">
				<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
				<span class="svg-icon svg-icon-4 me-1">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
						<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->Back</button>
			</div>
			<!--end::Wrapper-->
			<!--begin::Wrapper-->
			<div>
				<button type="button" class="btn btn-light-warning me-3" id="draft">
				    <span class="indicator-label">
				        Save as draft
				    </span>
				    <span class="indicator-progress">
				        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
				    </span>
				</button>
				<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
					<span class="indicator-label">Submit
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 ms-2 me-0">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon--></span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
				<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
				<span class="svg-icon svg-icon-4 ms-1 me-0">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon--></button>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Actions-->
	</form>
	<!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Stepper-->


<x-slot name="scripts">
<script src="{{url('')}}/js/eform.js"></script>
<script>
	$('[name="year_of_appt"], [name="year_of_conf"], [name="managerial_year"], [name="committee_year"], [name="programme_year"], [name="voluntary_year"], [name="present_year"], [name="publish_year"], [name="voluntary_id"], [name="research_id"], [name="research_role"], [name="present_id"], [name="publish_id"]').val(null).trigger('change');
</script>
</x-slot>
</x-app-layout>