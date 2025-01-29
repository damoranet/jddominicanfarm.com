        <!--====== Start page-banner section ======-->
        <section class="page-banner bg_cover position-relative z-1" style="background-image: url(<?php echo base_url() ?>assets-farm/images/bg/page-bg-1.jpg);">
            <div class="brand-card text-center">
                <img src="<?php echo base_url() ?>assets-farm/images/icon/wheat.png" alt="icon">
                <h3>Orgarium</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="page-title">
                            <h1>Checkout</h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End page-banner section ======-->
        <!--====== Start Checkout section ======-->
        <section class="checkout-section pt-170 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-faqs" id="checkout-faqs">
                            <div class="alert">
                                <h6>Returning customer? <a href="#" class="collapsed card-header" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">Click here to login</a></h6>
                                <div id="collapse0" class="collapse content">
                                    <form action="#">
                                        <p>Please login your accont.</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" id="email-address" name="email-address" class="form_control" value="" placeholder="Your Email Address" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" id="password" name="password" class="form_control" value="" placeholder="Your Password" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer d-flex align-items-center">
                                            <button type="submit" class="main-btn btn-yellow">login <i class="fas fa-angle-double-right"></i></button>
                                            <input type="checkbox" name="loss-passowrd" id="loss-passowrd" required="">
                                            <label for="loss-passowrd">Remember me</label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                            <div class="alert">
                                <h6>Have a coupon? <a href="#" class="collapsed card-header" data-toggle="collapse" data-target="#collapse3" aria-expanded="false">Click here to enter your code</a></h6>
                                <div id="collapse3" class="collapse content">
                                    <form action="#">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <div class="form-group">
                                            <input type="text" id="coupon-code" name="coupon-code" class="form_control" value="" placeholder="Coupon Code" required="">
                                        </div>
                                        <button type="submit" class="main-btn btn-yellow">apply coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="checkout-wrapper mt-50 mb-80">
                            <h4 class="title mb-15">Billing Details</h4>
                            <form class="checkout-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="First Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Last Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone Number" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Company Name (Optional)" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Company Address (Optional)" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Your Address</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide">
                                                <option value="0">Select Country</option>
                                                <option value="1">Australia</option>
                                                <option value="2">Bangladesh</option>
                                                <option value="2">Canada</option>
                                                <option value="3">China</option>
                                                <option value="4">Morocco</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="City" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="State" name="state" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Zip" name="zip" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="House, street name" name="street-name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Apartment, suite, unit etc. (optional)" name="apartment-name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Order Notes (optional)</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="order-note" class="form_control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="payment-cart-total">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="payment-method mb-50">
                                <h4 class="title mb-20">Payment Method</h4>
                                <ul id="paymentMethod" class="mb-20">
                                    <!-- Default unchecked -->
                                    <li class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="methodone" name="defaultExampleRadios" checked>
                                        <label class="custom-control-label collapsed" for="methodone" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">Direct Bank Transfer <i class="fas fa-money-check"></i></label>
                                        <div id="collapseOne" class="collapse" data-parent="#paymentMethod">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped our account.</p>
                                        </div>
                                    </li>
                                    <!-- Default unchecked -->
                                    <li class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="methodtwo" name="defaultExampleRadios">
                                        <label class="custom-control-label collapsed" for="methodtwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">Cash On Delivery <i class="fas fa-truck"></i></label>

                                        <div id="collapseTwo" class="collapse" data-parent="#paymentMethod">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </li>
                                    <!-- Default unchecked -->
                                    <li class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="methodthree" name="defaultExampleRadios">
                                        <label class="custom-control-label" for="methodthree" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true">Paypal <i class="fab fa-cc-paypal"></i></label>
                                        <div id="collapsethree" class="collapse show" data-parent="#paymentMethod">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </li>
                                </ul>
                                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                <button class="main-btn btn-yellow">Place Order</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shopping-cart-total mb-50">
                                <h4 class="title">Cart Totals</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td>$200</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Fee</td>
                                            <td>$50</td>
                                        </tr>
                                        <tr>
                                            <td class="total"><span>Order Total</span></td>
                                            <td class="total"><span>$250</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="main-btn btn-yellow">Proceed to checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Checkout section ======-->