<x-app-layout activemenu="setting-notification">

<x-slot name="header">
	Notification
</x-slot>
<x-slot name="subheader">
    Form
</x-slot>
<div class="d-flex flex-column flex-lg-row">
	<!--begin::Content-->
	<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
<div class="card card-flush pt-5  mb-5 mb-lg-10" >
	<!--begin::Card body-->
	<div class="card-body p-6 fs-6 table-responsive">
		<div class="d-flex flex-column">
				
				<label class="required fs-6 fw-bold mb-2">Send to</label>

		<div class="d-flex flex-wrap mb-10">
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault1" value="1" @if($notify->public_id==1) checked="" @endif />
			    <label class="form-check-label" for="flexRadioDefault1">
			        All
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault2" value="2" @if($notify->public_id==2) checked="" @endif />
			    <label class="form-check-label" for="flexRadioDefault2">
			        Applicant
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault3" value="3" @if($notify->public_id==3) checked="" @endif />
			    <label class="form-check-label" for="flexRadioDefault3">
			        Referee
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault4" value="4" @if($notify->public_id==4) checked="" @endif />
			    <label class="form-check-label" for="flexRadioDefault4">
			        Talent
			    </label>
			</div>
			<div class="form-check form-check-custom form-check-solid me-5 mb-5">
			    <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault5" value="5" @if($notify->public_id==5) checked="" @endif />
			    <label class="form-check-label" for="flexRadioDefault5">
			        Supervisor
			    </label>
			</div>
		</div>
		<div class="col-3 fv-row mb-10 cohort d-none">
			<!--begin::Label-->
			<label class="fs-6 fw-bold mb-2">Cohort</label>
			<!--end::Label-->
			<!--begin::Input-->
			{!! Form::text('cohort',null,['class'=>'form-control']) !!}
			<!--end::Input-->
		</div>
		<!--begin::Search-->
		<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
			<!--begin::Form-->
			<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
				<!--begin::Hidden input(Added to disable form autocomplete)-->
				<input type="hidden" />
				<!--end::Hidden input-->
				<!--begin::Icon-->
				<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
				<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
						<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
				<!--end::Icon-->
				<!--begin::Input-->
				<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email to be added as recepient" data-kt-search-element="input" />
				<!--end::Input-->
				<!--begin::Spinner-->
				<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
					<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
				</span>
				<!--end::Spinner-->
				<!--begin::Reset-->
				<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</span>
				<!--end::Reset-->
			</form>
			<!--end::Form-->

			<div class="py-5">
				<div data-kt-search-element="results" class="d-none">
					<form  method="POST">
					@csrf<!--begin::Users-->

					<div class="mh-300px scroll-y me-n7 pe-7 select-user-list">
						
					</div>
					<div class="d-flex flex-center mt-15">
						<button type="reset" id="kt_modal_users_search_reset" class="btn btn-active-light me-3">Cancel</button>
						<button type="button" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
					</div>
					<!--end::Actions-->
				</form>
				</div>
				<!--end::Results-->
				<!--begin::Empty-->
				<div data-kt-search-element="empty" class="text-center d-none">
					<!--begin::Message-->
					<div class="fw-bold py-10">
						<div class="text-gray-600 fs-3 mb-2">No users found</div>
						<div class="text-muted fs-6">Try to search by username, full name or email...</div>
					</div>
					<!--end::Message-->
				</div>
				<!--end::Empty-->
			</div>
		</div>
		
	</div>
</div>
</div>

</div>
<div class="flex-column flex-lg-row-auto w-100 w-lg-700px w-xl-750px mb-10 order-1 order-lg-2">
		<!--begin::Card-->
		<div class="card card-flush pt-3 mb-0">
			<!--begin::Card body-->
			<div class="card-body pt-5 fs-5">
{!! Form::model($notify, array('route' => ['update.notification', $notify->id], 'method'=>'PATCH', 'id' => 'kt_add_course_form')) !!}
				{!! Form::hidden('public_id',null ) !!}

			<div class="d-flex flex-column">
		<label class=" fs-6 fw-bold mb-2">Selected users</label>

	<div id="kt_table_participant" class="fs-6 mb-10">
		<div class="mh-200px hover-scroll-y">
	<table class="table table-rounded table-striped border gy-3 gs-5 align-middle table-row-dashed table-row-gray-300 fs-6 mb-0" id="kt_roles_view_table">
	<tbody>
		@foreach($notify->notify as $not)
		<!--begin::User-->
<tr>
    <!--begin::ID-->
    <!--begin::User=-->
    <td>
    	<div class="d-flex align-items-center">
		<input type="hidden" name="user_id[]" value="{{$not->user->id}}">
	<!--end::Checkbox-->
	<!--begin::Avatar-->
	<div class="symbol symbol-35px symbol-circle">
		@if($not->user->avatar !='default.png')
		<img alt="Pic" src="{{url('')}}/photo/{{$not->user->avatar}}" />
		@else
		<span class="symbol-label bg-light-danger text-danger fw-bold">{{substr($not->user->name, 0,1)}}</span>
		@endif
	</div>
	<!--end::Avatar-->
	<!--begin::Details-->
	<div class="ms-5">
		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">{{$not->user->name}}</a>
		<div class="fw-bold text-muted">{{$not->user->email}}</div>
	</div>
	<!--end::Details-->
</div>
</td>
<td>
<!--end::Details-->
<!--begin::Access menu-->
	<div class="fw-bold">{{$not->user->organization}}</div>
	<div class="fw-bold text-muted">{{$not->user->contactno}}</div>

</td>
<!--end::Access menu-->
<td class="text-end"><button type="button" class="btn btn-light-danger btn-icon remove_super" id="kt_button_1" data-id="{{$not->id}}">
                    <span class="indicator-label">
                        <span class="svg-icon svg-icon-1 svg-icon-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                            </svg></span>
                    </span>
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button></div>
</td></tr>
		@endforeach
</tbody>
</table>
</div>

	</div>

		<div class="row g-9 mb-7">
			<!--begin::Col-->
			<div class="col-md-12 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Title</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('title',null,['class'=>'form-control form-control-solid']) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-3 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">Start Date</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('start_date',null,['class'=>'form-control form-control-solid','required','id'=>'start' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-3 fv-row">
				<!--begin::Label-->
				<label class="required fs-6 fw-bold mb-2">End Date</label>
				<!--end::Label-->
				<!--begin::Input-->
				{!! Form::text('end_date',null,['class'=>'form-control form-control-solid','id'=>'end' ]) !!}
				<!--end::Input-->
			</div>
			<!--end::Col-->
			<div class="col-md-3 fv-row">
				<label class="fs-6 fw-bold mb-2">Send email?</label>
				<div class="form-check form-check-custom form-check-solid form-check-lg">
				    <input class="form-check-input h-40px w-40px" type="checkbox" name="send" value="1" id="flexCheckDefault"/>
				    <label class="form-check-label" for="flexCheckDefault">
				        Yes
				    </label>
				</div>
			</div>
		</div>

		<div class="mb-10 fv-row">
			<!--begin::Label-->
			<div class="required fs-6 fw-bold mb-2">Content</div>
			<!--end::Label-->
			{!! Form::textarea('content',null,['class'=>'form-control form-control-solid rounded-3','id'=>'kt_docs_ckeditor_classic' ]) !!}
		</div>
		<div class="d-flex justify-content-end">
	<!--begin::Button-->
	<a href="{{url('training')}}" id="kt_add_product_cancel" class="btn btn-light me-5">Cancel</a>
	<!--end::Button-->
	<!--begin::Button-->
	<button type="submit" id="kt_add_product_submit" class="btn btn-primary">
		<span class="indicator-label">Submit</span>
		<span class="indicator-progress">Please wait...
		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
	</button>
	<!--end::Button-->
</div>
	</div>
{!!Form::close()!!}
</div>
</div>
</div>
</div>
	<!--end::Content-->


<x-slot name="scripts">
<script>
"use strict";
var KTModalUserSearch = function() {
    var e, t, n, s, a, f, c, d, g, h, yourArray = [], r = function(e) {
    		var key = document.querySelector('[data-kt-search-element="input"]').value;
    		var type = document.querySelector('[name="user_type"]:checked').value;
            setTimeout((function() {
                console.log(type)
                if(key!='')
                $.ajax({
                  method: "POST",
                  url: "{{route('user.search')}}",
                  data: { keyword : key, type: type }
                }).done(function( view ) {
                        "" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"))
                }),
         		e.complete()
            }), 2000)
        },
        o = function(e) {
            n.classList.add("d-none"), s.classList.add("d-none")
        }
        // $p = document.getElementById("kt_table_participant")

    return {
        init: function() {
        	(() => {
                let e;
                const t = document.getElementById("kt_add_course_form"),
                    o = document.getElementById("kt_add_product_submit");
                e = FormValidation.formValidation(t, {
                    fields: {
                        title: {
                            validators: {
                                notEmpty: {
                                    message: "Title is required"
                                }
                            }
                        },
                        start_date: {
                            validators: {
                                notEmpty: {
                                    message: "Start Date is required"
                                }
                            }
                        },
                        end_date: {
                            validators: {
                                notEmpty: {
                                    message: "End Date is required"
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
            })(),
            (e = document.querySelector("#kt_modal_users_search_handler")) && (e.querySelector('[data-kt-search-element="wrapper"]'), n = e.querySelector('[data-kt-search-element="results"]'), s = e.querySelector('[data-kt-search-element="empty"]'), (a = new KTSearch(e)).on("kt.search.process", r), a.on("kt.search.clear", o), document.querySelector('#kt_modal_users_search_reset').addEventListener("click", o), 
            	document.querySelectorAll('[name="user_type"]').forEach(d => { d.addEventListener("change", function(t) {
            		r(a)
            	})})), 
        		ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic'), {
                licenseKey: '',
                } )
                .then( editor => {
                    window.editor = editor;
            
                }),
                document.querySelector('#kt_modal_users_search_submit').addEventListener("click", function(t) {
                	d = $("[type='checkbox'][name='users[]']:checked"), d.each(function(e){
				    	yourArray.push($(this).val())	
					}), //console.log(d.closest('#wrapme')),
					d.closest('#wrapme').remove(),
					(yourArray.length>0)? $.ajax({
	                  method: "POST",
	                  url: "{{route('user.search')}}",
	                  data: { selected : yourArray }
	                }).done(function( view ) {
	                        // view.forEach(function(e) {
	                        // 	console.log(e.name), $('#kt_table_participant').find('tbody').append('<tr><td>'+e.name+'</td></tr>')
	                        // })
	                    yourArray = [],
	                    $('#kt_table_participant').find('tbody').append(view),
	                    (c = document.querySelectorAll(".remove_super"), c.forEach((e => {
	                    	e.addEventListener("click", (function() {
	                    	
			                    // e.setAttribute("data-kt-indicator", "on");
			                    var i = e.parentNode.parentNode.rowIndex;
	                    // console.log(i)
		  						(i>-1)?document.getElementById("kt_roles_view_table").deleteRow(i):false;
			                }))

		            	})))    
	                }):false
                }),
                (c = document.querySelectorAll(".remove_super"), c.forEach((e => {
                	e.addEventListener("click", (function() {
                	var id = e.getAttribute('data-id');
	       				$.ajax({
		                  type: "DELETE",
		                  url: "{{url('')}}/destroy/"+id+'/notify'
		                });
	                    var i = e.parentNode.parentNode.rowIndex;
	                    // console.log(i)
  						(i>-1)?document.getElementById("kt_roles_view_table").deleteRow(i):false;
	                }))

            	}))),
				document.querySelector('[name=cohort]').addEventListener("keyup", function(t) {
					$.ajax({
	                  method: "POST",
	                  url: "{{route('user.search')}}",
	                  data: { cohort : $(this).val(), type:4 }
	                }).done(function( view ) {
                        "" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"))
                	})
            	}) 
            
        }
    }
}();



KTUtil.onDOMContentLoaded((function() {
    KTModalUserSearch.init();
    $("#start").flatpickr();
	$("#end").flatpickr();
	$('[name="user_type"]').on('change click', function(e){
		$('[name="public_id"]').val($(this).val());
		$('[name="cohort"]').val('');
		if($(this).val()==4){
			$('.cohort').removeClass('d-none');
		}else{
			$('.cohort').addClass('d-none');
		}
	});	
}));
</script>
</x-slot>




</x-app-layout>