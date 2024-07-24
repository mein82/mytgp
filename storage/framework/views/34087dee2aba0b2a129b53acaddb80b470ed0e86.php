<?php $__env->startComponent('mail::message'); ?>
Dear Sir/Mdm,<br><br>

There is a new comment on TWER from your Supervisor.

Log into the system to check what is the comment.

<?php $__env->startComponent('mail::button', ['url' => url('login'), 'color'=> 'green']); ?>
MyTGP
<?php echo $__env->renderComponent(); ?>

Thank you for participating in MyTGP System.  <br/><br/>
   
<p>&nbsp;</p>
<span style="font-size: 11px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply to it.</span>
<?php echo $__env->renderComponent(); ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/email/twer-comment.blade.php ENDPATH**/ ?>