<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	My Referees
 <?php $__env->endSlot(); ?>
<?php if($referees->count()<2): ?>
<!--begin::Card-->
<div class="card mb-7">
	<!--begin::Card body-->
	<div class="card-body">
	<div class="alert alert-warning d-flex align-items-center p-5 mb-10">
		<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
		<span class="svg-icon svg-icon-2hx svg-icon-warning me-4">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
				<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"></path>
			</svg>
		</span>
		<!--end::Svg Icon-->
		<div class="d-flex flex-column">
			<h4 class="mb-1 text-warning">Attention</h4>
				<span>Please type your referee name or email and add him/her as your referee. If your referee does not exist, please click on the <span class="badge badge-primary">Add New Referee</span> button and fill up the form to add him/her as your referee. You need to add at least <span class="text-danger fw-bolder">two (2)</span> referees. </span>
		</div>
	</div>				
	<!--begin::Search-->
	<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="3" data-kt-search-enter="false" data-kt-search-layout="inline">
		<!--begin::Form-->
		<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
			<!--begin::Hidden input(Added to disable form autocomplete)-->
			<input type="hidden" />
			<!--end::Hidden input-->
			<!--begin::Icon-->
			<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
			<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
					<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
			<!--end::Icon-->
			<!--begin::Input-->
			<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
			<!--end::Input-->
			<!--begin::Spinner-->
			<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
				<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
			</span>
			<!--end::Spinner-->
			<!--begin::Reset-->
			<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
				<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
						<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</span>
			<!--end::Reset-->
		</form>
		<!--end::Form-->
		<!--begin::Wrapper-->
		<div class="py-5">
			<!--begin::Results(add d-none to below element to hide the users list by default)-->
			<div data-kt-search-element="results" class="d-none">
			<form action="<?php echo e(route('add.referees')); ?>" method="POST" id="kt_modal_users_search_form">
			<?php echo csrf_field(); ?>
				<!--begin::Users-->
				<div class="mh-375px scroll-y me-n7 pe-7 select-user-list">
					
				</div>
				<!--end::Users-->
				<!--begin::Actions-->
				<div class="d-flex flex-center mt-15">
					<button type="reset" id="kt_modal_users_search_reset" class="btn btn-active-light me-3">Cancel</button>
					<button type="button" id="kt_modal_users_search_submit" class="btn btn-primary">
							<span class="indicator-label">Add Selected Users As Referee</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
				</div>
			</form>
				<!--end::Actions-->
			</div>
			<!--end::Results-->
			<!--begin::Empty-->
			<div data-kt-search-element="empty" class="text-center d-none">
				<!--begin::Message-->
				<div class="fw-bold py-10">
					<div class="text-gray-600 fs-3 mb-2">No users found</div>
					<!-- <div class="text-muted fs-6">Try to search by username, full name or email...</div> -->
				</div>
				<div class="d-flex flex-center">
					<button type="submit" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" class="btn btn-primary">Add New Referee</button>
				</div>
				<!--end::Message-->
				
			</div>
			<!--end::Empty-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Search-->

	</div>
	<!--end::Card body-->
</div>
<!--end::Card-->
<?php endif; ?>
<?php if($referees->count()>0): ?>
<div class="row g-6 g-xl-9">
	<!--begin::Col-->
	<div class="col-md-12 col-xxl-12">
<!--begin::Card-->
	<div class="card card-flush">
		<!--begin::Card body-->
		<div class="card-body pt-0">
			<!--begin::Table container-->
			<div class="table-responsive">
				<!--begin::Table-->
				<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
					<!--begin::Head-->
					<thead class="fs-7 text-gray-400 text-uppercase">
						<tr>
							<th class="min-w-250px">Referee</th>
							<th class="min-w-150px">Recommendation</th>
							<th class="min-w-90px">Assessment</th>
							<th class="min-w-50px text-end">Action</th>
						</tr>
					</thead>
					<!--end::Head-->
					<!--begin::Body-->
					<tbody class="fs-6">
						<?php $__currentLoopData = $referees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $i=0; ?>
						<tr>
							<td>
								<!--begin::User-->
								<div class="d-flex align-items-center">
									<!--begin::Wrapper-->
									<div class="me-5 position-relative">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<?php if($item->referee->avatar !='default.png'): ?>
											<img alt="Pic" src="<?php echo e(url('')); ?>/photo/<?php echo e($item->referee->avatar); ?>" />
											<?php else: ?>
											<span class="symbol-label bg-light-danger text-danger fw-bold"><?php echo e(substr($item->referee->name, 0,1)); ?></span>
											<?php endif; ?>
										</div>
										<!--end::Avatar-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Info-->
									<div class="d-flex flex-column justify-content-center">
										<a href="" class="mb-1 text-gray-800 text-hover-primary"><?php echo e($item->referee->name); ?></a>
										<div class="fw-bold fs-6 text-gray-400"><?php echo e($item->referee->email); ?></div>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
							</td>
							<td>
								<?php if(is_null($item->status_id)): ?> <?php $i++; ?><span class="badge badge-light-danger fw-bolder px-4 py-3">In progress</span>
								<?php else: ?> <span class="badge badge-light-success fw-bolder px-4 py-3">Completed</span> <?php endif; ?>
								<?php if(is_null($item->status_id)): ?>
								<a href="<?php echo e(route('email.referees', $item->id)); ?>" title="Resend Email to Referee" onclick="return confirm('Resend email. Are you sure?')" class="btn btn-sm btn-icon btn-light-info">
								<i class="bi bi-envelope-check-fill fs-5"></i>
								</a>
								<?php endif; ?>
								
							</td>
							<td>
								<?php if(!getRefLog($item->referee_id, $item->talent_id)): ?> <?php $i++; ?><span class="badge badge-light-danger fw-bolder px-4 py-3">In progress</span>
								<?php else: ?> <span class="badge badge-light-success fw-bolder px-4 py-3">Completed</span> <?php endif; ?>
								<?php if(!is_null($item->status_id) && !getRefLog($item->referee_id, $item->talent_id)): ?>
								<a href="<?php echo e(route('email.refereeassessment', $item->id)); ?>" title="Send Email to Referee" onclick="return confirm('Resend email. Are you sure?')" class="btn btn-sm btn-icon btn-light-info">
								<i class="bi bi-envelope-check-fill fs-5"></i>
								</a>
								<?php endif; ?>
							</td>
							<td class="text-end">
								<a href="<?php echo e(route('remove.referees', $item->id)); ?>" title="Delete Referee" onclick="return confirm('Delete referee. Are you sure?')" class="btn btn-sm btn-icon <?php if($i<2): ?> disabled btn-bg-light <?php else: ?> btn-light-danger <?php endif; ?>">
									<i class="la la-trash fs-5"></i>
								</a>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<!--end::Body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Table container-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
	</div>
</div>
<?php endif; ?>
<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form" class="form" action="<?php echo e(route('create.referees')); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Set New Referee</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-bold fs-5">System will automatically send an email to this referee to make reccomendation.</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Name</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Email</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Email will be sent to your referee using this address"></i>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="email" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Organization</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="organization" />
							</div>
							<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

 <?php $__env->slot('scripts', null, []); ?> 
<script>
"use strict";
var KTModalUserSearch = function() {
    var e, t, n, s, a,  r = function(e) {
    	
            setTimeout((function() {
                console.log(e.getInputElement().value)
                $.ajax({
                  method: "POST",
                  url: "<?php echo e(route('referee.search')); ?>",
                  data: { keyword : e.getInputElement().value }
                }).done(function( view ) {
                        "" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"))
                }),
         		e.complete()
            }), 1500)
        },
        o = function(e) {
            n.classList.add("d-none"), s.classList.add("d-none")
        };
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_users_search_handler")) && (e.querySelector('[data-kt-search-element="wrapper"]'), n = e.querySelector('[data-kt-search-element="results"]'), s = e.querySelector('[data-kt-search-element="empty"]'), (a = new KTSearch(e)).on("kt.search.process", r), a.on("kt.search.clear", o))
        }
    }
}();

var KTModalNewTarget = function() {
    var t, e, n, a, o, i, y, x;
    return {
        init: function() {
            (i = document.querySelector("#kt_modal_new_target")) && (o = new bootstrap.Modal(i), a = document.querySelector("#kt_modal_new_target_form"), t = document.getElementById("kt_modal_new_target_submit"), e = document.getElementById("kt_modal_new_target_cancel"),  n = FormValidation.formValidation(a, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: "This field is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    organization: {
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
            }),
            t.addEventListener("click", (function(e) {
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
                    })
                }))
            })), e.addEventListener("click", (function(t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then((function(t) {
                    t.value ? (a.reset(), o.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            }))), 
            y = document.getElementById("kt_modal_users_search_submit"),
            x = document.getElementById("kt_modal_users_search_form"),
            y.addEventListener("click", (function(e) {
            	var d = $("[type='checkbox'][name='users[]']:checked");
            	(d.length==0)?Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please choose at least one user.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }): (y.setAttribute("data-kt-indicator", "on"), y.disabled = !0, x.submit())
            }))
        }
    }
}();

KTUtil.onDOMContentLoaded((function() {
    KTModalUserSearch.init();
    KTModalNewTarget.init()
}));
</script>
 <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/applicant/referees.blade.php ENDPATH**/ ?>