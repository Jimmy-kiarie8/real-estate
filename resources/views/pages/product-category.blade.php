@extends('pages.layouts.app')
@section('content')
    @include('pages.include.page-slide')
    <div class="container">
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1681139560300 wd-rs-6434275c68801">
        <div
            class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 wd-col-offcanvas-md-sm wd-col-offcanvas-sm wd-alignment-left wd-rs-64342710db958">
            <div class="vc_column-inner vc_custom_1681139479556">
                <div class="wpb_wrapper">
                    <div class="wd-wpb wd-rs-643814347b539 vc_custom_1681396793012">
                        <div id="woocommerce_price_filter-2"
                            class="wd-widget widget sidebar-widget woocommerce widget_price_filter">
                            <h5 class="widget-title">Filter by price</h5>
                            <form method="get" action="https://woodmart.xtemos.com/furniture2/product-category/tables/">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                        style="">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 0%; width: 100%;"></div><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;"></span><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 100%;"></span>
                                    </div>
                                    <div class="price_slider_amount" data-step="10">
                                        <label class="screen-reader-text" for="min_price">Min price</label>
                                        <input type="text" id="min_price" name="min_price" value="210" data-min="210"
                                            placeholder="Min price" style="display: none;">
                                        <label class="screen-reader-text" for="max_price">Max price</label>
                                        <input type="text" id="max_price" name="max_price" value="3400" data-max="3400"
                                            placeholder="Max price" style="display: none;">
                                        <button type="submit" class="button">Filter</button>
                                        <div class="price_label" style="">
                                            Price: <span class="from">$210</span> — <span class="to">$3,400</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div id="woodmart-woocommerce-layered-nav-2"
                            class="wd-widget widget sidebar-widget woodmart-woocommerce-layered-nav">
                            <h5 class="widget-title">Filter by brand</h5>
                            <div class="wd-filter-wrapper">
                                <div class="wd-filter-search wd-search">
                                    <input type="text" placeholder="Find a Brand" aria-label="Find a Brand">
                                    <span class="wd-filter-search-clear wd-action-btn wd-style-icon wd-cross-icon">
                                        <a href="#" aria-label=""></a>
                                    </span>
                                </div>
                                <div class="wd-scroll">
                                    <ul
                                        class="wd-swatches-filter wd-filter-list wd-labels-on wd-size-normal wd-layout-list wd-text-style-1 wd-swatches-brands wd-scroll-content">
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_brand=kettal"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg" style="">
                                                        <picture class="attachment-full size-full" decoding="async"
                                                            loading="lazy">
                                                            <source type="image/webp"
                                                                sizes="(max-width: 180px) 100vw, 180px">
                                                            <img width="180" height="100"
                                                                src="https://woodmart.b-cdn.net/furniture2/wp-content/uploads/sites/11/2023/04/wd-furniture-brand-kettal.jpg"
                                                                alt="" decoding="async" loading="lazy"
                                                                sizes="(max-width: 180px) 100vw, 180px">
                                                        </picture>
                                                    </span><span class="wd-swatch-text">Kettal</span></span><span
                                                    class="wd-filter-lable layer-term-lable">Kettal</span></a> <span
                                                class="count">7</span></li>
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_brand=poliform"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg" style="">
                                                        <picture class="attachment-full size-full" decoding="async"
                                                            loading="lazy">
                                                            <source type="image/webp"
                                                                sizes="(max-width: 180px) 100vw, 180px">
                                                            <img width="180" height="100"
                                                                src="https://woodmart.b-cdn.net/furniture2/wp-content/uploads/sites/11/2023/04/wd-furniture-brand-poliform.jpg"
                                                                alt="" decoding="async" loading="lazy"
                                                                sizes="(max-width: 180px) 100vw, 180px">
                                                        </picture>
                                                    </span><span class="wd-swatch-text">Poliform</span></span><span
                                                    class="wd-filter-lable layer-term-lable">Poliform</span></a> <span
                                                class="count">4</span></li>
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_brand=vitra"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg" style="">
                                                        <picture class="attachment-full size-full" decoding="async"
                                                            loading="lazy">
                                                            <source type="image/webp"
                                                                sizes="(max-width: 180px) 100vw, 180px">
                                                            <img width="180" height="100"
                                                                src="https://woodmart.b-cdn.net/furniture2/wp-content/uploads/sites/11/2023/04/wd-furniture-brand-vitra.jpg"
                                                                alt="" decoding="async" loading="lazy"
                                                                sizes="(max-width: 180px) 100vw, 180px">
                                                        </picture>
                                                    </span><span class="wd-swatch-text">Vitra</span></span><span
                                                    class="wd-filter-lable layer-term-lable">Vitra</span></a> <span
                                                class="count">5</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="woodmart-woocommerce-layered-nav-3"
                            class="wd-widget widget sidebar-widget woodmart-woocommerce-layered-nav">
                            <h5 class="widget-title">Color</h5>
                            <div class="wd-filter-wrapper">
                                <div class="wd-filter-search wd-search">
                                    <input type="text" placeholder="Find a Color" aria-label="Find a Color">
                                    <span class="wd-filter-search-clear wd-action-btn wd-style-icon wd-cross-icon">
                                        <a href="#" aria-label=""></a>
                                    </span>
                                </div>
                                <div class="wd-scroll">
                                    <ul
                                        class="wd-swatches-filter wd-filter-list wd-labels-on wd-size-normal wd-layout-list wd-text-style-2 wd-bg-style-2 wd-shape-round wd-scroll-content">
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_color=american-silver"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg"
                                                        style="background-color: rgb(205,206,208);"></span><span
                                                        class="wd-swatch-text">American Silver</span></span><span
                                                    class="wd-filter-lable layer-term-lable">American Silver</span></a>
                                            <span class="count">1</span></li>
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_color=bone"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg"
                                                        style="background-color: rgb(225,218,207);"></span><span
                                                        class="wd-swatch-text">Bone</span></span><span
                                                    class="wd-filter-lable layer-term-lable">Bone</span></a> <span
                                                class="count">4</span></li>
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_color=brown-sugar"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg"
                                                        style="background-color: rgb(178,104,80);"></span><span
                                                        class="wd-swatch-text">Brown Sugar</span></span><span
                                                    class="wd-filter-lable layer-term-lable">Brown Sugar</span></a> <span
                                                class="count">7</span></li>
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_color=french-bistre"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg"
                                                        style="background-color: rgb(127,111,75);"></span><span
                                                        class="wd-swatch-text">French Bistre</span></span><span
                                                    class="wd-filter-lable layer-term-lable">French Bistre</span></a> <span
                                                class="count">1</span></li>
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_color=gray"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg"
                                                        style="background-color: rgb(129,122,130);"></span><span
                                                        class="wd-swatch-text">Gray</span></span><span
                                                    class="wd-filter-lable layer-term-lable">Gray</span></a> <span
                                                class="count">1</span></li>
                                        <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_color=jet"
                                                class="layered-nav-link"><span class="wd-swatch wd-bg"><span
                                                        class="wd-swatch-bg"
                                                        style="background-color: rgb(54,54,54);"></span><span
                                                        class="wd-swatch-text">Jet</span></span><span
                                                    class="wd-filter-lable layer-term-lable">Jet</span></a> <span
                                                class="count">2</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="woodmart-woocommerce-layered-nav-4"
                            class="wd-widget widget sidebar-widget woodmart-woocommerce-layered-nav">
                            <h5 class="widget-title">Materials</h5>
                            <div class="wd-scroll">
                                <ul
                                    class="wd-swatches-filter wd-filter-list wd-labels-on wd-size-normal wd-layout-list wd-text-style-1 wd-bg-style-1 wd-shape-round wd-checkboxes-on wd-scroll-content">
                                    <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                            href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_materials=aluminium"
                                            class="layered-nav-link"><span
                                                class="wd-filter-lable layer-term-lable">Aluminium</span></a> <span
                                            class="count">2</span></li>
                                    <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                            href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_materials=glass"
                                            class="layered-nav-link"><span
                                                class="wd-filter-lable layer-term-lable">Glass</span></a> <span
                                            class="count">2</span></li>
                                    <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                            href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_materials=metal"
                                            class="layered-nav-link"><span
                                                class="wd-filter-lable layer-term-lable">Metal</span></a> <span
                                            class="count">5</span></li>
                                    <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                            href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_materials=rattan"
                                            class="layered-nav-link"><span
                                                class="wd-filter-lable layer-term-lable">Rattan</span></a> <span
                                            class="count">1</span></li>
                                    <li class="wc-layered-nav-term wd-swatch-wrap"><a rel="nofollow noopener"
                                            href="https://woodmart.xtemos.com/furniture2/product-category/tables/?filter_materials=wood"
                                            class="layered-nav-link"><span
                                                class="wd-filter-lable layer-term-lable">Wood</span></a> <span
                                            class="count">14</span></li>
                                </ul>
                            </div>
                        </div>
                        <div id="wd-widget-stock-status-2" class="wd-widget widget sidebar-widget wd-widget-stock-status">
                            <h5 class="widget-title">Product status</h5>
                            <ul>
                                <li>
                                    <a href="https://woodmart.xtemos.com/furniture2/product-category/tables/?stock_status=onsale"
                                        class="" rel="nofollow noopener">
                                        On sale </a>
                                </li>

                                <li>
                                    <a href="https://woodmart.xtemos.com/furniture2/product-category/tables/?stock_status=instock"
                                        class="" rel="nofollow noopener">
                                        In stock </a>
                                </li>

                                <li>
                                    <a href="https://woodmart.xtemos.com/furniture2/product-category/tables/?stock_status=onbackorder"
                                        class="" rel="nofollow noopener">
                                        On backorder </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="promo-banner-wrapper  wd-rs-64381441ee379 vc_custom_1681396819612">
                        <div id="wd-64381441ee379"
                            class="promo-banner  banner-content-background banner-hover-zoom color-scheme-light banner-btn-size-small banner-btn-style-default  with-btn banner-btn-position-static wd-underline-colored">
                            <div class="main-wrapp-img">
                                <div class="banner-image wd-bg-position-center">
                                    <picture class="attachment-full size-full" loading="lazy">
                                        <source type="image/webp"
                                        <img width="510" height="780"
                                            src="https://woodmart.b-cdn.net/furniture2/wp-content/uploads/sites/11/2023/04/wd-furniture-shop-banner-1.jpg"
                                            alt="" loading="lazy">
                                    </picture>
                                </div>
                            </div>

                            <div class="wrapper-content-banner wd-fill  wd-items-bottom wd-justify-left">
                                <div class="content-banner  text-left">
                                    <h4 class="banner-title wd-font-weight- wd-fontsize-l">Upholstered chair</h4>
                                    <div class="banner-inner set-cont-mb-s reset-last-child wd-fontsize-xs">
                                        <p>Discount 10%</p>
                                    </div>


                                    <div class="banner-btn-wrapper">
                                        <div id="wd-653c4d575bb11" class="  wd-button-wrapper text-left"><a
                                                class="btn btn-color-white btn-style-default btn-style-round btn-size-small">Shop
                                                Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 wd-rs-6434275179458">
            <div class="vc_column-inner vc_custom_1681139542069">
                <div class="wpb_wrapper">
                    <div
                        class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1681138811146 vc_row-o-content-middle vc_row-flex wd-rs-6434247630175">
                        <div
                            class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 wd-enabled-flex wd-rs-6295b3ae6abff">
                            <div class="vc_column-inner vc_custom_1653978035648">
                                <div class="wpb_wrapper">
                                    <div
                                        class="wd-shop-result-count wd-wpb wd-rs-6475f1a392a22 hidden-md hidden-sm hidden-xs wd-enabled-width vc_custom_1685451177048">
                                        <p class="woocommerce-result-count">
                                            Showing 1–12 of 16 results</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 wd-enabled-flex wd-rs-64342471f3b8b">
                            <div class="vc_column-inner vc_custom_1681138804708">
                                <div class="wpb_wrapper">
                                    <div
                                        class="wd-wpb wd-rs-625583ff5f76a hidden-lg wd-enabled-width vc_custom_1649771534702">
                                        <div class="wd-off-canvas-btn wd-action-btn wd-style-text wd-burger-icon">
                                            <a href="#" rel="nofollow">
                                                Show sidebar </a>
                                        </div>
                                    </div>

                                    <div
                                        class="wd-shop-prod-per-page wd-wpb wd-rs-6295b3632e35b hidden-md hidden-sm hidden-xs wd-enabled-width vc_custom_1653977959986">

                                        <div class="wd-products-per-page">
                                            <span class="per-page-title">
                                                Show </span>

                                            <a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?per_page=9"
                                                class="per-page-variation">
                                                <span>
                                                    9 </span>
                                            </a>
                                            <span class="per-page-border"></span>
                                            <a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?per_page=12"
                                                class="per-page-variation current-variation">
                                                <span>
                                                    12 </span>
                                            </a>
                                            <span class="per-page-border"></span>
                                            <a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?per_page=18"
                                                class="per-page-variation">
                                                <span>
                                                    18 </span>
                                            </a>
                                            <span class="per-page-border"></span>
                                            <a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?per_page=24"
                                                class="per-page-variation">
                                                <span>
                                                    24 </span>
                                            </a>
                                            <span class="per-page-border"></span>
                                        </div>
                                    </div>
                                    <div
                                        class="wd-shop-view wd-wpb wd-rs-646f70a62978b hidden-md hidden-sm hidden-xs wd-enabled-width vc_custom_1685024939837">
                                        <div class="wd-products-shop-view products-view-grid_list">

                                            <a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?shop_view=list"
                                                class="shop-view per-row-list" aria-label="List view"></a>


                                            <a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?shop_view=grid&amp;per_row=3"
                                                class="shop-view per-row-3" aria-label="Grid view 3"></a>

                                            <a rel="nofollow noopener"
                                                href="https://woodmart.xtemos.com/furniture2/product-category/tables/?shop_view=grid&amp;per_row=4"
                                                class="shop-view per-row-4" aria-label="Grid view 4"></a>
                                        </div>
                                    </div>
                                    <div
                                        class="wd-shop-ordering wd-wpb wd-rs-64342611bdcbe wd-enabled-width vc_custom_1681139225248">
                                        <form class="woocommerce-ordering wd-style-default wd-ordering-mb-icon"
                                            method="get">
                                            <select name="orderby" class="orderby" aria-label="Shop order">
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating" selected="selected">Sort by average rating</option>
                                                <option value="date">Sort by latest</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                            <input type="hidden" name="paged" value="1">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wd-wc-notices wd-wpb wd-rs-6213963c263b2">
                        <div class="woocommerce-notices-wrapper"></div>
                    </div>
                    <div class="wd-shop-product wd-wpb wd-rs-64787c53bf6e4">
                        <div class="wd-sticky-loader wd-position-bottom"><span class="wd-loader"></span></div>


                        <div class="products elements-grid wd-products-holder  wd-spacing-20 grid-columns-3 pagination-pagination wd-stretch-cont-lg wd-stretch-cont-md wd-stretch-cont-sm align-items-start wd-products-with-bg row"
                            data-source="main_loop" data-min_price="" data-max_price="" data-columns="3">



                            @foreach ($products as $product)


                            <div class="product-grid-item product wd-hover-buttons-on-hover  col-lg-4 col-md-4 col-6 first  type-product post-297 status-publish instock product_cat-tables has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                data-loop="1" data-id="297">


                                <div class="product-wrapper">
                                    <div class="product-element-top wd-quick-shop">
                                        <a href="#"
                                            class="product-image-link">
                                            <div class="wd-product-grid-slider wd-fill">
                                                <div class="wd-product-grid-slide"
                                                    data-image-url="{{ $product->image }}"
                                                    data-image-id="0"></div>
                                            </div>

                                            <div class="wd-product-grid-slider-nav wd-fill wd-hide-md">
                                                <div class="wd-prev"></div>
                                                <div class="wd-next"></div>
                                            </div>

                                            <picture class="attachment-full size-full" decoding="async" loading="lazy">
                                                <source type="image/webp"
                                                    sizes="(max-width: 700px) 100vw, 700px">
                                                <img width="700" height="800"
                                                    src="{{ $product->image }}"
                                                    alt="" decoding="async" loading="lazy"
                                                    sizes="(max-width: 700px) 100vw, 700px">
                                            </picture>
                                        </a>


                                        <div class="wd-buttons wd-pos-r-t">
                                            <div class="wd-wishlist-btn wd-action-btn wd-style-icon wd-wishlist-icon">
                                                <a class="" href="#"
                                                    data-key="06018b4538" data-product-id="297" rel="nofollow"
                                                    data-added-text="Browse Wishlist">
                                                    <span>Add to wishlist</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-element-bottom">

                                        <div class="wd-product-header">
                                            <h3 class="wd-entities-title"><a
                                                    href="#">{{$product->product_name}}</a></h3>

                                            <div class="star-rating wd-style-simple" role="img"
                                                aria-label="Rated 5 out of 5">
                                                <div>
                                                    {{$product->rating}}</div>
                                            </div>


                                        </div>


                                        <div class="wd-product-cats">
                                            <a href="#"
                                                rel="tag">Tables</a>
                                        </div>


                                        <div class="wrap-price">

                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol"></span>{{$product->selling_price}}</bdi></span></span>

                                        </div>





                                        <div class="wd-product-footer">
                                            <div class="wd-add-btn wd-add-btn-replace">

                                                <a href="#"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop add-to-cart-button"
                                                data-quantity="1" data-product-id="{{ $product->id }}"
                                                aria-label="Add &ldquo;Frames Upholstered&rdquo; to your cart"
                                                aria-describedby="" rel="nofollow"><span>Add to cart</span></a>
                                            </div>
                                            <div class="wd-action-buttons">
                                                <div
                                                    class="wd-compare-btn product-compare-button wd-action-btn wd-style-icon wd-compare-icon wd-tooltip">
                                                    <a href="https://woodmart.xtemos.com/furniture2/compare/"
                                                        data-id="297" rel="nofollow" data-added-text="Compare products">
                                                        <span>Compare</span>
                                                    </a>
                                                </div>
                                                <div
                                                    class="quick-view wd-action-btn wd-style-icon wd-quick-view-icon wd-tooltip">
                                                    <a href="https://woodmart.xtemos.com/furniture2/product/giro-lr/"
                                                        class="open-quick-view quick-view-button" rel="nofollow"
                                                        data-id="297">Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach




                        </div>
                        <div class="wd-loop-footer products-footer">
                            <nav class="woocommerce-pagination wd-pagination">
                                <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers"
                                            href="https://woodmart.xtemos.com/furniture2/product-category/tables/page/2/">2</a>
                                    </li>
                                    <li><a class="next page-numbers"
                                            href="https://woodmart.xtemos.com/furniture2/product-category/tables/page/2/">→</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
