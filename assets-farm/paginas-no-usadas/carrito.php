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
                            <h1>Cart</h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End page-banner section ======-->
        <section class="cart-section pt-170 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-wrapper">
                            <div class="cart-table table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="remove">
                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            <td class="thumbnail-title">
                                                <img src="<?php echo base_url() ?>assets-farm/images/products/product-thumb-4.jpg" alt="">
                                                <span class="title">Strawberry Fruits</span>
                                            </td>
                                            <td class="price">$25</td>
                                            <td class="quantity">
                                                <div class="quantity-input">
                                                    <button class="quantity-down">-</button>
                                                    <input class="quantity" type="text" value="1" name="quantity">
                                                    <button class="quantity-up">+</button>
                                                </div>
                                            </td>
                                            <td class="subtotal">$25</td>
                                        </tr>
                                        <tr>
                                            <td class="remove">
                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            <td class="thumbnail-title">
                                                <img src="<?php echo base_url() ?>assets-farm/images/products/product-thumb-5.jpg" alt="">
                                                <span class="title">Apple Fruits</span>
                                            </td>
                                            <td class="price">$25</td>
                                            <td class="quantity">
                                                <div class="quantity-input">
                                                    <button class="quantity-down">-</button>
                                                    <input class="quantity" type="text" value="1" name="quantity">
                                                    <button class="quantity-up">+</button>
                                                </div>
                                            </td>
                                            <td class="subtotal">$35</td>
                                        </tr>
                                        <tr>
                                            <td class="remove">
                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            <td class="thumbnail-title">
                                                <img src="<?php echo base_url() ?>assets-farm/images/products/product-thumb-6.jpg" alt="">
                                                <span class="title">Tomato vegetable</span>
                                            </td>
                                            <td class="price">$25</td>
                                            <td class="quantity">
                                                <div class="quantity-input">
                                                    <button class="quantity-down">-</button>
                                                    <input class="quantity" type="text" value="1" name="quantity">
                                                    <button class="quantity-up">+</button>
                                                </div>
                                            </td>
                                            <td class="subtotal">$55</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="cart-middle mt-40 mb-20">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="coupon-box mb-40">
                                        <form>
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Coupon Code">
                                                <button class="main-btn btn-yellow">Appply Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="update-cart float-lg-right mb-40">
                                        <a href="#" class="main-btn btn-yellow">Shopping</a>
                                        <a href="#" class="main-btn btn-yellow">Update Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-5">
                        <div class="shopping-cart-total">
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
        </section>