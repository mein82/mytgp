<x-app-layout activemenu="">
<x-slot name="header">
	Structured CV
</x-slot>
@php $disabled = (!$edit)? 'disabled':'' @endphp
{!! Form::model($scv, array('route' => ['add.talentscv'], 'method'=>'POST', 'id'=>'kt_add_course_form')) !!}	 
<input type="hidden" name="series" value="{{$series}}">
<input type="hidden" name="status_id" value="">
<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
	<!--begin::General options-->
	<div class="card card-flush py-4">
		<!--begin::Card header-->
		<!-- <div class="card-header">
			<div class="card-title">
				<h2>General</h2>
			</div>
		</div> -->
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body">
			<!--begin::Alert-->
			<div class="alert bg-light-primary border border-primary border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
			    <!--begin::Icon-->
			    <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0">
			    	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
						<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"></path>
					</svg>
				</span>
			    <!--end::Icon-->

			    <!--begin::Wrapper-->
			    <div class="d-flex flex-column pe-0 pe-sm-10">
			        <!--begin::Title-->
			        <h5 class="mb-1">Additional information</h5>
			        <!--end::Title-->
			        <!--begin::Content-->
			        <span>Please fill in the following information for us to know you better. This section is to provide us with a more comprehensive understanding of your performance and achievement in both your work and personal domains. You may list down the information in each of the relevant sections below.</span>
			        <!--end::Content-->
			    </div>
			    <!--end::Wrapper-->

			   
			</div>
			<!--end::Alert-->


			<!--begin::Input group-->
			@php $p=0;@endphp
			<ol>
			@foreach($category as $item)
			<h3 class="mb-5 fs-4"><li>{{$item->title}}</li></h3>
			@foreach($item->question as $sub)
			@php $p++; 
			$q = 'q'.$p; 
			@endphp
			<div class="mb-10 fv-row ms-5 me-20">
				<!--begin::Label-->
				<label class="required form-label">{!!$sub->q!!}</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::textarea('q[]', $scv->$q??'',['class'=>'form-control form-control-solid rounded-2','rows'=>3 ,$disabled,'placeholder'=>$sub->example]) !!}
				
				<!--end::Input-->
				<!--begin::Description-->
				<!-- <div class="text-muted fs-7">A category name is required and recommended to be unique.</div> -->
				<!--end::Description-->
			</div>
			@endforeach
			<div class="separator separator-dashed border-gray-500 mb-10"></div>
			@endforeach
			</ol>
			<!--end::Input group-->
		</div>
		<!--end::Card header-->
	</div>
	<!--end::General options-->
	<!--end::Automation-->
	@if($edit)
		<div class="text-center">
		<button type="submit" id="kt_ecommerce_add_category_submit_draf" class="btn btn-warning me-5">
			<span class="indicator-label">Save Draft</span>
			<span class="indicator-progress">Please wait...
			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
		</button>
		<button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
			<span class="indicator-label">Submit</span>
			<span class="indicator-progress">Please wait...
			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
		</button>
        </div>
        @endif
        
</div>
<!--end::Main column-->

<x-slot name="scripts">
<script>

"use strict";
var KTAppEcommerceSaveProduct = function() {

	return {
        init: function() {
        	(() => {
                let e;
                const t = document.getElementById("kt_add_course_form"),
                    o = document.getElementById("kt_ecommerce_add_category_submit"),
                    s = document.querySelector("[name='status_id']"),
                    d = document.getElementById("kt_ecommerce_add_category_submit_draf");
                e = FormValidation.formValidation(t, {
                    fields: {
                        'q[]': {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
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
                        	s.value = 1, t.submit()) : Swal.fire({
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
                d.addEventListener("click", (a => {
                    a.preventDefault(), d.setAttribute("data-kt-indicator", "on"), o.disabled = !0, t.submit()
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