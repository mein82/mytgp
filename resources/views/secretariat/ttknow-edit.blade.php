<x-app-layout activemenu="ttknow">
<x-slot name="header">
	Things To Know
</x-slot>
<x-slot name="subheader">
    Form
</x-slot>
{!! Form::model($ttknow,array('route' => ['update.ttknow',$ttknow->id], 'method'=>'PATCH', 'id' => 'kt_add_coursetype_form','files'=>'true')) !!}
<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bolder">Things To Know</h2>
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
				<label class="required fs-6 fw-bold mb-2">Title</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('title',null,['class'=>'form-control form-control-solid']) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">File</label>
				<!--end::Label-->
				<a target="_blank" href="{{url('thingstoknow/'.$ttknow->url)}}" class="text-gray-800 text-hover-primary d-flex flex-column">
					<!--begin::Image-->
					<div class="symbol symbol-40px mb-5">
						<img src="{{url('')}}/assets/media/svg/files/pdf.svg" alt="">
					</div>
					<!--end::Image-->
				</a>
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 fv-row d-flex flex-column">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Image</label>
				<!--end::Label-->
				<!--begin::Input-->
				<!--begin::Symbol-->
                <div class="symbol symbol-60px symbol-2by3 me-4">
                    <div class="symbol-label" style="background-color: #98fbd1 ; background-size: 70% auto;  background-image: url('{{url('thingstoknow/'.$ttknow->image)}}')"></div>
                </div>
                <!--end::Symbol-->
				<!--end::Input-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Group Access</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::select('group_id[]', $group, null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'', 'placeholder'=>'Select...', 'data-hide-search'=>'true', 'data-allow-clear'=>'true','multiple'=>'multiple','id'=>'groups' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
		</div>
		
	</div>
	<!--end::Card body-->
</div>
<!--end::Card-->

<div class="d-flex justify-content-end">
	<!--begin::Button-->
	<a href="{{url('coursetype')}}" id="kt_add_coursetype_cancel" class="btn btn-light me-5">Cancel</a>
	<!--end::Button-->
	<!--begin::Button-->
	<button type="submit" id="kt_add_coursetype_submit" class="btn btn-primary">
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
                const t = document.getElementById("kt_add_coursetype_form"),
                    o = document.getElementById("kt_add_coursetype_submit");
                e = FormValidation.formValidation(t, {
                    fields: {
                        title: {
                            validators: {
                                notEmpty: {
                                    message: "Title is required"
                                }
                            }
                        },
                        filename: {
                            validators: {
                                notEmpty: {
                                    message: "File is required"
                                }
                            }
                        },
                        'group_id[]': {
                            validators: {
                                notEmpty: {
                                    message: "Groups is required"
                                }
                            }
                        },
                        image: {
                            validators: {
                                notEmpty: {
                                    message: "Image is required"
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
            })()
		}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSaveProduct.init();
    $('#groups').val([{{$ttknow->group_id}}]).trigger('change');
}));



</script>
</x-slot>
</x-app-layout>