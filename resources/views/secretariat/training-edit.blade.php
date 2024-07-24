<x-app-layout activemenu="training">

<x-slot name="header">
	Calendar
</x-slot>
<x-slot name="subheader">
    Form
</x-slot>

{!! Form::model($course, array('route' => ['update.course', $course->id], 'method'=>'PATCH', 'id' => 'kt_add_course_form')) !!}
<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bolder">Courses</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Input group-->
		<!--begin::Input group-->
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Type</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::select('type_id', $type, null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'placeholder'=>'Select...', 'data-hide-search'=>'true', 'data-allow-clear'=>'true' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Platform</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::select('platform_id', [1=>'Physical','2'=>'Online'], null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'placeholder'=>'Select...', 'data-hide-search'=>'true', 'data-allow-clear'=>'true' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 fv-row domain @if($course->type_id>1) d-none @endif">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Domain</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::select('domain_id', $domain, null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'placeholder'=>'Select...', 'data-hide-search'=>'true', 'data-allow-clear'=>'true' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
		</div>
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-8 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Title</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('title',null,['class'=>'form-control form-control-solid']) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Start Date</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('start_date',null,['class'=>'form-control form-control-solid','required','id'=>'start' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">End Date</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('end_date',null,['class'=>'form-control form-control-solid','id'=>'end' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->

		</div>
		<!--end::Input group-->
		<!--begin::Invoice footer-->
		<div class="d-flex flex-column mb-7 fv-row">
			<!--begin::Label-->
			<div class="fs-6 fw-bold mb-2">Remark</div>
			<!--end::Label-->
			{!! Form::textarea('remark',null,['class'=>'form-control form-control-solid rounded-3','rows'=>3 ]) !!}
		</div>
		<!--end::Invoice footer-->
		<!--begin::Input group-->
		<div class="py-2">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<div class="d-flex">
					<div class="symbol symbol-35px me-6">
                        <span class="symbol-label bg-light-success">
                            <i class="fas fa-solid fa-utensils text-success fs-2"></i>
                        </span>
                    </div>
					<div class="d-flex flex-column">
						<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Food Provided</a>
						<!-- <div class="fs-6 fw-bold text-gray-400">Plan properly your workflow</div> -->
					</div>
				</div>
				<div class="d-flex justify-content-end">
					<div class="form-check form-check-solid form-switch">
						{!! Form::checkbox('food_id',1 ,null,['class'=>'form-check-input w-45px h-30px','id'=>'food' ]) !!}
						<!-- <input class="form-check-input w-45px h-30px" type="checkbox" id="food" name="food_id" value="1"> -->
						<label class="form-check-label" for="food"></label>
					</div>
				</div>
			</div>
			<!--end::Item-->
			<div class="separator separator-dashed my-5"></div>
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<div class="d-flex">
					<div class="symbol symbol-35px me-6">
                        <span class="symbol-label bg-light-danger">
                            <i class="fas fa-solid fa-suitcase-rolling text-danger fs-2"></i>
                        </span>
                    </div>
					<div class="d-flex flex-column">
						<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Accomodation Provided</a>
						<!-- <div class="fs-6 fw-bold text-gray-400">Keep eye on on your Repositories</div> -->
					</div>
				</div>
				<div class="d-flex justify-content-end">
					<div class="form-check form-check-solid form-switch">
						{!! Form::checkbox('accomodation_id',1 ,null,['class'=>'form-check-input w-45px h-30px','id'=>'accomodation' ]) !!}
						<!-- <input class="form-check-input w-45px h-30px" type="checkbox" id="accomodation" name="accomodation_id" value="1"> -->
						<label class="form-check-label" for="accomodation"></label>
					</div>
				</div>
			</div>
			<!--end::Item-->
			<div class="separator separator-dashed my-5"></div>
			
		</div>
	</div>
	<!--end::Card body-->
</div>
<!--end::Card-->

<div class="d-flex justify-content-end">
	<!--begin::Button-->
	<a href="{{url('training')}}" id="kt_add_product_cancel" class="btn btn-light me-5">Cancel</a>
	<!--end::Button-->
	<!--begin::Button-->
	<button type="submit" id="kt_add_product_submit" class="btn btn-primary">
		<span class="indicator-label">Submit</span>
		<span class="indicator-progress">Please wait...
		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
	</button>
	<!--end::Button-->
</div>
 {!! Form::close()!!}

<x-slot name="scripts">
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
                        type_id: {
                            validators: {
                                notEmpty: {
                                    message: "Type is required"
                                }
                            }
                        },                        
                        platform_id: {
                            validators: {
                                notEmpty: {
                                    message: "Platform is required"
                                }
                            }
                        },                        
                        domain_id: {
                            validators: {
	                            callback: {
	                                message: "This field is required",
	                                callback: function(e) {
	                                    if($('[name="type_id"]').val()=="1")
	                                        return e.value!==""
	                                    return true

	                                }
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
    $("#start").flatpickr();
	$("#end").flatpickr();
	$('[name="type_id"]').on('change', function(e){
		if($(this).val()==1){
            $('.domain').removeClass('d-none')
		}
        else{
        	$('[name="domain_id"]').val('').trigger('change');
            $('.domain').addClass('d-none');
        }
	});
}));


</script>
</x-slot>
</x-app-layout>