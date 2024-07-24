<x-app-layout activemenu="dashboard">
    <x-slot name="css">
        <link href="{{url('')}}/css/flag-icon.css" rel="stylesheet" type="text/css" />
    </x-slot>
<div class="row">
    <div class="col-12 mb-5">
<div class="acme-news-ticker">
<div class="acme-news-ticker-label fw-bold fs-5 rounded-start d-none d-sm-block">Notifications</div>

<div class="acme-news-ticker-box fs-5">
    <ul class="my-news-ticker">
        @php $check = false;  @endphp
                @foreach($notify as $item)
                    
                {{-- @if(($item->public_id!=1 && ($item->notify->where('user_id',Auth::user()->id)->first() || Auth::user()->group_id==2 || Auth::user()->group_id==1)) || $item->public_id==1) --}}
                    @php 
                    if(Auth::user()->group_id==1)
                        $check = true; 
                    if($item->public_id==1)
                        $check = true; 
                    else{
                        if($item->notify->where('user_id',Auth::user()->id)->first())
                            $check = true; 
                        if($item->notify->count()==0){
                            if($item->public_id==2 && Auth::user()->group_id==3)
                                $check = true; 
                            if($item->public_id==4 && Auth::user()->group_id==7)
                                $check = true; 
                            if($item->public_id==3 && (Auth::user()->group_id==4 || Auth::user()->referee->count()>0))
                                 $check = true; 
                            if($item->public_id==5 && (Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0))
                                $check = true; 
                        }    
                    }    
                    @endphp
                    @if($check)
                        <li><a href="javascript:;" data-bs-toggle="modal" data-id="{{$item->id}}" data-bs-target="#kt_modal_view_noti" class="fs-5 fw-bold mb-2 text-dark text-hover-success">{{$item->title}}</a>
                    @endif
                    @endforeach

                @if(!$check)  No new notification today. @endif
       
    </ul>

</div>
<div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
    <button class="acme-news-ticker-arrow acme-news-ticker-prev"></button>
    <button class="acme-news-ticker-pause"></button>
    <button class="acme-news-ticker-arrow acme-news-ticker-next"></button>
</div>
</div>
</div>
</div>
<div class="row g-5">
    @if($dashboard=="supervisor" || Auth::user()->group_id==6 || $dashboard=="referee" || Auth::user()->group_id==4)
    @if($dashboard=="supervisor" || (Auth::user()->group_id==6 && $dashboard==""))
     <div class="col-lg-4">
        <div class="row"> 
            <div class="col-12">
                <a href="{{url('supervisor/talents')}}" class="card mb-5" style="background-color: #7239EA;">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <div class="text-white fw-bold pt-4 fs-6">My Talents</div>
                    </div>
                </div>
                <!--end::Body-->
                </a>

                <div class="card card-stretch mb-5 pt-3">
        
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                           <!--  <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 active text-active-dark" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_table_widget_5_tab_1">
                                <span class="d-flex flex-column align-items-start">
                                <span class="fs-6 fw-bolder">Applicant</span>
                                <span class="fs-7">Status</span>
                                </span>
                            </a>
                            </li> -->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
<li class="nav-item mt-2">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 active text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_todo">Things to do</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_toknow">Things to know</a>
                            </li>                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <div class="tab-content pt-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_todo" role="tabpanel">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <a href="{{url('supervisor/talents/tgp-competency-matrix-assessment')}}">
                                        <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light-success">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="black"/>
                                                <path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="black"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        </div>
                                    </a>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column">
                                        <a href="{{url('supervisor/talents/tgp-competency-matrix-assessment')}}" class="text-dark text-hover-primary fs-6 fw-bolder">TGP Competency Matrix Assessment</a>
                                        <!-- <span class="text-muted fw-bold fs-7">Update your latest info.</span> -->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <a href="{{url('supervisor/talents/twer')}}">
                                        <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light-info">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        </div>
                                    </a>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column">
                                        <a href="{{url('supervisor/talents/twer')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Talent Workplace Experience Report (TWER)</a>
                                        <!-- <span class="text-muted fw-bold fs-7">Update your latest info.</span> -->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <a href="{{url('supervisor/talents/project-progress')}}">
                                        <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
                                                <path d="M21 13V13.5C21 16 19 18 16.5 18H5.6V16H16.5C17.9 16 19 14.9 19 13.5V13C19 12.4 19.4 12 20 12C20.6 12 21 12.4 21 13ZM18.4 6H7.5C5 6 3 8 3 10.5V11C3 11.6 3.4 12 4 12C4.6 12 5 11.6 5 11V10.5C5 9.1 6.1 8 7.5 8H18.4V6Z" fill="black"/>
                                                <path opacity="0.3" d="M21.7 6.29999C22.1 6.69999 22.1 7.30001 21.7 7.70001L18.4 11V3L21.7 6.29999ZM2.3 16.3C1.9 16.7 1.9 17.3 2.3 17.7L5.6 21V13L2.3 16.3Z" fill="black"/>
                                                </svg>  
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        </div>
                                    </a>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column">
                                        <a href="{{url('supervisor/talents/project-progress')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Project Progress</a>
                                        <!-- <span class="text-muted fw-bold fs-7">Update your latest info.</span> -->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <div class="tab-pane fade" id="kt_tab_toknow" role="tabpanel">
                                @foreach($thingstoknow as $item)
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                     <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <img src="{{url('thingstoknow/'.$item->image)}}" alt="{{$item->title}}" class="w-100">
                                    </div>
                                </div>
                                <!-- <div class="symbol symbol-60px symbol-2by3 me-4">
                                                <div class="symbol-label" style="background-color: #98fbd1 ; background-size: 70% auto;  background-image: url('{{url('thingstoknow/'.$item->image)}}')"></div>
                                            </div> -->
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                        <div class="flex-grow-1 me-2">
                                            <a href="{{url('thingstoknow/'.$item->url)}}" class="text-gray-800 fw-bolder text-hover-primary fs-6" target="_blank">{{$item->title}}</a>
                                        </div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="col-lg-4">
        <!--begin::Card-->
        <div class="card card-stretch mb-5">
            <!--begin::Card header-->
            <div class="card-header pt-5">
                <!--begin::Card title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">TGP Calendar {{date("Y")}}</span>
                </h3>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-5">
                <!--begin::Dates-->
                <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x ">
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-6 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_all">
                            <span class="fs-6 fw-bolder">All</span>
                        </a>
                    </li>
                    @for($i = 1; $i<=12; $i++)
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column @if(date('m')==$i) bg-light-primary @endif flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_{{$i}}">
                            <span class="opacity-50 fs-7 fw-bold">{{date("M", mktime(0, 0, 0, $i, 10))}}</span>
                            <span class="fs-6 fw-bolder">{{date("m", mktime(0, 0, 0, $i, 10))}}</span>
                        </a>
                    </li>
                    @endfor
                </ul>
                <!--end::Dates-->
                <!--begin::Tab Content-->
                <div class="tab-content hover-scroll-y pt-5" id="myCalendar">
                    <div class="tab-pane fade show active" id="kt_schedule_day_all">
                    @foreach($courses as $item)
                    <!--begin::Day-->
                    <div class="@if(date("mY",strtotime($item->start_date))==date("mY"))bg-light-primary @endif py-5">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px {{$item->type->color->name??'bg-gray-300'}} rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-7">{{ date("d M Y",strtotime($item->start_date))}} - {{ date("d M Y",strtotime($item->end_date))}}
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-6 fw-bold text-gray-800 mb-2">{{$item->type->name??''}} : {{$item->title}}</a><br/>
                                <a href="#" class="fs-7 text-gray-800">{{$item->domain->name??''}}</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Time-->
                        
                    </div>
                    <!--end::Day-->
                    <div class="separator separator-dashed border-secondary"></div>
                    @endforeach
                    
                </div>
                @for($i = 1; $i<=12; $i++)
                <div class="tab-pane fade" id="kt_schedule_day_{{$i}}" >
                    @foreach(App\Models\Courses::monthly($i)->get() as $item)
                    <!--begin::Day-->
                    <div class="">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px {{$item->type->color->name??'bg-gray-300'}} rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-7">{{ date("d M Y",strtotime($item->start_date))}} - {{ date("d M Y",strtotime($item->end_date))}}
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-6 fw-bold text-gray-800 mb-2">{{$item->type->name??''}} : {{$item->title}}</a><br/>
                                <a href="#" class="fs-7 text-gray-800">{{$item->domain->name??''}}</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Time-->
                        
                    </div>
                    <!--end::Day-->
                    <div class="separator separator-dashed border-secondary my-5"></div>
                    @endforeach
                </div>

                @endfor
            </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div> 
    <div class="col-lg-4">
        <!--begin::Card-->
        <div class="card card-stretch mb-5">
            <!--begin::Card header-->
            <div class="card-header pt-5">
                <!--begin::Card title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">Responsibilities of Supervisor</span>
                </h3>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body px-10">
                <div class=" hover-scroll-y" id="torContent"> 
                {!!$tor->where('group_id',6)->first()->content??''!!}
                </div>
            </div>
        </div>
    </div>
    @elseif($dashboard=="referee" || (Auth::user()->group_id==4  && $dashboard==""))
     <div class="col-lg-6">
        <div class="row"> 
            <div class="col-12">
                <a href="{{url('referee/recommendation')}}" class="card h-125px mb-5" style="background-color: #4AB58E;">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <div class="text-white fw-bold pt-4 fs-6">Recommendation</div>
                    </div>
                </div>
                <!--end::Body-->
                </a>
            </div>
        </div>
    </div>
    @endif
    
    @else
    <div class="col-lg-4">
        @if(Auth::user()->group_id==1 || Auth::user()->group_id==2)  
        <div class="card  card-stretch mb-5">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
                <!--begin::Card title-->
                <!-- <div class="card-title flex-column">
                    <h3 class="fw-bolder mb-1">Statistics</h3>
                    <div class="fs-6 text-gray-400">Total {{$applicants->count()}} applicants and {{$talents->count()}} talents</div>
                </div> -->
                <!--end::Card title-->
                <div class="card-toolbar">
                    <ul class="nav">
                        <li class="nav-item w-50">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 active text-active-dark" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_table_widget_5_tab_1">
                            <span class="d-flex flex-column align-items-start">
                            <span class="fs-6 fw-bolder">Applicant</span>
                            <span class="fs-7">Status</span>
                            </span>
                        </a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 text-active-dark" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_table_widget_5_tab_4">
                            <span class="d-flex flex-column align-items-start">
                            <span class="fs-6 fw-bolder">Applicant</span>
                            <span class="fs-7">by State</span>
                            </span>
                        </a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 text-active-dark" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_table_widget_5_tab_2">
                                <span class="d-flex flex-column align-items-start">
                            <span class="fs-6 fw-bolder">Talent</span>
                            <span class="fs-7">Programme</span>
                            </span>
                        </a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 text-active-dark" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_table_widget_5_tab_3">
                            <span class="d-flex flex-column align-items-start">
                            <span class="fs-6 fw-bolder">Talent</span>
                            <span class="fs-7">Status</span>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0 d-flex flex-column">
                <div class="tab-content" id="myTabContent">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                        <!--begin::Stats-->
                        <div class="card-px pb-10 flex-grow-1">
                            <!--begin::Row-->
                            <div class="row g-0 mt-5 mb-10">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-applicant" search-programme="MEDICAL">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-info">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path opacity="0.3" d="M20.284 3.71594C19.7401 3.17193 19.0944 2.74047 18.3837 2.44604C17.673 2.15162 16.9113 2 16.142 2C15.3727 2 14.611 2.15162 13.9003 2.44604C13.1896 2.74047 12.5439 3.17193 12 3.71594L7.858 7.85803L9.272 9.27197L13.414 5.13C13.7714 4.77055 14.1965 4.4856 14.6648 4.29163C15.133 4.09766 15.6351 3.99852 16.142 4C16.4072 4 16.6616 4.10531 16.8491 4.29285C17.0366 4.48038 17.142 4.73478 17.142 5C17.142 5.26522 17.0366 5.51962 16.8491 5.70715C16.6616 5.89469 16.4072 6 16.142 6C15.8979 5.99935 15.6561 6.04713 15.4305 6.1405C15.205 6.23388 15.0002 6.37094 14.828 6.54395L10.686 10.686L16.142 16.142L20.284 12C20.828 11.4561 21.2596 10.8104 21.554 10.0997C21.8484 9.38904 22 8.6273 22 7.85803C22 7.08877 21.8484 6.32702 21.554 5.61633C21.2596 4.90564 20.828 4.25983 20.284 3.71594Z" fill="black"/>
                                                    <path d="M10.686 10.686L16.142 16.142L12 20.2841C10.8975 21.3635 9.41371 21.9643 7.87082 21.9562C6.32794 21.948 4.85056 21.3315 3.75956 20.2405C2.66856 19.1495 2.05203 17.672 2.04387 16.1292C2.03572 14.5863 2.63659 13.1025 3.716 12L7.858 7.85803L9.272 9.27197L8.972 9.57202C8.87649 9.66427 8.80031 9.7746 8.7479 9.89661C8.69549 10.0186 8.6679 10.1498 8.66675 10.2826C8.66559 10.4154 8.69089 10.547 8.74117 10.6699C8.79146 10.7928 8.86571 10.9045 8.9596 10.9984C9.0535 11.0923 9.16515 11.1665 9.28805 11.2168C9.41094 11.2671 9.54262 11.2924 9.6754 11.2913C9.80818 11.2901 9.9394 11.2625 10.0614 11.2101C10.1834 11.1577 10.2938 11.0815 10.386 10.986L10.686 10.686ZM7.326 14.046L7.895 13.478C7.99063 13.3859 8.06696 13.2756 8.11954 13.1537C8.17211 13.0318 8.19987 12.9006 8.20121 12.7678C8.20255 12.635 8.17743 12.5033 8.12733 12.3804C8.07722 12.2574 8.00312 12.1457 7.90937 12.0516C7.81561 11.9576 7.70407 11.8832 7.58125 11.8328C7.45843 11.7823 7.32679 11.7569 7.19402 11.7578C7.06124 11.7588 6.92999 11.7861 6.80791 11.8384C6.68583 11.8906 6.57538 11.9666 6.483 12.062L5.912 12.632C5.81649 12.7242 5.7403 12.8345 5.68789 12.9565C5.63549 13.0785 5.6079 13.2099 5.60675 13.3427C5.60559 13.4754 5.6309 13.6071 5.68118 13.73C5.73146 13.8529 5.80571 13.9645 5.8996 14.0583C5.9935 14.1522 6.10515 14.2266 6.22804 14.2769C6.35094 14.3271 6.48262 14.3524 6.6154 14.3512C6.74818 14.35 6.8794 14.3226 7.0014 14.2701C7.12341 14.2177 7.23375 14.1415 7.326 14.046Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder"  data-kt-countup="true" data-kt-countup-value="{{$applicants->where('applicant.programme_id',1)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Medical</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-applicant" search-programme="PUBLIC HEALTH">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-danger">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path opacity="0.3" d="M12.025 4.725C9.725 2.425 6.025 2.425 3.725 4.725C1.425 7.025 1.425 10.725 3.725 13.025L11.325 20.625C11.725 21.025 12.325 21.025 12.725 20.625L20.325 13.025C22.625 10.725 22.625 7.025 20.325 4.725C18.025 2.425 14.325 2.425 12.025 4.725Z" fill="black"/>
                                                    <path d="M14.025 17.125H13.925C13.525 17.025 13.125 16.725 13.025 16.325L11.925 11.125L11.025 14.325C10.925 14.725 10.625 15.025 10.225 15.025C9.825 15.125 9.425 14.925 9.225 14.625L7.725 12.325L6.525 12.925C6.425 13.025 6.225 13.025 6.125 13.025H3.125C2.525 13.025 2.125 12.625 2.125 12.025C2.125 11.425 2.525 11.025 3.125 11.025H5.925L7.725 10.125C8.225 9.925 8.725 10.025 9.025 10.425L9.825 11.625L11.225 6.72498C11.325 6.32498 11.725 6.02502 12.225 6.02502C12.725 6.02502 13.025 6.32495 13.125 6.82495L14.525 13.025L15.225 11.525C15.425 11.225 15.725 10.925 16.125 10.925H21.125C21.725 10.925 22.125 11.325 22.125 11.925C22.125 12.525 21.725 12.925 21.125 12.925H16.725L15.025 16.325C14.725 16.925 14.425 17.125 14.025 17.125Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$applicants->where('applicant.programme_id',2)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Public Health</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0 mb-10">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-applicant" search-programme="RESEARCH & TECHNICAL SUPPORT">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="black"/>
                                                    <path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$applicants->where('applicant.programme_id',3)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Research & Technical..</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-applicant" search-programme="ORAL HEALTH">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M15.082 3.08899V3.08301C15.8095 2.3888 16.7764 2.00146 17.782 2.00146C18.7876 2.00146 19.7545 2.3888 20.482 3.08301C21.1967 3.79982 21.5981 4.77072 21.5981 5.78296C21.5981 6.7952 21.1967 7.76622 20.482 8.48303H20.476C20.465 8.47103 20.46 8.45607 20.449 8.44507L19.069 7.06396C19.4099 6.72238 19.6013 6.25954 19.6013 5.77698C19.6013 5.29441 19.4099 4.83157 19.069 4.48999C18.7229 4.15789 18.2617 3.97253 17.782 3.97253C17.3023 3.97253 16.8412 4.15789 16.495 4.48999L15.111 3.10608C15.107 3.10308 15.093 3.09899 15.082 3.08899ZM8.493 20.426L7.10802 19.041C6.76499 19.3758 6.30385 19.562 5.82454 19.5591C5.34523 19.5562 4.88635 19.3645 4.54735 19.0256C4.20835 18.6868 4.01653 18.228 4.01348 17.7487C4.01042 17.2693 4.19638 16.8081 4.53102 16.465L3.14702 15.0801C3.13702 15.0711 3.133 15.057 3.123 15.047H3.11702C2.43672 15.7704 2.06466 16.7302 2.07967 17.7231C2.09468 18.7161 2.49558 19.6642 3.19744 20.3667C3.8993 21.0692 4.84701 21.4709 5.83992 21.4868C6.83283 21.5027 7.79298 21.1317 8.51702 20.452V20.446C8.51602 20.44 8.501 20.436 8.493 20.426Z" fill="black"/>
                                                    <path opacity="0.3" d="M13.674 2.94297C13.8984 2.80434 14.1631 2.74572 14.4251 2.77659C14.6871 2.80745 14.931 2.92602 15.117 3.11301L20.456 8.45298C20.6437 8.63974 20.7625 8.88475 20.7928 9.1478C20.8232 9.41086 20.7633 9.67639 20.623 9.90098C17.9125 14.2288 14.2575 17.8869 9.93202 20.6011C9.70778 20.7384 9.44375 20.7961 9.18263 20.7649C8.92152 20.7337 8.67855 20.6154 8.493 20.4291L3.14702 15.082C2.96012 14.8966 2.84132 14.6534 2.80992 14.3921C2.77852 14.1307 2.83635 13.8663 2.97402 13.6419C3.54335 12.7339 4.14968 11.862 4.79302 11.026C5.04091 10.7072 5.20471 10.3313 5.26936 9.93272C5.33402 9.53414 5.29745 9.12572 5.16301 8.74497C4.97934 8.24025 4.94363 7.69362 5.06008 7.16929C5.17652 6.64496 5.44028 6.16478 5.82033 5.78526C6.20038 5.40573 6.68094 5.14255 7.20543 5.02683C7.72992 4.91111 8.27655 4.94769 8.78102 5.13206C9.16226 5.26657 9.57116 5.30315 9.97023 5.2385C10.3693 5.17385 10.7457 5.00993 11.065 4.76194C11.8997 4.12061 12.7693 3.5143 13.674 2.94297ZM7.85701 15.8L15.835 7.822C15.9305 7.72975 16.0067 7.61942 16.0591 7.49741C16.1115 7.37541 16.1391 7.24421 16.1403 7.11143C16.1414 6.97865 16.1161 6.84699 16.0658 6.7241C16.0156 6.6012 15.9413 6.4895 15.8474 6.39561C15.7535 6.30171 15.6419 6.2275 15.519 6.17722C15.3961 6.12694 15.2644 6.10161 15.1316 6.10276C14.9988 6.10391 14.8676 6.13153 14.7456 6.18394C14.6236 6.23635 14.5133 6.31243 14.421 6.40794L6.44301 14.386C6.3475 14.4782 6.27133 14.5885 6.21892 14.7105C6.16651 14.8326 6.13893 14.9638 6.13777 15.0965C6.13662 15.2293 6.16189 15.3611 6.21217 15.484C6.26246 15.6069 6.33673 15.7185 6.43062 15.8124C6.52451 15.9062 6.63615 15.9806 6.75905 16.0309C6.88195 16.0811 7.01363 16.1064 7.14641 16.1052C7.27919 16.104 7.41042 16.0766 7.53243 16.0241C7.65443 15.9717 7.76476 15.8955 7.85701 15.8ZM10.323 18.484C13.4664 16.194 16.233 13.4274 18.523 10.284C18.6019 10.1778 18.659 10.057 18.691 9.92857C18.7229 9.80015 18.729 9.66666 18.7089 9.53587C18.6889 9.40507 18.6431 9.27957 18.5742 9.1666C18.5053 9.05364 18.4146 8.95546 18.3075 8.87778C18.2004 8.80011 18.0789 8.74448 17.9502 8.71409C17.8214 8.6837 17.6878 8.67919 17.5573 8.70078C17.4267 8.72238 17.3018 8.7697 17.1896 8.83994C17.0775 8.91018 16.9804 9.00193 16.904 9.10996C14.7361 12.084 12.118 14.7021 9.144 16.87C8.97413 16.9947 8.84803 17.17 8.78368 17.3707C8.71933 17.5714 8.72005 17.7873 8.78569 17.9875C8.85134 18.1878 8.97855 18.3622 9.14922 18.4858C9.31988 18.6095 9.52526 18.676 9.73601 18.676C9.94719 18.6765 10.153 18.6092 10.323 18.484ZM8.42302 10.102C8.48302 8.95703 8.98201 8.45904 10.146 8.38804C10.4112 8.37173 10.6591 8.25068 10.8351 8.05161C11.0111 7.85254 11.1008 7.59173 11.0845 7.32651C11.0682 7.0613 10.9472 6.81343 10.7481 6.63743C10.5491 6.46143 10.2882 6.37173 10.023 6.38804C9.54725 6.37933 9.07464 6.46672 8.63347 6.645C8.1923 6.82327 7.79166 7.08873 7.45552 7.42551C7.11939 7.7623 6.85468 8.16344 6.67726 8.60496C6.49985 9.04647 6.41339 9.51924 6.42302 9.99497C6.40941 10.2598 6.50151 10.5191 6.67909 10.716C6.85668 10.9129 7.10521 11.0313 7.37001 11.045H7.42302C7.67882 11.0457 7.92515 10.9483 8.11134 10.7729C8.29754 10.5975 8.40942 10.3574 8.424 10.102H8.42302Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$applicants->where('applicant.programme_id',4)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Oral Health</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-applicant" search-programme="PHARMACEUTICAL SERVICES">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-warning">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M6.97443 21.8469C4.97443 20.7469 3.37444 19.1469 2.17444 16.9469C1.87444 16.3469 1.97442 15.6468 2.37442 15.1468L15.0744 2.44686C15.5744 1.94686 16.3744 1.84679 16.9744 2.24679C18.9744 3.44679 20.5744 5.04684 21.7744 7.04684C22.1744 7.64684 22.0744 8.44686 21.5744 8.94686L8.87442 21.6468C8.37442 22.0468 7.57443 22.1469 6.97443 21.8469Z" fill="black"/>
                                                    <path d="M15.8744 11.6468C15.4744 12.0468 14.8744 12.0468 14.4744 11.6468C14.0744 11.2468 14.0744 10.6468 14.4744 10.2468C14.8744 9.84678 15.4744 9.84678 15.8744 10.2468C16.2744 10.6468 16.2744 11.2468 15.8744 11.6468ZM13.7744 8.1468C13.3744 7.7468 12.7744 7.7468 12.3744 8.1468C11.9744 8.5468 11.9744 9.14683 12.3744 9.54683C12.7744 9.94683 13.3744 9.94683 13.7744 9.54683C14.1744 9.14683 14.1744 8.4468 13.7744 8.1468ZM13.7744 12.3469C13.3744 11.9469 12.7744 11.9469 12.3744 12.3469C11.9744 12.7469 11.9744 13.3468 12.3744 13.7468C12.7744 14.1468 13.3744 14.1468 13.7744 13.7468C14.1744 13.4468 14.1744 12.7469 13.7744 12.3469ZM11.5744 10.2468C11.1744 9.84678 10.5745 9.84678 10.1745 10.2468C9.77445 10.6468 9.77445 11.2468 10.1745 11.6468C10.5745 12.0468 11.1744 12.0468 11.5744 11.6468C11.9744 11.2468 11.9744 10.6468 11.5744 10.2468ZM11.5744 14.5468C11.1744 14.1468 10.5745 14.1468 10.1745 14.5468C9.77445 14.9468 9.77445 15.5469 10.1745 15.9469C10.5745 16.3469 11.1744 16.3469 11.5744 15.9469C11.9744 15.5469 11.9744 14.9468 11.5744 14.5468ZM9.47444 12.3469C9.07444 11.9469 8.47444 11.9469 8.07444 12.3469C7.67444 12.7469 7.67444 13.3468 8.07444 13.7468C8.47444 14.1468 9.07444 14.1468 9.47444 13.7468C9.87444 13.3468 9.87444 12.7469 9.47444 12.3469Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$applicants->where('applicant.programme_id',5)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Pharmaceutical Services</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-applicant" search-programme="FOOD SAFETY & QUALITY">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-dark">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                        <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                        <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$applicants->where('applicant.programme_id',6)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Food Safety & Quality</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <div class="fs-7 text-muted fw-bolder mt-5 text-end">Total: <span class="text-dark fs-4">{{$applicants->count()}}</span></div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Tap pane-->
                    <div class="tab-pane fade" id="kt_table_widget_5_tab_4">
                        <div class="card-px pb-10 flex-grow-1 row">
                        
                                @foreach(\App\Models\State::get() as $state)
                                <div class="d-flex align-items-center col-6 border-bottom-dotted p-1 border-gray-300">
                                    <div class="symbol symbol-45px me-5">
                                        <span class="h-25px w-50px malaysia-state-flag-icon malaysia-state-flag-icon-{{$state->ext}}"></span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6 search-state" search-state="{{$state->name}}">{{$applicants->where('applicant.office_state',$state->id)->count()}}</a>
                                        <span class="text-muted fw-bold text-muted d-block fs-9">{{$state->name}}</span>
                                    </div>
                                </div>
                                @endforeach
                           
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                        <!--begin::Stats-->
                        <div class="card-px pb-10 flex-grow-1">
                            <!--begin::Row-->
                            <div class="row g-0 mt-5 mb-10">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-programme="MEDICAL">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-info">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M20.284 3.71594C19.7401 3.17193 19.0944 2.74047 18.3837 2.44604C17.673 2.15162 16.9113 2 16.142 2C15.3727 2 14.611 2.15162 13.9003 2.44604C13.1896 2.74047 12.5439 3.17193 12 3.71594L7.858 7.85803L9.272 9.27197L13.414 5.13C13.7714 4.77055 14.1965 4.4856 14.6648 4.29163C15.133 4.09766 15.6351 3.99852 16.142 4C16.4072 4 16.6616 4.10531 16.8491 4.29285C17.0366 4.48038 17.142 4.73478 17.142 5C17.142 5.26522 17.0366 5.51962 16.8491 5.70715C16.6616 5.89469 16.4072 6 16.142 6C15.8979 5.99935 15.6561 6.04713 15.4305 6.1405C15.205 6.23388 15.0002 6.37094 14.828 6.54395L10.686 10.686L16.142 16.142L20.284 12C20.828 11.4561 21.2596 10.8104 21.554 10.0997C21.8484 9.38904 22 8.6273 22 7.85803C22 7.08877 21.8484 6.32702 21.554 5.61633C21.2596 4.90564 20.828 4.25983 20.284 3.71594Z" fill="black"/>
                                                    <path d="M10.686 10.686L16.142 16.142L12 20.2841C10.8975 21.3635 9.41371 21.9643 7.87082 21.9562C6.32794 21.948 4.85056 21.3315 3.75956 20.2405C2.66856 19.1495 2.05203 17.672 2.04387 16.1292C2.03572 14.5863 2.63659 13.1025 3.716 12L7.858 7.85803L9.272 9.27197L8.972 9.57202C8.87649 9.66427 8.80031 9.7746 8.7479 9.89661C8.69549 10.0186 8.6679 10.1498 8.66675 10.2826C8.66559 10.4154 8.69089 10.547 8.74117 10.6699C8.79146 10.7928 8.86571 10.9045 8.9596 10.9984C9.0535 11.0923 9.16515 11.1665 9.28805 11.2168C9.41094 11.2671 9.54262 11.2924 9.6754 11.2913C9.80818 11.2901 9.9394 11.2625 10.0614 11.2101C10.1834 11.1577 10.2938 11.0815 10.386 10.986L10.686 10.686ZM7.326 14.046L7.895 13.478C7.99063 13.3859 8.06696 13.2756 8.11954 13.1537C8.17211 13.0318 8.19987 12.9006 8.20121 12.7678C8.20255 12.635 8.17743 12.5033 8.12733 12.3804C8.07722 12.2574 8.00312 12.1457 7.90937 12.0516C7.81561 11.9576 7.70407 11.8832 7.58125 11.8328C7.45843 11.7823 7.32679 11.7569 7.19402 11.7578C7.06124 11.7588 6.92999 11.7861 6.80791 11.8384C6.68583 11.8906 6.57538 11.9666 6.483 12.062L5.912 12.632C5.81649 12.7242 5.7403 12.8345 5.68789 12.9565C5.63549 13.0785 5.6079 13.2099 5.60675 13.3427C5.60559 13.4754 5.6309 13.6071 5.68118 13.73C5.73146 13.8529 5.80571 13.9645 5.8996 14.0583C5.9935 14.1522 6.10515 14.2266 6.22804 14.2769C6.35094 14.3271 6.48262 14.3524 6.6154 14.3512C6.74818 14.35 6.8794 14.3226 7.0014 14.2701C7.12341 14.2177 7.23375 14.1415 7.326 14.046Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->where('programme_id',1)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Medical</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-programme="PUBLIC HEALTH">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-danger">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12.025 4.725C9.725 2.425 6.025 2.425 3.725 4.725C1.425 7.025 1.425 10.725 3.725 13.025L11.325 20.625C11.725 21.025 12.325 21.025 12.725 20.625L20.325 13.025C22.625 10.725 22.625 7.025 20.325 4.725C18.025 2.425 14.325 2.425 12.025 4.725Z" fill="black"/>
                                                    <path d="M14.025 17.125H13.925C13.525 17.025 13.125 16.725 13.025 16.325L11.925 11.125L11.025 14.325C10.925 14.725 10.625 15.025 10.225 15.025C9.825 15.125 9.425 14.925 9.225 14.625L7.725 12.325L6.525 12.925C6.425 13.025 6.225 13.025 6.125 13.025H3.125C2.525 13.025 2.125 12.625 2.125 12.025C2.125 11.425 2.525 11.025 3.125 11.025H5.925L7.725 10.125C8.225 9.925 8.725 10.025 9.025 10.425L9.825 11.625L11.225 6.72498C11.325 6.32498 11.725 6.02502 12.225 6.02502C12.725 6.02502 13.025 6.32495 13.125 6.82495L14.525 13.025L15.225 11.525C15.425 11.225 15.725 10.925 16.125 10.925H21.125C21.725 10.925 22.125 11.325 22.125 11.925C22.125 12.525 21.725 12.925 21.125 12.925H16.725L15.025 16.325C14.725 16.925 14.425 17.125 14.025 17.125Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->where('programme_id',2)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Public Health</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0 mb-10">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-programme="RESEARCH & TECHNICAL SUPPORT">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="black"/>
                                                    <path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->where('programme_id',3)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Research & Technical..</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-programme="ORAL HEALTH">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M15.082 3.08899V3.08301C15.8095 2.3888 16.7764 2.00146 17.782 2.00146C18.7876 2.00146 19.7545 2.3888 20.482 3.08301C21.1967 3.79982 21.5981 4.77072 21.5981 5.78296C21.5981 6.7952 21.1967 7.76622 20.482 8.48303H20.476C20.465 8.47103 20.46 8.45607 20.449 8.44507L19.069 7.06396C19.4099 6.72238 19.6013 6.25954 19.6013 5.77698C19.6013 5.29441 19.4099 4.83157 19.069 4.48999C18.7229 4.15789 18.2617 3.97253 17.782 3.97253C17.3023 3.97253 16.8412 4.15789 16.495 4.48999L15.111 3.10608C15.107 3.10308 15.093 3.09899 15.082 3.08899ZM8.493 20.426L7.10802 19.041C6.76499 19.3758 6.30385 19.562 5.82454 19.5591C5.34523 19.5562 4.88635 19.3645 4.54735 19.0256C4.20835 18.6868 4.01653 18.228 4.01348 17.7487C4.01042 17.2693 4.19638 16.8081 4.53102 16.465L3.14702 15.0801C3.13702 15.0711 3.133 15.057 3.123 15.047H3.11702C2.43672 15.7704 2.06466 16.7302 2.07967 17.7231C2.09468 18.7161 2.49558 19.6642 3.19744 20.3667C3.8993 21.0692 4.84701 21.4709 5.83992 21.4868C6.83283 21.5027 7.79298 21.1317 8.51702 20.452V20.446C8.51602 20.44 8.501 20.436 8.493 20.426Z" fill="black"/>
                                                    <path opacity="0.3" d="M13.674 2.94297C13.8984 2.80434 14.1631 2.74572 14.4251 2.77659C14.6871 2.80745 14.931 2.92602 15.117 3.11301L20.456 8.45298C20.6437 8.63974 20.7625 8.88475 20.7928 9.1478C20.8232 9.41086 20.7633 9.67639 20.623 9.90098C17.9125 14.2288 14.2575 17.8869 9.93202 20.6011C9.70778 20.7384 9.44375 20.7961 9.18263 20.7649C8.92152 20.7337 8.67855 20.6154 8.493 20.4291L3.14702 15.082C2.96012 14.8966 2.84132 14.6534 2.80992 14.3921C2.77852 14.1307 2.83635 13.8663 2.97402 13.6419C3.54335 12.7339 4.14968 11.862 4.79302 11.026C5.04091 10.7072 5.20471 10.3313 5.26936 9.93272C5.33402 9.53414 5.29745 9.12572 5.16301 8.74497C4.97934 8.24025 4.94363 7.69362 5.06008 7.16929C5.17652 6.64496 5.44028 6.16478 5.82033 5.78526C6.20038 5.40573 6.68094 5.14255 7.20543 5.02683C7.72992 4.91111 8.27655 4.94769 8.78102 5.13206C9.16226 5.26657 9.57116 5.30315 9.97023 5.2385C10.3693 5.17385 10.7457 5.00993 11.065 4.76194C11.8997 4.12061 12.7693 3.5143 13.674 2.94297ZM7.85701 15.8L15.835 7.822C15.9305 7.72975 16.0067 7.61942 16.0591 7.49741C16.1115 7.37541 16.1391 7.24421 16.1403 7.11143C16.1414 6.97865 16.1161 6.84699 16.0658 6.7241C16.0156 6.6012 15.9413 6.4895 15.8474 6.39561C15.7535 6.30171 15.6419 6.2275 15.519 6.17722C15.3961 6.12694 15.2644 6.10161 15.1316 6.10276C14.9988 6.10391 14.8676 6.13153 14.7456 6.18394C14.6236 6.23635 14.5133 6.31243 14.421 6.40794L6.44301 14.386C6.3475 14.4782 6.27133 14.5885 6.21892 14.7105C6.16651 14.8326 6.13893 14.9638 6.13777 15.0965C6.13662 15.2293 6.16189 15.3611 6.21217 15.484C6.26246 15.6069 6.33673 15.7185 6.43062 15.8124C6.52451 15.9062 6.63615 15.9806 6.75905 16.0309C6.88195 16.0811 7.01363 16.1064 7.14641 16.1052C7.27919 16.104 7.41042 16.0766 7.53243 16.0241C7.65443 15.9717 7.76476 15.8955 7.85701 15.8ZM10.323 18.484C13.4664 16.194 16.233 13.4274 18.523 10.284C18.6019 10.1778 18.659 10.057 18.691 9.92857C18.7229 9.80015 18.729 9.66666 18.7089 9.53587C18.6889 9.40507 18.6431 9.27957 18.5742 9.1666C18.5053 9.05364 18.4146 8.95546 18.3075 8.87778C18.2004 8.80011 18.0789 8.74448 17.9502 8.71409C17.8214 8.6837 17.6878 8.67919 17.5573 8.70078C17.4267 8.72238 17.3018 8.7697 17.1896 8.83994C17.0775 8.91018 16.9804 9.00193 16.904 9.10996C14.7361 12.084 12.118 14.7021 9.144 16.87C8.97413 16.9947 8.84803 17.17 8.78368 17.3707C8.71933 17.5714 8.72005 17.7873 8.78569 17.9875C8.85134 18.1878 8.97855 18.3622 9.14922 18.4858C9.31988 18.6095 9.52526 18.676 9.73601 18.676C9.94719 18.6765 10.153 18.6092 10.323 18.484ZM8.42302 10.102C8.48302 8.95703 8.98201 8.45904 10.146 8.38804C10.4112 8.37173 10.6591 8.25068 10.8351 8.05161C11.0111 7.85254 11.1008 7.59173 11.0845 7.32651C11.0682 7.0613 10.9472 6.81343 10.7481 6.63743C10.5491 6.46143 10.2882 6.37173 10.023 6.38804C9.54725 6.37933 9.07464 6.46672 8.63347 6.645C8.1923 6.82327 7.79166 7.08873 7.45552 7.42551C7.11939 7.7623 6.85468 8.16344 6.67726 8.60496C6.49985 9.04647 6.41339 9.51924 6.42302 9.99497C6.40941 10.2598 6.50151 10.5191 6.67909 10.716C6.85668 10.9129 7.10521 11.0313 7.37001 11.045H7.42302C7.67882 11.0457 7.92515 10.9483 8.11134 10.7729C8.29754 10.5975 8.40942 10.3574 8.424 10.102H8.42302Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->where('programme_id',4)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Oral Health</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-programme="PHARMACEUTICAL SERVICES">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-warning">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M6.97443 21.8469C4.97443 20.7469 3.37444 19.1469 2.17444 16.9469C1.87444 16.3469 1.97442 15.6468 2.37442 15.1468L15.0744 2.44686C15.5744 1.94686 16.3744 1.84679 16.9744 2.24679C18.9744 3.44679 20.5744 5.04684 21.7744 7.04684C22.1744 7.64684 22.0744 8.44686 21.5744 8.94686L8.87442 21.6468C8.37442 22.0468 7.57443 22.1469 6.97443 21.8469Z" fill="black"/>
                                                    <path d="M15.8744 11.6468C15.4744 12.0468 14.8744 12.0468 14.4744 11.6468C14.0744 11.2468 14.0744 10.6468 14.4744 10.2468C14.8744 9.84678 15.4744 9.84678 15.8744 10.2468C16.2744 10.6468 16.2744 11.2468 15.8744 11.6468ZM13.7744 8.1468C13.3744 7.7468 12.7744 7.7468 12.3744 8.1468C11.9744 8.5468 11.9744 9.14683 12.3744 9.54683C12.7744 9.94683 13.3744 9.94683 13.7744 9.54683C14.1744 9.14683 14.1744 8.4468 13.7744 8.1468ZM13.7744 12.3469C13.3744 11.9469 12.7744 11.9469 12.3744 12.3469C11.9744 12.7469 11.9744 13.3468 12.3744 13.7468C12.7744 14.1468 13.3744 14.1468 13.7744 13.7468C14.1744 13.4468 14.1744 12.7469 13.7744 12.3469ZM11.5744 10.2468C11.1744 9.84678 10.5745 9.84678 10.1745 10.2468C9.77445 10.6468 9.77445 11.2468 10.1745 11.6468C10.5745 12.0468 11.1744 12.0468 11.5744 11.6468C11.9744 11.2468 11.9744 10.6468 11.5744 10.2468ZM11.5744 14.5468C11.1744 14.1468 10.5745 14.1468 10.1745 14.5468C9.77445 14.9468 9.77445 15.5469 10.1745 15.9469C10.5745 16.3469 11.1744 16.3469 11.5744 15.9469C11.9744 15.5469 11.9744 14.9468 11.5744 14.5468ZM9.47444 12.3469C9.07444 11.9469 8.47444 11.9469 8.07444 12.3469C7.67444 12.7469 7.67444 13.3468 8.07444 13.7468C8.47444 14.1468 9.07444 14.1468 9.47444 13.7468C9.87444 13.3468 9.87444 12.7469 9.47444 12.3469Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->where('programme_id',5)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Pharmaceutical Services</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-programme="FOOD SAFETY & QUALITY">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px me-3">
                                            <div class="symbol-label bg-light-dark">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                        <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                        <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->where('programme_id',6)->count()}}">0</div>
                                            <div class="fs-7 text-muted fw-bold">Food Safety & Quality</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>


                    <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                        <!--begin::Stats-->
                        <div class="card-px pt-5 pb-10 flex-grow-1">
                            <!--begin::Row-->
                            <div class="row g-0 mb-10">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-status="Active">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                                    <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder">Active</div>
                                            <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',1)->count()}} : <span class="text-success fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',1)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                            
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-status="Alumni">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-warning">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder">Alumni</div>
                                            <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',2)->count()}} : <span class="text-warning fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',2)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-status="Study Leave">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-info">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                                    <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                                                </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder">Study Leave</div>
                                            <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',4)->count()}} : <span class="text-info fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',4)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <div class="d-flex align-items-center me-2 cursor-pointer search-talent" search-status="Dropout">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-danger">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
                                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
                                                </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-6 text-dark fw-bolder">Dropout</div>
                                            <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',3)->count()}} : <span class="text-danger fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',3)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>

                </div>
            </div>
            <!--end::Body-->
        </div>
        @endif
        @if(Auth::user()->group_id==5)  
        <div class="card card-stretch mb-5 pt-3">
        
            <!--begin::Body-->
            <div class="card-body pt-0">
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                    <!--begin::Nav item-->
<li class="nav-item mt-2">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 active text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_todo">Things to do</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_toknow">Things to know</a>
                            </li>                    <!--end::Nav item-->
                </ul>
                <div class="tab-content pt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_todo" role="tabpanel">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <a href="{{url('panel/applicants')}}">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-success">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
</svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="{{url('panel/applicants')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Applicants Evaluation</a>
                                <!-- <span class="text-muted fw-bold fs-7">Update your latest info.</span> -->
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <a href="{{url('panel/talents')}}">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-danger">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
</svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="{{url('panel/ars')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Application Ranking System</a>
                                <!-- <span class="text-muted fw-bold fs-7">Update your latest info.</span> -->
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <a href="{{url('panel/talents')}}">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
</svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="{{url('panel/talents')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Talent Evaluation</a>
                                <!-- <span class="text-muted fw-bold fs-7">Update your latest info.</span> -->
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <div class="tab-pane fade" id="kt_tab_toknow" role="tabpanel">
                        @foreach($thingstoknow as $item)
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <img src="{{url('thingstoknow/'.$item->image)}}" alt="{{$item->title}}" class="w-100">
                                    </div>
                                </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <a href="{{url('thingstoknow/'.$item->url)}}" class="text-gray-800 fw-bolder text-hover-primary fs-6" target="_blank">{{$item->title}}</a>
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if(Auth::user()->group_id==3)   
        @if(!$applicant || checktask($applicant->id)>0)
        <div class="alert alert-warning d-flex align-items-center p-5 mb-10">
            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
            <span class="svg-icon svg-icon-2hx svg-icon-warning me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"/>
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
                </svg></span>
                <!--end::Svg Icon-->
            <div class="d-flex flex-column">
                <h4 class="mb-1 text-warning">Attention</h4>
                <span>Please complete below tasks.</span>
            </div>
        </div>
        @endif
        
        <!--begin::Body-->
        <div class="card card-stretch mb-5 pt-3">
            <!--begin::Header-->
            <!-- <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">Tasks Overview</span>
                    @if($applicant && checktask($applicant->id)>0)<span class="text-muted mt-1 fw-bold fs-7">Pending {{checktask($applicant->id)}} tasks</span>
                    @else
                        <span class="text-muted mt-1 fw-bold fs-7">Pending 3 tasks</span>
                    @endif
                </h3>

            </div> -->
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0">
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                    <!--begin::Nav item-->
<li class="nav-item mt-2">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 active text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_todo">Things to do</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_toknow">Things to know</a>
                            </li>                    <!--end::Nav item-->
                </ul>
                <div class="tab-content pt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_todo" role="tabpanel">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Symbol-->
                            <a href="@if(is_null($applicant)){{url('e-form')}}@else{{url('/edit/e-form/'.$applicant->id)}}@endif">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label @if($applicant) bg-light-success @endif">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x @if($applicant) svg-icon-success @endif">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="@if(is_null($applicant)){{url('e-form')}}@else{{url('/edit/e-form/'.$applicant->id)}}@endif" class="text-dark text-hover-primary fs-6 fw-bolder">E-Form</a>
                                @if($applicant && checkeform($applicant->id,4))<span class="fw-bold text-primary">Completed</span>@else
                                <span class="text-muted fw-bold"><span class="@if($applicant && checkeform($applicant->id,1))text-primary @endif">Personal</span>, <span class="@if($applicant && checkeform($applicant->id,2))text-primary @endif">Academic</span>, <span class="@if($applicant && checkeform($applicant->id,3))text-primary @endif">Professional</span>, <span class="@if($applicant && checkeform($applicant->id,4))text-primary @endif">Personal Statement & CPD Log Book</span></span>
                                @endif
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                        <path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="black"/>
                                        <path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column w-100">
                                <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">Structured CV</a>
                                <!-- <span class="text-muted fw-bold">Structured CV</span> -->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-1 mb-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50"></th>
                                                <th class="p-0 w-50"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @php
                                                $date = '';$lock = true;
                                                if((Auth::user()->locks->where('lock.type_id',1)->first()->lock->end_date??'')!=''){
                                                    $lock = false;
                                                    $date = Auth::user()->locks->where('lock.type_id',1)->first()->lock->end_date;
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    @if(($lock || $date<date("Y-m-d")) && ($applicant->scv1->status_id??'')!=1)
                                                        <span class="badge badge-secondary text-hover-gray-800">Enrollment</span>
                                                    @else
                                                        <a href="{{url('/talent/structure-cv/1')}}" class="badge badge-success text-hover-gray-800">Enrollment</a> 
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    @if($lock && ($applicant->scv1->status_id??'')!=1)
                                                        <span class="text-muted fw-bold d-block fs-8">-</span>
                                                    @else
                                                        @if(($applicant->scv1->status_id??'')==1)
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                        @else
                                                        <span class="text-gray-700 fw-bolder d-block fs-7"><span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @endif
                                                    @endif
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Symbol-->
                            <a href="@if($applicant && checkeform($applicant->id,4)){{url('applicant/referees')}}@else#@endif">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label @if($applicant && checkeform($applicant->id,4))bg-light-warning @endif">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2x @if($applicant && checkeform($applicant->id,4))svg-icon-warning @endif">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="@if($applicant && checkeform($applicant->id,4)){{url('applicant/referees')}}@else#@endif" class="text-dark text-hover-primary fs-6 fw-bolder">Referees</a>
                                @if($applicant && checkref($applicant->id,2))
                                <span class="fw-bold text-primary">Completed</span>
                                @else
                                <span class="text-muted fw-bold"><span class="@if($applicant && checkref($applicant->id,1))text-primary @endif">Recommendation</span>, <span class="@if($applicant && checkref($applicant->id,2))text-primary @endif">Assessment</span></span>
                                @endif
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Symbol-->
                            <a href="@if($applicant && $applicant->selflog){{url('applicant/view/logbook')}}@elseif($applicant && checkref($applicant->id,2)){{url('applicant/logbook')}}@else#@endif">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label @if($applicant && checkref($applicant->id,2))bg-light-primary @endif">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2x @if($applicant && checkref($applicant->id,2))svg-icon-primary @endif">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                            <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                            <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                        </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="@if($applicant && $applicant->selflog){{url('applicant/view/logbook')}}@elseif($applicant && checkref($applicant->id,2)){{url('applicant/logbook')}}@else#@endif" class="text-dark text-hover-primary fs-6 fw-bolder">Self Assessment</a>
                                <span class="fw-bold text-primary">@if($applicant && $applicant->selflog) Completed @endif</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <div class="tab-pane fade" id="kt_tab_toknow" role="tabpanel">
                        @foreach($thingstoknow as $item)
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <img src="{{url('thingstoknow/'.$item->image)}}" alt="{{$item->title}}" class="w-100">
                                    </div>
                                </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <a href="{{url('thingstoknow/'.$item->url)}}" class="text-gray-800 fw-bolder text-hover-primary fs-6" target="_blank">{{$item->title}}</a>
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        @endforeach
                    </div>
                </div>    
            </div>
            <!--end::Body-->
        </div>
        @endif

        @if(Auth::user()->group_id==7)

        <div class="card card-stretch mb-5 pt-3">
        
            <!--begin::Body-->
            <div class="card-body pt-0">
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 active text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_todo">Things to do</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1 text-active-dark fs-6 fw-bolder" data-bs-toggle="tab" href="#kt_tab_toknow">Things to know</a>
                    </li>                    <!--end::Nav item-->
                </ul>
                <div class="tab-content pt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_todo" role="tabpanel">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <a href="{{url('/edit/e-form/'.$talent->id)}}">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-warning">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="{{url('/edit/e-form/'.$talent->id)}}" class="text-dark text-hover-primary fs-6 fw-bolder">Profile</a>
                                <span class="text-muted fw-bold fs-7">Update your latest info.</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                        <path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="black"/>
                                        <path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column w-100">
                                <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">Curriculum Vitae</a>
                                <!-- <span class="text-muted fw-bold">Structured CV</span> -->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-1 mb-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50"></th>
                                                <th class="p-0 w-50"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @php
                                                $date = '';$lock = true;
                                                if((Auth::user()->locks->where('lock.type_id',1)->first()->lock->end_date??'')!=''){
                                                    $lock = false;
                                                    $date = Auth::user()->locks->where('lock.type_id',1)->first()->lock->end_date;
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    @if(($lock || $date<date("Y-m-d")) && (Auth::user()->applicant->scv1->status_id??'')!=1)
                                                        <span class="badge badge-secondary text-hover-gray-800">Enrollment</span>
                                                    @else
                                                        <a href="{{url('/talent/structure-cv/1')}}" class="badge badge-success text-hover-gray-800">Enrollment</a> 
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    @if($lock && (Auth::user()->applicant->scv1->status_id??'')!=1)
                                                        <span class="text-muted fw-bold d-block fs-8">-</span>
                                                    @else
                                                        @if((Auth::user()->applicant->scv1->status_id??'')==1)
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                        @else
                                                        <span class="text-gray-700 fw-bolder d-block fs-7"><span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @endif
                                                    @endif
                                                    
                                                </td>
                                            </tr>
                                            @php
                                                $date = '';$lock = true;
                                                if((Auth::user()->locks->where('lock.type_id',2)->first()->lock->end_date??'')!=''){
                                                    $lock = false;
                                                    $date = Auth::user()->locks->where('lock.type_id',2)->first()->lock->end_date;
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    @if(($lock || $date<date("Y-m-d")) && ($talent->scv2->status_id??'')!=1)
                                                        <span class="badge badge-secondary text-hover-gray-800">End of programme</span>
                                                    @else
                                                        <a href="{{url('/talent/structure-cv/2')}}" class="badge badge-success text-hover-gray-800">End of programme</a>
                                                    @endif

                                                </td>
                                                <td class="text-end">
                                                    @if($lock && ($talent->scv2->status_id??'')!=1)
                                                        <span class="text-muted fw-bold d-block fs-8">-</span>
                                                    @else
                                                        @if(($talent->scv2->status_id??'')==1)
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                        @else
                                                        <span class="text-gray-700 fw-bolder d-block fs-7"><span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!-- <span class="fw-bold text-primary">
                                    @if(Auth::user()->locks->where('lock_name','scv-1')->first()) 
                                    <a href="{{url('/talent/structure-cv/1')}}" class="badge @if($talent->scv1->status_id??''==1) badge-secondary @else badge-danger @endif text-hover-gray-800">Early programme</a> 
                                    @else
                                    <span class="text-muted fw-bold fs-7">Early programme entry is locked.</span>
                                    @endif
                                    @if(Auth::user()->locks->where('lock_name','scv-2')->first()) 
                                    <a href="{{url('/talent/structure-cv/2')}}" class="badge @if($talent->scv2->status_id??''==1) badge-secondary @else badge-danger @endif text-hover-gray-800">End of Programme</a>
                                    @else
                                    <br/><span class="text-muted fw-bold fs-7">End of programme entry is locked.</span>
                                    @endif
                                </span> -->
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="7" y="2" width="14" height="16" rx="3" fill="black"/>
                                            <rect x="3" y="6" width="14" height="16" rx="3" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column w-100">
                                <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">TGP Competency Matrix (TGP-CM)</a>
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-1 mb-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50"></th>
                                                <th class="p-0 w-25"></th>
                                                <th class="p-0 w-25"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @if(($talent->status->cohort??'0')>12)
                                            <tr>
                                                <td>
                                                    <a href="{{url('/applicant/view/logbook')}}" class="badge badge-success text-hover-gray-800">Baseline</a> 
                                                </td>
                                                <td class="text-end">
                                                   @if($talent->user->applicant->selflog)
                                                    <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                    @else
                                                    <span class="text-muted fw-bold d-block fs-8">Fill up now</span>
                                                    @endif
                                                </td>
                                                <td>-</td>
                                            </tr>
                                            @endif
                                            @php
                                                $date = '';$lock = true;
                                                if((Auth::user()->locks->where('lock.type_id',3)->first()->lock->end_date??'')!=''){
                                                    $lock = false;
                                                    $date = Auth::user()->locks->where('lock.type_id',3)->first()->lock->end_date;
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    @if(($lock || $date<date("Y-m-d")) && !$talent->selflog2)
                                                        <span class="badge badge-secondary text-hover-gray-800">1st Year entry</span>
                                                    @else
                                                        <a href="{{url('/talent/logbook/2')}}" class="badge badge-success text-hover-gray-800">1st Year entry</a> 
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    @if($lock && !$talent->selflog2)
                                                        <span class="text-muted fw-bold d-block fs-8">-</span>
                                                    @else
                                                        @if($talent->selflog2)
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                        @else
                                                        <span class="text-gray-700 fw-bolder d-block fs-7"><span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(is_null($talent->superlog2))
                                                        <span class="text-danger fw-bolder d-block fs-7">Not Evaluated</span>
                                                    @else
                                                        <span class="text-success fw-bolder d-block fs-7">Evaluated</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @php
                                                $date = '';$lock = true;
                                                if((Auth::user()->locks->where('lock.type_id',4)->first()->lock->end_date??'')!=''){
                                                    $lock = false;
                                                    $date = Auth::user()->locks->where('lock.type_id',4)->first()->lock->end_date;
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    @if(($lock || $date<date("Y-m-d")) && !$talent->selflog3)
                                                        <span class="badge badge-secondary text-hover-gray-800">2nd Year entry</span>
                                                    @else
                                                        <a href="{{url('/talent/logbook/3')}}" class="badge badge-success text-hover-gray-800">2nd Year entry</a> 
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    @if($lock && !$talent->selflog3)
                                                        <span class="text-muted fw-bold d-block fs-8">-</span>
                                                    @else
                                                        @if($talent->selflog3)
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                        @else
                                                        <span class="text-gray-700 fw-bolder d-block fs-7"><span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @endif
                                                    @endif
                                                    
                                                </td>
                                                <td>
                                                    @if(is_null($talent->superlog3))
                                                        <span class="text-danger fw-bolder d-block fs-7">Not Evaluated</span>
                                                    @else
                                                        <span class="text-success fw-bolder d-block fs-7">Evaluated</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                   
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-info">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="black"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column w-100">
                                <a href="#" class="text-dark text-hover-primary fs-6 fw-bolder">Talent Workplace Experience Report (TWER)</a>
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-1 mb-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50"></th>
                                                <th class="p-0 w-25"></th>
                                                <th class="p-0 w-25"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @php
                                                $date = '';$lock = true;
                                                if((Auth::user()->locks->where('lock.type_id',5)->first()->lock->end_date??'')!=''){
                                                    $lock = false;
                                                    $date = Auth::user()->locks->where('lock.type_id',5)->first()->lock->end_date;
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    @if(($lock || $date<date("Y-m-d")) && ($talent->twer1->status_id??'')=="")
                                                        @if(is_null($talent->twer1))
                                                            <span class="badge badge-secondary text-hover-gray-800">1st Year entry</span>
                                                        @else
                                                            <a href="{{url('/talent/twer/1')}}" class="badge badge-secondary text-hover-gray-800">1st Year entry</a> 
                                                        @endif
                                                    @else
                                                        <a href="{{url('/talent/twer/1')}}" class="badge badge-success text-hover-gray-800">1st Year entry</a> 
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    @if($lock && ($talent->twer1->status_id??'')=="")
                                                        <span class="text-muted fw-bold d-block fs-8">-</span>
                                                    @else
                                                        @if($talent->twer1 && is_null($talent->twer1->status_id))
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Draft</span> <span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @elseif($talent->twer1 && $talent->twer1->status_id==1)
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                        @else
                                                        <span class="text-gray-700 fw-bolder d-block fs-7"><span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($talent->twer1 && is_null($talent->twer1->mark))
                                                    <span class="text-danger fw-bolder d-block fs-7">Not Evaluated</span>
                                                    @elseif($talent->twer1 && !is_null($talent->twer1->mark))
                                                    <span class="text-success fw-bolder d-block fs-7">Evaluated</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @php
                                                $date = '';$lock = true;
                                                if((Auth::user()->locks->where('lock.type_id',6)->first()->lock->end_date??'')!=''){
                                                    $lock = false;
                                                    $date = Auth::user()->locks->where('lock.type_id',6)->first()->lock->end_date;
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    @if(($lock || $date<date("Y-m-d")) && ($talent->twer2->status_id??'')=="")
                                                        @if(is_null($talent->twer2))
                                                            <span class="badge badge-secondary text-hover-gray-800">2nd Year entry</span>
                                                        @else
                                                            <a href="{{url('/talent/twer/2')}}" class="badge badge-secondary text-hover-gray-800">2nd Year entry</a> 
                                                        @endif
                                                    @else
                                                        <a href="{{url('/talent/twer/2')}}" class="badge badge-success text-hover-gray-800">2nd Year entry</a> 
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    @if($lock && ($talent->twer2->status_id??'')=="")
                                                        <span class="text-muted fw-bold d-block fs-8">-</span>
                                                    @else
                                                        @if($talent->twer2 && is_null($talent->twer2->status_id))
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Draft</span> <span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @elseif($talent->twer2 && $talent->twer2->status_id==1)
                                                        <span class="text-gray-700 fw-bolder d-block fs-7">Completed</span>
                                                        @else
                                                        <span class="text-gray-700 fw-bolder d-block fs-7"><span class="text-muted fw-bold fs-8">Due by</span> {{date("d M, y",strtotime($date))}}</span>
                                                        @endif
                                                    @endif
                                                    
                                                </td>
                                                <td>
                                                    @if($talent->twer2 && is_null($talent->twer2->mark))
                                                    <span class="text-danger fw-bolder d-block fs-7">Not Evaluated</span>
                                                    @elseif($talent->twer2 && !is_null($talent->twer2->mark))
                                                    <span class="text-success fw-bolder d-block fs-7">Evaluated</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                   
                            </div>
                            <!--end::Text-->
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <a href="{{url('/talent/training')}}">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-danger">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="black"/>
                                        <path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="{{url('/talent/training')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Training</a>
                                <span class="text-danger fw-bold"> 
                                    @if($talent->course->where('status_id',NULL)->count()>0)
                                    Pending {{$talent->course->where('status_id',NULL)->count()}} response.
                                    @endif
                                </span>
                                <span class="text-gray-600 fw-bold">
                                <span class="text-success">{{$talent->course->where('attendance_id',4)->count()}}</span> / {{$talent->course->count()}}
                                </span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Symbol-->
                            <a href="{{url('/talent/project')}}">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
                                        <path d="M21 13V13.5C21 16 19 18 16.5 18H5.6V16H16.5C17.9 16 19 14.9 19 13.5V13C19 12.4 19.4 12 20 12C20.6 12 21 12.4 21 13ZM18.4 6H7.5C5 6 3 8 3 10.5V11C3 11.6 3.4 12 4 12C4.6 12 5 11.6 5 11V10.5C5 9.1 6.1 8 7.5 8H18.4V6Z" fill="black"/>
                                        <path opacity="0.3" d="M21.7 6.29999C22.1 6.69999 22.1 7.30001 21.7 7.70001L18.4 11V3L21.7 6.29999ZM2.3 16.3C1.9 16.7 1.9 17.3 2.3 17.7L5.6 21V13L2.3 16.3Z" fill="black"/>
                                        </svg>                       
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="{{url('/talent/project')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Project Progress</a>
                                    @php 
                                    $progress = \App\Models\TalentProjectProgress::whereIn('project_id',$talent->project->pluck('id'))->orderBy('updated_at','desc')->first();
                                    if($progress){
                                        if($talent->latestproject->updated_at<$progress->updated_at)
                                            $updated_at = $progress->updated_at;
                                        if($talent->latestproject->updated_at>$progress->updated_at)
                                            $updated_at = $talent->latestproject->updated_at;
                                    
                                        $start = new DateTime(date('Y-m-d', strtotime($updated_at)).' 00:00:00');
                                        $end = new DateTime(date('Y-m-d').' 00:00:00');
                                        $diff = $start->diff($end);

                                        $yearsInMonths = $diff->format('%r%y') * 12;
                                        $months = $diff->format('%r%m');
                                        $totalMonths = $yearsInMonths + $months;
                                    }
                                    @endphp
                                <span class="text-muted">Latest Updated:     
                                <span class="text-{{($progress && $totalMonths>6)?'danger':'success'}} fw-bold">
                                    {{($progress)?date('d/m/Y', strtotime($updated_at)):'-'}}
                                </span>
                                </span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <a href="{{url('/talent/document')}}">
                                <div class="symbol symbol-50px me-5">
                                <span class="symbol-label badge-secondary">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                        <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                                    </svg>    
                                    <!--end::Svg Icon-->
                                </span>
                                </div>
                            </a>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column">
                                <a href="{{url('/talent/document')}}" class="text-dark text-hover-primary fs-6 fw-bolder">Uploaded Documents</a>
                                <span class="text-muted fw-bold">
                                   
                                </span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <div class="tab-pane fade" id="kt_tab_toknow" role="tabpanel">
                        @foreach($thingstoknow as $item)
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <img src="{{url('thingstoknow/'.$item->image)}}" alt="{{$item->title}}" class="w-100">
                                    </div>
                                </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <a href="{{url('thingstoknow/'.$item->url)}}" class="text-gray-800 fw-bolder text-hover-primary fs-6" target="_blank">{{$item->title}}</a>
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        @endif


    </div>
    <!--end::col-4 1st-->
    @if(Auth::user()->group_id!=7 && Auth::user()->group_id!=5)
    <div class="col-lg-4">
        <div class="row"> 
            @if(Auth::user()->group_id==1 || Auth::user()->group_id==2)  
            <div class="col-6">
                <a href="{{url('secretariat/applicants')}}" class="card h-125px mb-5">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-info svg-icon-2hx ms-n1 flex-grow-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <div class="text-gray-700 fw-bold pt-4 fs-6">Applicants</div>
                    </div>
                </div>
                <!--end::Body-->
                </a>
            </div>
            <div class="col-6">
                <a href="{{url('secretariat/talents')}}" class="card h-125px mb-5" style="background-color: #7239EA;">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <div class="text-white fw-bold pt-4 fs-6">Talents</div>
                    </div>
                </div>
                <!--end::Body-->
                </a>
            </div>
            <div class="col-6">
                <a href="{{url('secretariat/ars')}}" class="card h-125px mb-5 bg-danger">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-secondary svg-icon-2hx ms-n1 flex-grow-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
  <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"/>
  <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
</svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <div class="text-white fw-bold pt-4 fs-6">Application Ranking System</div>
                    </div>
                </div>
                <!--end::Body-->
                </a>
            </div> 
            <div class="col-6">
                <a href="{{url('secretariat/supervisors ')}}" class="card h-125px mb-5 bg-success">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-secondary svg-icon-2hx ms-n1 flex-grow-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
</svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <div class="text-white fw-bold pt-4 fs-6">Supervisors</div>
                    </div>
                </div>
                <!--end::Body-->
                </a>
            </div> 
            <div class="col-6">
                <a href="{{url('secretariat/project')}}" class="card h-125px mb-5" style="background-image:url('assets/media/stock/600x600/img-7.jpg')">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-secondary svg-icon-2hx ms-n1 flex-grow-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M20 19H4C2.9 19 2 18.1 2 17H22C22 18.1 21.1 19 20 19Z" fill="black"/>
<path opacity="0.3" d="M20 5H4C3.4 5 3 5.4 3 6V17H21V6C21 5.4 20.6 5 20 5Z" fill="black"/>
</svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="d-flex flex-column">
                        <div class="text-white fw-bold pt-4 fs-6">Project Progress</div>
                    </div>
                </div>
                <!--end::Body-->
                </a>
            </div>   
            <div class="col-6">
                <!--begin::Tiles Widget 5-->
                <a href="{{url('training')}}" class="card h-125px bg-primary mb-5">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="black"/>
                            <path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <div class="text-white fw-bold pt-4 fs-6">Training</div>
                        </div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tiles Widget 5-->
            </div> 
            <div class="col-6">
                <!--begin::Tiles Widget 5-->
                <a href="{{url('secretariat/document')}}" class="card h-125px bg-dark mb-5">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                            </svg>                                                   
                        </span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <div class="text-white fw-bold pt-4 fs-6">Documents</div>
                        </div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tiles Widget 5-->
            </div> 
            @endif
           
            @if(Auth::user()->group_id!=7 && Auth::user()->group_id!=5)  
            <!-- <div class="col-6">
                <div class="card h-125px bgi-no-repeat bgi-size-contain mb-5" style="background-color: #663259; background-position: 0 calc(100% + 0.5rem); background-size: 100% auto;  background-image:url('{{url('')}}/assets/media/svg/misc/taieri.svg')">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h2 class="text-white fw-bolder mb-5">TGP Booklet
                        </h2>
                        <div class="m-0">
                            <a target="_blank" href="{{url('info/BOOKLET_TGP_2018.pdf')}}" class="btn btn-danger fw-bold px-6 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">2018</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-6">
                <div class="card h-125px bgi-no-repeat mb-5" style="background-position: right top; background-size: 40% auto; background-image: url({{url('')}}/assets/media/svg/shapes/abstract-4.svg">
                    <div class="card-body">
                        <a target="_blank" href="{{url('info/TGP_Guidelines.pdf')}}" class="card-title fw-bolder text-muted text-hover-primary fs-2">TGP Guidelines</a>
                    </div>
                </div>
            </div> -->
            @endif
            @if(Auth::user()->group_id==3)  
            <div class="col-12">
                <!--begin::Tiles Widget 5-->
                <a href="{{url('applicant/document')}}" class="card h-125px bg-dark mb-5">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                            </svg>                                                   
                        </span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <div class="text-white fw-bold pt-4 fs-6">Documents</div>
                        </div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tiles Widget 5-->
            </div> 
            @endif
        </div>
    </div>
    <!--end::col-4 2nd-->
    @endif
    <div class="col-lg-4">
        @if(Auth::user()->group_id==5)  
        <div class="card mb-5">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-4 mb-1">Applicant Status</span>
                <span class="text-muted fw-bold fs-8">Statistics by status</span>
            </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            @php
                $total = $applicants->count();
                $complete = $applicants->applicantComplete()->count();
            @endphp
            <div class="card-body p-0 d-flex flex-column">
                <div class="card-px pt-5 pb-5 flex-grow-1">
                    <!--begin::Row-->
                    <div class="row g-0 mb-10">
                        <!--begin::Col-->
                        <div class="col">
                            <div class="d-flex align-items-center me-2 cursor-pointer panel-search-applicant" search-status="Complete">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light-success">
                                        <!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"/>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-6 text-dark fw-bolder">{{$complete}}</div>
                                    <div class="fs-7 text-muted fw-bold">Complete</div>
                                    
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="d-flex align-items-center me-2 cursor-pointer panel-search-applicant" search-status="Incomplete">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light-warning">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
                                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-6 text-dark fw-bolder">{{$total-$complete}}</div>
                                    <div class="fs-7 text-muted fw-bold">Incomplete</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
            </div>  

            </div>  
        </div>  
                
        <div class="card">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-4 mb-1">Talent Status</span>
                <span class="text-muted fw-bold fs-8">Statistics by status</span>
            </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0 d-flex flex-column">
                <!--begin::Stats-->
                <div class="card-px pt-5 pb-10 flex-grow-1">
                    <!--begin::Row-->
                    <div class="row g-0 mb-10">
                        <!--begin::Col-->
                        <div class="col">
                            <div class="d-flex align-items-center me-2 cursor-pointer panel-search-talent" search-status="Active">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light-success">
                                        <!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"/>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-6 text-dark fw-bolder">Active</div>
                                    <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',1)->count()}} : <span class="text-success fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',1)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                    
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="d-flex align-items-center me-2 cursor-pointer panel-search-talent" search-status="Alumni">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light-warning">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z" fill="black"/>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-6 text-dark fw-bolder">Alumni</div>
                                    <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',2)->count()}} : <span class="text-warning fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',2)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-0">
                        <!--begin::Col-->
                        <div class="col">
                            <div class="d-flex align-items-center me-2 cursor-pointer panel-search-talent" search-status="Study Leave">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light-info">
                                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                            <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-6 text-dark fw-bolder">Study Leave</div>
                                    <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',4)->count()}} : <span class="text-info fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',4)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="d-flex align-items-center me-2 cursor-pointer panel-search-talent" search-status="Dropout">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40px me-3">
                                    <div class="symbol-label bg-light-danger">
                                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
                                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-6 text-dark fw-bolder">Dropout</div>
                                    <div class="fs-7 text-muted fw-bold">{{$talents->where('status.final_id',3)->count()}} : <span class="text-danger fs-7 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{$talents->count()>0?round($talents->where('status.final_id',3)->count()/$talents->count()*100):0}}" data-kt-countup-suffix="%">0</span></div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Stats-->
                
            </div>
            <!--end::Body-->
        </div>
        @endif
        @if(Auth::user()->group_id<=2 || Auth::user()->group_id==7)
        @if(Auth::user()->group_id==7)
        <a href="javascript:void(0)" onclick="$('.assessment').toggleClass('d-none');">
            <div class="d-flex align-items-center bg-danger rounded p-5 mb-5">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-white me-5">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
                <!--end::Icon-->
                <!--begin::Title-->
                <div class="flex-grow-1 me-2">
                    <span class="fw-bolder text-white text-hover-primary fs-6">Assessment</span>
                    <!-- <span class="text-muted fw-bold d-block">Due in 7 Days</span> -->
                </div>
                <!--end::Title-->
                <!--begin::Lable-->
                <!-- <span class="fw-bolder text-info py-1">+8%</span> -->
                <!--end::Lable-->
            </div>
        </a>
        <div class="row g-0 assessment d-none">
            <!--begin::Col-->
            <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7 border border-gray-300">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M22 12C22 13.8 21.5 15.5 20.7 17L14.9 7H20.7C21.5 8.5 22 10.2 22 12ZM3.3 7L6.2 12L12 2C8.3 2 5.1 4 3.3 7ZM3.3 17C5 20 8.3 22 12 22L14.9 17H3.3Z" fill="black"/>
                    <path d="M20.7 7H9.2L12.1 2C15.7 2 18.9 4 20.7 7ZM3.3 7C2.4 8.5 2 10.2 2 12C2 13.8 2.5 15.5 3.3 17H9.10001L3.3 7ZM17.8 12L12 22C15.7 22 18.9 20 20.7 17L17.8 12Z" fill="black"/>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <a href="{{url('/talent/assessment/profile')}}" class="text-warning fw-bold fs-6 mt-2">Talent Profile Update</a>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col bg-light-success px-6 py-8 rounded-2 mb-7 border border-gray-300">
                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22 12C22 12.2 22 12.5 22 12.7L19.5 10.2L16.9 12.8C16.9 12.5 17 12.3 17 12C17 9.5 15.2 7.50001 12.8 7.10001L10.2 4.5L12.7 2C17.9 2.4 22 6.7 22 12ZM11.2 16.9C8.80001 16.5 7 14.5 7 12C7 11.7 7.00001 11.5 7.10001 11.2L4.5 13.8L2 11.3C2 11.5 2 11.8 2 12C2 17.3 6.09999 21.6 11.3 22L13.8 19.5L11.2 16.9Z" fill="black"/>
                        <path opacity="0.3" d="M22 12.7C21.6 17.9 17.3 22 12 22C11.8 22 11.5 22 11.3 22L13.8 19.5L11.2 16.9C11.5 16.9 11.7 17 12 17C14.5 17 16.5 15.2 16.9 12.8L19.5 10.2L22 12.7ZM10.2 4.5L12.7 2C12.5 2 12.2 2 12 2C6.7 2 2.4 6.1 2 11.3L4.5 13.8L7.10001 11.2C7.50001 8.8 9.5 7 12 7C12.3 7 12.5 7.00001 12.8 7.10001L10.2 4.5Z" fill="black"/>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <a href="{{url('/talent/assessment/project')}}" class="text-success fw-bold fs-6 mt-2">TGP Project</a>
            </div>
            <!--end::Col-->
        </div>
        @endif
        <!--begin::Card-->
        <div class="card mb-5">
            <!--begin::Card header-->
            <div class="card-header pt-5">
                <!--begin::Card title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">TGP Calendar {{date("Y")}}</span>
                </h3>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-5">
                <!--begin::Dates-->
                <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x ">
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-6 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_all">
                            <span class="fs-6 fw-bolder">All</span>
                        </a>
                    </li>
                    @for($i = 1; $i<=12; $i++)
                    <li class="nav-item me-1">
                        <a class="nav-link btn d-flex flex-column @if(date('m')==$i) bg-light-primary @endif flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_{{$i}}">
                            <span class="opacity-50 fs-7 fw-bold">{{date("M", mktime(0, 0, 0, $i, 10))}}</span>
                            <span class="fs-6 fw-bolder">{{date("m", mktime(0, 0, 0, $i, 10))}}</span>
                        </a>
                    </li>
                    @endfor
                </ul>
                <!--end::Dates-->
                <!--begin::Tab Content-->
                <div class="tab-content hover-scroll-y pt-5" id="myCalendar">
                    <div class="tab-pane fade show active" id="kt_schedule_day_all">
                    @foreach($courses as $item)
                    <!--begin::Day-->
                    <div class="@if(date("mY",strtotime($item->start_date))==date("mY"))bg-light-primary @endif py-5">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px {{$item->type->color->name??'bg-gray-300'}} rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-7">{{ date("d M Y",strtotime($item->start_date))}} - {{ date("d M Y",strtotime($item->end_date))}}
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-6 fw-bold text-gray-800 mb-2">{{$item->type->name??''}} : {{$item->title}}</a><br/>
                                <a href="#" class="fs-7 text-gray-800">{{$item->domain->name??''}}</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Time-->
                        
                    </div>
                    <!--end::Day-->
                    <div class="separator separator-dashed border-secondary"></div>
                    @endforeach
                    
                </div>
                @for($i = 1; $i<=12; $i++)
                <div class="tab-pane fade" id="kt_schedule_day_{{$i}}" >
                    @foreach(App\Models\Courses::monthly($i)->get() as $item)
                    <!--begin::Day-->
                    <div class="">
                        <!--begin::Time-->
                        <div class="d-flex flex-stack position-relative">
                            <!--begin::Bar-->
                            <div class="position-absolute h-100 w-4px {{$item->type->color->name??'bg-gray-300'}} rounded top-0 start-0"></div>
                            <!--end::Bar-->
                            <!--begin::Info-->
                            <div class="fw-bold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-7">{{ date("d M Y",strtotime($item->start_date))}} - {{ date("d M Y",strtotime($item->end_date))}}
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-6 fw-bold text-gray-800 mb-2">{{$item->type->name??''}} : {{$item->title}}</a><br/>
                                <a href="#" class="fs-7 text-gray-800">{{$item->domain->name??''}}</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Time-->
                        
                    </div>
                    <!--end::Day-->
                    <div class="separator separator-dashed border-secondary my-5"></div>
                    @endforeach
                </div>

                @endfor
            </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        @endif
        
    </div>
    <!--end::col-4 3rd-->
    @if(Auth::user()->group_id==7)
    <div class="col-lg-4">
        <!--begin::Card-->
        <div class="card card-stretch mb-5">
            <!--begin::Card header-->
            <div class="card-header pt-5">
                <!--begin::Card title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">Responsibilities of Talent</span>
                </h3>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body px-10">
                <div class=" hover-scroll-y" id="torContent"> 
                {!!$tor->where('group_id',7)->first()->content??''!!}
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(Auth::user()->group_id==5)
    <div class="col-lg-4">
        <!--begin::Card-->
        <div class="card card-stretch mb-5">
            <!--begin::Card header-->
            <div class="card-header pt-5">
                <!--begin::Card title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">Responsibilities of Panel</span>
                </h3>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body px-10">
                <div class=" hover-scroll-y" id="torContent"> 
                {!!$tor->where('group_id',5)->first()->content??''!!}
                </div>
            </div>
        </div>
    </div>
    @endif
    @endif
</div>
<!--end::row-->






<!--begin::Modal - View Users-->
<div class="modal fade" id="kt_modal_view_noti" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-14 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="mb-13 sub-modal-title">
                    <!--begin::Title-->
                    <!-- <h1 class="mb-3">Notification</h1> -->
                    <!--end::Title-->
                    <!--begin::Description-->
                    <!-- <div class="text-muted fw-bold fs-5">If you need more info, please check out our</div> -->
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mb-15">
                    <!--begin::List-->
                    <div class="mh-375px scroll-y me-n7 pe-7 sub-modal-content">
                        <!--begin::User-->
                       <!--  <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed sub-modal-content">
                            
                        </div> -->
                        <!--end::User-->
                        
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->

            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->
<form id="search-form" action="secretariat/applicants" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="programme">
    <input type="hidden" name="status">
    <input type="hidden" name="state">
</form>
<x-slot name="scripts">
<script>
@if($dashboard=="supervisor" || Auth::user()->group_id==6)
    $('#myCalendar').height($('#myTabContent').height()+60);
    $('#torContent').height($('#myCalendar').height()+60);
@elseif(Auth::user()->group_id==5)
    $('#torContent').height(screen.height*0.43);
@else    
    // $('#myCalendar').height($('#myTabContent').height()-100);
    // $('#torContent').height($('#myCalendar').height()+60);
@endif
$("#kt_modal_view_noti").on('show.bs.modal', function (e) {
  var news = $(e.relatedTarget).data('id');
  var modal = $(this)
  $.getJSON( "{{url('notification/modal')}}/"+news, function( data ){
    modal.find('.sub-modal-title').html(data.title);
    
    modal.find('.sub-modal-content').html(data.content);
  });
});
@if(session('firstlogin')=="1")
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toastr-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "6000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
var today = new Date()
var curHr = today.getHours()
var hello;
if (curHr < 12) {
  hello = 'Good Morning';
} else if (curHr < 18) {
  hello = 'Good Afternoon';
} else {
  hello = 'Good Evening';
}

toastr.success("Welcome back to MyTGP", hello+" {{Auth::user()->name}}");

@endif

jQuery(document).ready(function ($) {
    $('.my-news-ticker').AcmeTicker({
        type:'horizontal',/*horizontal/horizontal/Marquee/type*/
        direction: 'right',/*up/down/left/right*/
        speed: 1500,
        controls: {
            prev: $('.acme-news-ticker-prev'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
            toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
            next: $('.acme-news-ticker-next')/*Can be used for horizontal/horizontal/marquee/typewriter*/
        }
    });

    $('.search-applicant').on('click', function (e) {
        $('#search-form input[type=hidden]:not([name="_token"])').val('');
        var programme = $(this).attr('search-programme');
        $('#search-form').find('input[name="programme"]').val(programme);
        $('#search-form').attr('action','secretariat/applicants');
        $('#search-form').submit();
    });
    $('.search-state').on('click', function (e) {
        $('#search-form input[type=hidden]:not([name="_token"])').val('');
        var state = $(this).attr('search-state');
        $('#search-form').find('input[name="state"]').val(state);
        $('#search-form').attr('action','secretariat/applicants');
        $('#search-form').submit();
    });
    $('.search-talent').on('click', function (e) {
        $('#search-form input[type=hidden]:not([name="_token"])').val('');
        var programme = $(this).attr('search-programme');
        var status = $(this).attr('search-status');
        $('#search-form').find('input[name="programme"]').val(programme);
        $('#search-form').find('input[name="status"]').val(status);
        $('#search-form').attr('action','secretariat/talents');
        $('#search-form').submit();
    });
    $('.panel-search-talent').on('click', function (e) {
        $('#search-form input[type=hidden]:not([name="_token"])').val('');
        var programme = $(this).attr('search-programme');
        var status = $(this).attr('search-status');
        $('#search-form').find('input[name="programme"]').val(programme);
        $('#search-form').find('input[name="status"]').val(status);
        $('#search-form').attr('action','panel/talents');
        $('#search-form').submit();
    });
    $('.panel-search-applicant').on('click', function (e) {
        $('#search-form input[type=hidden]:not([name="_token"])').val('');
        var status = $(this).attr('search-status');
        $('#search-form').find('input[name="status"]').val(status);
        $('#search-form').attr('action','panel/applicants');
        $('#search-form').submit();
    });

})
</script>
</x-slot>
</x-app-layout>
