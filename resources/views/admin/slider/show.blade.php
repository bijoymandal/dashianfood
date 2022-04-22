@extends('layouts.admin')
@section('content-main')
<div class="col-12">
    <div class="card">
       <!-- Card header -->
       <div class="card-header pb-0">
          <div class="d-lg-flex">
             <div>
                <h5 class="mb-0">Sliders</h5>
             </div>
             <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="{{ route('admin.sliders.index') }}" class="btn bg-gradient-danger btn-sm mb-0">+&nbsp; Back</a>
                </div>
              </div>
          </div>

       </div>
       <div class="card-body px-0 pb-0">
           <table class="table">
               <tbody>
                   <tr>
                       <th>Title</th>
                       <td>{{ $slider->heading }}</td>
                   </tr>
                   <tr>
                       <th>Description</th>
                       <td>{{ $slider->description }}</td>
                       <td>
                           <img src="{{ asset($slider->image) }}" width="200px;" alt="">
                       </td>
                   </tr>
               </tbody>
           </table>
       </div>
    </div>
@endsection
