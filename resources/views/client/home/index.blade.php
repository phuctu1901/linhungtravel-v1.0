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
        <div class="gdlr-core-pbf-background-wrap"></div>

        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/03/mountain-bg-1.jpg) ;background-repeat: no-repeat ;background-position: center left ;"
                     data-parallax-speed="0"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 100px 0px 50px; height: 721px;" data-sync-height="height1">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align">
                                        <div
                                            class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle"
                                            style="border-width: 0px;"><img
                                                src="https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/03/binoculars.png"
                                                alt="" title="binoculars" width="45" height="45"></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                        style="padding-bottom: 20px ;">
                                        <div class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                style="font-size: 38px ;font-weight: 400 ;letter-spacing: 2px ;color: #193555 ;">
                                                giới thiệu công ty<span
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
                                    <div
                                        class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space"
                                        style="padding-bottom: 15px ;">
                                        <div class="gdlr-core-text-box-item-content"
                                             style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #687d8e ;">
                                            <p>Linh Ứng Travel là công ty du lịch và truyền thông được thành lập vào năm
                                                2015 với đội ngũ
                                                nhân viên dày kinh nghiệm trong lĩnh vực lữ hành, chúng tôi tự hào là
                                                doanh nghiệp lữ hành hàng
                                                đầu trong việc cung cấp dịch vụ du lịch và chăm sóc khách hàng&nbsp;</p>
                                            <p>&nbsp;</p>
                                            <p>Bên cạnh việc cung cấp các tour trọn gói có sẵn, chúng tôi nhận thiết kế
                                                các tour theo yêu cầu
                                                của khách hàng. Với tiêu chí là ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border"
                                           href="#"
                                           style="font-size: 17px ;font-weight: 600 ;color: #193555 ;padding-left: 0px;"><span
                                                class="gdlr-core-content">Tìm hiểu thêm</span><i
                                                class="gdlr-core-pos-right fa fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right"
                             style="margin: 0px 0px 0px 40px; padding: 640px 0px 0px; height: 721px;"
                             data-sync-height="height1">
                            <div class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/03/mountain-bg-2-2.jpg) ;background-repeat: no-repeat ;background-position: center left ;"
                                     data-parallax-speed="0"></div>
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 50px 0px;" data-skin="COLUM SVC  20 YEARS">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/column-bg.jpg) ;background-repeat: repeat-x ;background-position: bottom center ;"
                     data-parallax-speed="0"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding-right: 5px;padding-left: 5px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr"
                                        style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"
                                             style="margin-bottom: 35px;"><img
                                                src="/client/new-level/images/thumb/tour.png" alt=""
                                                title="clibing" width="60" height="60">
                                        </div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap"
                                                 style="margin-bottom: 23px ;">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                    style="font-size: 18px ;font-weight: 600 ;letter-spacing: 2px ;">
                                                    Tour trọn gói</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content"
                                                 style="font-weight: 400 ;text-transform: none ;">
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated.</p>
                                            </div>
                                            <button class="btn btn-success">Liên hệ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 0px 5px 0px 5px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr"
                                        style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"
                                             style="margin-bottom: 35px;"><img
                                                src="/client/new-level/images/thumb/ticket.png" alt=""
                                                title="knife" width="60" height="60"></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap"
                                                 style="margin-bottom: 23px ;">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                    style="font-size: 18px ;font-weight: 600 ;letter-spacing: 2px ;">
                                                    Vé</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content"
                                                 style="font-weight: 400 ;text-transform: none ;">
                                                <p>Far far away, behind the word mountains, far
                                                    from the countries
                                                    Vokalia and Consonantia, there live the
                                                    blind texts. Separated.</p>
                                            </div>
                                            <button class="btn btn-success
                                            ">Liên hệ</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 0px 5px 0px 5px;">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr"
                                        style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"
                                             style="margin-bottom: 35px;">
                                            <img src="/client/new-level/images/thumb/car.png"
                                                 alt="" title="map"
                                                 width="60" height="60">
                                        </div>
                                        <div
                                            class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap"
                                                 style="margin-bottom: 23px ;">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                    style="font-size: 18px ;font-weight: 600 ;letter-spacing: 2px ;">
                                                    Thuê xe</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content"
                                                 style="font-weight: 400 ;text-transform: none ;">
                                                <p>Far far away, behind
                                                    the word mountains,
                                                    far from the
                                                    countries
                                                    Vokalia and
                                                    Consonantia, there
                                                    live the blind
                                                    texts. Separated.
                                                </p>
                                            </div>
                                            <button class="btn btn-success">Liên hệ</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding-right: 5px;padding-left: 5px;">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr"
                                        style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"
                                             style="margin-bottom: 35px;">
                                            <img src="/client/new-level/images/thumb/luggage.png"
                                                 alt=""
                                                 title="backpack"
                                                 width="60"
                                                 height="60">
                                        </div>
                                        <div
                                            class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap"
                                                 style="margin-bottom: 23px ;">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                    style="font-size: 18px ;font-weight: 600 ;letter-spacing: 2px ;">
                                                    Tiện
                                                    ích
                                                </h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content"
                                                 style="font-weight: 400 ;text-transform: none ;">
                                                <p>Far
                                                    far
                                                    away,
                                                    behind
                                                    the
                                                    word
                                                    mountains,
                                                    far
                                                    from
                                                    the
                                                    countries
                                                    Vokalia
                                                    and
                                                    Consonantia,
                                                    there
                                                    live
                                                    the
                                                    blind
                                                    texts.
                                                    Separated.
                                                </p>
                                            </div>
                                            <button
                                                class="btn btn-success">Liên hệ</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- popular tours -->
        <div class=" gdlr-core-pbf-wrapper " style=" padding: 200px 0px 50x 0px;">
            <div
                class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/tour-item-bg.jpg) ;background-repeat: repeat-x ;background-position: center ;"
                     data-parallax-speed="0">
                </div>
            </div>
            <div
                class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div
                    class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div
                        class="gdlr-core-pbf-element">
                        <div
                            class="tourmaster-tour-item clearfix  tourmaster-tour-item-style-grid tourmaster-item-pdlr tourmaster-tour-item-column-3"
                            style="padding-bottom: 60px;">
                            <div
                                class="gdlr-core-block-item-title-wrap  gdlr-core-left-align">
                                <div
                                    class="gdlr-core-block-item-title-inner">
                                    <h3 class="gdlr-core-block-item-title"
                                        style="font-size: 28px ;font-style: normal ;text-transform: uppercase ;letter-spacing: 2px ;">
                                        Tour
                                        trọn
                                        gói
                                        phổ
                                        biến
                                        nhất
                                    </h3>
                                </div>
                                <div
                                    class="gdlr-core-flexslider-nav gdlr-core-plain-style-2 gdlr-core-absolute-center gdlr-core-right">
                                    <a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border"
                                       href="/danh-sach-tour"
                                       style="font-size: 17px ;font-weight: 600 ;color: #193555 ;padding-left: 0px;"><span
                                            class="gdlr-core-content">Xem tất cả</span><i
                                            class="gdlr-core-pos-right fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div
                                class="gdlr-core-flexslider flexslider gdlr-core-js-2  gdlr-core-with-outer-frame-element">
                                <div class="flex-viewport"
                                     style="overflow: hidden; position: relative;">
                                    <!-- <ul class="owl-carousel owlcourse" style="width: 1600%;" > -->
                                    <ul
                                        class="owl-carousel owlcourse">
                                        <?php foreach ($trendingTours as $tour): ?>
                                        <li class="gdlr-core-item-mglr owl-item"
                                            style="width: 400px; margin-right: 40px; float: left; display: block;">
                                            <div
                                                class="tourmaster-tour-grid  tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                                <div
                                                    class="tourmaster-tour-grid-inner">
                                                    <div
                                                        class="tourmaster-tour-thumbnail tourmaster-media-image ">
                                                        <a
                                                            href="/chi-tiet-tour/{{$tour->slug}}"><img
                                                                src="{{$tour->thumb}}"
                                                                alt=""
                                                                draggable="false"
                                                                width="700"
                                                                height="500"></a>
                                                    </div>
                                                    <div
                                                        class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js"
                                                        data-sync-height="tour-item-9"
                                                        style="height: 176px; padding-bottom: 8px;">
                                                        <div
                                                            class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element"
                                                            style="color: #ffffff;background-color: #ffa11a;">
                                                            <div class="tourmaster-thumbnail-ribbon-cornor"
                                                                 style="border-right-color: rgba(255, 161, 26, 0.5);">
                                                            </div>
                                                            Hot
                                                            Trip
                                                        </div>
                                                        <h3 class="tourmaster-tour-title gdlr-core-skin-title"
                                                            style="font-size: 18px;font-weight: 700;letter-spacing: 1px;text-transform: uppercase;">
                                                            <a
                                                                href="/chi-tiet-tour/{{$tour->slug}}">
                                                                <svg
                                                                    version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    x="0px"
                                                                    y="0px"
                                                                    viewBox="0 0 512 512"
                                                                    xml:space="preserve"
                                                                    style="fill: #ffa11a">
                                                                                                                                                                                <path
                                                                                                                                                                                    d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648
 c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176
 c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288
 C400.805,209.543,400.389,203.847,397.413,199.303z"></path>
                                                                                                                                                                            </svg>
                                                                <span><?php echo $tour->title;?></span></a>
                                                        </h3>
                                                        <div
                                                            class="tourmaster-tour-price-wrap tourmaster-discount">
                                                                                                                                                                        <span
                                                                                                                                                                            class="tourmaster-tour-price"><span
                                                                                                                                                                                class="tourmaster-head">From</span><span
                                                                                                                                                                                class="tourmaster-tail"></span></span><span
                                                                class="tourmaster-tour-discount-price"><?php echo number_format($tour->adult_price, 0, ',', '.');?> VNĐ</span>
                                                        </div>
                                                        <div
                                                            class="tourmaster-tour-info-wrap clearfix">
                                                            <div
                                                                class="tourmaster-tour-info tourmaster-tour-info-duration-text ">
                                                                <svg version="1.1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     x="0px"
                                                                     y="0px"
                                                                     viewBox="0 0 465 465"
                                                                     xml:space="preserve">
                                                                                                                                                                                <path
                                                                                                                                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
 c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
 c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"></path>
                                                                    <path
                                                                        d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
 c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
 c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"></path>
                                                                    <path
                                                                        d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
 c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
 c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"></path>
                                                                    <path
                                                                        d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
 c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
 c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"></path>
                                                                    <path
                                                                        d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
 c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
 c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"></path>
                                                                    <path
                                                                        d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
 c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
 c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"></path>
                                                                    <path
                                                                        d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
 c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
 C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
 c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
 c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
 C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
 c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
 c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
 C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
 c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
 c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
 c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
 C214.925,437.943,208.163,428.223,197.999,426.402z"></path>
                                                                    <path
                                                                        d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
 c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
 C236.243,89.978,229.477,83.198,221.124,83.198z"></path>
                                                                                                                                                                            </svg>
                                                                <?php echo $tour->days, ' ngày ', $tour->nights, ' đêm  ' ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                            <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter -->
        <div class="gdlr-core-pbf-wrapper "
             data-skin="COUNTER SKIN "
             id="section-counter">
            <div
                class="gdlr-core-pbf-background-wrap">
            </div>
            <div
                class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div
                    class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div
                        class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 35px 30px 0px 30px;">
                            <div
                                class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/counter-bg.png) ;background-repeat: no-repeat ;background-position: center ;"
                                     data-parallax-speed="0">
                                </div>
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div
                                            class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                            style="font-size: 50px ;font-weight: 700 ;">
                                                                                                                                                    <span
                                                                                                                                                        class="gdlr-core-counter-item-count gdlr-core-js number"
                                                                                                                                                        data-number="2000">0</span><span
                                                class="gdlr-core-counter-item-suffix">+</span>
                                        </div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content "
                                             style="font-size: 18px ;font-weight: 400 ;text-transform: none ;">
                                            Khách
                                            được
                                            phục
                                            vụ
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 35px 30px 0px 30px;">
                            <div
                                class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/counter-bg.png) ;background-repeat: no-repeat ;background-position: center ;"
                                     data-parallax-speed="0">
                                </div>
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div
                                            class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                            style="font-size: 50 ;font-weight: 700 ;">
                                                                                                                                                    <span
                                                                                                                                                        class="gdlr-core-counter-item-count gdlr-core-js number"
                                                                                                                                                        data-number="50">0</span><span
                                                class="gdlr-core-counter-item-suffix">+</span>
                                        </div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"
                                             style="font-size: 18px ;font-weight: 400 ;text-transform: none ;">
                                            Điểm
                                            đến
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 35px 30px 0px 30px;">
                            <div
                                class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/counter-bg.png) ;background-repeat: no-repeat ;background-position: center ;"
                                     data-parallax-speed="0">
                                </div>
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div
                                            class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                            style="font-size: 50 ;font-weight: 700 ;">
                                                                                                                                                    <span
                                                                                                                                                        class="gdlr-core-counter-item-count gdlr-core-js number"
                                                                                                                                                        data-number="500">0</span><span
                                                class="gdlr-core-counter-item-suffix">+</span>
                                        </div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"
                                             style="font-size: 18px ;font-weight: 400 ;text-transform: none ;">
                                            Lượt
                                            tour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 35px 30px 55px 30px;">
                            <div
                                class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/counter-bg.png) ;background-repeat: no-repeat ;background-position: center ;"
                                     data-parallax-speed="0">
                                </div>
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div
                                            class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font"
                                            style="font-size: 50 ;font-weight: 700 ;">
                                                                                                                                                    <span
                                                                                                                                                        class="gdlr-core-counter-item-count gdlr-core-js number"
                                                                                                                                                        data-number="50">0</span>
                                        </div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content"
                                             style="font-size: 18px ;font-weight: 400 ;text-transform: none ;">
                                            Đối
                                            tác<span
                                                class="gdlr-core-counter-item-suffix">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space"
                            style="padding-bottom: 20px ;">
                            <div class="gdlr-core-text-box-item-content"
                                 style="font-size: 15px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: uppercase ;color: #a7b2bf ;">
                                <p>Đồng
                                    hành
                                    cũng
                                    bạn
                                    trên
                                    mọi
                                    nẻo
                                    đường
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customer review -->
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 60px 0px 50px 0px;">
            <div
                class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                     style="background-image: url(https://demo.goodlayers.com/traveltour/hiking/wp-content/uploads/2019/04/testimonial-bg-1.jpg) ;background-repeat: repeat-x ;background-position: bottom center ;"
                     data-parallax-speed="0">
                </div>
            </div>
            <div
                class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div
                    class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div
                        class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                            style="padding-bottom: 20px ;">
                            <div
                                class="gdlr-core-title-item-title-wrap">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                    style="font-size: 28px ;font-weight: 700 ;letter-spacing: 3px ;color: #193555 ;">
                                    Nhận
                                    xét
                                    của
                                    khách
                                    hàng<span
                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"
                            style="margin-bottom: 60px ;">
                            <div class="gdlr-core-divider-container"
                                 style="max-width: 45px ;">
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                     style="border-color: #ffa019 ;border-width: 4px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-left gdlr-core-item-pdlr">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 "
                                 data-type="carousel"
                                 data-column="3"
                                 data-move="1"
                                 data-nav="bullet"
                                 data-nav-parent="gdlr-core-testimonial-item">
                                <div class="flex-viewport"
                                     style="overflow: hidden; position: relative;">
                                    <ul class="slides"
                                        style="width: 1000%; margin-left: 0px;">
                                        <?php foreach ($reviews as $review): ?>
                                        <li class="gdlr-core-item-mglr"
                                            style="width: 400px; margin-right: 40px; float: left; display: block;"
                                            data-thumb-alt="">
                                            <div
                                                class="gdlr-core-testimonial clearfix">
                                                <div
                                                    class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background">
                                                    <div
                                                        class="gdlr-core-testimonial-quote gdlr-core-quote-font  gdlr-core-top"
                                                        style="color: #193555 ;">
                                                        “
                                                    </div>
                                                    <div
                                                        class="gdlr-core-testimonial-content-wrap">
                                                        <div
                                                            class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content"
                                                            style="font-size: 15px ;color: #6a7581 ;">
                                                            <p>{{$review->content}}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="gdlr-core-testimonial-author-wrap clearfix">
                                                            <div
                                                                class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                <img
                                                                    src="{{$review->avatar}}"
                                                                    alt=""
                                                                    title="Ảnh đại diện của người review"
                                                                    draggable="false"
                                                                    width="150"
                                                                    height="150">
                                                            </div>
                                                            <div
                                                                class="gdlr-core-testimonial-author-content">
                                                                <div
                                                                    class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                    style="color: #6a7581 ;font-size: 17px ;text-transform: none ;">{{$review->author}}</div>
                                                                <div
                                                                    class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                    style="color: #6a7581 ;font-size: 16px ;">{{$review->job}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                            <?php endforeach; ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top destination -->
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 20px 0px 20px 0px;">
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
                                                Điểm
                                                đến
                                                được
                                                ưa
                                                thích
                                                nhất<span
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
                                           href="/danh-sach-tour"
                                           style="font-size: 17px ;font-weight: 600 ;color: #193555 ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span
                                                class="gdlr-core-content">Tất cả điểm đến</span><i
                                                class="gdlr-core-pos-right fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 0px 0px 50px 0px;">
            <div
                class="gdlr-core-pbf-background-wrap">
            </div>
            <div
                class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div
                    class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">

                    <div
                        class="gdlr-core-pbf-element">
                        <div
                            class="tourmaster-tour-category clearfix ">
                            <?php $isFirst=1;?>
                            <?php foreach ($top_destinations as $destination): ?>
                            <div
                                class="tourmaster-tour-category-grid tourmaster-item-list  tourmaster-item-pdlr tourmaster-item-mgb tourmaster-column-12 @if($isFirst===1) tourmaster-column-first @endif tourmaster-with-thumbnail">
                                <div
                                    class="tourmaster-tour-category-item-wrap">
                                    <div
                                        class="tourmaster-tour-category-thumbnail tourmaster-media-image">
                                        <img
                                            src="{{$destination->thumb}}"
                                            alt=""
                                            width="800"
                                            height="960">
                                    </div>
                                    <div
                                        class="tourmaster-tour-category-overlay">
                                    </div>
                                    <div
                                        class="tourmaster-tour-category-overlay-front">
                                    </div>
                                    <div
                                        class="tourmaster-tour-category-head">
                                        <div
                                            class="tourmaster-tour-category-head-display clearfix">
                                            <h3
                                                class="tourmaster-tour-category-title">
                                                <i
                                                    class="icon_pin_alt"></i><?php echo $destination->title?>
                                            </h3>
                                            <div
                                                class="tourmaster-tour-category-count">
                                                {{$destination->count}} tours
                                            </div>
                                            <style>
                                                .tourmaster-tour-category-count{
                                                    color:
                                                        white !important;
                                                    font-size: 15px;
                                                    font-weight: bold;
                                                }
                                            </style>
                                        </div>
                                        <div
                                            class="tourmaster-tour-category-head-animate">
                                            <a class="tourmaster-tour-category-head-link"
                                               href="/danh-sach-tour/{{$destination->slug}}">Xem các tour</a>
                                            <div
                                                class="tourmaster-tour-category-head-divider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php $isFirst=0;?>
                                <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- Why choose me? -->
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 0px 0px 0px 0px;"
             data-skin="Blue Column Service">
            <div
                class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                     style="background-image: url(//cdn.goodlayers.com/traveltour/wp-content/uploads/2016/06/column-bg.jpg) ;background-repeat: repeat ;background-position: center ;"
                     data-parallax-speed="0">
                </div>
            </div>
            <div
                class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div
                    class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first"
                         data-skin="Blue Icon">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-left"
                             style="margin: 0px 17px 0px 0px; padding: 56px 0px; height: 137px;"
                             data-sync-height="column-service-height">
                            <div class="gdlr-core-pbf-background-wrap"
                                 style="background-color: #4263c1 ;">
                            </div>
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                        style="padding-bottom: 0px ;">
                                        <div
                                            class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                style="font-size: 19px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;">Tại sao nên chọn chúng tôi?<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15"
                         data-skin="Blue Icon">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 40px 0px 0px; height: 137px;"
                             data-sync-height="column-service-height">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr"
                                        style="padding-bottom: 20px;">
                                        <div
                                            class="gdlr-core-column-service-media gdlr-core-media-image">
                                            <img
                                                src="//cdn.goodlayers.com/traveltour/wp-content/uploads/2016/06/icon-10.png"
                                                alt=""
                                                title="icon-10"
                                                width="37"
                                                height="39">
                                        </div>
                                        <div
                                            class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap"
                                                 style="margin-bottom: 5px ;">
                                                <h3
                                                    class="gdlr-core-column-service-title gdlr-core-skin-title">Kinh nghiệm</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content"
                                                 style="font-size: 14px ;">
                                                <p>Hơn 5 năm trong lĩnh vực lữ hành
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15"
                         data-skin="Blue Icon">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 40px 0px 0px; height: 137px;"
                             data-sync-height="column-service-height">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr"
                                        style="padding-bottom: 10px;">
                                        <div
                                            class="gdlr-core-column-service-media gdlr-core-media-image">
                                            <img
                                                src="//cdn.goodlayers.com/traveltour/wp-content/uploads/2016/06/icon-11.png"
                                                alt=""
                                                title="icon-11"
                                                width="34"
                                                height="43">
                                        </div>
                                        <div
                                            class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap"
                                                 style="margin-bottom: 5px ;">
                                                <h3
                                                    class="gdlr-core-column-service-title gdlr-core-skin-title">Uy tín</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content"
                                                 style="font-size: 14px ;">
                                                <p>Với hàng nghìn lượt khách mỗi năm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15"
                         data-skin="Blue Icon">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 40px 0px 0px; height: 137px;"
                             data-sync-height="column-service-height">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-no-caption gdlr-core-item-pdlr"
                                        style="padding-bottom: 10px;">
                                        <div
                                            class="gdlr-core-column-service-media gdlr-core-media-image">
                                            <img
                                                src="//cdn.goodlayers.com/traveltour/wp-content/uploads/2016/06/icon-12.png"
                                                alt=""
                                                title="icon-12"
                                                width="27"
                                                height="37">
                                        </div>
                                        <div
                                            class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap"
                                                 style="margin-bottom: 5px ;">
                                                <h3
                                                    class="gdlr-core-column-service-title gdlr-core-skin-title">Có văn phòng đại diện</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content"
                                                 style="font-size: 14px ;">
                                                <p>Giao dịch, hoàn thành thủ tục trực tiếp</p>
                                            </div>
                                        </div>
                                    </div>
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
        .tourmaster-tour-category-thumbnail.tourmaster-media-image img{
            max-width: 100%;
            min-height: 250px;
        }
        .tourmaster-tour-thumbnail.tourmaster-media-image{
            width: 400px;
            height: 230px;
        }
.tourmaster-tour-price-wraptourmaster-discount{
font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
}

        #gdlr-core-button-id-40833{
            background-color: white;
        }
    </style>
@endsection
