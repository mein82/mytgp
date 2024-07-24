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
        <!-- <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" /> -->
        <!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
        <link rel="shortcut icon" href="{{url('')}}/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{url('')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
        <style>
        rect {
        fill: none;
        pointer-events: all;
        }

        circle {
        fill: none;
        stroke-width: 2.5px;
        }
        pulse,
            .pulse:after {
            display:inline-block;
            padding:.5rem;
            border-radius:50%;
            animation:pulse 1.5s .85s infinite ease-out;
            border:thick solid rgba(230,230,230,0);
            transform:scale3d(.7,.7,0);
            transition:opacity .75s;
            }
            .pulse { position:absolute; left:50%; top:50%; margin-top:-100px; margin-left:-100px;z-index:-1 }
            .pulse:after {
            display:block;
            content:"";
            padding:5rem;
            }

            @keyframes pulse {
            50% {
                border-color:rgba(230,230,230,.3);
                background:transparent;
            }
            to { border-color:transparent; transform:none; }
            }

        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Header Section-->
            <div class="mb-10" id="home">
                <!--begin::Wrapper-->
                <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom" style="background: url({{url('main-1.jpg')}});background-blend-mode: darken;background-size:cover;background-position:center 80%">
                    <!--begin::Header-->
                    <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="background-color: #fff">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center justify-content-between">
                                <!--begin::Logo-->
                                <div class="d-flex align-items-center flex-equal">
                                    <!--begin::Mobile menu toggle-->
                                    <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                        <span class="svg-icon svg-icon-2hx">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Mobile menu toggle-->
                                    <!--begin::Logo image-->
                                    <a href="{{url('')}}">
                                        <img alt="Logo" src="{{url('logo/mytgp-logo.png')}}" class="logo-default h-60px" />
                                        <img alt="Logo" src="{{url('logo/mytgp-logo.png')}}" class="logo-sticky h-60px" />
                                    </a>
                                    <!--end::Logo image-->
                                </div>
                                <!--end::Logo-->
                                <!--begin::Menu wrapper-->
                                <div class="d-lg-block" id="kt_header_nav_wrapper">
                                    <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-4 fw-bold" id="kt_landing_menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Our Scopes</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Achievements</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Gallery</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">FAQ</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#clients" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Feedbacks</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Menu wrapper-->
                                <!--begin::Toolbar-->
                                <div class="flex-equal text-end ms-1">
                                    <a href="{{url('login')}}" class="btn btn-danger fs-3">Sign In</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Landing hero-->
                    <div class="d-flex flex-column flex-center w-100 min-h-400px min-h-lg-600px px-9">
                        <!--begin::Heading-->
                        <!-- <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                            <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">Introducing Online Platform
                            for<br />
                            <span style="background: linear-gradient(to right, rgba(109,32,19,1) 0%, rgba(54,72,158,1) 50%, rgba(237,31,36,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="kt_landing_hero_text">Talent Grooming Programme</span>
                                <br/>
                            </span></h1>
                            <a href="{{url('register')}}" class="btn btn-danger">Register Now</a>
                        </div> -->
                        <!--end::Heading-->
                        
                        <!--begin::Product slider-->
                    <div class="tns tns-default">
                        <!--begin::Slider-->
                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
                            <!--begin::Item-->
                            @if($announce->count()==0)
                            <div class="text-end mb-5 mb-lg-10 py-10 py-lg-20">
                                <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">Online Platform
                                for<br />
                                <span class="text-danger fs-bolder fs-lg-4x">
                                    <span id="kt_landing_hero_text">Talent Grooming Programme</span>
                                    <br/>
                                </span></h1>
                                <a href="{{url('register')}}" class="btn btn-danger fs-3">Apply Now</a>
                            </div>
                            @endif
                            @foreach($banner as $item)
                            <!--begin::Item-->
                            <div class="text-center overlay">
                                <img src="{{($item->filename!='')?url('web/'.$item->filename):$item->link}}" class="card-rounded shadow mw-100" alt="" />
                                @if($item->link_lable=='') <a href="{{$item->url}}" target="_blank"> @endif
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    @if($item->link_lable!='')<a href="{{$item->url}}" class="btn btn-primary">{{$item->link_lable}}</a>@endif
                                </div>
                                @if($item->link_lable=='') </a>@endif
                            </div>
                            <!--end::Item-->
                            @endforeach
                            <!--end::Item-->
                            @foreach($announce as $data)
                            <!--begin::Item-->
                            <div class="mb-5 mb-lg-10 py-10 fs-1 fs-sm-5 fs-xs-5">
                                {!!$data->content!!}
                                @if(!is_null($data->button))
                                    @php
                                    $btn = json_decode($data->button);
                                    @endphp
                                    @foreach($btn as $b)
                                    <a href="{{$b->btn_url}}" class="btn btn-danger mt-5 me-2">{{$b->btn}}</a>
							        @endforeach

                                @endif
                            </div>
                            <!--end::Item-->
                            @endforeach
                            
                        </div>
                        <!--end::Slider-->
                        <!--begin::Slider button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Slider button-->
                        <!--begin::Slider button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Slider button-->
                    </div>
                    <!--end::Product slider-->
                        </div>
                        <!--end::Clients-->
                    </div>
                    <!--end::Landing hero-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Curve bottom-->
                <!-- <div class="landing-curve landing-white-color mt-lg-n8 mt-sm-n5">
                    <svg viewBox="15 12 1470 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M -5 0 V 50 H 1495 V 12 C 844 52 587 52 -1 11" fill="currentColor"></path>
                    </svg>
                </div> -->
                <!--end::Curve bottom-->
            </div>
            <!--end::Header Section-->
            <bogy>
            <!--begin::How It Works Section-->
            <div class="mb-n10 mb-lg-n20 mt-lg-10" style="z-index: 1;">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mb-17">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Scopes</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fs-4 text-muted fw-bold">The programme is broad and generic. It focuses on leadership and governance development for Technical Healthcare Professionals in the MOH.
                        <br />This programme runs parallel to the existing technical development programmes.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="row w-100 gy-10 mb-md-20">
                        <!--begin::Col-->
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img src="{{url('')}}/web/scope1.png" class="mh-125px mb-9" alt="" />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-2 fw-bolder text-dark">A Centre for Leadership Cultivation</div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div class="fw-bold fs-6 fs-lg-4 text-muted">To equip Talents with needed skills
                                <br />to become competent healthcare
                                <br />leaders</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Story-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img src="{{url('')}}/web/scope2.png" class="mh-125px mb-9" alt="" />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-2 fw-bolder text-dark">Professional <br/>Development</div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div class="fw-bold fs-6 fs-lg-4 text-muted">To provide customised professional 
                                <br />development to complement technical
                                <br />competency development</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Story-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img src="{{url('')}}/web/scope3.png" class="mh-125px mb-9" alt="" />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-2 fw-bolder text-dark">Dynamic and <br/>Flexible</div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div class="fw-bold fs-6 fs-lg-4 text-muted">Allow Talents to constantly go through
                                <br />efforts for improvement 
                                <br />and enrichment</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Story-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Product slider-->
                    <div class="tns tns-default">
                        <!--begin::Slider-->
                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="3" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev3" data-tns-next-button="#kt_team_slider_next3">
                            @foreach($publication as $item)
                            @if($item->image!='')
                            <!--begin::Item-->
                            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                <div class="overlay">
                                <img src="{{url('web/'.$item->image)}}" class="card-rounded shadow mw-100" alt="" />
                                <a href="{{url('web/'.$item->filename)}}"><div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                   
                                </div></a>
                            </div>
                            </div>
                            <!--end::Item-->
                            @endif
                            @endforeach
                        </div>
                        <!--end::Slider-->
                        <!--begin::Slider button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev3">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Slider button-->
                        <!--begin::Slider button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next3">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Slider button-->
                    </div>
                    <!--end::Product slider-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::How It Works Section-->
            </bogy>
            <!--begin::Statistics Section-->
            <div class="mt-sm-n10">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color z-index-n1">
                    <svg viewBox="15 0 1470 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="pb-15 pt-18 landing-dark-bg">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Heading-->
                        <div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-white fw-bolder mb-5">What Have We Achieved So Far</h3>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="fs-3 text-gray-700 fw-bold"><span class="text-white">From our humble beginnings in 2014, TGP has achieved continual growth and established itself as a well-known entity in MOH. Some of our achievements throughout the years include</span></div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Statistics-->
                        <div class="d-flex flex-center">
                            <!--begin::Items-->
                            <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-1000px">
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-center h-150px w-150px h-lg-225px w-lg-225px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{url('')}}/assets/media/svg/misc/octagon.svg')">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-3tx svg-icon-white mb-n5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
                                        <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
                                        <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
                                        <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="mb-0 text-center">
                                        <!--begin::Value-->
                                        <div class="fs-lg-4hx fs-2x fw-bolder text-white d-flex flex-center">
                                            <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="245">0</div>
                                        </div>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span class="text-gray-400 fw-bolder fs-1 lh-0">Talents</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-center h-150px w-150px h-lg-225px w-lg-225px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{url('')}}/assets/media/svg/misc/octagon.svg')">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                                    <span class="svg-icon svg-icon-3tx svg-icon-white mb-n5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="mb-0 text-center">
                                        <!--begin::Value-->
                                        <div class="fs-lg-4hx fs-2x fw-bolder text-white d-flex flex-center">
                                            <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="106">0</div>
                                        </div>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span class="text-gray-400 fw-bolder fs-1 lh-0">Alumni</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-center h-150px w-150px h-lg-225px w-lg-225px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{url('')}}/assets/media/svg/misc/octagon.svg')">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                    <span class="svg-icon svg-icon-3tx svg-icon-white mb-n5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="mb-0 text-center">
                                        <!--begin::Value-->
                                        <div class="fs-lg-4hx fs-2x fw-bolder text-white d-flex flex-center">
                                            <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="83">0</div>
                                        </div>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span class="text-gray-400 fw-bolder fs-2 lh-0">Courses<br/>conducted</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-center h-150px w-150px h-lg-225px w-lg-225px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{url('')}}/assets/media/svg/misc/octagon.svg')">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                    <span class="svg-icon svg-icon-3tx svg-icon-white mb-n5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="black"/>
                                        <path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="mb-0 text-center">
                                        <!--begin::Value-->
                                        <div class="fs-lg-4hx fs-2x fw-bolder text-white d-flex flex-center">
                                            <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="18">0</div>
                                        </div>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span class="text-gray-400 fw-bolder fs-2 lh-0">Podiums<br/>organised</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Testimonial-->
                        <div class="fs-1 fw-bold text-white text-center mb-3">
                        <span class="fs-1 lh-1">“</span>Management is doing things right;
                         leadership is doing the right things.
                        <span class="fs-1 lh-1">“</span></div>
                        <!--end::Testimonial-->
                        <!--begin::Author-->
                        <div class="fs-1 fw-bold text-muted text-center">
                            <a href="../../demo1/dist/account/security.html" class="link-primary fw-bolder">Peter Drucker</a>
                        </div>
                        <!--end::Author-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Curve bottom-->
                <div class="landing-curve landing-dark-color">
                    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                    </svg>
                </div>
                <!--end::Curve bottom-->
            </div>
            <!--end::Statistics Section-->
            <!--begin::Projects Section-->
            <div class="mb-lg-n15 position-relative z-index-2">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Card-->
                    <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                        <!--begin::Card body-->
                        <div class="card-body p-lg-20">
                            <!--begin::Heading-->
                            <div class="text-center mb-5 mb-lg-10">
                                <!--begin::Title-->
                                <h3 class="fs-2hx text-dark mb-5" id="portfolio" data-kt-scroll-offset="{default: 100, lg: 150}">TGP Inspirational Leadership Podium</h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tabs wrapper-->
                            <div class="d-flex flex-center mb-5 mb-lg-5">
                                <!--begin::Tabs-->
                                <ul class="nav border-transparent flex-center fs-3 fw-bold">
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing22023">2/2023</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing12023">1/2023</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing22022">2/2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing12022">1/2022</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Plenary 1 - Leadership : The Sunway Story</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_development">Knowledge Sharing Session</a>
                                    </li> -->
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Tabs wrapper-->
                            <!--begin::Tabs content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_landing22023">
                                    <div class="text-center mb-17">
                                        
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-bold">
                                        "Down of A New Era:Re-Inventing HealthCare"</br>
                                        30th August 2023</br>
                                        Tan Sri Datuk Seri Dr. S. Subramaniam
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <div class="mb-10">
                                                <iframe class="embed-responsive-item card-rounded h-250px w-100" src="https://www.youtube.com/embed/WiF6DJXECWs" allowfullscreen="allowfullscreen"></iframe>
                                            </div>

                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 ">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium22023-1.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium22023-1.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium22023-2.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium22023-2.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium22023-6.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium22023-6.jpg')"></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium22023-3.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium22023-3.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium22023-4.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium22023-4.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                             <!--begin::Item-->
                                             <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium22023-5.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium22023-5.jpg')"></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                             <!--begin::Item-->
                                             <a class="d-block card-rounded overlay mt-10" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium22023-7.jpg">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium22023-7.jpg')"></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                           
                                              
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_landing12022">
                                    <div class="text-center mb-17">
                                        
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-bold">
                                        "Leadership in Adversity and Crisis"</br>
                                        3rd March 2022</br>
                                        Ms Nadiah Wan</br>
                                        YBhg. Dato' Prof Dr. Adeeba binti Kamarulzaman
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-3.png">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-3.png')"></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-4.png">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-4.png')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-2.png">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-2.png')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-1.png">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 1 2022-1.png')"></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_landing22022">
                                    <div class="text-center mb-17">
                                        
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-bold">
                                        "Transformational Leadership: Redesigning Healthcare to Current Nuances"</br>
                                        16th June 2022</br>
                                        TPr. Ts. Norliza Hashim
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <div class="mb-10">
                                                <iframe class="embed-responsive-item card-rounded h-250px w-100" src="https://www.youtube.com/embed/kwBLrNyXu1A" allowfullscreen="allowfullscreen"></iframe>
                                            </div>

                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 ">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-4.jpeg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-4.jpeg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-5.jpeg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-5.jpeg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-2.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-2.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-3.jpeg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-3.jpeg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-1.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/TGP INSPIRATIONAL LEADERSHIP PODIUM 2 2022-1.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                              
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <div class="tab-pane fade" id="kt_landing12023">
                                    <div class="text-center mb-17">
                                        
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-bold">
                                        "Leadership Resilience - Conquering Uncertainty & Setbacks"</br>
                                        16th March 2023</br>
                                        Dato’ Sri Idris Jala
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <div class="mb-10">
                                                <iframe class="embed-responsive-item card-rounded h-250px w-100" src="https://www.youtube.com/embed/SmWwIX1g86A" allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-12">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium 1 2023 1.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium 1 2023 1.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-12">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium 1 2023 2.png">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium 1 2023 2.png')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                                           
                                                    
                                              
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium 1 2023 3.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium 1 2023 3.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium 1 2023 4.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium 1 2023 4.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->  
                                                           <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-12">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium 1 2023 5.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium 1 2023 5.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-12">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{url('')}}/web/Podium 1 2023 6.jpg">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{url('')}}/web/Podium 1 2023 6.jpg')"></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tabs content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Projects Section-->
            <!--begin::Pricing Section-->
			<div class="mt-sm-n20">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -2 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="py-20 landing-dark-bg">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Plans-->
						<div class="d-flex flex-column container pt-lg-20">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<h1 class="fs-2hx fw-bolder text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Frequently Asked Questions</h1>
								<!-- <div class="text-gray-600 fw-bold fs-5">Save thousands to millions of bucks by using single tool for different
								<br />amazing and outstanding cool and great useful admin</div> -->
							</div>
							<!--end::Heading-->
							<!--begin::Pricing-->
							<div class="" id="kt_pricing">
                                <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
									<!--begin:::Tabs-->
									<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-lg-n2 me-auto">
                                    @php $f = 0; @endphp
                                    @foreach($faq as $tab)
									@php $f++; @endphp
                                    <!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4 @if($f==1) active @endif" data-bs-toggle="tab" href="#kt_faq{{$tab->id}}">{{$tab->title}}</a>
										</li>
										<!--end:::Tab item-->
                                        @endforeach
										
									</ul>
									<!--end:::Tabs-->
									
								</div>
								<div class="tab-content mt-10">
                                @php $f = 0; @endphp
                                    @foreach($faq as $tab)
									@php $f++; @endphp
									<!--begin::Tab pane-->
									<div class="tab-pane fade @if($f==1) active show @endif" id="kt_faq{{$tab->id}}" role="tab-panel">
                                        <!--begin::Row-->
								<div class="row g-10">
									<!--begin::Col-->
									<div class="col-md-12 pe-md-10 mb-10 mb-md-0">
                                        <!--begin::Accordion-->
                                        @php $c = 0; @endphp
                                        @foreach($tab->content as $content)
                                        @php $c++; @endphp
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle @if($c>1) collapsed @endif mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_{{$content->id}}">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                    <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                    <span class="svg-icon toggle-off svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-300 fw-bolder cursor-pointer mb-0">{{$content->question}}</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_4_{{$content->id}}" class="collapse @if($c==1) show @endif fs-4 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-white fw-bold fs-4 ps-10">{!!$content->answer!!}</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        @endforeach
                                        <!--end::Accordion-->
                                    </div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
									</div>
									<!--end::Tab pane-->
                                    @endforeach
								</div>
								
							</div>
							<!--end::Pricing-->
						</div>
						<!--end::Plans-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Pricing Section-->
            <!--begin::Testimonials Section-->
            <div class="mt-20 mb-10 position-relative z-index-2">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mb-17">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">What Our Alumni Say</h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-3 text-muted fw-bold">Leadership is the capacity to translate vision into reality - Warren Bennis</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="row g-lg-10 mb-10 mb-lg-20">
                        <!--begin::Col-->
                        @foreach($alumni as $item)
                        <div class="col-lg-4">
                            <!--begin::Testimonial-->
                            <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                <!--begin::Wrapper-->
                                <div class="mb-7">
                                    <!--begin::Rating-->
                                    <div class="rating mb-6">
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                    </div>
                                    <!--end::Rating-->
                                    <!--begin::Title-->
                                    <div class="fs-3 fw-bolder text-dark mb-3">{{$item->quote}}</div>
                                    <!--end::Title-->
                                    <!--begin::Feedback-->
                                    <div class="text-gray-500 fw-bold fs-4"></div>
                                    <!--end::Feedback-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Author-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <img src="{{url('alumni/'.$item->photo)}}" class="" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-4">{{$item->name}}</a>
                                        <span class="text-muted d-block fw-bold fs-5">{{$item->position}}</span>
                                    </div>
                                    <!--end::Name-->
                                </div>
                                <!--end::Author-->
                            </div>
                            <!--end::Testimonial-->
                        </div>
                        <!--end::Col-->
                        @endforeach
                    </div>
                    <!--end::Row-->
                    
                </div>
                <!--end::Container-->
            </div>
            <!--end::Testimonials Section-->
            <!--begin::Footer Section-->
            <div class="mb-0">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color">
                    <svg viewBox="15 -1 1470 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="landing-dark-bg pt-5">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Row-->
                        <div class="row py-10 py-lg-20">
                            <!--begin::Col-->
                            <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                                <h4 class="fw-bolder text-gray-400 mb-6 fs-3">TGP Publications</h4>
                                    <!--begin::Title-->
                                        
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <!-- <span class="fw-normal fs-4 text-gray-700">
                                    <a href="http://mytgp.ihm.moh.gov.my/info/TGP_Guidelines.pdf" class="text-white opacity-50 text-hover-primary">GUidelines</a></span> -->
                                    <div class="my-3">
                                        @foreach($publication as $item)
                                        <div class="d-flex flex-row mb-7">
                                            @if($item->image!='')
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60px symbol-2by3 me-4">
                                                <div class="symbol-label d-flex flex-column flex-center bgi-no-repeat bgi-position-y-bottom" style="background-position-y: bottom;background-image: url('{{url('web/'.$item->image)}}')"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            @endif
                                            <!--begin::Title-->
                                            <div class="m-0">
                                                <a href="{{url('web/'.$item->filename)}}" target="_blank" class="text-white fw-bolder text-hover-primary fs-3">{{$item->title}}</a>
                                                <span class="text-gray-600 fw-bold d-block pt-1 fs-4">{{$item->description}}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <!--end::Text-->
                                
                            </div>
                            <!--end::Col-->
                            
                            <!--begin::Col-->
                            <div class="col-lg-6 ps-lg-16">
                                <!--begin::Navs-->
                                <div class="d-flex">
                                    <!--begin::Links-->
                                    <div class="d-flex fw-bold flex-column me-20">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bolder text-gray-400 mb-6 fs-3">Let's Get In Touch</h4>
                                        <!--end::Subtitle-->
                                        <div class="mt-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Section-->
                                                <div class="d-flex me-2">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-3">
                                                        <div class="symbol-label bg-transparent">
                                                            <span class="svg-icon svg-icon-2hx svg-icon-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
                                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div>
                                                        <a href="#" class="fs-5 text-white text-hover-primary fw-bolder">Institute for Health Management</a>
                                                        <div class="fs-5 text-muted fw-bold mt-1">Blok B1, Kompleks NIH</div>
                                                        <div class="fs-5 text-muted fw-bold mt-1">Jln Setia Murni U13/52</div>
                                                        <div class="fs-5 text-muted fw-bold mt-1">Seksyen U13, Setia Alam 40170</div>
                                                        <div class="fs-5 text-muted fw-bold mt-1">Shah Alam, Malaysia.</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-sm-center me-2">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-3">
                                                        <div class="symbol-label bg-transparent">
                                                            <span class="svg-icon svg-icon-2hx svg-icon-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="black"/>
<path opacity="0.3" d="M17 2H7C6.4 2 6 2.4 6 3V20H18V3C18 2.4 17.6 2 17 2Z" fill="black"/>
<path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="black"/>
</svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div>
                                                        <a href="#" class="fs-6 text-white text-hover-primary fw-bolder">+603 3362 7400</a>
                                                        <div class="fs-6 text-white text-hover-primary fw-bolder mt-1">+603 3362 8307</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-sm-center me-2">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-3">
                                                        <div class="symbol-label bg-transparent">
                                                            <span class="svg-icon svg-icon-2hx svg-icon-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black"/>
<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black"/>
</svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div>
                                                        <a href="mailto:tgp.ihm@moh.gov.my" class="fs-6 text-white text-hover-primary fw-bolder">tgp.ihm@moh.gov.my</a>
                                                        
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                    </div>
                                    <!--end::Links-->
                                    
                                </div>
                                <!--end::Navs-->
                                
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Footer Section-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop bg-danger" data-kt-scrolltop="true">
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
        </div>
        <div class="pulse"></div>
        <!--end::Root-->
        <!--end::Main-->
        <!--begin::Javascript-->
        <script>var hostUrl = "{{url('')}}/assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{url('')}}/assets/plugins/global/plugins.bundle.js"></script>
        <script src="{{url('')}}/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{url('')}}/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
        <!-- <script src="{{url('')}}/assets/plugins/custom/typedjs/typedjs.bundle.js"></script> -->
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{url('')}}/assets/js/custom/landing.js"></script>
        <!-- <script src="{{url('')}}/assets/js/custom/pages/pricing/general.js"></script> -->
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
        <!-- <script src="https://d3js.org/d3.v3.min.js"></script> -->
        <script>
            // var width = Math.max(960, innerWidth),
            // height = Math.max(4800, innerHeight);

            // var i = 0;

            // var svg = d3.select("bogy").append("svg")
            //     .attr("width", width)
            //     .attr("height", height)
            //     .attr("style","position:absolute;top:0;");

            // svg.append("rect")
            //     .attr("width", width)
            //     .attr("height", height)
            //     .on("ontouchstart" in document ? "touchmove" : "mousemove", particle);

            // function particle() {
            // var m = d3.mouse(this);

            // svg.insert("circle", "rect")
            //     .attr("cx", m[0])
            //     .attr("cy", m[1])
            //     .attr("r", 1e-6)
            //     .style("stroke", d3.hsl((i = (i + 1) % 360), 1, .5))
            //     .style("stroke-opacity", 1)
            //     .transition()
            //     .duration(2000)
            //     .ease(Math.sqrt)
            //     .attr("r", 100)
            //     .style("stroke-opacity", 1e-6)
            //     .remove();

            // d3.event.preventDefault();
            // }

            

            $("html").mousemove(function(e) {
            xpos = e.pageX;
            ypos = e.pageY;
            
            $("body").addClass("go");
            
            var position = {
                'left' : xpos,
                'top' : ypos
            }

            $(".pulse").css(position);
            });



        </script>
    </body>
    <!--end::Body-->
</html>