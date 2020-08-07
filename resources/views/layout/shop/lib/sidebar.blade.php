<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">

                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ route('shop.dashboard') }}" data-toggle="collapse"
                           aria-expanded="false"
                           data-target="#submenu-1"><i class="fa fa-home"></i>Dashboard </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-customer" aria-controls="submenu-customer"><i
                                class="fas fa-fw fa-users"></i>Customer</a>
                        <div id="submenu-customer" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('shop.customer.index') }}">Customer List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('shop.customer.create') }}">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-product" aria-controls="submenu-product"><i
                                class="fas fa-fw fa-list"></i>Product</a>
                        <div id="submenu-product" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('shop.product.index') }}">Product List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('shop.product.create') }}">Add Product</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-order" aria-controls="submenu-order"><i
                                class="fas fa-fw fa-list"></i>Order</a>
                        <div id="submenu-order" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('shop.order.index') }}">Order List</a>
                                </li>

                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
