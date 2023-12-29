<div class="vc_row wpb_row vc_row-fluid vc_custom_1685543188683 wd-rs-6477590b77e78">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="wd-6475e95b76ce8"
                    class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6475e95b76ce8 wd-title-color-default wd-title-style-default text-left vc_custom_1685449101590 wd-underline-colored">

                    <div class="liner-continer">
                        <h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">
                            Our categories</h4>
                    </div>

                    <div class="title-after_title  set-cont-mb-s reset-last-child  wd-fontsize-s">
                        Lots of new products and product collections</div>


                </div>

                <div class="wd-categories-wrap wd-wpb wd-rs-64d0cf11b05cd vc_custom_1691406109415">
                    <div class="products woocommerce row categories-style-default wd-spacing-20 columns-5">

                        @foreach ($categories as $category)

                        <div class=" col-lg-20_0 col-md-3 col-sm-4 col-6 first  wd-cat cat-design-zoom-out product-category product first"
                            data-loop="1">
                            <div class="wd-cat-inner">
                                <div class="wd-cat-thumb">
                                    <div class="wd-cat-image">

                                        <picture class="attachment-full size-full" decoding="async" loading="lazy">
                                            <source type="image/webp"
                                                sizes="(max-width: 495px) 100vw, 495px" />
                                            <img width="495" height="496"
                                                src="{{ $category->image }}"
                                                alt="" decoding="async" loading="lazy"
                                                sizes="(max-width: 495px) 100vw, 495px" style="    height: 255px;" />
                                        </picture>
                                    </div>
                                </div>
                                <div class="wd-cat-content wd-fill">
                                    <a class="wd-fill"
                                        href="{{ route('category', $category->category) }}"></a>
                                    <div class="wd-cat-header">
                                        <h3 class="wd-entities-title">
                                            <a href="{{ route('category', $category->category) }}">
                                                {{ $category->category }} </a>
                                        </h3>

                                        <div class="wd-cat-count">
                                            16 products </div>
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
