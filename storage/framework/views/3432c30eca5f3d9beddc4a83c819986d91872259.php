<?php $__env->startComponent('mail::message'); ?>
Dear Sir/Mdm,<br><br>

There are new updates on <?php echo e($category); ?> from your Talent <b><?php echo e($talent->title->name??''); ?> <?php echo e($talent->user->name??''); ?></b>.

Log into the system to check what are the updates.

<?php $__env->startComponent('mail::button', ['url' => url('login'), 'color'=> 'green']); ?>
MyTGP
<?php echo $__env->renderComponent(); ?>

Thank you for participating in MyTGP System.  <br/><br/>
   
<p>&nbsp;</p>
<span style="font-size: 11px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply to it.</span>
<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/html/mytgp/resources/views/email/inform-supervisor.blade.php ENDPATH**/ ?>