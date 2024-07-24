<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'sec-talent-evaluate']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	Talents
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Evaluation
 <?php $__env->endSlot(); ?>

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
							<?php $__currentLoopData = $programme; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($value); ?>" <?php if($key_programme==$value): ?> selected="selected" <?php endif; ?>><?php echo e($value); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="mb-10">
						<label class="form-label fs-6 fw-bold">Status:</label>
						<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="status" data-hide-search="true">
							<option></option>
							<?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($value); ?>" <?php if($key_status==$value): ?> selected="selected" <?php endif; ?>><?php echo e($value); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <th>Programme</th>
        <th>Cohort</th>
        <th class="exclude text-center">Courses Invited|Attended</th>
        <th class="exclude">Project Progress</th>
        <th class="exclude">Pending</th>
        <th>Status</th>
        <th class="d-none exclude"></th>
        <th class="text-end min-w-100px exclude">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-800">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count = 0; ?>
            <tr>
				<td></td>
                <td><?php echo e($item->talent->talent_code); ?></td>
                <td><?php echo e($item->name); ?><br/><span class="text-gray-700 fs-7"><?php echo e($item->designation); ?></span><br/><span class="text-gray-500 fs-8"><?php echo e($item->organization); ?></span></td>
                <td><?php echo e($item->talent->programme->name??''); ?></td>
                <td><?php echo e($item->talent->status->cohort??''); ?></td>
                <td class=" text-center">
                	<button type="button" class="btn btn-success <?php if($item->talent->status->course_complete): ?> btn-warning <?php endif; ?>	 btn-icon btn-sm position-relative h-20px fs-8" data-bs-toggle="modal" data-id="<?php echo e($item->id); ?>" data-bs-target="#kt_modal_courses"><?php echo e($item->talent->course->count()??'0'); ?> | <?php echo e($item->talent->course->where('attendance_id',4)->count()??'0'); ?></button>
                </td>
                <td>
                	<?php $__currentLoopData = $item->talent->project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<button type="button" class="btn btn-danger btn-icon btn-sm h-20px" data-bs-toggle="modal" data-bs-target="#kt_modal_project" data-id="<?php echo e($item->id); ?>"><?php echo e($p->progress->count()); ?></button>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td>
                	<?php $complete = true; ?>
                	<?php if($item->applicant && !$item->applicant->selflog??true): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-info">Base SelfCM</span>
                	<?php endif; ?>
                	<?php if(!$item->talent->selflog2): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-info">1st Year SelfCM</span>
                	<?php endif; ?>
                	<?php if(!$item->talent->selflog3): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-info">2nd Year SelfCM</span>
                	<?php endif; ?>
                	<?php if($item->applicant && count($item->applicant->reflog)<2): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-primary">Base SuperCM</span>
                	<?php endif; ?>
                	<?php if(!$item->talent->superlog2): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-primary">1st Year SuperCM</span>
                	<?php endif; ?>
                	<?php if(!$item->talent->superlog3): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-primary">2nd Year SuperCM</span>
                	<?php endif; ?>
                	<?php if(is_null($item->talent->scv1->status_id??'null')): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-success">Structured CV1</span>
                	<?php endif; ?>
                	<?php if(is_null($item->talent->scv2->status_id??'null')): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-success">Structured CV2</span>
                	<?php endif; ?>
                	<?php if(is_null(optional($item->talent->twer1)->status_id)): ?>
                		<?php $complete = false; ?>
                		<span class="badge badge-light-danger">TWER</span>
                	<?php endif; ?>
                	<?php if($complete): ?>
                		<span class="badge badge-success">Completed</span>
                	<?php endif; ?>
                </td>
                <td><div class="badge badge-<?php echo e($item->talent->status->finals->label??'dark'); ?> fw-bolder"><?php echo e($item->talent->status->finals->name??''); ?></div><div class="d-flex flex-column fs-7"><?php if($item->talent->status->final_id==4): ?>
					<?php if(!is_null($item->talent->status->study_sdate) && !is_null($item->talent->status->study_edate)): ?>
					<span><br/><?php echo e(date("d.m.Y",strtotime($item->talent->status->study_sdate))); ?> to <?php echo e(date("d.m.Y",strtotime($item->talent->status->study_edate))); ?></span>
					<?php endif; ?>
					<span><br/><?php echo e($item->talent->status->institution); ?></span>
					<?php endif; ?>
					<span><br/><?php echo e($item->talent->status->remark); ?></span>
                	</div>
                </td>
                <td class="d-none exclude">
                	<?php echo e($item->talent->status->final_id); ?>/<?php echo e($item->talent->status->finals->name??''); ?>

			    </div>
                </td>
                <td class="text-end">
                    <!-- <a href="<?php echo e(url('/secretariat/talent/summary/'.$item->id)); ?>" class="btn btn-dark btn-active-light-primary btn-sm">Evaluate</a> -->
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
                            <a href="<?php echo e(url('/secretariat/talent/summary/'.$item->id)); ?>" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                Evaluate
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" id="<?php echo e($item->id); ?>" class="menu-link px-3" data-kt-user-table-filter="log_row">
                                Impersonate
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <!-- <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                                Impersonate
                            </a>
                        </div> -->
                        <!--end::Menu item-->
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<!--end::Datatable-->
</div>
</div>
<!--begin::Body-->
</div>
 <?php $__env->slot('scripts', null, []); ?> 

<script>
"use strict";
var KTUsersList = function() {
    var e, t, n, r, i, o = document.getElementById("kt_table_users"),
    c = () => {
            o.querySelectorAll('[data-kt-user-table-filter="log_row"]').forEach((t => {
                t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[1].innerText,
                        id = n.querySelectorAll("td")[10].querySelectorAll("[data-kt-user-table-filter='log_row']")[0].getAttribute('id');
                        window.location = "<?php echo e(url('')); ?>/impersonate/user/"+id+"/secretariat-talents"
                }))
            }))
        };
        
        
    return {
        init: function() {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td")
            })), (e = $(o).DataTable({
                info: 1,
                order: [[9, 'asc'],[4, 'desc']],
                scrollY: "500px",
	            scrollCollapse: true,
	            paging: false,
                lengthChange: 1,
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
	                    $('row c[r^="E"]', sheet).attr( 's', '55' ); 
		            }
		        },],
                columnDefs: [{
                    // visible: !1,
                    // targets: 8
                },{
                	orderable: !1,
                    targets: 10
                }]
            })).on("draw", (function() {
                c()
            })),
			e.on('order.dt search.dt', function () {
			let i = 1;
			e.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
				this.data((i++)+".");
			});
			}).draw(), c(), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select, input").forEach((e => {
                    $(e).val("").trigger("change")
                })), e.search("").draw(), e.columns(3).search("").draw(),  e.columns(4).search("").draw(), e.columns(9).search("").draw()
            })), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    s = t.querySelector('[data-kt-user-table-filter="programme"]'),
                    u = t.querySelector('[data-kt-user-table-filter="status"]'),
                    v = t.querySelector('[data-kt-user-table-filter="cohort"]'),
                    // p = t.querySelector('[name="keyprogramme"]'),
                    // q = t.querySelector('[name="keystatus"]'),
                    r = t.querySelectorAll("select"),
                    i = t.querySelector("input");
					e.search("").draw(), e.columns(3).search("").draw(),  e.columns(4).search("").draw(), e.columns(9).search("").draw()
					
                n.addEventListener("click", (function() {
					console.log(s.value,u.value,i.value);
                    e.column(3).search(s.value).draw(), e.column(9).search(u.value).draw(),
					(i.value!='')?e.columns(4).search("^"+i.value+"$",true,false).draw():e.columns(4).search("").draw()
					// var t = ""; var s = "";
                    // r.forEach(((e, n) => {
                    //     e.value && "" !== e.value && (0 !== n && (t += " "), t += e.value)
                    // })), 
					// e.search(t).draw(),
                    // i.forEach(((e, n) => {
                    //     e.value && "" !== e.value && (s = e.value)
                    // })),
					// (s!=="")?e.columns(4).search("^"+s+"$",true,false).draw():false
					//  (p.value!="")?(s.val(p.value).trigger('change'), e.column(3).search(p.value).draw()):false
                	// (q.value!="")?(u.val(q.value).trigger('change'), e.column(9).search(q.value).draw()):false
                }))
				,e.column(3).search(s.value).draw(), e.column(9).search(u.value).draw()
            })()),
            document.querySelector('#kt_modal_export').addEventListener("click", (function() {
            	e.button('.buttons-excel').trigger();
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()
	$('#kt_modal_supervisor').modal({backdrop:'static', keyboard:false});
    $("#kt_modal_supervisor").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "<?php echo e(url('talent/supervisor')); ?>/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
        });
        
    });
    
}));
</script>
 <?php $__env->endSlot(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/secretariat/talents.blade.php ENDPATH**/ ?>