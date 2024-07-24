<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<!--begin::User-->
<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="<?php echo e($item->id); ?>">
<!--begin::Details-->
<div class="d-flex align-items-center">
	<!--begin::Checkbox-->
	<label class="form-check form-check-custom form-check-solid me-5">
		<input class="form-check-input" type="checkbox" name="users[]" data-kt-check="true" data-kt-check-target="[data-user-id='<?php echo e($item->id); ?>']" value="<?php echo e($item->id); ?>" />
	</label>
	<!--end::Checkbox-->
	<!--begin::Avatar-->
	<div class="symbol symbol-35px symbol-circle">
		<?php if($item->avatar !='default.png'): ?>
		<img alt="Pic" src="<?php echo e(url('')); ?>/photo/<?php echo e($item->avatar); ?>" />
		<?php else: ?>
		<span class="symbol-label bg-light-danger text-danger fw-bold"><?php echo e(substr($item->name, 0,1)); ?></span>
		<?php endif; ?>
	</div>
	<!--end::Avatar-->
	<!--begin::Details-->
	<div class="ms-5">
		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"><?php echo e($item->name); ?></a>
		<div class="fw-bold text-muted"><?php echo e($item->email); ?></div>
	</div>
	<!--end::Details-->
</div>
<!--end::Details-->
<!--begin::Access menu-->
<div class="ms-2 w-50">
	<div class="fw-bold"><?php echo e($item->organization); ?></div>
	<div class="fw-bold text-muted"><?php echo e($item->contactno); ?></div>

</div>
<!--end::Access menu-->
<div class="ms-2">
<?php if($item->talent): ?>
	<div class="badge badge-light-success fw-bold">Cohort <?php echo e($item->talent->status->cohort); ?></div>
<?php else: ?>
	<span class="badge badge-light-success mb-1">Applicant</span>
<?php endif; ?>
</div>
</div>
<!--end::User-->
<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/mytgp/resources/views/select-talent-list.blade.php ENDPATH**/ ?>