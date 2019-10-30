@extends('client.layouts.master')
@section('header','default_header')
@section('head-content')
    <link href='/client/new-level/css/fonts.css' rel='stylesheet'>
    <link href="/client/new-level/css/style2.css" rel="stylesheet">
    <link href="/client/new-level/css/style3.css" rel="stylesheet">
    <link href="/client/new-level/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
@endsection
@section('main-content')
    <div id="st-content-wrapper" class="search-result-page st-tours">
        <div class="st_background" style="padding: 200px 0; position: relative;">
            <div class="container">
                {{--                <h1 style=" text-transform: uppercase; ">--}}
                {{--                    tour @if (isset($category)) {{$category->title}} @endif </h1>--}}
                {{--                <h3>@if (isset($category)) {{$category->desc}} @endif</h3>--}}
                <div class="background-description">
                    <h1 class="tour-banner-title centered">@if (isset($category)) {{$category->title}} @else Tất cả các
                        tour @endif</h1>
                    <div class="sticker">
                        <p>@if (isset($category)) {{$category->desc}} @endif</p>
                    </div>
                </div>
                <style>
                    .background-description {
                        /*position: absolute;*/
                        /*left: 19.1px;*/
                        /*right: 19.1px;*/
                        width: 100%;
                        bottom: 0;
                        background-color: rgba(0, 0, 0, 0.5);
                        -webkit-border-radius: 4px;
                        /*! -moz-border-radius: 4px; */
                        border-radius: 4px;
                        color: #ffffff;
                        font-size: 15px;
                        font-weight: 700;
                        padding: 15px 25px;
                        max-height: 160px;
                        z-index: 100;
                    }

                    .background-description .tour-banner-title {
                        text-align: center;
                        color: #ffffff;
                        font-size: 48px;
                        width: 100%;
                        margin: 15px 0px;
                    }

                    .background-description .sticker {
                        font-weight: 300;
                        color: white;
                        text-decoration: none;
                        width: 100%;
                        font-size: 14px;
                        text-align: left;
                        line-height: 21px;
                        position: relative;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        max-height: 42px;
                        display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        display: -moz-box;
                        -moz-line-clamp: 2;
                        -moz-box-orient: vertical;
                    }

                    .background-description p {
                        color: white;
                    }
                </style>
                <form action="https://tomap.travelerwp.com/search-hotel-half-map/" name="get"
                      class="hidden-lg hidden-md">
                    <div class="search-form-mobile">
                        <div class="form-group">
                            <div class="dropdown">
                                <div class="icon-field">
                                    <i class="input-icon field-icon fa">
                                        <svg height="20px" width="20px" width="20px"
                                             height="20px" viewBox="0 0 17 24" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                            <title>ico_maps_search_box</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd"
                                               stroke-linecap="round" stroke-linejoin="round">
                                                <g id="Search_Result_1_Grid"
                                                   transform="translate(-165.000000, -328.000000)"
                                                   stroke="gray">
                                                    <g id="form_search_hotel_row"
                                                       transform="translate(135.000000, 290.000000)">
                                                        <g id="input" transform="translate(30.000000, 0.000000)">
                                                            <g id="where" transform="translate(0.000000, 26.000000)">
                                                                <g id="Group"
                                                                   transform="translate(0.000000, 12.000000)">
                                                                    <g id="ico_maps_search_box">
                                                                        <path
                                                                            d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z"
                                                                            id="Shape"></path>
                                                                        <circle id="Oval" cx="8.25" cy="8.25"
                                                                                r="3"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i></div>
                                <input type="hidden" name="location_id" class="form-control" value=""/>
                                <input type="text" name="location_name" class="form-control" readonly
                                       placeholder="Where are you going?"
                                       id="dropdown-mobile-destination" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false" value=""/>
                                <ul class="dropdown-menu" aria-labelledby="dropdown-mobile-destination">
                                    <li style="padding-left: 20px;" data-country="US" data-value="1957"
                                        class="item parent_li">
                                        <span class="parent">United States</span></li>
                                    <li class="item " data-country="US" data-value="7965" style="padding-left: 20px;">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" width="16px"
                                                 height="16px" viewBox="0 0 17 24" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>ico_maps_search_box</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Search_Result_1_Grid"
                                                       transform="translate(-165.000000, -328.000000)"
                                                       stroke="gray">
                                                        <g id="form_search_hotel_row"
                                                           transform="translate(135.000000, 290.000000)">
                                                            <g id="input" transform="translate(30.000000, 0.000000)">
                                                                <g id="where"
                                                                   transform="translate(0.000000, 26.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(0.000000, 12.000000)">
                                                                        <g id="ico_maps_search_box">
                                                                            <path
                                                                                d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z"
                                                                                id="Shape"></path>
                                                                            <circle id="Oval" cx="8.25" cy="8.25"
                                                                                    r="3"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i><span class="lv2">California</span></li>
                                    <li style="padding-left: 20px;" data-country="US" data-value="7967" class="item ">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" width="16px"
                                                 height="16px" viewBox="0 0 17 24" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>ico_maps_search_box</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Search_Result_1_Grid"
                                                       transform="translate(-165.000000, -328.000000)"
                                                       stroke="gray">
                                                        <g id="form_search_hotel_row"
                                                           transform="translate(135.000000, 290.000000)">
                                                            <g id="input" transform="translate(30.000000, 0.000000)">
                                                                <g id="where"
                                                                   transform="translate(0.000000, 26.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(0.000000, 12.000000)">
                                                                        <g id="ico_maps_search_box">
                                                                            <path
                                                                                d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z"
                                                                                id="Shape"></path>
                                                                            <circle id="Oval" cx="8.25" cy="8.25"
                                                                                    r="3"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i><span class="lv2">Los Angeles</span></li>
                                    <li style="padding-left: 20px;" data-country="US" data-value="1944" class="item ">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" width="16px"
                                                 height="16px" viewBox="0 0 17 24" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>ico_maps_search_box</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Search_Result_1_Grid"
                                                       transform="translate(-165.000000, -328.000000)"
                                                       stroke="gray">
                                                        <g id="form_search_hotel_row"
                                                           transform="translate(135.000000, 290.000000)">
                                                            <g id="input" transform="translate(30.000000, 0.000000)">
                                                                <g id="where"
                                                                   transform="translate(0.000000, 26.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(0.000000, 12.000000)">
                                                                        <g id="ico_maps_search_box">
                                                                            <path
                                                                                d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z"
                                                                                id="Shape"></path>
                                                                            <circle id="Oval" cx="8.25" cy="8.25"
                                                                                    r="3"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i><span class="lv2">New Jersey</span></li>
                                    <li style="padding-left: 40px;" data-country="US" data-value="1946" class="item ">
                                        <span class="child">Delaware</span></li>
                                    <li style="padding-left: 60px;" data-country="US" data-value="1945" class="item ">
                                        <span class="child">Nevada</span></li>
                                    <li style="padding-left: 20px;" data-country="US" data-value="275" class="item ">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" width="16px"
                                                 height="16px" viewBox="0 0 17 24" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>ico_maps_search_box</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Search_Result_1_Grid"
                                                       transform="translate(-165.000000, -328.000000)"
                                                       stroke="gray">
                                                        <g id="form_search_hotel_row"
                                                           transform="translate(135.000000, 290.000000)">
                                                            <g id="input" transform="translate(30.000000, 0.000000)">
                                                                <g id="where"
                                                                   transform="translate(0.000000, 26.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(0.000000, 12.000000)">
                                                                        <g id="ico_maps_search_box">
                                                                            <path
                                                                                d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z"
                                                                                id="Shape"></path>
                                                                            <circle id="Oval" cx="8.25" cy="8.25"
                                                                                    r="3"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i><span class="lv2">New York</span></li>
                                    <li style="padding-left: 20px;" data-country="US" data-value="7970" class="item ">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" width="16px"
                                                 height="16px" viewBox="0 0 17 24" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>ico_maps_search_box</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Search_Result_1_Grid"
                                                       transform="translate(-165.000000, -328.000000)"
                                                       stroke="gray">
                                                        <g id="form_search_hotel_row"
                                                           transform="translate(135.000000, 290.000000)">
                                                            <g id="input" transform="translate(30.000000, 0.000000)">
                                                                <g id="where"
                                                                   transform="translate(0.000000, 26.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(0.000000, 12.000000)">
                                                                        <g id="ico_maps_search_box">
                                                                            <path
                                                                                d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z"
                                                                                id="Shape"></path>
                                                                            <circle id="Oval" cx="8.25" cy="8.25"
                                                                                    r="3"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i><span class="lv2">San Francisco</span></li>
                                    <li style="padding-left: 20px;" data-country="US" data-value="1952" class="item ">
                                        <i class="input-icon field-icon fa">
                                            <svg height="16px" width="16px" width="16px"
                                                 height="16px" viewBox="0 0 17 24" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <title>ico_maps_search_box</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Search_Result_1_Grid"
                                                       transform="translate(-165.000000, -328.000000)"
                                                       stroke="gray">
                                                        <g id="form_search_hotel_row"
                                                           transform="translate(135.000000, 290.000000)">
                                                            <g id="input" transform="translate(30.000000, 0.000000)">
                                                                <g id="where"
                                                                   transform="translate(0.000000, 26.000000)">
                                                                    <g id="Group"
                                                                       transform="translate(0.000000, 12.000000)">
                                                                        <g id="ico_maps_search_box">
                                                                            <path
                                                                                d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z"
                                                                                id="Shape"></path>
                                                                            <circle id="Oval" cx="8.25" cy="8.25"
                                                                                    r="3"></circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i><span class="lv2">Virginia</span></li>
                                    <li style="padding-left: 40px;" data-country="US" data-value="282" class="item ">
                                        <span class="child">Virginia Beach</span></li>
                                </ul>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="input-icon field-icon fa">
                                    <svg
                                        height="25px" width="25px" width="25px" height="25px" viewBox="0 0 24 24"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                        <title>ico_search_header</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="ico_search_header" stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd"
                                           stroke-linecap="round" stroke-linejoin="round">
                                            <g id="Group" stroke="#ffffff" stroke-width="1.5">
                                                <g id="search-remove">
                                                    <path
                                                        d="M18.875,9.812 C18.8754045,13.4778233 16.6674237,16.7828921 13.2807219,18.1859288 C9.89402017,19.5889655 5.99561982,18.8136372 3.4034913,16.2215087 C0.81136277,13.6293802 0.0360345119,9.73097983 1.4390712,6.34427809 C2.84210788,2.95757635 6.1471767,0.74959554 9.813,0.75 C12.2163918,0.75 14.521347,1.70474369 16.2208017,3.40419835 C17.9202563,5.10365301 18.875,7.40860817 18.875,9.812 Z"
                                                        id="Shape"></path>
                                                    <path d="M16.221,16.22 L23.25,23.25" id="Shape"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <div class="main-content">
        <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-section">
                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="tourmaster-tour-item clearfix  tourmaster-tour-item-style-grid tourmaster-tour-item-column-3"
                                style="padding-bottom: 10px;">
                                <div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                    <?php $isfirst = 1;?>
                                    <?php foreach ($tours as $value): ?>
                                    <div
                                        class="gdlr-core-item-list  tourmaster-item-pdlr tourmaster-column-20  @if ($isfirst===1) tourmaster-column-first @endif">
                                        <div
                                            class="tourmaster-tour-grid  tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div class="tourmaster-tour-grid-inner"
                                                 style="box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -moz-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0px 0px 25px rgba(10, 10, 10,0.08); ">
                                                <div
                                                    class="tourmaster-tour-thumbnail tourmaster-media-image tourmaster-zoom-on-hover">
                                                    <a href="/chi-tiet-tour/{{$value->slug}}"><img
                                                            src="{{$value->thumb}}" ></a></div>
                                                <div
                                                    class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js"
                                                    data-sync-height="tour-item-31"
                                                    style="height: 176px; padding-bottom: 8px;">
                                                    <div
                                                        class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element"
                                                        style="color: #ffffff;background-color: #ffa11a;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor"
                                                             style="border-right-color: rgba(255, 161, 26, 0.5);"></div>
                                                        Best Seller
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title"
                                                        style="font-size: 20px;font-weight: 700;letter-spacing: 0px;text-transform: none;">
                                                        <a href="/chi-tiet-tour/{{$value->slug}}">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 x="0px" y="0px" viewBox="0 0 512 512"
                                                                 xml:space="preserve" style="fill: #ffa11a"> <path d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648
c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176
c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288
C400.805,209.543,400.389,203.847,397.413,199.303z"></path> </svg>
                                                            <span><?php echo $value->title;?></span></a></h3>
                                                    <div class="tourmaster-tour-price-wrap tourmaster-discount"><span
                                                            class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span
                                                                class="tourmaster-tail">$3,700</span></span><span
                                                            class="tourmaster-tour-discount-price"><?php echo number_format($value->adult_price, 0, ',', '.');?></span></div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div
                                                            class="tourmaster-tour-info tourmaster-tour-info-duration-text ">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 x="0px" y="0px" viewBox="0 0 465 465"
                                                                 xml:space="preserve"> <path d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"></path>
                                                                <path d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"></path>
                                                                <path d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"></path>
                                                                <path d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"></path>
                                                                <path d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"></path>
                                                                <path d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"></path>
                                                                <path d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
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
                                                                <path d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
C236.243,89.978,229.477,83.198,221.124,83.198z"></path> </svg>
                                                            <?php echo $value->days, ' ngày ', $value->nights, ' đêm  ' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <?php $isfirst =0;?>

                                        <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .st_background {
            background-image: url(@if (isset($category)) {{$category->thumb}} @else   https://www.saigontourist.net/uploads/destination/TrongNuoc/Condao/con-dao-beach.jpg @endif)   !important; background-size: cover; background-repeat: no-repeat; background-position: center center; }
    </style>


@endsection

@section('custom-style-content')
    <style>
        .tourmaster-tour-thumbnail.tourmaster-media-image.tourmaster-zoom-on-hover{
            width: 400px;
            height: 230px;
        }


    </style>
    @endsection
