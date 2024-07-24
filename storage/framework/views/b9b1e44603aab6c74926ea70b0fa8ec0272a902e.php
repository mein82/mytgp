<div class="card mb-5 mb-xxl-8">
    <div class="card-body pt-0 pb-0">
        <!--begin::Navs-->
        <ul class="nav nav-stretch nav-justified nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 <?php if($section==''||$section=='executive-summary'): ?> active <?php endif; ?>" href="<?php echo e(url('/talent/assessment/project/executive-summary')); ?>">Executive Summary</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 <?php if($section=='presentation-publication'): ?> active <?php endif; ?>" href="<?php echo e(url('/talent/assessment/project/presentation-publication')); ?>">Project Presentation & Publication</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 <?php if($section=='project-report'): ?> active <?php endif; ?>" href="<?php echo e(url('/talent/assessment/project/project-report')); ?>">Project Report</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 <?php if($section=='final-presentation'): ?> active <?php endif; ?>" href="<?php echo e(url('/talent/assessment/project/final-presentation')); ?>">Project Final Presentation</a>
            </li>
            <!--end::Nav item-->
        </ul>
        <!--begin::Navs-->
    </div>
</div>
<?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/talent/assessment-project-header.blade.php ENDPATH**/ ?>