@extends('layout.admin.admin')
@section('title','Brand List')
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
                                <li class="breadcrumb-item active" aria-current="page">Brand List
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @if(Session::has('success'))
                    <p class="alert alert-success" id="message">{{ Session::get('success') }}</p>
                @endif @if(Session::has('error'))
                    <p class="alert alert-warning" id="message">{{ Session::get('error') }}</p>
                @endif
                <div class="card">

                    <h5 class="card-header">Categories Table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first" id="dataTable">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Brand Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $key=> $brand)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $brand->brand_name }}</td>
                                        <td>{{ $brand->address }}</td>
                                        <td>{{ $brand->mobile }}</td>
                                        <td>{{ date('d-m-Y',strtotime($brand->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('admin.brand.edit',$brand->id) }}"
                                               class="btn btn-sm btn-primary text-white">Edit</a>
                                            <a href="{{ route('admin.brand.destroy',$brand->id) }}"
                                               onclick="event.preventDefault();
                                                   document.getElementById('vendor-delete-form{{ $brand->id }}').submit();"
                                               class="btn btn-sm btn-warning text-white">Delete</a>
                                            <form id="vendor-delete-form{{ $brand->id }}"
                                                  onclick="return(confirm('are you sure to delete?'))"
                                                  action="{{ route('admin.brand.destroy',$brand->id) }}"
                                                  method="post" style="display: none;">
                                                {{ csrf_field() }} @method('DELETE')
                                            </form>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
    </div>

    @push('extra-css')
        <link rel="stylesheet" type="text/css"
              href="{{ asset('asset/admin/vendor/datatables/css/dataTables.bootstrap4.css')}}">
    @endpush

    @push('extra-js')
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('asset/admin/vendor/datatables/js/dataTables.bootstrap4.min.js')}} "></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable({});
            });
        </script>
    @endpush
@endsection
