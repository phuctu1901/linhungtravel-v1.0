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
                                <h4 class="card-title" id="horz-layout-basic">Thêm slider mới</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/slider/addRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin slider</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tiêu đề: </label>
                                                <div class="col-md-9">
                                                    <input id="slider_title" class="form-control"
                                                           type="text"
                                                           name="slider_title">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Mô
                                                    tả: </label>
                                                <div class="col-md-9">
                                                            <textarea id="slider_desc" rows="3" class="form-control"
                                                                      name="slider_desc"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Liên kết: </label>
                                                <div class="col-md-9">
                                                    <input id="slider_link" class="form-control"
                                                           type="text"
                                                           name="slider_link">
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Ảnh đại diện: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="slider_thumb" data-input="slider_thumb_data"
                                                           data-preview="slider_thumb_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="slider_thumb_data" class="form-control"
                                                               type="text"
                                                               name="slider_thumb_data">

                                                    </div>
                                                    <img id="slider_thumb_preview"
                                                         style="margin-top:15px;max-height:100px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Trạng thái: </label>
                                                <div class="col-md-9">

                                                    <select id="isActive" name="isActive"
                                                            class="form-control">
                                                        <option value="0" selected="" disabled="">Chọn trạng thái cho
                                                            danh
                                                            mục
                                                        </option>
                                                        <option value=0>Không kích hoạt</option>
                                                        <option value=1>Kích hoạt</option>
                                                    </select>
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


            $('#slider_thumb').filemanager('image');


            $(document).ready(function () {
                $('#slider_thumb_data').change(function () {
                    var data = $(this).val();
                    $("#slider_thumb_preview").attr("src", data);
                    console.log(data)
                });


            });
        });
    </script>
@endsection
