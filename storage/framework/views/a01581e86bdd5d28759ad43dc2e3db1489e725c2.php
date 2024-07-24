<?php $__env->startComponent('mail::message'); ?>
Dear Sir/Mdm,<br><br>

You have been invited to attend a TGP course organized by TGP Programme. Below are the details of the course. Please login to MyTGP System to accept or reject this invitation.


<?php $__env->startComponent('mail::table'); ?>
|            |            | 
|:---------  |:-----------|
| **Course Title** :    | <?php echo e($course->title); ?> |
| **Date**:             | <?php echo e(date("d M Y",strtotime($course->start_date))); ?> - <?php echo e(date("d M Y",strtotime($course->end_date))); ?>|
| **Remark**:              |: <?php echo $course->remark; ?>|
<?php echo $__env->renderComponent(); ?>

Click on the button below to log into the system

<?php $__env->startComponent('mail::button', ['url' => url('login'), 'color'=> 'green']); ?>
MyTGP
<?php echo $__env->renderComponent(); ?>

Thank you for participating in MyTGP System.  <br/><br/>
   


<p>&nbsp;</p>
<span style="font-size: 11px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply to it.</span>
<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/html/mytgp/resources/views/email/course-invite.blade.php ENDPATH**/ ?>