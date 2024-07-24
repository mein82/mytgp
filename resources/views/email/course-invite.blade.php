@component('mail::message')
Dear Sir/Mdm,<br><br>

You have been invited to attend a TGP course organized by TGP Programme. Below are the details of the course. Please login to MyTGP System to accept or reject this invitation.


@component('mail::table')
|            |            | 
|:---------  |:-----------|
| **Course Title** :    | {{$course->title}} |
| **Date**:             | {{date("d M Y",strtotime($course->start_date))}} - {{date("d M Y",strtotime($course->end_date))}}|
| **Remark**:              |: {!! $course->remark!!}|
@endcomponent

Click on the button below to log into the system

@component('mail::button', ['url' => url('login'), 'color'=> 'green'])
MyTGP
@endcomponent

Thank you for participating in MyTGP System.  <br/><br/>
   


<p>&nbsp;</p>
<span style="font-size: 11px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply to it.</span>
@endcomponent