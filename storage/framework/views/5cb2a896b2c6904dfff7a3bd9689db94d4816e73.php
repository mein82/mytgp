<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'sec-document']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
	Document
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
    Listing
 <?php $__env->endSlot(); ?>

<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
	<!--begin::Post-->
	<div class="content flex-row-fluid" id="kt_content">
		<!--begin::Card-->
		<div class="card card-flush">
			<!--begin::Card header-->
			<div class="card-header pt-8">
				<div class="card-title">
					<!--begin::Search-->
					<div class="d-flex align-items-center position-relative my-1">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-6">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files &amp; Folders" />
					</div>
					<!--end::Search-->
				</div>
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Toolbar-->
					<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
						<!--begin::Add customer-->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
						<!--begin::Svg Icon | path: icons/duotune/files/fil018.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black" />
								<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM16 11.6L12.7 8.29999C12.3 7.89999 11.7 7.89999 11.3 8.29999L8 11.6H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H16Z" fill="black" />
								<path opacity="0.3" d="M11 11.6V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H11Z" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->Upload Files</button>
						<!--end::Add customer-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Group actions-->
					<div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
						<div class="fw-bolder me-5">
						<span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected</div>
						<button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Delete Selected</button>
					</div>
					<!--end::Group actions-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body">
				<!--begin::Table header-->
				<div class="d-flex flex-stack">
					<!--begin::Folder path-->
					<div>
					</div>
					<!--end::Folder path-->
					<!--begin::Folder Stats-->
					<div class="badge badge-lg badge-primary">
						<span id="kt_file_manager_items_counter">0 items</span>
					</div>
					<!--end::Folder Stats-->
				</div>
				<!--end::Table header-->
				<!--begin::Table-->
				<table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5">
					<!--begin::Table head-->
					<thead>
						<!--begin::Table row-->
						<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
							<th class="w-10px pe-2">
								<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
									<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1" />
								</div>
							</th>
							<th class="min-w-250px">Name</th>
							<th class="min-w-10px">Type</th>
							<th class="min-w-125px">Last Uploaded</th>
							<th class="w-125px"></th>
						</tr>
						<!--end::Table row-->
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody class="fw-bold text-gray-600">
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<!--begin::Checkbox-->
							<td>
								<div class="form-check form-check-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="<?php echo e($item->id); ?>" />
								</div>
							</td>
							<!--end::Checkbox-->
							<!--begin::Name=-->
							<td>
								<div class="d-flex align-items-center mw-300px text-truncate">
									<!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
									<span class="svg-icon svg-icon-2x svg-icon-primary me-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black" />
											<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<a href="<?php echo e(url('attachment/'.$item->type->filepath.$item->filename)); ?>" target="_blank" class="text-gray-800 text-hover-primary"><?php echo e($item->filename); ?></a>
								</div>
								<div class="ms-12 fs-8">(<?php echo e($item->talent->user->name??''); ?>)</div>
							</td>
							<!--end::Name=-->
							<!--begin::Size-->
							<td><?php echo e($item->type->name??''); ?></td>
							<!--end::Size-->
							<!--begin::Last modified-->
							<td><?php echo e(date("d M Y, h:i a", strtotime($item->created_at))); ?></td>
							<!--end::Last modified-->
							<!--begin::Actions-->
							<td class="text-end" data-kt-filemanager-table="action_dropdown">
								<div class="d-flex justify-content-end">
									<!--begin::More-->
									<div class="ms-2">
										<button type="button" class="btn btn-sm btn-icon btn-danger btn-active-light-danger" data-kt-filemanager-table-filter="delete_row" data-id="<?php echo e($item->id); ?>">
											<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                            </svg></span>
											</span>
											<!--end::Svg Icon-->
										</button>
									</div>
									<!--end::More-->
								</div>
							</td>
							<!--end::Actions-->
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
		</table>
		<!--end::Upload template-->
		<!--begin::Action template-->
		<div class="d-none" data-kt-filemanager-template="action">
			<div class="d-flex justify-content-end">
				<!--begin::More-->
				<div class="ms-2">
					<button type="button" class="btn btn-sm btn-icon btn-danger btn-active-light-danger" data-kt-filemanager-table-filter="delete_row">
									<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                    </svg></span>
									</span>
									<!--end::Svg Icon-->
								</button>
				</div>
				<!--end::More-->
			</div>
		</div>
		<!--end::Action template-->
		<!--begin::Checkbox template-->
		<div class="d-none" data-kt-filemanager-template="checkbox">
			<div class="form-check form-check-sm form-check-custom form-check-solid">
				<input class="form-check-input" type="checkbox" value="1" />
			</div>
		</div>
		<!--end::Checkbox template-->
		<!--begin::Modals-->
		<!--begin::Modal - Upload File-->
		<div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="none" id="kt_modal_upload_form">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Upload files</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body pt-10 pb-15 px-lg-17">
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="fs-6 fw-bold mb-2">
									<span class="required">User</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<select name="user_id" class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_upload" data-placeholder="Select an option" data-allow-clear="true">
		                        <option></option>
		                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
		                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                    </select>
							</div>
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="fs-6 fw-bold mb-2">
									<span class="required">File Type</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<select name="file_id" class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_upload" data-placeholder="Select an option" data-allow-clear="true" data-hide-search="true">
		                        <option></option>
		                        <?php $__currentLoopData = $filetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
		                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                    </select>
							</div>
							<div class="fv-row mb-10 row-point" style="display:none">
								<!--begin::Label-->
								<label class="fs-6 fw-bold mb-2">
									<span class="required">Total Actual Point</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<?php echo Form::text('point',null,['class'=>'form-control form-control-solid']); ?>


							</div>
							<!--begin::Input group-->
							<div class="form-group">
								<!--begin::Dropzone-->
								<div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
									<!--begin::Controls-->
									<div class="dropzone-panel mb-4">
										<a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
										<a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload</a>
										<a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
									</div>
									<!--end::Controls-->
									<!--begin::Items-->
									<div class="dropzone-items wm-200px">
										<div class="dropzone-item p-5" style="display:none">
											<!--begin::File-->
											<div class="dropzone-file">
												<div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
													<span data-dz-name="">some_image_file_name.jpg</span>
													<strong>(
													<span data-dz-size="">340kb</span>)</strong>
												</div>
												<div class="dropzone-error mt-0" data-dz-errormessage=""></div>
											</div>
											<!--end::File-->
											<!--begin::Progress-->
											<div class="dropzone-progress">
												<div class="progress bg-light-primary">
													<div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
												</div>
											</div>
											<!--end::Progress-->
											<!--begin::Toolbar-->
											<div class="dropzone-toolbar">
												<span class="dropzone-start" style="display: none;">
													<i class="bi bi-play-fill fs-3"></i>
												</span>
												<span class="dropzone-cancel" data-dz-remove="" style="display: none;">
													<i class="bi bi-x fs-3"></i>
												</span>
												<span class="dropzone-delete" data-dz-remove="">
													<i class="bi bi-x fs-1"></i>
												</span>
											</div>
											<!--end::Toolbar-->
										</div>
									</div>
									<!--end::Items-->
								</div>
								<!--end::Dropzone-->
								<!--begin::Hint-->
								<span class="form-text fs-6 text-muted">Max file size is 15MB per file.</span>
								<!--end::Hint-->
							</div>
							<!--end::Input group-->
						</div>
						<!--end::Modal body-->
					</form>
					<!--end::Form-->
				</div>
			</div>
		</div>
		<!--end::Modal - Upload File-->
		<!--begin::Modal - New Product-->
		<!--end::Modals-->
	</div>
	<!--end::Post-->
</div>
<!--end::Container-->
 <?php $__env->slot('scripts', null, []); ?> 
<script>
"use strict";
var KTFileManagerList = function() {
    var e, t, o, n, r, a, finalarray = [];
    const l = () => {
            t.querySelectorAll('[data-kt-filemanager-table-filter="delete_row"]').forEach((t => {
                t.addEventListener("click", (function(t) {
                    t.preventDefault();
                    const o = t.target.closest("tr"),
                        n = o.querySelectorAll("td")[1].innerText,
                 		id = o.querySelectorAll("td")[4].querySelector("[data-kt-filemanager-table-filter='delete_row']").getAttribute('data-id');

                    Swal.fire({
                        text: "Are you sure you want to delete " + n + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function(t) {
                        t.value ? ($.ajax({
								type: 'POST',
							    url: "<?php echo e(url('destroy')); ?>/"+id+"/document",
							}), Swal.fire({
                            text: "You have deleted " + n + "!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function() {
                            e.row($(o)).remove().draw()
                        }))) : "cancel" === t.dismiss && Swal.fire({
                            text: n + " was not deleted.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        })
                    }))
                }))
            }))
        },
        i = () => {
            var o = t.querySelectorAll('[type="checkbox"]');
            "folders" === t.getAttribute("data-kt-filemanager-table") && (o = document.querySelectorAll('#kt_file_manager_list_wrapper [type="checkbox"]'));
            const n = document.querySelector('[data-kt-filemanager-table-select="delete_selected"]');
            o.forEach((e => {
                e.addEventListener("click", (function() {
                    setTimeout((function() {
                        s()
                    }), 50)
                }))
            })), n.addEventListener("click", (function() {
                Swal.fire({
                    text: "Are you sure you want to delete selected files or folders?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then((function(n) {
                    n.value ? (console.log(finalarray), $.ajax({
								type: 'POST',
								data :{id :finalarray},
							    url: "<?php echo e(url('destroy/document/bulk')); ?>",
							})
                    , Swal.fire({
                        text: "You have deleted all selected  files or folders!.",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    }).then((function() {
                        o.forEach((t => {
                            t.checked && e.row($(t.closest("tbody tr"))).remove().draw()
                        }));
                        t.querySelectorAll('[type="checkbox"]')[0].checked = !1
                    }))) : "cancel" === n.dismiss && Swal.fire({
                        text: "Selected  files or folders was not deleted.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    })

                }))
            }))
        },
        s = () => {
            const e = document.querySelector('[data-kt-filemanager-table-toolbar="base"]'),
                o = document.querySelector('[data-kt-filemanager-table-toolbar="selected"]'),
                n = document.querySelector('[data-kt-filemanager-table-select="selected_count"]'),
                r = t.querySelectorAll('tbody [type="checkbox"]')
                
                ;
            let a = !1,
                l = 0,
                myarray = [];
            r.forEach((e => {
                e.checked && (a = !0, l++, myarray.push(e.value))
            })), a ? (n.innerHTML = l, e.classList.add("d-none"), o.classList.remove("d-none")) : (e.classList.remove("d-none"), o.classList.add("d-none"))
            , finalarray = myarray
        },
        
        f = () => {
            document.getElementById("kt_file_manager_items_counter").innerText = e.rows().count() + " items"
        };
    return {
        init: function() {
            let y;
                const x = document.getElementById("kt_modal_upload_form");
                y = FormValidation.formValidation(x, {
                    fields: {
                        point: {
                            validators: {
                                callback: {
	                                message: "This field is required",
	                                callback: function(e) {
	                                	// console.log($('[name="status_id"]:checked').val());
	                                	if(($('[name="file_id"]').val()==1 || $('[name="file_id"]').val()==2) && $('[name="point"]').val()==""){
		                                    return 1;
                                        }
	                                }
	                            }
                            }
                        },
                        file_id: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        },
                        user_id: {
                            validators: {
                                notEmpty: {
                                    message: "This field is required"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }),
                (t = document.querySelector("#kt_file_manager_list")) && (o = document.querySelector('[data-kt-filemanager-template="upload"]'), 
            	r = document.querySelector('[data-kt-filemanager-template="action"]'), 
            	a = document.querySelector('[data-kt-filemanager-template="checkbox"]'), (() => {
                t.querySelectorAll("tbody tr").forEach((e => {
                    const t = e.querySelectorAll("td")[3],
                        o = moment(t.innerHTML, "DD MMM YYYY, LT").format();
                    t.setAttribute("data-order", o)
                }));
                const n = {
                        info: !1,
                        order: [],
                        pageLength: 10,
                        lengthChange: !1,
                        ordering: !1,
                        columns: [{
                            data: "checkbox"
                        }, {
                            data: "name"
                        }, {
                            data: "type"
                        }, {
                            data: "date"
                        }, {
                            data: "action"
                        }],
                        language: {
                            emptyTable: `<div class="d-flex flex-column flex-center">\n                    <img src="${hostUrl}media/illustrations/sketchy-1/5.png" class="mw-400px" />\n                    <div class="fs-1 fw-bolder text-dark mb-4">No items found.</div>\n                    <div class="fs-6">Start creating new folders or uploading a new file!</div>\n                </div>`
                        },
                        conditionalPaging: !0
                    };
                (e = $(t).DataTable(n)).on("draw", (function() {
                    i(), l(), s(), KTMenu.createInstances(),  f()
                }))
            })(), i(), document.querySelector('[data-kt-filemanager-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), l(), 
            (() => {
                const e = "#kt_modal_upload_dropzone",
                    t = document.querySelector(e);
                var o = t.querySelector(".dropzone-item");
                o.id = "";
                var n = o.parentNode.innerHTML;
                o.parentNode.removeChild(o);
                var r = new Dropzone(e, {
                    url: "<?php echo e(url('upload/files')); ?>",
                    parallelUploads: 1,
                    previewTemplate: n,
                    maxFiles:10,
                    maxFilesize: 15,
                    paramName: "filename",
                    autoProcessQueue: !1,
                    // autoQueue: !1,
                    previewsContainer: e + " .dropzone-items",
                    acceptedFiles: ".doc,.docx,.pdf,.ppt,.pptx",
					clickable: e + " .dropzone-select",
					headers: {
				        'x-csrf-token': document.head.querySelector('meta[name="csrf-token"]').content,
				    },
                });
                r.on("addedfile", (function(o) {
                    // o.previewElement.querySelector(e + " .dropzone-start").onclick = function() {
                    //     const e = o.previewElement.querySelector(".progress-bar");
                    //     e.style.opacity = "1";
                    //     var t = 1,
                    //         n = setInterval((function() {
                    //             t >= 100 ? (r.emit("success", o), r.emit("complete", o), clearInterval(n)) : (t++, e.style.width = t + "%")
                    //         }), 20)
                    // }, 
                    t.querySelectorAll(".dropzone-item").forEach((e => {
                        e.style.display = ""
                    })), t.querySelector(".dropzone-upload").style.display = "inline-block"
                    // , t.querySelector(".dropzone-remove-all").style.display = "inline-block"
                })), 
                r.on("sending",function(file,xhr,data){
					data.append("file_id",document.querySelector("[name='file_id']").value), data.append("user_id",document.querySelector("[name='user_id']").value), data.append("point",document.querySelector("[name='point']").value);
				}),
				r.on("complete", (function(e) {
                    const o = t.querySelectorAll(".dz-complete");
                    setTimeout((function() {
                        o.forEach((e => {
                            e.querySelector(".progress-bar").style.opacity = "0", e.querySelector(".progress").style.opacity = "0", e.querySelector(".dropzone-start").style.opacity = "0"
                        }))
                    }), 300),
                    Swal.fire({
                            text: "File successfuly uploaded!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function() {
                            window.location.reload()
                        }))
                })), t.querySelector(".dropzone-upload").addEventListener("click", (function() {
                    y && y.validate().then((function(e) {
                    	"Valid" == e ? 
                    	(r.processQueue(), 
                    		r.files.forEach((e => {
	                        const t = e.previewElement.querySelector(".progress-bar");
	                        t.style.opacity = "1";
	                        var o = 1,
	                            n = setInterval((function() {
	                                o >= 100 ? (r.emit("success", e), r.emit("complete", e), clearInterval(n)) : (o++, t.style.width = o + "%")
	                            }), 20)
	                    	}))):Swal.fire({
                            html: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                })), t.querySelector(".dropzone-remove-all").addEventListener("click", (function() {
                    // Swal.fire({
                    //     text: "Are you sure you would like to remove all files?",
                    //     icon: "warning",
                    //     showCancelButton: !0,
                    //     buttonsStyling: !1,
                    //     confirmButtonText: "Yes, remove it!",
                    //     cancelButtonText: "No, return",
                    //     customClass: {
                    //         confirmButton: "btn btn-primary",
                    //         cancelButton: "btn btn-active-light"
                    //     }
                    // }).then((function(e) {
                    //     e.value ? (t.querySelector(".dropzone-upload").style.display = "none", t.querySelector(".dropzone-remove-all").style.display = "none", r.removeAllFiles(!0)) : "cancel" === e.dismiss && Swal.fire({
                    //         text: "Your files was not removed!.",
                    //         icon: "error",
                    //         buttonsStyling: !1,
                    //         confirmButtonText: "Ok, got it!",
                    //         customClass: {
                    //             confirmButton: "btn btn-primary"
                    //         }
                    //     })
                    // }))
                })), r.on("queuecomplete", (function(e) {
                    t.querySelectorAll(".dropzone-upload").forEach((e => {
                        e.style.display = "none"
                    }))
                })), r.on("removedfile", (function(e) {
                    r.files.length < 1 && (t.querySelector(".dropzone-upload").style.display = "none", t.querySelector(".dropzone-remove-all").style.display = "none")
                }))
            })(),   
            f(), KTMenu.createInstances())
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTFileManagerList.init()
    $('#kt_modal_upload').modal({backdrop:'static', keyboard:false});
    $("#kt_modal_upload").on('shown.bs.modal', function (e) {
    	$('#kt_modal_upload_form input').val('');
    	$('#kt_modal_upload_form select').select2();
    	// $('#kt_modal_upload_form select').val('').trigger('change');
    });
	$('[name="file_id"]').on("change", function() {
		if($(this).val()==1||$(this).val()==2)
			$('.row-point').show();
		else
			$('.row-point').hide();
	});
}));
</script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/mytgp/resources/views/secretariat/document.blade.php ENDPATH**/ ?>