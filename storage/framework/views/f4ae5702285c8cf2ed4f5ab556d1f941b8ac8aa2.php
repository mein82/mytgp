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
    Progress Form
 <?php $__env->endSlot(); ?>


<?php echo Form::open(array('route' => ['add.progress'], 'method'=>'POST', 'id' => 'kt_add_course_form','files'=>'true')); ?>


<input type="hidden" name="project_id" value="<?php echo e($project->id); ?>">
<!--begin::Layout-->
<div class="card card-docs mb-2">
								<!--begin::Card Body-->
	<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
		<!--begin::Layout-->
		<div class="d-flex flex-column flex-xl-row">
			<!--begin::Content-->
			<div class="flex-lg-row-fluid me-lg-15">
				<div class="fv-row mb-5">
					<div class="row">
					<div class="col-6">
					<div class="fs-6 fw-bold mb-2 required">Status</div>
					
					<?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!--begin:Option-->
					<label class="d-flex flex-stack mb-5 cursor-pointer">
					    <!--begin:Label-->
					    <span class="d-flex align-items-center me-2">
					        <!--begin:Info-->
					        <span class="d-flex flex-column">
					            <span class="fw-bolder fs-6"><?php echo e($item->name); ?></span>
					            <!-- <span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span> -->
					        </span>
					        <!--end:Info-->
					    </span>
					    <!--end:Label-->

					    <!--begin:Input-->
					    <span class="form-check form-check-custom form-check-solid">
					        <input class="form-check-input" type="checkbox"  name="project_status[]" value="<?php echo e($item->id); ?>"/>
					    </span>
					    <!--end:Input-->
					</label>
					<!--end::Option-->
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="col-6 ps-10 guidance-box h-250px hover-scroll-y">
				</div>
				</div>
					
				</div>
				<div class="d-flex flex-column mb-10 fv-row mb-5">
					<!--begin::Label-->
					<div class="fs-6 fw-bold mb-2 required">Description</div>
					<!--end::Label-->
					<?php echo Form::textarea('description',null,['class'=>'form-control form-control-solid rounded-3 mb-2','rows'=>5 ]); ?>

						<div class="text-muted fs-7">Please describe your current research status in detail.</div>

				</div>
				<div class="d-flex flex-column mb-10 fv-row mb-5">
					<!--begin::Label-->
					<div class="fs-6 fw-bold mb-2">Upload Document</div>
					<!--end::Label-->
					<input class="form-control" accept=".doc,.docx,.pdf" name="document" type="file">
				</div>

				<div class="d-flex flex-column mb-5 fv-row rounded-3 p-7 border border-dashed border-gray-500 bg-light-primary">
                                                    <!--begin::Label-->
				    <div class="fs-5 fw-bolder form-label mb-3">Send notification?
				    <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Click on checkbox below to send email notification to your supervisor."></i></div>
				    <!--end::Label-->
				    <!--begin::Checkbox-->
				    <label class="form-check form-check-custom form-check-solid">
				        <input class="form-check-input" type="checkbox" value="1" name="notify">
				        <span class="form-check-label text-gray-600">Inform your supervisor about your updates. </span>
				    </label>

				    
				    <!--end::Checkbox-->
				</div>

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
			</div>
			<!--end::Content-->
			<!--begin::Sidebar-->
			<div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
				<!--begin::Card-->
				<div class="card card-flush bg-light mb-0" data-kt-sticky="true" data-kt-sticky-name="docs-sticky-summary" data-kt-sticky-offset="{default: false, xl: '50px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95" style="">
					<!--begin::Card header-->
					<div class="card-header">
						<!--begin::Card title-->
						<div class="card-title">
							<h2>Project Detail</h2>

						</div>
						<!--end::Card title-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0 fs-6">
						<!--begin::Section-->
						<div class="mb-7">
							<!--begin::Title-->
							<h5 class="mb-4">Title</h5>
							<!--end::Title-->
							<!--begin::Details-->
							<div class="mb-0">
								<!--begin::Price-->
								<div class="fw-bold text-gray-600 mb-1"><?php echo e($project->title); ?></div>
								<!--end::Price-->
								<?php if($project->type_id==1 && $project->nmrr_id!=""): ?><span class="badge badge-info"><?php echo e($project->nmrr_id); ?></span><?php endif; ?>
							</div>
							<!--end::Details-->
						</div>
						<!--end::Section-->
						<?php if($project->type_id==1): ?>
						<!--begin::Seperator-->
						<div class="separator separator-dashed mb-7"></div>
						<!--end::Seperator-->
						<!--begin::Section-->
						<div class="mb-5">
							<!--begin::Title-->
							<h5 class="mb-4">MREC Approval Date</h5>
							<!--end::Title-->
							<!--begin::Details-->
							<div class="mb-0">
								<!--begin::Card info-->
								<div class="fw-bold text-gray-600 d-flex align-items-center"><?php echo e($project->mrecapp_date); ?>

								<!--end::Card info-->
								<!--begin::Card expiry-->
								<!--end::Card expiry-->
							</div>
							</div>
							<!--end::Details-->
						</div>
						<!--end::Section-->
						<?php endif; ?>
						<!--begin::Seperator-->
						<div class="separator separator-dashed mb-7"></div>
						<!--end::Seperator-->
						<!--begin::Section-->
						<div class="mb-10">
							<!--begin::Title-->
							<h5 class="mb-4">Co-Investigator</h5>
							<!--end::Title-->
							<!--begin::Details-->
							<div class="mb-0">
								<!--begin::Card info-->
								<div class="fw-bold text-gray-600 d-flex align-items-center"><?php echo e($project->coinvestigator); ?>

								<!--end::Card info-->
								<!--begin::Card expiry-->
								<!--end::Card expiry-->
							</div>
							</div>
							<!--end::Details-->
						</div>
						<!--end::Section-->
						
						<!--begin::Actions-->
						<div class="mb-0">
							<a href="<?php echo e(url('edit/'.$project->id.'/project')); ?>" class="btn btn-primary" id="kt_subscriptions_create_button">Edit Project</a>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Sidebar-->
		</div>
		<!--end::Layout-->
	</div>
	<!--end::Card Body-->
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
                        'project_status[]': {
                            validators: {
                                notEmpty: {
                                    message: "Status is required"
                                }
                            }
                        },
                        description: {
                            validators: {
                                notEmpty: {
                                    message: "Description is required"
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
    $('input[type=checkbox]').on('click', function() {
	  	$('.guidance-box').html('');
	  //if($('input[type=checkbox]:checked').length>0)  
	    //$('.guidance-box').addClass('p-t-10 p-r-20 p-b-10');
	    $('input[type=checkbox]:checked').each(function(index){
	      $.get('<?php echo e(url("")); ?>/guidance/' + $(this).val(), function(data) {
	               $('.guidance-box').append('<div class="border-bottom-dashed border-gray-500 border-2 pb-5 mb-5"><div class="text-info fw-bolder mb-2">'+data.name+'</div>'+data.guidance+'</div>');
	      });
	  });
	});
}));
</script>
 <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/talent/progress-form.blade.php ENDPATH**/ ?>