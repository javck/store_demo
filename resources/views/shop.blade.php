{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<section id="content">

    <div class="content-wrap nopadding">

        <div class="section notopmargin" style="padding: 100px 0;">
            <div class="container clearfix">

                <div class="row grid-item clearfix">
                    <div class="col-md-2 grid-image">
                        <img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/categories/1.jpg" alt="Image 1">
                    </div>
                    <div class="col-md-2">
                        <div class="grid-info clearfix">
                            <h3><a href="#">Fresh Arrivals<span>Summer is Coming!</span></a></h3>
                            <a href="#" class="more-link clearfix">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-md-2 grid-image">
                        <img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/categories/2.jpg" alt="Image 2">
                    </div>
                    <div class="col-md-2">
                        <div class="grid-info clearfix">
                            <h3><a href="#">Acessories<span>Check out more Products for your Lifestyles</span></a></h3>
                            <a href="#" class="more-link clearfix">Know More</a>
                        </div>
                    </div>

                    <div class="col-md-2 grid-image">
                        <img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/categories/3.jpg" alt="Image 1">
                    </div>
                    <div class="col-md-2">
                        <div class="grid-info clearfix">
                            <h3><a href="#">Our Store<span>Where we Manufacture!</span></a></h3>
                            <i class="icon-map-marker2"></i> <a
                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.681463596743!2d-3.19397378404521!3d55.954892680607855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c78e1e83edab%3A0x627ac6bc4414f18b!2sGucci+-+Edinburgh+Harvey+Nichols+Women&#39;s!5e0!3m2!1sen!2sus!4v1489749205966"
                                data-lightbox="iframe" class="more-link clearfix">Find Store</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container clearfix">

            <div class="heading-block nobottomborder center">
                <h3>Popular Categories</h3>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptas.</span>
            </div>

            <div class="row ecommerce-categories clearfix" style="padding: 20px 0 0;">
                <div class="col-lg-7">
                    <a href="#"
                        style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/types/1.jpg') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="heading-block nomargin noborder">
                                <h3 class="capitalize font-secondary nott t500">Travel</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="#"
                        style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/types/3.jpg') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="heading-block nomargin noborder">
                                <h3 class="capitalize font-secondary nott t500">College</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="#"
                        style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/types/5.jpg') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="heading-block nomargin noborder">
                                <h3 class="capitalize font-secondary nott t500">Leather</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#"
                        style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/types/6.jpg') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="heading-block nomargin noborder">
                                <h3 class="capitalize font-secondary nott t500">Reise</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#"
                        style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/types/8.jpg') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="heading-block nomargin noborder">
                                <h3 class="capitalize font-secondary nott t500">Handmade</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="#"
                        style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/types/7.jpg') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="heading-block nomargin noborder">
                                <h3 class="capitalize font-secondary nott t500">Brown</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-7">
                    <a href="#"
                        style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/types/9.jpg') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="heading-block nomargin noborder">
                                <h3 class="capitalize font-secondary nott t500">Acessories</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="section clearfix" style="padding: 80px 0;">
            <div class="container clearfix">

                <div class="heading-block nobottomborder center">
                    <h3 class="t400" style="font-size: 16px;">Best Selling Products</h3>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6">
                        <div class="iportfolio clearfix">
                            <div class="portfolio-image clearfix">
                                <div class="fslider" data-pagi="false" data-animation="fade" data-slideshow="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/1-1.jpg"
                                                        alt="Grey Bag"></a></div>
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/1-2.jpg"
                                                        alt="Grey Bag"></a></div>
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/1-3.jpg"
                                                        alt="Grey Bag"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                <div class="product-quickview"><a href="#" data-toggle="tooltip" data-placement="top"
                                        title="Available Sizes: S | M | L"><i class="icon-info"></i></a></div>
                            </div>
                            <div class="portfolio-desc nobottompadding">
                                <h3><a href="#">{{  $item_name  }}</a></h3>
                                <span class="notopmargin"><a href="#">Grey Messenger Bag</a></span>
                                <div class="item-price">
                                    <span>&euro;{{ $price }}</span>
                                    <div class="rating-stars">
                                        <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i
                                            class="icon-star3"></i><i class="icon-star3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="iportfolio clearfix">
                            <div class="portfolio-image clearfix">
                                <div class="fslider" data-pagi="false" data-animation="fade" data-slideshow="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/4-1.jpg"
                                                        alt="Grey Bag"></a></div>
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/4-2.jpg"
                                                        alt="Grey Bag"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                <div class="product-quickview"><a href="#" data-toggle="tooltip" data-placement="top"
                                        title="Available Sizes: S | M | L"><i class="icon-info"></i></a></div>
                            </div>
                            <div class="portfolio-desc nobottompadding">
                                <h3><a href="#">Black Bagpack</a></h3>
                                <span class="notopmargin"><a href="#">college Backpack</a></span>
                                <div class="item-price">
                                    <span>&euro;23.49</span>
                                    <div class="rating-stars">
                                        <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i
                                            class="icon-star3"></i><i class="icon-star3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 bottommargin d-block d-md-none"></div>

                    <div class="col-lg-3 col-md-6">
                        <div class="iportfolio clearfix">
                            <div class="portfolio-image clearfix">
                                <div class="fslider" data-pagi="false" data-animation="fade" data-slideshow="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/2-1.jpg"
                                                        alt="Office Bag"></a></div>
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/2-2.jpg"
                                                        alt="Office Bag"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                <div class="product-quickview"><a href="#" data-toggle="tooltip" data-placement="top"
                                        title="Available Sizes: L"><i class="icon-info"></i></a></div>
                            </div>
                            <div class="portfolio-desc nobottompadding">
                                <h3><a href="#">Women Office Bag</a></h3>
                                <span class="notopmargin"><a href="#">Hand Bag</a></span>
                                <div class="item-price">
                                    <span>&euro;11.99</span>
                                    <div class="rating-stars">
                                        <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i
                                            class="icon-star3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 bottommargin d-block d-md-none"></div>

                    <div class="col-lg-3 col-md-6">
                        <div class="iportfolio clearfix">
                            <div class="portfolio-image clearfix">
                                <div class="fslider" data-pagi="false" data-animation="fade" data-slideshow="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/3-1.jpg"
                                                        alt="Men Bag"></a></div>
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/3-2.jpg"
                                                        alt="Men Bag"></a></div>
                                            <div class="slide"><a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/items/3-3.jpg"
                                                        alt="Men Bag"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale-flash">Sale!</div>
                                <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                <div class="product-quickview"><a href="#" data-toggle="tooltip" data-placement="top"
                                        title="Available Sizes: S | M | L"><i class="icon-info"></i></a></div>
                            </div>
                            <div class="portfolio-desc nobottompadding">
                                <h3><a href="#">Men Black Bag</a></h3>
                                <span class="notopmargin"><a href="#">Laptop Bag</a></span>
                                <div class="item-price">
                                    <span><del class="d-md-none d-lg-block">$45.99</del> &euro;39.00</span>
                                    <div class="rating-stars">
                                        <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i
                                            class="icon-star3"></i><i class="icon-star-half"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="section nobg">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-lg-5">
                        <div id="oc-images" class="owl-carousel image-carousel carousel-widget custom-js">

                            <div class="oc-item">
                                <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/1.jpg" alt="Image 1"></a>
                            </div>
                            <div class="oc-item">
                                <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/2.jpg" alt="Image 2"></a>
                            </div>
                            <div class="oc-item">
                                <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/3.jpg" alt="Image 3"></a>
                            </div>
                            <div class="oc-item">
                                <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/4.jpg" alt="Image 4"></a>
                            </div>
                            <div class="oc-item">
                                <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/5.jpg" alt="Image 5"></a>
                            </div>
                            <div class="oc-item">
                                <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/featured/6.jpg" alt="Image 6"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="featured-item topmargin">
                            <div class="item-title">
                                <div class="before-heading t600 ls5"><a href="#"
                                        style="color: #aab7bd !important;">Leather Bags <i
                                            class="icon-angle-right"></i></a></div>
                                <h3><a href="#">Lady Shoulder Bag.</a></h3>
                            </div>
                            <div class="item-meta font-secondary">
                                SKU: 8465415.
                                Design: Leather / Blue
                            </div>
                            <div class="clear"></div>
                            <div class="item-desc">
                                <p>Proactively empower highly efficient growth strategies Completely enhance inexpensive
                                    best practices before front-end content. Completely procrastinate innovative vortals
                                    through maintainable leadership skills. Continually foster business sources for
                                    viral leadership skills.</p>
                            </div>
                            <div class="item-color bottommargin-sm">
                                <span>Available Colors:</span>
                                <div id="item-color-dots" class="owl-dots"></div>
                            </div>
                            <div class="button button-border button-circle nomargin font-secondary">View Details</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="row align-items-stretch bottommargin clearfix">
            <div class="col-md-6"
                style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/sections/1.jpg') center 45% no-repeat; background-size: cover; padding: 0 0 500px;">
                <div class="section-content topmargin-sm">
                    <h3>Travel Bags for Men</h3>
                    <span class="font-primary">Designed to help you never make your bed again. Superior materials for
                        comfort and lasting quality in a complete bedding package.</span>
                    <a class="more-link uppercase t500" style="font-family: 'Montserrat';">Go To Shop <i
                            class="icon-line-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6"
                style="background: url('http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/sections/3.jpg') center center no-repeat; background-size: cover; padding: 0 0 500px;">
                <div class="section-content topmargin-sm">
                    <h3>Luxury Bags for Women</h3>
                    <span class="font-primary">Globally monetize unique metrics and enterprise markets. Efficiently
                        implement cooperative e-services and integrated interfaces.</span>
                    <a class="more-link uppercase t500" style="font-family: 'Montserrat';">Go To Shop <i
                            class="icon-line-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="container topmargin clearfix">
            <div class="heading-block nobottomborder bottommargin center">
                <h3 class="" style="font-size: 20px;">Shop By Categories</h3>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing<br>elit voluptas.</span>
            </div>

            <div class="row clearfix clear-bottommargin">
                <div class="col-lg-2 col-md-4 col-6 offset-lg-1">
                    <div class="feature-box fbox-center nobottomborder bottommargin">
                        <div class="before-heading ls2">0mm - 31mm</div>
                        <h3 class="t400 ls1">Laptop</h3>
                        <div class="fbox-image imagescalein">
                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/icons/2.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="feature-box fbox-center nobottomborder bottommargin">
                        <div class="before-heading ls2">0mm - 31mm</div>
                        <h3 class="t400 ls1">Hand Bag</h3>
                        <div class="fbox-image imagescalein">
                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/icons/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="feature-box fbox-center nobottomborder bottommargin">
                        <div class="before-heading ls2">0mm - 31mm</div>
                        <h3 class="t400 ls1">Backpack</h3>
                        <div class="fbox-image imagescalein">
                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/icons/4.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="feature-box fbox-center nobottomborder bottommargin">
                        <div class="before-heading ls2">0mm - 31mm</div>
                        <h3 class="t400 ls1">Duffle</h3>
                        <div class="fbox-image imagescalein">
                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/icons/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="feature-box fbox-center nobottomborder bottommargin">
                        <div class="before-heading ls2">0mm - 31mm</div>
                        <h3 class="t400 ls1">Trolley</h3>
                        <div class="fbox-image imagescalein">
                            <a href="#"><img src="http://themes.semicolonweb.com/html/canvas/demos/ecommerce/images/icons/6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section dark nobottommargin">
            <div class="container clearfix">

                <div class="row payments-info">
                    <div class="col-lg-6">
                        <p class="lead nomargin">Free Shipping on Orders of <strong>$199</strong> or above.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="payment-cards clearfix" style="margin-top: 5px;">
                            <li><img src="http://themes.semicolonweb.com/html/canvas/demos/xmas/images/cards/visa.svg" alt="Visa"></li>
                            <li><img src="http://themes.semicolonweb.com/html/canvas/demos/xmas/images/cards/mc.svg" alt="Master Card"></li>
                            <li><img src="http://themes.semicolonweb.com/html/canvas/demos/xmas/images/cards/ae.svg" alt="American Express"></li>
                            <li><img src="http://themes.semicolonweb.com/html/canvas/demos/xmas/images/cards/pp.svg" alt="PayPal"></li>
                            <li><img src="http://themes.semicolonweb.com/html/canvas/demos/xmas/images/cards/sk.svg" alt="Skrill"></li>
                            <li><img src="http://themes.semicolonweb.com/html/canvas/demos/xmas/images/cards/2co.svg" alt="2CheckOut"></li>
                            <li><img src="http://themes.semicolonweb.com/html/canvas/demos/xmas/images/cards/wu.svg" alt="Western Union"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- #content end -->
@endsection

{{--  填名為title的洞，並繼承父視圖的內容 --}}
@section('title')
{{--  繼承父視圖 section show裡頭的內容  --}}
@parent
{{--  <title>My Laravel Shop | Canvas</title>  --}}
@endsection
