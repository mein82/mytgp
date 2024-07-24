{!! Form::model($talentcourse, array('route' => ['update.response', $talentcourse->id], 'method'=>'PATCH','id' => 'kt_add_response_form')) !!}
										<!--begin::Row-->
<div class="mb-3">
						<!--begin::Label-->
		<label class="d-flex align-items-center fs-6 fw-bold">
			<span class="required">Choose your response/confirmation.</span>
		</label>
		<!--end::Label-->
		<!--end::Description-->
	</div>
<div class="fv-row  mb-10">
	<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
		<!--begin::Radio-->
		<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($talentcourse->status_id == 1) active @endif" data-kt-button="true">
		<!--begin::Input-->
		{!! Form::radio('status_id', '1', null, ['class'=>'btn-check']) !!}
		<!--end::Input-->
		Accept</label>
		<!--end::Radio-->
		<!--begin::Radio-->
		<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($talentcourse->status_id == 2) active @endif" data-kt-button="true">
		<!--begin::Input-->
		{!! Form::radio('status_id', '2', null, ['class'=>'btn-check']) !!}
		<!--end::Input-->
		Reject</label>
		<!--end::Radio-->
		<!--begin::Radio-->
		<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-warning @if($talentcourse->status_id == 2) active @endif @if(is_null($talentcourse->status_id) || $talentcourse->status_id == 2) disabled @endif" data-kt-button="true">
		<!--begin::Input-->
		{!! Form::radio('status_id', '3', null, ['class'=>'btn-check']) !!}
		<!--end::Input-->
		Cancel</label>
		<!--end::Radio-->
	</div>
</div>
<div class="separator separator-dashed mb-10"></div>
<div class="accept @if(is_null($talentcourse->status_id) || $talentcourse->status_id != 1)) d-none @endif">
<!--begin:Option-->
@if($talentcourse->course->food_id==1)
<div class="fv-row mb-5">
<label class="d-flex flex-stack cursor-pointer">
    <!--begin:Label-->
    <span class="d-flex align-items-center me-2">
        <!--begin:Icon-->
        <span class="symbol symbol-50px me-6">
            <span class="symbol-label bg-light-success">
                <i class="fas fa-solid fa-carrot text-success fs-2"></i>
            </span>
        </span>
        <!--end:Icon-->

        <!--begin:Info-->
        <span class="d-flex flex-column">
            <span class="fw-bolder fs-6">Vegetarian?</span>
        </span>
        <!--end:Info-->
    </span>
    <!--end:Label-->

    <!--begin:Input-->
    <span class="form-check form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox"  name="food" value="1" @if($talentcourse->food == 1) checked="" @endif/>
    </span>
    <!--end:Input-->
</label>
<!--end::Option-->
</div>
@endif
@if($talentcourse->course->accomodation_id==1)
<div class="fv-row mb-5">
<!--begin:Option-->
<label class="d-flex flex-stack cursor-pointer">
    <!--begin:Label-->
    <span class="d-flex align-items-center me-2">
        <!--begin:Icon-->
        <span class="symbol symbol-50px me-6">
            <span class="symbol-label bg-light-danger">
                <i class="fas fa-solid fa-suitcase-rolling text-danger fs-2"></i>
            </span>
        </span>
        <!--end:Icon-->

        <!--begin:Info-->
        <span class="d-flex flex-column">
            <span class="fw-bolder fs-6">Need accomodation?</span>
            <span class="fs-7 text-muted">Only applicable to talent who works outside of Klang Valley and subjected to availability.</span>
        </span>
        <!--end:Info-->
    </span>
    <!--end:Label-->

    <!--begin:Input-->
    <span class="form-check form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" name="accomodation" value="1" @if($talentcourse->accomodation == 1) checked="" @endif/>
    </span>
    <!--end:Input-->
</label>
<!--end::Option-->
</div>
@endif
</div>

<div class="remark @if(is_null($talentcourse->status_id) || $talentcourse->status_id == 1) d-none @endif">
<!--begin::Invoice footer-->
<div class="d-flex flex-column mb-10 fv-row">
	<!--begin::Label-->
	<div class="fs-6 fw-bold mb-2 required">Remark/Reason</div>
	<!--end::Label-->
	{!! Form::textarea('reason',null,['class'=>'form-control form-control-solid rounded-3','rows'=>3 ]) !!}
</div>
<!--end::Invoice footer-->
</div>
	<div class="d-flex justify-content-end">
	<!--begin::Button-->
	<button type="submit" id="kt_add_response_submit" class="btn btn-primary">
		<span class="indicator-label">Submit</span>
		<span class="indicator-progress">Please wait...
		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
	</button>
	<!--end::Button-->
</div>
{!! Form::close()!!}

<script>
"use strict";
var KTAppEcommerceSaveProduct1 = function() {
	var t = document.getElementById("kt_add_response_form"),
                    o = document.getElementById("kt_add_response_submit");
	return {
        init: function() {
        	    let e;
                e = FormValidation.formValidation(t, {
                    fields: {
                        reason: {
                            validators: {
                                callback: {
	                                message: "Remark is required",
	                                callback: function(e) {
	                                	// console.log($('[name="status_id"]:checked').val());
	                                	if(($('[name="status_id"]:checked').val()==2 || $('[name="status_id"]:checked').val()==3) && $('[name="reason"]').val()==""){
		                                    return 1;
                                        }
	                                }
	                            }
                            }
                        },
                        status_id: {
                            validators: {
                                notEmpty: {
                                    message: "Status is required"
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

            
		}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTApp.init()
    KTAppEcommerceSaveProduct1.init()

	$("[type='radio']").on('click', function (e) {
		$("input:radio").removeAttr("checked");
		$(this).attr('checked', true);
		console.log($(this).siblings().length);
		if($(this).val()==1){
			$('.accept').removeClass('d-none');
			$('.remark').addClass('d-none');
		}else{
			$('[type="checkbox"]').prop("checked", false);

			$('.accept').addClass('d-none');
			$('.remark').removeClass('d-none');
		}
	});

}));
</script>
