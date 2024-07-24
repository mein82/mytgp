<?php $__env->startComponent('mail::message'); ?>
Hi <b><?php echo e($user->name); ?>,</b><br>
    
Please complete your assessment for the applicant stated below. Click on the button below to log into the system with this email address.


<?php $__env->startComponent('mail::button', ['url' => url('login'), 'color'=> 'green']); ?>
MyTGP
<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::table'); ?>
|            |            | 
|:---------  |:-----------|
| **Programme**     |: Talent Grooming Programme for<br/> Technical Healthcare Professionals |
| **Name**     |: <?php echo e($talent->user->name); ?> |
| **Email**     |: <?php echo e($talent->user->email); ?>|
| **Phone No.**     |: <?php echo e($talent->mobile_phone); ?>|
| **Designation**     |: <?php echo e($talent->user->designation); ?> <?php echo e($talent->user->scheme->name??''); ?><?php echo e($talent->user->grade_->name??''); ?>|
<?php echo $__env->renderComponent(); ?>


   
Click on the forgot password link if you have forgotten the password. Thank you for participating in MyTGP System.<br/><br/>


<span style="font-size: 12px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply.</span>
<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/html/mytgp/resources/views/email/assessment-referee.blade.php ENDPATH**/ ?>