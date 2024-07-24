<div class="d-flex flex-wrap flex-stack p-5">
		<!--begin::Heading-->
		<h3 class="fw-bolder my-2">TGP Competency Domain Development Chart</h3>
		<!--end::Heading-->
		<?php if(Auth::user()->group_id==6|| Auth::user()->supervisor->count()>0): ?>
		<!--begin::Controls-->
		<div class="d-flex flex-wrap my-1">
			<!-- <a href="#" class="btn btn-sm <?php if($talent->superlog1): ?> btn-secondary <?php endif; ?> btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_assessment" data-talent="<?php echo e($talent->id); ?>" data-series="1">Baseline Assessment</a> -->
			<a href="#" class="btn btn-sm <?php if($talent->superlog2): ?> btn-secondary <?php endif; ?> btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_assessment" data-talent="<?php echo e($talent->id); ?>" data-series="2">1st Year Assessment</a>
			<a href="#" class="btn btn-sm <?php if($talent->superlog3 || !$talent->superlog2): ?> btn-secondary <?php endif; ?> btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_assessment" data-talent="<?php echo e($talent->id); ?>" data-series="3">2nd Year Assessment</a>
			
		</div>
		<!--end::Controls-->
		<?php endif; ?>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<!--begin::Summary-->
		<div class="card card-flush h-lg-100 mb-5">
			<!--begin::Card header-->
			<div class="card-header">
				<!--begin::Card title-->
				<div class="card-title flex-column">
					<h3 class="fw-bolder mb-1">Self Assessment</h3>
					<!-- <div class="fs-6 fw-bold text-gray-400">24 Overdue Tasks</div> -->
				</div>
				<!--end::Card title-->
				<div class="card-toolbar">
					<?php if(Auth::user()->group_id<=2): ?>
					<!--begin::Menu-->
					<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
									<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
									<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
									<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61de0f5f83814">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bolder">Actions</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<?php echo Form::open(array('route' => ['delete.talentlogbook'], 'method'=>'DELETE', 'id' => 'kt_add_mark_form')); ?>

    					<input type="hidden" name="talent_id" value="<?php echo e($talent->id); ?>">
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Input-->
								<div>
									<select name="series" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61de0f5f83814" data-allow-clear="true">
										<option></option>
										<option value="1">Baseline</option>
										<option value="2">1st Year entry</option>
										<option value="3">2nd Year entry</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<!-- <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button> -->
								<button type="submit" class="btn btn-sm btn-primary">Reset</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
						<?php echo Form::close(); ?>

					</div>
					<!--end::Menu 1-->
					<!--end::Menu-->
					<?php endif; ?>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-5 ps-1">
				<?php $x=0; ?>
				<?php $cats = array();$catm1 = array();$catm2 = array(); ?>
				<?php $__currentLoopData = $logcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php $x++;?>
				<!--begin::Notice-->
				<div class="fs-5 text-primary fw-bolder mb-7 ps-7"><?php echo e($cat->id); ?>. <?php echo e($cat->name); ?></div>
				<!--end::Notice-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-row">
					<!--begin::Chart-->
					<canvas id="kt_chartjs_<?php echo e($cat->id); ?>" class="w-50 h-100 me-5"></canvas>
					<!--end::Chart-->
					<!--begin::Labels-->
					<div class="d-flex flex-column justify-content-center flex-row-fluid">
						<table id="kt_table_users" class="table border table-rounded g-3 table-row-bordered table-row-gray-300 fs-7">
						    <thead>
						    <tr class="text-start text-gray-800 fw-bolder text-uppercase gs-0 bg-light">
						        <th rowspan="2" class="">Competency subdomain</th>
						        <th colspan="3" class="text-center">Level</th>
						    </tr>
						    <tr class="text-start text-gray-800 fw-bolder text-uppercase gs-0 bg-light">
						         <th class="text-center">CM-0</th>
						         <th class="text-center">CM-1</th>
						         <th class="text-center">CM-2</th>
						    </tr>
						    </thead>
						    <tbody class="text-gray-800">
						    	<?php $i=0; $subs = array();$subm1 = array();$subm2 = array();  ?>
						    	
						    	<?php $__currentLoopData = $cat->logbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<?php $i++; 
						    	$q = 'q'.$log->id;
						    	$subs[] = $cat->code.$i;
						    	if($talent->selflog3){
							    	$subm1[] = $talent->applicant->selflog->$q??'0';
							    	$subm2[] = $talent->selflog3->$q??'0';
								}else{
									$subm1[] = $talent->applicant->selflog->$q??'0';
									$subm2[] = $talent->selflog2->$q??'0';
								}
						    	?>
						    	<tr>
						    		<td><?php echo e($cat->code); ?><?php echo e($i); ?> <?php echo e($log->item); ?></td>
						    		<td class="text-center text-danger"><?php echo e($talent->applicant->selflog->$q??''); ?></td>
						    		<td class="text-center <?php echo e(($talent->selflog3)?'text-gray-800':'text-primary'); ?>"><?php echo e($talent->selflog2->$q??''); ?></td>
						    		<td class="text-center <?php echo e(($talent->selflog3)?'text-primary':'text-gray-800'); ?>"><?php echo e($talent->selflog3->$q??''); ?></td>
						    	</tr>
						    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    	<?php  $cats[] = $subs;$catm1[] = $subm1;$catm2[] = $subm2;?>
						    </tbody>
						</table>
					</div>
					<!--end::Labels-->
				</div>
				<!--end::Wrapper-->
				<?php if($x!=5): ?>
				<div class="separator separator-dashed my-7"></div>
				<?php endif; ?>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Summary-->
	</div>

	<div class="col-lg-6">
		<!--begin::Summary-->
		<div class="card card-flush h-lg-100 mb-5">
			<!--begin::Card header-->
			<div class="card-header">
				<!--begin::Card title-->
				<div class="card-title flex-column">
					<h3 class="fw-bolder mb-1">Supervisor Assessment</h3>
					<!-- <div class="fs-6 fw-bold text-gray-400">24 Overdue Tasks</div> -->
				</div>
				<!--end::Card title-->
				<div class="card-toolbar">
					<?php if(Auth::user()->group_id<=2): ?>
					<!--begin::Menu-->
					<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
									<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
									<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
									<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61de0f5f83814">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bolder">Actions</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<?php echo Form::open(array('route' => ['delete.supervisorlogbook'], 'method'=>'DELETE', 'id' => 'kt_add_mark_form')); ?>

    					<input type="hidden" name="talent_id" value="<?php echo e($talent->id); ?>">
    					<input type="hidden" name="supervisor_id" value="<?php echo e($talent->superlog1->supervisor_id??''); ?>">
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Input-->
								<div>
									<select name="series" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true">
										<option></option>
										<option value="1">Baseline</option>
										<option value="2">1st Year entry</option>
										<option value="3">2nd Year entry</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<!-- <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button> -->
								<button type="submit" class="btn btn-sm btn-primary">Reset</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
						<?php echo Form::close(); ?>

					</div>
					<!--end::Menu 1-->
					<!--end::Menu-->
					<?php endif; ?>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-5 ps-1">
				<?php $x=0; ?>
				<?php $cats1 = array();$cats2 = array(); ?>
				<?php $__currentLoopData = $logcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php $x++;?>
				<!--begin::Notice-->
				<div class="fs-5 text-primary fw-bolder mb-7 ps-7"><?php echo e($cat->id); ?>. <?php echo e($cat->name); ?></div>
				<!--end::Notice-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-row">
					<!--begin::Chart-->
					<!-- <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
						<div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
							<span class="fs-2qx fw-bolder">237</span>
							<span class="fs-6 fw-bold text-gray-400">Total Tasks</span>
						</div>
						<canvas id="project_overview_chart" style="display: block; box-sizing: border-box; height: 175px; width: 175px;" width="140" height="140"></canvas>
						<canvas id="kt_chartjs_<?php echo e($cat->id); ?>" class="w-50 h-300px"></canvas>
					
					</div> -->
					<canvas id="kt_chartjs_super_<?php echo e($cat->id); ?>" class="w-50 h-100 me-5"></canvas>
					<!--end::Chart-->
					<!--begin::Labels-->
					<div class="d-flex flex-column justify-content-center flex-row-fluid">
						<table id="kt_table_users" class="table border table-rounded g-3 table-row-bordered table-row-gray-300 fs-7">
						    <thead>
						    <tr class="text-start text-gray-800 fw-bolder text-uppercase gs-0 bg-light">
						        <th rowspan="2" class="">Competency subdomain</th>
						        <th colspan="3" class="text-center">Level</th>
						    </tr>
						    <tr class="text-start text-gray-800 fw-bolder text-uppercase gs-0 bg-light">
						         <th class="text-center">CM-0</th>
						         <th class="text-center">CM-1</th>
						         <th class="text-center">CM-2</th>
						    </tr>
						    </thead>
						    <tbody class="text-gray-800">
						    	<?php $i=0; $subm1 = array();$subm2 = array();  ?>
				    	
						    	<?php $__currentLoopData = $cat->logbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<?php $i++; 
						    	$q = 'q'.$log->id;
								foreach($talent->applicant->reflog as $reflog){
									$ref[] = $reflog;
								}
								$subref = isset($ref[0]) && isset($ref[1]) ?number_format(($ref[0]->$q+$ref[1]->$q)/2,1,'.'):0.0;

						    	if($talent->superlog3){
						    	    $subm1[] = $subref;
							    	$subm2[] = $talent->superlog3->$q??'0';
								}else{
									$subm1[] = $subref;
									$subm2[] = $talent->superlog2->$q??'0';
								}
						    	?>
						    	<tr>
						    		<td><?php echo e($cat->code); ?><?php echo e($i); ?> <?php echo e($log->item); ?></td>
						    		<td class="text-center text-danger"><?php echo e($subref); ?></td>
						    		<td class="text-center <?php echo e(($talent->superlog3)?'text-gray-800':'text-primary'); ?>"><?php echo e($talent->superlog2->$q??''); ?></td>
						    		<td class="text-center <?php echo e(($talent->superlog3)?'text-primary':'text-gray-800'); ?>"><?php echo e($talent->superlog3->$q??''); ?></td>
						    	</tr>
						    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    	<?php  $cats1[] = $subm1;$cats2[] = $subm2;?>
						    </tbody>
						</table>
					</div>
					<!--end::Labels-->
				</div>
				<!--end::Wrapper-->
				<?php if($x!=5): ?>
				<div class="separator separator-dashed my-7"></div>
				<?php endif; ?>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Summary-->
	</div>
</div>

 <?php $__env->slot('scripts', null, []); ?> 
<script>
"use strict";
var KTAppEcommerceSavelogbook = function() {

	return {
        init: function() {

                var f = KTUtil.getCssVariableValue('--bs-font-sans-serif');
                
                var e, c, d;
                c = () => {

                <?php $i=0 ?>
                <?php $__currentLoopData = $logcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                e = document.getElementById("kt_chartjs_<?php echo e($cat->id); ?>");
                e && new Chart(e, {
                    type: 'radar',
		    data: {
		    	labels: <?php echo json_encode($cats[$i], JSON_NUMERIC_CHECK)?>,
		    	datasets:[{
			    label: 'CM-0',
			    data: <?php echo json_encode($catm1[$i], JSON_NUMERIC_CHECK)?>,
			    fill: true,
			    backgroundColor: 'rgba(255, 99, 132, 0.2)',
			    borderColor: 'rgb(255, 99, 132)',
			    pointBackgroundColor: 'rgb(255, 99, 132)',
			    pointBorderColor: '#fff',
			    pointHoverBackgroundColor: '#fff',
			    pointHoverBorderColor: 'rgb(255, 99, 132)'
			  }, {
			    label: ("<?php echo e($talent->selflog3); ?>"==!1)?'CM-1':'CM-2',
			    data: <?php echo json_encode($catm2[$i], JSON_NUMERIC_CHECK)?>,
			    fill: true,
			    backgroundColor: 'rgba(54, 162, 235, 0.2)',
			    borderColor: 'rgb(54, 162, 235)',
			    pointBackgroundColor: 'rgb(54, 162, 235)',
			    pointBorderColor: '#fff',
			    pointHoverBackgroundColor: '#fff',
			    pointHoverBorderColor: 'rgb(54, 162, 235)'
			  }]
		    },
		    options: {
		        plugins: {
		            title: {
		                display: false,
		            },
		            legend: {
		                labels: {
		                    // This more specific font property overrides the global property
		                    font: {
		                        size: 20,
		                        family: f
		                    }
		                },
		                position: 'bottom'
		            }
		        },
		        responsive: true,
		        scales: {
			      r: {
			        ticks: {
			          stepSize: 1,
			          font: {
		                        size: 25
		                    },
			        },
			        pointLabels: {
				    font: {
				      size: 20
				    }
				  },
			      min: 0,
			      max: 5  
			      }
			    }
		    },
		    defaults:{
		        global: {
		            // defaultFont: fontFamily
		        }
		    }
                })
                <?php if($cat->id<5): ?>
                ,
                <?php endif; ?>
                <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                };
                d = () => {

                <?php $i=0 ?>
                <?php $__currentLoopData = $logcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                e = document.getElementById("kt_chartjs_super_<?php echo e($cat->id); ?>");
                
                e && new Chart(e, {
                    type: 'radar',
		    data: {
		    	labels: <?php echo json_encode($cats[$i], JSON_NUMERIC_CHECK)?>,
		    	datasets:[{
			    label: 'CM-0',
			    data: <?php echo json_encode($cats1[$i], JSON_NUMERIC_CHECK)?>,
			    fill: true,
			    backgroundColor: 'rgba(255, 99, 132, 0.2)',
			    borderColor: 'rgb(255, 99, 132)',
			    pointBackgroundColor: 'rgb(255, 99, 132)',
			    pointBorderColor: '#fff',
			    pointHoverBackgroundColor: '#fff',
			    pointHoverBorderColor: 'rgb(255, 99, 132)'
			  }, {
			    label: ("<?php echo e($talent->superlog3); ?>"==!1)?'CM-1':'CM-2',
			    data: <?php echo json_encode($cats2[$i], JSON_NUMERIC_CHECK)?>,
			    fill: true,
			    backgroundColor: 'rgba(54, 162, 235, 0.2)',
			    borderColor: 'rgb(54, 162, 235)',
			    pointBackgroundColor: 'rgb(54, 162, 235)',
			    pointBorderColor: '#fff',
			    pointHoverBackgroundColor: '#fff',
			    pointHoverBorderColor: 'rgb(54, 162, 235)'
			  }]
		    },
		    options: {
		        plugins: {
		            title: {
		                display: false,
		            },
		            legend: {
		                labels: {
		                    // This more specific font property overrides the global property
		                    font: {
		                        size: 20,
		                        family: f
		                    }
		                },
		                position: 'bottom'
		            }
		        },
		        responsive: true,
		        scales: {
			      r: {
			        ticks: {
			          stepSize: 1,
			          font: {
		                        size: 25
		                    },
			        },
			        pointLabels: {
				    font: {
				      size: 20
				    }
				  },
			      min: 0,
			      max: 5  
			      }
			    }
		    },
		    defaults:{
		        global: {
		            // defaultFont: fontFamily
		        }
		    }
                })
                <?php if($cat->id<5): ?>
                ,
                <?php endif; ?>
                <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                };
                c(), d();
        
	}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSavelogbook.init()
    $('#kt_modal_assessment').modal({backdrop:'static', keyboard:false});
    $("#kt_modal_assessment").on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('talent');
        var series = $(e.relatedTarget).data('series');
        var modal = $(this);

        $.get( "<?php echo e(url('/supervisor/logbook')); ?>/"+series+'/'+id+'/modal', function( data ){
            modal.find('.modal-load').html(data);
            KTApp.init()
        });
        
    });
    
}));
</script>
 <?php $__env->endSlot(); ?>
<?php /**PATH /var/www/html/mytgp/resources/views/logbook-chart.blade.php ENDPATH**/ ?>