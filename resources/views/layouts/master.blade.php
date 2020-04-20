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

        <!-- Top Bar
		============================================= -->
        <div id="top-bar" class="dark">

            <div class="container clearfix">
                <p class="center">Back to the future of awesome Bags: Introducing canvas market. <a href="#">Shop
                        Now</a><a href="#" id="close-bar"><i class="icon-line-cross fright"></i></a></p>
            </div>

        </div>

        <!-- Header
		============================================= -->
        <header id="header" class="full-header no-sticky clearfix">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
					============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo"><img src="/ecommerce/images/logo.png"
                                alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo"><img src="/ecommerce/images/logo@2x.png"
                                alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
					============================================= -->
                    <nav id="primary-menu" class="style-ecommerce">

                        <ul>
                            <li class="current"><a href="#">
                                    <div>Home</div>
                                </a>
                                <ul>
                                    <li><a href="index-corporate.html">
                                            <div>Home - Corporate</div>
                                        </a>
                                        <ul>
                                            <li><a href="index-corporate.html">
                                                    <div>Corporate - Layout 1</div>
                                                </a></li>
                                            <li><a href="index-corporate-2.html">
                                                    <div>Corporate - Layout 2</div>
                                                </a></li>
                                            <li><a href="index-corporate-3.html">
                                                    <div>Corporate - Layout 3</div>
                                                </a></li>
                                            <li><a href="index-corporate-4.html">
                                                    <div>Corporate - Layout 4</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-portfolio.html">
                                            <div>Home - Portfolio</div>
                                        </a>
                                        <ul>
                                            <li><a href="index-portfolio.html">
                                                    <div>Portfolio - Layout 1</div>
                                                </a></li>
                                            <li><a href="index-portfolio-2.html">
                                                    <div>Portfolio - Layout 2</div>
                                                </a></li>
                                            <li><a href="index-portfolio-3.html">
                                                    <div>Portfolio - Masonry</div>
                                                </a></li>
                                            <li><a href="index-portfolio-4.html">
                                                    <div>Portfolio - AJAX</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-blog.html">
                                            <div>Home - Blog</div>
                                        </a>
                                        <ul>
                                            <li><a href="index-blog.html">
                                                    <div>Blog - Layout 1</div>
                                                </a></li>
                                            <li><a href="index-blog-2.html">
                                                    <div>Blog - Layout 2</div>
                                                </a></li>
                                            <li><a href="index-blog-3.html">
                                                    <div>Blog - Layout 3</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-shop.html">
                                            <div>Home - Shop</div>
                                        </a>
                                        <ul>
                                            <li><a href="index-shop.html">
                                                    <div>Shop - Layout 1</div>
                                                </a></li>
                                            <li><a href="index-shop-2.html">
                                                    <div>Shop - Layout 2</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-magazine.html">
                                            <div>Home - Magazine</div>
                                        </a>
                                        <ul>
                                            <li><a href="index-magazine.html">
                                                    <div>Magazine - Layout 1</div>
                                                </a></li>
                                            <li><a href="index-magazine-2.html">
                                                    <div>Magazine - Layout 2</div>
                                                </a></li>
                                            <li><a href="index-magazine-3.html">
                                                    <div>Magazine - Layout 3</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="landing.html">
                                            <div>Home - Landing Page</div>
                                        </a>
                                        <ul>
                                            <li><a href="landing.html">
                                                    <div>Landing Page - Layout 1</div>
                                                </a></li>
                                            <li><a href="landing-2.html">
                                                    <div>Landing Page - Layout 2</div>
                                                </a></li>
                                            <li><a href="landing-3.html">
                                                    <div>Landing Page - Layout 3</div>
                                                </a></li>
                                            <li><a href="landing-4.html">
                                                    <div>Landing Page - Layout 4</div>
                                                </a></li>
                                            <li><a href="landing-5.html">
                                                    <div>Landing Page - Layout 5</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-fullscreen-image.html">
                                            <div>Home - Full Screen</div>
                                        </a>
                                        <ul>
                                            <li><a href="index-fullscreen-image.html">
                                                    <div>Full Screen - Image</div>
                                                </a></li>
                                            <li><a href="index-fullscreen-slider.html">
                                                    <div>Full Screen - Slider</div>
                                                </a></li>
                                            <li><a href="index-fullscreen-video.html">
                                                    <div>Full Screen - Video</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-onepage.html">
                                            <div>Home - One Page</div>
                                        </a>
                                        <ul>
                                            <li><a href="index-onepage.html">
                                                    <div>One Page - Default</div>
                                                </a></li>
                                            <li><a href="index-onepage-2.html">
                                                    <div>One Page - Submenu</div>
                                                </a></li>
                                            <li><a href="index-onepage-3.html">
                                                    <div>One Page - Dots Style</div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-wedding.html">
                                            <div>Home - Wedding</div>
                                        </a></li>
                                    <li><a href="index-restaurant.html">
                                            <div>Home - Restaurant</div>
                                        </a></li>
                                    <li><a href="index-events.html">
                                            <div>Home - Events</div>
                                        </a></li>
                                    <li><a href="index-parallax.html">
                                            <div>Home - Parallax</div>
                                        </a></li>
                                    <li><a href="index-app-showcase.html">
                                            <div>Home - App Showcase</div>
                                        </a></li>
                                </ul>
                            </li>
                            <!-- Mega Menu
							============================================= -->
                            <li class="mega-menu"><a href="#">
                                    <div>Men</div>
                                </a>
                                <div class="mega-menu-content style-2 clearfix"
                                    style="background-image: url('http://themes.semicolonweb.com/html/canvas/images/shop/shop-menu.jpg'); background-repeat: no-repeat; background-position: right bottom;">
                                    <ul class="mega-menu-column col-xl-2 col-lg-3">
                                        <li>
                                            <div class="widget clearfix">

                                                <div class="iportfolio clearfix">
                                                    <div class="portfolio-image clearfix">
                                                        <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/1-1.jpg"
                                                                alt="Grey Bag"></a>
                                                        <div class="product-cart"><a href="#"><i
                                                                    class="icon-shopping-cart"></i></a></div>
                                                        <div class="product-quickview"><a href="#" data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Available Sizes: S | M | L"><i
                                                                    class="icon-info"></i></a></div>
                                                    </div>
                                                    <div class="portfolio-desc nobottompadding">
                                                        <h3><a href="#">Leather Bag</a></h3>
                                                        <span class="notopmargin"><a href="#">Messenger Bag</a></span>
                                                        <div class="item-price">
                                                            <span>&euro;29.99</span>
                                                            <div class="rating-stars">
                                                                <i class="icon-star3"></i><i class="icon-star3"></i><i
                                                                    class="icon-star3"></i><i class="icon-star3"></i><i
                                                                    class="icon-star3"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-column col-lg-3">
                                        <li>
                                            <div class="widget clearfix">

                                                <h4 class="highlight-me">Last Viewed Items</h4>
                                                <div class="widget-last-view">
                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/2-1.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="#">{{ $item_name }}</a></h4>
                                                            </div>
                                                            <ul class="entry-meta">
                                                                <li class="color">${{ $price }}</li>
                                                                <li><i class="icon-star3"></i> <i
                                                                        class="icon-star3"></i> <i
                                                                        class="icon-star3"></i> <i
                                                                        class="icon-star3"></i> <i
                                                                        class="icon-star3"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/3-1.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Laptop Bag</a></h4>
                                                            </div>
                                                            <ul class="entry-meta">
                                                                <li class="color">$19</li>
                                                                <li><i class="icon-star3"></i> <i
                                                                        class="icon-star3"></i> <i
                                                                        class="icon-star-empty"></i> <i
                                                                        class="icon-star-empty"></i> <i
                                                                        class="icon-star-empty"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/4-1.jpg"
                                                                    alt="Image"></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="#">College Backpack</a></h4>
                                                            </div>
                                                            <ul class="entry-meta">
                                                                <li class="color">$19.99</li>
                                                                <li><i class="icon-star3"></i> <i
                                                                        class="icon-star3"></i> <i
                                                                        class="icon-star3"></i> <i
                                                                        class="icon-star-half-full"></i> <i
                                                                        class="icon-star-empty"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-column col-lg-2">
                                        <li class="mega-menu-title"><a href="#">
                                                <div>Categories</div>
                                            </a>
                                            <ul>
                                                <li><a href="#">
                                                        <div><i class="icon-t-shirt"></i>Travel Bags</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div><i class="icon-laptop2"></i>Backpacks</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div><i class="icon-clock2"></i>Leather Bag</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div><i class="icon-plane"></i>Travel Bag</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div><i class="icon-barbell"></i>Trolley</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div><i class="icon-heart3"></i>Workout Bag</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div><i class="icon-film"></i>Hand Bag</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-column col-lg-2 noleftborder">
                                        <li class="mega-menu-title"><a href="#">
                                                <div>Popular Brands</div>
                                            </a>
                                            <ul>
                                                <li><a href="#">
                                                        <div>United Colors</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Burton London</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Calvin Clein Jeans</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Dorothy Perkins</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Tommy Hilfiger</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Gucci</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- .mega-menu end -->
                            <li><a href="#">
                                    <div>Women</div>
                                </a>
                                <div class="mega-menu-content style-2 clearfix">
                                    <ul class="mega-menu-column col-lg-6">
                                        <li class="mega-menu-title"><a href="#">
                                                <div>Footwear</div>
                                            </a>
                                            <ul>
                                                <li><a href="#">
                                                        <div>Casual Shoes</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Formal Shoes</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Sports shoes</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Flip Flops</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Slippers</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Sports Sandals</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Party Shoes</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-column col-lg-6">
                                        <li class="mega-menu-title"><a href="#">
                                                <div>Clothing</div>
                                            </a>
                                            <ul>
                                                <li><a href="#">
                                                        <div>Casual Shirts</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>T-Shirts</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Collared Tees</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Pants / Trousers</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Ethnic Wear</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Jeans</div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div>Sweamwear</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- .mega-menu end -->
                            <li><a href="#">
                                    <div>Accessories</div>
                                </a></li>
                            <li><a href="#">
                                    <div>Sale</div>
                                </a></li>
                            <li><a href="#">
                                    <div>Blog</div>
                                </a></li>
                            <li><a href="#">
                                    <div>Contact</div>
                                </a></li>
                        </ul>

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
                            <a href="#" id="top-cart-trigger"><i class="icon-line2-handbag"></i><span>5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/1.jpg"
                                                    alt="Blue Shoulder Bag" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#" class="t400">Blue Shoulder Bag</a>
                                            <span class="top-cart-item-price">$19.99</span>
                                            <span class="top-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#" class="t400"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/6.jpg"
                                                    alt="Leather Bag" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#" class="t400">Leather Bag</a>
                                            <span class="top-cart-item-price">$24.99</span>
                                            <span class="top-cart-item-quantity">x 3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price t600 font-secondary"
                                        style="color: #333;">$114.95</span>
                                    <button class="button button-dark button-circle button-small nomargin fright">View
                                        Cart</button>
                                </div>
                            </div>
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
                    <div class="swiper-slide"
                        style="background: #FFF url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/slider/1.jpg') no-repeat center right; background-size: auto 100%;">
                        <div class="container clearfix">
                            <div class="slider-caption" style="margin-top: -30px;">
                                <div class="emphasis-title nobottommargin">
                                    <h2 class="bottommargin t700"
                                        style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                        用Laravel建立<br>電子商務網站</h2>

                                    <p class="lead topmargin-sm d-none d-sm-block"
                                        style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                        Competently reintermediate user friendly scenarios after global synergy.
                                        Globally build compelling niche markets rather than bricks-and-clicks
                                        alignments. Continually revolutionize interactive strategic theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-number font-primary">O1</div>
                    </div>
                    <div class="swiper-slide"
                        style="background: #FFF url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/slider/2.jpg') no-repeat center right; background-size: auto 100%;">
                        <div class="container clearfix">
                            <div class="slider-caption" style="margin-top: -30px;">
                                <div class="emphasis-title nobottommargin">
                                    <h2 class="bottommargin t700"
                                        style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                        你只需要<br>Laravel5.8 從入門到實務</h2>

                                    <p class="lead topmargin-sm d-none d-sm-block"
                                        style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                        Competently reintermediate user friendly scenarios after global synergy.
                                        Globally build compelling niche markets rather than bricks-and-clicks
                                        alignments. Continually revolutionize interactive strategic theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-number font-primary">O2</div>
                    </div>
                    <div class="swiper-slide"
                        style="background: #FFF url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/slider/3.jpg') no-repeat center right; background-size: auto 100%;">
                        <div class="container clearfix">
                            <div class="slider-caption" style="margin-top: -30px;">
                                <div class="emphasis-title nobottommargin">
                                    <h2 class="bottommargin t700"
                                        style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                        We Create<br>diff. Layouts</h2>

                                    <p class="lead topmargin-sm d-none d-sm-block"
                                        style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                        Competently reintermediate user friendly scenarios after global synergy.
                                        Globally build compelling niche markets rather than bricks-and-clicks
                                        alignments. Continually revolutionize interactive strategic theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-number font-primary">O3</div>
                    </div>
                    <div class="swiper-slide"
                        style="background: #FFF url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/slider/4.jpg') no-repeat center right; background-size: auto 100%;">
                        <div class="container clearfix">
                            <div class="slider-caption" style="margin-top: -30px;">
                                <div class="emphasis-title nobottommargin">
                                    <h2 class="bottommargin t700"
                                        style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                        We Create<br>diff. Mindset</h2>

                                    <p class="lead topmargin-sm d-none d-sm-block"
                                        style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                        Competently reintermediate user friendly scenarios after global synergy.
                                        Globally build compelling niche markets rather than bricks-and-clicks
                                        alignments. Continually revolutionize interactive strategic theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-number font-primary">O4</div>
                    </div>
                    <div class="swiper-slide"
                        style="background: #FFF url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/slider/5.jpg') no-repeat center right; background-size: auto 100%;">
                        <div class="container clearfix">
                            <div class="slider-caption" style="margin-top: -30px;">
                                <div class="emphasis-title nobottommargin">
                                    <h2 class="bottommargin t700"
                                        style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                        We Create<br>your Website</h2>

                                    <p class="lead topmargin-sm d-none d-sm-block"
                                        style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                        Competently reintermediate user friendly scenarios after global synergy.
                                        Globally build compelling niche markets rather than bricks-and-clicks
                                        alignments. Continually revolutionize interactive strategic theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-number font-primary">O5</div>
                    </div>
                    <div class="swiper-slide"
                        style="background: #FFF url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/slider/6.jpg') no-repeat center right; background-size: auto 100%;">
                        <div class="container clearfix">
                            <div class="slider-caption" style="margin-top: -30px;">
                                <div class="emphasis-title nobottommargin">
                                    <h2 class="bottommargin t700"
                                        style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                        We Create<br>your Home</h2>

                                    <p class="lead topmargin-sm d-none d-sm-block"
                                        style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                        Competently reintermediate user friendly scenarios after global synergy.
                                        Globally build compelling niche markets rather than bricks-and-clicks
                                        alignments. Continually revolutionize interactive strategic theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-number font-primary">O6</div>
                    </div>
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
