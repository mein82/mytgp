<x-guest-layout>
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                    <!--begin::Logo-->
                    <a href="{{url('')}}" class="mb-12">
                        <img alt="Logo" src="{{url('logo/mytgp-logo.png')}}" class="h-100px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{route('login')}}" method="POST">
                             @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Sign In to MyTGP</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="{{url('register')}}">Create an Account</a></div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
@if ($errors->has('email')) 
<div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10">
    <!--begin::Icon-->
    <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
    <span class="svg-icon svg-icon-light svg-icon-2hx  me-4 mb-5 mb-sm-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"/>
<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
</svg></span>
    <!--end::Svg Icon-->
    <!--end::Icon-->
    <!--begin::Content-->
    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
        <!-- <h4 class="mb-2 text-light">This is an alert</h4> -->
        <span>{{$errors->first('email')}}</span>
    </div>
    <!--end::Content-->
    <!--begin::Close-->
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
        <span class="svg-icon svg-icon-2x svg-icon-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </button>
    <!--end::Close-->
</div>
@endif
    
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text" name="login" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <a href="{{url('forgot-password')}}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Continue</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                                
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
               
            </div>
            <!--end::Authentication - Sign-in-->
<x-slot name="scripts">        
        <script>
            "use strict";
var KTSigninGeneral = function() {
    var t, e, i;
    return {
        init: function() {
            t = document.querySelector("#kt_sign_in_form"), e = document.querySelector("#kt_sign_in_submit"), i = FormValidation.formValidation(t, {
                fields: {
                    login: {
                        validators: {
                            notEmpty: {
                                message: "Email address or username is required"
                            },
                            // emailAddress: {
                            //     message: "The value is not a valid email address"
                            // }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row"
                    })
                }
            }), e.addEventListener("click", (function(n) {
                n.preventDefault(), i.validate().then((function(i) {
                    "Valid" == i ? t.submit()
                    //  (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function() {
                    //     e.removeAttribute("data-kt-indicator"), e.disabled = !1, Swal.fire({
                    //         text: "You have successfully logged in!",
                    //         icon: "success",
                    //         buttonsStyling: !1,
                    //         confirmButtonText: "Ok, got it!",
                    //         customClass: {
                    //             confirmButton: "btn btn-primary"
                    //         }
                    //     }).then((function(e) {
                    //         e.isConfirmed && (t.querySelector('[name="email"]').value = "", t.querySelector('[name="password"]').value = "")
                    //     }))
                    // }), 2e3))
                     : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
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
    KTSigninGeneral.init()
}));
        </script>
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
</x-slot>

</x-guest-layout>