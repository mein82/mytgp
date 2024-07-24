 <?php echo Form::model($talent, array('route' => ['status.update',$talent->id], 'method'=>'POST','id'=>'kt_formvalidation_status')); ?>


 <div class="w-100">
                    <!--begin::Input group-->
<div class="row fv-row mb-10">
    <!--begin::Col-->
    <div class="col-6">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
        <span>Talent ID</span>
    </label>
    <!--end::Label-->
    <!--begin::Input-->
    <?php echo Form::text('talent_code', $talent->talent->talent_code, array('class'=>'form-control form-control-lg form-control-solid','id'=>'talent_code')); ?> 
    <!--end::Input-->
    </div>
    <!--begin::Col-->
    <div class="col-6">
         <!--begin::Label-->
    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
        <span class="">Cohort</span>
    </label>
    <!--end::Label-->
        <?php echo Form::text('cohort',null, array('class'=>'form-control form-control-lg form-control-solid','id'=>'cohort')); ?> 
    </div>
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-10">
    <!--begin::Col-->
    <?php if($talent->talent->user->group_id==3): ?>
    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="required fs-6 fw-bold form-label mb-2">Status</label>
        <!--end::Label-->
        <!--begin::Row-->
        
                <?php echo Form::select('status_id', $status, null, array('class'=>'form-select form-select-solid','title'=>'Choose','id'=>'statusChange', 'data-control'=>"select2", 'data-hide-search'=>"true")); ?>

            
        </div>
        <?php else: ?>
        <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="required fs-6 fw-bold form-label mb-2">Status</label>
        <!--end::Label-->
        <!--begin::Row-->
        
                <?php echo Form::select('final_id', $final, null, array('class'=>'form-select form-select-solid','title'=>'Choose','id'=>'statusChange', 'data-control'=>"select2", 'data-hide-search'=>"true")); ?>

            
        </div>
        <?php endif; ?>
    <?php if($talent->talent->user->group_id==3): ?>
        <div class="col-3">
    <!--begin::Label-->
        <label class="fs-6 fw-bold form-label required">Convert To Talent?</label>
    <!--end::Label-->
    <!--begin::Switch-->
    <label class="form-check form-switch form-check-custom form-check-solid">
        <input class="form-check-input" name="convert" type="checkbox"/>
        <span class="form-check-label fw-bold text-muted">YES</span>
    </label>
    <!--end::Switch-->

        </div>

        <?php endif; ?>
        <div class="col-md-3">
        <label class="required fs-6 fw-bold form-label mb-2">Enrollment Year</label>

            <?php echo Form::selectYear('enrollment', date("Y")+1, date("Y")-3, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')); ?> 
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
<!--begin::Input group-->
<div class="row mb-10">
    <!--begin::Col-->
    <div class="col fv-row">
        <label class="fs-6 fw-bold form-label mb-2">Remark</label>
        <?php echo Form::textarea('remark', null, array('class'=>'form-control form-control-solid','data-kt-autosize'=>'true','rows'=>'2')); ?> 
    </div>
</div>
<!--begin::Actions-->
<div class="d-flex flex-row-reverse pt-10">
    <button type="button" class="btn btn-lg btn-primary" id="kt_formvalidation_text_submit">
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

</div>
</div>

 <?php echo Form::close(); ?>

<!--end::Input group-->
<?php /**PATH /var/www/html/mytgp/resources/views/secretariat/modal-applicant-selection.blade.php ENDPATH**/ ?>