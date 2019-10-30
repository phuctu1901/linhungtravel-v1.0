

<!-- Stored in resources/views/child.blade.php -->
@extends('client.layouts.master')
@section('header', 'default_header')
@section('head-content')
    <link href='/client/new-level/css/fonts.css' rel='stylesheet'>
    <link href="/client/new-level/css/style2.css" rel="stylesheet">
    <link href="/client/new-level/css/style3.css" rel="stylesheet">
    <link href="/client/new-level/css/style.css" rel="stylesheet" type="text/css">
    <link href="/client/new-level/css/posts/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">

    <link href="/client/new-level/css/posts/css/main.css" rel="stylesheet" type="text/css">

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
        <section class="blog_area section-gap single-post-area">
            <div class="container box_1170">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <img class="img-fluid" src="{{$post->thumb}}" alt="">
                            <h4>{{$post->title}}</h4>
                            <div class="user_details">
                                <div class="float-left">
                                    <a href="#">Lifestyle</a>
                                    <a href="#">Gadget</a>
                                </div>
                            </div>
                            <div style="overflow: hidden;">
                                <?php echo htmlspecialchars_decode(json_decode($post->content))?>
                            </div>
{{--                            <div class="news_d_footer">--}}
{{--                                <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a>--}}
{{--                                <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i>06--}}
{{--                                    Comments</a>--}}
{{--                                <div class="news_socail ml-auto">--}}
{{--                                    <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-pinterest"></i></a>--}}
{{--                                    <a href="#"><i class="fa fa-rss"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="/client/new-level/images/posts//blog/prev.jpg" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="#">
                                            <h4>A Discount Toner</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next Post</p>
                                        <a href="#">
                                            <h4>Cartridge Is Better</h4>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="/client/new-level/images/posts//blog/next.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="comments-area">--}}
{{--                            <h4>05 Comments</h4>--}}
{{--                            <div class="comment-list">--}}
{{--                                <div class="single-comment justify-content-between d-flex">--}}
{{--                                    <div class="user justify-content-between d-flex">--}}
{{--                                        <div class="thumb">--}}
{{--                                            <img src="/client/new-level/images/posts//blog/c1.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="desc">--}}
{{--                                            <h5><a href="#">Emilly Blunt</a></h5>--}}
{{--                                            <p class="date">December 4, 2017 at 3:12 pm </p>--}}
{{--                                            <p class="comment">--}}
{{--                                                Never say goodbye till the end comes!--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="reply-btn">--}}
{{--                                        <a href="" class="btn-reply text-uppercase">reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="comment-list left-padding">--}}
{{--                                <div class="single-comment justify-content-between d-flex">--}}
{{--                                    <div class="user justify-content-between d-flex">--}}
{{--                                        <div class="thumb">--}}
{{--                                            <img src="/client/new-level/images/posts//blog/c2.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="desc">--}}
{{--                                            <h5><a href="#">Elsie Cunningham</a></h5>--}}
{{--                                            <p class="date">December 4, 2017 at 3:12 pm </p>--}}
{{--                                            <p class="comment">--}}
{{--                                                Never say goodbye till the end comes!--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="reply-btn">--}}
{{--                                        <a href="" class="btn-reply text-uppercase">reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="comment-list left-padding">--}}
{{--                                <div class="single-comment justify-content-between d-flex">--}}
{{--                                    <div class="user justify-content-between d-flex">--}}
{{--                                        <div class="thumb">--}}
{{--                                            <img src="/client/new-level/images/posts//blog/c3.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="desc">--}}
{{--                                            <h5><a href="#">Annie Stephens</a></h5>--}}
{{--                                            <p class="date">December 4, 2017 at 3:12 pm </p>--}}
{{--                                            <p class="comment">--}}
{{--                                                Never say goodbye till the end comes!--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="reply-btn">--}}
{{--                                        <a href="" class="btn-reply text-uppercase">reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="comment-list">--}}
{{--                                <div class="single-comment justify-content-between d-flex">--}}
{{--                                    <div class="user justify-content-between d-flex">--}}
{{--                                        <div class="thumb">--}}
{{--                                            <img src="/client/new-level/images/posts//blog/c4.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="desc">--}}
{{--                                            <h5><a href="#">Maria Luna</a></h5>--}}
{{--                                            <p class="date">December 4, 2017 at 3:12 pm </p>--}}
{{--                                            <p class="comment">--}}
{{--                                                Never say goodbye till the end comes!--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="reply-btn">--}}
{{--                                        <a href="" class="btn-reply text-uppercase">reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="comment-list">--}}
{{--                                <div class="single-comment justify-content-between d-flex">--}}
{{--                                    <div class="user justify-content-between d-flex">--}}
{{--                                        <div class="thumb">--}}
{{--                                            <img src="/client/new-level/images/posts//blog/c5.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="desc">--}}
{{--                                            <h5><a href="#">Ina Hayes</a></h5>--}}
{{--                                            <p class="date">December 4, 2017 at 3:12 pm </p>--}}
{{--                                            <p class="comment">--}}
{{--                                                Never say goodbye till the end comes!--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="reply-btn">--}}
{{--                                        <a href="" class="btn-reply text-uppercase">reply</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="comment-form">--}}
{{--                            <h4>Leave a Reply</h4>--}}
{{--                            <form>--}}
{{--                                <div class="form-group form-inline">--}}
{{--                                    <div class="form-group col-lg-6 col-md-6 name">--}}
{{--                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"--}}
{{--                                               onblur="this.placeholder = 'Enter Name'">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-lg-6 col-md-6 email">--}}
{{--                                        <input type="email" class="form-control" id="email" placeholder="Enter email address"--}}
{{--                                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''"--}}
{{--                                           onblur="this.placeholder = 'Subject'">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"--}}
{{--                                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="primary-btn submit_btn text-uppercase">Send Message</a>--}}
{{--                            </form>--}}
{{--                        </div>--}}
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
                            <h4 class="title">Danh mục</h4>
                            <ul>
                                <?php foreach ($post_categories as $post_category):?>
                                    <li>
                                        <a href="/bai-viet/{{$post_category->slug}}" class="justify-content-between align-items-center d-flex">
                                            <p><img src="/client/new-level/images/posts/bullet.png" alt="">{{$post_category->title}}</p>
                                        </a>
                                    </li>

                                <?php endforeach;?>
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
        </section>
        <!-- Start main body Area -->

        <!-- promotion -->
        <div class="gdlr-core-pbf-wrapper "
             style="padding: 120px 0px 70px 0px;">
            <div
                class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                     style="background-image: url(&quot;//cdn.goodlayers.com/traveltour/wp-content/uploads/2016/06/stunning-bg.jpg&quot;); background-size: cover; background-position: center center; height: 440.4px; transform: translate(0px, -62.5433px);"
                     data-parallax-speed="0.2">
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
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30"
                         data-skin="White Text">
                        <div
                            class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div
                                class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                        style="padding-bottom: 15px ;">
                                        <div
                                            class="gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                style="font-size: 48px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">
                                                Discount
                                                <span
                                                    style="color: #ffb43e;">10-30%
                                                                                                                                                            Off</span><span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                        style="padding-bottom: 15px ;">
                                        <div class="gdlr-core-text-box-item-content"
                                             style="font-size: 15px ;">
                                            <p>Curabitur
                                                blandit
                                                tempus
                                                porttitor.
                                                Curabitur
                                                blandit
                                                tempus
                                                porttitor.
                                                Maecenas
                                                faucibus
                                                mollis
                                                interdum.
                                                Duis
                                                mollis,
                                                est
                                                non
                                                commodo
                                                luctus,
                                                nisi
                                                erat
                                                porttitor
                                                ligula,
                                                eget
                                                lacinia
                                                odio
                                                sem
                                                nec
                                                elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border"
                                           href="http://demo.goodlayers.com/traveltour/popular-deals/"
                                           id="gdlr-core-button-id-40833"><span
                                                class="gdlr-core-content">See
                                                                                                                                                        Promotion
                                                                                                                                                        Tours</span></a>
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

