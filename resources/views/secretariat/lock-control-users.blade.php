<x-app-layout activemenu="setting-lock">

<x-slot name="header">
	Lock Control
</x-slot>
<x-slot name="subheader">
    Users
</x-slot>



<!--begin::Layout-->
<div class="d-flex flex-column flex-lg-row">
	<!--begin::Content-->
	<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
		<div class="card card-flush pt-3 mb-0" >
			<!--begin::Card body-->
			<div class="card-body p-6 fs-6 table-responsive">
				<!--begin::Search-->
				<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
					<!--begin::Form-->
					<form data-kt-search-element="form" class="" autocomplete="off">
						<!--begin::Hidden input(Added to disable form autocomplete)-->
						<input type="hidden" />
						<!--end::Hidden input-->
						<div class="d-flex justify-content-start">
						<div class="w-75 position-relative mb-5 me-2">
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
						<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email to be added" data-kt-search-element="input" />
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
						</div>
						<div class="mb-5 w-25">
<input type="text" class="form-control form-control-lg form-control-solid" name="cohort" value="" placeholder="Search by Cohort" data-kt-search-element="input" />
						</div>
						
					</div>
					<div class="form-check form-check-custom form-check-solid form-check-sm">
						<input class="form-check-input" type="checkbox" value="1" id="allapplicant" name="allapplicant"/>
						<label class="form-check-label" for="flexRadioLg">
							All Applicants
						</label>
					</div>
					</form>
					<!--end::Form-->

					<div class="py-5">
						<div data-kt-search-element="results" class="d-none">
							<form action="{{route('add.lockusers')}}" method="POST">
							@csrf<!--begin::Users-->
							<input type="hidden" name="lock_id" value="{{$locks->id}}" />

							<div class="mh-375px scroll-y me-n7 pe-7 select-user-list">
								
							</div>
							<div class="d-flex flex-center mt-15">
								<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
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
				<div class="d-flex justify-content-end align-items-center">
			<label class="text-primary me-3 process">
    
			    <span class="indicator-progress">
			        Processing... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
			    </span>
			</label>
				<!--begin::Filter-->
			<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
			<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->Filter</button>
			<!--begin::Menu 1-->
			<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
				<!--begin::Header-->
				<div class="px-7 py-5">
					<div class="fs-5 text-dark fw-bolder">Filter Options</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				<div class="separator border-gray-200"></div>
				<!--end::Separator-->
				<!--begin::Content-->
				<div class="px-7 py-5" data-kt-user-table-filter="form">
					
					<!--begin::Actions-->
					<div class="d-flex justify-content-end">
						<button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
						<button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Menu 1-->
			<!--end::Filter-->	
			<div class="m-0">

<!--begin1::Toggle-->
				<a href="#" class="btn btn-icon btn-primary w-40px h-40px me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
					<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
							<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</a>
				<!--end::Toggle-->
				<!--begin::Menu 2-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator mb-3 opacity-75"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="javascript:;" id="kt_delete_participant" class="menu-link text-danger px-3">Delete Users</a>
					</div>
					<!--end::Menu item-->
					
				</div>
				<!--end::Menu 2-->
				</div>
				</div>
				<table id="kt_table_participant" class="table align-middle table-row-dashed table-row-gray-500 fs-6 gy-5">
					<thead>
						<tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
						<th class="exclude">
							<label class="form-check form-check-custom form-check-solid me-5">
								<input class="form-check-input" type="checkbox" id="all" name="all" value="" />
							</label>
						</th>
						<th>Name</th>
						<th>Cohort</th>
					</tr>
					</thead>
					<!--begin::Table body-->
					<tbody class="text-gray-700">
						@foreach($locks->users as $p)
						<!--begin::Table row-->
						<tr>
							<td>
								<label class="form-check form-check-custom form-check-solid me-5">
									<input class="form-check-input" type="checkbox" name="users[]" value="{{$p->id}}" />
								</label>
							</td>
							
                    		<td>{{$p->user->name}}</td>
							<!--end::Label-->
							<td class="text-center">
							@if($p->user->talent)
								<span class="badge badge-light-success mb-1">{{$p->user->talent->status->cohort}}</span>
							@else
							<span class="badge badge-light-success mb-1">Applicant</span>
							@endif	
							</td>
						</tr>
						<!--end::Table row-->
						@endforeach
					</tbody>
				</table>


			</div>
		</div>
	</div>
	<!--end::Content-->
	<!--begin::Sidebar-->
	<div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-350px mb-10 order-1 order-lg-2">
		<!--begin::Card-->
		<div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '300px'}" data-kt-sticky-width="{lg: '300px', xl: '350px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
			<!--begin::Card header-->
			<div class="card-header">
				<!--begin::Card title-->
				<div class="card-title">
					<h2 class="fs-3">Access Detail</h2>
				</div>
				<!--end::Card title-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body pt-0 fs-5">
				<!--begin::Section-->
				<div class="mb-7">
					<!--begin::Title-->
					<h5 class="mb-3  fs-6 text-gray-500">Lock</h5>
					<!--end::Title-->
					<!--begin::Details-->
					<div class="d-flex align-items-center mb-1">
						<!--begin::Name-->
						<span class="fw-bolder me-2 text-gray-800">{{$locks->name}}</span>
						<!--end::Name-->
					</div>
					<!--end::Details-->
				</div>
				<!--end::Section-->
				<!--begin::Seperator-->
				<div class="separator separator-dashed mb-7"></div>
				<!--end::Seperator-->
				<!--begin::Section-->
				<div class="mb-7">
					<!--end::Title-->
					<!--begin::Details-->
					<div class="mb-0">
						<!--begin::Price-->
						<span class="fw-bold text-gray-800">{{ date("d M Y",strtotime($locks->start_date))}}</span> - <span class="fw-bold text-gray-800">{{ date("d M Y",strtotime($locks->end_date))}}</span>
						<!--end::Price-->
					</div>
					<!--end::Details-->
				</div>
				<!--end::Section-->
				<!--begin::Actions-->
				<div class="mb-0">
					<a href="{{url('edit/'.$locks->id.'/lock')}}" class="btn btn-primary" id="kt_subscriptions_create_button">Edit Locks Detail</a>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Sidebar-->
</div>
<!--end::Layout-->


<x-slot name="scripts">
<script>
"use strict";
var KTModalUserSearch = function() {
    var e, t, n, s, a, f, c, d, g, h, yourArray, r = function(e) {
    	
            setTimeout((function() {
                console.log(e.getInputElement().value)
                $.ajax({
                  method: "POST",
                  url: "{{route('apptalent.search')}}",
                  data: { keyword : e.getInputElement().value, cohort : $('[name="cohort"]').val(), status : 1 }
                }).done(function( view ) {
                        "" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"))
                }),
         		e.complete()
            }), 1500)
        },
        o = function(e) {
            n.classList.add("d-none"), s.classList.add("d-none")
        },
        p = document.getElementById("kt_table_participant");
        $('[name="cohort"]').on("keyup",function () { 
			$.ajax({
				method: "POST",
				url: "{{route('talent.search')}}",
				data: { keyword :  $('[name="search"]').val(), cohort : $('[name="cohort"]').val(), status : 1}
			}).done(function( view ) {
                        "" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"))
			});
  		});
		$('[name="allapplicant"]').on("change",function () { 
			if($(this).is(':checked')){
				$.ajax({
					method: "POST",
					url: "{{route('applicant.search')}}",
					data: { keyword :  $('[name="search"]').val(), applicant: true, status : 1}
				}).done(function( view ) {
							"" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"),
							$('[type="checkbox"]:not(#all)').each(function () { //loop through each checkbox
		                $(this).prop('checked', true); //check 
		            }))
				});
			}else{
				n.classList.add("d-none"), s.classList.remove("d-none")
			}
  		});

    return {
        init: function() {
            (e = document.querySelector("#kt_modal_users_search_handler")) && (e.querySelector('[data-kt-search-element="wrapper"]'), n = e.querySelector('[data-kt-search-element="results"]'), s = e.querySelector('[data-kt-search-element="empty"]'), (a = new KTSearch(e)).on("kt.search.process", r), a.on("kt.search.clear", o)), (f = $(p).DataTable({
                info: 1,
                aaSorting :[],
	            paging: false,
                lengthChange: !1
                
            })),  document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select, input").forEach((e => {
                    $(e).val("").trigger("change")
                })), f.search("").draw(),f.columns(2).search("").draw()
            })), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    r = t.querySelectorAll("select")
                n.addEventListener("click", (function() {
                    var t = ""; 
                    r.forEach(((e, n) => {
                        e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                    })), f.columns(2).search(t).draw()
                }))
            })(),
            document.querySelector('#all').addEventListener("click", (function() {
            	if (this.checked) {
		            $('[type="checkbox"]:not(#all)').each(function () { //loop through each checkbox
		                $(this).prop('checked', true); //check 
		            });
		        } else {
		            $('[type="checkbox"]:not(#all)').each(function () { //loop through each checkbox
		                $(this).prop('checked', false); //uncheck              
		            });
		        }
            })),(c = document.querySelectorAll("[type='checkbox']:not(#all)"), c.forEach((e => {
                e.addEventListener("click", (function() {
                	$('#all').prop("checked", false);
                }))
            }))),
            document.querySelector('#kt_delete_participant').addEventListener("click", (function() {
            	($('[type="checkbox"]:not(#all):checked').length==0)?Swal.fire({
	                    html: "Sorry, looks like there are some errors detected, please choose at least 1 checkbox.",
	                    icon: "error",
	                    buttonsStyling: !1,
	                    confirmButtonText: "Ok, got it!",
	                    customClass: {
	                        confirmButton: "btn btn-primary"
	                    }
	                }):$('.process').attr("data-kt-indicator", "on"), yourArray = [], d = $("[type='checkbox']:not(#all):checked"), d.each(function(e){
				    	yourArray.push($(this).val()) 
					}), $.ajax({
						method: "POST",
						url: "{{route('delete.lockusers')}}",
						data: { id : yourArray}
					}).done(function(){
						$('.process').removeAttr('data-kt-indicator'), Swal.fire({
                                html: "User have been deleted.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                                }), d.closest('tr').remove()
					})
            }))
        }
    }
}();



KTUtil.onDOMContentLoaded((function() {
    KTModalUserSearch.init();

    

}));
</script>
</x-slot>




</x-app-layout>