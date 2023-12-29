<div class="vc_row wpb_row vc_row-fluid vc_custom_1685543231402 wd-rs-64775936770a9">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="wd-647756326a3f8"
                    class="wd-tabs wd-products-tabs tabs-wd-647756326a3f8 tabs-design-alt  wd-rs-647756326a3f8 vc_custom_1685542454386">
                    <div class="wd-tabs-header text-center">
                        <div class="wd-tabs-loader"><span class="wd-loader"></span></div>

                        <div class="tabs-name title">
                            <span class="tabs-text">Our Offers</span>
                        </div>


                        <div class="wd-nav-wrapper wd-nav-tabs-wrapper tabs-navigation-wrapper">
                            <ul class="wd-nav wd-nav-tabs products-tabs-title wd-style-underline wd-icon-pos-left"><a
                                    href="#" class="wd-nav-link"><span class="tab-label nav-link-text">See
                                        more</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wd-tab-content-wrapper">


                        <div class="wd-products-element wd-rs-64d49210f0d4a">
                            <div class="wd-products-loader"><span class="wd-loader"></span></div>

                            <div class="products elements-grid align-items-start row wd-products-holder  wd-spacing-20 grid-columns-5 pagination-arrows wd-stretch-cont-lg wd-stretch-cont-md wd-stretch-cont-sm align-items-start wd-products-with-bg"
                                data-paged="1" data-source="shortcode" data-columns="5">

                                @foreach ($offers as $product)
                                    <div class="product-grid-item product wd-hover-buttons-on-hover  col-lg-20_0 col-md-4 col-6 first  type-product post-125 status-publish instock product_cat-chairs has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                        data-loop="1" data-id="125">


                                        <div class="product-wrapper">
                                            <div class="product-element-top wd-quick-shop">
                                                <a href="#"
                                                    class="product-image-link">
                                                    <div class="wd-product-grid-slider wd-fill">
                                                        <div class="wd-product-grid-slide" data-image-id="0"></div>
                                                        <div class="wd-product-grid-slide" data-image-id="1"></div>
                                                        <div class="wd-product-grid-slide" data-image-id="2"></div>
                                                        <div class="wd-product-grid-slide" data-image-id="3"></div>
                                                    </div>

                                                    <div class="wd-product-grid-slider-nav wd-fill wd-hide-md">
                                                        <div class="wd-prev"></div>
                                                        <div class="wd-next"></div>
                                                    </div>

                                                    <img width="350" height="400"
                                                        src="{{ $product->image }}"
                                                        class="attachment-350x400 size-350x400" alt=""
                                                        decoding="async" loading="lazy" />
                                                </a>


                                                <div class="wd-buttons wd-pos-r-t">
                                                    <div
                                                        class="wd-wishlist-btn wd-action-btn wd-style-icon wd-wishlist-icon">
                                                        <a class=""
                                                            href="#"
                                                            data-key="9e5ca975f4" data-product-id="125" rel="nofollow"
                                                            data-added-text="Browse Wishlist"> <span>Add to
                                                                wishlist</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-element-bottom">

                                                <div class="wd-product-header">
                                                    <h3 class="wd-entities-title"><a
                                                            href="#">{{ $product->product_name }}</a>
                                                    </h3>

                                                    <div class="star-rating wd-style-simple">
                                                        <div> {{ $product->rating }} </div>
                                                    </div>


                                                </div>


                                                <div class="wd-product-cats">
                                                    <a href="#"
                                                        rel="tag">Chairs</a>
                                                </div>


                                                <div class="wrap-price">

                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">Ksh</span>{{ $product->selling_price }}</bdi></span></span>

                                                </div>
                                                <div class="wd-product-footer">
                                                    <div class="wd-add-btn wd-add-btn-replace">
                                                        {{-- <a href="#" data-quantity="1" data-product-id="{{ $product->id }}" class="button product_type_simple add-to-cart-button">
                                                            <span class="button-text">Add to cart</span>
                                                            <span class="spinner" style="display: none;"></span>
                                                        </a> --}}

                                                    <a href="#"
                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop add-to-cart-button"
                                                    data-quantity="1" data-product-id="{{ $product->id }}"
                                                    aria-label="Add &ldquo;Frames Upholstered&rdquo; to your cart"
                                                    aria-describedby="" rel="nofollow"><span>Add to cart</span></a>

                                                    </div>
                                                    <div class="wd-action-buttons">
                                                        <div
                                                            class="wd-compare-btn product-compare-button wd-action-btn wd-style-icon wd-compare-icon wd-tooltip">
                                                            <a href="#" data-id="125" rel="nofollow" data-added-text="Compare products"> <span>Compare</span>
                                                            </a>
                                                        </div>
                                                        <div
                                                            class="quick-view wd-action-btn wd-style-icon wd-quick-view-icon wd-tooltip">
                                                            <a href="#" class="open-quick-view quick-view-button" rel="nofollow" data-id="125">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

