
<h1 class="d-flex text-dark fw-bolder my-1 fs-4">
    <?php if(($header??'')==''): ?>
    <a href="<?php echo e(url('dashboard')); ?>" class="text-gray-500 <?php if($dashboard==''): ?> active <?php endif; ?> text-active-dark me-2"><?php echo e((Auth::user()->group->name??'')); ?> Dashboard</a>
    <?php if(Auth::user()->group_id!=6 && Auth::user()->supervisor->count()>0): ?>
        | <a href="<?php echo e(url('dashboard/supervisor')); ?>" class="<?php if($dashboard=='supervisor'): ?> active <?php endif; ?>  text-gray-500 text-active-dark text-hover-primary mx-2">Supervisor Dashboard</a>
    <?php endif; ?>
    <?php if(Auth::user()->group_id!=4 && Auth::user()->referee->count()>0): ?>
        | <a href="<?php echo e(url('dashboard/referee')); ?>" class="<?php if($dashboard=='referee'): ?> active <?php endif; ?>  text-gray-500 text-active-dark text-hover-primary ms-2">Referee Dashboard</a>
    <?php endif; ?>
    <?php endif; ?>
    <?php echo e($header??''); ?>

    <?php if($subheader!='' || (Auth::user()->programme->name??'')!='' ): ?>
    <!--begin::Separator-->
    <span class="h-20px border-gray-400 border-start mx-3"></span>
    <!--end::Separator-->
    <?php endif; ?>
    <!--begin::Description-->
    <small class="text-gray-500 fs-7 fw-bold my-1 text-uppercase"><?php echo e($subheader); ?> <?php if($subheader==''): ?> <?php echo e(Auth::user()->programme->name??''); ?> <?php endif; ?></small>
<!--end::Description--></h1><?php /**PATH /var/www/html/mytgp/resources/views/components/pagetitle.blade.php ENDPATH**/ ?>