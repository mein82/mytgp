<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'portal-faq-content']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	FAQ content
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Listing
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
				
			<a href="<?php echo e(url('new/fcontent')); ?>" class="btn btn-primary">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
					<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
				</svg>
			</span>
			<!--end::Svg Icon-->Add FAQ Content</a>	
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
        <th>#</th>
        <th>FAQ Answer</th>
        <th>FAQ Question</th>
        <th>FAQ Tab</th>
        <th class="text-end min-w-100px exclude">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-800">
       	<?php $count = 0; ?>
       	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count++; ?>
            <tr>
                <td><?php echo e($count); ?>.</td>
                <td><?php echo e($item->question); ?> </td>
                <td><?php echo e($item->answer); ?> </td>
                <td><?php echo e($item->tab->title); ?> </td>
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
                            <a href="<?php echo e(url('/edit/'.$item->id.'/fcontent')); ?>" class="menu-link px-3">
                                Edit
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" id="<?php echo e($item->id); ?>" class="menu-link px-3" data-kt-user-table-filter="delete_row">
                                Delete
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
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
    var  e, t, n, r, i, id, o = document.getElementById("kt_table_users"),
    	c = () => {
            o.querySelectorAll('[data-kt-user-table-filter="delete_row"]').forEach((t => {
            	t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[1].innerText,
                        id = n.querySelectorAll("td")[4].querySelectorAll("[data-kt-user-table-filter='delete_row']")[0].getAttribute('id');
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
								type: 'POST',
							    url: "<?php echo e(url('')); ?>/destroy/"+id+"/fcontent",
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
                columnDefs: [{
                	orderable: !1,
                    targets: 2
                }]
            })).on("draw", (function() {
                c()
            })), c(), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()
}));
</script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/secretariat/faqcontent.blade.php ENDPATH**/ ?>