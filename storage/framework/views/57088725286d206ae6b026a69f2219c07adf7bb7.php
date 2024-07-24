<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	TPG Log Book
 <?php $__env->endSlot(); ?>

<div class="card">
	<div class="card-header align-items-center border-0 mt-4">
		<h3 class="card-title align-items-start flex-column">
			<span class="fw-bolder mb-2 text-dark">COMPETENCY DOMAIN ASSESSMENT</span>
			<!-- <span class="text-muted fw-bold fs-7">890,344 Sales</span> -->
		</h3>
		
	</div>
	<!--begin::Card body-->
	<div class="card-body">
    <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5">
                    <img src="<?php echo e(url('photo/'.$talent->user->avatar)); ?>" alt="">
                </div>
                <!--end::Avatar-->
                <!--begin::Info-->
                <div class="d-flex flex-column">
                    <!--begin::Name-->
                    <div class="d-flex align-items-center mb-2">
                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1"><?php echo e($talent->user->name); ?></a>
                    </div>
                    <!--end::Name-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($talent->user->email); ?></a>
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
                                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($talent->user->designation); ?></a>
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($talent->user->organization); ?></a>
                        
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::User-->
                
	<form action="<?php echo e(route('add.reflogbook')); ?>" method="POST" id="kt_modal_new_target_form" method="POST">
	<?php echo csrf_field(); ?>
    <?php $disabled = (!$edit)? 'disabled':'' ?>
    <input type="hidden" name="talent_id" value="<?php echo e($talent->id); ?>">
    <input type="hidden" name="referee_id" value="<?php echo e(Auth::user()->id); ?>">

		<?php $i=0; ?>
		<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="separator separator-content  mb-15 border-primary"><span class="w-300px fw-bolder"><?php echo e($cat->name); ?> (<?php echo e($cat->code); ?>)</span></div>
		<div class="rounded border pt-10 px-10">
            <div class="row mb-2">
                <div class="col-8">

                </div>
                <div class="col-1">
                    <div class=" fs-8 fw-bold">Below Expectation</div>
                </div>
                <div class="col-2 ps-0 pe-0">
                    <div class="separator separator-dotted border-dark separator-content my-5 fs-8 fw-bold">Meet Expectation</div>
                </div>
                <div class="col-1">
                    <div class=" fs-8 text-end fw-bold">Above Expectation</div>
                </div>

            </div>
		<?php $__currentLoopData = $cat->logbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $i++; ?>
		<div class="mb-10 fv-row">
			<!--begin::Row-->
			<div class="row mb-2" data-kt-buttons="true">
			<div class="col-2">
<span class="text-gray-600 fw-bold"><?php echo e($log->item); ?></span>
			</div>
			<div class="col-6 pe-20">
			<!--begin::Label-->
			<label class="d-flex align-items-center form-label"><span class="bullet bullet-vertical me-5"></span><?php echo e($log->remark); ?>

			</label>
			<!--end::Label-->
			</div>
			<div class="col">
				<div class="row fv-row">
				<!--begin::Col-->
				<?php for($i=1;$i<=5;$i++): ?> 
                <?php 
                    $q = 'q'.$log->id; 
                    $tip = '';
                    if($i==1) $tip = 'Below Expectation';
                    if($i==3) $tip = 'Meet Expectation';
                    if($i==5) $tip = 'High Expectation';
                ?>  
                <div class="col">
					<!--begin::Option-->
					<label class="btn btn-outline btn-outline-dashed btn-outline-info btn-active-info w-100 mt-3 p-2 <?php if($logbook->$q == $i): ?> active <?php endif; ?> <?php echo e($disabled); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($tip); ?>">
						<input type="radio" class="btn-check" name="q<?php echo e($log->id); ?>" value="<?php echo e($i); ?>" />
						<span class="fw-bolder fs-5"><?php echo e($i); ?></span>
					</label>
					<!--end::Option-->
				</div>
				<?php endfor; ?>
                <!--end::Col-->
			</div>
			<!--end::Row-->
			</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<div class="mb-5">&nbsp;</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="text-center">
		<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary <?php echo e($disabled); ?>">
			<span class="indicator-label">Submit</span>
			<span class="indicator-progress">Please wait...
			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
		</button>
	</div>
	</form>
	</div>
	<!--end::Card body-->
</div>


 <?php $__env->slot('scripts', null, []); ?> 
<script>
var KTModalNewTarget = function() {
var t, e, n, a, o, i;
return {
    init: function() {
        (a = document.querySelector("#kt_modal_new_target_form"), t = document.getElementById("kt_modal_new_target_submit"),  n = FormValidation.formValidation(a, {
            fields: {
                q1: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q2: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q3: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q4: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q5: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q6: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q7: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q8: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q9: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q10: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q11: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q12: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q13: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q14: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q15: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q16: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q17: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q18: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q19: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q20: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
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
                    t.removeAttribute("data-kt-indicator"), t.disabled = !1, a.submit()
                }), 2e3)) : Swal.fire({
                    text: "Sorry, looks like there are some errors detected, please try again.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((function() {
                        KTUtil.scrollTop()
                    }))
            }))
        })))
    }
}
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalNewTarget.init()
}));
</script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/referee/logbook.blade.php ENDPATH**/ ?>