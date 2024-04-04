@extends('customer.layouts.main')
@section('content')
 
 <main class="main-wrapper">

        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area pt--2 bg-color-white">
            <div class="container">
                <div class="categrie-product-activation-2 categorie-product-two slick-layout-wrapper--15">
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->

        <!-- Start Slider Area -->
        <div class="axil-main-slider-area main-slider-style-5">
            <div class="container">
                <div class="slider-box-wrap">
                    <div class="slider-activation-two axil-slick-dots">
                        <div class="single-slide slick-slide">
                            <div class="main-slider-content">
                                <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                <h1 class="title">Neon Stylish Sofa Chair</h1>
                                <div class="shop-btn">
                                    <a href="shop.html" class="axil-btn btn-bg-white"><i class="fal fa-shopping-cart"></i> Shop Now</a>
                                </div>
                            </div>
                            <div class="main-slider-thumb">
                                <img src="{{asset('user/images/product/honey1.png')}}" alt="Product">
                            </div>
                        </div>
                        <div class="single-slide slick-slide">
                            <div class="main-slider-content">
                                <span class="subtitle"><i class="fas fa-fire"></i> Honey</span>
                                <h1 class="title">Honey</h1>
                                <div class="shop-btn">
                                    <a href="shop.html" class="axil-btn btn-bg-white"><i class="fal fa-shopping-cart"></i> Shop Now</a>
                                </div>
                            </div>
                            <div class="main-slider-thumb">
                                <img src="{{asset('user/images/product/honey2.png')}}" alt="Product">
                            </div>
                        </div>
                        <div class="single-slide slick-slide">
                            <div class="main-slider-content">
                                <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                <h1 class="title">Honey</h1>
                                <div class="shop-btn">
                                    <a href="shop.html" class="axil-btn btn-bg-white"><i class="fal fa-shopping-cart"></i> Shop Now</a>
                                </div>
                            </div>
                            <div class="main-slider-thumb">
                                <img src="{{asset('user/images/product/honey3.png')}}" alt="Product">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        
        <!-- Start Flash Sale Area  -->
        <div class="axil-new-arrivals-product-area fullwidth-container flash-sale-area bg-color-white axil-section-gap pb--0">
            <div class="container ml--xxl-10">
                <div class="product-area pb--50">
                    <div class="d-md-flex align-items-end flash-sale-section">
                        <div class="section-title-wrapper">
                            <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Today’s</span>
                            <h2 class="title">Flash Deals</h2>
                        </div>
                        <div class="sale-countdown countdown"></div>
                    </div>
                    <div class="new-arrivals-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="1500" src="{{asset('user/images/product/honey/honey1.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$80</span>
                                            <span class="price current-price">$60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="1500" src="{{asset('user/images/product/honey/honey2.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">20% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$40</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="1500" src="{{asset('user/images/product/honey/honey3.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">50% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30</span>
                                            <span class="price current-price">$24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="1500" src="{{asset('user/images/product/honey/honey4.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">30% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="1500" src="{{asset('user/images/product/honey/honey4.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="1500" src="{{asset('user/images/product/honey/honey4.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">50% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey Fit</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$30</span>
                                            <span class="price current-price">$24</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="1500" src="{{asset('user/images/product/honey/Honey1.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="label-block label-right">
                                        <div class="product-badget">30% OFF</div>
                                    </div>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$50</span>
                                            <span class="price current-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-four">
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="1500" src="{{asset('user/images/product/honey/honey1.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                            <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Sundarban Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price old-price">$60</span>
                                            <span class="price current-price">$50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .slick-single-layout -->
                    </div>
                </div>
            </div>
        </div>

        <!-- second Item -->

        <div class="axil-product-area axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--100">

                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-secondary"><i class="far fa-shopping-basket"></i>This Month</span>
                        <h2 class="title">Best Sellers</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="axil-product product-style-seven">
                            <div class="product-content">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </div>
                                <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy" src="{{asset('user/images/product/honey/honey1.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                </div>
                               
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Sundarban Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(64)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="axil-product product-style-seven">
                                <div class="product-content">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy" src="{{asset('user/images/product/honey/honey2.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                 </div>
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey Fits</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(18)</span>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="axil-product product-style-seven">
                                <div class="product-content">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy" src="{{asset('user/images/product/honey/honey3.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                </div>
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey Fits</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(87)</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="axil-product product-style-seven">
                                <div class="product-content">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </div>
                                    <div class="thumbnail">
                                    <a href="single-product.html">
                                        <img data-sal="zoom-out" data-sal-delay="100" data-sal-duration="800" loading="lazy" src="{{asset('user/images/product/honey/honey4.png')}}" alt="Product Images" style="width:auto; height:200px">
                                    </a>
                                </div>
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">Honey</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">$29.99</span>
                                            <span class="price old-price">$49.99</span>
                                        </div>
                                        <div class="product-rating">
                                            <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                            <span class="rating-number">(11)</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                      
                        
                    </div>
                </div>
            </div>
        </div>

        <a href="https://wa.me/whatsappphonenumber" class="facebook-icon">
          <img src="{{asset('user/images/instagram-icon.png')}}" width="35" height="25" alt="Instagrame Icon">
        </a>
        <!-- what app -->
        <a href="https://wa.me/whatsappphonenumber" class="whatsapp-icon">
          <img src="{{asset('user/images/WhatsApp_icon.png')}}" width="50" height="40" alt="WhatsApp Icon">
        </a>
</main>

@endsection
