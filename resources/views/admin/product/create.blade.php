@extends('layout.admin.admin')
@section('title','Add Product')
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
                                <li class="breadcrumb-item active" aria-current="page">Add Product
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block" id="basicform" tabindex="-1">
                    {{--                    <h3 class="section-title">Add Product</h3>--}}
                </div>
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('admin.product.store') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Product Name</label>
                                            <input name="product_name"
                                                   value="{{ (!empty(old('product_name'))) ? old('product_name'): '' }}"
                                                   type="text" class="form-control">
                                            @error('product_name')
                                            <p class="text-red mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Category Name</label>
                                        <select class="form-control" id="category_dropdown" name="category_id">
                                            <option selected disabled>Select Category</option>
                                            @foreach( $categories as $category)
                                                <option
                                                    value="{{ $category->id }}" {{  !empty(old('category_id')) ? 'selected': ''}} >{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Sub Category Name</label>
                                        <select class="form-control" id="sub_category_dropdown" name="sub_category_id">
                                            <option selected disabled>Select Category</option>

                                        </select>
                                        @error('sub_category_name')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Brand</label>
                                            <select class="form-control" name="brand_id">
                                                <option selected disabled>Select Brand</option>
                                                @foreach( $brands as $brand)
                                                    <option
                                                        value="{{ $brand->id }}" {{  !empty(old('brand_id')) ? 'selected': ''}} >{{ $brand->brand_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('brand_id')
                                            <p class="text-red mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Color</label>
                                        <select class="form-control" name="color_id">
                                            <option selected disabled>Select Color</option>
                                            @foreach( $colors as $color)
                                                <option
                                                    value="{{ $color->id }}" {{  !empty(old('color_id')) ? 'selected': ''}} >{{ $color->color_name }}</option>
                                            @endforeach
                                        </select>

                                        @error('color_id')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Sub Category Name</label>
                                        <input name="sub_category_name"
                                               value="{{ (!empty(old('sub_category_name'))) ? old('sub_category_name'): '' }}"
                                               type="text" class="form-control">
                                        @error('sub_category_name')
                                        <p class="text-red mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">

                                    <button type="submit" class="btn btn-primary btn-btn-sm">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('extra-js')

        <script>
            $(document).ready(function () {
                /**
                 * get single sub category
                 */
                $('#category_dropdown').change(function () {
                    let category_id = $(this).val();
                    $.ajax({
                        'url': '{{ url('api/category/single_sub_category') }}',
                        'dataType': 'json',
                        'method': 'post',
                        'data': {
                            'category_id': category_id,
                            'token': '$2y$10$a0ysRqMZxVO/8XJCNMyAouXBvwXoj5yP8.KkiRePF3lX2dOW52llK'
                        },
                        'success': function (response) {

                            if (response.code == 200) {
                                $.each(response.data, function (key, value) {
                                    console.log(value);

                                    $('#sub_category_dropdown')
                                        .append($("<option></option>")
                                            .attr("value", value.id)
                                            .text(value.sub_category_name));

                                });

                            }

                        }, error: function (e) {
                            console.log(e);
                        }
                    })
                });
            });
        </script>
    @endpush
@endsection
