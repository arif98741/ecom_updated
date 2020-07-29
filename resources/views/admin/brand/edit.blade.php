@extends('layout.admin.admin')
@section('title','Edit Brand')
@section('content')
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">{{ env('APP_NAME') }} </h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                                               class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Brand
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-6 col-md-8 col-sm-12 col-12">
                <div class="section-block" id="basicform" tabindex="-1">
                    <h3 class="section-title">Edit Brand</h3>
                </div>
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('admin.brand.update',$brand->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Brand Name</label>
                                        <input id="inputText3" name="brand_name"
                                               value="{{ (!empty(old('brand_name'))) ? old('brand_name'): $brand->brand_name }}"
                                               type="text" class="form-control">
                                        @error('brand_name')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Address</label>
                                        <input id="inputText3" name="address"
                                               value="{{ (!empty(old('address'))) ? old('address'): $brand->address }}"
                                               type="text"
                                               class="form-control">
                                        @error('address')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Mobile</label>
                                        <input id="input Text3" name="mobile"
                                               value="{{ (!empty(old('mobile'))) ? old('mobile'): $brand->mobile }}"
                                               type="text"
                                               class="form-control">
                                        @error('mobile')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-primary btn-btn-sm">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
