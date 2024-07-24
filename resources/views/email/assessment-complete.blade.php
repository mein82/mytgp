@component('mail::message')
Hi <b>{{$user}},</b><br>
    
{!! $content !!}

<span style="font-size: 12px;font-weight: bold;color: #888">*This is an automatically generated email – please do not reply.</span>
@endcomponent