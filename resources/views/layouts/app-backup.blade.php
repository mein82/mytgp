<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
    <!--begin::Head-->
    <head><base href="">
        <title>MyTGP - Talent Grooming Programme</title>
        <meta charset="utf-8" />
        <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="MyTGP | Talent Grooming Programme" />
        <!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
        <link rel="shortcut icon" href="{{url('')}}/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href="{{url('')}}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{url('')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" data-kt-aside-minimize="on" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                @include('layouts.navigation')
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" style="" class="header align-items-stretch">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-stretch justify-content-between">
                            <!--begin::Aside mobile toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Aside mobile toggle-->
                            <!--begin::Mobile logo-->
                            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                                <a href="{{url('dashboard')}}" class="d-lg-none">
                                    <img alt="Logo" src="{{url('logo/mytgp-logo.png')}}" class="h-30px" />
                                </a>
                            </div>
                            <!--end::Mobile logo-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                                <!--begin::Navbar-->
                                <div class="d-flex align-items-stretch" id="kt_header_nav">
                                    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                         
                                    <!--begin::Title-->
                                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{$header??'Dashboard'}}
                                    <!--begin::Separator-->
                                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                    <!--end::Separator-->
                                    <!--begin::Description-->
                                    <small class="text-muted fs-7 fw-bold my-1 ms-1">{{$subheader?? (Auth::user()->group->name .(!is_null(Auth::user()->programme_id)? '- '.Auth::user()->programme->name:'')) }}</small>
                                    <!--end::Description--></h1>
                                    <!--end::Title-->
                                </div>
                                </div>
                                <!--end::Navbar-->
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    
                                    <!--begin::Notifications-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!--begin::Menu- wrapper-->
                                        <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
                                                    <path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
                                                    <path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
                                                    <path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{url('')}}/assets/media/misc/pattern-1.jpg')">
                                                <!--begin::Title-->
                                                <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                                                <!--end::Title-->
                                                <!--begin::Tabs-->
                                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                    <li class="nav-item">
                                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                                    </li>
                                                </ul>
                                                <!--end::Tabs-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Tab content-->
                                            <div class="tab-content">
                                                <!--begin::Tab panel-->
                                                <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                                    <!--begin::Items-->
                                                    <div class="scroll-y mh-325px my-5 px-8">
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-stack py-4">
                                                            <!--begin::Section-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-35px me-4">
                                                                    <span class="symbol-label bg-light-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
                                                                                <path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class="mb-0 me-2">
                                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
                                                                    <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Section-->
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light fs-8">1 hr</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Item-->
                                                        
                                                    </div>
                                                    <!--end::Items-->
                                                    <!--begin::View more-->
                                                    <div class="py-3 text-center border-top">
                                                        <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon--></a>
                                                    </div>
                                                    <!--end::View more-->
                                                </div>
                                                <!--end::Tab panel-->
                                                <!--begin::Tab panel-->
                                                <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column px-9">
                                                        <!--begin::Section-->
                                                        <div class="pt-10 pb-0">
                                                            <!--begin::Title-->
                                                            <h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
                                                            <!--end::Title-->
                                                            <!--begin::Text-->
                                                            <div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                                            <!--end::Text-->
                                                            <!--begin::Action-->
                                                            <div class="text-center mt-5 mb-9">
                                                                <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Illustration-->
                                                        <div class="text-center px-4">
                                                            <img class="mw-100 mh-200px" alt="image" src="{{url('')}}/assets/media/illustrations/sketchy-1/1.png" />
                                                        </div>
                                                        <!--end::Illustration-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Tab panel-->
                                                
                                            </div>
                                            <!--end::Tab content-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Notifications-->
                                    
                                    
                                    <!--begin::User menu-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <img src="{{url('photo/'.Auth::user()->avatar)}}" alt="user" />
                                        </div>
                                        <!--begin::User account menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="{{url('photo/'.Auth::user()->avatar)}}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->name}}
                                                        <!-- <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span> -->
                                                        </div>
                                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="javascript;;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link px-5">Sign Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                            </div>
                                            <!--end::Menu item-->
                                            
                                        </div>
                                        <!--end::User account menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User menu-->
                                    <!--begin::Header menu toggle-->
                                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
                                                    <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Header menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        
                        <!--begin::Post-->
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                            {{$slot}}
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
                    <!--begin::Engage toolbar-->
        <div class="engage-toolbar d-flex position-fixed px-5 fw-bolder zindex-2 top-50 end-0 transform-90 mt-20 gap-2">
           <!--begin::Purchase link-->
            <a href="https://1.envato.market/EA4JP" target="_blank" class="engage-purchase-link btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 px-5 shadow-sm rounded-top-0">Reverse Impersonate</a>
            <!--end::Purchase link-->
            
        </div>
        <!--end::Engage toolbar-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
                                
        <!--begin::Javascript-->
        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{url('')}}/assets/plugins/global/plugins.bundle.js"></script>
        <script src="{{url('')}}/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{url('')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="{{url('')}}/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
        <!--end::Page Vendors Javascript-->
        <script src="{{url('')}}/js/custom.js"></script>
        {{$scripts??''}}
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>