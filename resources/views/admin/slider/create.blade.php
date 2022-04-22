@extends('layouts.admin')
@section('title', 'Sliders')
@section('content-main')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Slider create</h4>
                        <a href="{{ url()->previous() }}" class="btn bg-gradient-danger btn-sm mb-0"
                            style="float: right;">Back</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.sliders.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="heading" placeholder="slider heading"
                                                class="form-control @error('heading') is-invalid @enderror" />
                                            @error('heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">short description</label>
                                        <div class="col-sm-8">
                                            {{-- <input type="text" name="description" /> --}}
                                            <textarea type="text" id="description" name="description" placeholder="slider description"
                                                class="form-control @error('description') is-invalid @enderror" cols="8"
                                                rows="8"></textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">slider image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="image"
                                                class="form-control @error('image') is-invalid @enderror" />
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                            <select name="status" class="form-control">
                                                <option value="1">Enabled</option>
                                                <option value="0">Disabled</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-8 col-offset-4 align-middle">
                                            <button type="submit" class="btn btn-xs btn-success float-right">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/summernote/summernote.min.css') }}" />
@endpush
@push('scripts')
    <script src="{{ asset('backend/assets/summernote/summernote.min.js') }}"> </script>
    <scropt>
        $(document).ready(function()
        {
            $('#description').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 120
            });
        });
    </scropt>
@endpush
