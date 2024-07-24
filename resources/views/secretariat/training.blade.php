<x-app-layout activemenu="sec-training">

<x-slot name="header">
	Calendar
</x-slot>
<x-slot name="subheader">
    Listing
</x-slot>

<div class="card">
	<!--begin::Card header-->
<div class="card-header border-0 pt-6">
	<!--begin::Card title-->
	<div class="card-title">
		<!--begin::Search-->
		<div class="d-flex align-items-center position-relative my-1">
			<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
			<span class="svg-icon svg-icon-1 position-absolute ms-6">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
					<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
			<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
		</div>
		<!--end::Search-->
	</div>
	<!--begin::Card title-->
	<!--begin::Card toolbar-->
	<div class="card-toolbar">
		<!--begin::Toolbar-->
		<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
			<!--begin::Menu wrapper-->
			<div class="m-0">
				<!--begin1::Toggle-->
				<!--begin::Export-->
			<button type="button" class="btn btn-light-primary me-3"  id="kt_modal_export">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
					<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
					<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
				</svg>
			</span>
			<!--end::Svg Icon-->Export</button>
				<!--end::Toggle-->
			<a href="{{url('new/training')}}" class="btn btn-primary">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
					<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
				</svg>
			</span>
			<!--end::Svg Icon-->Add Activity</a>	
			</div>
			<!--end::Menu wrapper-->
			<!--end::Export-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Card toolbar-->
</div>
<!--end::Card header-->
<!--begin::Body-->
<div class="card-body pt-0">
	
<div class="table-responsive">
<!--begin::Datatable-->
<table id="kt_table_users" class="table table-rounded table-striped border gy-5 gs-5 table-row-bordered table-row-gray-200 fs-6">
    <thead>
    <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
        <th>Title</th>
        <th class="mw-250px">Date</th>
        <th>Type</th>
        <th>Platform</th>
        <th>Domain</th>
        <th>Participant|Attended</th>
        <th>Accepted|Rejected</th>
        <th class="text-end min-w-100px exclude">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-800">
        @foreach($data as $item)
        @php $count = 0; @endphp
            <tr>
                <td>{{$item->title}}</td>
                <td>{{ date("d/m/Y",strtotime($item->start_date))}} - {{ date("d/m/Y",strtotime($item->end_date))}}</td>
                <td>{{$item->type->name??''}}</td>
                <td>{{$item->platform??''}}</td>
                <td>{{$item->domain->name??''}}</td>
                <td class="text-center  text-gray-400 fs-4">
                	<span class="badge badge-light me-2">{{$item->participants->count()}}</span>|<span class="badge badge-light-success ms-2">{{$item->participants->where('attendance_id',4)->count()}}</span>
                </td>
                <td class="text-center text-gray-400 fs-4">
					<span class="badge badge-light-success me-2">{{$item->participants->where('status_id',1)->count()}}</span>|<span class="badge badge-light-danger ms-2"> {{$item->participants->where('status_id',2)->count()}}</span>
	                @if($item->start_date>date("Y-m-d"))
	                @endif
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                        Actions
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{url('/training/participants/'.$item->id)}}" class="menu-link px-3" data-kt-user-table-filter="edit_row">
                                Participants
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{url('/edit/'.$item->id.'/training')}}" class="menu-link px-3">
                                Edit
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" id="{{$item->id}}" class="menu-link px-3" data-kt-user-table-filter="delete_row">
                                Delete
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<!--end::Datatable-->
</div>
</div>
<!--begin::Body-->
</div>
<x-slot name="scripts">

<script>
"use strict";
var KTUsersList = function() {
    var  e, t, n, r, i, id, o = document.getElementById("kt_table_users"),
    	c = () => {
            o.querySelectorAll('[data-kt-user-table-filter="delete_row"]').forEach((t => {
            	t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[0].innerText,
                        id = n.querySelectorAll("td")[5].querySelectorAll("[data-kt-user-table-filter='delete_row']")[0].getAttribute('id');
                    Swal.fire({
                        text: "Are you sure you want to delete " + r + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function(t) {
                    	t.value ? ($.ajax({
								type: 'GET',
							    url: "{{url('')}}/destroy/"+id+"/training",
							}),
                            e.row($(n)).remove().draw()) : false
                    }))
                }))
            }))
        };
        
    return {
        init: function() {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td")
            })), (e = $(o).DataTable({
                info: 1,
                aaSorting :[],
                // order: [[1, 'desc']],
                // scrollY: "500px",
	            // scrollCollapse: true,
	            paging: true,
                lengthChange: !1,
                buttons: [
		            {
		            extend: 'excel',
		            exportOptions: {
		                columns: ':not(.exclude)',
		                format: {
		                    body: function ( data, row, column, node ) {
		                        // Strip $ from salary column to make it numeric
		                        var a = data;
		                        // if (column === 2){
		                            a = data.replace( /<br\s*\/?>/ig, "\r\n" );
		                        // }
		                        
		                        a = a.replace(/(&amp;)/ig, "&");
		                        a = a.replace(/(&nbsp;|<([^>]+)>)/ig, "");

		                        return a;
		                    }
		                }
		            },
		            customize: function(xlsx) {
	                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
	                    $('row c[r^="B"]', sheet).attr( 's', '55' ); 
		            }
		        },],
                columnDefs: [{
                	orderable: !1,
                    targets: 5
                }]
            })).on("draw", (function() {
                c()
            })), c(), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            }))),
            document.querySelector('#kt_modal_export').addEventListener("click", (function() {
            	e.button('.buttons-excel').trigger();
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()
}));
</script>
</x-slot>


</x-app-layout>