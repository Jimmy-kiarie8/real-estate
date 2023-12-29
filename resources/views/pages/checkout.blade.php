@extends('pages.layouts.app')
@section('content')
    @include('pages.include.page-slide')

    <div class="container">
        <div class="row content-layout-wrapper align-items-start">
            <div class="site-content col-lg-12 col-12 col-md-12 wd-builder-on" role="main">

                <section class="wpb-content-wrapper">
                    <div
                        class="vc_row wpb_row vc_row-fluid vc_custom_1681734639173 vc_row-has-fill wd-rs-643d3beb6ab34 wd-section-stretch">
                        <div
                            class="wpb_column vc_column_container vc_col-sm-6 vc_col-sm-offset-3 text-center wd-rs-633d664f19112">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wd-wc-notices wd-wpb wd-rs-626fe69382ebd">
                                        <div class="woocommerce-notices-wrapper"></div>
                                    </div>
                                    <div
                                        class="wd-checkout-login wd-wpb wd-rs-64d49f08bd6a1 vc_custom_1691655957488 text-center">
                                        <div class="wd-checkout-login-inner">
                                            <div class="woocommerce-form-login-toggle">
                                                @guest

                                                <div class="woocommerce-info">
                                                    Returning customer? <a href="#" class="showlogin">Click here to
                                                        login</a> </div>
                                                @endguest
                                            </div>
                                            <form method="post"
                                                class="login woocommerce-form woocommerce-form-login hidden-form"
                                                style="display:none;">

                                                <p>If you have shopped with us before, please enter your details below. If
                                                    you are a new customer, please proceed to the Billing section.</p>
                                                <p
                                                    class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-username">
                                                    <label for="username">Username or email address&nbsp;<span
                                                            class="required">*</span></label>
                                                    <input type="text"
                                                        class="woocommerce-Input woocommerce-Input--text input-text"
                                                        name="username" id="username" value="">
                                                </p>
                                                <p
                                                    class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-password">
                                                    <label for="password">Password&nbsp;<span
                                                            class="required">*</span></label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                        type="password" name="password" id="password"
                                                        autocomplete="current-password">
                                                </p>


                                                <p class="form-row">
                                                    <input type="hidden" id="woocommerce-login-nonce"
                                                        name="woocommerce-login-nonce" value="524854a367"><input
                                                        type="hidden" name="_wp_http_referer"
                                                        value="/furniture2/checkout/"> <input type="hidden" name="redirect"
                                                        value="https://woodmart.xtemos.com/furniture2/checkout/">
                                                    <button type="submit"
                                                        class="button woocommerce-button woocommerce-form-login__submit"
                                                        name="login" value="Log in">Log in</button>
                                                </p>

                                                <p class="login-form-footer">
                                                    <a href="https://woodmart.xtemos.com/furniture2/my-account/lost-password/"
                                                        class="woocommerce-LostPassword lost_password">Lost your
                                                        password?</a>
                                                    <label
                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                        <input
                                                            class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                            name="rememberme" type="checkbox" value="forever"
                                                            title="Remember me" aria-label="Remember me"> <span>Remember
                                                            me</span>
                                                    </label>
                                                </p>


                                            </form>

                                        </div>
                                    </div>
                                    {{-- <div class="wd-checkout-coupon wd-wpb wd-rs-6213ae477b8ce vc_custom_1645456972055">
                                        <div class="wd-checkout-coupon-inner">
                                            <div class="woocommerce-form-coupon-toggle">

                                                <div class="woocommerce-info">
                                                    Have a coupon? <a href="#" class="showcoupon">Click here to enter
                                                        your code</a> </div>
                                            </div>

                                            <form class="checkout_coupon woocommerce-form-coupon" method="post"
                                                style="display:none">

                                                <p>If you have a coupon code, please apply it below.</p>

                                                <p class="form-row form-row-first">
                                                    <label for="coupon_code" class="screen-reader-text">Coupon:</label>
                                                    <input type="text" name="coupon_code" class="input-text"
                                                        placeholder="Coupon code" id="coupon_code" value="">
                                                </p>

                                                <p class="form-row form-row-last">
                                                    <button type="submit" class="button" name="apply_coupon"
                                                        value="Apply coupon">Apply coupon</button>
                                                </p>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <form name="checkout" method="post" class="checkout woocommerce-checkout"
                    action="{{ route('order-complete') }}">
                    @csrf

                    <section class="wpb-content-wrapper">
                        <div
                            class="vc_row wpb_row vc_row-fluid vc_custom_1681915153813 vc_row-has-fill wd-rs-643ffd082180e wd-section-stretch">
                            <div
                                class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1 vc_col-xs-12 wd-rs-643ffcc4482f1">
                                <div class="vc_column-inner vc_custom_1681915080425">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1681733747942 vc_row-has-fill wd-rs-643d386c1dc3a">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 wd-enabled-flex wd-rs-643d381612b46">
                                                <div class="vc_column-inner vc_custom_1681733670186">
                                                    <div class="wpb_wrapper">
                                                        <div id="wd-643d391355c92"
                                                            class="wd-text-block wd-wpb reset-last-child inline-element wd-rs-643d391355c92 text-left wd-font-weight-800 wd-fontsize-custom font-primary vc_custom_1681733912804">
                                                            <p>1</p>
                                                        </div>

                                                        <div id="wd-643d390316502"
                                                            class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-643d390316502 wd-enabled-width wd-title-color-default wd-title-style-default text-left vc_custom_1681733894636 wd-underline-colored">

                                                            <div class="liner-continer">
                                                                <h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-l"
                                                                    style="color: #fff">Billing Details</h4>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wd-billing-details wd-wpb wd-rs-64d4a436a7ad1 vc_custom_1691657276974">
                                            <div class="woocommerce-billing-fields">

                                                <h3>Billing details</h3>

                                                @auth


                                                    <div class="woocommerce-billing-fields__field-wrapper row">
                                                        <p class="form-row form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-text validate-required col-lg-6 col-md-4 col-6"
                                                            id="billing_first_name_field" data-priority="10"><label
                                                                for="billing_first_name" class="">Full name&nbsp;<abbr
                                                                    class="required" title="required">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="text"
                                                                    class="input-text " name="billing_first_name"
                                                                    id="billing_first_name" placeholder="" value="{{ auth()->user()->name }}"
                                                                    autocomplete="given-name"></span></p>

                                                        <p class="form-row form-row-first thwcfd-required thwcfd-field-wrapper thwcfd-field-tel validate-required validate-phone col-lg-6 col-md-4 col-6"
                                                            id="billing_phone_field" data-priority="30"><label
                                                                for="billing_phone" class="">Phone&nbsp;<abbr
                                                                    class="required" title="required">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="tel"
                                                                    class="input-text " name="billing_phone"
                                                                    id="billing_phone" placeholder="" value="{{ auth()->user()->phone }}"
                                                                    autocomplete="tel"></span></p>
                                                        <p class="form-row form-row-last thwcfd-required thwcfd-field-wrapper thwcfd-field-email validate-required validate-email col-lg-6 col-md-4 col-6"
                                                            id="billing_email_field" data-priority="40"><label
                                                                for="billing_email" class="">Email address&nbsp;<abbr
                                                                    class="required" title="required">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="email"
                                                                    class="input-text " name="billing_email"
                                                                    id="billing_email" placeholder=""
                                                                    value="{{ auth()->user()->email }}" autocomplete="email"></span>
                                                        </p>
                                                        <p class="form-row form-row-first update_totals_on_change thwcfd-required thwcfd-field-wrapper thwcfd-field-country validate-required col-lg-6 col-md-4 col-6"
                                                            id="billing_country_field" data-priority="60"><label
                                                                for="billing_country" class="">Country /
                                                                Region&nbsp;<abbr class="required"
                                                                    title="required">*</abbr></label><span
                                                                class="woocommerce-input-wrapper">
                                                                <span
                                                                    class="select2 select2-container select2-container--default"
                                                                    dir="ltr" style="width: 100%;"><span
                                                                        class="selection"><span
                                                                            class="select2-selection select2-selection--single"
                                                                            aria-haspopup="true" aria-expanded="false"
                                                                            tabindex="0" aria-label="Country / Region"
                                                                            role="combobox"><span
                                                                                class="select2-selection__rendered"
                                                                                id="select2-billing_country-container"
                                                                                role="textbox" aria-readonly="true"
                                                                                title="Kenya">Kenya</span><span
                                                                                class="select2-selection__arrow"
                                                                                role="presentation"><b
                                                                                    role="presentation"></b></span></span></span><span
                                                                        class="dropdown-wrapper"
                                                                        aria-hidden="true"></span></span><noscript><button
                                                                        type="submit"
                                                                        name="woocommerce_checkout_update_totals"
                                                                        value="Update country / region">Update country /
                                                                        region</button></noscript></span></p>
                                                        <p class="form-row form-row-last thwcfd-required thwcfd-field-wrapper thwcfd-field-text validate-required col-lg-6 col-md-4 col-6"
                                                            id="billing_city_field" data-priority="70"
                                                            data-o_class="form-row form-row-last thwcfd-required thwcfd-field-wrapper thwcfd-field-text validate-required col-lg-6 col-md-4 col-6">
                                                            <label for="billing_city" class="">Town / City&nbsp;<abbr
                                                                    class="required" title="required">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="text"
                                                                    class="input-text " name="billing_city"
                                                                    placeholder="" value="Nairobi"></span>
                                                        </p>
                                                        <p class="form-row form-row-first address-field thwcfd-required thwcfd-field-wrapper thwcfd-field-text validate-required col-lg-6 col-md-4 col-6"
                                                            id="billing_address_1_field" data-priority="80"><label
                                                                for="billing_address_1" class="">Street
                                                                address&nbsp;<abbr class="required"
                                                                    title="required">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="text"
                                                                    class="input-text " name="billing_address_1"
                                                                    placeholder="House number and street name"
                                                                    value="{{ auth()->user()->address }}"
                                                                    autocomplete="address-line1"></span></p>

                                                    </div>

                                                @endauth


                                            </div>

                                        </div>

                                        {{-- @include('pages.include.shipping-address') --}}
                                    </div>
                                </div>
                            </div>
                            <div
                                class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1 vc_col-xs-12 wd-rs-643ffdee83457">
                                <div class="vc_column-inner vc_custom_1681915381690">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1681915331191 vc_row-has-fill wd-rs-643ffdc0b1178">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 wd-enabled-flex wd-rs-643d381612b46">
                                                <div class="vc_column-inner vc_custom_1681733670186">
                                                    <div class="wpb_wrapper">
                                                        <div id="wd-643d38dfb5cbe"
                                                            class="wd-text-block wd-wpb reset-last-child inline-element wd-rs-643d38dfb5cbe text-left wd-font-weight-800 wd-fontsize-custom font-primary vc_custom_1681733861187">
                                                            <p>2</p>
                                                        </div>

                                                        <div id="wd-643d3889bb94a"
                                                            class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-643d3889bb94a wd-enabled-width wd-title-color-default wd-title-style-default text-left vc_custom_1681733779815 wd-underline-colored">

                                                            <div class="liner-continer">
                                                                <h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-l"
                                                                    style="color: #fff">
                                                                    Your Order</h4>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @include('pages.include.cart-items')

                                        <div
                                            class="wd-shipping-progress-bar wd-wpb wd-rs-643d37a2d5d66 vc_custom_1681733544545 text-left wd-style-default">
                                            <div class="wd-progress-bar wd-free-progress-bar">
                                                <div class="progress-msg">
                                                    Your order qualifies for free shipping! </div>
                                                <div class="progress-area">
                                                    <div class="progress-bar" style="width: 100%"></div>
                                                </div>
                                            </div>





                                        </div>
                                        <div id="wd-643ffcefae1d9"
                                            class="wd-text-block wd-wpb reset-last-child wd-rs-643ffcefae1d9 text-left vc_custom_1681915122890"
                                            style="color: #fff">
                                            <p>Your order is expected to arrive in your location in the next 3 hrs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1 vc_col-xs-12 wd-rs-643ffccf00054">
                                <div class="vc_column-inner vc_custom_1681915090342">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1681733747942 vc_row-has-fill wd-rs-643d386c1dc3a">
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-12 wd-enabled-flex wd-rs-643d381612b46">
                                                <div class="vc_column-inner vc_custom_1681733670186">
                                                    <div class="wpb_wrapper">
                                                        <div id="wd-643d3925b9ab1"
                                                            class="wd-text-block wd-wpb reset-last-child inline-element wd-rs-643d3925b9ab1 text-left wd-font-weight-800 wd-fontsize-custom font-primary vc_custom_1681733929437">
                                                            <p>3</p>
                                                        </div>

                                                        <div id="wd-643d392af2059"
                                                            class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-643d392af2059 wd-enabled-width wd-title-color-default wd-title-style-default text-left vc_custom_1681733935587 wd-underline-colored">

                                                            <div class="liner-continer">
                                                                <h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-l"
                                                                    style="color: #fff">
                                                                    Payment Information</h4>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="wd-payment-methods wd-wpb wd-rs-643d39f157486 vc_custom_1681734145044 wd-btn-align-full-width">
                                            <div id="payment" class="woocommerce-checkout-payment"
                                                style="position: static; zoom: 1;">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                    <li class="wc_payment_method payment_method_bacs">
                                                        <input id="payment_method_bacs" type="radio"
                                                            class="input-radio" name="payment_method" value="bacs"
                                                            data-order_button_text="">

                                                        <label for="payment_method_bacs">
                                                            Direct bank transfer </label>
                                                        <div class="payment_box payment_method_bacs"
                                                            style="display:none;">
                                                            <p>Make your payment directly into our bank account. Please use
                                                                your Order ID as the payment reference. Your order will not
                                                                be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </li>
                                                    <li class="wc_payment_method payment_method_cheque">
                                                        <input id="payment_method_cheque" type="radio"
                                                            class="input-radio" name="payment_method" value="cheque"
                                                            data-order_button_text="">

                                                        <label for="payment_method_cheque">
                                                            Check payments </label>
                                                        <div class="payment_box payment_method_cheque"
                                                            style="display:none;">
                                                            <p>Please send a check to Store Name, Store Street, Store Town,
                                                                Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </li>
                                                    <li class="wc_payment_method payment_method_cod">
                                                        <input id="payment_method_cod" type="radio" class="input-radio"
                                                            name="payment_method" value="cod" checked="checked"
                                                            data-order_button_text="">

                                                        <label for="payment_method_cod">
                                                            Cash on delivery </label>
                                                        <div class="payment_box payment_method_cod">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                    <noscript>
                                                        Since your browser does not support JavaScript, or it is disabled,
                                                        please ensure you click the <em>Update Totals</em> button before
                                                        placing your order. You may be charged more than the amount stated
                                                        above if you fail to do so. <br /><button type="submit"
                                                            class="button alt" name="woocommerce_checkout_update_totals"
                                                            value="Update totals">Update totals</button>
                                                    </noscript>

                                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                                        <div class="woocommerce-privacy-policy-text"></div>
                                                    </div>


                                                    <button type="submit" class="button alt"
                                                        name="woocommerce_checkout_place_order" id="place_order"
                                                        value="Place order" data-value="Place order">Place order</button>

                                                    <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                        name="woocommerce-process-checkout-nonce"
                                                        value="42a0bf2afe"><input type="hidden" name="_wp_http_referer"
                                                        value="/furniture2/?wc-ajax=update_order_review">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>

            </div>
        </div><!-- .main-page-wrapper -->
    </div>
@endsection
