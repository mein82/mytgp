<!--begin::Accordion-->
<div class="accordion accordion-icon-toggle" id="kt_accordion_2">
	@php $i = 0 @endphp
	@foreach($project as $item)
	@php $i++; @endphp
    <!--begin::Item-->
    <div class="mb-5">
        <!--begin::Header-->
        <div class="accordion-header py-3 d-flex collapse collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_{{$i}}">
            <span class="accordion-icon"><span class="svg-icon svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
				<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
			</svg></span></span>
			<div class="d-flex flex-column text-gray-600 fs-6">
            <h4 class="fs-4 fw-bold mb-0 ms-4 text-gray-800 mb-1">{{$item->title}} <span class="badge badge-secondary ms-4">{{$item->progress->count()}} Progress</span></h4>
            <div class="ms-4 m-1">Name of Co-Investigators &amp; their workplace: <span class="text-primary">{!!nl2br($item->coinvestigator)!!}</span></div>
            <div class="ms-4 m-1">NMRR ID:<span class="badge badge-light-danger mx-4">{{$item->nmrr_id}}</span>Date of MREC approval:<span class="badge badge-light-success mx-4">{{$item->mrecapp_date}}</span></div>
        </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div id="kt_accordion_2_item_{{$i}}" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
             	<table class="table table-rounded table-striped border table-row-bordered table-row-gray-200 gy-3 gx-5">
             		<tbody>
                @php $x = 0; @endphp        
             	@foreach($item->progress as $subitem)
                @php $x++; @endphp        
             	<tr><td colspan="2" class="fw-bold fs-6">{{$x}}) {{ date("d-m-Y",strtotime($subitem->created_at))}}</td></tr>
                <tr>
             		<td class="min-w-250px">
                        <div class="d-flex flex-column fs-6">
                        
                        <span class="text-success">
                            @foreach($subitem->status as $status)
                               <li class="d-flex align-items-center py-2"><span class="bullet me-5"></span> {{$status->status->name??''}}</li>
                            @endforeach
                        </span>
                        </div>
                    </td>
             		<td>{!!nl2br($subitem->description)!!}
@if(!is_null($subitem->filename))
<br/>
<a href="{{url('project').'/'.$subitem->filename}}"  target="_blank" class="btn btn-primary btn-sm mt-2"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="black"/>
<path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="black"/>
<path d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="#C4C4C4"/>
</svg></span>Attachment</a>


@endif
             		</td>
             		<!-- <td></td> -->
				</tr>
             	@endforeach
             </tbody>
             	</table>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Item-->
    @endforeach
</div>
<!--end::Accordion-->

