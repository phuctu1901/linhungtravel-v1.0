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
                                <h4 class="card-title" id="horz-layout-basic">Cấu hình website</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/config/update')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$config->id}}">

                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin website</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Logo: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="logo" data-input="logo_data"
                                                           data-preview="logo_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="logo_data" class="form-control"
                                                               type="text"
                                                               name="logo_data" value="{{$config->logo}}">

                                                    </div>
                                                    <img id="logo_preview"
                                                         style="margin-top:15px;max-height:100px;" src="{{$config->logo}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Logo 2: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="logo_2" data-input="logo_2_data"
                                                           data-preview="logo_2_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="logo_2_data" class="form-control"
                                                               type="text"
                                                               name="logo_2_data" value="{{$config->logo_2}}">

                                                    </div>
                                                    <img id="logo_2_preview"
                                                         style="margin-top:15px;max-height:100px;" src="{{$config->logo_2}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Logo trên header: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="logo_header" data-input="logo_header_data"
                                                           data-preview="logo_header_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="logo_header_data" class="form-control"
                                                               type="text"
                                                               name="logo_header_data" value="{{$config->logo_header}}">

                                                    </div>
                                                    <img id="logo_preview"
                                                         style="margin-top:15px;max-height:100px;" src="{{$config->logo_header}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <label class="col-md-3 label-control" for="projectinput1">Tên website: </label>
                                                <div class="col-md-9">
                                                    <input id="metaTitle" class="form-control"
                                                           type="text"
                                                           name="metaTitle" value="{{$config->metaTitle}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Mô tả: </label>
                                                <div class="col-md-9">
                                                    <textarea id="metaDesc" rows="1" class="form-control"
                                                              name="metaDesc">{{$config->metaDesc}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Từ khóa: </label>
                                                <div class="col-md-9">
                                                    <textarea id="metaKeyword" rows="1" class="form-control"
                                                              name="metaKeyword">{{$config->metaKeyword}}</textarea>
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


            $('#logo').filemanager('image');
            $('#logo_2').filemanager('image');
            $('#logo_header').filemanager('image');


            $(document).ready(function () {
                $('#logo_data').change(function () {
                    var data = $(this).val();
                    $("#logo_preview").attr("src", data);
                    console.log(data)
                });


            });
        });
    </script>
@endsection
