<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'setting-user']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	User
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
                        <label class="form-label fs-6 fw-bold">Group:</label>
                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="group" data-hide-search="true">
                            <option></option>
                            <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <!--begin::Menu wrapper-->
			<div class="m-0">
			<a href="<?php echo e(url('new/user')); ?>" class="btn btn-primary">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
					<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
				</svg>
			</span>
			<!--end::Svg Icon-->Add user</a>	
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
<div class="card-body pt-0 table-responsive">
	
<div class="">
<!--begin::Datatable-->
<table id="kt_table_users" class="table table-rounded table-striped border gy-5 gs-5 table-row-bordered table-row-gray-200 fs-6">
    <thead>
    <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
        <th>Name</th>
        <th class="mw-350px">Position</th>
        <th>Role</th>
        <th class="min-w-200px">Registered</th>
         <th class="text-end min-w-100px exclude">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-800">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count = 0; ?>
            <tr>
                <td>        
                    <div class="d-flex align-items-center">
                    <!--end::Checkbox-->
                    <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                            <span class="symbol-label bg-light-danger text-danger fw-bold"><?php echo e(substr($item->name, 0,1)); ?></span>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-5">
                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"><?php echo e($item->name); ?></a>
                            <div class="fw-bold text-muted"><?php echo e($item->email); ?></div>
                            <?php if(is_null($item->email_verified_at)): ?>
                            <span class="me-2 mb-1 badge badge-warning fw-bold">Unverified email</span>
                            <?php endif; ?>
                        </div>
                        <!--end::Details-->
                    </div>
                </td>
                <td>
                    <div class="fw-bold"><?php echo e($item->designation); ?></div>
                    <div class="fw-bold text-muted fs-7"><?php echo e($item->organization); ?></div>
                    <div class="fw-bold text-muted fs-7"><?php echo e($item->contactno); ?></div>
                </td>
                <td>
                    <?php echo $item->role; ?>

                </td>
                <td>
                    <?php echo e(date("d-m-Y h:i A", strtotime($item->created_at))); ?>

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
                            <a href="<?php echo e(url('/edit/'.$item->id.'/user')); ?>" class="menu-link px-3">
                                Edit
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" id="<?php echo e($item->id); ?>" class="menu-link px-3" data-kt-user-table-filter="reset_row">
                                Reset
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
            o.querySelectorAll('[data-kt-user-table-filter="log_row"]').forEach((t => {
            	t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[0].innerText,
                        id = n.querySelectorAll("td")[4].querySelectorAll("[data-kt-user-table-filter='log_row']")[0].getAttribute('id');
                        window.location = "<?php echo e(url('')); ?>/impersonate/user/"+id+"/setting-user";
                }))
            }))
        },
        d = () => {
            o.querySelectorAll('[data-kt-user-table-filter="reset_row"]').forEach((t => {
                t.addEventListener("click", (function(t) {
                    t.preventDefault();
                        const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[0].innerText,
                        id = n.querySelectorAll("td")[4].querySelectorAll("[data-kt-user-table-filter='reset_row']")[0].getAttribute('id');
                        $.ajax({
                            method: 'POST',
                            url: "<?php echo e(url('')); ?>/reset/"+id+"/user"
                        }).done(function(){
                            toastr.options = {
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !1,
                            progressBar: !1,
                            positionClass: "toastr-top-right",
                            preventDuplicates: !1,
                            showDuration: "300",
                            hideDuration: "1000",
                            timeOut: "5000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut"
                        }, toastr.error("Password have been reset to 'P@ssw0rd'")
                        })
                }))
            }))
        },
        g = () => {
            o.querySelectorAll('[data-kt-user-table-filter="delete_row"]').forEach((t => {
                t.addEventListener("click", (function(t) {
                    t.preventDefault();
                        const n = t.target.closest("tr"),
                        r = n.querySelectorAll("td")[0].innerText,
                        id = n.querySelectorAll("td")[4].querySelectorAll("[data-kt-user-table-filter='delete_row']")[0].getAttribute('id');
                        console.log('here');
                        // $.ajax({
                        //     method: 'POST',
                        //     url: "<?php echo e(url('')); ?>/destroy/"+id+"/user"
                        // }).done(function(){
                        //     toastr.options = {
                        //     closeButton: !0,
                        //     debug: !1,
                        //     newestOnTop: !1,
                        //     progressBar: !1,
                        //     positionClass: "toastr-top-right",
                        //     preventDuplicates: !1,
                        //     showDuration: "300",
                        //     hideDuration: "1000",
                        //     timeOut: "5000",
                        //     extendedTimeOut: "1000",
                        //     showEasing: "swing",
                        //     hideEasing: "linear",
                        //     showMethod: "fadeIn",
                        //     hideMethod: "fadeOut"
                        // }, toastr.error("User have been deleted'")
                        // })
                }))
            }))
        },
        f = () => {
            o.querySelectorAll('[data-kt-user-table-filter="delete_row"]').forEach((t => {
                t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const r = t.target.closest("tr"),
                        n = r.querySelectorAll("td")[0].innerText,
                        id = r.querySelectorAll("td")[4].querySelectorAll("[data-kt-user-table-filter='delete_row']")[0].getAttribute('id');
                        console.log('here');
                    Swal.fire({
                        text: "Are you sure you want to delete " + n + "?",
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
                                method: 'POST',
                                url: "<?php echo e(url('')); ?>/destroy/"+id+"/user"
                            }), Swal.fire({
                            text: "You have deleted " + n + "!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function() {
                            e.row($(r)).remove().draw()
                        }))) : "cancel" === t.dismiss && Swal.fire({
                            text: n + " was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
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
                    targets: 4
                }]
            })).on("draw", (function() {
                c(), d(), f()
            })), c(), d(), f(), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select").forEach((e => {
                    $(e).val("").trigger("change")
                }))
            })), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    r = t.querySelectorAll("select")
                n.addEventListener("click", (function() {
                    var t = ""; 
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
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/secretariat/user.blade.php ENDPATH**/ ?>