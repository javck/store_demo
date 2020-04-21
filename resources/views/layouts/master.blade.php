@php
    use App\Http\Model\Helper;
@endphp
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:300,400,500,600,700|Merriweather:300,400,300i,400i"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" type="text/css" />
    <!-- eCommerce Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ Helper::url('demos/ecommerce/ecommerce.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ Helper::url('demos/ecommerce/css/fonts.css') }}" type="text/css" />
    <!-- / -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css"
        href="{{ Helper::url('include/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css"
        href="{{ Helper::url('include/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ Helper::url('include/rs-plugin/css/navigation.css') }}">

    <link rel="stylesheet" href="{{ Helper::url('css/colors.php?color=000000') }}"
        type="text/css" />

    <!-- Document Title
	============================================= -->
    {{--  挖洞給子視圖去填，但附上可被繼承的內容  --}}
    @section('title')
    <title>Laravel Shop | Canvas</title>
    @show


</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Flash Message 出現位置-->
        @include('flash::message')

        <!-- Header
		============================================= -->
        <header id="header" class="full-header no-sticky clearfix">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
					============================================= -->
                    <div id="logo">
                        <a href="{{ url('/') }}" class="standard-logo"><img src="{{ Voyager::image(setting('site.logo')) }}"
                                alt="{{ setting('site.title') }}"></a>
                        <a href="{{ url('/') }}" class="retina-logo"><img
                                src="{{ Voyager::image(setting('site.logo')) }}"
                                alt="{{ setting('site.title') }}"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
					============================================= -->
                    <nav id="primary-menu" class="style-ecommerce">
                        <!-- 從menu builder取出選單資料，並用resources/views/my_menu.blade.php的結構來呈現 -->
                        {{  menu('frontend','my_menu') }}

                        <!-- Top Search
						============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-line2-magnifier"></i><i
                                    class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value=""
                                    placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                        <!-- Top Cart
						============================================= -->
                        <div id="top-cart">
                            @include('includes.top_cart')
                        </div><!-- #top-cart end -->

                        <!-- Top Account
						============================================= -->
                        <div id="top-account">
                            @include('includes.top_account')
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

        <!-- Slider
		============================================= -->
        <section id="slider" class="slider-element swiper_wrapper full-screen clearfix" data-autoplay="9000"
            data-speed="800" data-loop="true" data-grab="false">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <div class="swiper-slide"
                            style="background: #FFF url('{{ $slider->pic }}') no-repeat center right; background-size: auto 100%;">
                            <div class="container clearfix">
                                <div class="slider-caption" style="margin-top: -30px;">
                                    <div class="emphasis-title nobottommargin">
                                        <h2 class="bottommargin t700"
                                            style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                            {!! $slider->title !!}</h2>

                                        <p class="lead topmargin-sm d-none d-sm-block"
                                            style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                            {!! $slider->content !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-number font-primary">O{{ $loop->iteration }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
            </div>

        </section><!-- #Slider End -->

        <!-- Content
		============================================= -->
        {{--  挖洞給子視圖去填  --}}
        @yield('content')

        {{-- 載入footer  --}}
        @include('includes.footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-line-arrow-up"></div>

    <!-- External JavaScripts
	============================================= -->
    <script src="{{ Helper::url('js/jquery.js') }}"></script>
    <script src="{{ Helper::url('js/plugins.js') }}"></script>
    <script src="{{ Helper::url('js/functions.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script src="{{ Helper::url('include/rs-plugin/js/jquery.themepunch.tools.min.js') }}">
    </script>
    <script src="{{ Helper::url('include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}">
    </script>

    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script
        src="{{ Helper::url('include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}">
    </script>

    <!-- ADD-ONS JS FILES -->
    <script>
        // Topbar Hide
        $('#top-bar').on('click', '#close-bar', function () {
            $(this).parents('#top-bar').slideUp(300);
            $('body').css('padding-top', 0);
        })

        // Custom Carousel
        $('.owl-carousel').owlCarousel({
            items: 1,
            dotsContainer: '#item-color-dots',
            loop: true,
        });



        <
        /body> < /
        html >
