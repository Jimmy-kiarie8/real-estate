<div class="vc_row wpb_row vc_row-fluid wd-rs-646e1ce12a043">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div id="wd-6475e99a529fe"
                    class="title-wrapper wd-wpb set-mb-s reset-last-child  wd-rs-6475e99a529fe wd-title-color-default wd-title-style-default text-left vc_custom_1685449122110 wd-underline-colored">

                    <div class="liner-continer">
                        <h4 class="woodmart-title-container title  wd-font-weight- wd-fontsize-xxl">
                            Todays Brands
                        </h4>
                    </div>

                    <div class="title-after_title  set-cont-mb-s reset-last-child  wd-fontsize-s">
                        Discover lots products from popular brands</div>
                </div>

            </div>
        </div>
    </div>
</div>

@foreach ($brands as $brand)
    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-1/5 vc_col-md-3 wd-rs-646e1e2622535">
        <div class="vc_column-inner vc_custom_1684938281173">
            <div class="wpb_wrapper">
                <div class="info-box-wrapper">
                    <div id="wd-{{ $brand->id }}"
                        class="wd-rs-{{ $brand->id }} cursor-pointer wd-info-box wd-wpb text-left box-icon-align-left box-style-bg-hover color-scheme-light wd-bg-none wd-items-middle color-scheme-hover-light vc_custom_1685542510758">
                        <div class="box-icon-wrapper box-with-icon box-icon-simple">
                            <div class="info-box-icon">
                                <img width="64" height="64"
                                    src="https://woodmart.xtemos.com/furniture2/wp-content/uploads/sites/11/2023/04/wd-furniture-circle-brand-hay-64x64.png"
                                    class="attachment-64x64 size-64x64" alt="" decoding="async"
                                    loading="lazy" />
                            </div>
                        </div>
                        <div class="info-box-content">
                            <h4 class="info-box-title title box-title-style-default wd-fontsize-m">
                                {{ $brand->brand }}
                            </h4>
                            <div class="info-box-inner set-cont-mb-s reset-last-child">
                                <p>{{ $brand->brand }}</p>
                            </div>
                        </div>

                        <style>
                            #wd-{{ $brand->id }} {
                                background-image: url({{ $brand->image }});
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: cover;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


</div>
