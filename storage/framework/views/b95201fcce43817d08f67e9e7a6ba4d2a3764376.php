<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'sec-talent-assesment-mark']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	Talents
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    TGP Assessment Marks
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
    <tr class="text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
        <th class="mw-250px" rowspan="2">Talent</th>
        <th class="text-center ps-0" rowspan="2">Cohort</th>
        <th class="text-center bg-light-info" colspan="3">Continuous Assessment by Supervisor<br>(Total marks = 60)</th>
        <th class="text-center ps-0" rowspan="2">Total</th>
        <th class="text-center bg-light-info" colspan="3">Final Assessment by Assessment Panel<br>(Total marks = 40)</th>
        <th class="text-center ps-0" rowspan="2">Total</th>
        <th class="text-center" rowspan="2">Overall Total</th>
        <th class="text-center d-none" rowspan="2">Status</th>
    </tr>
    <tr class="text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
        <th class="text-center bg-light-warning border-end ps-0 w-20px">Training<br/>attendance<br>(10 marks)</th>
        <th class="text-center bg-light-warning border-end ps-0 w-20px">TGP-CM<br/>(SV-Assessment)<br>(25 marks)</th>
        <th class="text-center bg-light-warning ps-0 w-20px">TGP TWER<br/>(SV-Assessment)<br>(25 marks)</th>
        <th class="text-center bg-light-success border-end ps-0 w-20px">Performance Appraisal<br/>(CV Improvement)<br>(5 marks)</th>
        <th class="text-center bg-light-success border-end ps-0 w-20px">TGP Project & <br/>Presentation<br>(30 marks)</th>
        <th class="text-center bg-light-success ps-0 w-20px">Self Reflection <br>(5 marks)</th>
    </tr>
    
    </thead>
    <tbody class="text-gray-800">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $subtotal1 = 0; $total = 0;
        $subtotal1 += $item->talent->course->where('attendance_id',4)->count()??'0'; 
        $data = json_decode($item->talent->finalmark);
        $subtotal2 = ($data->cv??0)+($data->project??0)+($data->self??0);
        ?>
            <tr>
                <td><?php echo e($item->name); ?><br/><span class="text-gray-700 fs-7"><?php echo e($item->designation); ?></span><br/><span class="text-gray-500 fs-8"><?php echo e($item->organization); ?></span></td>
                <td class="text-center"><?php echo e($item->talent->status->cohort??''); ?></td>
                <td class="text-center fw-bolder">
                    <?php echo e($item->talent->course->where('attendance_id',4)->count()??'0'); ?>

                </td>
                <td class="text-center fw-bolder">
                    <?php 
                    if(($item->talent->superlog2->total??0)<($item->talent->superlog3->total??0))
                        $tgpcm = $item->talent->superlog3->total??0;
                    else
                        $tgpcm = $item->talent->superlog2->total??0;
                        $subtotal1 += $tgpcm; 
                    ?>
                    <?php echo e($tgpcm); ?>

                </td>
                <td class="text-center fw-bolder">
                    <?php 
                    if(($item->talent->twer1->mark??0)<($item->talent->twer2->mark??0))
                        $tgptwer = $item->talent->twer2->mark??0;
                    else
                        $tgptwer = $item->talent->twer1->mark??0;
                        $subtotal1 += $tgptwer; 
                    ?>
                    <?php echo e($tgptwer); ?>

                </td>
                <td class="text-center subtotal1 fw-bolder"><?php echo e($subtotal1); ?></td>
                <td class="text-center"><!--begin::Input group-->
                    <div class="input-group w-100px m-auto" kt-value="<?php echo e($item->talent->id); ?>" kt-type="cv">
                        <input type="text" name="finalmark1[]" value="<?php echo e($data->cv??0); ?>" class="form-control form-control-sm finalmark" placeholder="" aria-describedby="basic-addon2"/>
                        <button class="btn btn-secondary btn-icon save btn-sm"  type="button">
                            <span class="indicator-label">
                            <i class="bi bi-save2 fs-2"></i>
                            </span>
                            
                        <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        </button>
                    </div>
                    <!--end::Input group-->
                </td>
                <td class="text-center"><!--begin::Input group-->
                    <div class="input-group w-100px m-auto" kt-value="<?php echo e($item->talent->id); ?>" kt-type="project">
                        <input type="text" name="finalmark2[]"  value="<?php echo e($data->project??0); ?>" class="form-control form-control-sm finalmark" placeholder="" aria-describedby="basic-addon2"/>
                        <button class="btn btn-secondary btn-icon save btn-sm"  type="button">
                            <span class="indicator-label">
                            <i class="bi bi-save2 fs-2"></i>
                            </span>
                            
                        <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        </button>
                    </div>
                    <!--end::Input group-->
                </td>
                <td class="text-center"><!--begin::Input group-->
                    <div class="input-group w-100px m-auto" kt-value="<?php echo e($item->talent->id); ?>" kt-type="self">
                        <input type="text" name="finalmark3[]" value="<?php echo e($data->self??0); ?>" class="form-control form-control-sm finalmark" placeholder="" aria-describedby="basic-addon2"/>
                        <button class="btn btn-secondary btn-icon save btn-sm"  type="button">
                            <span class="indicator-label">
                            <i class="bi bi-save2 fs-2"></i>
                            </span>
                            
                        <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        </button>
                    </div>
                    <!--end::Input group-->
                </td>
                <td class="text-center subtotal2 fw-bolder"><?php echo e($subtotal2); ?></td>
                <?php $total = $subtotal1+$subtotal2;?>
                <td class="text-center total fw-bolder"><?php echo e($total); ?></td>
                <td class="d-none">
                	<?php echo e($item->talent->status->finals->name??''); ?>

			    </div>
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
		d = () => {
            o.querySelectorAll('input[name*=finalmark]').forEach((e => {
                e.addEventListener("keypress", (function(event) {
                    var total=0;
                    var subtotal2= 0;
                    if (event.key === "Enter") {
                        var parenttr = e.parentElement.closest('tr');
                        var parent = e.parentElement.closest('td > .input-group');
						var btn = parent.querySelector('.btn');
                        btn.setAttribute("data-kt-indicator", "on");
                        // var parentparent = e.parentElement.closest('tr');
						// console.log(parent.querySelector('.btn'))
						var id = parent.getAttribute('kt-value');
						var type = parent.getAttribute('kt-type');
						var val = e.value;
                        // console.log(parent.getAttribute('kt-value'));
                        $.ajax({
                            method: "POST",
                            url: "<?php echo e(url('talent/finalscore')); ?>",
                            data: { id: id, val: val, type:type }
						}).done(function(){
						    btn.removeAttribute("data-kt-indicator");
                            subtotal2 = parseFloat(parenttr.querySelector('td > [kt-type=cv] > input').value) +
                            parseFloat(parenttr.querySelector('td > [kt-type=project] > input').value) + 
                            parseFloat(parenttr.querySelector('td > [kt-type=self] > input').value);
                            total = parseFloat(parenttr.querySelector('.subtotal1').innerHTML) + subtotal2;
                            parenttr.querySelector('.subtotal2').innerHTML = subtotal2;
                            parenttr.querySelector('.total').innerHTML = total;
                        });
    					// event.preventDefault();
					}
                }))
            }))
        },
        f = () => {
            o.querySelectorAll('.save').forEach((e => {
                e.addEventListener("click", (function(event) {
                    var total=0;
                    var subtotal2= 0;
                        var parenttr = e.parentElement.closest('tr');
                        var parent = e.parentElement.closest('td > .input-group');
                        e.setAttribute("data-kt-indicator", "on");
                        // var parentparent = e.parentElement.closest('tr');
						// console.log(parent.querySelector('.btn'))
						var id = parent.getAttribute('kt-value');
						var type = parent.getAttribute('kt-type');
						var val = parent.querySelector('input').value;
                        // console.log(parent.getAttribute('kt-value'));
                        $.ajax({
                            method: "POST",
                            url: "<?php echo e(url('talent/finalscore')); ?>",
                            data: { id: id, val: val, type:type }
						}).done(function(){
						    e.removeAttribute("data-kt-indicator");
                            subtotal2 = parseFloat(parenttr.querySelector('td > [kt-type=cv] > input').value) +
                            parseFloat(parenttr.querySelector('td > [kt-type=project] > input').value) + 
                            parseFloat(parenttr.querySelector('td > [kt-type=self] > input').value);
                            total = parseFloat(parenttr.querySelector('.subtotal1').innerHTML) + subtotal2;
                            parenttr.querySelector('.subtotal2').innerHTML = subtotal2;
                            parenttr.querySelector('.total').innerHTML = total;
                        });
    					// event.preventDefault();
                }))
            }))
        }
        
        
    return {
        init: function() {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td")
            })), (e = $(o).DataTable({
                info: 1,
                order: [[1, 'asc']],
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
                	// orderable: !1,
                    // targets: 10
                }]
            })).on("draw", (function() {
                d(), f()
            })),
			document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener("click", (function() {
                document.querySelector('[data-kt-user-table-filter="form"]').querySelectorAll("select, input").forEach((f => {
                    $(f).val("").trigger("change"),e.search("").draw(), e.columns(1).search("").draw(), e.columns(11).search("").draw()
                }))
            })), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]'),
                    n = t.querySelector('[data-kt-user-table-filter="filter"]'),
                    u = t.querySelector('[data-kt-user-table-filter="status"]'),
                    v = t.querySelector('[data-kt-user-table-filter="cohort"]'),
                    // r = t.querySelectorAll("select"),
                    i = t.querySelector("input");
					e.search("").draw(), e.columns(1).search("").draw(), e.columns(11).search("").draw()
					
                n.addEventListener("click", (function() {
                    e.column(11).search(u.value).draw(),(i.value!='')?e.columns(1).search("^"+i.value+"$",true,false).draw():e.columns(1).search("").draw()
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
<?php endif; ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/secretariat/talent-assesment-mark.blade.php ENDPATH**/ ?>