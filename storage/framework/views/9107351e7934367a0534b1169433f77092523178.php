<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'panel-applicant']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	Applicants
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
Evaluation
 <?php $__env->endSlot(); ?>


<div class="card mb-5 mb-xl-8">
<!--begin::Body-->
<div class="card-body py-10">
	<div class="d-flex flex-stack flex-wrap mb-5">
		<!--begin::Search-->
		<div class="d-flex align-items-center position-relative my-1 mb-2 mb-md-0">
			<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
			<span class="svg-icon svg-icon-1 position-absolute ms-6">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
					<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
				</svg>
			</span>
			<!--end::Svg Icon-->
			<input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search">
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
						<label class="form-label fs-5 fw-bold mb-3">Status:</label>
                        <input type="hidden" name="keystatus" value="<?php echo e($key_status); ?>">
						<!--end::Label-->
						<!--begin::Options-->
						<div class="d-flex flex-column flex-wrap fw-bold" data-kt-docs-table-filter="status_type">
							<!--begin::Option-->
							<label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
								<input class="form-check-input" type="radio" name="status_type" value="all" checked="checked">
								<span class="form-check-label text-gray-600">All</span>
							</label>
							<!--end::Option-->
							<!--begin::Option-->
							<label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
								<input class="form-check-input" type="radio" name="status_type" value="Complete">
								<span class="form-check-label text-gray-600">Complete</span>
							</label>
							<!--end::Option-->
							<!--begin::Option-->
							<label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
								<input class="form-check-input" type="radio" name="status_type" value="Incomplete">
								<span class="form-check-label text-gray-600">Incomplete</span>
							</label>
							<!--end::Option-->
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
			<span class="me-2" data-kt-docs-table-select="selected_count"></span>Selected</div>
			<button type="button" class="btn btn-danger" data-kt-docs-table-select="delete_selected">Selection Action</button>
		</div>
		<!--end::Group actions-->
	</div>
	<!--end::Wrapper-->

<!--begin::Datatable-->
<table id="kt_datatable_example_2" class="table align-middle border-bottom table-row-bordered table-striped table-row-gray-200 fs-6 gy-3 gs-7">
    <thead>
    <tr class="text-start text-gray-700 fw-bolder fs-7 text-uppercase gs-0">
        <th>#</th>
        <th>Applicant</th>
        <th class="d-none"></th>
        <th class="d-none"></th>
        <th>Status</th>
        <th>Panel Evaluation</th>
        <th class="text-end min-w-100px">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-800">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count = 0; ?>
            <tr>
                <td></td>
                <td><?php echo e($item->name); ?><br/>
                    <span class="text-gray-700 fs-7"><?php echo e($item->designation); ?></span><br/>
                    <span class="text-gray-500 fs-8"><?php echo e($item->organization); ?></span>
                </td>
                <td class="text-center d-none">
                    <?php if(!is_null($item->applicant->statement)): ?>
                        <?php $count++; ?>    
                    <?php endif; ?>
                    <?php if($item->applicant->recommend->whereNotNull('status_id')->count()==2): ?>
                        <?php $count+=3; ?>
                    <?php else: ?>
                        <?php if($item->applicant->recommend->count()>0 && $item->applicant->recommend->count()<2): ?>
                        <?php $count++; ?>
                        <?php else: ?>
                        <?php $count+=2; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if($item->applicant->recommend->count()>0): ?>
                        <?php if($item->applicant->selflog): ?>
                        <?php $count++; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if($item->applicant->recommend->count()>0): ?>
                        <?php if($item->applicant->reflog->count()==2): ?>
                        <?php $count+=2; ?>
                        <?php elseif($item->applicant->reflog->count()==0): ?>
                        <?php else: ?>
                        	<?php $count++; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php echo e($count); ?>

            	</td>
                <td class="d-none"><?php if($count>=7): ?> Complete <?php else: ?> Incomplete <?php endif; ?></td>
                <td>
                	<?php if($count>=7): ?>
                        <span class="ms-2 badge badge-success text-hover-inverse-success fw-bold">Complete</span>
                	<?php else: ?>
                   		<span class="ms-2 badge badge-warning text-hover-inverse-warning fw-bold">Incomplete</span>
                   	<?php endif; ?>
                </td>
                <td><?php if(is_null(Auth::user()->programme_id)): ?> 
                	<?php echo e($item->applicant->panel->status->name??''); ?>

                	<?php else: ?> 
                	<?php echo e($item->applicant->panel_auth->status->name??''); ?>

                	<?php endif; ?></td>
                <td class="text-end">
                    <a href="<?php echo e(url('/panel/applicant/summary/'.$item->applicant->id)); ?>" class="btn btn-dark btn-sm">
                        Evaluate
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


 <?php $__env->slot('scripts', null, []); ?> 

<script>
"use strict";

// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table;
    var dt;
    var filterStatus;

     // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_example_2").DataTable({
            scrollY: "500px",
            scrollCollapse: true,
            paging: false,
            dom: "<'table-responsive'tri>",
            order: [[2, 'desc']],
            columnDefs: [
                {
                    targets: [2, 3],
                    visible :false,
                },
                ]
        });
        dt.on('order.dt search.dt', function () {
        let i = 1;
        dt.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
            this.data((i++)+".");
        });
        }).draw();
        table = dt.$;

        // dt.on('draw', function () {
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
        filterStatus = document.querySelectorAll('[data-kt-docs-table-filter="status_type"] [name="status_type"]');
        const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]'),
        q = document.querySelector('[name="keystatus"]'),
        u = $('[data-kt-docs-table-filter="status_type"]');
        if(q.value!="")
            filterStatus.forEach(r => {if (r.value==q.value) r.checked = true;}),dt.column(3).search("^"+q.value, true, false).draw();
            
        // Filter datatable on submit
        filterButton.addEventListener('click', function () {
            // Get filter values
            let statusValue = '';

            // Get payment value
            filterStatus.forEach(r => {
                if (r.checked) {
                    statusValue = r.value;
                }

                // Reset payment value if "All" is selected
                if (statusValue === 'all') {
                    statusValue = '';
                }
            });
            dt.column(3).search("^"+statusValue, true, false).draw();
            
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

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
    $("#kt_modal_recommend").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "<?php echo e(url('applicant/recommendation')); ?>/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
            // $('.loading').hide();
          });
    });
    $("#kt_modal_selfcm").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "<?php echo e(url('applicant/selfcm')); ?>/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
            // $('.loading').hide();
          });
    });
    $("#kt_modal_refcm").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        var modal = $(this);

        $.get( "<?php echo e(url('applicant/refcm')); ?>/"+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
            // $('.loading').hide();
          });
    });
    $('#kt_modal_recommend, #kt_modal_selfcm, #kt_modal_refcm').on('hidden.bs.modal', function(e){ 
     $(this).removeData('bs.modal');
      $(this).find('.modal-load').html('');
}) ;
});

</script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/panel/applicants.blade.php ENDPATH**/ ?>