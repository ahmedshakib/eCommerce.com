@extends('layouts.app')
@section('style')
@endsection

@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg'); padding: 1.6rem 0 2rem;">
        <div class="container">
            <h3 class="page-title">Checkout</h3>
            <a href="{{ url('') }}"><i class="icon-home"></i></a><span> / </span>
            <span>Shop </span>
            <span> / Checkout</span>
        </div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                <!-- <div class="checkout-discount">
                    <form action="#">
                        <input type="text" class="form-control" required id="checkout-discount-input">
                        <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
                    </form>
                </div> -->
                <form action="#">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>First Name *</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="col-sm-6">
                                    <label>Last Name *</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>

                            <label>Company Name (Optional)</label>
                            <input type="text" class="form-control">

                            <label>Country *</label>
                            <input type="text" class="form-control" required>

                            <label>Street address *</label>
                            <input type="text" class="form-control" placeholder="House number and Street name" required>
                            <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." required>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Town / City *</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="col-sm-6">
                                    <label>State / County *</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Postcode / ZIP *</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="col-sm-6">
                                    <label>Phone *</label>
                                    <input type="tel" class="form-control" required>
                                </div>
                            </div>

                            <label>Email address *</label>
                            <input type="email" class="form-control" required>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkout-create-acc">
                                <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkout-diff-address">
                                <label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
                            </div>

                            <label>Order notes (optional)</label>
                            <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </div>
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3>

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach(Cart::getContent() as $key => $cart)
                                            @php
                                                $getCartProduct = App\Models\ProductModel::getSingle($cart->id);
                                            @endphp
                                        <tr>
                                            <td><a href="{{ url($getCartProduct->slug) }}">{{ $getCartProduct->title }}</a></td>
                                            <td>${{ number_format($cart->price * $cart->quantity, 2) }}</td>
                                        </tr>
                                        @endforeach
                                        
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>${{ number_format(Cart::getSubTotal(), 2) }}</td>
                                        </tr>

                                        <tr>
                                            <td  colspan="2">
                                                <div class="cart-discount">
                                                    <div class="input-group">
                                                        <input id="getCouponCode" type="text" class="form-control" placeholder="Have a coupon? Click here to enter your code.">
                                                        <div class="input-group-append">
                                                            <button id="applyCoupon" type="button" class="btn btn-secondary" type="submit" style="height: 40px;"><i class="icon-refresh"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="summary-shipping">
                                            <td>Shipping:</td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        @foreach($getShipping as $shipping)
                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="free-shipping{{ $shipping->id }}" name="shipping" data-price="{{ !empty($shipping->price) ? $shipping->price : 0 }}" class="custom-control-input getShippingCharge">
                                                        <label class="custom-control-label" for="free-shipping{{ $shipping->id }}">{{ $shipping->name }}</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td>
                                                @if(!empty($shipping->price))    
                                                    ${{ number_format($shipping->price, 2) }}
                                                @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td>Discount:</td>
                                            <td>$<span id="getDiscountAmount">0.00</span></td>
                                        </tr>

                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>$<span id="getPayableTotal">{{ number_format(Cart::getSubTotal(), 2) }}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                     
                                <input type="hidden" id="getShippingChargeTotal" value="0">
                                <input type="hidden" id="PayableTotal" value="{{ Cart::getSubTotal() }}">

                                <div class="accordion-summary" id="accordion-payment">
                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                    Cash on delivery
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading-4">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                    BKash <small class="float-right paypal-link">....</small>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Some Notes...................!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-5">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                    Rocket <small class="float-right paypal-link">....</small>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Some Notes...................!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading-6">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                                    Credit Card (Stripe)
                                                    <img src="assets/images/payments-summary.png" alt="payments cards">
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion-payment">
                                            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-dark btn-order btn-block">
                                    <span class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                            </div>
                        </aside>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('body').delegate('.getShippingCharge', 'change', function() {
        var price = $(this).attr('data-price');
        // console.log(price);
        var total = $('#PayableTotal').val();

        $('#getShippingChargeTotal').val(price);
        var final_total = parseFloat(price) + parseFloat(total);
        $('#getPayableTotal').html(final_total.toFixed(2));
    });


    $('body').delegate('#applyCoupon', 'click', function() { 
        var coupon_code = $('#getCouponCode').val(); 

        $.ajax({
            type: "POST",
            url: "{{ url('checkout/apply_coupon_code') }}",
            data: {
                coupon_code : coupon_code,
                "_token": "{{ csrf_token() }}",
            },
            dataType: "json",
            success: function(data) {
                $('#getDiscountAmount').html(data.coupon_amount);

                var shipping = $('#getShippingChargeTotal').val();
                var final_total = parseFloat(shipping) + parseFloat(data.payable_total);

                $('#getPayableTotal').html(final_total.toFixed(2));
                $('#PayableTotal').val(data.payable_total);
                if(data.status == false){
                    // alert(data.message);
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Please Enter Your Valid Coupon Code!",
                    });
                }
            },
            error: function (data) {

            }
        });
    });
</script>
@endsection