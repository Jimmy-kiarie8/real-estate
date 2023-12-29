<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://woodmart.xtemos.com/furniture2/xmlrpc.php">

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO plugin v21.0 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description"
        content="WoodMart is a premium WooCommerce theme that is perfectly optimized for performance. Build your online store without hassle." />
    <link rel="canonical" href="https://woodmart.xtemos.com/furniture2/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home - Furniture 2" />
    <meta property="og:description"
        content="WoodMart is a premium WooCommerce theme that is perfectly optimized for performance. Build your online store without hassle." />
    <meta property="og:url" content="https://woodmart.xtemos.com/furniture2/" />
    <meta property="og:site_name" content="Furniture 2" />
    <meta property="article:modified_time" content="2023-08-15T15:51:52+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />

    <link rel='stylesheet' id='xts-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Work+Sans%3A400%2C600%7CUrbanist%3A400%2C600%2C700%2C800%7CLato%3A400%2C700&#038;display=swap&#038;ver=7.3.0'
        type='text/css' media='all' />
    <script type='text/javascript'
        src='https://woodmart.xtemos.com/furniture2/wp-includes/js/jquery/jquery.min.js?ver=3.7.0' id='jquery-core-js'>
    </script>
    <script type='text/javascript'
        src='https://woodmart.xtemos.com/furniture2/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://woodmart.xtemos.com/furniture2/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.1.1'
        id='jquery-blockui-js'></script>

    <script type='text/javascript'
        src='https://woodmart.xtemos.com/furniture2/wp-content/themes/woodmart/js/libs/device.min.js?ver=7.3.0'
        id='wd-device-library-js'></script>
    <script type='text/javascript'
        src='https://woodmart.xtemos.com/furniture2/wp-content/themes/woodmart/js/scripts/global/scrollBar.min.js?ver=7.3.0'
        id='wd-scrollbar-js'></script>
    <meta name="generator" content="Site Kit by Google 1.107.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <script src="https://kit.fontawesome.com/e35e9197e6.js" crossorigin="anonymous"></script>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    {{-- Styles --}}

</head>

<body
    class="home page-template-default page page-id-6 theme-woodmart woocommerce-no-js wrapper-custom  categories-accordion-on woodmart-ajax-shop-on offcanvas-sidebar-mobile offcanvas-sidebar-tablet sticky-toolbar-on wpb-js-composer js-comp-ver-7.0 vc_responsive">

    @include('pages.include.header')

    <div class="main-page-wrapper">
        @include('pages.include.overlay')

        <!-- MAIN CONTENT AREA -->
        @yield('content')

    </div>
    {{-- Footer section --}}
    @include('pages.include.footer')
    {{-- Footer section --}}


    {{-- Mobile section --}}
    @include('pages.include.mobile')
    {{-- Mobile section --}}



    {{-- Mobile section --}}
    @include('pages.include.scripts')
    {{-- Mobile section --}}
</body>

</html>
