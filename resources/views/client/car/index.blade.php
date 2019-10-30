

<!-- Stored in resources/views/child.blade.php -->
@extends('client.layouts.master')
@section('header', 'default_header')
@section('head-content')
    <link href='/client/new-level/css/fonts.css' rel='stylesheet'>
    <link href="/client/new-level/css/style2.css" rel="stylesheet">
    <link href="/client/new-level/css/style3.css" rel="stylesheet">
    <link href="/client/new-level/css/style.css" rel="stylesheet" type="text/css">
@endsection
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
                                    <h1 style="font-size: 80px;">{{$slider->desc}}</h1>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- Slider Item -->
                    </div>
                    <!-- Home Slider Nav - Prev -->
                    <div class="home_slider_nav home_slider_prev">
                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                             x="0px" y="0px"
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
                             x="0px" y="0px"
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
        <!-- Blogs -->
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 95px 0px 50px 0px;">
            <div
                class="gdlr-core-pbf-background-wrap">
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
                                                Quy trình đặt xe<span
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
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
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

        <!-- Reference -->
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 95px 0px 50px 0px;">
            <div
                class="gdlr-core-pbf-background-wrap">
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
                                                Liên hệ<span
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
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
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

        <!-- Contact -->
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 95px 0px 50px 0px;">
            <div
                class="gdlr-core-pbf-background-wrap">
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
                                                Phụ lục<span
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
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 290px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-product-grid">
                                                <div
                                                    class="gdlr-core-product-thumbnail gdlr-core-media-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element">
                                                    <img
                                                        src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg"
                                                        srcset="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-400x400.jpg 400w, https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/product-8-600x600.jpg 600w"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"
                                                        alt=""
                                                        draggable="false"
                                                        width="600"
                                                        height="600">
                                                </div>
                                                <div
                                                    class="gdlr-core-blog-modern-content  gdlr-core-center-align">
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 15px ;font-weight: 600 ;letter-spacing: 0px ;">
                                                        <a
                                                            href="https://demo.goodlayers.com/traveltour/how-to-travel-with-paper-map/">How
                                                            to
                                                            travel
                                                            with
                                                            paper
                                                            map</a>
                                                    </h3>
                                                    <div
                                                        class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                       <span
                                           class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                               class="gdlr-core-head"><i
                                                   class="icon_clock_alt"></i></span><a
                                               href="https://demo.goodlayers.com/traveltour/2016/06/06/">12,
                                       tháng
                                       6,
                                       năm
                                       2016</a></span>
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
@section('custom-style-content')
    <style>
        [data-gdlr-animation] {
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }
        [data-gdlr-animation=fadeIn],
        [data-gdlr-animation=fadeInDown],
        [data-gdlr-animation=fadeInUp],
        [data-gdlr-animation=fadeInLeft],
        [data-gdlr-animation=fadeInRight] {
            opacity: 0
        }
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }
        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn
        }
        @-webkit-keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -50px, 0);
                transform: translate3d(0, -50px, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -50px, 0);
                transform: translate3d(0, -50px, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown
        }
        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 50px, 0);
                transform: translate3d(0, 50px, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 50px, 0);
                transform: translate3d(0, 50px, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp
        }
        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-50px, 0, 0);
                transform: translate3d(-50px, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-50px, 0, 0);
                transform: translate3d(-50px, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }
        @-webkit-keyframes fadeInRight {
            from {
                opacity: 0;
                -webkit-transform: translate3d(50px, 0, 0);
                transform: translate3d(50px, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        @keyframes fadeInRight {
            from {
                opacity: 0;
                -webkit-transform: translate3d(50px, 0, 0);
                transform: translate3d(50px, 0, 0)
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }
        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }
        @-webkit-keyframes bounce {
            from,
            20%,
            53%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0)
            }
            70% {
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0)
            }
        }
        @keyframes bounce {
            from,
            20%,
            53%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0)
            }
            70% {
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0)
            }
        }
        .bounce {
            -webkit-animation-name: bounce;
            animation-name: bounce;
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom
        }
        @-webkit-keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        @keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        .pulse {
            -webkit-animation-name: pulse;
            animation-name: pulse
        }
        @-webkit-keyframes rubberBand {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            30% {
                -webkit-transform: scale3d(1.25, .75, 1);
                transform: scale3d(1.25, .75, 1)
            }
            40% {
                -webkit-transform: scale3d(.75, 1.25, 1);
                transform: scale3d(.75, 1.25, 1)
            }
            50% {
                -webkit-transform: scale3d(1.15, .85, 1);
                transform: scale3d(1.15, .85, 1)
            }
            65% {
                -webkit-transform: scale3d(.95, 1.05, 1);
                transform: scale3d(.95, 1.05, 1)
            }
            75% {
                -webkit-transform: scale3d(1.05, .95, 1);
                transform: scale3d(1.05, .95, 1)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        @keyframes rubberBand {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            30% {
                -webkit-transform: scale3d(1.25, .75, 1);
                transform: scale3d(1.25, .75, 1)
            }
            40% {
                -webkit-transform: scale3d(.75, 1.25, 1);
                transform: scale3d(.75, 1.25, 1)
            }
            50% {
                -webkit-transform: scale3d(1.15, .85, 1);
                transform: scale3d(1.15, .85, 1)
            }
            65% {
                -webkit-transform: scale3d(.95, 1.05, 1);
                transform: scale3d(.95, 1.05, 1)
            }
            75% {
                -webkit-transform: scale3d(1.05, .95, 1);
                transform: scale3d(1.05, .95, 1)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        .rubberBand {
            -webkit-animation-name: rubberBand;
            animation-name: rubberBand
        }
        @-webkit-keyframes shake {
            from,
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0)
            }
            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0)
            }
        }
        @keyframes shake {
            from,
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0)
            }
            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0)
            }
        }
        .shake {
            -webkit-animation-name: shake;
            animation-name: shake
        }
        @-webkit-keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg)
            }
            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg)
            }
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg)
            }
            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg)
            }
            to {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }
        @keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg)
            }
            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg)
            }
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg)
            }
            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg)
            }
            to {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg)
            }
        }
        .swing {
            -webkit-transform-origin: top center;
            transform-origin: top center;
            -webkit-animation-name: swing;
            animation-name: swing
        }
    </style>
@endsection

