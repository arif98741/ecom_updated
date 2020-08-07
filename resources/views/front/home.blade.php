@extends('layout.front.front')
@section('title','Home')
@section('content')
    @include('layout.front.lib.banner.main-banner')
    @include('layout.front.lib.banner.secondary-banner')
    <div id="center">
        <div class="container">
            <div class="row">
                <div class="content col-sm-12">
                    <div class="customtab">
                        <h3 class="productblock-title">For Your Best Look</h3>
                        <div id="tabs" class="customtab-wrapper">
                            <ul class='customtab-inner'>
                                <li class='tab'><a href="#tab-furnitur">Popular</a></li>
                                <li class='tab'><a href="#tab-livin">Best Sellers</a></li>
                                <li class='tab'><a href="#tab-kitche">Specials</a></li>
                                <li class='tab'><a href="#tab-outdoo">New product</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- tab-furniture-->
                    <div id="tab-furnitur" class="tab-content">
                        <div class="row">
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product1.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product1-1.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product2.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product2-2.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart">Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product3.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product3-3.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product4.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product4-4.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product5.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product5-5.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product6.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product6-6.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product7.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product7-7.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product8.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product8-8.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewmore">
                                <div class="btn">View More All Products</div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-living-->
                    <div id="tab-livin" class="tab-content">
                        <div class="row">
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product10.jpg')}}"
                                                    alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product10-10.jpg')}}"
                                                    alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product9.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product9-9.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart">Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product8.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product3-3.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product7.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product4-4.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product6.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product5-5.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product5.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product6-6.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product4.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product7-7.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product3.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product8-8.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewmore">
                                <div class="btn">View More All Products</div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-living-->
                    <div id="tab-kitche" class="tab-content">
                        <div class="row">
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product2.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product1-1.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product1.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product2-2.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart">Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product10.jpg')}}"
                                                    alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product3-3.jpg')}}"
                                                    alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product8.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product4-4.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product7.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product5-5.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product9.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product6-6.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product4.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product7-7.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"><a href="product.html"> <img
                                                    src="{{ asset('asset/front/image/product/product3.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> <img
                                                    src="{{ asset('asset/front/image/product/product8-8.jpg')}}"
                                                    alt="iPod Classic" title="iPod Classic"
                                                    class="img-responsive"/> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wish List"><i
                                                            class="fa fa-heart-o"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="compare" data-toggle="tooltip"
                                                            data-placement="top" title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="quick-view" data-toggle="tooltip"
                                                            data-placement="top" title="Quick View"><i
                                                            class="fa fa-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to
                                                        Cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                        class="fa fa-star fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                    Shirt With Ruffle Hem</a></h4>
                                            <p class="price product-price">$122.00<span
                                                    class="price-tax">Ex Tax: $100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewmore">
                                <div class="btn">View More All Products</div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-decor-->
                    <div id="tab-outdoo" class="tab-content">
                        <div class="row">

                            @foreach($new_products as $new_product)
                                <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"><a href="product.html"> <img
                                                        src="{{ asset('uploads/product/thumbnail/'.$new_product->fea_image1) }}"
                                                        alt="{{ url('/') }} {{ $new_product->product_name }}" title="{{ $new_product->product_name }}"
                                                        class="img-responsive"/> <img
                                                        src="{{ asset('uploads/product/feature/'.$new_product->fea_image1) }}"
                                                        alt="{{ url('/') }} {{ $new_product->product_name }}" title="{{ $new_product->product_name }}"
                                                        class="img-responsive"/> </a>
                                                <ul class="button-group">
                                                    <li>
                                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" title="Add to Wish List"><i
                                                                class="fa fa-heart-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="compare" data-toggle="tooltip"
                                                                data-placement="top" title="Compare this Product"><i
                                                                class="fa fa-exchange"></i></button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                class="fa fa-eye"></i></button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="addtocart-btn" title="Add to Cart">
                                                            Add to Cart
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="caption product-detail">
                                                <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i><i
                                                            class="fa fa-star fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                            class="fa fa-star fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                            class="fa fa-star fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                            class="fa fa-star fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <h4 class="product-name"><a href="#"
                                                                            title="{{ $new_product->product_name }}">{{ $new_product->product_name }}</a></h4>
                                                <p class="price product-price">{{ $new_product->sale_price }}.00tk<span
                                                        class="price-tax">Ex Tax: $100.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="viewmore">
                                <div class="btn">View More All Products</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--testimonial--}}
    {{--@include('layout.front.lib._extra.testimonial')--}}
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">Featured Products</h3>
                    <h4 class="title-subline">What’s so special? Check it out!</h4>
                </div>
                <div id="tab-furniture" class="tab-content">
                    <div id="special-slidertab" class="row owl-carousel product-slider">
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"><a href="product.html"> <img
                                            src="{{ asset('asset/front/image/product/product2.jpg')}}"
                                            alt="iPod Classic"
                                            title="iPod Classic"
                                            class="img-responsive"/> <img
                                            src="{{ asset('asset/front/image/product/product2-2.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic"
                                            class="img-responsive"/> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i class="fa fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt
                                            With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"><a href="product.html"> <img
                                            src="{{ asset('asset/front/image/product/product3.jpg')}}"
                                            alt="iPod Classic"
                                            title="iPod Classic"
                                            class="img-responsive"/> <img
                                            src="{{ asset('asset/front/image/product/product3-3.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic"
                                            class="img-responsive"/> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i class="fa fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                    <h4 class="product-name"><a href="#" title="{{ $new_product->product_name }}">{{ $new_product->product_name }}</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"><a href="product.html"> <img
                                            src="{{ asset('asset/front/image/product/product4.jpg')}}"
                                            alt="iPod Classic"
                                            title="iPod Classic"
                                            class="img-responsive"/> <img
                                            src="{{ asset('asset/front/image/product/product4-4.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic"
                                            class="img-responsive"/> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i class="fa fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt
                                            With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"><a href="product.html"> <img
                                            src="{{ asset('asset/front/image/product/product5.jpg')}}"
                                            alt="iPod Classic"
                                            title="iPod Classic"
                                            class="img-responsive"/> <img
                                            src="{{ asset('asset/front/image/product/product5-5.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic"
                                            class="img-responsive"/> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i class="fa fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt
                                            With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"><a href="product.html"> <img
                                            src="{{ asset('asset/front/image/product/product6.jpg')}}"
                                            alt="iPod Classic"
                                            title="iPod Classic"
                                            class="img-responsive"/> <img
                                            src="{{ asset('asset/front/image/product/product6-6.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic"
                                            class="img-responsive"/> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i class="fa fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt
                                            With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"><a href="product.html"> <img
                                            src="{{ asset('asset/front/image/product/product7.jpg')}}"
                                            alt="iPod Classic"
                                            title="iPod Classic"
                                            class="img-responsive"/> <img
                                            src="{{ asset('asset/front/image/product/product7-7.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic"
                                            class="img-responsive"/> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i class="fa fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt
                                            With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
