@extends('layouts.admin')
@section('content-main')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="forms-sample" action="{{ route('admin.updatepass') }}" method="POST">
                    {{-- @method('PATCH') --}}
                    @csrf
                    <div class="form-group">
                        <input type="password" name="currentpassword" placeholder="Current Password" class="form-control @error('currentpassword') is-invalid @enderror"/>
                        @error('currentpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="New Password" class="form-control @error('password') is-invalid @enderror"/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control @error('confirmpassword') is-invalid @enderror"/>
                        @error('confirmpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="float-right">
                        <button class="btn btn-warning px-2 py-2 text-dark" type="submit">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
