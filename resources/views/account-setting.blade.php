<x-app-layout activemenu="">
<x-slot name="header">
	Account Setting
</x-slot>
<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
		<!--begin::Card title-->
		<div class="card-title m-0">
			<h3 class="fw-bolder m-0">Profile Details</h3>
		</div>
		<!--end::Card title-->
	</div>
	<!--begin::Card header-->
	<!--begin::Content-->
	<div id="kt_account_settings_profile_details" class="collapse show">
		<!--begin::Form-->
		{!! Form::model(Auth::user(),array('route' => ['change.profile',Auth::user()->id], 'method'=>'POST', 'id' => 'kt_account_profile_details_form','files'=>'true')) !!}
			<!--begin::Card body-->
			<div class="card-body border-top p-9">
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<!--begin::Row-->
						<div class="row">
							<!--begin::Col-->
							<div class="col-lg-12 fv-row">
								{!! Form::text('name',null,['class'=>'form-control form-control-lg form-control-solid' ]) !!}
							</div>
							<!--end::Col-->
							
						</div>
						<!--end::Row-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-bold fs-6">Designation</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-4 fv-row">
						{!! Form::text('designation',null,['class'=>'form-control form-control-lg form-control-solid' ]) !!}
					</div>
					<div class="col-lg-2 fv-row">
						{!!  Form::select('scheme_id', $schemes, null , array('class'=>'form-select form-select-solid form-select-lg','title'=>'Scheme','data-control'=>'select2','placeholder'=>'Choose Scheme'))!!} 
					</div>
					<div class="col-lg-2 fv-row">
						{!!  Form::select('grade_id', $grades, null , array('class'=>'form-select form-select-solid form-select-lg','title'=>'Grade','data-control'=>'select2','placeholder'=>'Choose Grade'))!!} 
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label required fw-bold fs-6">Organization</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8 fv-row">
						{!! Form::text('organization',null,['class'=>'form-control form-control-lg form-control-solid' ]) !!}
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-6">
					<!--begin::Label-->
					<label class="col-lg-4 col-form-label fw-bold fs-6">
						<span class="required">Contact Phone</span>
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
					</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-4 fv-row">
						{!! Form::text('contactno',null,['class'=>'form-control form-control-lg form-control-solid','placeholder'=>'Office' ]) !!}
					</div>
					<div class="col-lg-4 fv-row">
						{!! Form::text('mobile',null,['class'=>'form-control form-control-lg form-control-solid','placeholder'=>'Mobile' ]) !!}
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
				
			</div>
			<!--end::Card body-->
			<!--begin::Actions-->
			<div class="card-footer d-flex justify-content-end py-6 px-9">
				<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
				<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
			</div>
			<!--end::Actions-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Content-->
</div>
<!--end::Basic info-->
<!--begin::Sign-in Method-->
<div class="card mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
		<div class="card-title m-0">
			<h3 class="fw-bolder m-0">Sign-in Method</h3>
		</div>
	</div>
	<!--end::Card header-->
	<!--begin::Content-->
	<div id="kt_account_settings_signin_method" class="collapse show">
		<!--begin::Card body-->
		<div class="card-body border-top p-9">
			<!--begin::Email Address-->
			<div class="d-flex flex-wrap align-items-center">
				<!--begin::Label-->
				<div id="kt_signin_email" class="@if ($errors->has('emailaddress') || $errors->has('confirmemailpassword')) d-none @endif">
					<div class="fs-6 fw-bolder mb-1">Email Address</div>
					<div class="fw-bold text-gray-600">{{Auth::user()->email}}</div>
				</div>
				<!--end::Label-->
				<!--begin::Edit-->
				<div id="kt_signin_email_edit" class="flex-row-fluid @if (!$errors->has('confirmemailpassword') && !$errors->has('emailaddress')) d-none @endif">
					<!--begin::Form-->
					{!! Form::open(array('route' => ['change.email'], 'method'=>'POST', 'id' => 'kt_signin_change_email')) !!}
						<div class="row mb-6">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<div class="fv-row mb-0">
									<label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Email Address</label>
									<input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="" />
									{!! $errors->first('emailaddress','<div class="fv-plugins-message-container invalid-feedback"><div data-field="emailaddress" data-validator="unique">:message</div></div>')!!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="fv-row mb-0">
									<label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
									<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
									{!! $errors->first('confirmemailpassword','<div class="fv-plugins-message-container invalid-feedback"><div data-field="confirmemailpassword" data-validator="MatchPassword">:message</div></div>')!!}
								</div>
							</div>
						</div>
						<div class="d-flex">
							<button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
							<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
						</div>
					{!! Form::close()!!}
					<!--end::Form-->
				</div>
				<!--end::Edit-->
				<!--begin::Action-->
				<div id="kt_signin_email_button" class="ms-auto @if ($errors->has('emailaddress') || $errors->has('confirmemailpassword')) d-none @endif">
					<button class="btn btn-light btn-active-light-primary">Change Email</button>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Email Address-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Password-->
			<div class="d-flex flex-wrap align-items-center mb-10">
				<!--begin::Label-->
				<div id="kt_signin_password" class="@if ($errors->has('currentpassword')) d-none @endif">
					<div class="fs-6 fw-bolder mb-1">Password</div>
					<div class="fw-bold text-gray-600">************</div>
				</div>
				<!--end::Label-->
				<!--begin::Edit-->
				<div id="kt_signin_password_edit" class="flex-row-fluid @if (!$errors->has('currentpassword')) d-none @endif">
					<!--begin::Form-->
					{!! Form::open(array('route' => ['change.password'], 'method'=>'POST', 'id' => 'kt_signin_change_password')) !!}
						<div class="row mb-1">
							<div class="col-lg-4">
								<div class="fv-row mb-0">
									<label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
									<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword"  value="" />
									{!! $errors->first('currentpassword','<div class="fv-plugins-message-container invalid-feedback"><div data-field="currentpassword" data-validator="MatchPassword">:message</div></div>')!!}
								</div>
							</div>
							<div class="col-lg-4">
								<div class="fv-row mb-0">
									<label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
									<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
								</div>
							</div>
							<div class="col-lg-4">
								<div class="fv-row mb-0">
									<label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
									<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" value=""  />
								</div>
							</div>
						</div>
						<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
						<div class="d-flex">
							<button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
							<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
						</div>
					{!! Form::close()!!}
					<!--end::Form-->
				</div>
				<!--end::Edit-->
				<!--begin::Action-->
				<div id="kt_signin_password_button" class="ms-auto @if ($errors->has('currentpassword')) d-none @endif">
					<button class="btn btn-light btn-active-light-primary">Reset Password</button>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Password-->
			
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Content-->
</div>
<!--end::Sign-in Method-->
<x-slot name="scripts">
<script>
	"use strict";
var KTAccountSettingsSigninMethods = {
    init: function() {
        var t, e;
        ! function() {
            var t = document.getElementById("kt_signin_email"),
                e = document.getElementById("kt_signin_email_edit"),
                n = document.getElementById("kt_signin_password"),
                o = document.getElementById("kt_signin_password_edit"),
                i = document.getElementById("kt_signin_email_button"),
                s = document.getElementById("kt_signin_cancel"),
                r = document.getElementById("kt_signin_password_button"),
                a = document.getElementById("kt_password_cancel");
            i.querySelector("button").addEventListener("click", (function() {
                l()
            })), s.addEventListener("click", (function() {
                l()
            })), r.querySelector("button").addEventListener("click", (function() {
                d()
            })), a.addEventListener("click", (function() {
                d()
            }));
            var l = function() {
                    t.classList.toggle("d-none"), i.classList.toggle("d-none"), e.classList.toggle("d-none")
                },
                d = function() {
                    n.classList.toggle("d-none"), r.classList.toggle("d-none"), o.classList.toggle("d-none")
                }
        }(), e = document.getElementById("kt_signin_change_email"), t = FormValidation.formValidation(e, {
                fields: {
                    emailaddress: {
                        validators: {
                            notEmpty: {
                                message: "Email is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    confirmemailpassword: {
                        validators: {
                            notEmpty: {
                                message: "Password is required"
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
            }), e.querySelector("#kt_signin_submit").addEventListener("click", (function(n) {
                n.preventDefault(), console.log("click"), t.validate().then((function(n) {
                    "Valid" == n ? swal.fire({
                        text: "Email changed.",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then((function() {
                        e.submit(), e.reset(), t.resetForm()
                    })) : swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    })
                }))
            })),
            function(t) {
                var e, n = document.getElementById("kt_signin_change_password");
                e = FormValidation.formValidation(n, {
                    fields: {
                        currentpassword: {
                            validators: {
                                notEmpty: {
                                    message: "Current Password is required"
                                }
                            }
                        },
                        newpassword: {
                            validators: {
                                notEmpty: {
                                    message: "New Password is required"
                                },
                                stringLength: {
                                    min: 8,
                                    message: 'The Password must be more than 8 characters',
                                },
                            }
                        },
                        confirmpassword: {
                            validators: {
                                notEmpty: {
                                    message: "Confirm Password is required"
                                },
                                identical: {
                                    compare: function() {
                                        return n.querySelector('[name="newpassword"]').value
                                    },
                                    message: "The password and its confirm are not the same"
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
                }), n.querySelector("#kt_password_submit").addEventListener("click", (function(t) {
                    t.preventDefault(), console.log("click"), e.validate().then((function(t) {
                        "Valid" == t ? swal.fire({
                            text: "Password reset.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then((function() {
                            n.submit(), n.reset(), e.resetForm()
                        })) : swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        })
                    }))
                }))
            }()
    }
};
KTUtil.onDOMContentLoaded((function() {
    KTAccountSettingsSigninMethods.init()
}));
</script>
</x-slot>
</x-app-layout>