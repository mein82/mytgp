
	@foreach($users as $item) 
<!--begin::User-->
<tr>
    <!--begin::ID-->
    <!--begin::User=-->
    <td>
    	<div class="d-flex align-items-center">
	<!--begin::Checkbox-->
	<!-- <label class="form-check form-check-custom form-check-solid me-5">
		<input class="form-check-input" type="checkbox" name="users[]" data-kt-check="true" data-kt-check-target="[data-user-id='{{$item->id}}']" value="{{$item->id}}" />
	</label> -->
	<input type="hidden" name="user_id[]" value="{{$item->id}}">
	<!--end::Checkbox-->
	<!--begin::Avatar-->
	<div class="symbol symbol-35px symbol-circle">
		@if($item->avatar !='default.png')
		<img alt="{{substr($item->name, 0,1)}}" src="{{url('')}}/photo/{{$item->avatar}}" />
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
</td>
<td>
<!--end::Details-->
<!--begin::Access menu-->
	<div class="fw-bold">{{$item->organization}}</div>
	<div class="fw-bold text-muted">{{$item->contactno}}</div>

</td>
<!--end::Access menu-->
<td class="text-end"><button type="button" class="btn btn-light-danger btn-icon remove_super" id="kt_button_1" data-id="{{$item->id}}">
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
                </button></div>
</td></tr>
@endforeach
