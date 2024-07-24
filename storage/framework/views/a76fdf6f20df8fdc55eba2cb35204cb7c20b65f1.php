<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'setting-notification']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
	Notification
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Form
 <?php $__env->endSlot(); ?>
<div class="d-flex flex-column flex-lg-row">
	<!--begin::Content-->
	<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
<div class="card card-flush pt-5  mb-5 mb-lg-10" >
	<!--begin::Card body-->
	<div class="card-body p-6 fs-6 table-responsive">
		<div class="d-flex flex-column">
				
				<label class="required fs-6 fw-bold mb-2">Send to</label>

		<div class="d-flex flex-wrap mb-10">
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault1" value="1" checked />
			    <label class="form-check-label" for="flexRadioDefault1">
			        All
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault2" value="2" />
			    <label class="form-check-label" for="flexRadioDefault2">
			        Applicant
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault3" value="3" />
			    <label class="form-check-label" for="flexRadioDefault3">
			        Referee
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault4" value="4" />
			    <label class="form-check-label" for="flexRadioDefault4">
			        Talent
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault5" value="5" />
			    <label class="form-check-label" for="flexRadioDefault5">
			        Supervisor
			    </label>
			</div>
		</div>
		<!--begin::Search-->
		<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
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
				<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email to be added as recepient" data-kt-search-element="input" />
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

			<div class="py-5">
				<div data-kt-search-element="results" class="d-none">
					<form  method="POST">
					<?php echo csrf_field(); ?><!--begin::Users-->

					<div class="mh-300px scroll-y me-n7 pe-7 select-user-list">
						
					</div>
					<div class="d-flex flex-center mt-15">
						<button type="reset" id="kt_modal_users_search_reset" class="btn btn-active-light me-3">Cancel</button>
						<button type="button" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
					</div>
					<!--end::Actions-->
				</form>
				</div>
				<!--end::Results-->
				<!--begin::Empty-->
				<div data-kt-search-element="empty" class="text-center d-none">
					<!--begin::Message-->
					<div class="fw-bold py-10">
						<div class="text-gray-600 fs-3 mb-2">No users found</div>
						<div class="text-muted fs-6">Try to search by username, full name or email...</div>
					</div>
					<!--end::Message-->
				</div>
				<!--end::Empty-->
			</div>
		</div>
		
	</div>
</div>
</div>

</div>
<div class="flex-column flex-lg-row-auto w-100 w-lg-700px w-xl-750px mb-10 order-1 order-lg-2">
		<!--begin::Card-->
		<div class="card card-flush pt-3 mb-0">
			<!--begin::Card body-->
			<div class="card-body pt-5 fs-5">
<?php echo Form::open(array('route' => ['add.notification'], 'method'=>'POST', 'id' => 'kt_add_course_form')); ?>

<?php echo Form::hidden('public_id',null ); ?>

			<div class="d-flex flex-column">
		<label class=" fs-6 fw-bold mb-2">Selected users</label>

		<div id="kt_table_participant" class="fs-6 mb-10">
		<div class="mh-200px hover-scroll-y">
	<table class="table table-rounded table-striped border gy-3 gs-5 align-middle table-row-dashed table-row-gray-300 fs-6 mb-0" id="kt_roles_view_table">
	<tbody>
</tbody>
</table>
</div>

	</div>
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-12 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Title</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('title',null,['class'=>'form-control form-control-solid']); ?>

				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-3 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Start Date</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('start_date',null,['class'=>'form-control form-control-solid','required','id'=>'start' ]); ?>

				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-3 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">End Date</label>
				<!--end::Label-->
				<!--begin::Input-->
				<?php echo Form::text('end_date',null,['class'=>'form-control form-control-solid','id'=>'end' ]); ?>

				<!--end::Input-->
			</div>
			<!--end::Col-->
			<div class="col-md-3 fv-row">
				<label class="fs-6 fw-bold mb-2">Send email?</label>
				<div class="form-check form-check-custom form-check-solid form-check-lg">
				    <input class="form-check-input h-40px w-40px" type="checkbox" name="send" value="1" id="flexCheckDefault"/>
				    <label class="form-check-label" for="flexCheckDefault">
				        Yes
				    </label>
				</div>
			</div>
		</div>

		<div class="mb-10 fv-row">
			<!--begin::Label-->
			<div class="required fs-6 fw-bold mb-2">Content</div>
			<!--end::Label-->
			<?php echo Form::textarea('content',null,['class'=>'form-control form-control-solid rounded-3','id'=>'kt_docs_ckeditor_classic' ]); ?>

		</div>
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
	</div>
<?php echo Form::close(); ?>

</div>
</div>
</div>
</div>
	<!--end::Content-->


 <?php $__env->slot('scripts', null, []); ?> 
<script>
"use strict";
var KTModalUserSearch = function() {
    var e, t, n, s, a, f, c, d, g, h, yourArray = [], r = function(e) {
    		var key = document.querySelector('[data-kt-search-element="input"]').value;
    		var type = document.querySelector('[name="user_type"]:checked').value;
            setTimeout((function() {
                console.log(type)
                if(key!='')
                $.ajax({
                  method: "POST",
                  url: "<?php echo e(route('user.search')); ?>",
                  data: { keyword : key, type: type }
                }).done(function( view ) {
                        "" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"))
                }),
         		e.complete()
            }), 2000)
        },
        o = function(e) {
            n.classList.add("d-none"), s.classList.add("d-none")
        }
        // $p = document.getElementById("kt_table_participant")

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
                        },
                        start_date: {
                            validators: {
                                notEmpty: {
                                    message: "Start Date is required"
                                }
                            }
                        },
                        end_date: {
                            validators: {
                                notEmpty: {
                                    message: "End Date is required"
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
            })(),
            (e = document.querySelector("#kt_modal_users_search_handler")) && (e.querySelector('[data-kt-search-element="wrapper"]'), n = e.querySelector('[data-kt-search-element="results"]'), s = e.querySelector('[data-kt-search-element="empty"]'), (a = new KTSearch(e)).on("kt.search.process", r), a.on("kt.search.clear", o), document.querySelector('#kt_modal_users_search_reset').addEventListener("click", o), 
            	document.querySelectorAll('[name="user_type"]').forEach(d => { d.addEventListener("change", function(t) {
            		r(a)
            	})})), 
        		ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic'), {
                licenseKey: '',
                } )
                .then( editor => {
                    window.editor = editor;
            
                }),
                document.querySelector('#kt_modal_users_search_submit').addEventListener("click", function(t) {
                	d = $("[type='checkbox'][name='users[]']:checked"), d.each(function(e){
				    	yourArray.push($(this).val())	
					}), console.log(yourArray),d.closest('#wrapme').remove(),
					$.ajax({
	                  method: "POST",
	                  url: "<?php echo e(route('user.search')); ?>",
	                  data: { selected : yourArray }
	                }).done(function( view ) {
	                        // view.forEach(function(e) {
	                        // 	console.log(e.name), $('#kt_table_participant').find('tbody').append('<tr><td>'+e.name+'</td></tr>')
	                        // })
	                    yourArray = [],
	                    $('#kt_table_participant').find('tbody').append(view),
	                     (c = document.querySelectorAll(".remove_super"), c.forEach((e => {
			                e.addEventListener("click", (function() {
			       //          console.log(yourArray),
			       //          yourArray = yourArray.filter(function(value, index, arr){ 
						    //     return value != e.getAttribute('data-id');
						    // }),
						    // console.log(yourArray),
			                
			                    e.setAttribute("data-kt-indicator", "on");
			                    var i = e.parentNode.parentNode.rowIndex;
		  						document.getElementById("kt_roles_view_table").deleteRow(i);
			                }))

		            	})))     
	                })
                })
            
        }
    }
}();



KTUtil.onDOMContentLoaded((function() {
    KTModalUserSearch.init();
    $("#start").flatpickr();
	$("#end").flatpickr();
	$('[name="user_type"]').on('change', function(e){
		$('[name="public_id"]').val($(this).val());
	});	
}));
</script>
 <?php $__env->endSlot(); ?>




 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/secretariat/notification-form.blade.php ENDPATH**/ ?>