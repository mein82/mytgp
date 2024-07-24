@component('mail::message')
Hi <b>{{$talent->user->name}}</b>,<br><br>
    
This email is sent to inform that your referee <b style="color:#1f91f3">{{$referee->name}}</b> have complete her recommendation. Please make sure both of your referees have made their recommedations. Once both referee have recommended your participation in TGP, please proceed to assessment module. 

@component('mail::button', ['url' => url('login'), 'color'=> 'green'])
MyTGP
@endcomponent

Thank you for participating in MyTGP System.  <br/><br/>
   
<span style="font-size: 11px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply to it.</span>
@endcomponent