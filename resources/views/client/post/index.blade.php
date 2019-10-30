

<!-- Stored in resources/views/child.blade.php -->
@extends('client.layouts.master')
@section('header', 'default_header')
@section('head-content')
    <link href='/client/new-level/css/fonts.css' rel='stylesheet'>
    <link href="/client/new-level/css/style2.css" rel="stylesheet">
    <link href="/client/new-level/css/style3.css" rel="stylesheet">
    <link href="/client/new-level/css/style.css" rel="stylesheet" type="text/css">
    <link href="/client/new-level/css/posts/css/main.css" rel="stylesheet" type="text/css">
    <link href="/client/new-level/css/posts/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">

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
        <!-- Start main body Area -->
        <div class="main-body section-gap">
            <div class="container box_1170">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start Post Area -->
                        <section class="post-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-post-item">
                                        <div class="post-thumb">
                                            <img class="img-fluid" src="/client/new-level/images/posts/archive/c1.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <h4><a href="#">An Stormy Evening</a></h4>
                                            <p>There is a moment in the life of any aspiring astronomer that it is time to
                                                buy that first telescope. It’s
                                                exciting to think about setting up your own viewing station.</p>
                                            <div class="blog-meta">
                                                <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March
                                                    14, 2018</a>
                                                <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-post-item">
                                        <div class="post-thumb">
                                            <img class="img-fluid" src="/client/new-level/images/posts/archive/c2.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <h4><a href="#">An Stormy Evening</a></h4>
                                            <p>There is a moment in the life of any aspiring astronomer that it is time to
                                                buy that first telescope. It’s
                                                exciting to think about setting up your own viewing station.</p>
                                            <div class="blog-meta">
                                                <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March
                                                    14, 2018</a>
                                                <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-post-item">
                                        <div class="post-thumb">
                                            <img class="img-fluid" src="/client/new-level/images/posts/archive/c3.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <h4><a href="#">An Stormy Evening</a></h4>
                                            <p>There is a moment in the life of any aspiring astronomer that it is time to
                                                buy that first telescope. It’s
                                                exciting to think about setting up your own viewing station.</p>
                                            <div class="blog-meta">
                                                <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March
                                                    14, 2018</a>
                                                <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-post-item">
                                        <div class="post-thumb">
                                            <img class="img-fluid" src="/client/new-level/images/posts/archive/c4.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <h4><a href="#">An Stormy Evening</a></h4>
                                            <p>There is a moment in the life of any aspiring astronomer that it is time to
                                                buy that first telescope. It’s
                                                exciting to think about setting up your own viewing station.</p>
                                            <div class="blog-meta">
                                                <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March
                                                    14, 2018</a>
                                                <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-post-item">
                                        <div class="post-thumb">
                                            <img class="img-fluid" src="/client/new-level/images/posts/archive/c1.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <h4><a href="#">An Stormy Evening</a></h4>
                                            <p>There is a moment in the life of any aspiring astronomer that it is time to
                                                buy that first telescope. It’s
                                                exciting to think about setting up your own viewing station.</p>
                                            <div class="blog-meta">
                                                <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March
                                                    14, 2018</a>
                                                <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-post-item">
                                        <div class="post-thumb">
                                            <img class="img-fluid" src="/client/new-level/images/posts/archive/c2.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <h4><a href="#">An Stormy Evening</a></h4>
                                            <p>There is a moment in the life of any aspiring astronomer that it is time to
                                                buy that first telescope. It’s
                                                exciting to think about setting up your own viewing station.</p>
                                            <div class="blog-meta">
                                                <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March
                                                    14, 2018</a>
                                                <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <nav class="blog-pagination justify-content-center d-flex">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
												<span aria-hidden="true">
													<span class="lnr lnr-arrow-left"></span>
												</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a href="#" class="page-link">01</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                                            <li class="page-item"><a href="#" class="page-link">04</a></li>
                                            <li class="page-item"><a href="#" class="page-link">09</a></li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
												<span aria-hidden="true">
													<span class="lnr lnr-arrow-right"></span>
												</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </section>
                        <!-- Start Post Area -->
                    </div>


                    <div class="col-lg-4 sidebar">

                        <div class="single-widget popular-posts-widget">
                            <div class="jq-tab-wrapper" id="horizontalTab">
                                <div class="jq-tab-menu">
                                    <div class="jq-tab-title active" data-tab="1">Popular</div>
                                    <div class="jq-tab-title" data-tab="2">Latest</div>
                                </div>
                                <div class="jq-tab-content-wrapper">
                                    <div class="jq-tab-content active" data-tab="1">
                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories1.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories2.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories3.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories4.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="jq-tab-content active" data-tab="2">

                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories2.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories3.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories1.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                        <div class="single-popular-post d-flex flex-row">
                                            <div class="popular-thumb">
                                                <img class="img-fluid" src="/client/new-level/images/posts/posts/carousel/stories4.jpg" alt="">
                                            </div>
                                            <div class="popular-details">
                                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                                        get up from sleep</a></h6>
                                                <p>September 14, 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-widget category-widget">
                            <h4 class="title">Post Categories</h4>
                            <ul>
                                <li>
                                    <a href="#" class="justify-content-between align-items-center d-flex">
                                        <p><img src="/client/new-level/images/posts/bullet.png" alt="">International (56)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between align-items-center d-flex">
                                        <p><img src="/client/new-level/images/posts/bullet.png" alt="">Tours and Travels (45)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between align-items-center d-flex">
                                        <p><img src="/client/new-level/images/posts/bullet.png" alt="">Cooking Tips (23)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between align-items-center d-flex">
                                        <p><img src="/client/new-level/images/posts/bullet.png" alt="">Life Style and Fashion (72)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between align-items-center d-flex">
                                        <p><img src="/client/new-level/images/posts/bullet.png" alt="">Organic News (37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between align-items-center d-flex">
                                        <p><img src="/client/new-level/images/posts/bullet.png" alt="">Games and Sports (19)</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-widget tags-widget">
                            <h4 class="title">Post Tags</h4>
                            <ul>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Techlology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Start main body Area -->


    </div>
@endsection
@section('script-content')
    <script src="/client/new-level/js/posts/jquery.tabs.min.js" type="text/javascript"></script>
    <script>
        $('#horizontalTab').jqTabs({
            direction: 'horizontal',
            duration: 200
        });
    </script>
@endsection
@section('custom-style-content')

@endsection

