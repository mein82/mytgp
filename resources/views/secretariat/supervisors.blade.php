<x-app-layout activemenu="sec-supervisor">
<x-slot name="header">
	Supervisors
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
						<label class="form-label fs-6 fw-bold">Programme:</label>
						<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="programme" data-hide-search="true">
							<option></option>
							@foreach($programme as $key=>$value)
							<option value="{{$value}}">{{$value}}</option>
							@endforeach
						</select>
					</div>
					<!--end::Input group-->
					
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
        <th>Talent ID</th>
        <th>Programme</th>
        <th class="w-50">Talent Pending Evaluation</th>
        <th class="text-end min-w-100px exclude">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-800">
        @foreach($data as $item)
        @php $count = 0; @endphp
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->programme->name??''}}</td>
                <td>
				<table class="table table-row-dashed table-row-gray-500 align-middle gx-1 gy-1">
					@foreach($item->supervisor as $sup)
						<tr>
							<td class="w-50">
								{{$sup->talent->fullname}}<br/>
								<span class="text-gray-700 fs-7">Cohort {{$sup->talent->status->cohort??''}}</span>
							</td>
							<td class="fs-7 flex flex-row">
								@if(is_null($sup->talent->superlog2))
								<div>	TGP-CM 1st Year</div>
								@endif
								@if(is_null($sup->talent->superlog3))
								<div>	TGP-CM 2nd Year</div>
								@endif
								@if(!is_null($sup->talent->twer1) && is_null($sup->talent->twer1->mark))
								<div>	TWER 1st Year</div>
								@endif
								@if(!is_null($sup->talent->twer2) && is_null($sup->talent->twer2->mark))
								<div>	TWER 2nd Year</div>
								@endif
							</td>
						</tr>
					@endforeach
				</table>
				</td>
                <td class="text-end">
                    <a href="{{url('')}}/impersonate/user/{{$item->id}}/secretariat-supervisors" id="{{$item->id}}" class="btn btn-secondary btn-active-light-primary btn-sm" data-kt-user-table-filter="log_row">Impersonate</a>
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
    var c, e, t, n, r, i, o = document.getElementById("kt_table_users");
	
    return {
        init: function() {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td")
            })), (e = $(o).DataTable({
                info: 1,
                // order: [[9, 'asc'],[3, 'desc']],
                scrollY: "500px",
	            scrollCollapse: true,
	            paging: false,
                lengthChange: !1,
                columnDefs: [
					{
                	orderable: !1,
                    targets: 3
                }]
            })), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select, input").forEach((e => {
                    $(e).val("").trigger("change")
                })), e.search("").draw(), e.columns(3).search("").draw()
            })), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    r = t.querySelectorAll("select")
                n.addEventListener("click", (function() {
                    var t = ""; var s = "";
                    r.forEach(((e, n) => {
                        e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                    })), e.search(t).draw()
                }))
            })())
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()

   
    
}));
</script>
</x-slot>


</x-app-layout>