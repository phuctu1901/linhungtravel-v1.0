@extends('client.layouts.master')
@section('header', 'default_header')
@section('head-content')
    <link rel='stylesheet' id='fotorama-css-css' href='/client/asset/css/fotorama.css' type='text/css' media='all'/>
@endsection
@section('main-content')
    <div id="st-content-wrapper" class="st-single-tour">
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
        <div class="st-breadcrumb hidden-xs">
            <div class="container">
                <ul>
                    <li><a href="https://tomap.travelerwp.com">Trang chủ</a></li>
                    <li>
                        <a href="/danh-sach-tour/{{$tour->tourcategory->slug}}">{{$tour->tourcategory->title}}</a>
                    </li>
                    <li class="active">{{$tour->title}}</li>
                </ul>
            </div>
        </div>

        <div class="st-tour-content style3">
            <div class="container">
                <!--Tour header-->
                <div class="st-hotel-header">
                    <div class="left">
                        <h2 class="st-heading">{{$tour->title}}</h2>
                        <div class="sub-heading">
                            <i class="input-icon field-icon fa">
                                <svg height="16px" width="16px" width="16px" height="16px"
                                     viewBox="0 0 11 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                    <title>ico_maps_add_2</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                       stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Hotel_Search_Hover" transform="translate(-170.000000, -553.000000)"
                                           stroke="#A0A9B2">
                                            <g id="location-select" transform="translate(135.000000, 359.000000)">
                                                <g id="hover" transform="translate(0.000000, 42.000000)">
                                                    <g id="Group" transform="translate(35.000000, 149.000000)">
                                                        <g id="ico_maps_add_2"
                                                           transform="translate(0.000000, 3.000000)">
                                                            <g id="Group">
                                                                <g id="pin-1">
                                                                    <path
                                                                        d="M10.5,5.5 C10.5,8.314 8.54466667,9.93266667 7.07933333,11.5 C6.202,12.4386667 5.5,15.5 5.5,15.5 C5.5,15.5 4.8,12.4406667 3.92466667,11.5046667 C2.458,9.938 0.5,8.31666667 0.5,5.5 C0.5,2.73857625 2.73857625,0.5 5.5,0.5 C8.26142375,0.5 10.5,2.73857625 10.5,5.5 Z"
                                                                        id="Shape"></path>
                                                                    <circle id="Oval" cx="5.5" cy="5.5" r="2"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </i><?php echo $tour->location?> </div>
                    </div>
                    {{--                    <div class="right">--}}
                    {{--                        <div class="review-score style-2">--}}
                    {{--                            <span class="head-rating">Very Good</span>--}}
                    {{--                            <div class="st-stars style-2">--}}
                    {{--                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i--}}
                    {{--                                    class="fa fa-star grey"></i></div>--}}

                    {{--                            <p class="st-link">from 2 reviews</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>


                <div class="row">
                    <div class="col-xs-12 col-md-9">

                        <!--Tour Info-->
                        <div class="st-tour-feature">
                            <div class="row">
                                <div class="col-xs-6 col-lg-3">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="input-icon field-icon fa">
                                                <svg height="32px" width="32px" width="32px"
                                                     height="32px" viewBox="0 0 34 34" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                    <title>ico_clock</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd"
                                                       stroke-linecap="round" stroke-linejoin="round">
                                                        <g id="Tour_Detail_1"
                                                           transform="translate(-134.000000, -1005.000000)"
                                                           stroke="#5191FA">
                                                            <g id="tour-detail"
                                                               transform="translate(0.000000, 211.000000)">
                                                                <g id="feauture"
                                                                   transform="translate(135.000000, 765.000000)">
                                                                    <g id="Group-3">
                                                                        <g id="Group"
                                                                           transform="translate(0.000000, 25.000000)">
                                                                            <g id="ico_clock"
                                                                               transform="translate(0.000000, 5.000000)">
                                                                                <circle id="Oval" cx="16" cy="16"
                                                                                        r="16"></circle>
                                                                                <circle id="Oval" cx="16"
                                                                                        cy="17.3333333"
                                                                                        r="2.28571429"></circle>
                                                                                <path d="M16,15.047619 L16,7.04761905"
                                                                                      id="Shape"></path>
                                                                                <path
                                                                                    d="M17.6167619,18.9500952 L21.7142857,23.047619"
                                                                                    id="Shape"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </i></div>
                                        <div class="info">
                                            <h4 class="name">Thời gian</h4>
                                            <p class="value">
                                                {{$tour->days}} ngày {{$tour->nights}} đêm </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-lg-3">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="input-icon field-icon fa">
                                                <svg height="32px" width="32px" width="32px"
                                                     height="32px" viewBox="0 0 34 34" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                    <title>ico_tour_type</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd"
                                                       stroke-linecap="round" stroke-linejoin="round">
                                                        <g id="Tour_Detail_1"
                                                           transform="translate(-335.000000, -1005.000000)"
                                                           stroke="#5191FA">
                                                            <g id="tour-detail"
                                                               transform="translate(0.000000, 211.000000)">
                                                                <g id="feauture"
                                                                   transform="translate(135.000000, 765.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(201.000000, 25.000000)">
                                                                        <g id="ico_tour_type"
                                                                           transform="translate(0.000000, 5.000000)">
                                                                            <path
                                                                                d="M13.4810667,23.7283556 C13.7772954,25.6164963 13.043711,27.5192464 11.5566476,28.7198584 C10.0695841,29.9204704 8.05496197,30.2365427 6.27166976,29.549014 C4.48837756,28.8614852 3.20733983,27.2748074 2.91111111,25.3866667 L2.74613333,24.3299556 C2.65661545,23.7692095 2.79434998,23.1959129 3.12883306,22.7370331 C3.46331614,22.2781533 3.96694361,21.9715605 4.52817778,21.8851556 L10.8712889,20.8896 C11.432035,20.8000821 12.0053315,20.9378166 12.4642113,21.2722997 C12.9230912,21.6067828 13.2296839,22.1104103 13.3160889,22.6716444 L13.4810667,23.7283556 Z"
                                                                                id="Shape"></path>
                                                                            <path
                                                                                d="M5.11555556,0.1408 C1.71134814,0.982901045 -0.457506858,4.31950538 0.154844444,7.77244444 L1.41777778,15.8691556 C1.60071,17.0365699 2.69505968,17.8348913 3.86257778,17.6526222 L10.2042667,16.6570667 C10.7657612,16.571 11.2697435,16.2645497 11.6045222,15.8056305 C11.9393009,15.3467113 12.0772269,14.7732252 11.9877333,14.2122667 L11.9592889,14.0088889 C11.7659953,12.7663569 11.9436025,11.4944126 12.4698667,10.3523556 C12.9981751,9.20988894 13.1758566,7.93642212 12.9804444,6.69297778 L12.7827556,5.4272 C12.5097684,3.68767687 11.5342848,2.1366314 10.0846439,1.13712946 C8.63500309,0.137627517 6.8384634,-0.222588541 5.11555556,0.1408 Z"
                                                                                id="Shape"></path>
                                                                            <path
                                                                                d="M18.2583111,25.6995556 C17.8428835,28.5534868 19.7641913,31.223136 22.6023163,31.7355326 C25.4404413,32.2479292 28.1739846,30.4186694 28.7827556,27.5996444 L28.9719111,26.5457778 C29.1807578,25.3831626 28.4089448,24.2709374 27.2467556,24.0597333 L20.9292444,22.9219556 C20.3703881,22.8193233 19.7936791,22.9438755 19.3269888,23.2679956 C18.8602984,23.5921158 18.5421913,24.0890206 18.4432,24.6485333 L18.2583111,25.6995556 Z"
                                                                                id="Shape"></path>
                                                                            <path
                                                                                d="M27.1770667,2.31253333 C30.5568647,3.23734789 32.6432678,6.62146013 31.9514667,10.0565333 L30.4965333,18.1233778 C30.3971763,18.68204 30.079348,19.1781018 29.6133417,19.5018508 C29.1473353,19.8255998 28.5715511,19.9503581 28.0133333,19.8485333 L21.6958222,18.7107556 C21.1363095,18.6117642 20.6394047,18.2936571 20.3152845,17.8269668 C19.9911643,17.3602764 19.8666122,16.7835675 19.9692444,16.2247111 L20.0062222,16.0170667 C20.2290597,14.7795819 20.0806008,13.5038248 19.5795556,12.3505778 C19.0784767,11.1968384 18.9300215,9.92061854 19.1528889,8.68266667 L19.3804444,7.42257778 C19.6924113,5.68717624 20.7045511,4.15653375 22.1792495,3.18999024 C23.6539479,2.22344673 25.4613226,1.90612953 27.1770667,2.31253333 Z"
                                                                                id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </i></div>
                                        <div class="info">
                                            <h4 class="name">Loại tour</h4>
                                            <p class="value">
                                                {{$tour->tourtype->name}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-lg-3">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="input-icon field-icon fa">
                                                <svg height="32px" width="32px" width="32px"
                                                     height="32px" viewBox="0 0 32 32" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                    <title>ico_adults_blue</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd" stroke-linecap="round"
                                                       stroke-linejoin="round">
                                                        <g id="Room_Detail_1"
                                                           transform="translate(-544.000000, -803.000000)"
                                                           stroke="#5191FA">
                                                            <g id="room-detail"
                                                               transform="translate(0.000000, 211.000000)">
                                                                <g id="Group-3"
                                                                   transform="translate(135.000000, 562.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(409.000000, 30.000000)">
                                                                        <g id="ico_adults">
                                                                            <g id="Group"
                                                                               transform="translate(1.000000, 1.000000)">
                                                                                <g id="Regular">
                                                                                    <circle id="Oval" cx="7" cy="4"
                                                                                            r="4"></circle>
                                                                                    <path
                                                                                        d="M14,17 C14,13.1340068 10.8659932,10 7,10 C3.13400675,10 4.4408921e-16,13.1340068 0,17 L0,20 L3,20 L4,30 L10,30 L11,20 L14,20 L14,17 Z"
                                                                                        id="Shape"></path>
                                                                                    <path
                                                                                        d="M16,24 L18,24 L19,30 L25,30 L26,24 L30,24 L27,15 C26,12 24.7613333,10 22,10 C20.1015957,10.0018584 18.4126862,11.2059289 17.792,13"
                                                                                        id="Shape"></path>
                                                                                    <circle id="Oval" cx="22" cy="4"
                                                                                            r="4"></circle>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </i></div>
                                        <div class="info">
                                            <h4 class="name">Giá</h4>
                                            <p class="value">
                                                <?php echo number_format($tour->adult_price, 0, ',', '.');?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-lg-3">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="input-icon field-icon fa">
                                                <svg height="32px" width="32px" width="32px"
                                                     height="32px" viewBox="0 0 32 32" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                    <title>Group</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs></defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd"
                                                       stroke-linecap="round" stroke-linejoin="round">
                                                        <g id="Tour_Detail_1"
                                                           transform="translate(-735.000000, -1005.000000)"
                                                           stroke="#5191FA">
                                                            <g id="tour-detail"
                                                               transform="translate(0.000000, 211.000000)">
                                                                <g id="feauture"
                                                                   transform="translate(135.000000, 765.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(601.000000, 25.000000)">
                                                                        <g transform="translate(0.000000, 5.000000)"
                                                                           id="Regular">
                                                                            <g>
                                                                                <circle id="Oval" cx="9" cy="5.5"
                                                                                        r="5.5"></circle>
                                                                                <path
                                                                                    d="M10,13.0773333 C9.66846827,13.0319989 9.33455994,13.0061766 9,13 C4.02943725,13 5.92118946e-16,17.0294373 0,22"
                                                                                    id="Shape"></path>
                                                                                <path
                                                                                    d="M28,26 L24,26 L18,30 L18,26 L16,26 C14.8954305,26 14,25.1045695 14,24 L14,16 C14,14.8954305 14.8954305,14 16,14 L28,14 C29.1045695,14 30,14.8954305 30,16 L30,24 C30,25.1045695 29.1045695,26 28,26 Z"
                                                                                    id="Shape"></path>
                                                                                <path d="M18,18 L26,18"
                                                                                      id="Shape"></path>
                                                                                <path d="M18,22 L26,22"
                                                                                      id="Shape"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </i></div>
                                        <div class="info">
                                            <h4 class="name">Ngôn ngữ</h4>
                                            <p class="value">
                                                Tiếng Việt </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tour info-->

                        <div class="st-gallery" data-width="100%" data-nav="thumbs" data-allowfullscreen="true">
                            <div class="fotorama" data-auto="false">
                                <?php foreach ($images as $image): ?>
                                <img src="{{$image}}">
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!--Tour Overview-->
                        <div class="st-overview">
                            <h3 class="st-section-title">Tổng quan</h3>
                            <div class="st-description" data-toggle-section="st-description">
                                <p>{{$tour->overview}}</p>
                            </div>
                        </div>
                        <!--End Tour Overview-->

                        <!--Tour highlight-->

                        <div class="st-highlight">
                            <h2 class="st-section-title">Nổi bật</h2>
                            <?php echo htmlspecialchars_decode($tour->highlights);?>
                        </div>
                        <!--End Tour highlight-->

                        <!--Tour program-->
                        <div class="st-program">
                            <div class="st-title-wrapper">
                                <h3 class="st-section-title">Chương trình tour</h3>
                            </div>

                            <div class="st-program-list">
                                <?php  $i = 0;?>
                                <?php foreach ($itineraries as $itinerary): ?>
                                <?php  $i++;?>

                                <div class="item">
                                    <div class="header">
                                        <h5>Ngày {{$i}}: {{$itinerary->name}}</h5>
                                        <span class="arrow">
                    <i class="fa fa-angle-down"></i>
                </span>
                                    </div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="{{$itinerary->image}}" alt="Day 1: Arrive San Francisco"
                                                     class="img-responsive">
                                            </div>
                                            <div class="col-lg-8">
                                                <?php echo htmlspecialchars_decode($itinerary->description);?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>


                            </div>
                        </div>
                        <!--End Tour program-->

                        <!--Tour Include/Exclude-->
                        <div class="st-include">
                            <h3 class="st-section-title">
                                Giá bao gồm:</h3>
                            <div class="row">
                                <div class="col-lg-12">

                                    <p>     <?php echo htmlspecialchars_decode(json_decode($tour->price_included));?></p>
                                </div>
                            </div>
                        </div>
                        <!--End Tour Include/Exclude-->
                        <div class="st-include">
                            <h3 class="st-section-title">
                                Giá không bao gồm </h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>     <?php echo htmlspecialchars_decode(json_decode($tour->price_excluded));?></p>

                                </div>


                            </div>
                        </div>

                        <!--Tour Note-->
                        <div class="st-include stoped-scroll-section">
                            <h3 class="st-section-title">
                                Ghi chú </h3>
                            <div class="row">
                                <div class="col-lg-12">


                                    <p>     <?php echo htmlspecialchars_decode(json_decode($tour->notes));?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="widgets">
                            <div class="fixed-on-mobile" id="booking-request" data-screen="992px">
                                <div class="close-icon hide">
                                    <i class="input-icon field-icon fa">
                                        <svg height="24px" width="24px" width="24px"
                                             height="24px" viewBox="0 0 24 24" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                            <title>Ico_close</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Ico_close" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd"
                                               stroke-linecap="round" stroke-linejoin="round">
                                                <g id="Group" stroke="#1A2B48" stroke-width="1.5">
                                                    <g id="close">
                                                        <path d="M0.75,23.249 L23.25,0.749" id="Shape"></path>
                                                        <path d="M23.25,23.249 L0.75,0.749" id="Shape"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i></div>
                                <div class="contact-info widget-box" style="margin-top: 0px;">
                                    <h4>Liên hệ ngay để đặt tour</h4>
                                    <a class="item-line" href="tel:1900 1808">
                                        <h5 class="fas fas-phone">   1900 1808</h5>
                                    </a>
                                    <a class="item-line" href="mailto:info@saigontourist.net">
                                        <i class="fa fa-envelope"></i>
                                        <h5 class="fa fa-envelope;">   info@linhungtravel.net</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="st-hr large  "></div>
            </div>
        </div>
    </div>

@endsection
@section('script-content')
    <script>
        (function ($) {
            $(document).ready(function () {


                var iex = 0;
                $('.st-program-list').each(function () {
                    var t = $(this);
                    $('.item .header', t).click(function () {
                        $('.st-program .expand').text($('.st-program .expand').data('text-more'));
                        iex = 0;
                        $('.item', t).removeClass('active');
                        $(this).parent().toggleClass('active');
                    });
                });


                $('.st-program .expand').on('click', function () {
                    var t = $(this);
                    if (iex == 0) {
                        $('.st-program .st-program-list .item').addClass('active');
                        t.text(t.data('text-less'));
                        iex = 1;
                    } else {
                        $('.st-program .st-program-list .item').removeClass('active');
                        t.text(t.data('text-more'));
                        iex = 0;
                    }
                });

                $('.st-faq .item').each(function () {
                    var t = $(this);
                    t.find('.header').click(function () {
                        $('.st-faq .item').not(t).removeClass('active');
                        t.toggleClass('active');
                    });
                });

                $(".st-video-popup").each(function () {
                    $(this).magnificPopup({
                        type: 'iframe'
                    })
                });
            });

        })(jQuery);
    </script>
{{--    <script type='text/javascript' src='/client/asset/js/jquery.js'></script>--}}

    <script type='text/javascript' src='/client/asset/plugin/fotorama/fotorama.js'></script>

@endsection

