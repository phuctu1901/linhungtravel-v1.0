@extends('admin.layouts.master')

@section('main-content')


    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">SEO code</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/seocode/update')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$seocode->id}}">

                                            <h4 class="form-section"><i class="ft-user"></i>Thông tin chi tiết</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Bing: </label>
                                                <div class="col-md-9">
                                                    <input id="bing" class="form-control"
                                                           type="text"
                                                           name="bing" value="{{$seocode->bing}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Alexa: </label>
                                                <div class="col-md-9">
                                                    <input id="alexa" class="form-control"
                                                           type="text"
                                                           name="alexa" value="{{$seocode->alexa}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Google Webmaster Code: </label>
                                                <div class="col-md-9">
                                                    <input id="gwc" class="form-control"
                                                           type="text"
                                                           name="gwc" value="{{$seocode->gwc}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Google Analytics Code: </label>
                                                <div class="col-md-9">
                                                    <input id="gac" class="form-control"
                                                           type="text"
                                                           name="gac" value="{{$seocode->gac}}">
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
    <script>
        var msg = '{{Session::get('
    alert ')}}';
        var exist = '{{Session::has('
    alert ')}}';
        if (exist) {
            alert(msg);
        }
    </script>

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


            $('#category_thumb').filemanager('image');


            $(document).ready(function () {
                $('#category_thumb_data').change(function () {
                    var data = $(this).val();
                    $("#category_thumb_preview").attr("src", data);
                    console.log(data)
                });


            });
        });
    </script>
@endsection
