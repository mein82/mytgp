<!--begin::Row-->
<div class="row mt-10">
    <!--begin::Col-->
    <div class="col-lg-12 mb-10 mb-lg-0">
        
        @php $i=0; @endphp
        @foreach($category as $cat)
        <div class="separator separator-content  mb-15 border-primary"><span class="w-300px fw-bolder">{{$cat->name}} ({{$cat->code}})</span></div>
        <div class="rounded border pt-10 px-10">
        @foreach($cat->logbook as $log)
        @php $i++; @endphp
        <div class="mb-10 fv-row">
            <!--begin::Row-->
            <div class="row mb-2" data-kt-buttons="true">
            <div class="col-2">
<span class="text-gray-600 fw-bold">{{$log->item}}</span>
            </div>
            <div class="col-6 pe-20">
            <!--begin::Label-->
            <label class="d-flex align-items-center form-label"><span class="bullet bullet-vertical me-5"></span>{{$log->remark}}
            </label>
            <!--end::Label-->
            </div>
            <div class="col">
                <div class="row fv-row">
                <!--begin::Col-->
                @for ($i=1;$i<=5;$i++) 
                @php $q = 'q'.$log->id; @endphp 
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-outline-info btn-active-light-info w-100 mt-3 p-2 @if($logbook->$q == $i) active @endif disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Below Expectation">
                        <input type="radio" class="btn-check" name="q{{$log->id}}" value="{{$i}}" />
                        <span class="fw-bolder fs-5">{{$i}}</span>
                    </label>
                    <!--end::Option-->
                </div>
                @endfor
                <!--end::Col-->
            </div>
            <!--end::Row-->
            </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        @endforeach
        </div>
        <div class="mb-5">&nbsp;</div>
        @endforeach
    </div>
</div>
<!--end::Row-->