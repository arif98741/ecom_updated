<!doctype html>
<html lang="en">

@include('layout.shop.lib.header')

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
@include('layout.shop.lib.navbar')
<!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
@include('layout.shop.lib.sidebar')
<!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            @yield('content')
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>

<script src="{{ asset('asset/shop/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{ asset('asset/shop/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{ asset('asset/shop/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{ asset('asset/shop/libs/js/main-js.js')}}"></script>
<!-- chart chartist js -->
<script src="{{ asset('asset/shop/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
<!-- sparkline js -->
<script src="{{ asset('asset/shop/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<!-- morris js -->
<script src="{{ asset('asset/shop/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{ asset('asset/shop/vendor/charts/morris-bundle/morris.js')}}"></script>
<!-- chart c3 js -->
<script src="{{ asset('asset/shop/vendor/charts/c3charts/c3.min.js')}}"></script>
<script src="{{ asset('asset/shop/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<script src="{{ asset('asset/shop/vendor/charts/c3charts/C3chartjs.js')}}"></script>
<script src="{{ asset('asset/shop/libs/js/dashboard-ecommerce.js')}}"></script>
@stack('extra-js')
</body>

</html>
