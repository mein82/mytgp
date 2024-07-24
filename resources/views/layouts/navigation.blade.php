<!--begin::Container-->
<div class="header-menu-container d-flex align-items-stretch flex-stack h-lg-75px w-100" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
            <!--<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item @if($activemenu=='dashboard') here show @endif menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Dashboards</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link active py-3" href="{{url('dashboard')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Main</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link py-3" href="{{url('')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Portal</span>
                        </a>
                    </div>
                </div>
            </div>-->
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('')}}">
                    <span class="menu-title"><span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H6C6.6 2 7 2.4 7 3V6C7 6.6 6.6 7 6 7Z" fill="black"/>
<path opacity="0.3" d="M13 7H10C9.4 7 9 6.6 9 6V3C9 2.4 9.4 2 10 2H13C13.6 2 14 2.4 14 3V6C14 6.6 13.6 7 13 7ZM21 6V3C21 2.4 20.6 2 20 2H17C16.4 2 16 2.4 16 3V6C16 6.6 16.4 7 17 7H20C20.6 7 21 6.6 21 6ZM7 13V10C7 9.4 6.6 9 6 9H3C2.4 9 2 9.4 2 10V13C2 13.6 2.4 14 3 14H6C6.6 14 7 13.6 7 13ZM14 13V10C14 9.4 13.6 9 13 9H10C9.4 9 9 9.4 9 10V13C9 13.6 9.4 14 10 14H13C13.6 14 14 13.6 14 13ZM21 13V10C21 9.4 20.6 9 20 9H17C16.4 9 16 9.4 16 10V13C16 13.6 16.4 14 17 14H20C20.6 14 21 13.6 21 13ZM7 20V17C7 16.4 6.6 16 6 16H3C2.4 16 2 16.4 2 17V20C2 20.6 2.4 21 3 21H6C6.6 21 7 20.6 7 20ZM14 20V17C14 16.4 13.6 16 13 16H10C9.4 16 9 16.4 9 17V20C9 20.6 9.4 21 10 21H13C13.6 21 14 20.6 14 20ZM21 20V17C21 16.4 20.6 16 20 16H17C16.4 16 16 16.4 16 17V20C16 20.6 16.4 21 17 21H20C20.6 21 21 20.6 21 20Z" fill="black"/>
</svg></span></span>
                </a>
            </div>
            <div class="menu-item @if($activemenu=='dashboard') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('dashboard')}}">
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>
            @if(Auth::user()->group_id==7)
            <div class="menu-item @if($activemenu=='training') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('talent/training')}}">
                    <span class="menu-title">Training</span>
                </a>
            </div>
            <div class="menu-item @if($activemenu=='project') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('talent/project')}}">
                    <span class="menu-title">Project</span>
                </a>
            </div>
            <div class="menu-item @if($activemenu=='document') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('talent/document')}}">
                    <span class="menu-title">Document</span>
                </a>
            </div>
            @endif
            @if(Auth::user()->group_id==5)
            <div class="menu-item @if($activemenu=='panel-applicant') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('panel/applicants')}}">
                    <span class="menu-title">Applicants</span>
                </a>
            </div>
            <div class="menu-item @if($activemenu=='panel-talent') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('panel/talents')}}">
                    <span class="menu-title">Talents</span>
                </a>
            </div>
            @endif
            @if(Auth::user()->group_id==1 || Auth::user()->group_id==2)
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item @if (strpos($activemenu, 'sec-')!== false) here show @endif menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Main Menu</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                        <span class="menu-link @if (strpos($activemenu, 'sec-app')!== false) active @endif py-3">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Applicant</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-app-evaluate') active @endif py-3" href="{{url('/secretariat/applicants')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Evaluation</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-app-evaluate-rejected') active @endif py-3" href="{{url('/secretariat/applicants/rejected')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Rejected</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-app-evaluate-defferred') active @endif py-3" href="{{url('/secretariat/applicants/defferred')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Deferred</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-app-selection') active @endif py-3" href="{{url('/secretariat/selections')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Selection Result</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-ars') active @endif py-3" href="{{url('/secretariat/ars')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Application Ranking System</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                        <span class="menu-link  @if (strpos($activemenu, 'sec-talent')!== false) active @endif py-3">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Talent</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-talent-evaluate') active @endif py-3" href="{{url('/secretariat/talents')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Evaluation</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-talent-profile') active @endif py-3" href="{{url('/secretariat/talent-profile')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Profile & Achievement Report</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='sec-talent-assesment-mark') active @endif py-3" href="{{url('/secretariat/talent-assesment-mark')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Assesment Marks</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link @if($activemenu=='sec-supervisor') active @endif py-3" href="{{url('/secretariat/supervisors')}}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Supervisor</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link @if($activemenu=='sec-alumni') active @endif py-3" href="{{url('alumnus')}}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z" fill="black"/>
</svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Alumni</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link @if($activemenu=='sec-training') active @endif py-3" href="{{url('training')}}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
<path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="black"/>
<path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="black"/>
</svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Calendar</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link @if($activemenu=='sec-document') active @endif py-3" href="{{url('secretariat/document')}}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                            </svg>          
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Document</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item @if($activemenu=='ttknow') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('things-to-know')}}">
                    <span class="menu-title">Things To Know</span>
                </a>
            </div>
            <div class="menu-item @if($activemenu=='tor') here show @endif menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="{{url('term-of-reference')}}">
                    <span class="menu-title">TOR</span>
                </a>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item @if(strpos($activemenu, 'portal-')!== false) here show @endif menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Portal</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link  @if($activemenu=='portal-announce') active @endif py-3" href="{{url('portal/announce')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Announcement</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link  @if($activemenu=='portal-banner') active @endif py-3" href="{{url('portal/banner')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Banner</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link  @if($activemenu=='portal-publication') active @endif py-3" href="{{url('portal/publication')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Publication</span>
                        </a>
                    </div>
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                        <span class="menu-link  @if (strpos($activemenu, 'portal-faq')!== false) active @endif py-3">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">FAQ</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='portal-faq-tab') active @endif py-3" href="{{url('/portal/faq/tab')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Tab</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='portal-faq-content') active @endif py-3" href="{{url('/portal/faq/content')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Content</span>
                                </a>
                            </div>
                            
                        </div>
                    </div> 
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item @if(strpos($activemenu, 'setting-')!== false) here show @endif menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Setting</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link  @if($activemenu=='setting-lock') active @endif py-3" href="{{url('setting/lock')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Locked Control</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link  @if($activemenu=='setting-notification') active @endif py-3" href="{{url('setting/notification')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Notification</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link  @if($activemenu=='setting-user') active @endif py-3" href="{{url('setting/user')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users</span>
                        </a>
                    </div>
                     <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                        <span class="menu-link  @if (strpos($activemenu, 'setting-code')!== false) active @endif py-3">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Code</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='setting-code-title') active @endif py-3" href="{{url('/setting/code/title')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Title</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='setting-code-scheme') active @endif py-3" href="{{url('/setting/code/scheme')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Scheme</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='setting-code-grade') active @endif py-3" href="{{url('/setting/code/grade')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Grade</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link @if($activemenu=='setting-code-coursetype') active @endif py-3" href="{{url('/setting/code/coursetype')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Course Type</span>
                                </a>
                            </div>
                        </div>
                    </div>                      
                </div>
            </div>
            @endif
        </div>
        <!--end::Menu-->
        
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Container-->