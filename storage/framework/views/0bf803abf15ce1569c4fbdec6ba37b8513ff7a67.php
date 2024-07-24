<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'project']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
	Project
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Form
 <?php $__env->endSlot(); ?>

<?php echo Form::model($project, array('route' => ['update.project', $project->id], 'method'=>'PATCH', 'id' => 'kt_add_course_form')); ?>

<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bolder">Project</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Input group-->
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-5 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">TGP Project Title</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::textarea('title',null,['class'=>'form-control form-control-solid rounded-3 mb-2','rows'=>2]); ?>

				<!--end::Input-->
				<div class="text-muted fs-7">Same as in NMRR.</div>
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Type</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::select('type_id', [1=>'Research',2=>'QA Project'], null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'placeholder'=>'Select...', 'data-hide-search'=>'true', 'data-allow-clear'=>'true' ]); ?>

				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-3 fv-row research <?php if($project->type_id==2): ?> d-none <?php endif; ?>">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">NMRR ID</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('nmrr_id',null,['class'=>'form-control form-control-solid','required']); ?>

				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-2 fv-row research <?php if($project->type_id==2): ?> d-none <?php endif; ?>">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">Date of MREC Approval</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('mrecapp_date',null,['class'=>'form-control form-control-solid mb-2','id'=>'mrec' ]); ?>

				<!--end::Input-->
				<div class="text-muted fs-7">If any.</div>
			</div>
			<!--end::Col-->
			
		</div>
		<!--end::Input group-->
		<!--begin::Invoice footer-->
		<div class="d-flex flex-column mb-10 fv-row">
			<!--begin::Label-->
			<div class="fs-6 fw-bold mb-2">Name of Co-Investigator & their workplace</div>
			<!--end::Label-->
			<?php echo Form::textarea('coinvestigator',null,['class'=>'form-control form-control-solid rounded-3 mb-2','rows'=>2 ]); ?>

				<div class="text-muted fs-7">If possible.</div>

		</div>
		<!--end::Invoice footer-->
		
	</div>
	<!--end::Card body-->
</div>
<!--end::Card-->

<div class="d-flex justify-content-end">
	<!--begin::Button-->
	<a href="<?php echo e(url('talent/project')); ?>" id="kt_add_product_cancel" class="btn btn-light me-5">Cancel</a>
	<!--end::Button-->
	<!--begin::Button-->
	<button type="submit" id="kt_add_product_submit" class="btn btn-primary">
		<span class="indicator-label">Submit</span>
		<span class="indicator-progress">Please wait...
		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
	</button>
	<!--end::Button-->
</div>
 <?php echo Form::close(); ?>



 <?php $__env->slot('scripts', null, []); ?> 
<script>

"use strict";
var KTAppEcommerceSaveProduct = function() {

	return {
        init: function() {
        	(() => {
                let e;
                const t = document.getElementById("kt_add_course_form"),
                    o = document.getElementById("kt_add_product_submit");
                e = FormValidation.formValidation(t, {
                    fields: {
                        title: {
                            validators: {
                                notEmpty: {
                                    message: "Title is required"
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
                        	t.submit()) : Swal.fire({
                            html: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }))
            })()
		}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSaveProduct.init()
    $("#mrec").flatpickr();
     $('[name="type_id"]').on('change', function(e){
		if($(this).val()==1)
            $('.research').removeClass('d-none')
        else{
        	$('[name="nmrr_id"],[name="mrecapp_date"]').val('');
        	$('.research').addClass('d-none');
        }
	});
}));
</script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/talent/project-edit.blade.php ENDPATH**/ ?>