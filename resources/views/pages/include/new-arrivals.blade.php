<div class="vc_row wpb_row vc_row-fluid vc_custom_1685543476440 vc_row-o-content-middle vc_row-flex wd-rs-64775a2e7ee54">
    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-8 vc_col-md-7 wd-rs-6437f69a64877">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="wd-6475e9b636284"
                    class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6475e9b636284 wd-title-color-default wd-title-style-default text-left  wd-underline-colored">

                    <div class="liner-continer">
                        <h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">
                            New Arrivals</h4>
                    </div>

                    <div class="title-after_title  set-cont-mb-s reset-last-child  wd-fontsize-s">
                        The most popular products from the collection</div>


                </div>

                <div class=" wd-rs-64d4925c55813 vc_custom_1691652707787 wd-wpb">

                    <div id="carousel-233"
                        class="wd-carousel-container  slider-type-product wd-rs-64d4925c55813 vc_custom_1691652707787 products wd-carousel-spacing-20 wd-products-with-bg wd-stretch-cont-lg wd-stretch-cont-md wd-stretch-cont-sm">
                        <div class="owl-carousel wd-owl owl-items-lg-3 owl-items-md-2 owl-items-sm-2 owl-items-xs-2">

                            @foreach ($new as $item)

                            <div class="slide-product owl-carousel-item">

                                <div class="product-grid-item product wd-hover-buttons-on-hover type-product post-198 status-publish instock product_cat-chairs has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                    data-loop="1" data-id="198">


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
                                                    src="{{ $item->image }}"
                                                    class="attachment-350x400 size-350x400" alt=""
                                                    decoding="async" loading="lazy" />
                                            </a>


                                            <div class="wd-buttons wd-pos-r-t">
                                                <div
                                                    class="wd-wishlist-btn wd-action-btn wd-style-icon wd-wishlist-icon">
                                                    <a class=""
                                                        href="https://woodmart.xtemos.com/furniture2/wishlist/"
                                                        data-key="9e5ca975f4" data-product-id="198" rel="nofollow"
                                                        data-added-text="Browse Wishlist">
                                                        <span>Add to wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-element-bottom">

                                            <div class="wd-product-header">
                                                <h3 class="wd-entities-title"><a
                                                        href="#">{{$item->product_name}}</a></h3>
                                            </div>

                                            <div class="wd-product-cats">
                                                <a href="#"
                                                    rel="tag">Chairs</a>
                                            </div>


                                            <div class="wrap-price">

                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $item->selling_price }}</bdi></span></span>

                                            </div>


                                            <div class="wd-product-footer">
                                                <div class="wd-add-btn wd-add-btn-replace">
                                                    <a href="#"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop add-to-cart-button"
                                                        data-quantity="1" data-product-id="{{ $item->id }}"
                                                        aria-label="Add &ldquo;Frames Upholstered&rdquo; to your cart"
                                                        aria-describedby="" rel="nofollow"><span>Add to cart</span></a>
                                                </div>
                                                <div class="wd-action-buttons">
                                                    <div
                                                        class="wd-compare-btn product-compare-button wd-action-btn wd-style-icon wd-compare-icon wd-tooltip">
                                                        <a href="https://woodmart.xtemos.com/furniture2/compare/"
                                                            data-id="198" rel="nofollow"
                                                            data-added-text="Compare products">
                                                            <span>Compare</span>
                                                        </a>
                                                    </div>
                                                    <div
                                                        class="quick-view wd-action-btn wd-style-icon wd-quick-view-icon wd-tooltip">
                                                        <a href="https://woodmart.xtemos.com/furniture2/product/frames-upholstered/"
                                                            class="open-quick-view quick-view-button" rel="nofollow"
                                                            data-id="198">Quick
                                                            view</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            @endforeach

                        </div> <!-- end product-items -->
                    </div> <!-- end #carousel-233 -->


                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-5 wd-rs-6437f6a67117c">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div
                    class="wd-image-hotspot-wrapper wd-rs-647756e95d8eb hotspot-action-hover hotspot-icon-default color-scheme-dark wd-hotspot-static vc_custom_1685542637462">
                    <div class="wd-image-hotspot-hotspots">
                        <picture class="wd-image-hotspot-img" decoding="async" loading="lazy">
                            <source type="image/webp"
                                sizes="(max-width: 460px) 100vw, 460px" />
                            <img width="460" height="591"
                                src="https://www.goodlife.co.ke/wp-content/uploads/2021/09/OCTOBER-WEB-BANNER-397-by-308-03.jpg"
                                alt="" decoding="async" loading="lazy"
                                sizes="(max-width: 460px) 100vw, 460px" />
                        </picture>
                        <div class="wd-image-hotspot hotspot-type-product" style="left: 19.311%; top: 67.748%;"><span
                                class="hotspot-sonar"></span>
                            <div class="hotspot-btn wd-fill"></div>
                            <div class="hotspot-product hotspot-content hotspot-dropdown-left">
                                <div class="hotspot-content-image"><a
                                        href="#">
                                        <picture class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            decoding="async" loading="lazy">
                                            <source type="image/webp"
                                                sizes="(max-width: 430px) 100vw, 430px" />
                                            <img width="430" height="491"
                                                src="https://www.goodlife.co.ke/wp-content/uploads/2022/05/OCTOBER-WEB-BANNER-397-by-308-01.jpg"
                                                alt="" decoding="async" loading="lazy"
                                                sizes="(max-width: 430px) 100vw, 430px" />
                                        </picture>
                                    </a></div>
                                <h4 class="wd-entities-title"><a
                                        href="#">Frames
                                        Upholstered</a></h4>
                                <div class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">&#36;</span>399.00</bdi></span>
                                </div>
                                <div class="hotspot-content-text wd-more-desc set-cont-mb-s reset-last-child">
                                    <div class="wd-more-desc-inner">Soft curves
                                        and tapering slender lines are inspired by
                                        modern design. The result is a classic yet
                                        contemporary chair, ideally combined with
                                        the table by the same name.</div>
                                </div><a href="?add-to-cart=198"
                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                    data-product_id="198" rel="nofollow">Add to
                                    cart</a>
                            </div>
                        </div>
                        <div class="wd-image-hotspot hotspot-type-product" style="left: 29.019%; top: 42.954%;"><span
                                class="hotspot-sonar"></span>
                            <div class="hotspot-btn wd-fill"></div>
                            <div class="hotspot-product hotspot-content hotspot-dropdown-left">
                                <div class="hotspot-content-image"><a
                                        href="https://woodmart.xtemos.com/furniture2/product/skygarden/">
                                        <picture class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            decoding="async" loading="lazy">
                                            <source type="image/webp"
                                                sizes="(max-width: 430px) 100vw, 430px" />
                                            <img width="430" height="491"
                                                src="https://woodmart.xtemos.com/furniture2/wp-content/uploads/sites/11/2023/04/wd-furniture-lighting-prod-4-1-430x491.jpg"
                                                alt="" decoding="async" loading="lazy"
                                                sizes="(max-width: 430px) 100vw, 430px" />
                                        </picture>
                                    </a></div>
                                <h4 class="wd-entities-title"><a
                                        href="https://woodmart.xtemos.com/furniture2/product/skygarden/">Skygarden</a>
                                </h4>
                                <div class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">&#36;</span>780.00</bdi></span>
                                </div>
                                <div class="hotspot-content-text wd-more-desc set-cont-mb-s reset-last-child">
                                    <div class="wd-more-desc-inner">The light,
                                        however, is not emitted by a bulb or by an
                                        LED board, but by the elements that form the
                                        structure of the lampshade. By weaving
                                        filaments of light, this unique lamp
                                        seamlessly combines.</div>
                                </div><a href="?add-to-cart=792"
                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-button"
                                    data-product_id="792" rel="nofollow">Add to
                                    cart</a>
                            </div>
                        </div>
                        <div class="wd-image-hotspot hotspot-type-product" style="left: 61.378%; top: 80.756%;"><span
                                class="hotspot-sonar"></span>
                            <div class="hotspot-btn wd-fill"></div>
                            <div class="hotspot-product hotspot-content hotspot-dropdown-left">
                                <div class="hotspot-content-image"><a
                                        href="#">
                                        <picture class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            decoding="async" loading="lazy">
                                            <source type="image/webp"
                                                sizes="(max-width: 430px) 100vw, 430px" />
                                            <img width="430" height="491"
                                                src="https://www.goodlife.co.ke/wp-content/uploads/2023/09/OCTOBER-WEB-BANNER-397-by-308-05.jpg"
                                                alt="" decoding="async" loading="lazy"
                                                sizes="(max-width: 430px) 100vw, 430px" />
                                        </picture>
                                    </a></div>
                                <h4 class="wd-entities-title"><a
                                        href="#">Mags</a>
                                </h4>
                                <div class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">&#36;</span>3,620.00</bdi></span>
                                </div>
                                <div class="hotspot-content-text wd-more-desc set-cont-mb-s reset-last-child">
                                    <div class="wd-more-desc-inner">The slender
                                        organic forms are fluid and graceful.‎
                                        Noguchi emphasises the lightness of the
                                        elements with thin yet comfortable
                                        upholstery and a choice of cover fabrics in
                                        natural colours.‎</div>
                                </div><a href="?add-to-cart=371"
                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                    data-product_id="371" rel="nofollow">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
