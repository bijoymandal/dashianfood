@extends('layouts.admin')
@section('title','admin Dashboard')
@section('content-main')
<div class="container-fluid py-4" style="height:150vh;">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
           <div class="card">
              <div class="card-body p-3">
                 <div class="row">
                    <div class="col-8">
                     <a href="{{ route('admin.category.index') }}">
                        <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">Category</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{-- {{ count($category) }} --}}
                                category
                            </h5>
                       </div>
                    </a>
                    </div>
                    <div class="col-4 text-end">
                       <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                          <i class="ni ni-bullet-list-67 text-lg opacity-10" aria-hidden="true"></i>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
</div>
@endsection
