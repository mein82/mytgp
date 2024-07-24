
<h1 class="d-flex text-dark fw-bolder my-1 fs-4">
    @if(($header??'')=='')
    <a href="{{url('dashboard')}}" class="text-gray-500 @if($dashboard=='') active @endif text-active-dark me-2">{{(Auth::user()->group->name??'')}} Dashboard</a>
    @if(Auth::user()->group_id!=6 && Auth::user()->supervisor->count()>0)
        | <a href="{{url('dashboard/supervisor')}}" class="@if($dashboard=='supervisor') active @endif  text-gray-500 text-active-dark text-hover-primary mx-2">Supervisor Dashboard</a>
    @endif
    @if(Auth::user()->group_id!=4 && Auth::user()->referee->count()>0)
        | <a href="{{url('dashboard/referee')}}" class="@if($dashboard=='referee') active @endif  text-gray-500 text-active-dark text-hover-primary ms-2">Referee Dashboard</a>
    @endif
    @endif
    {{$header??''}}
    @if($subheader!='' || (Auth::user()->programme->name??'')!='' )
    <!--begin::Separator-->
    <span class="h-20px border-gray-400 border-start mx-3"></span>
    <!--end::Separator-->
    @endif
    <!--begin::Description-->
    <small class="text-gray-500 fs-7 fw-bold my-1 text-uppercase">{{$subheader}} @if($subheader=='') {{Auth::user()->programme->name??''}} @endif</small>
<!--end::Description--></h1>