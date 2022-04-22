@extends('layouts.admin')

@section('content-main')
    {{-- <div class="container-fluid py-4">

</div> --}}
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
                <div class="d-lg-flex">
                    <div>
                        <h5 class="mb-0">Category</h5>
                        {{-- <p class="text-sm mb-0">
                   A lightweight, extendable, dependency-free javascript HTML table plugin.
                </p> --}}
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto">
                            <a href="{{ route('admin.category.create') }}"
                                class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Create Category</a>
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
                            <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..."
                                    type="text"></div>
                        </div>
                        <div class="dataTable-container">
                            <table class="table table-flush dataTable-table" id="products-list">
                                <thead class="thead-light">
                                    <tr>
                                        <th data-sortable="" style="width: 35.9338%;"><a href="#"
                                                class="dataTable-sorter">Category Name</a></th>
                                        <th data-sortable="" style="width: 13.948%;"><a href="#"
                                                class="dataTable-sorter">Link</a></th>
                                        <th data-sortable="" style="width: 10%;">
                                            <a href="#" class="dataTable-sorter">Is
                                                Parent</a>
                                        </th>
                                        <th data-sortable="" style="width: 10%;">
                                            <a href="#" class="dataTable-sorter">Parent Category</a>
                                        </th>
                                        <th data-sortable="" style="width: 10.8747%;">
                                            <a href="#" class="dataTable-sorter">Status</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.4846%;"><a href="#"
                                                class="dataTable-sorter">Action</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($category) > 0)
                                        @foreach ($category as $list)
                                            <tr>
                                                <td>

                                                    <h6 class="ms-3 my-auto">{{ $list->cate_name }}</h6>
                                                </td>
                                                <td class="text-sm">{{ $list->slug }}</td>
                                                <td class="text-sm">{{ $list->is_parent ? 'Yes' : 'No' }}</td>
                                                <td class="text-sm">
                                                    {{ $list->parent_info->cate_name ?? '' }}
                                                </td>
                                                <td class="text-sm">
                                                    <span data-id="{{ $list->id }}"
                                                        class="badge slider_status {{ $list->status == '1' ? 'bg-gradient-success' : 'bg-gradient-danger' }} rounded-pill">{{ $list->status == '1' ? 'Enable' : 'disable' }}</span>
                                                </td>

                                                <td class="text-sm">
                                                    <a href="{{ route('admin.category.show', $list->id) }}"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Preview Category">
                                                        <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{ route('admin.category.edit', $list->id) }}"
                                                        class="mx-3" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit Category">
                                                        <i class="fas fa-edit text-secondary" aria-hidden="true"></i>
                                                    </a>
                                                    <span data-toggle="modal" data-target="modal" data-target="#smallModal"
                                                        id="delet_btn">
                                                        <a href="javascript:;" data-bs-toggle="tooltip" id="smallButton"
                                                            data-bs-original-title="Delete Category"
                                                            data-attr="{{ URL::to('admin/category/delete/' . $list->id) }}">
                                                            <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                    </span>

                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog"
                                aria-labelledby="smallModalLabel" aria-hidden="true">
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
                            <div class="dataTable-info">Showing
                                {{ ($category->currentpage() - 1) * $category->perpage() + 1 }} to
                                {{ $category->currentpage() * $category->perpage() }} of {{ $category->total() }}
                                entries
                            </div>

                            {{ $category->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('scripts')
    <script>
        $('document').ready(function() {
            $('.slider_status').on('click', function() {
                var status = ($(this).hasClass("bg-gradient-success")) ? '0' : '1';
                var msg = (status == '0') ? 'Disabled' : 'Enable';
                var Id = $(this).attr('data-id');
                console.log(status);
                console.log(msg);
                console.log(Id);
                bootbox.dialog({
                    message: "Are you sure you want to " + msg + "?",
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
                                        url: "{{ route('admin.category.catstatus') }}",
                                        data: {
                                            activeid: Id,
                                            status: status
                                        },
                                    }).done(function(response) {
                                        //location.reload();
                                        //console.log(response);
                                        if (response.status == true) {
                                            toastr.success(response.message);
                                            $(".status").show();
                                            $('.bootbox').fadeOut('slow');
                                            setTimeout(function() {
                                                location.reload();
                                            }, 3000);
                                        }
                                    })
                                    .fail(function() {
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
                    url: href,
                    beforeSend: function() {
                        $('#loader').show();
                    },
                    // return the result
                    success: function(result) {
                        $('#smallModal').modal("show");
                        $('#smallBody').html(result).show();
                    },
                    complete: function() {
                            $('#loader').hide();
                        }
                        // , error: function(jqXHR, testStatus, error) {
                        //     console.log(error);
                        //     alert("Page " + href + " cannot open. Error:" + error);
                        //     $('#loader').hide();
                        // }
                        ,
                    timeout: 8000
                });
            });
        });
    </script>
@endsection
