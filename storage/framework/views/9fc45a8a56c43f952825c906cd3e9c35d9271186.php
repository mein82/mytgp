<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'training']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
	User
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Form
 <?php $__env->endSlot(); ?>

<?php echo Form::open(array('route' => ['add.user'], 'method'=>'POST', 'id' => 'kt_add_course_form')); ?>

<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bolder">User</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Input group-->
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Email</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('email',null,['class'=>'form-control form-control-solid']); ?>

				<!--end::Input-->
				<?php echo $errors->first('email','<div class="fv-plugins-message-container invalid-feedback"><div data-field="email" data-validator="unique">:message</div></div>'); ?>

			</div>

			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">Username</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('username',null,['class'=>'form-control form-control-solid']); ?>

				<?php echo $errors->first('username','<div class="fv-plugins-message-container invalid-feedback"><div data-field="username" data-validator="unique">:message</div></div>'); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Name</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('name',null,['class'=>'form-control form-control-solid']); ?>


				<!--end::Input-->
			</div>
			<!--end::Col-->
			
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Designation</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('designation',null,['class'=>'form-control form-control-solid']); ?>

				<!--end::Input-->
			</div>

			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Scheme</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::select('scheme_id', $scheme, null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'data-placeholder'=>'Select', 'data-allow-clear'=>'true' ]); ?>

				<!--end::Input-->
			</div>
			
			<!--begin::Col-->
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Grade</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::select('grade_id', $grade, null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'data-placeholder'=>'Select', 'data-allow-clear'=>'true' ]); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Organization</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('organization',null,['class'=>'form-control form-control-solid']); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-8 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">Address</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('address',null,['class'=>'form-control form-control-solid']); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">Contact No</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('contactno',null,['class'=>'form-control form-control-solid']); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">Mobile</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('mobile',null,['class'=>'form-control form-control-solid']); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Group</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::select('group_id', $group, null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'data-placeholder'=>'Select', 'data-allow-clear'=>'true' ]); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-2 fv-row d-none programme">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Programme</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::select('programme_id', $programme, null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'data-placeholder'=>'Select', 'data-allow-clear'=>'true' ]); ?>

				<!--end::Input-->
			</div>
			<div class="col-md-3 fv-row d-none main-panel">
				<label class="fs-6 fw-bold mb-2">Main Panel?</label>
				<div class="form-check form-check-custom form-check-solid form-check-lg">
				    <input class="form-check-input h-40px w-40px" type="checkbox" name="main" value="1" id="flexCheckDefault"/>
				    <label class="form-check-label" for="flexCheckDefault">
				        Yes
				    </label>
				</div>
			</div>
			
			<!--end::Col-->
		</div>
		<!--end::Input group-->
		
		
	</div>
	<!--end::Card body-->
</div>
<!--end::Card-->

<div class="d-flex justify-content-end">
	<!--begin::Button-->
	<a href="<?php echo e(url('training')); ?>" id="kt_add_product_cancel" class="btn btn-light me-5">Cancel</a>
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
                        email: {
                            validators: {
                                emailAddress: {
                                	message: "The value is not a valid email address"
                            	},
	                            callback: {
	                                message: "Key in either Email or Username",
	                                callback: function(e) {
	                                	if ($('[name="username"]').val()=="" && e.value=='') return false
	                                }
	                            }
                            }
                        },
                        
                        username: {
                            validators: {
                                callback: {
	                                message: "Key in either Email or Username",
	                                callback: function(e) {
	                                    if ($('[name="email"]').val()=="" && e.value=='') return false
	                                }
	                            }
                            }
                        },
                        
                        name: {
                            validators: {
                                notEmpty: {
                                    message: "Name is required"
                                }
                            }
                        },
                        designation: {
                            validators: {
                                notEmpty: {
                                    message: "Designation Date is required"
                                }
                            }
                        },
                        scheme_id: {
                            validators: {
                                notEmpty: {
                                    message: "Scheme is required"
                                }
                            }
                        },
                        grade_id: {
                            validators: {
                                notEmpty: {
                                    message: "Grade is required"
                                }
                            }
                        },
                        organization: {
                            validators: {
                                notEmpty: {
                                    message: "Organization is required"
                                }
                            }
                        },
                        group_id: {
                            validators: {
                                notEmpty: {
                                    message: "Group is required"
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
                })),
                $(t.querySelector('[name="email"]')).on("keyup", (function() {
	                e.revalidateField("email"),e.revalidateField("username")
	            })),
                $(t.querySelector('[name="username"]')).on("keyup", (function() {
	                e.revalidateField("username"),e.revalidateField("email")
	            }))
            })()
		}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSaveProduct.init()
    $("#start").flatpickr();
	$("#end").flatpickr();
	$('[name="group_id"]').on('change', function(e){
        
    	if($(this).val()==5){
            $('.main-panel').removeClass('d-none');
            $('.programme').removeClass('d-none');
        }else{
            $("[name='main']").prop('checked', false); 
            $("[name='programme_id']").prepend('<option selected=""></option>').select2({placeholder: "Choose"});
			$('.main-panel').addClass("d-none");
			$('.programme').addClass("d-none");
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
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/secretariat/user-form.blade.php ENDPATH**/ ?>