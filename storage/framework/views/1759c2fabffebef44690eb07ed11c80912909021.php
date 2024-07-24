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
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
        <link rel="shortcut icon" href="<?php echo e(url('')); ?>/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href="<?php echo e(url('')); ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        
        <?php echo e($css??''); ?>

        <!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="<?php echo e(url('')); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('')); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('')); ?>/css/ticker-style.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <!--begin::Container-->
                        <div class="container-xxl d-flex flex-grow-1 flex-stack">
                            <!--begin::Header Logo-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Heaeder menu toggle-->
                                <div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Heaeder menu toggle-->
                                <!--begin::Logo-->
                                <a href="<?php echo e(url('dashboard')); ?>">
                                    <img alt="Logo" src="<?php echo e(url('logo/mytgp-logo.png')); ?>" class="h-35px h-lg-40px" />
                                </a>
                                <!--end::Logo-->
                                <div class="page-title d-flex flex-column me-3">
                                <!--begin::Title-->
                                <div class="ms-5 ms-md-10 me-3"><h1 class="d-flex text-white fw-bolder my-1 fs-3 ">Talent Grooming Programme
                                </h1></div>
                                <!--end::Title-->
                            </div>
                            </div>
                            <!--end::Header Logo-->
                            <!--begin::Toolbar wrapper-->
                            <div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
                                <!--begin::Notifications-->
                                <div class="d-flex align-items-center ms-2 ms-lg-3">
                                    <!--begin::Menu- wrapper-->
                                    <div class=" pulse pulse-primary btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px btn-color-warning position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2x">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black"/>
<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black"/>
</svg>
                                        </span>
                                        <?php if($alerts->count()>0): ?>
                                        <span class="bullet bullet-dot bg-warning h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                        <span class="pulse-ring border-5"></span>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light-warning">
                                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black"/>
                                            <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black"/>
                                            </svg>
                                            </span>
                                        </span>
                                        </div> -->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('<?php echo e(url('')); ?>/assets/media/misc/pattern-1.jpg')">
                                            <!--begin::Title-->
                                            <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                            <!-- <span class="fs-8 opacity-75 ps-3"><?php echo e($alerts->count()); ?> reports</span> --></h3>
                                            <!--end::Title-->
                                            <!--begin::Tabs-->
                                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                                </li> -->
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                                <!--begin::Items-->
                                                <?php if($alerts->count()>0): ?>
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                                                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                                                                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="<?php echo e(url($item->url)); ?>" class="fs-6 text-gray-800 text-hover-primary fw-bolder"><?php echo e($item->title); ?></a>
                                                                <div class="text-gray-400 fs-7"><?php echo e($item->description); ?></div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8"><?php echo e(time_elapsed_string($item->created_at)); ?></span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <!--end::Items-->
                                                <?php else: ?>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column px-9">
                                                    <!--begin::Section-->
                                                    <div class="pt-10 pb-0">
                                                        <!--begin::Title-->
                                                        <h3 class="text-dark text-center fw-bolder">No notification</h3>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="text-center text-gray-600 fw-bold pt-1">There's no message available for you today</div>
                                                        <!--end::Text-->
                                                        
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Illustration-->
                                                    <div class="text-center px-4">
                                                        <img class="mw-100 mh-200px" alt="image" src="<?php echo e(url('')); ?>/assets/media/illustrations/sketchy-1/5.png" />
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <?php endif; ?>
                                                
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
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
                                                        <img class="mw-100 mh-200px" alt="image" src="<?php echo e(url('')); ?>/assets/media/illustrations/sketchy-1/1.png" />
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
                                
                                <!--begin::User-->
                                <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <img src="<?php echo e(url('photo/'.Auth::user()->avatar)); ?>" alt="user" />
                                    </div>
                                    <!--begin::User account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="<?php echo e(url('photo/'.Auth::user()->avatar)); ?>" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5"><?php echo e(Auth::user()->name); ?></div>
                                                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?php echo e(Auth::user()->email); ?></a>
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
                                            <a href="<?php echo e(url('account-setting')); ?>" class="menu-link px-5">Account Setting</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="javascript;;" onclick="event.preventDefault();logout()" class="menu-link px-5">Sign Out</a>
                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::User account menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::User -->
                                <!--begin::Heaeder menu toggle-->
                                <!--end::Heaeder menu toggle-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Container-->
                        <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!--end::Header-->
                    <!--begin::Toolbar-->
                    <div class="toolbar py-5 py-lg-7" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column me-3">
                                <!--begin::Title-->
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.pagetitle','data' => ['dashboard' => $dashboard??'','header' => $header??'','subheader' => $subheader??'']]); ?>
<?php $component->withName('pagetitle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dashboard' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($dashboard??''),'header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($header??''),'subheader' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($subheader??'')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <!--  end::Title-->
                            </div>
                            <!--end::Page title-->
                            <div class="d-flex align-items-center py-1">
                                <?php echo e($headertool??''); ?>

                                <?php if(Auth::user()->group_id==7): ?>
                                <span class="text-gray-800 fs-6">Supervisor:</span><span class="text-dark fs-6 mx-2 fw-bolder"><?php echo e(Auth::user()->talent->supervisor->super->name??'NOT AVAILABLE'); ?></span> 
                                <?php endif; ?>
                                <?php if(Auth::user()->group_id>4 || Auth::user()->supervisor->count()>0): ?>
                                <a href="#" class="btn btn-sm btn-warning me-3 d-none" data-bs-toggle="modal" data-bs-target="#kt_modal_term">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                    <span class="svg-icon svg-icon-3 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black"></path>
                                            <rect x="7" y="17" width="6" height="2" rx="1" fill="black"></rect>
                                            <rect x="7" y="12" width="10" height="2" rx="1" fill="black"></rect>
                                            <rect x="7" y="7" width="6" height="2" rx="1" fill="black"></rect>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    Term of Reference
                                </a>
                                <?php endif; ?>

                                <?php if(Auth::user()->group_id==4 || Auth::user()->group_id==6): ?>
                                <!--begin::Menu wrapper-->
                                <div class="m-0 d-none">
                                    <!--begin1::Toggle-->
                                    <form id="applicant-form" action="<?php echo e(route('register.applicant')); ?>" method="POST">
                                    <a href="#" class="btn btn-secondary btn-sm me-3" id="register_applicant">
                                        Register as an Applicant?
                                    </a>
                                    <?php echo csrf_field(); ?>
                                    </form>

                                    <!--end::Toggle-->
                                </div>
                                <!--end::Menu wrapper-->
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Container-->
                    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                        <!--begin::Post-->
                        <div class="content flex-row-fluid" id="kt_content">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alerts','data' => ['class' => 'mb-4','status' => session('status'),'error' => session('error')]]); ?>
<?php $component->withName('alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status')),'error' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('error'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php echo e($slot); ?>

                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        
        <!--end::Main-->

        <!--begin::Engage toolbar-->
        <div class="engage-toolbar d-flex position-fixed px-5 fw-bolder zindex-2 top-50 end-0 transform-90 mt-20 gap-2">
            <!--begin::Purchase link-->
            <?php if(\Session::has('impersonate')): ?><a href="<?php echo e(url('reverse/impersonate/user')); ?>" class="engage-purchase-link btn btn-flex h-45px bg-body btn-color-gray-700 btn-active-color-gray-900 px-5 shadow-sm rounded-top-0">Reverse Impersonate <br/><?php echo e(Auth::user()->name); ?></a><?php endif; ?>
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
        

        <!--begin::Modal - Upgrade plan-->
        <div class="modal fade" id="kt_modal_supervisor" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-850px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                   <div class="modal-header border-bottom-0">
                        <!--begin::Modal title-->
                        <h3>Supervisor</h3>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body pt-0 pb-15 px-5 px-xl-10">
                        <!--begin::Plans-->
                        <div class="d-flex flex-column modal-load">
                            
                        </div>
                        <!--end::Plans-->
                        
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Upgrade plan-->

        <!--begin::Modal - Upgrade plan-->
        <div class="modal fade" id="kt_modal_courses" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-850px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                   <div class="modal-header">
                        <!--begin::Modal title-->
                        <h3>Courses</h3>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body pt-0 pb-15 px-5 px-xl-10">
                        <!--begin::Plans-->
                        <div class="d-flex flex-column modal-load">
                            
                        </div>
                        <!--end::Plans-->
                        
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Upgrade plan-->
        <!--begin::Modal - Upgrade plan-->
        <div class="modal fade" id="kt_modal_project" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-950px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                   <div class="modal-header">
                        <!--begin::Modal title-->
                        <h3>Project Progress</h3>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body  pb-15 px-5 px-xl-10">
                        <!--begin::Plans-->
                        <div class="d-flex flex-column modal-load">
                            
                        </div>
                        <!--end::Plans-->
                        
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Upgrade plan-->
        <!--begin::Modal - Applicant selections-->
        <div class="modal fade" id="kt_modal_app_selection" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-700px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Status</h2>
                        <!--end::Modal title-->
                         
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-lg-10 px-lg-10">
                        <div class="d-flex flex-column modal-load">
                            
                        </div>
                        </div>
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Applicant selections-->
        <!--begin::Modal - Upgrade plan-->
        <div class="modal fade" id="kt_modal_assessment" tabindex="-1" aria-hidden="true" data-backdrop="static">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-950px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h3>Assessment</h3>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body pb-15 px-5 px-xl-10">
                        <!--begin::Plans-->
                        <div class="d-flex flex-column modal-load">
                            
                        </div>
                        <!--end::Plans-->
                        
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Upgrade plan-->
        <!--begin::Modal - Upgrade plan-->
        <div class="modal fade" id="kt_modal_term" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-700px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                   <div class="modal-header border-0">
                        <!--begin::Modal title-->
                        <h3>Term of Reference</h3>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body p-15 pt-0 px-5 px-xl-10">
                        <div class=" h-350px hover-scroll-y" >
                       <?php if(Auth::user()->group_id==5): ?>
                <!--begin::Section-->
                <div class="m-0 mt-5">
                    <!--begin::Heading-->
                    <div class="d-flex align-items-center collapsible py-1 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                        <!--begin::Icon-->
                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                            <span class="svg-icon toggle-off svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0 fs-5">Selection Panel</h4>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div id="kt_job_4_1" class="collapse mx-10">
                        <!--begin::Text-->
                        <div class="mb-4 text-gray-600 fs-5">
                        <ol class="ms-6">
                            <li>Review documents for the selection of candidates who have fulfilled the entry criteria: The documents that will need to be reviewed are 
                                <ol type="a" class="ms-6">
                                    <li>TGP applicant profile </li>
                                    <li>Referee recommendation report </li>
                                    <li>Curriculum Vitae (CV) </li>
                                    <li>Laporan Nilaian Prestasi Tahunan (LNPT) for 3 consecutive years</li> 
                                    <li>Continuing Professional Development (CPD) logbook report </li>
                                    <li>Personality Test report </li>
                                    <li>TGP Competency Assessment report</li> 
                                </ol>
                            </li>
                            <li>Prepare Panel Selection Form report based on item 1. </li>
                            <li>Attend scheduled TGP Talent Selection meeting.</li>
                            <li>Conduct discussion with other Selection Panel members from the same programme prior to the selection of Talents. </li>
                            <li>Suggest suitable candidates to their respective Head of Programme for approval, if needed.</li>
                            <li>Provide technical input to identify professional development needs in order to achieve programme objectives. </li>
                            <li>Put forth suggestions on improving the TGP Professional Development module, where necessary. </li>
                            <li>Provide input to TGP Secretariat in identifying candidates from Talents to attend courses organized by other agencies/ international, if necessary. </li>
                            <li>Provide technical input regarding the direction and content of the TGP programme to be discussed in the TGP Steering Committee, if required. </li>
                            <li>Inform of any changes of Selection Panel members from each programme to the TGP Secretariat, if necessary.
                            </li>
                        </ol>
                        <p>*All informations and documents attached here are private and confidential. Please delete any relevant documents after evaluation is completed. Kindly do not share and distribute any informations.</p>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Separator-->
                    <!-- <div class="separator separator-dashed"></div> -->
                    <!--end::Separator-->
                </div>
                <!--end::Section-->
                <?php endif; ?>
                <?php if(Auth::user()->group_id==6 || Auth::user()->supervisor->count()>0): ?>
                <!--begin::Section-->
                <div class="m-0">
                    <!--begin::Heading-->
                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2">
                        <!--begin::Icon-->
                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                            <span class="svg-icon toggle-off svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0 fs-5">Supervisor</h4>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div id="kt_job_4_2" class="collapse mx-10">
                        <!--begin::Text-->
                        <div class="mb-4 text-gray-600 fs-5">
                            The supervisors are expected to;
                            <ol class="ms-6">
                                <li>Be experienced in his technical field</li>
                                <li>Be willing to supervise and mentor</li>
                                <li>Have good attitude</li>
                                <li>Commit to TGP and its activities</li>
                                <li>Be free from disciplinary issues</li>
                                <li>Facilitate the development of the Talent and TGP Project</li>
                            </ol>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Separator-->
                    <!-- <div class="separator separator-dashed"></div> -->
                    <!--end::Separator-->
                </div>
                <!--end::Section-->
                <?php endif; ?>
                <?php if(Auth::user()->group_id==7): ?>
                <!--begin::Section-->
                <div class="m-0">
                    <!--begin::Heading-->
                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_3">
                        <!--begin::Icon-->
                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                            <span class="svg-icon toggle-off svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0 fs-5">Talent</h4>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div id="kt_job_4_3" class="collapse mx-10">
                        <!--begin::Text-->
                        <div class="mb-4 text-gray-600 fs-5">
                            Each Talent is responsible to give full commitment within the programme once selected. Commitment and Agreement will be signed by each talent covering the following areas; The Talents    
                            <ol class="ms-6">
                                <li>Has the responsibility of communicating with supervisor and secretariat</li>
                                <li>Are compulsory to attend 80% of TGP Professional Development schedule</li>
                                <li>Need to adhere to postings recommended by the TGP Steering Committee or by the Head of Programme, be it a transfer or attachment for the purpose of gaining appropriate experience</li>
                                <li>Will undergo self- assessment using competency matrix assessment form upon completion of programme</li>
                                <li>Is required to complete TGP Project assigned to them</li>
                                <li>Is required to submit TGP Project Progress Update, updated CPD logbook, LNPT and CV annually</li>
                                <li>Need to complete the programme in stipulated time (maximum 3 years)</li>
                            </ol>
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Section-->
                <?php endif; ?>
                        
                    </div>
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Upgrade plan-->
        <!--begin::Javascript-->
        <script>var hostUrl = "<?php echo e(url('')); ?>/assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="<?php echo e(url('')); ?>/assets/plugins/global/plugins.bundle.js"></script>
        <script src="<?php echo e(url('')); ?>/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="<?php echo e(url('')); ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="<?php echo e(url('')); ?>/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
        <!-- <script src="<?php echo e(url('')); ?>/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script> -->
        <script src="<?php echo e(url('')); ?>/assets/plugins/custom/ckeditor5/build/ckeditor.js"></script>
        <!--end::Page Vendors Javascript-->
        
        <script type="text/javascript" src="<?php echo e(url('')); ?>/js/acmeticker.js"></script>
        <script src="<?php echo e(url('')); ?>/js/textcounter.min.js"></script>
        <script src="<?php echo e(url('')); ?>/js/custom.js"></script>

        <script>
        $("#kt_modal_courses").on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            var modal = $(this);

            $.get( "<?php echo e(url('talent/courses')); ?>/"+id+'/modal', function( data ){
                modal.find('.modal-load').html(data);
                modal.find('[data-bs-toggle="popover"]').popover();
            });
        });

        $("#kt_modal_project").on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            var modal = $(this);

            $.get( "<?php echo e(url('talent/project')); ?>/"+id+'/modal', function( data ){
                modal.find('.modal-load').html(data);
            });
        });
        
        $('#register_applicant').on("click", function() {
            form = $(this).closest('form');
            Swal.fire({
                    text: "Are you sure you want to be registered as an Applicant?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes! I am",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-success",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then((function(n) {
                    n.value ? form.submit():false
                }));
        });

        function logout(){
            Swal.fire({
                html: "Thank you for visiting MyTGP.<br/>Hope you have a great day ahead.",
                icon: "success",
                buttonsStyling: !1,
                confirmButtonText: "Proceed to logout",
                customClass: {
                    confirmButton: "btn fw-bold btn-primary"
                }
            }).then((function() {
                document.getElementById('logout-form').submit();
            }))
        }

        </script>
        <?php echo e($scripts??''); ?>

        <?php echo e($scripts2??''); ?>

        <?php echo e($scripts3??''); ?>

        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/layouts/app.blade.php ENDPATH**/ ?>