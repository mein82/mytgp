@foreach($users as $item) 
<!--begin::User-->
<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="{{$item->id}}">
<!--begin::Details-->
<div class="d-flex align-items-center">
	<!--begin::Checkbox-->
	<label class="form-check form-check-custom form-check-solid me-5">
		<input class="form-check-input" type="checkbox" name="users[]" data-kt-check="true" data-kt-check-target="[data-user-id='{{$item->id}}']" value="{{$item->id}}" />
	</label>
	<!--end::Checkbox-->
	<!--begin::Avatar-->
	<div class="symbol symbol-35px symbol-circle">
		@if($item->avatar !='default.png')
		<img alt="Pic" src="{{url('')}}/photo/{{$item->avatar}}" />
		@else
		<span class="symbol-label bg-light-danger text-danger fw-bold">{{substr($item->name, 0,1)}}</span>
		@endif
	</div>
	<!--end::Avatar-->
	<!--begin::Details-->
	<div class="ms-5">
		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">{{$item->name}}</a>
		<div class="fw-bold text-muted">{{$item->email}}</div>
	</div>
	<!--end::Details-->
</div>
<!--end::Details-->
<!--begin::Access menu-->
<div class="ms-2 w-50">
	<div class="fw-bold">{{$item->organization}}</div>
	<div class="fw-bold text-muted">{{$item->contactno}}</div>

</div>
<!--end::Access menu-->
<div class="ms-2">
@if($item->talent)
	<div class="badge badge-light-success fw-bold">Cohort {{$item->talent->status->cohort}}</div>
@else
	<span class="badge badge-light-success mb-1">Applicant</span>
@endif
</div>
</div>
<!--end::User-->
<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
@endforeach