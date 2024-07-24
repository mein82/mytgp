<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => '']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
Recommendation List
 <?php $__env->endSlot(); ?>

<div class="row g-6 g-xl-9">
	<!--begin::Col-->
	<div class="col-md-12 col-xxl-12">
<!--begin::Card-->
	<div class="card card-flush">
		<!--begin::Card body-->
		<div class="card-body pt-0">
			<!--begin::Table container-->
			<div class="table-responsive">
				<!--begin::Table-->
				<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
					<!--begin::Head-->
					<thead class="fs-7 text-gray-400 text-uppercase">
						<tr>
							<th class="min-w-250px">Applicant</th>
							<th class="min-w-250px">Position</th>
							<th class="min-w-150px">Recommendation</th>
							<th class="min-w-90px">Assessment</th>
						</tr>
					</thead>
					<!--end::Head-->
					<!--begin::Body-->
					<tbody class="fs-6">
						<?php $__currentLoopData = $recommendation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $i=0; ?>
						<tr>
							<td>
								<!--begin::User-->
								<div class="d-flex align-items-center">
									<!--begin::Wrapper-->
									<div class="me-5 position-relative">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<?php if($item->talent->user->avatar !='default.png'): ?>
											<img alt="Pic" src="<?php echo e(url('')); ?>/photo/<?php echo e($item->talent->user->avatar); ?>" />
											<?php else: ?>
											<span class="symbol-label bg-light-danger text-danger fw-bold"><?php echo e(substr($item->talent->user->name, 0,1)); ?></span>
											<?php endif; ?>
										</div>
										<!--end::Avatar-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Info-->
									<div class="d-flex flex-column justify-content-center">
										<a href="" class="mb-1 text-gray-800 text-hover-primary"><?php echo e($item->talent->user->name); ?></a>
										<div class="fw-bold fs-6 text-gray-400"><?php echo e($item->talent->user->email); ?></div>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
							</td>
							<td>
								<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6"><?php echo e($item->talent->user->designation); ?></a>
								<span class="text-muted fw-bold text-muted d-block fs-7"><?php echo e($item->talent->user->organization); ?></span>
							</td>
							<td>
								<?php if(is_null($item->status_id)): ?> <?php $i++; ?><a href="<?php echo e(url('recommendation/'.$item->id)); ?>"  class="badge badge-light-danger fw-bolder px-4 py-3">Click here</a>
								<?php else: ?> <a href="<?php echo e(url('recommendation/view/'.$item->id)); ?>" class="badge badge-light-success fw-bolder px-4 py-3">Completed</a> <?php endif; ?>

							</td>
							<td>
								<?php if(!is_null($item->status_id)): ?>
								<?php if(!getRefLog($item->referee_id, $item->talent_id)): ?> <?php $i++; ?><a href="<?php echo e(url('referee/logbook/'.$item->talent_id)); ?>" class="badge badge-light-danger fw-bolder px-4 py-3">Click here</a>
								<?php else: ?> <a href="<?php echo e(url('referee/'.$item->referee_id.'/view/logbook/'.$item->talent_id)); ?>" class="badge badge-light-success fw-bolder px-4 py-3">Completed</a> <?php endif; ?>
								<?php endif; ?>
							</td>
							
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<!--end::Body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Table container-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
	</div>
</div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/referee/recommendation-list.blade.php ENDPATH**/ ?>