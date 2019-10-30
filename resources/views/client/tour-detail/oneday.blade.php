@extends('client.layouts.master')

@section('main-content')
    <div id="st-content-wrapper" class="st-single-tour">
        <div class="st-breadcrumb hidden-xs">
            <div class="container">
                <ul>
                    <li><a href="https://tomap.travelerwp.com">Trang chủ</a></li>
                    <li>
                        <a href="https://tomap.travelerwp.com/sidebar-search-layout/?location_id=1957&#038;location_name=United%20States">{{$tour->location}}</a>
                    </li>
                    <li class="active">{{$tour->title}}</li>
                </ul>
            </div>
        </div>
        <div class="hotel-target-book-mobile">
            <div class="price-wrapper">
                from <span class="price"><span class="text-lg lh1em item "> €625.00</span></span></div>
            <a href="" class="btn btn-mpopup btn-green">Book Now</a>

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

                </div>


                <div class="row">
                    <div class="col-xs-12 col-md-9">

                        <!--Tour Info-->
                        <div class="st-tour-feature">
                            <div class="row">

                                <div class="col-xs-6 col-lg-6">
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
                                <div class="col-xs-6 col-lg-6">
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

                            <div class="st-program-list style3">
                                <?php  $i = 0;?>
                                <?php foreach ($itineraries as $itinerary): ?>
                                <?php  $i++;?>
                                <div class="item active">
                                    <div class="icon"><img
                                            src="https://tomap.travelerwp.com/wp-content/uploads/2014/12/time_active.png"
                                            alt="Itenirary"></div>
                                    <h5>{{$itinerary->name}}</h5>
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
                        <div class="st-include">
                            <h3 class="st-section-title">
                                Ghi chú </h3>
                            <div class="row">
                                <div class="col-lg-12">


                                    <p>     <?php echo htmlspecialchars_decode(json_decode($tour->notes));?></p>

                                </div>
                            </div>
                        </div>
                        <!--End Tour Note-->


                    </div>

                </div>
                <div class="st-hr large"></div>
                <h2 class="heading text-center f28 mt50">You might also like</h2>
                <div class="st-list-tour-related row mt50">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item has-matchHeight">
                            <div class="featured">
                                <a href="https://tomap.travelerwp.com/st_tour/museum-of-american-history-through-music-tour-2/">
                                    <img
                                        src="https://tomap.travelerwp.com/wp-content/uploads/2017/06/tour_img-331914-148-800x600.jpg"
                                        alt="WordPress Booking Theme" class="img-responsive">
                                </a>
                                <a href="#" class="share-item like-it" data-toggle="modal"
                                   data-target="#st-login-form"
                                   data-type="st_tours" data-id="8543"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="body">
                                <i class="input-icon field-icon fa">
                                    <svg height="16px" width="16px" width="16px" height="16px"
                                         viewBox="0 0 11 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                        <title>ico_maps_add_2</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd"
                                           stroke-linecap="round" stroke-linejoin="round">
                                            <g id="Hotel_Search_Hover"
                                               transform="translate(-170.000000, -553.000000)"
                                               stroke="#A0A9B2">
                                                <g id="location-select"
                                                   transform="translate(135.000000, 359.000000)">
                                                    <g id="hover" transform="translate(0.000000, 42.000000)">
                                                        <g id="Group" transform="translate(35.000000, 149.000000)">
                                                            <g id="ico_maps_add_2"
                                                               transform="translate(0.000000, 3.000000)">
                                                                <g id="Group">
                                                                    <g id="pin-1">
                                                                        <path
                                                                            d="M10.5,5.5 C10.5,8.314 8.54466667,9.93266667 7.07933333,11.5 C6.202,12.4386667 5.5,15.5 5.5,15.5 C5.5,15.5 4.8,12.4406667 3.92466667,11.5046667 C2.458,9.938 0.5,8.31666667 0.5,5.5 C0.5,2.73857625 2.73857625,0.5 5.5,0.5 C8.26142375,0.5 10.5,2.73857625 10.5,5.5 Z"
                                                                            id="Shape"></path>
                                                                        <circle id="Oval" cx="5.5" cy="5.5"
                                                                                r="2"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </i><span class="ml5 f14 address">Chicago, IL, USA</span>
                                <h4 class="title"><a
                                        href="https://tomap.travelerwp.com/st_tour/museum-of-american-history-through-music-tour-2/"
                                        class="st-link c-main">Harvard: 70-Minute Hahvahd Tour</a></h4>
                                <div class="st-stars style-2">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star grey"></i></div>

                                <p class="review-text">1 review</p>
                                <div class="st-flex space-between">
                                    <div class="left st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" version="1.1"
                                                 id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 x="0px" y="0px" viewBox="0 0 24 24"
                                                 style="enable-background:new 0 0 24 24;"
                                                 xml:space="preserve">
                                                <title>time-clock-circle-1</title>
                                                <g fill="#5E6D77">
                                                    <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
		C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
		S17.376,2.25,12,2.25z"/>
                                                    <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
		c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
		c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
		c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"/>
                                                </g>
                                            </svg>
                                        </i> <span class="duration">4 days</span>
                                    </div>
                                    <div class="right st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="9px" width="9px"
                                                 height="16px" viewBox="0 0 11 18" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>thunder</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="Room_Only_Detail_1"
                                                       transform="translate(-135.000000, -4858.000000)"
                                                       fill="#FFAB53" fill-rule="nonzero">
                                                        <g id="nearby-hotel"
                                                           transform="translate(130.000000, 4334.000000)">
                                                            <g id="h1-g"
                                                               transform="translate(5.000000, 136.000000)">
                                                                <g id="hotel-grid">
                                                                    <g id="price"
                                                                       transform="translate(0.000000, 383.000000)">
                                                                        <g id="thunder"
                                                                           transform="translate(0.000000, 5.000000)">
                                                                            <path
                                                                                d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z"
                                                                                id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i> <span class="price">
                                            from <span class="text-lg lh1em item "> €625.00</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item has-matchHeight">
                            <div class="featured">
                                <a href="https://tomap.travelerwp.com/st_tour/museum-of-american-history-through-music-tour/">
                                    <img
                                        src="https://tomap.travelerwp.com/wp-content/uploads/2017/06/alexei-scutari-481455-unsplash-800x600.jpg"
                                        alt="WordPress Booking Theme" class="img-responsive">
                                </a>
                                <a href="#" class="share-item like-it" data-toggle="modal"
                                   data-target="#st-login-form"
                                   data-type="st_tours" data-id="6562"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="body">
                                <i class="input-icon field-icon fa">
                                    <svg height="16px" width="16px" width="16px" height="16px"
                                         viewBox="0 0 11 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                        <title>ico_maps_add_2</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd"
                                           stroke-linecap="round" stroke-linejoin="round">
                                            <g id="Hotel_Search_Hover"
                                               transform="translate(-170.000000, -553.000000)"
                                               stroke="#A0A9B2">
                                                <g id="location-select"
                                                   transform="translate(135.000000, 359.000000)">
                                                    <g id="hover" transform="translate(0.000000, 42.000000)">
                                                        <g id="Group" transform="translate(35.000000, 149.000000)">
                                                            <g id="ico_maps_add_2"
                                                               transform="translate(0.000000, 3.000000)">
                                                                <g id="Group">
                                                                    <g id="pin-1">
                                                                        <path
                                                                            d="M10.5,5.5 C10.5,8.314 8.54466667,9.93266667 7.07933333,11.5 C6.202,12.4386667 5.5,15.5 5.5,15.5 C5.5,15.5 4.8,12.4406667 3.92466667,11.5046667 C2.458,9.938 0.5,8.31666667 0.5,5.5 C0.5,2.73857625 2.73857625,0.5 5.5,0.5 C8.26142375,0.5 10.5,2.73857625 10.5,5.5 Z"
                                                                            id="Shape"></path>
                                                                        <circle id="Oval" cx="5.5" cy="5.5"
                                                                                r="2"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </i><span class="ml5 f14 address">Chicago, IL, USA</span>
                                <h4 class="title"><a
                                        href="https://tomap.travelerwp.com/st_tour/museum-of-american-history-through-music-tour/"
                                        class="st-link c-main">Western Express Northbound</a></h4>
                                <div class="st-stars style-2">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star grey"></i></div>

                                <p class="review-text">5 reviews</p>
                                <div class="st-flex space-between">
                                    <div class="left st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" version="1.1"
                                                 id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 x="0px" y="0px" viewBox="0 0 24 24"
                                                 style="enable-background:new 0 0 24 24;"
                                                 xml:space="preserve">
                                                <title>time-clock-circle-1</title>
                                                <g fill="#5E6D77">
                                                    <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
		C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
		S17.376,2.25,12,2.25z"/>
                                                    <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
		c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
		c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
		c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"/>
                                                </g>
                                            </svg>
                                        </i> <span class="duration">4 days</span>
                                    </div>
                                    <div class="right st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="9px" width="9px"
                                                 height="16px" viewBox="0 0 11 18" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>thunder</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="Room_Only_Detail_1"
                                                       transform="translate(-135.000000, -4858.000000)"
                                                       fill="#FFAB53" fill-rule="nonzero">
                                                        <g id="nearby-hotel"
                                                           transform="translate(130.000000, 4334.000000)">
                                                            <g id="h1-g"
                                                               transform="translate(5.000000, 136.000000)">
                                                                <g id="hotel-grid">
                                                                    <g id="price"
                                                                       transform="translate(0.000000, 383.000000)">
                                                                        <g id="thunder"
                                                                           transform="translate(0.000000, 5.000000)">
                                                                            <path
                                                                                d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z"
                                                                                id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i> <span class="price">
                                            from <span class="text-lg lh1em item "> €100.00</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item has-matchHeight">
                            <div class="featured">
                                <a href="https://tomap.travelerwp.com/st_tour/10-days-of-vacation-in-florence-resorts-2/">
                                    <img
                                        src="https://tomap.travelerwp.com/wp-content/uploads/2015/01/tour_img-755014-145-1-800x600.jpg"
                                        alt="WordPress Booking Theme" class="img-responsive">
                                </a>
                                <a href="#" class="share-item like-it" data-toggle="modal"
                                   data-target="#st-login-form"
                                   data-type="st_tours" data-id="8580"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="body">
                                <i class="input-icon field-icon fa">
                                    <svg height="16px" width="16px" width="16px" height="16px"
                                         viewBox="0 0 11 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                        <title>ico_maps_add_2</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd"
                                           stroke-linecap="round" stroke-linejoin="round">
                                            <g id="Hotel_Search_Hover"
                                               transform="translate(-170.000000, -553.000000)"
                                               stroke="#A0A9B2">
                                                <g id="location-select"
                                                   transform="translate(135.000000, 359.000000)">
                                                    <g id="hover" transform="translate(0.000000, 42.000000)">
                                                        <g id="Group" transform="translate(35.000000, 149.000000)">
                                                            <g id="ico_maps_add_2"
                                                               transform="translate(0.000000, 3.000000)">
                                                                <g id="Group">
                                                                    <g id="pin-1">
                                                                        <path
                                                                            d="M10.5,5.5 C10.5,8.314 8.54466667,9.93266667 7.07933333,11.5 C6.202,12.4386667 5.5,15.5 5.5,15.5 C5.5,15.5 4.8,12.4406667 3.92466667,11.5046667 C2.458,9.938 0.5,8.31666667 0.5,5.5 C0.5,2.73857625 2.73857625,0.5 5.5,0.5 C8.26142375,0.5 10.5,2.73857625 10.5,5.5 Z"
                                                                            id="Shape"></path>
                                                                        <circle id="Oval" cx="5.5" cy="5.5"
                                                                                r="2"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </i><span class="ml5 f14 address"> New York, USA</span>
                                <h4 class="title"><a
                                        href="https://tomap.travelerwp.com/st_tour/10-days-of-vacation-in-florence-resorts-2/"
                                        class="st-link c-main">New York: Museum of Modern Art</a></h4>
                                <div class="st-stars style-2">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star grey"></i><i class="fa fa-star grey"></i></div>

                                <p class="review-text">2 reviews</p>
                                <div class="st-flex space-between">
                                    <div class="left st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" version="1.1"
                                                 id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 x="0px" y="0px" viewBox="0 0 24 24"
                                                 style="enable-background:new 0 0 24 24;"
                                                 xml:space="preserve">
                                                <title>time-clock-circle-1</title>
                                                <g fill="#5E6D77">
                                                    <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
		C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
		S17.376,2.25,12,2.25z"/>
                                                    <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
		c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
		c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
		c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"/>
                                                </g>
                                            </svg>
                                        </i> <span class="duration">Full day</span>
                                    </div>
                                    <div class="right st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="9px" width="9px"
                                                 height="16px" viewBox="0 0 11 18" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>thunder</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="Room_Only_Detail_1"
                                                       transform="translate(-135.000000, -4858.000000)"
                                                       fill="#FFAB53" fill-rule="nonzero">
                                                        <g id="nearby-hotel"
                                                           transform="translate(130.000000, 4334.000000)">
                                                            <g id="h1-g"
                                                               transform="translate(5.000000, 136.000000)">
                                                                <g id="hotel-grid">
                                                                    <g id="price"
                                                                       transform="translate(0.000000, 383.000000)">
                                                                        <g id="thunder"
                                                                           transform="translate(0.000000, 5.000000)">
                                                                            <path
                                                                                d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z"
                                                                                id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i> <span class="price">
                                            from <span class="text-lg lh1em item "> €150.00</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item has-matchHeight">
                            <div class="featured">
                                <a href="https://tomap.travelerwp.com/st_tour/10-days-of-vacation-in-florence-resorts/">
                                    <img
                                        src="https://tomap.travelerwp.com/wp-content/uploads/2015/01/Indipendant-Travel1-2000x1250-800x600.jpg"
                                        alt="WordPress Booking Theme" class="img-responsive">
                                </a>
                                <a href="#" class="share-item like-it" data-toggle="modal"
                                   data-target="#st-login-form"
                                   data-type="st_tours" data-id="1616"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="body">
                                <i class="input-icon field-icon fa">
                                    <svg height="16px" width="16px" width="16px" height="16px"
                                         viewBox="0 0 11 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                        <title>ico_maps_add_2</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd"
                                           stroke-linecap="round" stroke-linejoin="round">
                                            <g id="Hotel_Search_Hover"
                                               transform="translate(-170.000000, -553.000000)"
                                               stroke="#A0A9B2">
                                                <g id="location-select"
                                                   transform="translate(135.000000, 359.000000)">
                                                    <g id="hover" transform="translate(0.000000, 42.000000)">
                                                        <g id="Group" transform="translate(35.000000, 149.000000)">
                                                            <g id="ico_maps_add_2"
                                                               transform="translate(0.000000, 3.000000)">
                                                                <g id="Group">
                                                                    <g id="pin-1">
                                                                        <path
                                                                            d="M10.5,5.5 C10.5,8.314 8.54466667,9.93266667 7.07933333,11.5 C6.202,12.4386667 5.5,15.5 5.5,15.5 C5.5,15.5 4.8,12.4406667 3.92466667,11.5046667 C2.458,9.938 0.5,8.31666667 0.5,5.5 C0.5,2.73857625 2.73857625,0.5 5.5,0.5 C8.26142375,0.5 10.5,2.73857625 10.5,5.5 Z"
                                                                            id="Shape"></path>
                                                                        <circle id="Oval" cx="5.5" cy="5.5"
                                                                                r="2"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </i><span class="ml5 f14 address">California, USA</span>
                                <h4 class="title"><a
                                        href="https://tomap.travelerwp.com/st_tour/10-days-of-vacation-in-florence-resorts/"
                                        class="st-link c-main">Northern California Summer 2019</a></h4>
                                <div class="st-stars style-2">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star grey"></i><i class="fa fa-star grey"></i></div>

                                <p class="review-text">2 reviews</p>
                                <div class="st-flex space-between">
                                    <div class="left st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" version="1.1"
                                                 id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 x="0px" y="0px" viewBox="0 0 24 24"
                                                 style="enable-background:new 0 0 24 24;"
                                                 xml:space="preserve">
                                                <title>time-clock-circle-1</title>
                                                <g fill="#5E6D77">
                                                    <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
		C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
		S17.376,2.25,12,2.25z"/>
                                                    <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
		c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
		c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
		c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"/>
                                                </g>
                                            </svg>
                                        </i> <span class="duration">5 days</span>
                                    </div>
                                    <div class="right st-flex">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="9px" width="9px"
                                                 height="16px" viewBox="0 0 11 18" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>thunder</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="Room_Only_Detail_1"
                                                       transform="translate(-135.000000, -4858.000000)"
                                                       fill="#FFAB53" fill-rule="nonzero">
                                                        <g id="nearby-hotel"
                                                           transform="translate(130.000000, 4334.000000)">
                                                            <g id="h1-g"
                                                               transform="translate(5.000000, 136.000000)">
                                                                <g id="hotel-grid">
                                                                    <g id="price"
                                                                       transform="translate(0.000000, 383.000000)">
                                                                        <g id="thunder"
                                                                           transform="translate(0.000000, 5.000000)">
                                                                            <path
                                                                                d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z"
                                                                                id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i> <span class="price">
                                            from <span class="text-lg lh1em item "> €150.00</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(function ($) {


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
    </script>
@endsection

