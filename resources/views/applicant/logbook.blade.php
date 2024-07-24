<x-app-layout>
<x-slot name="header">
	TGP Log Book
</x-slot>

<div class="card">
	<div class="card-header align-items-center border-0 mt-4">
		<h3 class="card-title align-items-start flex-column">
			<span class="fw-bolder mb-2 text-dark">COMPETENCY DOMAIN ASSESSMENT</span>
			<!-- <span class="text-muted fw-bold fs-7">890,344 Sales</span> -->
		</h3>
		
	</div>
	<!--begin::Card body-->
	<div class="card-body">
	<form action="{{route('add.selflogbook')}}" method="POST" id="kt_modal_new_target_form" method="POST">
	@csrf
        @php $disabled = (!$edit)? 'disabled':'' @endphp
		@php $i=0; @endphp
		@foreach($category as $cat)
		<div class="separator separator-content  mb-15 border-primary"><span class="w-300px fw-bolder">{{$cat->name}} ({{$cat->code}})</span></div>
		<div class="rounded border pt-10 px-10">
            <div class="row mb-2">
                <div class="col-8">

                </div>
                <div class="col-1">
                    <div class=" fs-8 fw-bold">Below Expectation</div>
                </div>
                <div class="col-2 ps-0 pe-0">
                    <div class="separator separator-dotted border-dark separator-content my-5 fs-8 fw-bold">Meet Expectation</div>
                </div>
                <div class="col-1">
                    <div class=" fs-8 text-end fw-bold">Above Expectation</div>
                </div>

            </div>
		@foreach($cat->logbook as $log)
		@php $i++; @endphp
		<div class="mb-10 fv-row">
			<!--begin::Row-->
			<div class="row mb-2" data-kt-buttons="true">
			<div class="col-2">
<span class="text-gray-600 fw-bold">{{$log->item}}</span>
			</div>
			<div class="col-6 pe-20">
			<!--begin::Label-->
			<label class="d-flex align-items-center form-label"><span class="bullet bullet-vertical me-5"></span>{{$log->remark}}
			</label>
			<!--end::Label-->
			</div>
			<div class="col">
				<div class="row fv-row">
				@for ($i=1;$i<=5;$i++)  
                @php 
                    $q = 'q'.$log->id; 
                    $tip = '';
                    if($i==1) $tip = 'Below Expectation';
                    if($i==3) $tip = 'Meet Expectation';
                    if($i==5) $tip = 'High Expectation';
                @endphp  
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-outline-primary btn-active-primary w-100 mt-3 p-2 @if($logbook->$q == $i) active @endif {{$disabled}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$tip}}">
                        <input type="radio" class="btn-check" name="q{{$log->id}}" value="{{$i}}" />
                        <span class="fw-bolder fs-5">{{$i}}</span>
                    </label>
                    <!--end::Option-->
                </div>
                @endfor
                <!--end::Col-->
			</div>
			<!--end::Row-->
			</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		@endforeach
		</div>
		<div class="mb-5">&nbsp;</div>
		@endforeach
		<div class="text-center">
		<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary {{$disabled}}">
			<span class="indicator-label">Submit</span>
			<span class="indicator-progress">Please wait...
			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
		</button>
	</div>
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
                q1: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q2: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q3: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q4: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q5: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q6: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q7: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q8: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q9: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q10: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q11: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q12: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q13: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q14: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q15: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q16: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q17: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q18: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q19: {
                    validators: {
                        notEmpty: {
                            message: "This field is required"
                        }
                    }
                },
                q20: {
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
    KTModalNewTarget.init()
}));
</script>
</x-slot>
</x-app-layout>