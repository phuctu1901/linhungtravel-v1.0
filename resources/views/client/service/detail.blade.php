<!-- Stored in resources/views/child.blade.php -->
@extends('client.layouts.master')
@section('head-content')
    <link href='/client/new-level/css/fonts.css' rel='stylesheet'>
    <link href="/client/new-level/css/style2.css" rel="stylesheet">
    <link href="/client/new-level/css/style3.css" rel="stylesheet">

    <link href="/client/new-level/css/style.css" rel="stylesheet" type="text/css">
@endsection

@section('header', 'default_header')
@section('main-content')
    <div id="st-content-wrapper" class="search-result-page">
        <div class="st_background">
            <div class="st_background" style="padding: 200px 0; position: relative;">
                <div class="home_slider_container">

                    <div class="owl-carousel owl-theme home_slider">

                        <!-- Slider Item -->
                        <?php foreach ($sliders as $slider): ?>
                        <div class="owl-item home_slider_item">
                            <!-- Image by https://unsplash.com/@anikindimitry -->
                            <a href="{{$slider->link}}" class="home_slider_background"
                               style="background-image:url({{$slider->thumb}})"></a>

                            <div class="home_slider_content text-center">
                                <div class="home_slider_content_inner" data-animation-in="flipInX"
                                     data-animation-out="animate-out fadeOut">
                                    <h3 style="font-size:40px;color: white">{{$slider->title}}</h3>
                                    <h1 style="font-size: 80px;">{{$slider->desc}}</h1></div>


                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- Slider Item -->

                    </div>

                    <!-- Home Slider Nav - Prev -->
                    <div class="home_slider_nav home_slider_prev">
                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                             xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
                    </div>

                    <!-- Home Slider Nav - Next -->
                    <div class="home_slider_nav home_slider_next">
                        <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33"
                             xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
                    </div>

                    <!-- Home Slider Dots -->

                    <div class="home_slider_dots">
                        <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                            <?php $i = 0; ?>
                            <?php foreach($sliders as $slider):?>
                            <?php $i = $i + 1; ?>
                            <li class="home_slider_custom_dot @if ($i==1) active @endif">
                                <div></div>
                                {{$i}}
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 100px 0px 50px; height: 721px;">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                         style="padding-bottom: 20px ;">
                                        <div class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                style="font-size: 38px ;font-weight: 400 ;letter-spacing: 2px ;color: #193555 ;">
                                                {{$service->title}}<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                        <div class="gdlr-core-divider-container" style="max-width: 46px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                 style="border-color: #ffa019 ;border-width: 4px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space"
                                         style="padding-bottom: 15px ;">
                                        <div class="tourmaster-tour-thumbnail tourmaster-media-image "><a
                                                href=""><img
                                                    src="{{$service->thumb}}"
                                                    alt="" width="1280" height="580"></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30"
                         style="padding: 190px 50px 50px;height: 721px;">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right">

                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="summary entry-summary">
                                    <h3>Giá: </h3>
                                    <div class="service-price">
                                        <div class="origin-price">Giá thị trường: <?php echo number_format($service->giagoc, 0, ',', '.');?> vnđ</div>
                                        <div class="discount-price">Giá bán: <?php echo number_format($service->giasaukhigiam, 0, ',', '.');?> vnđ</div>
                                    </div>

                                    <h3>Thông tin chi tiết:</h3>
                                    <div class="woocommerce-product-details__short-description">
                                        <?php echo htmlspecialchars_decode(json_decode($service->content))?>
                                    </div>

                                    <style>
                                        .discount-price,
                                        .origin-price {
                                            font-size: 19px;
                                            color: #234076;
                                            line-height: 1;
                                            margin-top: 6px;
                                            font-weight: 800;
                                        }

                                        .origin-price {
                                            font-size: 15px;
                                            color: #9c3328;
                                            text-decoration: line-through;
                                        }
                                    </style>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blogs -->
    </div>
@endsection
@section('script-content')
    <script>
        window.onscroll = function () {
            myFunction()
        };
    </script>
    <script
        src="/client/new-level/plugins/jquery-3.2.1.min.js"></script>
    <script
        src="/client/new-level/plugins/jquery.waypoints.min.js"></script>
    <script
        src="/client/new-level/plugins/jquery.animateNumber.min.js"></script>
    <script
        src="/client/new-level/plugins/owl.carousel.min.js"></script>
    <script type='text/javascript' src='/client/asset/js/owl.carousel.min.js'></script>

    <script
        src="/client/new-level/js/main.js"></script>
@endsection

@section("custom-style-content")
    <style>
        .service-price{
            font-family: sans-serif;
        }

        .tourmaster-media-image img{
            width: 760px;
            height: 380px;
            overflow: hidden;
        }
        .tourmaster-tour-rating {
            visibility: hidden;
        }
        .discount-price, .origin-price{
            font-size: 19px;
            color: #234076;
            line-height: 1;
            margin-top: 6px;
            font-weight: 800;
        }
        .origin-price{
            font-size: 15px;
            color: #9c3328;
            text-decoration: line-through;
        }
    </style>
@endsection
