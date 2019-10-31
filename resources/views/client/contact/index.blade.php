<!-- Stored in resources/views/child.blade.php -->
@extends('client.layouts.master')
@section('header', 'default_header')
@section('head-content')
    <script src="/client/new-level/plugins/sweetalert2.min.js" async defer></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <<link rel="stylesheet" type="text/css" href="/client/new-level/plugins/sweetalert2.min.css">
@endsection

@section('main-content')
        <?php //Hiển thị thông báo thành công?>
        @if ( Session::has('success') )
            <script>
                swal("Thành công!", "Yêu cầu của bạn đã gởi tới hệ thống", "success");
            </script>
        @endif
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
        <div class="st-breadcrumb hidden-xs">
            <div class="container">
                <ul>
                    <li><a href="/">Trang chủ</a></li>
                    <li class="active">Liên hệ</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="vc_row wpb_row st bg-holder">
                <div class="container ">
                    <div class="row">
                        <div class="wpb_column column_container col-md-12">
                            <div class="vc_column-inner wpb_wrapper">
                                <div class="vc_empty_space" style="height: 75px"><span
                                        class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div><!--End .row--></div><!--End .container--></div>
            <div class="vc_row wpb_row st bg-holder">
                <div class="container ">
                    <div class="row">
                        <div class="wpb_column column_container col-md-5">
                            <div class="vc_column-inner wpb_wrapper">
                                <div role="form" class="wpcf7" id="wpcf7-f7467-p8088-o1" dir="ltr" lang="en-US">
                                    <div class="screen-reader-response"></div>
                                        <div class="st-contact-form">
                                            <div class="contact-header">
                                                <h3>Liên hệ nhanh</h3>
                                                <p>Gởi chúng tôi tin nhắn và chúng tôi sẽ phản hồi yêu cầu của bạn nhanh nhất có thể </p>
                                                <p></p></div>
                                            <div class="contact-form">
                                                <form class="form form-horizontal"
                                                      action="{{url('/lien-he/goi-yeu-cau')}} "
                                                      id="contact-form"
                                                      method="POST" role="form" enctype="multipart/form-data">
                                                    {{ csrf_field()}}
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                        <input type="text"
                                                               name="name"
                                                               value=""
                                                               size="40"
                                                               class="form-control"
                                                               aria-required="true"
                                                               aria-invalid="false"
                                                               placeholder="Tên khách hàng">
                                                        </div>
                                                        <div class="form-group">
                                                        <input type="text"
                                                               name="title"
                                                               value=""
                                                               size="40"
                                                               class="form-control"
                                                               aria-required="true"
                                                               aria-invalid="false"
                                                               placeholder="Tiêu đề">
                                                        </div>
                                                        <div class="form-group">
                                                        <input type="tel"
                                                               name="phone"
                                                               value=""
                                                               size="40"
                                                               class="form-control"
                                                               aria-required="true"
                                                               aria-invalid="false"
                                                               placeholder="Số điện thoại">
                                                        </div>
                                                        <div class="form-group">
                                                        <input type="email"
                                                               name="email"
                                                               value=""
                                                               size="40"
                                                               class="form-control"
                                                               aria-required="true"
                                                               aria-invalid="false"
                                                               placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                        <textarea
                                                            name="message" cols="40" rows="10"
                                                            class="form-control"
                                                            aria-invalid="false"
                                                            placeholder="Tin nhắn"></textarea>
                                                        </div>
                                                        <!-- Google reCaptcha -->
                                                        <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY')  }}"></div>
                                                        <!-- End Google reCaptcha -->
                                                    </div>


                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-raised btn-primary">
                                                            <i class="fa fa-check-square-o"></i>Gửi yêu cầu
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                                <div class="vc_empty_space" style="height: 25px"><span
                                        class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>

                        <div class="wpb_column column_container col-md-2">
                            <div class="vc_column-inner wpb_wrapper">
                            </div>
                        </div>

                        <div class="wpb_column column_container col-md-5">
                            <div class="vc_column-inner wpb_wrapper">
                                <div class="st-contact-info">
                                    <div class="info-bg">
                                        <img
                                            src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/bg-contact-1.jpg"
                                            class="img-responsive" alt="Background Contact Info"></div>
                                    <div class="info-content">
                                        <h4>{{$info->title}}</h4>
                                        <div class="sub">
                                            <p></p>
                                            <p>Số điện thoại: {{$info->tel}}</p>
                                            <p>Email: {{$info->email}}</p>
                                            <p class="address">{{$info->address}}</p>
                                           </div>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 75px"><span
                                        class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div><!--End .row--></div><!--End .container--></div>
            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"
                 class="vc_row wpb_row st bg-holder vc_custom_1543398264656 vc_row-no-padding"
                 style="position: relative; left: -159.6px; box-sizing: border-box; width: 1519px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="wpb_column column_container col-md-12 vc_custom_1543213048580">
                            <div class="vc_column-inner wpb_wrapper">
                                <div class="d-flex justify-content-center">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.27116779509!2d106.71302671492982!3d20.8611176860894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7acee7afdbb3%3A0x57e98aef90e51b84!2zQ8O0bmcgdHkgZHUgbOG7i2NoIHbDoCB0cnV54buBbiB0aMO0bmcgTGluaCDhu6huZw!5e0!3m2!1svi!2s!4v1557131676641!5m2!1svi!2s" width="1920" height="600" frameborder="0" style="border:3px" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div><!--End .row--></div><!--End .container--></div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
    </div>
@endsection
@section('script-content')

    <script>
        window.onload = function() {
            var $recaptcha = document.querySelector('#g-recaptcha-response');

            if($recaptcha) {
                $recaptcha.setAttribute("required", "required");
            }
        };

    </script>



@endsection

