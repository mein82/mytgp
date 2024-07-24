<x-app-layout activemenu="dashboard">

<x-slot name="header">
	Assessment
</x-slot>
<x-slot name="subheader">
    Talent Profile Update   
</x-slot>
@php
$talent = Auth::user()->talent;
@endphp

<form class="" novalidate="novalidate" id="kt_create_account_form" action="{{route('update.assprofile')}}" method="POST" enctype="multipart/form-data">
@csrf
{!!  Form::hidden('talent_id', $talent->id)!!} 

<!--begin::Card-->
<div class="card">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title fs-3 fw-bolder">Talent Profile Update</div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Form-->
    <form id="kt_project_settings_form" class="form">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Name</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{$talent->fullname}}" readonly/>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Talent ID</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <input type="text" class="form-control form-control-solid" name="talent_code" value="{{$talent->talent_code}}"  readonly/>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Programme</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4 fv-row">
                    <input type="text" class="form-control form-control-solid" name="talent_code" value="{{$talent->programme->name??''}}"  readonly/>
                </div>
            
                <!--begin::Col-->
                <div class="col-xl-2">
                    <div class="fs-6 fw-bold mt-2 mb-3">Cohort</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3 fv-row">
                    <input type="text" class="form-control form-control-solid" name="cohort" value="{{$talent->status->cohort??''}}" readonly/>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2">Previous Position (Pre-TGP)</div>
                    <div class="text-muted mb-3">Including grade and workplace</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <input type="text" class="form-control" name="old_position" value="{{$profile->old_position??$audit->position??''}}" />
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2">Current Position</div>
                    <div class="text-muted mb-3">Including grade and workplace</div>

                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <input type="text" class="form-control mb-2" name="curr_position" value="{{$profile->curr_position??$talent->user->fulldesignation}}" />
                    <div class="ms-1 text-gray-600">Example: Deputy Director (Clinical) UD54, Hospital A, Selangor</div>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">CPD Points/ NSR Points - For specialist (3 years)</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <!--begin::Form group-->
                    <div id="kt_docs_repeater_cpdnsr">
                        <div class="form-group">
                            <div data-repeater-list="kt_docs_repeater_cpdnsr">
                                @if($profile) 
                                @php  $cpdnsr = json_decode($profile->cpdnsr); @endphp
                                @foreach($cpdnsr as $item)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-3">
                                            {!!  Form::selectYear('cpdnsr_year', date("Y"), date("Y")-10, $item->cpdnsr_year, array('class'=>'form-select form-select-lg','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::text('cpdnsr_mark', $item->cpdnsr_mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">CPD/NSR</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                @php $i = 0; @endphp
                                @foreach($talent->cpdnsr->take(3) as $item)
                                @php $i++; @endphp
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-3">
                                            {!!  Form::selectYear('cpdnsr_year', date("Y"), date("Y")-10, $item->year, array('class'=>'form-select form-select-lg','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::text('cpdnsr_mark', $item->mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">CPD/NSR</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @if($i<3)
                                @for($j=$i; $j<3; $j++)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-3">
                                            {!!  Form::selectYear('cpdnsr_year', date("Y"),  date("Y")-10  , null, array('class'=>'form-select form-select-lg','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::text('cpdnsr_mark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">CPD/NSR</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">LNPT (3 years)</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row">

                    <!--begin::Form group-->
                    <div id="kt_docs_repeater_lnpt">
                        <div class="form-group">
                            <div data-repeater-list="kt_docs_repeater_lnpt">
                            @if($profile) 
                                @php  $lnpt = json_decode($profile->lnpt); @endphp
                                @foreach($lnpt as $item)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-3">
                                            {!!  Form::selectYear('lnpt_year', date("Y"),  date("Y")-10, $item->lnpt_year, array('class'=>'form-select form-select-lg','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::text('lnpt_mark', $item->lnpt_mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                @php $i = 0; @endphp
                                @foreach($talent->lnpt->take(3) as $item)
                                @php $i++; @endphp
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-3">
                                            {!!  Form::selectYear('lnpt_year', date("Y"),  date("Y")-10, $item->year, array('class'=>'form-select form-select-lg','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::text('lnpt_mark', $item->mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @if($i<3)
                                @for($j=$i; $j<3; $j++)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-3">
                                            {!!  Form::selectYear('lnpt_year', date("Y"),  date("Y")-10, null, array('class'=>'form-select form-select-lg','placeholder'=>'Year...','data-kt-repeater'=>'select2')) !!} 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                {!!  Form::text('lnpt_mark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3">Supervisors</div>
                    <div class="text-muted fs-7">Please provide email of latest supervisor for TGP-CM Assessment by Supervisor</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row">
                    <!-- <table class="table table-row-dashed table-row-gray-300 gy-5 mb-0"> -->
                        <!--begin::Form group-->
                    <div id="kt_docs_repeater_sv">
                        <div class="form-group">
                            <div data-repeater-list="kt_docs_repeater_sv">
                            @if($profile) 
                                @php  $supervisor = json_decode($profile->supervisor); @endphp
                                @foreach($supervisor as $item)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_name', $item->sv_name, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_email', $item->sv_email, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_remark', $item->sv_remark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Years</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                @endforeach
                                @if(count($supervisor)<1)
                                @for($j=0; $j<1; $j++)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_name', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_email', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_remark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Years</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                @endfor
                                @endif
                                @else
                                @php $i = 0; @endphp
                                @foreach($talent->supervisors as $super)
                                @php $i++; @endphp
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_name', $super->super->name, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_email', $super->super->email, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_remark', $super->remark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Years</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                @endforeach
                                @if($i<1)
                                @for($j=$i; $j<1; $j++)
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                            <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_name', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_email', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating">
                                                {!!  Form::text('sv_remark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>''))!!} 
                                                    <label for="floatingInput">Years</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                @endfor
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->
                        
                </div>
            </div>
            <!--end::Row-->
            
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
        </div>
        <!--end::Card footer-->
    </form>
    <!--end:Form-->
</div>
<!--end::Card-->
</form>

<x-slot name="scripts">
<script>
KTUtil.onDOMContentLoaded((function() {
    $('#kt_docs_repeater_lnpt, #kt_docs_repeater_cpdnsr, #kt_docs_repeater_sv').repeater({
      initEmpty: false,
      
      show: function () {
          $(this).slideDown();
          $(this).find('[data-kt-repeater="select2"]').select2().trigger('change');
      },

      hide: function (deleteElement) {
          $(this).slideUp(deleteElement);
      },
      ready: function(){}

    });
}))
</script>
</x-slot>
</x-app-layout>