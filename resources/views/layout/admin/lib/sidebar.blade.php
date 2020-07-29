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
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}" data-toggle="collapse"
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
                                    <a class="nav-link" href="{{ route('admin.customer.index') }}">Customer List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.customer.create') }}">Data Tables</a>
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
                                    <a class="nav-link" href="{{ route('admin.product.index') }}">Product List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.product.create') }}">Add Product</a>
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
                                    <a class="nav-link" href="{{ route('admin.order.index') }}">Order List</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-category" aria-controls="submenu-category"><i
                                class="fas fa-fw fa-list"></i>Category</a>
                        <div id="submenu-category" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.category.index') }}">Category List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.category.create') }}">Add Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.sub-category.index') }}">Subcategory
                                        List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.sub-category.create') }}">Add
                                        Subcategory</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-brand" aria-controls="submenu-brand"><i
                                class="fas fa-fw fa-list"></i>Brand</a>
                        <div id="submenu-brand" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.brand.index') }}">Brand List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.brand.create') }}">Add Brand</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-color" aria-controls="submenu-color"><i
                                class="fas fa-fw fa-list"></i>Color</a>
                        <div id="submenu-color" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.color.index') }}">Color List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.color.create') }}">Add Color</a>
                                </li>

                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
