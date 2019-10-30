@extends('client.layouts.master')
@section('header','default_header')
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
                                    <h1 style="font-size: 80px;">{{$slider->desc}}</h1></div>


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
        <div class="gdlr-core-pbf-wrapper " style="padding: 95px 0px 20px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                        style="padding-bottom: 15px ;">
                                        <div class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                style="font-size: 28px ;font-weight: 700 ;letter-spacing: 3px ;color: #193555 ;">Tất cả điểm đến<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align"
                                        style="margin-bottom: 50px ;">
                                        <div class="gdlr-core-divider-container" style="max-width: 45px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                 style="border-color: #ffa019 ;border-width: 4px;">
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
        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
            <div class="gdlr-core-pbf-element">
                <div class="tourmaster-tour-category clearfix ">
                    <?php $destination_count = 0;?>
                    <?php foreach($top_destinations as $destination):?>
                                    <?php $destination_count = $destination_count + 1;?>
                        <div
                            class="tourmaster-tour-category-grid tourmaster-item-list  tourmaster-item-pdlr tourmaster-item-mgb tourmaster-column-20 @if ($destination_count===1) tourmaster-column-first tourmaster-with-thumbnail @else tourmaster-with-thumbnail @endif">
                            <div class="tourmaster-tour-category-item-wrap">
                                <div class="tourmaster-tour-category-thumbnail tourmaster-media-image"><img
                                        src="{{$destination->thumb}}"
                                        width="800" height="960"></div>
                                <div class="tourmaster-tour-category-overlay"></div>
                                <div class="tourmaster-tour-category-overlay-front"></div>
                                <div class="tourmaster-tour-category-head">
                                    <div class="tourmaster-tour-category-head-display clearfix"><h3
                                            class="tourmaster-tour-category-title"><i class="icon_pin_alt"></i>{{$destination->title}}</h3>
                                        <div class="tourmaster-tour-category-count">{{$destination->count}} tours</div>
                                    </div>
                                    <div class="tourmaster-tour-category-head-animate"><a
                                            class="tourmaster-tour-category-head-link"
                                            href="/danh-sach-tour/{{$destination->slug}}">Xem các tour</a>
                                        <div class="tourmaster-tour-category-head-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach;?>

                </div>
            </div>
        </div>

    </div>
@endsection
@section('custom-style-content')
    <style>
        .tourmaster-tour-category-item-wrap{
            width: 400px;
            height: 250px;
        }
        .tourmaster-tour-category-item-wrap div img{
            height: 100%;
        }
        .tourmaster-tour-category-count{
            color: white!important;
            font-size: 15px;
            font-weight: bold;
        }
    </style>

    @endsection
