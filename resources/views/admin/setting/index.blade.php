@extends('layouts.admin')
@section('title','Setting')
@section('content-main')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                       <div>
                          <h5 class="mb-0">Setting</h5>
                          {{-- <p class="text-sm mb-0">
                             A lightweight, extendable, dependency-free javascript HTML table plugin.
                          </p> --}}
                       </div>
                    </div>
                </div>
                <div class="card-body nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link mb-0 px-0 py-1 active" id="webtitle-tab" data-bs-toggle="tab" data-bs-target="#webtitle" type="button" role="tab" aria-controls="webtitle" aria-selected="true">WebTitle</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link mb-0 px-0 py-1" id="logo-tab" data-bs-toggle="tab" data-bs-target="#logo" type="button" role="tab" aria-controls="logo" aria-selected="false">Logo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mb-0 px-0 py-1" id="favicon-tab" data-bs-toggle="tab" data-bs-target="#favicon" type="button" role="tab" aria-controls="favicon" aria-selected="false">favicon</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link mb-0 px-0 py-1" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">Social Links</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mb-0 px-0 py-1" id="office-tab" data-bs-toggle="tab" data-bs-target="#office" type="button" role="tab" aria-controls="office" aria-selected="false">office Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mb-0 px-0 py-1" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">Currency Symbol</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="webtitle" role="tabpanel" aria-labelledby="webtitle-tab">
                            <div class="row">
                                <div class="col-md-12">

                                    <form action="{{ route('admin.setting.webcontent') }}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="row mt-2 mb-2">
                                            <label for="webcontent" class="col-sm-2 col-form-label">Website Title</label>

                                            <div class="col-md-10 col-sm-6 col-lg-10">
                                                <input type="text" id="webcontent" name="webtitle" class="form-control" value="{{$setting[0]->webtitle}}">
                                                @error('webtitle')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning text-dark">Update</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">Current Logo</label>
                                        <div class="col-sm-6 col-lg-12 col-md-12" style="background-color:#333;">
                                            <div>
                                                <img src="{{asset($setting[0]->logo)}}" alt="{{ $setting[0]->webtitle }}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('admin.setting.updatelogo') }}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group row mt-2 justify-content-center">
                                            <label class="col-sm-2 col-form-label">Update Logo</label>

                                            <div class="custom-file">
                                                <input type="file" class="form-control" name="logo" accept="image/*"/>
                                                @error('logo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning text-dark">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="favicon" role="tabpanel" aria-labelledby="favicon-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row mt-2 justify-content-center">
                                        <label class="col-sm-2 col-form-label">Current favicon</label>
                                        <div class="col-sm-6">
                                            <div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="{{asset($setting[0]->favicon)}}" alt="{{ $setting[0]->favicon }}" width="100px;">
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('admin.setting.updatefavicon') }}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group row mt-2 justify-content-center">
                                            <label class="col-sm-2 col-form-label">Update Fabiocn</label>

                                            <div class="custom-file">
                                                <input type="file" class="form-control" name="favicon" accept="image/*"/>
                                                @error('favicon')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning text-dark">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                            <form action="{{ route('admin.setting.sociallink') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group row mt-3">
                                    <label class="col-sm-2 col-form-label">Facebook link</label>
                                    <div class="col-sm-6">
                                        <input type="url" name="facebook_link" class="form-control" value="{{ $setting[0]->facebook_link }}" placeholder="facebook link"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Twitter link</label>
                                    <div class="col-sm-6">
                                        <input type="url" name="twitter_link" class="form-control" value="{{ $setting[0]->twitter_link }}" placeholder="Twitter link"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Youtube link</label>
                                    <div class="col-sm-6">
                                        <input type="url" name="youtube_link" class="form-control" value="{{ $setting[0]->youtube_link }}" placeholder="Youtube link"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Instragram link</label>
                                    <div class="col-sm-6">
                                        <input type="url" name="instragram_link" class="form-control" value="{{ $setting[0]->instragram_link }}" placeholder="instragram_link"/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning text-dark">Update</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                            <form action="{{ route('admin.setting.officeinfo') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group row mt-3">
                                    <label class="col-sm-2 col-form-label">Office Address</label>
                                    <div class="col-sm-6">
                                        <textarea name="address" id="" cols="20" rows="10" class="form-control">{{ $setting[0]->address }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="contact" class="form-control" value="{{ $setting[0]->contact }}" placeholder="phone Number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="office_mail" class="form-control" value="{{ $setting[0]->office_mail }}" placeholder="Email address"/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning text-dark">Update</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
                            <form action="{{ route('admin.setting.currencysml') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group row mt-3">
                                    <label class="col-sm-3 col-form-label">Currency Symbol 1 </label>
                                    <div class="col-sm-6">
										<input type="text" name="currency_sign" class="form-control" value="{{ $setting[0]->currency_sign }}" placeholder="Currency"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Currency Symbol 2</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="currency_sign2" class="form-control" value="{{ $setting[0]->currency_sign2 }}" placeholder="Currency symbol 2 "/>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-warning text-dark">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

