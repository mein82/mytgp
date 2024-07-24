<x-app-layout activemenu="sec-app-selection">
<x-slot name="header">
	Applicants
</x-slot>
<x-slot name="subheader">
	Selection Result
</x-slot>
<div class="card mb-5 mb-xl-8">

	<div class="card-body py-10">


<!--begin::Wrapper-->
<div class="d-flex flex-stack mb-5">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative my-1">
        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
			<span class="svg-icon svg-icon-1 position-absolute ms-6">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
					<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
				</svg>
			</span>
			<!--end::Svg Icon-->
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search"/>
    </div>
    <!--end::Search-->

    <!--begin::Toolbar-->
		<div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
			<!--begin::Filter-->
			<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
			<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
				</svg>
			</span>
			<!--end::Svg Icon-->Filter</button>
			<!--begin::Menu 1-->
			<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
				<!--begin::Header-->
				<div class="px-7 py-5">
					<div class="fs-4 text-dark fw-bolder">Filter Options</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				<div class="separator border-gray-200"></div>
				<!--end::Separator-->
				<!--begin::Content-->
				<div class="px-7 py-5">
					<!--begin::Input group-->
					<div class="mb-10">
						<!--begin::Label-->
						<label class="form-label fs-5 fw-bold mb-3">Programme:</label>
						<!--end::Label-->
						<!--begin::Options-->
						<div class="d-flex flex-column flex-wrap fw-bold" data-kt-docs-table-filter="programme_type">
							<!--begin::Option-->
							<label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
								<input class="form-check-input" type="radio" name="programme_type" value="all" checked="checked">
								<span class="form-check-label text-gray-600">All</span>
							</label>
							<!--end::Option-->
							@foreach($programme as $key =>$value)
							<!--begin::Option-->
							<label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
								<input class="form-check-input" type="radio" name="programme_type" value="{{$value}}">
								<span class="form-check-label text-gray-600">{{$value}}</span>
							</label>
							<!--end::Option-->
							@endforeach
						</div>
						<!--end::Options-->
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="d-flex justify-content-end">
						<button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-docs-table-filter="reset">Reset</button>
						<button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-docs-table-filter="filter">Apply</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Menu 1-->
			<!--end::Filter-->
			
		</div>
		<!--end::Toolbar-->

    <!--begin::Group actions-->
    <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
        <div class="fw-bolder me-5">
            <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
        </div>

        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
            Selection Action
        </button>
    </div>
    <!--end::Group actions-->
</div>
<!--end::Wrapper-->

<!--begin::Datatable-->
<table id="kt_datatable_example_2" class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
        <th>Applicant</th>
        <th>Programme</th>
        <th>Status</th>
        <th>Status</th>
        <th class="text-end min-w-100px">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-bold">
    	@foreach($data as $item)
        <tr>
            <td>{{$item->name}}<br/>
                <span class="text-gray-700 fs-7">{{$item->designation}}</span><br/>
                <span class="text-gray-500 fs-8">{{$item->organization}}</span>
            </td>
            <td>{{$item->applicant->programme->name??''}}</td>
            <td>{{$item->applicant->status->status->name??''}}</td>
            <td>{{$item->applicant->status->status_id??''}}</td>
            <td><a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-id="{{$item->applicant->id}}" data-bs-toggle="modal" data-bs-target="#kt_modal_app_selection">Convert</a></td>
        </tr>
         @endforeach
    </tbody>
</table>
<!--end::Datatable-->


	</div>

</div>


<x-slot name="scripts">

<script>
"use strict";

// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table;
    var dt;
    var filterPayment;

     // Private functions
    var initDatatable = function () {
       dt = $("#kt_datatable_example_2").DataTable({
            scrollY: "500px",
            scrollCollapse: true,
            paging: false,
            dom: "<'table-responsive'tri>",
            order: [[3, 'asc']],
            columnDefs: [
                {
                    targets: 3,
                    visible :false,
                },
                ]
        });
        table = dt.$;

        // dt.on('draw', function () {
        //     initToggleToolbar();
        //     toggleToolbars();
        //     handleDeleteRows();
        //     KTMenu.createInstances();
        // });
    }

    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw();
        });
    }

    // Filter Datatable
    var handleFilterDatatable = () => {
        // Select filter options
        filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="programme_type"] [name="programme_type"]');
        const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');

        // Filter datatable on submit
        filterButton.addEventListener('click', function () {
            // Get filter values
            let paymentValue = '';

            // Get payment value
            filterPayment.forEach(r => {
                if (r.checked) {
                    paymentValue = r.value;
                }

                // Reset payment value if "All" is selected
                if (paymentValue === 'all') {
                    paymentValue = '';
                }
            });

            // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.column(1).search(paymentValue).draw();
        });
    }

    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            handleFilterDatatable();
        }
    }
}();

var KTModalNewCard = function() {
    var t, e, n, r, o, i;
    return {
        init: function() {
          (i = document.querySelector("#kt_modal_app_selection")) && (o = new bootstrap.Modal(i), r = document.querySelector("#kt_formvalidation_status"), t = document.getElementById("kt_formvalidation_text_submit"), n = FormValidation.formValidation(r, {
                fields: {
                    cohort: {
                        validators: {
                            integer :{
                                message: "Numbers only."
                            },
                            callback: {
                                message: "This field is required.",
                                callback: function(e) {
                                    var t = e.value;
                                    if (t =="" && $("[name='convert']").is(':checked')) return !1
                                }
                            }
                        }
                    },
                    talent_code: {
                        validators: {
                            callback: {
                                message: "This field is required.",
                                callback: function(e) {
                                    var t = e.value;
                                    if (t =="" && $("[name='convert']").is(':checked')) return !1
                                }
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
            }), t.addEventListener("click", (function(e) {
                e.preventDefault(), n && n.validate().then((function(e) { 
                    console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1, 
                        r.submit()
                    }), 1e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })))
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();

    $("#kt_modal_app_selection").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "{{url('applicant/selection')}}/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
            // $('.loading').hide();
          })  .done(function() {
           KTModalNewCard.init();

        });
    });
    $('#kt_modal_app_selection').on('hide.bs.modal', function(e){ 
        $(this).removeData('bs.modal');
        $(this).find('.modal-load').html('');
    }) ;


});

</script>
</x-slot>


</x-app-layout>