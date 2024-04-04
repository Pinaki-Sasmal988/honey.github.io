@extends('customer.layouts.main')
@section('content')
 
 <!-- Start Wishlist Area  -->
 <div class="axil-wishlist-area axil-section-gap">
            <div class="container">
                <div class="product-table-heading">
                    <h4 class="title">My Cart</h4>
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-wishlist-table">
                        <thead>
                            <tr>
                                <!-- <th scope="col" class="product-remove"></th> -->
                                <th scope="col" class="product-thumbnail">Product</th>
                                <th scope="col" class="product-title">Name</th>
                                <th scope="col" class="product-price"> Price</th>
                                <th scope="col" class="product-add-cart"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td> -->
                                <td class="product-thumbnail"><a href="single-product.html"><img src="{{asset('user/images/product/honey/honey1.png')}}" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="single-product.html">Sundarban Honey</a></td>
                                <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                <td class="product-add-cart"><a href="cart.html" class=" btn-outline btn-warning">Remove to Cart</a></td>
                            </tr>
                            <tr>
                                <!-- <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td> -->
                                <td class="product-thumbnail"><a href="single-product-2.html"><img src="{{asset('user/images/product/honey/honey2.png')}}" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="single-product-2.html">Royals Honey</a></td>
                                <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                <td class="product-add-cart"><a href="cart.html" class=" btn-outline btn-warning">Remove to Cart</a></td>
                            </tr>
                            <tr>
                                <!-- <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td> -->
                                <td class="product-thumbnail"><a href="single-product-3.html"><img src="{{asset('user/images/product/honey/honey3.png')}}" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="single-product-3.html">Honey</a></td>
                                <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                <td class="product-add-cart"><a href="cart.html" class=" btn-outline btn-warning">Remove to Cart</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- summary -->
                <div class="row">
                        <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5" style="display: flex; justify-content: center; align-items: center;">
                            <div class="axil-order-summery mt--80">
                                <h5 class="title mb--20">Order Summary</h5>
                                <div class="summery-table-wrap">
                                    <table class="table summery-table mb--30">
                                        <tbody>
                                            <tr class="order-subtotal">
                                                <td>Subtotal</td>
                                                <td>$117.00</td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td>Shipping</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio1" name="shipping" checked>
                                                        <label for="radio1">Free Shippping</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio2" name="shipping">
                                                        <label for="radio2">Local: $35.00</label>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="radio" id="radio3" name="shipping">
                                                        <label for="radio3">Flat rate: $12.00</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="order-tax">
                                                <td>State Tax</td>
                                                <td>$8.00</td>
                                            </tr>
                                            <tr class="order-total">
                                                <td>Total</td>
                                                <td class="order-total-amount">$125.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="checkout.html" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <!-- End Wishlist Area  -->

@endsection