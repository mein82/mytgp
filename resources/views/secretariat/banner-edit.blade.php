<x-app-layout activemenu="portal-banner">
<x-slot name="header">
	Banner
</x-slot>
<x-slot name="subheader">
    Form
</x-slot>
{!! Form::model($banner, array('route' => ['update.banner', $banner->id], 'method'=>'PATCH', 'id' => 'kt_add_banner_form','files'=>'true')) !!}
<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bolder">Banner</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Input group-->
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-6 fv-row">
				<div class="separator separator-dashed separator-content my-15">IMAGE</div>
				@if($banner->filename!='')
				<div class="overlay mt-8">
					<!--begin::Image-->
					<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-200px" style="background-image:url('{{url('web/'.$banner->filename)}}')"></div>
					<!--end::Image-->
					<!--begin::Links-->
					<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
						<a href="{{url('destroy/banner/'.$banner->filename)}}" class="btn btn-primary">Remove</a>
					</div>
					<!--end::Links-->
				</div>	
				@else
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">File upload</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::file('filename',['class'=>'form-control', 'accept'=>'.png,.jpg,.jpeg']) !!}
				<!--end::Input-->
				@endif
				<div class="separator separator-dashed separator-content my-15">OR</div>
				
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">Link</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('link',null,['class'=>'form-control form-control-solid']) !!}
				<!--end::Input-->
				<div class="form-text">If you have uploaded the banner in other portals, get the URL and paste it here. Leave blank if you uploaded a file.</div>
			</div>
			<div class="col-md-6 fv-row">	

				<div class="separator separator-dashed separator-content my-15">URL</div>
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">Link Lable</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('link_lable',null,['class'=>'form-control form-control-solid']) !!}
				<!--end::Input-->
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2 mt-10">URL</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('url',null,['class'=>'form-control form-control-solid']) !!}
				<!--end::Input-->
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2 mt-10">
					<span class="required">Status</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::select('status_id', [1=>'Active',0=>'In-active'], null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'','placeholder'=>'Select...', 'data-hide-search'=>'true']) !!}
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
	<a href="{{url('banner')}}" id="kt_add_banner_cancel" class="btn btn-light me-5">Cancel</a>
	<!--end::Button-->
	<!--begin::Button-->
	<button type="submit" id="kt_add_banner_submit" class="btn btn-primary">
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
                const t = document.getElementById("kt_add_banner_form"),
                    o = document.getElementById("kt_add_banner_submit");
                e = FormValidation.formValidation(t, {
                    fields: {
                        status_id: {
                            validators: {
                                notEmpty: {
                                    message: "Status is required"
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
    const format = (item) => {
	    if (!item.id) {
	        return item.text;
	    }

	    var color =  item.element.getAttribute('data-kt-select2-color');
	    var img = $("<div>", {
	        class: "badge badge-circle me-2 "+color,
	        // text: "-"
	    });
	    var span = $("<span>", {
	        text: " " + item.text
	    });
	    span.prepend(img);
	    return span;
	}

	// Init Select2 --- more info: https://select2.org/
	$('#kt_docs_select2_color').select2({
	    templateResult: function (item) {
	        return format(item);
	    }
	});
}));


</script>
</x-slot>
</x-app-layout>