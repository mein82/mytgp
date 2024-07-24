<!--begin::Row-->
<div class="row mt-10">
    <!--begin::Col-->
<?php $__currentLoopData = $logbooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logbook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-6 mb-10 mb-lg-0">
        <div class="border rounded py-5 px-5 mb-10">
        <div class="d-flex align-items-center">
        <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5">
                    <?php if($logbook->referee->avatar !='default.png'): ?>
                    <img alt="Pic" src="<?php echo e(url('')); ?>/photo/<?php echo e($logbook->referee->avatar); ?>" />
                    <?php else: ?>
                    <span class="symbol-label bg-light-primary text-primary fw-bold"><?php echo e(substr($logbook->referee->name, 0,1)); ?></span>
                    <?php endif; ?>

                </div>
                <!--end::Avatar-->
                <!--begin::Info-->
                <div class="d-flex flex-column">
                    <!--begin::Name-->
                    <div class="d-flex align-items-center mb-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bolder me-1"><?php echo e($logbook->referee->name); ?></a>
                    </div>
                    <!--end::Name-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap fw-bold fs-6 mb-2 pe-2">
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($logbook->referee->email); ?></a>
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
                                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($logbook->referee->designation); ?></a>
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($logbook->referee->organization); ?></a>
                        
                    </div>
                    <!--end::Info-->
                    
                </div>
                <!--end::Info-->
            </div>
            <!--end::User-->
        </div>
    </div>
        <?php $i=0; ?>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="separator separator-content  mb-10 border-primary"><span class="w-300px fw-bolder"><?php echo e($cat->name); ?> (<?php echo e($cat->code); ?>)</span></div>
        <div class="rounded border pt-10 px-10">
        <?php $__currentLoopData = $cat->logbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $i++; ?>
        <div class="mb-10 fv-row">
            <!--begin::Row-->
            <div class="row mb-2" data-kt-buttons="true">
            <div class="col-12">
            <span class="text-gray-600 fw-bold"><?php echo e($log->item); ?></span>    
            
            <!--begin::Label-->
            <label class="d-flex align-items-center form-label mt-3"><span class="bullet bullet-vertical me-5"></span><?php echo e($log->remark); ?>

            </label>
            <!--end::Label-->
            </div>
            <div class="col-12">
                <div class="row fv-row">
                <!--begin::Col-->
                <?php for($i=1;$i<=5;$i++): ?> 
                <?php $q = 'q'.$log->id; ?> 
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-outline-info btn-active-light-info w-100 mt-3 p-2 <?php if($logbook->$q == $i): ?> active <?php endif; ?> disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Below Expectation">
                        <input type="radio" class="btn-check" name="q<?php echo e($log->id); ?>" value="<?php echo e($i); ?>" />
                        <span class="fw-bolder fs-5"><?php echo e($i); ?></span>
                    </label>
                    <!--end::Option-->
                </div>
                <?php endfor; ?>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="mb-5">&nbsp;</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<!--end::Row--><?php /**PATH /var/www/html/mytgp/resources/views/secretariat/modal-applicant-refcm.blade.php ENDPATH**/ ?>