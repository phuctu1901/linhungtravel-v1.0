<!-- Stored in resources/views/child.blade.php -->
@extends('client.layouts.master')

@section('header', 'default_header')

@section('main-content')
    <div id="st-content-wrapper">
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
                    <li><a href="/bai-viet">Bài viết</a></li>
                    <li class="active">{{$post->title}}</li>
                </ul>
            </div>
        </div>
        <div class=" st-blog ">
            <div class="container">
                <div class="blog-content content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <div class="article">
                                <div class="header">
                                    <header class="post-header">
                                                <span class="hover-img"
                                                      href="https://tomap.travelerwp.com/a-seaside-reset-in-laguna-beach/">
        <img src="{{$post->thumb}}"
             class="attachment-full size-full wp-post-image" alt="WordPress Booking Theme"
             sizes="(max-width: 743px) 100vw, 743px" width="743" height="496">    </span>

                                    </header>
                                    <div class="cate">
                                        <ul>
                                            <li style="background: #30336b"><a
                                                    href="/bai-viet/{{$category->slug}}">{{$category->title}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 class="title"> {{$post->title}}</h2>
                                <div class="post-info">
                                <span class="date"><?php
                                    echo date_format($post->created_at, "d/m/y H:i")?>   </span>
                                </div>
                                <div class="post-content">
                                    <?php echo htmlspecialchars_decode(json_decode($post->content))?>
                                </div>
                                <div class="st-flex space-between">
                                    <div class="tags">
                                        <a href="" class="tag-item">Tiptoe</a>
                                        <a href="" class="tag-item">Tulips</a>
                                        <a href="" class="tag-item">Washington</a>
                                    </div>
                                    <div class="share">
                                        Share <a class="facebook share-item"
                                                 href="https://www.facebook.com/sharer/sharer.php?u=https://tomap.travelerwp.com/a-seaside-reset-in-laguna-beach/&amp;title=A Seaside Reset in Laguna Beach"
                                                 target="_blank" rel="noopener" original-title="Facebook"><i
                                                class="fa fa-facebook fa-lg"></i></a>
                                        <a class="twitter share-item"
                                           href="https://twitter.com/share?url=https://tomap.travelerwp.com/a-seaside-reset-in-laguna-beach/&amp;title=A Seaside Reset in Laguna Beach"
                                           target="_blank" rel="noopener" original-title="Twitter"><i
                                                class="fa fa-twitter fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
{{--                        <div class="col-sm-3 col-xs-12">--}}
                            <aside class="sidebar-right">
                                <div id="search-4" class="sidebar-widget widget_search">
                                    <form role="search" method="get" class="search" action="https://tomap.travelerwp.com/">
                                        <input type="text" class="form-control" value="" name="s" placeholder="Search ...">
                                        <input type="hidden" name="post_type" value="post">
                                        <button type="submit"><i class="input-icon field-icon fa">
                                                <svg height="15px" width="15px" version="1.1" id="Layer_1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                                                     xml:space="preserve">
<title>search</title>
                                                    <g fill="#ffffff">
                                                        <path d="M23.245,23.996c-0.2,0-0.389-0.078-0.53-0.22L16.2,17.26c-0.761,0.651-1.618,1.182-2.553,1.579
		c-1.229,0.522-2.52,0.787-3.837,0.787c-1.257,0-2.492-0.241-3.673-0.718c-2.431-0.981-4.334-2.849-5.359-5.262
		c-1.025-2.412-1.05-5.08-0.069-7.51S3.558,1.802,5.97,0.777C7.199,0.254,8.489-0.01,9.807-0.01c1.257,0,2.492,0.242,3.673,0.718
		c2.431,0.981,4.334,2.849,5.359,5.262c1.025,2.413,1.05,5.08,0.069,7.51c-0.402,0.996-0.956,1.909-1.649,2.718l6.517,6.518
		c0.292,0.292,0.292,0.768,0,1.061C23.634,23.918,23.445,23.996,23.245,23.996z M9.807,1.49c-1.115,0-2.209,0.224-3.25,0.667
		C4.513,3.026,2.93,4.638,2.099,6.697c-0.831,2.059-0.81,4.318,0.058,6.362c0.869,2.044,2.481,3.627,4.54,4.458
		c1.001,0.404,2.048,0.608,3.112,0.608c1.115,0,2.209-0.224,3.25-0.667c0.974-0.414,1.847-0.998,2.594-1.736
		c0.01-0.014,0.021-0.026,0.032-0.037c0.016-0.016,0.031-0.029,0.045-0.039c0.763-0.771,1.369-1.693,1.786-2.728
		c0.831-2.059,0.81-4.318-0.059-6.362c-0.868-2.044-2.481-3.627-4.54-4.458C11.918,1.695,10.871,1.49,9.807,1.49z"></path>
                                                    </g>
</svg>
                                            </i></button>
                                        <input type="hidden" name="lang" value="en"></form>
                                </div>

                                <div id="st_categories_new-4" class="sidebar-widget st_categories_new">
                                    <div class="sidebar-title"><h4>CHUYÊN MỤC</h4></div>
                                    <ul>
                                        <?php foreach ($post_categories as $post_category):?>

                                        <li><span style="background: #eb4d4b"></span><a
                                                href="/bai-viet/{{$post_category->slug}}">{{$post_category->title}}</a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <div id="st_widget_list_post-4" class="sidebar-widget widget_st_list_entries">
                                    <div class="sidebar-title"><h4>BÀI VIẾT GẦN ĐÂY</h4></div>
                                    <ul class="thumb-list">
                                        <li>
                                            <div class="thumb">
                                                <a href="https://tomap.travelerwp.com/all-aboard-the-rocky-mountaineer/">
                                                    <img
                                                        src="https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-100x100.jpg"
                                                        class="attachment-100x100x1 size-100x100x1 wp-post-image"
                                                        alt="WordPress Booking Theme"
                                                        srcset="https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-100x100.jpg 100w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-150x150.jpg 150w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-300x300.jpg 300w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-1024x1024.jpg 1024w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-266x266.jpg 266w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-60x60.jpg 60w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/14-travel-instagram.w710.h473.2x-70x70.jpg 70w"
                                                        sizes="(max-width: 100px) 100vw, 100px" width="100" height="100">
                                                </a>
                                            </div>

                                            <div class="content">
                                                <div class="cate">
                                                    <a style="color: #eb4d4b !important"
                                                       href="https://tomap.travelerwp.com/category/beauty-beaches/">Beauty
                                                        beaches</a></div>
                                                <h5 class="thumb-list-item-title"><a
                                                        href="https://tomap.travelerwp.com/all-aboard-the-rocky-mountaineer/">All
                                                        Aboard the Rocky Mountaineer</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="https://tomap.travelerwp.com/city-spotlight-philadelphia/">
                                                    <img
                                                        src="https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-100x100.jpg"
                                                        class="attachment-100x100x1 size-100x100x1 wp-post-image"
                                                        alt="WordPress Booking Theme"
                                                        srcset="https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-100x100.jpg 100w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-150x150.jpg 150w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-300x300.jpg 300w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-1024x1024.jpg 1024w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-266x266.jpg 266w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-70x70.jpg 70w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/cali_5-60x60.jpg 60w"
                                                        sizes="(max-width: 100px) 100vw, 100px" width="100" height="100">
                                                </a>
                                            </div>

                                            <div class="content">
                                                <div class="cate">
                                                    <a style="color: #22a6b3 !important"
                                                       href="https://tomap.travelerwp.com/category/museums/">Museums</a>
                                                </div>
                                                <h5 class="thumb-list-item-title"><a
                                                        href="https://tomap.travelerwp.com/city-spotlight-philadelphia/">City
                                                        Spotlight: Philadelphia</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="https://tomap.travelerwp.com/tiptoe-through-the-tulips-of-washington/">
                                                    <img
                                                        src="https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-100x100.jpg"
                                                        class="attachment-100x100x1 size-100x100x1 wp-post-image"
                                                        alt="WordPress Booking Theme"
                                                        srcset="https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-100x100.jpg 100w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-150x150.jpg 150w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-300x300.jpg 300w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-1024x1024.jpg 1024w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-266x266.jpg 266w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-70x70.jpg 70w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-60x60.jpg 60w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1-110x110.jpg 110w"
                                                        sizes="(max-width: 100px) 100vw, 100px" width="100" height="100">
                                                </a>
                                            </div>

                                            <div class="content">
                                                <div class="cate">
                                                    <a style="color: #ff7979 !important"
                                                       href="https://tomap.travelerwp.com/category/mountains/">Mountains</a>
                                                </div>
                                                <h5 class="thumb-list-item-title"><a
                                                        href="https://tomap.travelerwp.com/tiptoe-through-the-tulips-of-washington/">Tiptoe
                                                        through the Tulips of Washington</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="https://tomap.travelerwp.com/a-seaside-reset-in-laguna-beach/">
                                                    <img
                                                        src="https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-100x100.jpg"
                                                        class="attachment-100x100x1 size-100x100x1 wp-post-image"
                                                        alt="WordPress Booking Theme"
                                                        srcset="https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-100x100.jpg 100w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-150x150.jpg 150w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-300x300.jpg 300w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-1024x1024.jpg 1024w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-266x266.jpg 266w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-70x70.jpg 70w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/Rooftop-View-1-60x60.jpg 60w"
                                                        sizes="(max-width: 100px) 100vw, 100px" width="100" height="100">
                                                </a>
                                            </div>

                                            <div class="content">
                                                <div class="cate">
                                                    <a style="color: #30336b !important"
                                                       href="https://tomap.travelerwp.com/category/cultural-events/">Cultural
                                                        events</a></div>
                                                <h5 class="thumb-list-item-title"><a
                                                        href="https://tomap.travelerwp.com/a-seaside-reset-in-laguna-beach/">A
                                                        Seaside Reset in Laguna Beach</a></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tag_cloud-2" class="sidebar-widget widget_tag_cloud">
                                    <div class="sidebar-title"><h4>TAGS</h4></div>
                                    <div class="tagcloud"><a href="https://tomap.travelerwp.com/tag/beaches/"
                                                             class="tag-cloud-link tag-link-103 tag-link-position-1"
                                                             style="font-size: 22pt;"
                                                             aria-label="beaches (2 items)">beaches</a>
                                        <a href="https://tomap.travelerwp.com/tag/beauty/"
                                           class="tag-cloud-link tag-link-104 tag-link-position-2" style="font-size: 22pt;"
                                           aria-label="Beauty (2 items)">Beauty</a>
                                        <a href="https://tomap.travelerwp.com/tag/carnivals/"
                                           class="tag-cloud-link tag-link-100 tag-link-position-3" style="font-size: 22pt;"
                                           aria-label="Carnivals (2 items)">Carnivals</a>
                                        <a href="https://tomap.travelerwp.com/tag/cultural/"
                                           class="tag-cloud-link tag-link-105 tag-link-position-4" style="font-size: 22pt;"
                                           aria-label="Cultural (2 items)">Cultural</a>
                                        <a href="https://tomap.travelerwp.com/tag/mountains/"
                                           class="tag-cloud-link tag-link-36 tag-link-position-5" style="font-size: 8pt;"
                                           aria-label="Mountains (1 item)">Mountains</a>
                                        <a href="https://tomap.travelerwp.com/tag/museums/"
                                           class="tag-cloud-link tag-link-106 tag-link-position-6" style="font-size: 8pt;"
                                           aria-label="Museums (1 item)">Museums</a>
                                        <a href="https://tomap.travelerwp.com/tag/national/"
                                           class="tag-cloud-link tag-link-101 tag-link-position-7" style="font-size: 22pt;"
                                           aria-label="National (2 items)">National</a>
                                        <a href="https://tomap.travelerwp.com/tag/parks/"
                                           class="tag-cloud-link tag-link-102 tag-link-position-8" style="font-size: 22pt;"
                                           aria-label="Parks (2 items)">Parks</a>
                                        <a href="https://tomap.travelerwp.com/tag/tiptoe/"
                                           class="tag-cloud-link tag-link-97 tag-link-position-9" style="font-size: 8pt;"
                                           aria-label="Tiptoe (1 item)">Tiptoe</a>
                                        <a href="https://tomap.travelerwp.com/tag/tulips/"
                                           class="tag-cloud-link tag-link-98 tag-link-position-10" style="font-size: 8pt;"
                                           aria-label="Tulips (1 item)">Tulips</a>
                                        <a href="https://tomap.travelerwp.com/tag/washington/"
                                           class="tag-cloud-link tag-link-99 tag-link-position-11" style="font-size: 8pt;"
                                           aria-label="Washington (1 item)">Washington</a></div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
