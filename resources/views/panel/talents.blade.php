<x-app-layout activemenu="sec-talent-evaluate">
<x-slot name="header">
	Talent
</x-slot>
<x-slot name="subheader">
    Evaluation
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
			<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
		</div>
		<!--end::Search-->
	</div>
	<!--begin::Card title-->
	<!--begin::Card toolbar-->
	<div class="card-toolbar">
		<!--begin::Toolbar-->
		<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
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
					<!--begin::Input group-->
					<div class="mb-10">
						<label class="form-label fs-6 fw-bold">Status:</label>
						<input type="hidden" name="keystatus" value="{{$key_status}}">
						<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="status" data-hide-search="true">
							<option></option>
							@foreach($status as $key=>$value)
							<option value="{{$value}}">{{$value}}</option>
							@endforeach
						</select>
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="mb-10">
						<label class="form-label fs-6 fw-bold">Cohort:</label>
						<input type="text" data-kt-user-table-filter="cohort" class="form-control form-control-solid" placeholder="Search Cohort" />

					</div>
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
			
			<!--begin::Menu wrapper-->
			<div class="m-0">
				<!--begin1::Toggle-->
				<!--begin::Export-->
			<button type="button" class="btn btn-light-primary me-3"  data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
				<!--begin::Menu 2-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" id="kt_modal_export" class="menu-link px-3">Talent</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">Talent Course</a>
					</div>
					<!--end::Menu item-->

				</div>
				<!--end::Menu 2-->
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
<table id="kt_table_users" class="table align-middle border-bottom table-row-bordered table-striped table-row-gray-200 fs-6 gy-3 gs-7">
    <thead>
    <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
        <th>#</th>
		<th>Talent ID</th>
        <th class="mw-250px">Talent</th>
        {{-- <th>Programme</th> --}}
        <th>Cohort</th>
        <th class="exclude">Courses Attendend</th>
        <th class="exclude">Project Progress</th>
        <th>Status</th>
        <th class="d-none exclude"></th>
        <th class="text-end min-w-100px exclude">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-800">
        @foreach($data as $item)
        @php $count = 0; @endphp
            <tr>
                <td></td>
				<td>{{$item->talent->talent_code}}</td>
                <td>{{$item->name}}<br/><span class="text-gray-700 fs-7">{{$item->designation}}</span><br/><span class="text-gray-500 fs-8">{{$item->organization}}</span>
                </td>
                {{-- <td>{{$item->talent->programme->name??''}}</td> --}}
                <td class="text-center">{{$item->talent->status->cohort??''}}</td>
                <td class="text-center">
                	<button type="button" class="btn btn-success @if($item->talent->status->course_complete) btn-warning @endif	 btn-icon btn-sm position-relative me-5" data-bs-toggle="modal" data-id="{{$item->id}}" data-bs-target="#kt_modal_courses">{{$item->talent->course->where('status_id',4)->count()??''}}</button>

                </td>
                <td class="text-center">
					<button type="button" class="btn btn-danger btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_project" data-id="{{$item->id}}">{{$item->talent->project->count()}}</button>
                </td>
                <td><div class="badge badge-{{$item->talent->status->finals->label??'dark'}} fw-bolder">{{$item->talent->status->finals->name??''}}</div>
                	<div class="d-flex flex-column fs-7">
                	@if($item->talent->status->final_id==4)
			         @if(!is_null($item->talent->status->study_sdate) && !is_null($item->talent->status->study_edate))
			         <span>{{date("d.m.Y",strtotime($item->talent->status->study_sdate))}} to {{date("d.m.Y",strtotime($item->talent->status->study_edate))}}</span>
			         @endif
			         <span>{{$item->talent->status->institution}}</span>
			         @endif 
			         <span>{{$item->talent->status->remark}}</span>
                	</div>
                </td>
                <td class="d-none">
                	{{$item->talent->status->final_id}}
                	
			     </div>
                </td>
                <td class="text-end">
                    <a href="{{url('/panel/talent/summary/'.$item->id)}}" class="btn btn-dark btn-active-light-primary btn-sm">Evaluate</a>
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
    var e, t, n, r, i, o = document.getElementById("kt_table_users");
        
    return {
        init: function() {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td")
            })), (e = $(o).DataTable({
                info: 1,
                order: [[7, 'asc'],[3, 'desc']],
                scrollY: "500px",
	            scrollCollapse: true,
	            paging: false,
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
                    visible: !1,
                    targets: 7
                },{
                	orderable: !1,
                    targets: 8
                }]
            })),
			e.on('order.dt search.dt', function () {
			let i = 1;
			e.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
				this.data((i++)+".");
			});
			}).draw(),
			document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select, input").forEach((e => {
                    $(e).val("").trigger("change")
                })), e.search("").draw(), e.columns(3).search("").draw()
            })), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    u = $('[data-kt-user-table-filter="status"]'),
                    r = t.querySelectorAll("select"),
                    i = t.querySelectorAll("input"),
					q = t.querySelector('[name="keystatus"]')
                n.addEventListener("click", (function() {
                    var t = ""; var s = "";
                    r.forEach(((e, n) => {
                        e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                    })), e.search(t).draw(),
                    i.forEach(((e, n) => {
                        e.value && "" !== e.value && (s = e.value)
                    })), (s!=="")?e.columns(3).search("^"+s+"$",true,false).draw():false
                })),
					(q.value!="")?(u.val(q.value).trigger('change'), e.column(6).search(q.value).draw()):false
            })()),
            document.querySelector('#kt_modal_export').addEventListener("click", (function() {
            	e.button('.buttons-excel').trigger();
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()

    $("#kt_modal_supervisor").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "{{url('talent/supervisor')}}/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
            // $('.loading').hide();
        	modal.find('[data-control="select2"]').select2({
        		matcher: matchCustom,
        		templateResult: formatCustom
        	});

          });
    });

    
}));
</script>
</x-slot>


<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_supervisor" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-10">
                <!--begin::Heading-->
                <div class="text-center">
                    <h1 class="mb-3">Supervisors</h1>
                    <!-- <div class="text-muted fw-bold fs-5">If you need more info, please check
                    <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div> -->
                </div>
                <!--end::Heading-->
                <!--begin::Plans-->
                <div class="d-flex flex-column modal-load">
                    
                </div>
                <!--end::Plans-->
                
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->

</x-app-layout>