@component('mail::message')
Dear Sir/Mdm,<br><br>

There are new updates on {{$category}} from your Talent <b>{{$talent->title->name??''}} {{$talent->user->name??''}}</b>.

Log into the system to check what are the updates.

@component('mail::button', ['url' => url('login'), 'color'=> 'green'])
MyTGP
@endcomponent

Thank you for participating in MyTGP System.  <br/><br/>
   
<p>&nbsp;</p>
<span style="font-size: 11px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply to it.</span>
@endcomponent