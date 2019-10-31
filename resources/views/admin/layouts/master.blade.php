<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Trang quản trị hệ thống - Du lịch và truyền thông Linh Ứng - Linh Ung Travel</title>
    <link rel="apple-touch-icon" sizes="60x60" href="/asset-admin/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="/asset-admin/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="/asset-admin/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="/asset-admin/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="/asset-admin/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="/asset-admin/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="/asset-admin/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/asset-admin/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/asset-admin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/asset-admin/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/asset-admin/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="/asset-admin/vendors/css/chartist.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"
          type="text/css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="/asset-admin/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="man-of-steel" data-image="/asset-admin/img/sidebar-bg/01.jpg"
         class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="/admin" class="logo-text float-left">
                    <div class="logo-img"><img src="/asset-admin/img/logo.png"/></div>
                    <span class="text align-middle">LUT</span>
                </a><a id="sidebarToggle" href="javascript:"
                       class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                        data-toggle="expanded" class="ft-toggle-right toggle-icon"></i></a><a id="sidebarClose"
                                                                                              href="javascript:"
                                                                                              class="nav-close d-block d-md-block d-lg-none d-xl-none"><i
                        class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="nav-item"><a href="/admin"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-shopping-cart"></i><span data-i18n=""
                                                                                                   class="menu-title">Tour</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/tour/add" class="menu-item">Thêm tour mới</a>
                            </li>
                            <li><a href="/admin/tour" class="menu-item">Danh sách tour</a>
                            </li>
{{--                            <li><a href="helper-classes.html" class="menu-item">Quản lý đặt tour</a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n=""
                                                                                                   class="menu-title">Dịch vụ</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/service/add" class="menu-item">Thêm dịch vụ</a>
                            </li>
                            <li><a href="/admin/service" class="menu-item">Tất cả dịch vụ</a>
                            </li>
                            <li><a href="/admin/servicetype" class="menu-item">Danh mục dịch vụ</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-bookmark"></i>
                            <span data-i18n=""
                                  class="menu-title">Quản
                  lý danh mục</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/tourcategoryparent" class="menu-item">Danh mục tour lớn</a>
                            </li>
                            <li><a href="/admin/tourcategory" class="menu-item">Danh mục tour chi tiết</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="/admin/car"><i class="ft-circle"></i><span data-i18n="" class="menu-title">Đặt xe</span></a>
                    </li>

                    <li class="nav-item"><a href="/admin/review"><i class="ft-activity"></i><span data-i18n="" class="menu-title">Bình luận</span></a>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-edit"></i><span data-i18n=""
                                                                                          class="menu-title">Quản lý giao diện</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/slider" class="menu-item">Danh sách sliders</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-folder"></i><span data-i18n=""
                                                                                            class="menu-title">Quản
                  lý nội dung</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/page" class="menu-item">Trang tĩnh</a>
                            </li>
{{--                            <li><a href="/admin/postcategory" class="menu-item">Chuyên mục</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="/admin/post" class="menu-item">Bài viết</a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-info"></i><span data-i18n=""
                                                                                          class="menu-title">Cấu
                  hình website</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/config" class="menu-item">Thông tin website</a>
                            </li>
                            <li><a href="/admin/seocode" class="menu-item">SEO CODE</a>
                            </li>
                            <li><a href="/admin/footer" class="menu-item">Footer</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-image"></i><span data-i18n=""
                                                                                           class="menu-title">Quản
                  lý tập tin</span></a>
                        <ul class="menu-content">
                            <li><a href="/laravel-filemanager?type=image" class="menu-item">Hình ảnh</a>
                            </li>
                            <li><a href="/laravel-filemanager?type=file" class="menu-item">Files</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-user-plus"></i><span data-i18n=""
                                                                                               class="menu-title">Quản
                  lý người dùng</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/user/add" class="menu-item">Thêm tài khoản</a>
                            </li>
                            <li><a href="/admin/user" class="menu-item">Danh sách người dùng</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-info"></i><span data-i18n=""
                                                                                          class="menu-title">Thông tin</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/info" class="menu-item">Thông tin công ty</a>
                            </li>
                            <li><a href="/admin/contact" class="menu-item">Liên hệ</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-mail"></i><span data-i18n=""
                                                                                          class="menu-title">Yêu cầu</span></a>
                        <ul class="menu-content">
                            <li><a href="/admin/request/do" class="menu-item">Chưa xử lý</a>
                            </li>
                            <li><a href="/admin/request/done" class="menu-item">Đã xử lý</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->
    <div class="main-panel">
        <!-- Navbar (Header) Starts-->
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span
                            class="sr-only">Toggle
                navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                    <form role="search" class="navbar-form navbar-right mt-1">
                        <h3>Trang quản trị Linh Ứng Travel</h3>
{{--                        <div class="position-relative has-icon-right">--}}
{{--                            <input type="text" placeholder="Search" class="form-control round"/>--}}
{{--                            <div class="form-control-position"><i class="ft-search"></i></div>--}}
{{--                        </div>--}}
                    </form>
                </div>
                <div class="navbar-container">
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-2"><a id="navbar-fullscreen" href="javascript:"
                                                         class="nav-link apptogglefullscreen"><i
                                        class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">fullscreen</p>
                                </a></li>

                            <li class="dropdown nav-item">
                               <a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                                             class="nav-link position-relative dropdown-toggle"><i
                                        class="ft-user font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">User Settings</p>
                                </a>
                                <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3"
                                     class="dropdown-menu dropdown-menu-right"><a
                                        href="javascript:" class="dropdown-item py-1"><i
                                            class="ft-info mr-2"></i><span style="color: #f2205c;">{{ Auth::user()->name }}</span></a><a
                                        href="/admin/changePassword" class="dropdown-item py-1"><i
                                            class="ft-edit mr-2"></i><span>Đổi mật khẩu</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/admin/logout" class="dropdown-item"><i class="ft-power mr-2"></i><span>Đăng xuất</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar (Header) Ends-->
        @section('main-content')
        @show
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright &copy; 2020</span><a
                        href="#"
                        id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">  WEB3XU </a>, BẢN QUYỀN ĐƯỢC BẢO HỘ </span></p>
        </footer>

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- END Notification Sidebar-->

<!-- BEGIN VENDOR JS-->
<script src="/asset-admin/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/asset-admin/vendors/js/core/popper.min.js" type="text/javascript"></script>
<script src="/asset-admin/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/asset-admin/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="/asset-admin/vendors/js/prism.min.js" type="text/javascript"></script>
<script src="/asset-admin/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="/asset-admin/vendors/js/screenfull.min.js" type="text/javascript"></script>
<script src="/asset-admin/vendors/js/pace/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#multi-select-demo').multiselect();
    });
</script>
<!-- BEGIN PAGE VENDOR JS-->
{{--<script src="/asset-admin/vendors/js/chartist.min.js" type="text/javascript"></script>--}}
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="/asset-admin/js/app-sidebar.js" type="text/javascript"></script>
{{--<script src="/asset-admin/js/notification-sidebar.js" type="text/javascript"></script>--}}
{{--<script src="/asset-admin/js/customizer.js" type="text/javascript"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
{{--<script src="/asset-admin/js/dashboard1.js" type="text/javascript"></script>--}}
<!-- END PAGE LEVEL JS-->
</body>


</html>
