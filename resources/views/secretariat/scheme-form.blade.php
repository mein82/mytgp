<x-app-layout activemenu="setting-code-scheme">
<x-slot name="header">
    Scheme
</x-slot>
<x-slot name="subheader">
    Form
</x-slot>
{!! Form::open(array('route' => ['add.scheme'], 'method'=>'POST', 'id' => 'kt_add_scheme_form')) !!}
<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title">
            <h2 class="fw-bolder">Scheme</h2>
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
                <label class="required fs-6 fw-bold mb-2">Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text('name',null,['class'=>'form-control form-control-solid']) !!}
                <!--end::Input-->
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
    <a href="{{url('scheme')}}" id="kt_add_scheme_cancel" class="btn btn-light me-5">Cancel</a>
    <!--end::Button-->
    <!--begin::Button-->
    <button type="submit" id="kt_add_scheme_submit" class="btn btn-primary">
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
                const t = document.getElementById("kt_add_scheme_form"),
                    o = document.getElementById("kt_add_scheme_submit");
                e = FormValidation.formValidation(t, {
                    fields: {
                        name: {
                            validators: {
                                notEmpty: {
                                    message: "Name is required"
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