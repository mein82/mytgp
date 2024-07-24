<x-app-layout activemenu="dashboard">

<x-slot name="header">
	Assessment
</x-slot>
<x-slot name="subheader">
    Talent Project   
</x-slot>
@include('talent.assessment-project-header')
@php
$talent = Auth::user()->talent;
@endphp

<form class="" novalidate="novalidate" id="kt_add_project_form" action="{{route('update.assproject')}}" method="POST" enctype="multipart/form-data">
@csrf
{!!  Form::hidden('talent_id', $talent->id)!!} 

@if($section==''||$section=='executive-summary') 
{!!  Form::hidden('tab', 1)!!} 
<div class="card mb-5 mb-xxl-8">
    <div class="card-header border-0">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-dark">TGP Project Executive Summary</span>
            <span class="text-gray-600 mt-1 fw-bold fs-7">Summary of the project including the purpose of the project, methodology, results, and discussion, way forward, conclusion.</span>
        </h3>
    </div>
    <!--begin::Body-->
    <div class="card-body pb-0">
        <div class="fv-row mb-15">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                
                <div class="col-lg-12">
                    <!--begin::Input group-->
                    <!-- <div class="form-floating mb-7"> -->
                        {!!  Form::textarea('exec_summary', $project->exec_summary??'', array('class'=>'form-control','id'=>'exec_summary','placeholder'=>'','rows'=>'10'))!!} 
                        <!-- <label for="statement">Personal Statement</label> -->
                    <!-- </div> -->
                    <!--end::Input group-->

                </div>
            </div>
        </div>
        
    </div>
    <!--end::Body-->
    <!--begin::Card footer-->
    <div class="card-footer d-flex justify-content-end py-6">
        <button type="submit" class="btn btn-primary" id="kt_add_project_submit">Save Changes</button>
    </div>
    <!--end::Card footer-->
</div>

@endif

@if($section=='presentation-publication') 
{!!  Form::hidden('tab', 2)!!} 
<div class="card mb-5 mb-xxl-8">
    <div class="card-header border-0">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-dark">Info on TGP Project & Publication</span>
            <!-- <span class="text-gray-600 mt-1 fw-bold fs-7">Summary of the project including the purpose of the project, methodology, results, and discussion, way forward, conclusion.</span> -->
        </h3>
    </div>
    <!--begin::Body-->
    <div class="card-body pb-0">
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-0">
                <span class="required">Title of Project</span>
            </label>
            <div class="text-muted mb-2">Including NMRR No.</div>
            <!--end::Label-->
            <!--begin::Input-->
            {!!  Form::textarea('project_title', $project->project_title??'', array('class'=>'form-control','placeholder'=>'','rows'=>'2'))!!} 
            <!--end::Input-->
        </div>
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-0">
                <span class="required">Presentation</span>
            </label>
            <div class="text-muted mb-2">Including place and date</div>
            <!--end::Label-->
            <!--begin::Input-->
            {!!  Form::textarea('project_presentation', $project->project_presentation??'', array('class'=>'form-control','placeholder'=>'','rows'=>'5'))!!} 
            <!--end::Input-->
        </div>
        <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-0">
                <span class="required">Publication</span>
            </label>
            <div class="text-muted mb-2">Including no ISBN/ Name of Journal</div>
            <!--end::Label-->
            <!--begin::Input-->
            {!!  Form::textarea('project_publication', $project->project_publication??'', array('class'=>'form-control','placeholder'=>'','rows'=>'5'))!!} 
            <!--end::Input-->
        </div>
    </div>
    <!--end::Body-->
    <!--begin::Card footer-->
    <div class="card-footer d-flex justify-content-end py-6">
        <button type="submit" class="btn btn-primary" id="kt_add_project_submit">Save Changes</button>
    </div>
    <!--end::Card footer-->
</div>


@endif

@if($section=='project-report') 
{!!  Form::hidden('tab', 3)!!} 
<div class="card mb-5 mb-xxl-8">
    <!-- <div class="card-header border-0">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-dark">TGP PROJECT REPORT GUIDELINE </span>
        </h3>
    </div> -->
    <!--begin::Body-->
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-9 ps-10 pe-20">
                <h4 class="fs-3 text-gray-800 fw-bolder mb-6">TGP PROJECT REPORT GUIDELINE </h4>
                <p class="fw-bold fs-6 text-gray-700 mb-6 border-start border-4 ps-6 border-danger modal-rounded">TGP Project is a compulsory project to be completed within the duration of the Talent’s involvement in the programme. The scope of the project should be related to current or future direction of the Ministry of Health (MOH). In the TGP Project, talents should strive to showcase evidence of their competencies in the three domains: Leadership, Communication and Relationship, and Organisational Governance. The completion, submission, and presentation of the TGP project to the TGP Assessment Panel marks the important milestone in the completion of the overall programme of TGP.</p>
                
                <!--begin::Separator-->
                <div class="separator separator-dashed border-danger opacity-25 mb-6"></div>
                <!--end::Separator-->
                
                <h4 class="fs-3 text-gray-800 fw-bolder mb-6">THE WRITTEN REPORT OF TGP IS INTENDED TO SERVE THE FOLLOWING PURPOSES:    </h4>
                <div class="d-flex flex-column fw-bold fs-6 text-gray-700 mb-6">
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> To provide a comprehensive overview of the project in terms of:
                    </li>
                    <div class="d-flex flex-column ms-10">
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Objective
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Methodology   
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Results
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Discussion
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Intervention
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Way forward
                        </li>
                    </div>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> To elaborate the impact of any intervention in policy/ workplace since the initiation of the project.
                    </li>
                </div>
                <!--begin::Separator-->
                <div class="separator separator-dashed border-danger opacity-25 mb-6"></div>
                <!--end::Separator-->
                
                <h4 class="fs-3 text-gray-800 fw-bolder mb-6 mt-10">THE WRITTEN DOCUMENT SHOULD CONTAIN THE FOLLOWING INFORMATION:  </h4>
                <div class="d-flex flex-column fw-bold fs-6 text-gray-700 mb-6">
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> TGP Project title 
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Abstract
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Introduction 
                    </li>
                    <div class="d-flex flex-column ms-10">
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Background of the project 
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Brief description of the project    
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Objectives
                        </li>
                    </div>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Methodology
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Results
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Discussion
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Recommendations
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Conclusion
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Acknowledgement: Co-investigators contact details should be included. 
                    </li>
                </div>
                <!--begin::Separator-->
                <div class="separator separator-dashed border-danger opacity-25 mb-6"></div>
                <!--end::Separator-->
                
                <h4 class="fs-3 text-gray-800 fw-bolder mb-6 mt-10">OTHER CONSIDERATIONS </h4>
                <div class="d-flex flex-column mb-10 fw-bold fs-6 text-gray-700">
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> The report should be written in a style that is easily understandable by other technical specialists. 
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> The use of technical language and mathematical formulae is encouraged.
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Acronyms should be defined, if used.
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> If there is also a web based version of the project report, a copy of this would be appreciated. 
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span> Other relevant visual illustrations or materials relevant to the project will also be well received by the TGP Assessment Panel. 
                    </li>
                </div>
            </div>
            <div class="col-3">
                <div class="fv-row mb-15">
                    @if(!is_null($project->file_report))
                    <div class="mb-3 text-center">
                        <a href="{{url('project/'.$project->file_report)}}" target="_blank" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{url('')}}/assets/media/svg/files/pdf.svg" alt="">
                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <!-- <div class="fs-5 fw-bolder mb-2">Project Reqs..</div> -->
                            <!--end::Title-->
                        </a>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="file_report" class="form-label">TGP Project Report in PDF format</label>
                        <input class="form-control" name="file_report" type="file" id="file_report" accept = "application/pdf">
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
    <!--end::Body-->
    <!--begin::Card footer-->
    <div class="card-footer d-flex justify-content-end py-6">
        <button type="submit" class="btn btn-primary" id="kt_add_project_submit">Save Changes</button>
    </div>
    <!--end::Card footer-->
</div>
@endif

@if($section=='final-presentation') 
{!!  Form::hidden('tab', 4)!!} 
<div class="card mb-5 mb-xxl-8">
    <!--begin::Body-->
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-9 ps-10 pe-20">
                <h4 class="fs-3 text-gray-800 fw-bolder mb-6">TGP PROJECT PRESENTATION GUIDELINE</h4>
                <p class="fw-bold fs-6 text-gray-700 mb-6 border-start border-4 ps-6 border-danger modal-rounded">All talents are required to present their TGP Project to the TGP Assessment Panel consisting of representatives from each MOH Technical Programme. The time and venue of assessment will be arranged by the TGP Secretariat. </p>
                <!--begin::Separator-->
                <div class="separator separator-dashed border-danger opacity-25 mb-6"></div>
                <!--end::Separator-->
                <h4 class="fs-3 text-gray-800 fw-bolder mb-6">STRUCTURE OF THE SLIDE PRESENTATION</h4>
                <div class="d-flex flex-column fw-bold fs-6 text-gray-700 mb-6">
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span>The project presentation should not exceed 20 minutes.
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span>At the end of the project presentation, talents must provide a self-reflection of their TGP experience.    
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span>Self-reflection of TGP experience can be presented in appropriate and creative ways such as infographics/ slides and short videos. It should not exceed 5 minutes.
The following information should be shown on all slides (as footnote):
                    </li>
                    <div class="d-flex flex-column ms-10">
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> TGP Project Title 
                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="bullet bullet-vertical bg-info me-5"></span> Talent’s name as principal investigator
                        </li>
                    </div>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span>The second slide should include information of the talent (name, organisation, position, contact details), total cost of project, source of grant if any, project’s start date and duration (months), facilitators/ supervisors/ co-investigators.
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span>Photos, diagrams and other illustrative materials are highly preferable.
                    </li>
                    <li class="d-flex align-items-center py-1">
                        <span class="bullet me-5 bg-gray-800"></span>Electronic submission of the presentation slides to the TGP Secretariat should be made at least two days before the TGP Assessment.
                    </li>
                </div>

                <!--begin::Alert-->
                <div class="alert alert-dismissible bg-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-5tx svg-icon-white mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                    <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
                    <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="black"/>
                    </svg>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="text-center">
                        <!--begin::Title-->
                        <h1 class="fs-2 fw-bolder mb-5 text-white">WHEN SHOULD THE PROJECT PRESENTATION BE SUBMITTED?</h1>
                        <!--end::Title-->

                        <!--begin::Separator-->
                        <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
                        <!--end::Separator-->

                        <!--begin::Content-->
                        <div class="mb-9 text-white fs-5     fw-bold">
                        Completed TGP projects can be submitted anytime within the two years of TGP. <br/>
However, the latest submission deadline is TWO WEEKS BEFORE the Assessment Panel Meeting. Failure to submit can lead to disqualification from the Assessment. Should major editions occur, the talent is encouraged to submit an updated Project Presentation.
                        </div>
                        <!--end::Content-->
                      
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Alert-->
            </div>
            <div class="col-3">
                <div class="fv-row mb-15">
                    @if(!is_null($project->file_presentation))
                    <div class="mb-3 text-center">
                        <a href="{{url('project/'.$project->file_presentation)}}" target="_blank" class="text-gray-800 text-hover-primary d-flex flex-column">
                            <!--begin::Image-->
                            <div class="symbol symbol-60px mb-5">
                                <img src="{{url('')}}/assets/media/svg/files/pdf.svg" alt="">
                            </div>
                            <!--end::Image-->
                            <!--begin::Title-->
                            <!-- <div class="fs-5 fw-bolder mb-2">Project Reqs..</div> -->
                            <!--end::Title-->
                        </a>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="file_presentation" class="form-label">Upload PDF/PPTX type</label>
                        <input class="form-control" name="file_presentation" type="file" id="file_presentation" accept = "application/pdf, .pptx">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Body-->
    <!--begin::Card footer-->
    <div class="card-footer d-flex justify-content-end py-6">
        <button type="submit" class="btn btn-primary" id="kt_add_project_submit">Save Changes</button>
    </div>
    <!--end::Card footer-->
</div>
@endif


</form>
<x-slot name="scripts">
<script>
"use strict";
var KTAppSaveProject = function() {

	return {
        init: function() {
        	(() => {
                let e;
                const t = document.getElementById("kt_add_project_form"),
                    o = document.getElementById("kt_add_project_submit");
                e = FormValidation.formValidation(t, {
                    fields: {
                        exec_summary: {
                            validators: {
                                callback: {
	                                message: "Executive Summary is required",
	                                callback: function(e) {
                                        var channel = $('[name="tab"]').val();
	                                	return (channel !== '1') ? true : (e.value!='')?true:false;
	                                }
	                            }
                            }
                        },
                        project_title: {
                            validators: {
                                callback: {
	                                message: "Project Title is required",
	                                callback: function(e) {
                                        var channel = $('[name="tab"]').val();
	                                	return (channel !== '2') ? true : (e.value!='')?true:false;
	                                }
	                            }
                            }
                        },
                        project_presentation: {
                            validators: {
                                callback: {
	                                message: "Project Presentation is required",
	                                callback: function(e) {
                                        var channel = $('[name="tab"]').val();
	                                	return (channel !== '2') ? true : (e.value!='')?true:false;
	                                }
	                            }
                            }
                        },
                        project_publication: {
                            validators: {
                                callback: {
	                                message: "Project Publication is required",
	                                callback: function(e) {
                                        var channel = $('[name="tab"]').val();
	                                	return (channel !== '2') ? true : (e.value!='')?true:false;
	                                }
	                            }
                            }
                        },
                        file_report: {
                            validators: {
                                callback: {
	                                message: "Final Report is required",
	                                callback: function(e) {
                                        var channel = $('[name="tab"]').val();
	                                	return (channel !== '3') ? true : (e.value!='')?true:false;
	                                }
	                            }
                            }
                        },
                        file_presentation: {
                            validators: {
                                callback: {
	                                message: "Final Presentation is required",
	                                callback: function(e) {
                                        var channel = $('[name="tab"]').val();
	                                	return (channel !== '4') ? true : (e.value!='')?true:false;
	                                }
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
                }), o.addEventListener("click", (a => {
                    a.preventDefault(), e && e.validate().then((function(e) {
                        console.log("validated!"), "Valid" == e ? (o.setAttribute("data-kt-indicator", "on"), o.disabled = !0, 
                        	t.submit()) : Swal.fire({
                            html: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }))
            })()
		}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppSaveProject.init();
    $('#exec_summary').textcounter({
        type                     : "word",            // "character" or "word"
        min                      : 0,                      // minimum number of characters/words
        max                      : 1000,                    // maximum number of characters/words, -1 for unlimited, 'auto' to use maxlength attribute
        countContainerElement    : "div",                  // HTML element to wrap the text count in
        countContainerClass      : "text-count-wrapper",   // class applied to the countContainerElement
        inputErrorClass          : "error",                // error class appended to the input element if error occurs
        counterErrorClass        : "error",                // error class appended to the countContainerElement if error occurs
        counterText              : "Total Count: %d",        // counter text
        errorTextElement         : "div",                  // error text element
        minimumErrorText         : "Minimum not met",      // error message for minimum not met,
        maximumErrorText         : "Maximum exceeded",     // error message for maximum range exceeded,
        displayErrorText         : true,                   // display error text messages for minimum/maximum values
        stopInputAtMaximum       : true,                   // stop further text input if maximum reached
        countSpaces              : false,                  // count spaces as character (only for "character" type)
        countDown                : true,                  // if the counter should deduct from maximum characters/words rather than counting up
        countDownText            : "Remaining word(s): %d"
    });

    
}))
</script>
</x-slot>
</x-app-layout>