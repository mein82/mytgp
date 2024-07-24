<!--begin::Row-->
<div class="row mt-10">
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--begin::Col-->
    <div class="col-lg-6 mb-10 mb-lg-0">
        <div class="border rounded py-5 px-5">
        <div class=" h-125px scroll-y">
        <div class="d-flex align-items-center">
        <!--begin::User-->
            <div class="d-flex align-items-center flex-grow-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-45px me-5">
                    <?php if($item->referee->avatar !='default.png'): ?>
                    <img alt="Pic" src="<?php echo e(url('')); ?>/photo/<?php echo e($item->referee->avatar); ?>" />
                    <?php else: ?>
                    <span class="symbol-label bg-light-primary text-primary fw-bold"><?php echo e(substr($item->referee->name, 0,1)); ?></span>
                    <?php endif; ?>

                </div>
                <!--end::Avatar-->
                <!--begin::Info-->
                <div class="d-flex flex-column">
                    <!--begin::Name-->
                    <div class="d-flex align-items-center mb-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bolder me-2"><?php echo e($item->referee->name); ?></a>
                        <span class="badge badge-light-<?php echo e(($item->status_id==1)?'success':(($item->status_id==2)?'danger':'warning')); ?> fw-bold"><?php echo e(($item->status_id==1)?'Recommeded':(($item->status_id==2)?'Not Recommeded':'Pending')); ?></span>
                    </div>
                    <!--end::Name-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap fw-bold fs-7 mb-2 pe-2">
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($item->referee->email); ?></a>
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
                                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($item->referee->designation); ?></a>
                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon--><?php echo e($item->referee->organization); ?></a>
                        
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::User-->
        </div>
        </div>
        <?php if(!is_null($item->status_id)): ?>
        <div class="separator my-5"></div>
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            <span class="required">Academic excellence</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->academic>=3 && $item->academic<6)?'success':(($item->academic==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->academic)); ?></span>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            <span class="required">Ability to excel in completing tasks</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->completing_task>=3 && $item->completing_task<6)?'success':(($item->completing_task==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->completing_task)); ?></span>
                       
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            <span class="required">Ability to express thoughts</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-bold text-muted">a) Verbal</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->express_verbally>=3 && $item->express_verbally<6)?'success':(($item->express_verbally==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->express_verbally)); ?></span>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-bold text-muted">b) Written</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->express_written>=3 && $item->express_written<6)?'success':(($item->express_written==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->express_written)); ?></span>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            <span class="required">Ability to communicate with patients and peers</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->communicate>=3 && $item->communicate<6)?'success':(($item->communicate==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->communicate)); ?></span>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            <span class="required">Commitment to complete TGP programme</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->commitment>=3 && $item->commitment<6)?'success':(($item->commitment==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->commitment)); ?></span>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            <span class="required">Emotional stability and maturity</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->emotional>=3 && $item->emotional<6)?'success':(($item->emotional==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->emotional)); ?></span>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="mb-3">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold text-gray-800">
                            <span class="required">General personal well being</span>
                            <!-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method"></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Description-->
                        <!-- <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div> -->
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="fv-row">
                        <span class="badge badge-light-<?php echo e(($item->personal>=3 && $item->personal<6)?'success':(($item->personal==2)?'warning':'danger')); ?> fw-bold"><?php echo e(getrecommend($item->personal)); ?></span>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-5 fv-row">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bold mb-2">Other comments</label>
                    <!--end::Label-->
                    <?php echo e($item->comment??'-'); ?>

                </div>
                <!--end::Input group-->


        <?php endif; ?>
    </div>
    </div>
    <!--end::Col-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<!--end::Row--><?php /**PATH /var/www/html/mytgp/resources/views/secretariat/modal-applicant-recommendation.blade.php ENDPATH**/ ?>