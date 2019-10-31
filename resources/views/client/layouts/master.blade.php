<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1, maximum-scale=2, minimum-scale=1">
    <title>Linh Ứng Travel &#8211; Công ty du lịch và truyền thông Linh Ứng - @yield('title')</title>
    <meta name='robots' content='noindex,follow'/>


    <link rel="stylesheet" href="/client/asset/plugin/bootstrap/css/bootstrap.min.css" type='text/css'>

    <link rel="stylesheet" href="/client/asset/plugin/bootstrap/css/bootstrap-theme.min.css" type='text/css'>

    <script src="/client/asset/plugin/bootstrap/js/bootstrap.min.js" type='text/css'></script>

    <link rel='stylesheet' id='owlcarousel-css-css' href='/client/asset/css/owl.carousel.min.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='owlcarousel-css-css' href='/client/asset/css/animate.css' type='text/css'
          media='all'/>

    @section('head-content')
    @show

    <link rel='stylesheet' id='style-css-css' href='/client/asset/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='search-result-css-css' href='/client/asset/css/search_result.css' type='text/css'
          media='all'/>

    <link rel="stylesheet" href="/asset-admin/css/footer.css" type="text/css" media="all"/>
    <link rel="icon" type="image/png" href="{{$config->logo_header}}">


</head>
<body>
<header id="header" class="@yield('header')">
    <style>
        #header {
            left: 0;
            width: 100%;
            background-color: white;
            z-index: 1000;
        }

        .headerontop {
            position: fixed;

        }
    </style>
    <div class="header">
        <a href="#" class="toggle-menu">
            <i class="input-icon field-icon fa">
                <svg height="24px" width="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                >
                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                    <title>Ico_off_menu</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Ico_off_menu" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                       stroke-linecap="round" stroke-linejoin="round">
                        <g id="Group" stroke="#27b0dd" stroke-width="1.5">
                            <g id="navigation-menu-4">
                                <rect id="Rectangle-path" x="0.75" y="0.753" width="22.5" height="22.5" rx="1.5"></rect>
                                <path d="M6.75,7.503 L17.25,7.503" id="Shape"></path>
                                <path d="M6.75,12.003 L17.25,12.003" id="Shape"></path>
                                <path d="M6.75,16.503 L17.25,16.503" id="Shape"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </i> </a>
        <div class="header-left container">
            <a href="/" class="logo hidden-xs">
                <img id="web-logo" src="{{$config->logo}}"
                     alt="{{$config->title}}" style="weight:164px;height:46px;">
            </a>
            <a href="/" class="logo hidden-lg hidden-md hidden-sm">
                <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/11/tomap_logo_mobi.svg"
                     alt="WordPress Booking Theme">
            </a>
            <nav id="st-main-menu">
                <a href="" class="back-menu"><i class="fa fa-angle-left"></i></a>
                <ul id="homepage" class="menu main-menu">
                    <li id="menu-item-7722"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-7414  menu-item-7722">
                        <a
                            class="" href="/">Trang chủ</a></li>
                    <li id="tourspage"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8317 menu-item-has-children has-mega-menu">
                        <a
                            class="" href="/danh-sach-tour">Danh sách tour<i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu mega-menu mega-8327">
                            <div class="dropdown-menu-inner">
                                <div class="vc_row wpb_row st bg-holder">
                                    <div class='container '>
                                        <div class='row'>
                                            <div class="st-mega wpb_column column_container col-md-12">
                                                <div class="vc_column-inner wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner">
                                                        <?php foreach ($tour_parents as $tour_parent):?>
                                                        <div class="wpb_column column_container col-md-3">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <h5><strong>{{$tour_parent->title}}</strong>
                                                                            </h5>

                                                                        </div>
                                                                    </div>
                                                                    <div class="widget widget_nav_menu">
                                                                        <ul id="menu-mega-2" class="menu">
                                                                            <?php foreach ($tour_categories as $tour_category):?>
                                                                            <?php if ($tour_category->parent_id == $tour_parent->id and $tour_category->count > 0):?>
                                                                            <li id="menu-item-8336"
                                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8336">
                                                                                <a
                                                                                    href="/danh-sach-tour/{{$tour_category->slug}}">{{$tour_category->title}}</a>
                                                                            </li>
                                                                            <?php endif;?>
                                                                            <?php endforeach;?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_column column_container col-md-4">
                                                <div class="vc_column-inner wpb_wrapper">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>


                    <li id="servicepage"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8317">
                        <a
                            class="" href="/dich-vu">Dịch vụ</a></li>

                    </li>

                    <li id="carpage"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8326">
                        <a
                            class="" href="/thue-xe">Thuê xe</a>
                    </li>

                    <li id="contact-page"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8026 ">
                        <a
                            class="" href="/lien-he">Liên hệ</a>
                    </li>
                </ul>
                <style>
                    #menu-mega-2 li{
                        border-bottom-style: none;
                    }

                </style>
            </nav>
        </div>
    </div>
</header>


@section('main-content')
@show


<div class="clearfix stripe-end"></div>
<style>
    .stripe-end {
        border-bottom: 1px solid #EAEEF3;
    }
</style>



<footer>
    <div
        class="traveltour-footer-wrapper ">
        <div
            class="traveltour-footer-container traveltour-container clearfix">
            <div
                class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="text-15"
                     class="widget widget_text traveltour-widget">
                    <h3
                        class="traveltour-widget-title">
                                                                                                                                    <span
                                                                                                                                        class="traveltour-widget-head-text">Thông
                                                                                                                                        tin
                                                                                                                                        liên
                                                                                                                                        hệ</span>
                    </h3>
                    <span
                        class="clear"></span>
                    <div
                        class="textwidget">
                        @foreach($footer as $f)

                        <div
                            style="margin-bottom: 7px;">
                                                                                                                                        <span
                                                                                                                                            style="color: #8aa5e8;">{{$f->title}}</span><i
                                class="fa fa-phone"
                                style="font-size: 15px ;color: #ffffff ;margin-left: 20px ;margin-right: 10px ;"></i><span
                                style="color: #ffffff;">{{$f->pnumber}}</span>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div
                class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="nav_menu-4"
                     class="widget widget_nav_menu traveltour-widget">
                    <h3
                        class="traveltour-widget-title">
                                                                                                                                    <span
                                                                                                                                        class="traveltour-widget-head-text">Về
                                                                                                                                        chúng
                                                                                                                                        tôi</span>
                    </h3>
                    <span
                        class="clear"></span>
                    <div
                        class="menu-about-us-container">
                        <ul id="menu-about-us"
                            class="menu">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5282">
                                <a
                                    href="/gioi-thieu">Giới
                                    thiệu</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5285">
                                <a
                                    href="/doi-tac">Đối
                                    tác
                                    -
                                    Hợp
                                    tác</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div
                class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="nav_menu-5"
                     class="widget widget_nav_menu traveltour-widget">
                    <h3
                        class="traveltour-widget-title">
                                                                                                                                    <span
                                                                                                                                        class="traveltour-widget-head-text">Hỗ
                                                                                                                                        trợ</span>
                    </h3>
                    <span
                        class="clear"></span>
                    <div
                        class="menu-support-container">
                        <ul id="menu-support"
                            class="menu">
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5287">
                                <a
                                    href="/ho-tro">Hỗ
                                    trợ
                                    khách
                                    hàng</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5288">
                                <a
                                    href="/chinh-sach-quyen-rieng-tu">Chính
                                    sách
                                    và
                                    quyền
                                    riêng
                                    tư</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5289">
                                <a
                                    href="/lien-he">Kênh
                                    liên
                                    lạc</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div
                class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="text-16"
                     class="widget widget_text traveltour-widget">
                    <h3
                        class="traveltour-widget-title">
                                                                                                                                    <span
                                                                                                                                        class="traveltour-widget-head-text">Văn
                                                                                                                                        phòng</span>
                    </h3>
                    <span
                        class="clear"></span>

                    <div
                        style="margin-bottom: 23px;">
                        <i class="fa fa-map-marker"
                           style="font-size: 15px ;color: #ffffff ;margin-right: 10px ;"></i><span
                            style="color: #ffffff;">{{$info->address}}</span>
                    </div>
                    <div
                        style="margin-bottom: 23px;">
                        <i class="fa fa-envelope-open-o"
                           style="font-size: 15px ;color: #ffffff ;margin-right: 10px ;"></i><span
                            style="color: #ffffff;">{{$info->email}}</span>
                    </div>

{{--                    <p>© 2020--}}
{{--                        Linh--}}
{{--                        Ung--}}
{{--                        Travel<br>--}}
{{--                        All--}}
{{--                        Rights--}}
{{--                        Reserved.--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
    </div>
    <div
        class="traveltour-copyright-wrapper">
        <div
            class="traveltour-copyright-container traveltour-container">
            <div
                class="traveltour-copyright-text traveltour-item-pdlr">
                Copyright
                2020
                <a href="https://web3xu.io/"
                   target="blank">WEB3XU</a>,
                Bản quyền đã được bảo hộ
            </div>
        </div>
    </div>
</footer>

<script type='text/javascript' src='/client/asset/js/jquery.js'></script>
<script type='text/javascript' src='/client/asset/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='/client/asset/js/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='/client/asset/js/jquery.matchHeight.js'></script>

<script type='text/javascript'
        src='/client/asset/js/bootstrap.min.js'></script>

<script type='text/javascript' src='/client/asset/js/select2.full.min.js'></script>

<script type='text/javascript' src='/client/asset/js/owl.carousel.min.js'></script>



<script>
    var hasDefaultClass = 0;
    if ($('#header').hasClass('default_header')) {
        hasDefaultClass = 1;
    }
    window.onscroll = function () {
        myFunction()
    };

    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            if (hasDefaultClass === 1) header.classList.remove("default_header");
            header.classList.add("headerontop");
            $("#web-logo").attr("src", "{{$config->logo_2}}");
        } else {
            header.classList.remove("headerontop");
            if (hasDefaultClass === 1) header.classList.add("default_header");
            $("#web-logo").attr("src", "{{$config->logo}}");


        }
    }

    jQuery(function ($) {
        initHomeSlider();


        function initHomeSlider() {
            if ($('.home_slider').length) {
                var homeSlider = $('.home_slider');

                homeSlider.owlCarousel(
                    {
                        items: 1,
                        loop: true,
                        autoplay: true,
                        smartSpeed: 1200,
                        dotsContainer: 'main_slider_custom_dots'
                    });

                /* Custom nav events */
                if ($('.home_slider_prev').length) {
                    var prev = $('.home_slider_prev');

                    prev.on('click', function () {
                        homeSlider.trigger('prev.owl.carousel');
                    });
                }

                if ($('.home_slider_next').length) {
                    var next = $('.home_slider_next');

                    next.on('click', function () {
                        homeSlider.trigger('next.owl.carousel');
                    });
                }

                /* Custom dots events */
                if ($('.home_slider_custom_dot').length) {
                    $('.home_slider_custom_dot').on('click', function () {
                        $('.home_slider_custom_dot').removeClass('active');
                        $(this).addClass('active');
                        homeSlider.trigger('to.owl.carousel', [$(this).index(), 300]);
                    });
                }

                /* Change active class for dots when slide changes by nav or touch */
                homeSlider.on('changed.owl.carousel', function (event) {
                    $('.home_slider_custom_dot').removeClass('active');
                    $('.home_slider_custom_dots li').eq(event.page.index).addClass('active');
                });
                var owl = $('.st-service-slider');
                owl.owlCarousel({
                    autoplay: true,
                    smartSpeed: 100,
                    animateOut: 'fadeOut',
                    loop: true,
                    autoplayHoverPause: false,
                });

                // add animate.css class(es) to the elements to be animated
                function setAnimation(_elem, _InOut) {
                    // Store all animationend event name in a string.
                    // cf animate.css documentation
                    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                    _elem.each(function () {
                        var $elem = $(this);
                        var $animationType = 'animated ' + $elem.data('animation-' + _InOut);

                        $elem.addClass($animationType).one(animationEndEvent, function () {
                            $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                        });
                    });
                }

                // Fired before current slide change
                homeSlider.on('change.owl.carousel', function (event) {
                    var $currentItem = $('.home_slider_item', homeSlider).eq(event.item.index);
                    var $elemsToanim = $currentItem.find("[data-animation-out]");
                    setAnimation($elemsToanim, 'out');
                });

                // Fired after current slide has been changed
                homeSlider.on('changed.owl.carousel', function (event) {
                    var $currentItem = $('.home_slider_item', homeSlider).eq(event.item.index);
                    var $elemsToanim = $currentItem.find("[data-animation-in]");
                    setAnimation($elemsToanim, 'in');
                })
            }
        }


    })
</script>

@section('script-content')
@show
<script type='text/javascript'
        src='/client/asset/js/custom.js'></script>
@section('custom-style-content')
@show
</body>

</html>
