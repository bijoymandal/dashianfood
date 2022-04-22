@extends('layouts.admin')
@section('title', 'Category')
@section('content-main')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Category update</h4>
                        <a href="{{ url()->previous() }}" class="btn bg-gradient-danger btn-sm mb-0"
                            style="float: right;">Back</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.category.update', $category->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="cate_name" id="category_name"
                                                placeholder="category name"
                                                class="form-control @error('cate_name') is-invalid @enderror"
                                                value="{{ $category->cate_name }}" />
                                            @error('cate_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">Category link</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="slug" id="category_link" placeholder="category link"
                                                value="{{ $category->slug }}"
                                                class="form-control @error('slug') is-invalid @enderror" />
                                            @error('slug')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2 justify-content-center">
                                        {{-- <label for="is_parent">Is Parent</label><br> --}}
                                        <label class="col-sm-2 col-form-label" for="is_parent">Is Parent</label>
                                        <div class="col-sm-8">
                                            <input type="checkbox" name='is_parent' id='is_parent'
                                                value='{{ $category->is_parent }}'
                                                {{ $category->is_parent == 1 ? 'checked' : '' }}> Yes
                                        </div>
                                    </div>

                                    <div class="form-group row mt-2 justify-content-center {{ $category->is_parent == 1 ? 'd-none' : '' }}"
                                        id='parent_cat_div'>
                                        <label class="col-sm-2 col-form-label" for="parent_id">Parent Category </label>
                                        <div class="col-sm-8">
                                            <select name="parent_id" class="form-control">
                                                <option value="">Select Any Category</option>
                                                @foreach ($parent_cats as $key => $parent_key)
                                                    <option value="{{ $parent_key->id }}"
                                                        {{ $parent_key->id == $category->parent_id ? 'selected' : '' }}>
                                                        {{ $parent_key->cate_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">Category Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="image" />
                                            @error('care_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-md-8 col-offset-4 align-middle">
                                                <button type="submit"
                                                    class="btn btn-xs btn-warning text-dark float-right">Update</button>
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#category_name').keyup(function(e) {
                var str = $('#category_name').val();
                str = str.replace(/\W+(?!$)/g, '-').toLowerCase(); //rplace stapces with dash
                $('#category_link').val(str);
                $('#category_link').attr('placeholder', str);
            });
            $('#is_parent').change(function() {
                var is_checked = $('#is_parent').prop('checked');
                if (is_checked) {
                    $('#parent_cat_div').addClass('d-none');
                    $('#parent_cat_div').val('');
                } else {
                    $('#parent_cat_div').removeClass('d-none');
                }
            });
        });
    </script>
@endsection
