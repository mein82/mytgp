<table class="table table-rounded table-striped border table-row-bordered table-row-gray-200 gy-3 gx-5">
             		<tbody>
                <?php $i = 0; ?>        
             	<?php $__currentLoopData = $project->progress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>        
             	<tr><td colspan="2" class="fw-bold fs-6 gy-1">
             		<div class="d-flex flex-stack flex-wrap"> 
             		<?php echo e($i); ?>) <?php echo e(date("d-m-Y",strtotime($subitem->created_at))); ?> 
                    <?php if(Auth::user()->group_id==7): ?>
             		<div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-light-danger btn-icon remove_super" id="kt_button_1" data-id="<?php echo e($subitem->id); ?>">
                    <span class="indicator-label">
                        <span class="svg-icon svg-icon-2 svg-icon-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                            </svg></span>
                    </span>
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button></div>
                <?php endif; ?>
            </div>
             	</td>
             	</tr>
                <tr>
             		<td class="min-w-250px">
                        <div class="d-flex flex-column fs-6">
                        
                        <span class="text-success">
                            <?php $__currentLoopData = $subitem->status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <li class="d-flex align-items-center py-2"><span class="bullet me-5"></span> <?php echo e($status->status->name??''); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </span>
                        </div>
                    </td>
             		<td><?php echo nl2br($subitem->description); ?>

<?php if(!is_null($subitem->filename)): ?>
<br/>
<a href="<?php echo e(url('project').'/'.$subitem->filename); ?>"  target="_blank" class="btn btn-primary btn-sm mt-2"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
</svg></span>Attachment</a>


<?php endif; ?>
             		</td>
             		<!-- <td></td> -->
				</tr>
             	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </tbody>
             	</table>

             	<script>

"use strict";
var KTModalUserSearch = function() {
	var c, r;
    return {
        init: function() {
            (c = document.querySelectorAll(".remove_super"), c.forEach((e => {
                e.addEventListener("click", (function(t) {
                	const n = t.target.closest("tr");
                    var id = e.getAttribute('data-id');
                    Swal.fire({
                        text: "Are you sure you want to delete this progress?",
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
                    	t.value ? (e.setAttribute("data-kt-indicator", "on"), $.ajax({
								type: 'POST',
							    url: "<?php echo e(url('')); ?>/destroy/"+id+"/progress",
							}).done(function(){
					e.removeAttribute('data-kt-indicator'), Swal.fire({
                                html: "Progress have been deleted.",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                                })
				        }),
							n.nextElementSibling.remove(),
                            n.remove()) : false
                    }))
                }))
            })))
            
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalUserSearch.init();
}));



</script><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/talent/modal-progress.blade.php ENDPATH**/ ?>