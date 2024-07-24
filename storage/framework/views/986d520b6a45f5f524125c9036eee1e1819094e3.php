<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'training']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
	Training
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Listing
 <?php $__env->endSlot(); ?>

<div class="row">
    <div class="col-lg-4 col-sm-12 order-sm-last mb-5">
    <h3 class="fw-bolder d-flex align-items-center text-dark mb-5">Requirement of Compulsory Training
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Click image to enlarge."></i></h3>
<!--begin::Overlay-->
<a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?php echo e(url('')); ?>/img/training-2.png">
    <!--begin::Image-->
    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-225px"
        style="background-size:50% ;background-image:url('<?php echo e(url('')); ?>/img/training-2.png')">
    </div>
    <!--end::Image-->

    <!--begin::Action-->
    <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
        <i class="bi bi-eye-fill text-white fs-3x" title="Click to enlarge"></i>
    </div>
    <!--end::Action-->
</a>
<!--end::Overlay-->
<!--begin::Overlay-->
<a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?php echo e(url('')); ?>/img/training.png">
    <!--begin::Image-->
    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-225px"
        style="background-image:url('<?php echo e(url('')); ?>/img/training.png')">
    </div>
    <!--end::Image-->

    <!--begin::Action-->
    <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
        <i class="bi bi-eye-fill text-white fs-3x" title="Click to enlarge"></i>
    </div>
    <!--end::Action-->
</a>
<!--end::Overlay-->



    </div>
    <div class="col-lg-8 col-sm-12 order-sm-1">
        
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
            <th>Title</th>
            <th class="mw-250px">Date</th>
            <th>Domain</th>
            <th>Status</th>
            <th>Attendance</th>
            <th class="text-end min-w-200px exclude">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-800">
            <?php $count = 0; ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $count++; ?>
                <tr>
                    <td><?php echo e($count); ?>.</td>
                    <td><span class="badge badge-light-success me-2"><?php echo e($item->course->type->name??''); ?></span><br/><?php echo e($item->course->title); ?> <br/><?php if(!is_null($item->course->platform_id)): ?>(<?php echo e($item->course->platform??''); ?>)<?php endif; ?></td>
                    <td><?php echo e(date("d/m/Y",strtotime($item->course->start_date))); ?> - <?php echo e(date("d/m/Y",strtotime($item->course->end_date))); ?></td>
                    <td><?php echo e($item->course->domain->name??''); ?></td>
                    <td><div class="d-flex"> 
                        <?php if($item->food==1): ?>
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35px m-1">
                            <span class="symbol-label bg-light-success">
                                <i class="fas fa-solid fa-carrot text-success fs-2"></i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <?php endif; ?>
                        <?php if($item->accomodation==1): ?>
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35px m-1">
                            <span class="symbol-label bg-light-danger">
                                <i class="fas fa-solid fa-suitcase-rolling text-success fs-2"></i>
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <?php endif; ?>
                        </div>
                        <span class="badge <?php echo e(($item->status_id==1)?'badge-light-success':'badge-light-danger'); ?> me-2"><?php echo e($item->status->name??''); ?></span>
                        
                        <div class="fs-7 ms-5 mt-2"><?php echo e($item->reason); ?></div>
                    </td>
                    <td><span class="badge <?php echo e(($item->attendance_id==1)?'badge-light-success':'badge-light-danger'); ?> me-2"><?php echo e($item->attendance->name??''); ?></span>
                        <div class="fs-7 ms-5 mt-2"><?php echo e($item->remark); ?></div>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-primary <?php if($item->status_id>1 || $item->course->start_date<date('Y-m-d')): ?> disabled <?php endif; ?> btn-active-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_response" data-id="<?php echo e($item->id); ?>">
                            Response
                            <span class="svg-icon svg-icon-2 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
    <path d="M11.276 13.654C11.276 13.2713 11.3367 12.9447 11.458 12.674C11.5887 12.394 11.738 12.1653 11.906 11.988C12.0833 11.8107 12.3167 11.61 12.606 11.386C12.942 11.1247 13.1893 10.896 13.348 10.7C13.5067 10.4947 13.586 10.2427 13.586 9.944C13.586 9.636 13.4833 9.356 13.278 9.104C13.082 8.84267 12.69 8.712 12.102 8.712C11.486 8.712 11.066 8.866 10.842 9.174C10.6273 9.482 10.52 9.82267 10.52 10.196L10.534 10.574H8.826C8.78867 10.3967 8.77 10.2333 8.77 10.084C8.77 9.552 8.90067 9.07133 9.162 8.642C9.42333 8.20333 9.81067 7.858 10.324 7.606C10.8467 7.354 11.4813 7.228 12.228 7.228C13.1987 7.228 13.9687 7.44733 14.538 7.886C15.1073 8.31533 15.392 8.92667 15.392 9.72C15.392 10.168 15.322 10.5507 15.182 10.868C15.042 11.1853 14.874 11.442 14.678 11.638C14.482 11.834 14.2253 12.0533 13.908 12.296C13.544 12.576 13.2733 12.8233 13.096 13.038C12.928 13.2527 12.844 13.528 12.844 13.864V14.326H11.276V13.654ZM11.192 15.222H12.928V17H11.192V15.222Z" fill="black"/>
    </svg>
                            </span>
                        </a>
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

    </div>
    </div>


<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_response" tabindex="-1" aria-hidden="true" data-backdrop="static">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <div class="modal-header">
				<!--begin::Modal title-->
				<h3>Attendance Confirmation</h3>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
            <!--begin::Modal body-->
            <div class="modal-body px-5 px-xl-10">
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

 <?php $__env->slot('scripts', null, []); ?> 
<script src="<?php echo e(url('')); ?>/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>

<script>
"use strict";
var KTUsersList = function() {
    var  e, t, n, r, i, id, o = document.getElementById("kt_table_users");
        
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
                    targets: 5
                }]
            })), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()
    $('#kt_modal_response').modal({backdrop:'static', keyboard:false});
    $("#kt_modal_response").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);
        $.get( "<?php echo e(url('training/response')); ?>/"+id+'/modal', function( data ){
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
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/talent/training.blade.php ENDPATH**/ ?>