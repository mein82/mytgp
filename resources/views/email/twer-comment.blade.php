@component('mail::message')
Dear Sir/Mdm,<br><br>

There is a new comment on TWER from your Supervisor.

Log into the system to check what is the comment.

@component('mail::button', ['url' => url('login'), 'color'=> 'green'])
MyTGP
@endcomponent

Thank you for participating in MyTGP System.  <br/><br/>
   
<p>&nbsp;</p>
<span style="font-size: 11px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply to it.</span>
@endcomponent