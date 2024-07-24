 
<div class="w-100">

<!--begin::Search-->
    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="3" data-kt-search-enter="false" data-kt-search-layout="inline">
        <!--begin::Form-->
        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
            <!--begin::Hidden input(Added to disable form autocomplete)-->
            <input type="hidden" />
            <!--end::Hidden input-->
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
            <!--end::Input-->
            <!--begin::Spinner-->
            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
            </span>
            <!--end::Spinner-->
            <!--begin::Reset-->
            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <!--end::Reset-->
        </form>
        <!--end::Form-->
        <!--begin::Wrapper-->
        <div class="py-5">
            <!--begin::Results(add d-none to below element to hide the users list by default)-->
            <div data-kt-search-element="results" class="d-none">
            <form id="kt_form_super" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="u_id" value="<?php echo e($id); ?>">
                <!--begin::Users-->
                <div class="mh-375px scroll-y me-n7 pe-7 select-user-list">
                    
                </div>
                <!--end::Users-->
                <!--begin::Actions-->
                <div class="d-flex flex-center mt-15">
                    <button type="reset" id="kt_modal_users_search_reset" class="btn btn-active-light me-3">Cancel</button>
                    <button type="button" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users As Supervisor</button>
                </div>
            </form>
                <!--end::Actions-->
            </div>
            <!--end::Results-->
            <!--begin::Empty-->
            <div data-kt-search-element="empty" class="text-center d-none">
                <!--begin::Message-->
                <div class="fw-bold py-10">
                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                    <!-- <div class="text-muted fs-6">Try to search by username, full name or email...</div> -->
                </div>
                <!--end::Message-->
                
            </div>
            <!--end::Empty-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Search-->


    <!--begin::Input group-->
    <table class="table table-rounded table-striped border gy-3 gs-5 align-middle table-row-dashed table-row-gray-300 fs-6 mb-0" id="kt_roles_view_table">
        <!--begin::Table head-->
        <thead>
            <!--begin::Table row-->
            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0 border-bottom border-gray-200">
                <th class="">Name</th>
                <th class="">Designation</th>
                <th class="">Remark</th>
                <th class="">Active</th>
                <th class="min-w-50px text-end">Action</th>
            </tr>
            <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="fw-bold">
            <?php $__currentLoopData = $supervisor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <!--begin::ID-->
                <!--begin::User=-->
                <td>
                    <!--begin::User details-->
                    <div class="d-flex flex-column">
                        <span class="text-hover-primary mb-1"><?php echo e($item->super->name); ?></span>
                        <span class="text-gray-600"><?php echo e($item->super->email); ?></span>
                    </div>
                    <!--begin::User details-->
                </td>
                <!--end::user=-->
                <td>
                    <div class="d-flex flex-column">
                    <span class="mb-1"><?php echo e($item->super->designation); ?></span>
                    <span class="text-gray-600"><?php echo e($item->super->organization); ?></span>
                </div>
                </td>
                <!--begin::Action=-->
                <td>
                    <!--begin::Input group-->
                    <div class="input-group">
                        <input type="text" name="remark" id="<?php echo e($item->id); ?>" value="<?php echo e($item->remark); ?>" class="form-control form-control-sm remark" placeholder="" aria-describedby="basic-addon2"/>
                        <button class="btn btn-secondary btn-icon save"  type="button">
                            <span class="indicator-label">
                            <i class="bi bi-save2 fs-2"></i>
                            </span>
                            
                        <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        </button>
                    </div>
                    <!--end::Input group-->
                </td>
                <!--end::Action=-->
                <td class="text-center">
                    <input class="form-check-input active_super" type="radio" name="active_super" <?php if($item->status_id==1): ?> checked <?php endif; ?> value="<?php echo e($item->super_id); ?>" id="flexRadioSm<?php echo e($item->super_id); ?>"  />
                </td>
                <td class="text-end">


                <button type="button" class="btn btn-light-danger btn-icon remove_super" id="kt_button_1" data-id="<?php echo e($item->id); ?>">
                    <span class="indicator-label">
                        <span class="svg-icon svg-icon-1 svg-icon-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                            </svg></span>
                    </span>
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<script>

"use strict";
var KTModalUserSearch = function() {
    var e, t, n, s, a, c, d, z, r = function(e) {
        
            setTimeout((function() {
                console.log(e.getInputElement().value)
                $.ajax({
                  method: "POST",
                  url: "<?php echo e(route('supervisor.search')); ?>",
                  data: { keyword : e.getInputElement().value }
                }).done(function( view ) {
                        "" === view ? (n.classList.add("d-none"), s.classList.remove("d-none")) : ($('.select-user-list').html(view), n.classList.remove("d-none"), s.classList.add("d-none"))
                }),
                e.complete()
            }), 1500)
        },
        o = function(e) {
            n.classList.add("d-none"), s.classList.add("d-none")
        };
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_users_search_handler")) && (e.querySelector('[data-kt-search-element="wrapper"]'), n = e.querySelector('[data-kt-search-element="results"]'), s = e.querySelector('[data-kt-search-element="empty"]'), (a = new KTSearch(e)).on("kt.search.process", r), a.on("kt.search.clear", o)),
            (c = document.querySelectorAll(".remove_super"), c.forEach((e => {
                e.addEventListener("click", (function() {
                    e.setAttribute("data-kt-indicator", "on");
                    var id = e.getAttribute('data-id');
                    $.get( "<?php echo e(url('talent/remove/supervisor')); ?>/"+id).done(function( data ) {
                            $.get( "<?php echo e(url('talent/supervisor')); ?>/<?php echo e($id); ?>/modal", function( data ){
                                $("#kt_modal_supervisor").find('.modal-load').html(data);
                            });
                    })
                }))
            }))),
            (z = document.querySelectorAll(".active_super"), z.forEach((e => {
                e.addEventListener("click", (function() {
                    var super_id = e.value;
                    $.get( "<?php echo e(url('talent/activate')); ?>/<?php echo e($id); ?>/supervisor/"+super_id)
                }))
            }))),
            (d = document.querySelectorAll(".save"), d.forEach((e => {
                e.addEventListener("click", (function() {
                    e.setAttribute("data-kt-indicator", "on");
                    var parent = e.parentElement.closest('td > .input-group');
                    console.log(parent.children[0].id)
                    var id = parent.children[0].id;
                    var val = parent.children[0].value;
                     $.ajax({
                      method: "POST",
                      url: "<?php echo e(url('talent/remark/supervisor')); ?>",
                      data: { id: id, val: val }
                    }).done(function(){
                      e.removeAttribute("data-kt-indicator")
                    });
                 }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalUserSearch.init();

    $("#kt_modal_users_search_submit").on('click', function (e) {
    $.post( "<?php echo e(route('assign.supervisor')); ?>", $("#kt_form_super").serialize()).done(function( data ) {
        $.get( "<?php echo e(url('talent/supervisor')); ?>/<?php echo e($id); ?>/modal", function( data ){
            $("#kt_modal_supervisor").find('.modal-load').html(data);
        });
    });
    });

}));



</script><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/secretariat/modal-talent-supervisor.blade.php ENDPATH**/ ?>