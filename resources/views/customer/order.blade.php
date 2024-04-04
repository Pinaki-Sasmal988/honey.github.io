@extends('customer.layouts.main')
@section('content')
 

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Your Orders</h4>
                        <!-- <a href="#" class="cart-clear">Clear Shoping Cart</a> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <!-- <th scope="col" class="product-remove"></th> -->
                                    <th scope="col" class="product-thumbnail">Product</th>
                                    <th scope="col" class="product-title"></th>
                                    <th scope="col" class="product-price">Price</th>
                                    <!-- <th scope="col" class="product-quantity">Quantity</th> -->
                                    <th scope="col" class="product-subtotal">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td> -->
                                    <td class="product-thumbnail"><a href="single-product.html"><img src="{{asset('user/images/product/honey/honey1.png')}}" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product.html">Honey</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                    <!-- <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td> -->
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                                </tr>
                                <tr>
                                    <!-- <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td> -->
                                    <td class="product-thumbnail"><a href="single-product-2.html"><img src="{{asset('user/images/product/honey/honey3.png')}}" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-2.html">Sundarban Honey</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                    <!-- <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td> -->
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                                </tr>
                                <tr>
                                    <!-- <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a></td> -->
                                    <td class="product-thumbnail"><a href="single-product-3.html"><img src="{{asset('user/images/product/honey/honey2.png')}}" alt="Digital Product"></a></td>
                                    <td class="product-title"><a href="single-product-3.html">Honey Fit</a></td>
                                    <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                    <!-- <td class="product-quantity" data-title="Qty">
                                        <div class="pro-qty">
                                            <input type="number" class="quantity-input" value="1">
                                        </div>
                                    </td> -->
                                    <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        
                    
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

@endsection