<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, ['activemenu' => 'talent-evaluate']); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
	Talent
 <?php $__env->endSlot(); ?>
 <?php $__env->slot('subheader', null, []); ?> 
Achievement Report
 <?php $__env->endSlot(); ?>
<?php
$talent = $user->talent;
$audit = $talent->user->audits;
?>
<?php echo Form::model($talent->achievement,array('route' => ['update.talentachievement',$talent->id], 'method'=>'post', 'novalidate' => 'novalidate')); ?>	

<div class="card">
    <div class="card-body">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-150px symbol-fixed position-relative border">
                    <img src="<?php echo e(url('')); ?>/photo/<?php echo e($talent->user->avatar); ?>" alt="image" />
                    <!-- <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div> -->
                </div>
            </div>
            <!--end::Pic--><!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1"><?php echo e($talent->title->name??''); ?> <?php echo e($talent->user->name); ?></a>
                        </div>
                        <!--end::Name-->
                        
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
                <!--begin::Stats-->
                <div class="d-flex flex-wrap flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Age</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    
                                    <div class="fs-5 text-gray-800 fw-bolder"><?php echo e(getAgeFromIdentity($talent->ic_no)); ?></div>
                                </div>
                                <!--end::Number-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Programme</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    
                                    <div class="fs-5 text-gray-800 fw-bolder"><?php echo e($talent->programme->name??''); ?></div>
                                </div>
                                <!--end::Number-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Cohort</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <div class="fs-5 text-gray-800 fw-bolder"><?php echo e($talent->status->cohort??''); ?></div>
                                </div>
                                <!--end::Number-->
                                
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Label-->
                                <div class="fw-bold fs-8 text-gray-400 mb-1">Talent ID</div>
                                <!--end::Label-->
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    
                                    <div class="fs-5 text-gray-800 fw-bolder"><?php echo e($talent->talent_code); ?></div>
                                </div>
                                <!--end::Number-->
                                
                            </div>
                            <!--end::Stat-->
                            
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->
                    
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>

        <div class="separator my-5"></div>

		<!--end::Details-->
		<div class="row d-flex justify-content-between">
			<div class="col-4">
                <div class="form-floating mb-7">
                    <?php echo Form::text('name', $talent->achievement->name??$talent->fullname, array('class'=>'form-control','id'=>'name','placeholder'=>'')); ?> 
                    <label for="name">Name</label>
                </div>
                <!--begin::Input group-->
                <div class="form-floating mb-7">
                    <?php echo Form::text('prev_position', $talent->achievement->prev_position??implode('',array_filter($audit->pluck('old_values.designation')->toArray())), array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'')); ?> 
                    <label for="floatingInput">Previous Designation</label>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="form-floating mb-7">
                    <?php echo Form::text('cur_position', $talent->achievement->cur_position??$talent->user->designation, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'')); ?> 
                    <label for="floatingInput">Current Designation</label>
                </div>
                <!--end::Input group-->
                <?php
                $arr = array();
                $supervisors = $talent->achievement->supervisor??'';
                if($supervisors==''){
                    foreach($talent->supervisors as $sv){
                        $arr[]= $sv->super->name. ' ('.$sv->remark.')';
                    }
                    $supervisors = implode('&#13;&#10;',$arr);
                }
                ?>
                <div class="form-floating mb-7">
                    <textarea class="form-control" id="supervisor" style="height: 100px" name="supervisor"><?php echo $supervisors; ?></textarea>
                    <label for="supervisor">Supervisor</label>
                </div>
                <div class="separator separator-dotted separator-content border-dark mb-10"><span class="w-200px fw-bolder">TGP Project</span></div>
                <div class="form-floating mb-7">
                    <textarea class="form-control" name="project_title" style="height: 100px"><?php echo e($talent->achievement->project_title??($talent->assproject->project_title??'')); ?></textarea>
                    <label for="supervisor">Title of TGP Project</label>
                </div>

                <div class="form-floating mb-7">
                    <textarea class="form-control" name="project_presentation" style="height: 100px"><?php echo e($talent->achievement->project_presentation??($talent->assproject->project_presentation??'')); ?></textarea>
                    <label for="supervisor">Presentation</label>
                </div>

                <div class="form-floating mb-7">
                    <textarea class="form-control" name="project_publication" style="height: 100px"><?php echo e($talent->achievement->project_publication??($talent->assproject->project_publication??'')); ?></textarea>
                    <label for="supervisor">Publication</label>
                </div>
            </div>
            <div class="col-4">
                <div class="separator separator-dotted separator-content border-dark mb-10"><span class="w-200px fw-bolder">CPD/NSR<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The last 3 years"></i></span></div>
                <div class="mb-10 fv-row row">
                    <div id="kt_docs_repeater_cpdnsr">
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div data-repeater-list="kt_docs_repeater_cpdnsr">
                                <?php $__currentLoopData = $talent->cpdnsr->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cpdnsr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-3">
                                            <?php echo Form::select('cpdnsr_type',['CPD'=>'CPD','NSR'=>'NSR'], $cpdnsr->type, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Type...','data-kt-repeater'=>'select2')); ?> 
                                        </div>
                                        <div class="col-md-4">
                                            <?php echo Form::selectYear('cpdnsr_year', date("Y"), date("Y")-4, $cpdnsr->year, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')); ?> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <?php echo Form::hidden('id', $cpdnsr->id); ?> 
                                                <?php echo Form::text('cpdnsr_mark', $cpdnsr->mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'')); ?> 
                                                    <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($talent->cpdnsr->count()==0): ?>
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-3">
                                            <?php echo Form::select('cpdnsr_type',['CPD'=>'CPD','NSR'=>'NSR'], null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Type...','data-kt-repeater'=>'select2')); ?> 
                                        </div>
                                        <div class="col-md-4">
                                            <?php echo Form::selectYear('cpdnsr_year', date("Y"), date("Y")-4, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')); ?> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <?php echo Form::hidden('id', ''); ?> 
                                                <?php echo Form::text('cpdnsr_mark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'')); ?> 
                                                <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                <i class="la la-plus"></i>Add
                            </a>
                        </div>
                        <!--end::Form group-->
                    </div>
                    <!--end::Repeater-->

                </div>
                <div class="separator separator-dotted separator-content border-dark mb-10"><span class="w-200px fw-bolder">LNPT <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="The last 3 years"></i></span></div>
					
                <div class="mb-10 fv-row row">
                    <div id="kt_docs_repeater_lnpt">
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div data-repeater-list="kt_docs_repeater_lnpt">
                                <?php $__currentLoopData = $talent->lnpt->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lnpt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-5">
                                            <?php echo Form::selectYear('lnpt_year', date("Y"), date("Y")-50, $lnpt->year, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')); ?> 
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <?php echo Form::hidden('id', $lnpt->id); ?> 
                                                <?php echo Form::text('lnpt_mark', $lnpt->mark, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'')); ?> 
                                                <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($talent->lnpt->count()==0): ?>
                                <div data-repeater-item>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-5">
                                            <?php echo Form::selectYear('lnpt_year', date("Y"), date("Y")-4, null, array('class'=>'form-select form-select-lg form-select-solid','placeholder'=>'Year...','data-kt-repeater'=>'select2')); ?> 
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <?php echo Form::hidden('id', ''); ?> 
                                                <?php echo Form::text('lnpt_mark', null, array('class'=>'form-control','id'=>'floatingInput','placeholder'=>'')); ?> 
                                                <label for="floatingInput">Mark</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-icon btn-light-danger">
                                                <i class="la la-trash-o fs-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                <i class="la la-plus"></i>Add
                            </a>
                        </div>
                        <!--end::Form group-->
                    </div>
                    <!--end::Repeater-->
                </div>
            </div>
            <div class="col-4">
                <table class="table table-rounded table-striped border gy-3 gs-7">
					<thead>
						<tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
							<th class="text-center">#</th>
							<th class="text-center">List of Professional Training</th>
						</tr>
					</thead>
					<tbody>
                        <?php $i=0;?>
						<?php $__currentLoopData = $talent->course->where('attendance_id',4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $training): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++;?>
						<tr class=" fst-italic"><td><?php echo e($i); ?>.</td><td><?php echo e($training->course->title); ?> <span class="fw-bold text-danger">(<?php echo e(date("Y", strtotime($training->course->start_date))); ?>)</span></td></tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</tbody>
				</table>
                <?php 
                    $subtotal1 = $talent->course->where('attendance_id',4)->count()??'0';
                    if(($talent->superlog2->total??0)<($talent->superlog3->total??0))
                        $tgpcm = $talent->superlog3->total??0;
                    else
                        $tgpcm = $talent->superlog2->total??0;
                    $subtotal1 += $tgpcm; 
                    if(($talent->twer1->mark??0)<($talent->twer2->mark??0))
                        $tgptwer = $talent->twer2->mark??0;
                    else
                        $tgptwer = $talent->twer1->mark??0;
                        $subtotal1 += $tgptwer; 

                ?>
                <table class="table table-rounded table-striped border gy-3 gs-7">
                    <thead>
						<tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200 bg-light-warning">
							<th class="text-center align-middle" rowspan="2">TRAINING ATTENDANCE<br/>(10 MARKS)</th>
							<th class="text-center" colspan="2">SUPERVISOR ASSESSMENT</th>
							<th class="text-center align-middle" rowspan="2">TOTAL<br/>(60 MARKS)</th>
						</tr>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200 bg-light-warning">
                        <th class="text-center">TGP CM<br/>(25 MARKS)</th>
                        <th class="text-center">TGP TWER<br/>(25 MARKS)</th>
                        </tr>
					</thead>	
                    <tbody>
                        <tr>
                            <td class="text-center"><?php echo e($talent->course->where('attendance_id',4)->count()??'0'); ?></td>
                            <td class="text-center"><?php echo e($tgpcm); ?></td>
                            <td class="text-center"><?php echo e($tgptwer); ?></td>
                            <td class="text-center"><?php echo e($subtotal1); ?></td>
                        </tr>
                    </tbody>					
                </table>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center mb-20">
            <div class="col-8">
            <button type="button" class="btn btn-primary me-5 save w-150px">Save</button> <a href="<?php echo e(url('/talentachievement/'.$talent->id.'/generate')); ?>" target="_blank" class="btn btn-success <?php if(!$talent->achievement): ?> disabled bg-secondary <?php endif; ?> me-5 w-150px">Generate Doc</a><a href="<?php echo e(url('/secretariat/talent-profile')); ?>" class="btn bg-secondary w-150px me-5">Back</a>
        </div>
        </div>
        <div class="row d-flex justify-content-between mt-10">
            <div class="col-6">
                <div class="separator separator-dashed separator-content border-primary mb-10"><span class="w-600px fw-bolder">TGP COMPETENCY DOMAIN DEVELOPMENT CHART<br/>(Supervisor Assessment)</span></div>
            <?php $category = []; $super1 = []; $super2 = []; ?>
            <?php $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $x = 0;$y = 0;
                $q = [];$cat = []; $sub1 = []; $sub2 = [];
            ?>
                <div class="fw-bolder my-5 fs-4"><?php echo e($dom->name); ?> </div>
                <div class="row d-flex  align-items-stretch">
                    <div class="col-4">
                        <div class="fw-bolder my-3 fs-7">TGP Competency Subdomain</div>
                        <div class="border rounded p-1 fs-7 fst-italic bg-gray-200">   
                            <?php $__currentLoopData = $dom->logbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                            <?php 
                                $x++; 
                                $q[] = 'q'.$label->id;
                            ?>  
                            <div class="d-flex"><div class="fw-bold me-2"><?php echo e($dom->code.$x); ?></div><div class="text-truncate"><?php echo e($label->item); ?></div></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Pre-TGP</div>
                            <?php $__currentLoopData = $q; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                            <?php 
                            $y++; 
                            $cat[] =  $dom->code.$y;
                            $sub1[] = $talent->superlog2->$ques??0; 
                            ?>
                            <div class=""><?php echo e($talent->superlog2->$ques??0); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Post-TGP</div>
                            <?php $__currentLoopData = $q; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                            <?php $sub2[] = $talent->superlog3->$ques??0; ?>
                            <div class=""><?php echo e($talent->superlog3->$ques??0); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <canvas id="kt_chartjs_super_<?php echo e($dom->code); ?>"  class="w-100 h-100"></canvas>
                        <?php echo Form::hidden('image_super_'.$dom->code, null , array('id'=>'image_super_'.$dom->code)); ?> 
                    </div>
                </div>
            <?php $category[] = $cat; $super1[] = $sub1; $super2[]= $sub2; 
            $labels[0] = date("Y",strtotime($talent->superlog2->created_at??date("Y-m-d")));
            $labels[1] = date("Y",strtotime($talent->superlog3->created_at??date("Y-m-d")));
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-6">
                <div class="separator separator-dashed separator-content border-primary mb-10"><span class="w-600px fw-bolder">TGP COMPETENCY DOMAIN DEVELOPMENT CHART<br/>(Self-Assessment)</span></div>
                <?php $category = []; $self1 = []; $self2 = []; ?>
            <?php $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $x = 0;$y = 0;
                $q = [];$cat = []; $sub1 = []; $sub2 = [];
            ?>
                <div class="fw-bolder my-5 fs-4"><?php echo e($dom->name); ?> </div>
                <div class="row d-flex  align-items-stretch">
                    <div class="col-4">
                        <div class="fw-bolder my-3 fs-7">TGP Competency Subdomain</div>
                        <div class="border rounded p-1 fs-7 fst-italic bg-gray-200">   
                            <?php $__currentLoopData = $dom->logbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                            <?php 
                                $x++; 
                                $q[] = 'q'.$label->id;
                            ?>  
                            <div class="d-flex"><div class="fw-bold me-2"><?php echo e($dom->code.$x); ?></div><div class="text-truncate"><?php echo e($label->item); ?></div></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Pre-TGP</div>
                            <?php $__currentLoopData = $q; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                            <?php 
                                $y++; 
                                $cat[] =  $dom->code.$y;
                                $sub1[] = $talent->selflog2->$ques??0; 
                            ?>
                            <div class=""><?php echo e($talent->selflog2->$ques??0); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="w-80px me-1 text-center p-0">
                        <div class="border rounded py-1">
                            <div class="fw-bolder my-3 fs-8">Post-TGP</div>
                            <?php $__currentLoopData = $q; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                            <?php $sub2[] = $talent->selflog3->$ques??0; ?>
                            <div class=""><?php echo e($talent->selflog3->$ques??0); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <canvas id="kt_chartjs_self_<?php echo e($dom->code); ?>"  class="w-100 h-100"></canvas>
                        <?php echo Form::hidden('image_self_'.$dom->code, null , array('id'=>'image_self_'.$dom->code)); ?> 
                    </div>
                </div>
            <?php $category[] = $cat; $self1[] = $sub1; $self2[]= $sub2; 
            $labels[0] = date("Y",strtotime($talent->selflog2->created_at??date("Y-m-d")));
            $labels[1] = date("Y",strtotime($talent->selflog3->created_at??date("Y-m-d")));
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
        
    </div>
</div>

 <?php echo Form::close(); ?>

 <?php $__env->slot('scripts3', null, []); ?> 
<script>"use strict";
var KTAppEcommerceSavelogbook = function() {

	return {
        init: function() {

                var f = KTUtil.getCssVariableValue('--bs-font-sans-serif');
                
                var e, c, d;
                c = () => {

                    <?php $i=0 ?>
                    <?php $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    e = document.getElementById("kt_chartjs_self_<?php echo e($dom->code); ?>");

                    e && new Chart(e, {
                        type: 'radar',
                        data: {
                            labels: <?php echo json_encode($category[$i], JSON_NUMERIC_CHECK)?>,
                            datasets:[{
                            label: "<?php echo e($labels[0]); ?>",
                            data: <?php echo json_encode($self1[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            pointBackgroundColor: 'rgb(255, 99, 132)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(255, 99, 132)'
                        }, {
                            label: "<?php echo e($labels[1]); ?>",
                            data: <?php echo json_encode($self2[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgb(54, 162, 235)',
                            pointBackgroundColor: 'rgb(54, 162, 235)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(54, 162, 235)'
                        }]
                        },
                        options: {
                            plugins: {
                                title: {
                                    display: false,
                                },
                                legend: {
                                    labels: {
                                        // This more specific font property overrides the global property
                                        font: {
                                            size: 10,
                                            family: f
                                        }
                                    },
                                    position: 'bottom'
                                }
                            },
                            responsive: true,
                            scales: {
                                r: {
                                    ticks: {
                                        stepSize: 1,
                                        font: { size: 10 },
                                    },
                                    pointLabels: {
                                    font: { size: 10}
                                },
                                min: 0,
                                max: 5  
                                }
                            }
                        }
                    })//, $("#image_<?php echo e($dom->code); ?>").val(e.toDataURL())
                    <?php if($dom->id<5): ?>
                        ,
                    <?php endif; ?>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    };
                d = () => {

                    <?php $i=0 ?>
                    <?php $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    e = document.getElementById("kt_chartjs_super_<?php echo e($dom->code); ?>");
                    
                    e && new Chart(e, {
                        type: 'radar',
                        data: {
                            labels: <?php echo json_encode($category[$i], JSON_NUMERIC_CHECK)?>,
                            datasets:[{
                            label: "<?php echo e($labels[0]); ?>",
                            data: <?php echo json_encode($super1[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgb(255, 99, 132)',
                            pointBackgroundColor: 'rgb(255, 99, 132)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(255, 99, 132)'
                        }, {
                            label: "<?php echo e($labels[1]); ?>",
                            data: <?php echo json_encode($super2[$i], JSON_NUMERIC_CHECK)?>,
                            fill: false,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgb(54, 162, 235)',
                            pointBackgroundColor: 'rgb(54, 162, 235)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgb(54, 162, 235)'
                        }]
                        },
                        options: {
                            plugins: {
                                title: {
                                    display: false,
                                },
                                legend: {
                                    labels: {
                                        // This more specific font property overrides the global property
                                        font: {
                                            size: 10,
                                            family: f
                                        }
                                    },
                                    position: 'bottom'
                                }
                            },
                            responsive: true,
                            scales: {
                                r: {
                                    ticks: {
                                        stepSize: 1,
                                        font: { size: 10 },
                                    },
                                    pointLabels: {
                                    font: { size: 10 }
                                },
                                min: 0,
                                max: 5  
                                }
                            }
                        }
                    })//, $("#image_<?php echo e($dom->code); ?>").val(e.toDataURL())
                    <?php if($dom->id<5): ?>
                        ,
                    <?php endif; ?>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    };

                    c(), d();
        
	    }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppEcommerceSavelogbook.init()

    $('#kt_docs_repeater_lnpt, #kt_docs_repeater_cpdnsr').repeater({
      initEmpty: false,
      
      show: function () {
          $(this).slideDown();
          $(this).find('[data-kt-repeater="select2"]').select2();
      },

      hide: function (deleteElement) {
          $(this).slideUp(deleteElement);
      },
      ready: function(){}

    });
    $('.save').on('click', function(){
        canvasLoaded();
        $('form').submit();
    });
}));

function canvasLoaded(){
    <?php $__currentLoopData = $domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
        var target = document.getElementById("kt_chartjs_super_<?php echo e($dom->code); ?>"); // your canvas element
        $("#image_super_<?php echo e($dom->code); ?>").val(target.toDataURL("image/png"));
        var targets = document.getElementById("kt_chartjs_self_<?php echo e($dom->code); ?>"); // your canvas element
        $("#image_self_<?php echo e($dom->code); ?>").val(targets.toDataURL("image/png"));
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
}
</script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /opt/homebrew/var/www/mytgp/resources/views/secretariat/talent-achievement-view.blade.php ENDPATH**/ ?>