@extends('layouts.admin')
@section('title','Sliders')
@section('content-main')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
                <div class="d-lg-flex">
                    <div>
                        <h5 class="mb-0">Sliders</h5>
                        {{-- <p class="text-sm mb-0">
                        A lightweight, extendable, dependency-free javascript HTML table plugin.
                        </p> --}}
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto">
                        <a href="{{ route('admin.sliders.create') }}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Create Slider</a>
                        {{-- <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#import">
                        Import
                        </button>
                        <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog mt-lg-10">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                    <i class="fas fa-upload ms-3" aria-hidden="true"></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <p>You can browse your computer for a file.</p>
                                    <input type="text" placeholder="Browse file..." class="form-control mb-3" onfocus="focused(this)" onfocusout="defocused(this)">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="importCheck" checked="">
                                        <label class="custom-control-label" for="importCheck">I accept the terms and conditions</label>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn bg-gradient-primary btn-sm">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="table-responsive">
                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-top">
                        <div class="dataTable-dropdown">
                            <label>
                                <select class="dataTable-selector">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select>
                                entries per page
                            </label>
                        </div>
                        <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
                        </div>
                        <div class="dataTable-container">
                        <table class="table table-flush dataTable-table" id="products-list">
                            <thead class="thead-light">
                                <tr>
                                    <th data-sortable="" style="width: 35.9338%;"><a href="#" class="dataTable-sorter">Title</a></th>
                                    <th data-sortable="" style="width: 13.948%;"><a href="#" class="dataTable-sorter">Description</a></th>
                                    <th data-sortable="" style="width: 10.8747%;"><a href="#" class="dataTable-sorter">Status</a></th>
                                    <th data-sortable="" style="width: 15.4846%;"><a href="#" class="dataTable-sorter">Action</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($slider)>0)
                                @foreach($slider as $list)
                                <tr>
                                    <td>
                                    <div class="d-flex">
                                        {{-- <div class="form-check my-auto">
                                            <input class="form-check-input" type="checkbox" id="customCheck1" checked="">
                                        </div> --}}
                                        <img class="w-10 ms-3" src="{{ asset($list->image) }}" alt="{{ $list->heading }}">
                                        <h6 class="ms-3 my-auto">{{ $list->heading }}</h6>
                                    </div>
                                    </td>
                                    <td class="text-sm">{{ $list->description }}</td>
                                    <td class="text-sm">
									<span data-id="{{ $list->id }}" class="badge slider_status {{ ($list->status=='1') ? 'bg-gradient-success':'bg-gradient-danger' }} rounded-pill">{{ ($list->status=='1')?'Enable':'disable' }}</span></td>

                                    <td class="text-sm">
                                    <a href="{{ route('admin.sliders.show',$list->id) }}" data-bs-toggle="tooltip" data-bs-original-title="Preview slider">
                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('admin.sliders.edit',$list->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit slider">
                                    <i class="fas fa-edit text-secondary" aria-hidden="true"></i>
                                    </a>
                                    <span data-toggle="modal" data-target="modal" data-target="#smallModal" id="delet_btn">
                                            <a href="javascript:;" data-bs-toggle="tooltip" id="smallButton" data-bs-original-title="Delete slider"
                                            data-attr="{{ URL::to('admin/sliders/delete/'.$list->id) }}">
                                            <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                    </span>

                                    </a>
                                    </td>
                                </tr>

                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content bg-danger">

                                    <div class="modal-body" id="smallBody">
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Showing {{($slider->currentpage()-1)*$slider->perpage()+1}} to {{$slider->currentpage()*$slider->perpage()}} of {{$slider->total()}} entries</div>
                        {{-- <nav class="dataTable-pagination">
                            <ul class="dataTable-pagination-list">
                                <li class="pager"><a href="#" data-page="1">‹</a></li>
                                <li class="active"><a href="#" data-page="1">1</a></li>
                                <li class=""><a href="#" data-page="2">2</a></li>
                                <li class=""><a href="#" data-page="3">3</a></li>
                                <li class="pager"><a href="#" data-page="2">›</a></li>
                            </ul>
                        </nav> --}}
                        {{ $slider->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('scripts')
<script>
    $('document').ready(function()
    {
        $('.slider_status').on('click',function()
        {
            var status = ($(this).hasClass("bg-gradient-success"))? '0' : '1';
			var msg = (status=='0')? 'Disabled' : 'Enable';
			var Id = $(this).attr('data-id');
            console.log(status);
            console.log(msg);
            console.log(Id);
            bootbox.dialog({
				message: "Are you sure you want to "+msg+"?",
                closeButton: false,
				title: "<i class='fa fa-eye'></i> Active !",
				buttons: {
					success: {
						  label: "<i class='fa fa-remove'></i> No",
						  className: "btn-success",
						  callback: function() {
						  $('.bootbox').modal('hide');
					  }
					},
					danger: {
					  label: "<i class='fa fa-check'></i> Yes!",
					  className: "btn-danger",
					  callback: function() {
					   $.ajax({
							type: 'GET',
							url: "{{ route('admin.sliderstatus') }}",
							data: {activeid:Id,status:status},
					   }).done(function(response){
							//location.reload();
                            if(response.status == true)
							{
                                toastr.success(response.message);
								$(".status").show();
								$('.bootbox').fadeOut('slow');
                                setTimeout(function()
                                {
                                    location.reload();
                                },3000);
							}
					   })
					   .fail(function(){
							bootbox.alert('Error....');
					   })
					  }
					}
				}
		   });
        });
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();

            let href = $(this).attr('data-attr');
            console.log(href);
            $.ajax({
                url: href
                , beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#smallModal').modal("show");
                    $('#smallBody').html(result).show();
                }
                , complete: function() {
                    $('#loader').hide();
                }
                // , error: function(jqXHR, testStatus, error) {
                //     console.log(error);
                //     alert("Page " + href + " cannot open. Error:" + error);
                //     $('#loader').hide();
                // }
                , timeout: 8000
            });
        });
    });
</script>
@endsection
