@extends('layouts.admin')
@section('title', 'Category')
@section('content-main')
    <div class="col-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
                <div class="d-lg-flex">
                    <div>
                        <h5 class="mb-0">Category</h5>
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto">
                            <a href="{{ route('admin.category.index') }}"
                                class="btn bg-gradient-danger btn-sm mb-0">+&nbsp; Back</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body px-0 pb-0">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $category->cate_name }}</td>
                        </tr>
                        <tr>
                            <th>Link</th>
                            <td>{{ $category->slug }}</td>

                        </tr>
                        <tr>
                            <th>Category Image</th>
                            <td>
                                @if ($category->image)
                                    <img src="{{ asset($category->image) }}" alt="{{ $category->cate_name }}" />
                                @else
                                    <img src="{{ asset('backend/assets/thumbnail-default.jpg') }}"
                                        alt="{{ $category->cate_name }}">
                                @endif
                            </td>

                        </tr>
                        <tr>
                            <th>Parent</th>
                            <td>{{ $category->is_parent == 1 ? 'Yes' : 'No' }}</td>

                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $category->parent_info->cate_name ?? '' }}</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    @endsection
