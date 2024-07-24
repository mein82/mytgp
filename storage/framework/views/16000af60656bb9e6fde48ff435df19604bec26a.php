<?php $__env->startComponent('mail::message'); ?>
Hi <b><?php echo e($user); ?>,</b><br>
    
<?php echo $content; ?>


<span style="font-size: 12px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply.</span>
<?php echo $__env->renderComponent(); ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/email/assessment-complete.blade.php ENDPATH**/ ?>