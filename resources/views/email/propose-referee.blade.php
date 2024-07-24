@component('mail::message')
Hi <b>{{$user->name}},</b><br>
    
This email is to confirm that you have been proposed as a referee by an applicant in MyTGP System. Please make a recomendation/declaration for the applicant stated below. Click on the button below to log into the system with this email address.


@component('mail::button', ['url' => url('login'), 'color'=> 'green'])
MyTGP
@endcomponent


@component('mail::table')
|            |            | 
|:---------  |:-----------|
| **Programme**     |: Talent Grooming Programme for<br/> Technical Healthcare Professionals |
| **Name**     |: {{$talent->user->name}} |
| **Email**     |: {{$talent->user->email}}|
| **Phone No.**     |: {{$talent->mobile_phone}}|
| **Designation**     |: {{$talent->user->designation}} {{$talent->user->scheme->name??''}}{{$talent->user->grade_->name??''}}|
@endcomponent


   
Click on the forgot password link if you have forgotten the password. Thank you for participating in MyTGP System.<br/><br/>


<span style="font-size: 12px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply.</span>
@endcomponent