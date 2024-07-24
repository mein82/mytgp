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
    <head><base href="../../">
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
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="<?php echo e(url('')); ?>/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="<?php echo e(url('')); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(url('')); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="bg-body">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Signup Verify Email -->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
                    <!--begin::Logo-->
                    <a href="../../demo14/dist/index.html" class="mb-10 pt-lg-10">
                        <img alt="Logo" src="<?php echo e(url('')); ?>/logo/mytgp-logo.png" class="h-100px mb-5" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="pt-lg-10 mb-10">

                        <!--begin::Logo-->
                        <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Verify Your Email</h1>
                        <!--end::Logo-->
                        <!--begin::Message-->
                        <div class="fs-3 fw-bold text-muted mb-10">We have sent an email to
                        <a href="#" class="link-primary fw-bolder"><?php echo e(Auth::user()->email); ?></a>
                        <br />pelase follow a link to verify your email.</div>
                        <!--end::Message-->
                        <?php if(session('status') == 'verification-link-sent'): ?>
                        <div class="fs-3 fw-bold text-success mb-10">
                                A new verification link has been sent
                        </div>
                        <?php endif; ?>
                        <!--begin::Action-->
                        <!-- <div class="text-center mb-10">
                            <a href="../../demo14/dist/authentication/sign-in/basic.html" class="btn btn-lg btn-primary fw-bolder">Skip for now</a>
                        </div> -->
                        <!--end::Action-->
                        <!--begin::Action-->
                        <form method="POST" action="<?php echo e(route('verification.send')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="fs-5">
                            <span class="fw-bold text-gray-700">Did’t receive an email?</span>
                            <a href="javascript:;" onclick="javascript:$(this).closest('form').submit()" class="link-primary fw-bolder">Resend</a>
                            
                        </div></form>
                        <!--end::Action-->


                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-300px" style="background-image: url(<?php echo e(url('')); ?>/assets/media/illustrations/sigma-1/17.png"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Content-->
                
            </div>
            <!--end::Authentication - Signup Verify Email-->
        </div>
        <!--end::Root-->
        <!--end::Main-->
        <!--begin::Javascript-->
        <script>var hostUrl = "<?php echo e(url('')); ?>/assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="<?php echo e(url('')); ?>/assets/plugins/global/plugins.bundle.js"></script>
        <script src="<?php echo e(url('')); ?>/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html><?php /**PATH /var/www/html/mytgp/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>