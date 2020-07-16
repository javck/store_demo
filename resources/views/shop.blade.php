{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<!-- Slider
============================================= -->
<section id="slider" class="slider-element swiper_wrapper full-screen clearfix" data-autoplay="9000" data-speed="800"
    data-loop="true" data-grab="false">

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
<section id="content">

    <div class="content-wrap nopadding">

        <div class="container clearfix">

            <div class="heading-block nobottomborder center">
                <h3>商品分類</h3>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptas.</span>
            </div>

            <div class="row ecommerce-categories clearfix" style="padding: 20px 0 0;">
                @foreach ($cgies as $cgy)
                    <div class="col-lg-4">
                        <a href="#"
                            style="background: url('{{ $cgy->pic }}') no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block nomargin noborder">
                                    <h3 class="capitalize font-secondary nott t500">{{ $cgy->title }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="section clearfix" style="padding: 80px 0;">
            <div class="container clearfix">

                <div class="heading-block nobottomborder center">
                    <h3 class="t400" style="font-size: 16px;">暢銷榜前4名</h3>
                </div>

                <div class="row clearfix">
                    @foreach ($items as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="iportfolio clearfix">
                                <div class="portfolio-image clearfix">
                                    <div class="fslider" data-pagi="false" data-animation="fade" data-slideshow="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="{{ url('/addCart/'.$item->id) }}"><img
                                                            src="{{ $item->pic_url }}"
                                                            alt="{{ $item->title }}"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart"><a href="{{ url('/addCart/'.$item->id) }}"><i
                                                class="icon-shopping-cart"></i></a></div>
                                    <div class="product-quickview"><a href="#" data-toggle="tooltip"
                                            data-placement="top" title="{{ $item->title }}"><i
                                                class="icon-info"></i></a></div>
                                </div>
                                <div class="portfolio-desc nobottompadding">
                                    <h3><a href="{{ url('/addCart/'.$item->id) }}">{{  $item->title  }}</a></h3>
                                    <div class="item-price">
                                        <span>&euro;{{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <li><img src="{{ asset('demos/xmas/images/cards/visa.svg') }}" alt="Visa"></li>
                            <li><img src="{{ asset('demos/xmas/images/cards/mc.svg') }}" alt="Master Card"></li>
                            <li><img src="{{ asset('demos/xmas/images/cards/ae.svg') }}" alt="American Express"></li>
                            <li><img src="{{ asset('demos/xmas/images/cards/pp.svg') }}" alt="PayPal"></li>
                            <li><img src="{{ asset('demos/xmas/images/cards/sk.svg') }}" alt="Skrill"></li>
                            <li><img src="{{ asset('demos/xmas/images/cards/2co.svg') }}" alt="2CheckOut"></li>
                            <li><img src="{{ asset('demos/xmas/images/cards/wu.svg') }}" alt="Western Union"></li>
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
