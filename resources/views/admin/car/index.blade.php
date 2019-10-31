@extends('admin.layouts.master')

@section('main-content')


    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <?php //Hiển thị thông báo thành công?>
                        @if ( Session::has('success') )
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Trang thuê xe</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/car/update')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$car->id}}">
                                            <h4 class="form-section"><i class="ft-user"></i>Quy trình đặt xe</h4>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                            <textarea  rows="20" class="form-control"
                                                                       name="quytrinh"><?php echo json_decode($car->quytrinh) ?></textarea>

                                                    <script
                                                        src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                    <script>
                                                        CKEDITOR.plugins.addExternal( 'justify', '/asset-admin/js/justify/', 'plugin.js' );
                                                        var options = {
                                                            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                                            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                                            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                                            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                                                            extraPlugins: 'justify'
                                                        };
                                                        CKEDITOR.replace('quytrinh', options);

                                                    </script>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-user"></i>Liên hệ</h4>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                            <textarea  rows="20" class="form-control"
                                                                       name="lienhe"><?php echo json_decode($car->lienhe) ?></textarea>

                                                    <script
                                                        src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                    <script>
                                                        CKEDITOR.plugins.addExternal( 'justify', '/asset-admin/js/justify/', 'plugin.js' );
                                                        var options = {
                                                            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                                            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                                            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                                            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                                                            extraPlugins: 'justify'
                                                        };
                                                        CKEDITOR.replace('lienhe', options);

                                                    </script>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-user"></i>Phụ lục</h4>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                            <textarea  rows="20" class="form-control"
                                                                       name="phuluc"><?php echo json_decode($car->phuluc) ?></textarea>

                                                    <script
                                                        src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                    <script>
                                                        CKEDITOR.plugins.addExternal( 'justify', '/asset-admin/js/justify/', 'plugin.js' );
                                                        var options = {
                                                            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                                            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                                            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                                            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                                                            extraPlugins: 'justify'
                                                        };
                                                        CKEDITOR.replace('phuluc', options);

                                                    </script>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="form-actions">
                                            <button type="button" class="btn btn-raised btn-warning mr-1">
                                                <i class="ft-x"></i> Reset
                                            </button>
                                            <button type="submit" class="btn btn-raised btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->

        </div>
    </div>

    <script type='text/javascript' src='/client/asset/js/jquery.js'></script>
    <script type='text/javascript' src='/client/asset/js/jquery-migrate.min.js'></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


    <script>


        jQuery(function ($) {
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };


        });
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>

        jQuery(function ($) {

            const options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };


        });
    </script>
@endsection
