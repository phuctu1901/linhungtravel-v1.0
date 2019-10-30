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
                                                Vé cáp treo Bà Nà<span
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
                                                href="https://demo.goodlayers.com/traveltour/tour/dubai-all-stunning-places/"><img
                                                    src="https://divui.com/content/images/thumbs/0008937_thue-xe-da-nang-di-ba-na.jpeg"
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
                                    <h1>Chi tiết sản phẩm</h1>
                                    <div class="service-price">
                                        <div class="origin-price">1.200.00 vnđ</div>
                                        <div class="discount-price">1.000.00 vnđ</div>
                                    </div>
                                    <div class="woocommerce-product-details__short-description">
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
                                            vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                                            venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Duis
                                            mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                            odio sem nec elit. Donec sed odio dui. Donec ullamcorper nulla non metus
                                            auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget
                                            quam.</p>
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
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 95px 0px 50px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/testimonial-bg-1.jpg) ;background-repeat: repeat-x ;background-position: bottom center ;" data-parallax-speed="0">
                </div>
            </div>
            <div
                class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div
                    class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div
                        class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div
                            class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                        style="padding-bottom: 15px ;">
                                        <div
                                            class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                style="font-size: 28px ;font-weight: 700 ;letter-spacing: 3px ;color: #193555 ;">
                                               Dịch vụ liên quan<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align"
                                        style="margin-bottom: 50px ;">
                                        <div class="gdlr-core-divider-container"
                                             style="max-width: 45px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                 style="border-color: #ffa019 ;border-width: 4px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 20px 0px 0px 0px;">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-right-align">
                                        <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border"
                                           href="/traveltour/hiking/shop"
                                           style="font-size: 17px ;font-weight: 600 ;color: #193555 ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span
                                                class="gdlr-core-content">Tất cả dịch vụ</span><i
                                                class="gdlr-core-pos-right fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-element">
                        <div
                            class="woocommerce gdlr-core-product-item gdlr-core-item-pdb clearfix  gdlr-core-product-style-grid gdlr-core-item-pdlr">
                            <div
                                class="gdlr-core-flexslider flexslider gdlr-core-js-2">
                                <div class="flex-viewport"
                                     style="overflow: hidden; position: relative;">
                                    <ul
                                        class="owl-carousel recent-blogs">
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div class="tourmaster-tour-grid-inner" style="box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -moz-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); ">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image tourmaster-zoom-on-hover">
                                                    <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/"><img src="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg" srcset="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-400x222.jpg 400w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg 600w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-900x500.jpg 900w" sizes="(max-width: 767px) 100vw, 25vw" alt="" width="900" height="500"></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-22" style="height: 150px; padding-bottom: 8px;">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #ffa11a;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(255, 161, 26, 0.5);"></div>
                                                        Vé thăm quan
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 20px;font-weight: 700;letter-spacing: 0px;text-transform: none;">
                                                        <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/">
                                                            Vé cáp treo Bà Nà</a></h3>
                                                    <div class="service-price">
                                                        <div class="origin-price">1.200.00 vnđ</div>
                                                        <div class="discount-price">1.000.00 vnđ</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div class="tourmaster-tour-grid-inner" style="box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -moz-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); ">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image tourmaster-zoom-on-hover">
                                                    <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/"><img src="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg" srcset="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-400x222.jpg 400w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg 600w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-900x500.jpg 900w" sizes="(max-width: 767px) 100vw, 25vw" alt="" width="900" height="500"></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-22" style="height: 150px; padding-bottom: 8px;">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #ffa11a;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(255, 161, 26, 0.5);"></div>
                                                        Vé thăm quan
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 20px;font-weight: 700;letter-spacing: 0px;text-transform: none;">
                                                        <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/">
                                                            Vé cáp treo Bà Nà</a></h3>
                                                    <div class="service-price">
                                                        <div class="origin-price">1.200.00 vnđ</div>
                                                        <div class="discount-price">1.000.00 vnđ</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>  <li class="gdlr-core-item-mglr owl-item"
                                                   style="width: 290px; margin-right: 40px; float: left; display: block;"
                                                   data-thumb-alt="">
                                            <div class="tourmaster-tour-grid-inner" style="box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -moz-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); ">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image tourmaster-zoom-on-hover">
                                                    <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/"><img src="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg" srcset="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-400x222.jpg 400w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg 600w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-900x500.jpg 900w" sizes="(max-width: 767px) 100vw, 25vw" alt="" width="900" height="500"></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-22" style="height: 150px; padding-bottom: 8px;">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #ffa11a;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(255, 161, 26, 0.5);"></div>
                                                        Vé thăm quan
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 20px;font-weight: 700;letter-spacing: 0px;text-transform: none;">
                                                        <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/">
                                                            Vé cáp treo Bà Nà</a></h3>
                                                    <div class="service-price">
                                                        <div class="origin-price">1.200.00 vnđ</div>
                                                        <div class="discount-price">1.000.00 vnđ</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>  <li class="gdlr-core-item-mglr owl-item"
                                                   style="width: 290px; margin-right: 40px; float: left; display: block;"
                                                   data-thumb-alt="">
                                            <div class="tourmaster-tour-grid-inner" style="box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -moz-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); ">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image tourmaster-zoom-on-hover">
                                                    <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/"><img src="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg" srcset="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-400x222.jpg 400w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg 600w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-900x500.jpg 900w" sizes="(max-width: 767px) 100vw, 25vw" alt="" width="900" height="500"></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-22" style="height: 150px; padding-bottom: 8px;">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #ffa11a;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(255, 161, 26, 0.5);"></div>
                                                        Vé thăm quan
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 20px;font-weight: 700;letter-spacing: 0px;text-transform: none;">
                                                        <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/">
                                                            Vé cáp treo Bà Nà</a></h3>
                                                    <div class="service-price">
                                                        <div class="origin-price">1.200.00 vnđ</div>
                                                        <div class="discount-price">1.000.00 vnđ</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>  <li class="gdlr-core-item-mglr owl-item"
                                                   style="width: 290px; margin-right: 40px; float: left; display: block;"
                                                   data-thumb-alt="">
                                            <div class="tourmaster-tour-grid-inner" style="box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -moz-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); ">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image tourmaster-zoom-on-hover">
                                                    <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/"><img src="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg" srcset="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-400x222.jpg 400w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg 600w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-900x500.jpg 900w" sizes="(max-width: 767px) 100vw, 25vw" alt="" width="900" height="500"></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-22" style="height: 150px; padding-bottom: 8px;">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #ffa11a;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(255, 161, 26, 0.5);"></div>
                                                        Vé thăm quan
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 20px;font-weight: 700;letter-spacing: 0px;text-transform: none;">
                                                        <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/">
                                                            Vé cáp treo Bà Nà</a></h3>
                                                    <div class="service-price">
                                                        <div class="origin-price">1.200.00 vnđ</div>
                                                        <div class="discount-price">1.000.00 vnđ</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>  <li class="gdlr-core-item-mglr owl-item"
                                                   style="width: 290px; margin-right: 40px; float: left; display: block;"
                                                   data-thumb-alt="">
                                            <div class="tourmaster-tour-grid-inner" style="box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -moz-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); ">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image tourmaster-zoom-on-hover">
                                                    <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/"><img src="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg" srcset="https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-400x222.jpg 400w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-600x333.jpg 600w, https://cdn.goodlayers.com/traveltour/hiking/wp-content/uploads/2018/07/aaron-benson-200753-unsplash-900x500.jpg 900w" sizes="(max-width: 767px) 100vw, 25vw" alt="" width="900" height="500"></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-22" style="height: 150px; padding-bottom: 8px;">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #ffa11a;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(255, 161, 26, 0.5);"></div>
                                                        Vé thăm quan
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 20px;font-weight: 700;letter-spacing: 0px;text-transform: none;">
                                                        <a href="https://demo.goodlayers.com/traveltour/hiking/tour/tour-du-mont-blanc-express/">
                                                            Vé cáp treo Bà Nà</a></h3>
                                                    <div class="service-price">
                                                        <div class="origin-price">1.200.00 vnđ</div>
                                                        <div class="discount-price">1.000.00 vnđ</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
