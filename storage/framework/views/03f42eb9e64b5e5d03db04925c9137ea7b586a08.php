<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'tor']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	TOR
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Listing
 <?php $__env->endSlot(); ?>

<div class="card">
<!--begin::Body-->
<div class="card-body">
    <?php echo Form::open(array('route' => ['update.tor'], 'method'=>'PATCH', 'id' => 'kt_add_tor_form')); ?>

	<div class="row mb-10">
        <div class="col-lg-4">
            <div class="required fs-6 fw-bold mb-2">Responsibilities of Talent</div>
            <textarea name="group_id[7]" id="kt_docs_ckeditor_classic">
                <?php echo nl2br($data->where('group_id',7)->first()->content??''); ?>

            </textarea>
        </div>
        <div class="col-lg-4">
            <div class="required fs-6 fw-bold mb-2">Responsibilities of Supervisor</div>
            <textarea name="group_id[6]" id="kt_docs_ckeditor_classic2">
                <?php echo nl2br($data->where('group_id',6)->first()->content??''); ?>

            </textarea>
        </div>
        <div class="col-lg-4">
            <div class="required fs-6 fw-bold mb-2">Responsibilities of Selection Panel</div>
            <textarea name="group_id[5]" id="kt_docs_ckeditor_classic3">
                <?php echo nl2br($data->where('group_id',5)->first()->content??''); ?>

            </textarea>
            <div class="required fs-6 fw-bold mb-2 mt-4">Responsibilities of Assessment Panel</div>
            <textarea name="group_id[8]" id="kt_docs_ckeditor_classic4">
                <?php echo nl2br($data->where('group_id',8)->first()->content??''); ?>

            </textarea>
        </div>
    </div>
    <div class="d-flex justify-content-end">
    <!--begin::Button-->
    <button type="submit" id="kt_add_tor_submit" class="btn btn-primary">
        <span class="indicator-label">Submit</span>
        <span class="indicator-progress">Please wait...
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    </button>
    <!--end::Button-->
</div>
<?php echo Form::close(); ?>


</div>
<!--begin::Body-->
</div>
 <?php $__env->slot('scripts', null, []); ?> 
<script>
"use strict";
var KTUsersList = function() {
    return {
        init: function() {
            ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic'), {
                licenseKey: '',
                } )
                .then( editor => {
                    window.editor = editor;
            
                }),
            ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic2'), {
                licenseKey: '',
                } )
                .then( editor => {
                    window.editor = editor;
            
                }),
            ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic3'), {
                licenseKey: '',
                } )
                .then( editor => {
                    window.editor = editor;
            
                }),
            ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic4'), {
                licenseKey: '',
                } )
                .then( editor => {
                    window.editor = editor;
            
                })
    }       
    }       
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()
}));
</script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/secretariat/tor.blade.php ENDPATH**/ ?>