<x-app-layout activemenu="tor">
<x-slot name="header">
	TOR
</x-slot>
<x-slot name="subheader">
    Listing
</x-slot>

<div class="card">
<!--begin::Body-->
<div class="card-body">
    {!! Form::open(array('route' => ['update.tor'], 'method'=>'PATCH', 'id' => 'kt_add_tor_form')) !!}
	<div class="row mb-10">
        <div class="col-lg-4">
            <div class="required fs-6 fw-bold mb-2">Responsibilities of Talent</div>
            <textarea name="group_id[7]" id="kt_docs_ckeditor_classic">
                {!!nl2br($data->where('group_id',7)->first()->content??'')!!}
            </textarea>
        </div>
        <div class="col-lg-4">
            <div class="required fs-6 fw-bold mb-2">Responsibilities of Supervisor</div>
            <textarea name="group_id[6]" id="kt_docs_ckeditor_classic2">
                {!!nl2br($data->where('group_id',6)->first()->content??'')!!}
            </textarea>
        </div>
        <div class="col-lg-4">
            <div class="required fs-6 fw-bold mb-2">Responsibilities of Selection Panel</div>
            <textarea name="group_id[5]" id="kt_docs_ckeditor_classic3">
                {!!nl2br($data->where('group_id',5)->first()->content??'')!!}
            </textarea>
            <div class="required fs-6 fw-bold mb-2 mt-4">Responsibilities of Assessment Panel</div>
            <textarea name="group_id[8]" id="kt_docs_ckeditor_classic4">
                {!!nl2br($data->where('group_id',8)->first()->content??'')!!}
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
{!!Form::close()!!}

</div>
<!--begin::Body-->
</div>
<x-slot name="scripts">
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
</x-slot>
</x-app-layout>