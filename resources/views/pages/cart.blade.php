@extends('pages.layouts.app')
@section('content')
    @include('pages.include.page-slide')

    <div class="container">
        <div class="row content-layout-wrapper align-items-start">
            <div class="site-content col-lg-12 col-12 col-md-12 wd-builder-on" role="main">
                <div class="woocommerce">

                    <section class="wpb-content-wrapper">
                        <div
                            class="vc_row wpb_row vc_row-fluid vc_custom_1681306554535 vc_row-o-equal-height vc_row-flex wd-rs-6436b3b62fd1b">
                            <div
                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-xs-12 wd-rs-636e3d91315f1">
                                <div class="vc_column-inner vc_custom_1668169108705">
                                    <div class="wpb_wrapper">
                                        <div class="wd-wc-notices wd-wpb wd-rs-6213ac3af2f6f">
                                            <div class="woocommerce-notices-wrapper">
                                                <div class="woocommerce-message" role="alert">
                                                    “Can” removed. <a
                                                        href="#"
                                                        class="restore-item">Undo?</a> </div>
                                            </div>
                                        </div>
                                        <div
                                            class="wd-shipping-progress-bar wd-wpb wd-rs-636e4147e6142 vc_custom_1668170068200 text-left wd-style-default">
                                            <div class="wd-progress-bar wd-free-progress-bar">
                                                <div class="progress-msg">
                                                    Add <span class="woocommerce-Price-amount amount"><b class="cart-total">{{ $total }}</b></span>
                                                    to cart and get free shipping! </div>
                                                <div class="progress-area">
                                                    <div class="progress-bar" style="width: 52%"></div>
                                                </div>
                                            </div>


                                        </div>


                                        @include('pages.include.cart-items')



                                        <div id="carousel-225"
                                            class="wd-carousel-container info-box-carousel-wrapper  wd-carousel-spacing-20"
                                            data-owl-carousel="" data-hide_pagination_control="yes"
                                            data-hide_prev_next_buttons="no" data-dragendspeed="600" data-desktop="3"
                                            data-tablet_landscape="3" data-tablet="2" data-mobile="1">
                                            <div
                                                class="owl-carousel wd-owl info-box-carousel wd-rs-6436b11f70777 owl-items-lg-3 owl-items-md-3 owl-items-sm-2 owl-items-xs-1 owl-loaded owl-drag">



                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 924px;">
                                                        <div class="owl-item active" style="width: 307.776px;">
                                                            <div class="info-box-wrapper">
                                                                <div id="wd-643ea255c7aa5"
                                                                    class=" wd-rs-643ea255c7aa5 cursor-pointer wd-info-box wd-wpb text-left box-icon-align-left box-style- color-scheme- wd-bg-none wd-items-top vc_custom_1681826406387">
                                                                    <div
                                                                        class="box-icon-wrapper  box-with-icon box-icon-simple">
                                                                        <div class="info-box-icon">


                                                                            <div class="info-svg-wrapper info-icon"
                                                                                style="width: 32px;height: 32px;">
                                                                                <i class="fa-solid fa-phone"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-box-content">
                                                                        <h4
                                                                            class="info-box-title title box-title-style-default wd-fontsize-m">
                                                                            Have questions?</h4>
                                                                        <div
                                                                            class="info-box-inner set-cont-mb-s reset-last-child">
                                                                            <p>Our experts are here to help! <span
                                                                                    style="color: #3366ff;"><u><em>Call
                                                                                            Us</em></u></span></p>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item active" style="width: 307.776px;">
                                                            <div class="info-box-wrapper">
                                                                <div id="wd-6436b316d468b"
                                                                    class=" wd-rs-6436b316d468b wd-info-box wd-wpb text-left box-icon-align-left box-style- color-scheme- wd-bg-none wd-items-top vc_custom_1681306404923">
                                                                    <div
                                                                        class="box-icon-wrapper  box-with-icon box-icon-simple">
                                                                        <div class="info-box-icon">


                                                                            <div class="info-svg-wrapper info-icon"
                                                                                style="width: 32px;height: 32px;">                                                                                <i class="fa-solid fa-shield"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-box-content">
                                                                        <h4
                                                                            class="info-box-title title box-title-style-default wd-fontsize-m">
                                                                            Secure shopping</h4>
                                                                        <div
                                                                            class="info-box-inner set-cont-mb-s reset-last-child">
                                                                            <p>All transactions are protected by SSL.</p>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item active" style="width: 307.776px;">
                                                            <div class="info-box-wrapper">
                                                                <div id="wd-6436b1dc3017f"
                                                                    class=" wd-rs-6436b1dc3017f wd-info-box wd-wpb text-left box-icon-align-left box-style- color-scheme- wd-bg-none wd-items-top vc_custom_1681306091221">
                                                                    <div
                                                                        class="box-icon-wrapper  box-with-icon box-icon-simple">
                                                                        <div class="info-box-icon">


                                                                            <div class="info-svg-wrapper info-icon"
                                                                                style="width: 32px;height: 32px;">
                                                                                <i class="fa-solid fa-eye-low-vision"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="info-box-content">
                                                                        <h4
                                                                            class="info-box-title title box-title-style-default wd-fontsize-m">
                                                                            Privacy protection</h4>
                                                                        <div
                                                                            class="info-box-inner set-cont-mb-s reset-last-child">
                                                                            <p>Your privacy is always our top priority.</p>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-nav disabled">
                                                    <div class="owl-prev wd-btn-arrow"></div>
                                                    <div class="owl-next wd-btn-arrow"></div>
                                                </div>
                                                <div class="owl-dots disabled"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12 woodmart-sticky-column wd_sticky_offset_150 wd-rs-63ce8a5629e72">
                                <div class="vc_column-inner vc_custom_1674480219010">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1668170675705 vc_row-has-fill wd-rs-636e43af13313">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 wd-rs-6213ac5daaf9d">
                                                <div class="vc_column-inner vc_custom_1645456482508">
                                                    <div class="wpb_wrapper">
                                                        <div id="wd-636e3ff5ef3d2"
                                                            class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-636e3ff5ef3d2 wd-title-color-default wd-title-style-default text-left vc_custom_1668169726583 wd-underline-colored">

                                                            <div class="liner-continer">
                                                                <h4
                                                                    class="woodmart-title-container title  wd-font-weight- wd-fontsize-l">
                                                                    Cart Totals</h4>
                                                            </div>



                                                        </div>

                                                        <div
                                                            class="wd-cart-totals wd-wpb wd-rs-636e3fbf5a17a vc_custom_1668169695365 wd-btn-align-full-width">

                                                            <div class="cart_totals">

                                                                <div class="cart-totals-inner set-mb-m reset-last-child">

                                                                    <table cellspacing="0"
                                                                        class="shop_table shop_table_responsive">

                                                                        <tbody>
                                                                            <tr class="cart-subtotal">
                                                                                <th>Subtotal</th>
                                                                                <td data-title="Subtotal"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">Ksh</span><b class="cart-total">{{ $total }}</b> </bdi></span>
                                                                                </td>
                                                                            </tr>

                                                                            <tr
                                                                                class="woocommerce-shipping-totals shipping">
                                                                                <th>Shipping</th>
                                                                                <td data-title="Shipping">
                                                                                    <ul id="shipping_method"
                                                                                        class="woocommerce-shipping-methods">
                                                                                        <li>
                                                                                            <input type="hidden"
                                                                                                name="shipping_method[0]"
                                                                                                data-index="0"
                                                                                                id="shipping_method_0_free_shipping1"
                                                                                                value="free_shipping:1"
                                                                                                class="shipping_method"><label
                                                                                                for="shipping_method_0_free_shipping1">Free
                                                                                                shipping</label>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <p
                                                                                        class="woocommerce-shipping-destination">
                                                                                        Shipping to <strong>AL</strong>.
                                                                                    </p>



                                                                                    <form
                                                                                        class="woocommerce-shipping-calculator"
                                                                                        action="https://woodmart.xtemos.com/furniture2/cart/"
                                                                                        method="post">

                                                                                        <a href="#"
                                                                                            class="shipping-calculator-button">Change
                                                                                            address</a>
                                                                                        <section
                                                                                            class="shipping-calculator-form"
                                                                                            style="display:none;">

                                                                                            <p class="form-row form-row-wide"
                                                                                                id="calc_shipping_country_field">
                                                                                                <label
                                                                                                    for="calc_shipping_country"
                                                                                                    class="screen-reader-text">Country
                                                                                                    / region:</label>

                                                                                            </p>

                                                                                            <p class="form-row form-row-wide"
                                                                                                id="calc_shipping_state_field">
                                                                                                <span>
                                                                                                    <label
                                                                                                        for="calc_shipping_state"
                                                                                                        class="screen-reader-text">State
                                                                                                        / County:</label>
                                                                                                    <select
                                                                                                        name="calc_shipping_state"
                                                                                                        class="state_select"
                                                                                                        id="calc_shipping_state"
                                                                                                        data-placeholder="State / County">
                                                                                                        <option
                                                                                                            value="">
                                                                                                            Select an
                                                                                                            option…</option>
                                                                                                        <option
                                                                                                            value="AL"
                                                                                                            selected="selected">
                                                                                                            Alabama</option>
                                                                                                    </select>
                                                                                                </span>
                                                                                            </p>

                                                                                            <p class="form-row form-row-wide"
                                                                                                id="calc_shipping_city_field">
                                                                                                <label
                                                                                                    for="calc_shipping_city"
                                                                                                    class="screen-reader-text">City:</label>
                                                                                                <input type="text"
                                                                                                    class="input-text"
                                                                                                    value=""
                                                                                                    placeholder="City"
                                                                                                    name="calc_shipping_city"
                                                                                                    id="calc_shipping_city">
                                                                                            </p>

                                                                                            <p class="form-row form-row-wide"
                                                                                                id="calc_shipping_postcode_field">
                                                                                                <label
                                                                                                    for="calc_shipping_postcode"
                                                                                                    class="screen-reader-text">Postcode
                                                                                                    / ZIP:</label>
                                                                                                <input type="text"
                                                                                                    class="input-text"
                                                                                                    value=""
                                                                                                    placeholder="Postcode / ZIP"
                                                                                                    name="calc_shipping_postcode"
                                                                                                    id="calc_shipping_postcode">
                                                                                            </p>

                                                                                            <p><button type="submit"
                                                                                                    name="calc_shipping"
                                                                                                    value="1"
                                                                                                    class="button">Update</button>
                                                                                            </p>
                                                                                            <input type="hidden"
                                                                                                id="woocommerce-shipping-calculator-nonce"
                                                                                                name="woocommerce-shipping-calculator-nonce"
                                                                                                value="9f4a89bb03"><input
                                                                                                type="hidden"
                                                                                                name="_wp_http_referer"
                                                                                                value="/furniture2/cart/?removed_item=1">
                                                                                        </section>
                                                                                    </form>

                                                                                </td>
                                                                            </tr>
                                                                            <tr class="order-total">
                                                                                <th>Total</th>
                                                                                <td data-title="Total"><strong><span
                                                                                            class="woocommerce-Price-amount amount"><bdi><b class="cart-total">{{ $total }}</b></bdi></span></strong>
                                                                                </td>
                                                                            </tr>


                                                                        </tbody>
                                                                    </table>

                                                                    <div class="wc-proceed-to-checkout">

                                                                        <a href="/checkout"
                                                                            class="checkout-button button alt wc-forward">
                                                                            Proceed to checkout</a>
                                                                    </div>

                                                                </div><!--.cart-totals-inner-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1681305795950 vc_row-has-fill wd-rs-6436b0bf80ab3">
                                            <div class="wpb_column vc_column_container vc_col-sm-12 wd-rs-6213ac5daaf9d">
                                                <div class="vc_column-inner vc_custom_1645456482508">
                                                    <div class="wpb_wrapper">
                                                        <div id="wd-6436b05cb96cd"
                                                            class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6436b05cb96cd wd-title-color-default wd-title-style-default text-left vc_custom_1681305697687 wd-underline-colored">

                                                            <div class="liner-continer">
                                                                <h4
                                                                    class="woodmart-title-container title  wd-font-weight- wd-fontsize-m">
                                                                    Payment methods:</h4>
                                                            </div>



                                                        </div>

                                                        <div id="wd-6436b03d4006e"
                                                            class="wd-image wd-wpb wd-rs-6436b03d4006e text-left ">

                                                            <picture class="attachment-full size-full" decoding="async"
                                                                loading="lazy">
                                                                <source type="image/webp"
                                                                    sizes="(max-width: 403px) 100vw, 403px">
                                                                <img width="403" height="26"
                                                                    src="https://woodmart.xtemos.com/furniture2/wp-content/uploads/sites/11/2023/04/payment-methods.jpg"
                                                                    alt="" decoding="async" loading="lazy"
                                                                    sizes="(max-width: 403px) 100vw, 403px">
                                                            </picture>

                                                        </div>

                                                        <div id="wd-6436b08fc6350"
                                                            class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6436b08fc6350 wd-title-color-default wd-title-style-default text-left  wd-underline-colored">

                                                            <div class="liner-continer">
                                                                <h4
                                                                    class="woodmart-title-container title  wd-font-weight- wd-fontsize-m">
                                                                    Delivery information:</h4>
                                                            </div>

                                                            <div
                                                                class="title-after_title  set-cont-mb-s reset-last-child  wd-fontsize-xs">
                                                                Although we don’t think you’ll ever want one, we’ll gladly
                                                                provide a refund if it’s requested within 14 days of
                                                                purchase.</div>


                                                        </div>


                                                        <div id="wd-6436b0ab0d4bf"
                                                            class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6436b0ab0d4bf wd-title-color-default wd-title-style-default text-left vc_custom_1681305782871 wd-underline-colored">

                                                            <div class="liner-continer">
                                                                <h4
                                                                    class="woodmart-title-container title  wd-font-weight- wd-fontsize-m">
                                                                    14 Days Money Back Guarantee:</h4>
                                                            </div>

                                                            <div
                                                                class="title-after_title  set-cont-mb-s reset-last-child  wd-fontsize-xs">
                                                                Although we don’t think you’ll ever want one, we’ll gladly
                                                                provide a refund if it’s requested within 14 days of
                                                                purchase.</div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class=" wd-rs-6475f714f3710 wd-wpb">
                                                @include('pages.include.related')


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div><!-- .main-page-wrapper -->
    </div>
@endsection
