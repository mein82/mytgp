<x-app-layout activemenu="">

<x-slot name="header">
Recommendation List
</x-slot>

<div class="row g-6 g-xl-9">
	<!--begin::Col-->
	<div class="col-md-12 col-xxl-12">
<!--begin::Card-->
	<div class="card card-flush">
		<!--begin::Card body-->
		<div class="card-body pt-0">
			<!--begin::Table container-->
			<div class="table-responsive">
				<!--begin::Table-->
				<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
					<!--begin::Head-->
					<thead class="fs-7 text-gray-400 text-uppercase">
						<tr>
							<th class="min-w-250px">Applicant</th>
							<th class="min-w-250px">Position</th>
							<th class="min-w-150px">Recommendation</th>
							<th class="min-w-90px">Assessment</th>
						</tr>
					</thead>
					<!--end::Head-->
					<!--begin::Body-->
					<tbody class="fs-6">
						@foreach($recommendation as $item)
						@php $i=0; @endphp
						<tr>
							<td>
								<!--begin::User-->
								<div class="d-flex align-items-center">
									<!--begin::Wrapper-->
									<div class="me-5 position-relative">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											@if($item->talent->user->avatar !='default.png')
											<img alt="Pic" src="{{url('')}}/photo/{{$item->talent->user->avatar}}" />
											@else
											<span class="symbol-label bg-light-danger text-danger fw-bold">{{substr($item->talent->user->name, 0,1)}}</span>
											@endif
										</div>
										<!--end::Avatar-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Info-->
									<div class="d-flex flex-column justify-content-center">
										<a href="" class="mb-1 text-gray-800 text-hover-primary">{{$item->talent->user->name}}</a>
										<div class="fw-bold fs-6 text-gray-400">{{$item->talent->user->email}}</div>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
							</td>
							<td>
								<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">{{$item->talent->user->designation
								}}</a>
								<span class="text-muted fw-bold text-muted d-block fs-7">{{$item->talent->user->organization}}</span>
							</td>
							<td>
								@if (is_null($item->status_id)) @php $i++; @endphp<a href="{{url('recommendation/'.$item->id)}}"  class="badge badge-light-danger fw-bolder px-4 py-3">Click here</a>
								@else <a href="{{url('recommendation/view/'.$item->id)}}" class="badge badge-light-success fw-bolder px-4 py-3">Completed</a> @endif

							</td>
							<td>
								@if (!is_null($item->status_id))
								@if (!getRefLog($item->referee_id, $item->talent_id)) @php $i++; @endphp<a href="{{url('referee/logbook/'.$item->talent_id)}}" class="badge badge-light-danger fw-bolder px-4 py-3">Click here</a>
								@else <a href="{{url('referee/'.$item->referee_id.'/view/logbook/'.$item->talent_id)}}" class="badge badge-light-success fw-bolder px-4 py-3">Completed</a> @endif
								@endif
							</td>
							
						</tr>
						@endforeach
					</tbody>
					<!--end::Body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Table container-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
	</div>
</div>


</x-app-layout>