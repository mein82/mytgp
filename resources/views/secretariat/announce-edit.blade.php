<x-app-layout activemenu="portal-announce">
<x-slot name="header">
	Announcement
</x-slot>
<x-slot name="subheader">
    Form
</x-slot>
{!! Form::model($announce,array('route' => ['update.announce',$announce->id], 'method'=>'PATCH', 'id' => 'kt_add_announce_form')) !!}
<!--begin::Card-->
<div class="card card-flush pt-3 mb-5 mb-lg-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bolder">Announcement</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Input group-->
		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-10 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Content</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::textarea('content',null,['class'=>'form-control form-control-solid rounded-3','id'=>'kt_docs_ckeditor_classic' ]) !!}
				<!--end::Input-->

				<div class="separator separator-dashed separator-content my-10">Button <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Leave blank if not applicable" aria-label="Leave this section blank blank if not applicable"></i></div>
				
				<!--begin::Repeater-->
				<div id="kt_docs_repeater_button">
					<!--begin::Form group-->
					<div class="form-group">
						<div data-repeater-list="kt_docs_repeater_button">
							@if(is_null($announce->button))
							<div data-repeater-item>
								<div class="form-group row mb-3">
									<div class="col-md-3">
										<input type="text" name="btn" class="form-control mb-2 mb-md-0" placeholder="Button Text" />
									</div>
									<div class="col-md-3">
										<input type="text" name="btn_url" class="form-control mb-2 mb-md-0" placeholder="URL" />
									</div>
									
									<div class="col-md-4">
										<a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3">
											<i class="la la-trash-o"></i>Delete
										</a>
									</div>
								</div>
							</div>
							@else
							@php
								$btn = json_decode($announce->button);
							@endphp
							@foreach($btn as $b)
							<div data-repeater-item>
								<div class="form-group row mb-3">
									<div class="col-md-3">
										<input type="text" name="btn" class="form-control mb-2 mb-md-0" placeholder="Button Text" value="{{$b->btn}}" />
									</div>
									<div class="col-md-3">
										<input type="text" name="btn_url" class="form-control mb-2 mb-md-0" placeholder="URL"  value="{{$b->btn_url}}"/>
									</div>
									
									<div class="col-md-4">
										<a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3">
											<i class="la la-trash-o"></i>Delete
										</a>
									</div>
								</div>
							</div>
							@endforeach

							@endif
						</div>
					</div>
					<!--end::Form group-->

					<!--begin::Form group-->
					<div class="form-group mt-5">
						<a href="javascript:;" data-repeater-create class="btn btn-light-primary">
							<i class="la la-plus"></i>Add
						</a>
					</div>
					<!--end::Form group-->
				</div>
				<!--end::Repeater-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-2 fv-row">
				<!--begin::Label-->
				<label class="fs-6 fw-bold mb-2">
					<span class="required">Status</span>
				</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::select('status_id', [1=>'Active',0=>'In-active'], null, ['class'=>'form-select form-select-solid fw-bolder','title'=>'Choose','data-control'=>'select2', 'aria-label' =>'','placeholder'=>'Select...', 'data-hide-search'=>'true']) !!}
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
	<a href="{{url('announce')}}" id="kt_add_announce_cancel" class="btn btn-light me-5">Cancel</a>
	<!--end::Button-->
	<!--begin::Button-->
	<button type="submit" id="kt_add_announce_submit" class="btn btn-primary">
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
                const t = document.getElementById("kt_add_announce_form"),
                    o = document.getElementById("kt_add_announce_submit");
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
                })), 
        		ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic'), {
                licenseKey: '',
                } )
                .then( editor => {
                    window.editor = editor;
            
                })
            })()
		}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSaveProduct.init()
}));

$('#kt_docs_repeater_button').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
</script>
</x-slot>
</x-app-layout>