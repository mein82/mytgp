<x-app-layout activemenu="portal-publication">
<x-slot name="header">
	Publication
</x-slot>
<x-slot name="subheader">
    Form
</x-slot>
{!! Form::open(array('route' => ['add.publication'], 'method'=>'POST', 'id' => 'kt_add_publication_form','files'=>'true')) !!}
<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bolder">Publication</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Input group-->
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-8 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Title</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('title',null,['class'=>'form-control form-control-solid rounded-3']) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">File</label>
				<!--end::Label-->
				<!--begin::Input-->
				<input class="form-control" name="filename" type="file">
				<!--end::Input-->
			</div>
		</div>
			<!--end::Col-->
		<div class="row g-9 mb-7">
				<div class="col-md-8 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Description</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('description',null,['class'=>'form-control form-control-solid rounded-3']) !!}
				<!--end::Input-->
			</div>
			<!--begin::Col-->
			<div class="col-md-4 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Image</label>
				<!--end::Label-->
				<!--begin::Input-->
				<input class="form-control" name="image" type="file">
				<!--end::Input-->
			</div>
			<!--end::Col-->
		</div>
		</div>
		<!--end::Input group-->
		
		
	</div>
	<!--end::Card body-->


<div class="d-flex justify-content-end">
	<!--begin::Button-->
	<a href="{{url('publication')}}" id="kt_add_publication_cancel" class="btn btn-light me-5">Cancel</a>
	<!--end::Button-->
	<!--begin::Button-->
	<button type="submit" id="kt_add_publication_submit" class="btn btn-primary">
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
                const t = document.getElementById("kt_add_publication_form"),
                    o = document.getElementById("kt_add_publication_submit");
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
}));


</script>
</x-slot>
</x-app-layout>