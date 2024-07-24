 
<div class="w-100">
@if(Auth::user()->group_id<=2)    
{!! Form::open(array('route' => ['complete.course'], 'method'=>'POST')) !!}

<div class="d-flex flex-column m-5 fv-row rounded-3 p-7 border border-dashed border-gray-300">
                                                    <!--begin::Label-->
    <div class="fs-5 fw-bolder form-label mb-3">Completed the courses
    <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Click on checkbox below and wait for the page to referesh."></i></div>
    <!--end::Label-->
    <!--begin::Checkbox-->
    <label class="form-check form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" @if($talentstatus->course_complete) checked="checked" @endif value="1" name="course_complete">
        <span class="form-check-label text-gray-600">Talent have completed the courses?</span>
        <span class="loading ms-5 text-primary">
            <span class="indicator-progress">
                Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </span>
        
    </label>

    
    <!--end::Checkbox-->
</div>
    <input type="hidden" name="id" value="{{$id}}">
    
 {!! Form::close() !!}  
@endif
    <table class="table table-rounded table-striped border gy-3 gs-5 align-middle table-row-dashed table-row-gray-300 fs-6 mb-0 mt-10" id="kt_roles_view_table">
        <!--begin::Table head-->
        <thead>
            <!--begin::Table row-->
            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0 border-bottom border-gray-200">
                <th class="">#</th>
                <th class="">Course Title</th>
                <th class="">Domain</th>
                <th class="mw-25">Status</th>
            </tr>
            <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="fw-bold">
            @php $count = 0; @endphp
            @foreach($courses as $item)
            @php $count++; @endphp
            <tr>
                <!--begin::ID-->
                <td>{{$count}}.</td>
                <!--begin::User=-->
                <td>
                    <!--begin::User details-->
                    <div class="d-flex flex-column">
                        <span class="text-gray-800 text-hover-primary mb-1">{{$item->course->title}}</span>
                        <span class="text-gray-400 fs-7">{{date("d M Y",strtotime($item->course->start_date))}} - {{date("d M Y",strtotime($item->course->end_date))}}</span>
                    </div>
                    <!--begin::User details-->
                </td>
                <!--end::user=-->
                <td>
                    <span class="text-primary">{{$item->course->domain->name??''}}</span>
                </td>
                <td>
                   <div class="d-flex flex-column">
                    <span class="{{($item->attendance_id==4||$item->status_id==1)?'':'text-danger'}}">{{$item->attendance->name??$item->status->name??'Pending'}}</span>
                    @if($item->reason!='')
                    <span class="text-gray-400 fs-7">Reason:</span><span class="fs-7">{{$item->reason}}</span>
                    @endif
                    </div>
                </td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
$("[name='course_complete'").on('change', function (e) {
    $('.loading').attr("data-kt-indicator", "on");
    $(this).closest('form').submit();

});
</script>