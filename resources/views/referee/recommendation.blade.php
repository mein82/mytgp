<x-app-layout activemenu="">

<x-slot name="header">
Recommendation
</x-slot>

<div class="card">

	<!--begin::Card body-->
	<div class="card-body">
		<div class="d-flex align-items-center">
		<!--begin::User-->
			<div class="d-flex align-items-center flex-grow-1">
				<!--begin::Avatar-->
				<div class="symbol symbol-45px me-5">
					<img src="{{url('photo/'.$recommend->talent->user->avatar)}}" alt="">
				</div>
				<!--end::Avatar-->
				<!--begin::Info-->
				<div class="d-flex flex-column">
					<!--begin::Name-->
					<div class="d-flex align-items-center mb-2">
						<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{$recommend->talent->user->name}}</a>
					</div>
					<!--end::Name-->
					<!--begin::Info-->
					<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
						<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
						<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
						<span class="svg-icon svg-icon-4 me-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
								<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
							</svg>
						</span>
						<!--end::Svg Icon-->{{$recommend->talent->user->email}}</a>
						<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
						<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
						<span class="svg-icon svg-icon-4 me-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
								<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
							</svg>
						</span>
						<!--end::Svg Icon-->{{$recommend->talent->user->designation}}</a>
						<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
						<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
						<span class="svg-icon svg-icon-4 me-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
								<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
							</svg>
						</span>
						<!--end::Svg Icon-->{{$recommend->talent->user->organization}}</a>
						
					</div>
					<!--end::Info-->
				</div>
				<!--end::Info-->
			</div>
			<!--end::User-->
		</div>
		<div class="separator my-5"></div>

		{!! Form::model($recommend,array('route' => ['update.recommendation',$recommend->id], 'method'=>'PATCH', 'id' => 'kt_modal_new_target_form')) !!}

		@php $disabled = (!$edit)? 'disabled':'' @endphp
				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							<span class="required">Academic excellence</span>
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($recommend->academic==$i) active @endif {{$disabled}}"  data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('academic', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							<span class="required">Ability to excel in completing tasks</span>
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($recommend->completing_task==$i) active @endif {{$disabled}}"  data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('completing_task', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							<span class="required">Ability to express thoughts</span>
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<div class="fs-7 fw-bold text-muted">a) Verbal</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($recommend->express_verbally==$i) active @endif {{$disabled}}"  data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('express_verbally', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<div class="fs-7 fw-bold text-muted">b) Written</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($recommend->express_written==$i) active @endif {{$disabled}}"  data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('express_written', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							<span class="required">Ability to communicate with patients and peers</span>
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($recommend->communicate==$i) active @endif {{$disabled}}"  data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('communicate', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							<span class="required">Commitment to complete TGP programme</span>
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($recommend->commitment==$i) active @endif {{$disabled}}"  data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('commitment', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							<span class="required">Emotional stability and maturity</span>
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success @if($recommend->emotional==$i) active @endif {{$disabled}}"  data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('emotional', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->

				<!--begin::Input group-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="mb-3">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-5 fw-bold">
							<span class="required">General personal well being</span>
							<!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
						</label>
						<!--end::Label-->
						<!--begin::Description-->
						<!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="fv-row">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							@for ($i=1;$i<=6;$i++)	
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success  @if($recommend->personal==$i) active @endif {{$disabled}}" data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('personal', $i, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							{{getrecommend($i)}}</label>
							<!--end::Radio-->
							@endfor
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="d-flex flex-column mb-5 fv-row">
					<!--begin::Label-->
					<label class="fs-5 fw-bold mb-2">Other comments</label>
					<!--end::Label-->
					<!--begin::Input-->
					{!! Form::textarea('comment',null,['class'=>'form-control form-control-solid','rows'=>'2', $disabled]) !!}
					<!--end::Input-->
				</div>
				<!--end::Input group-->


				<div class="d-flex flex-column flex-lg-row rounded py-5 px-4 bg-light-info mb-8">
				<!--begin::Description-->
				<div class="text-gray-700 fw-bold fs-6 lh-lg p-5">
				<h4 class="fs-5 text-gray-800 w-bolder mb-6">Declaration of referee/proposer</h4>
					<p>
						I,
					</p>
					<!--begin::Row-->
					<div class="fv-row mb-5">
						<!--begin::Radio group-->
						<div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-info @if($recommend->status_id==1) active @endif {{$disabled}}" data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('status_id', 1, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							RECOMMEND</label>
							<!--end::Radio-->
							<!--begin::Radio-->
							<label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-info @if($recommend->status_id==2) active @endif {{$disabled}}" data-kt-button="true">
							<!--begin::Input-->
							{!!Form::radio('status_id', 2, null, ['class'=>'btn-check'])!!}
							<!--end::Input-->
							DO NOT RECOMMEND</label>
							<!--end::Radio-->
							
						</div>
						<!--end::Radio group-->
					</div>
					<!--end::Row-->
					<p class="mb-8">
						the above applicant for the Talent Grooming Programme for Technical Healthcare Professionals.
					</p>
					<p>
						I as the assessor of the above applicant hereby declare the information given by me is deemed honest and true to my knowledge and cannot be used in any legal proceeding against myself.
					</p>
				</div>
				<!--end::Description-->
				</div>

                <!--begin::Actions-->
					<div class="text-center">
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary {{$disabled}}">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->

				</form>
	</div>
	<!--end::Card body-->
</div>



<x-slot name="scripts">
<script>
var KTModalNewTarget = function() {
var t, e, n, a, o, i;
return {
    init: function() {
        (a = document.querySelector("#kt_modal_new_target_form"), t = document.getElementById("kt_modal_new_target_submit"),  n = FormValidation.formValidation(a, {
            fields: {
                academic: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                completing_task: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                express_verbally: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                express_written: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                communicate: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                commitment: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                emotional: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                personal: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                status_id: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
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
        }), t.addEventListener("click", (function(e) {
            e.preventDefault(), n && n.validate().then((function(e) {
                console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                    t.removeAttribute("data-kt-indicator"), t.disabled = !1, a.submit()
                }), 2e3)) : Swal.fire({
                    text: "Sorry, looks like there are some errors detected, please try again.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((function() {
                        KTUtil.scrollTop()
                    }))
            }))
        })))
    }
}
}();

KTUtil.onDOMContentLoaded((function() {
    KTModalNewTarget.init();
}));
</script>
</x-slot>
</x-app-layout>