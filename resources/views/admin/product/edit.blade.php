@extends('layout.admin.admin')
@section('title','Edit Sub Category')
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
                                <li class="breadcrumb-item active" aria-current="page">Edit Sub Category
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
                    <h3 class="section-title">Edit Sub Category</h3>
                </div>
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('admin.sub-category.update',$sub_category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Category Name</label>
                                        <input name="sub_category_name"
                                               value="{{ (!empty(old('sub_category_name'))) ? old('sub_category_name'): $sub_category->sub_category_name }}"
                                               type="text" class="form-control">
                                        @error('sub_category_name')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Category Name</label>
                                        <select class="form-control" name="category_id">
                                            <option selected disabled>Select Category</option>
                                            @foreach( $categories as $category)
                                                <option
                                                    value="{{ $category->id }}" {{  !empty($category->id == $sub_category->category_id ) ? 'selected': ''}} >{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-primary btn-btn-sm">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
