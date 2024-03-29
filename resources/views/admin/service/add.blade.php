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
                                <h4 class="card-title" id="horz-layout-basic">Thêm dịch vụ mới</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/service/addRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin dịch vụ</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Tên dịch vụ: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                           type="text"
                                                           name="title">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Giá gốc </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="number"
                                                            name="giagoc">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Giá sau khi giảm </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="number"
                                                            name="giasaukhigiam">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Danh mục cha: </label>
                                                <div class="col-md-9">
                                                    <select id="parent_id" name="parent_id"
                                                            class="form-control">
                                                        <option value="0" selected="" disabled="">Danh mục cha
                                                        </option>

                                                        <?php foreach ($servicetypes as $servicetype): ?>
                                                        <option
                                                            value="{{$servicetype->id}}">{{$servicetype->title}}</option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Ảnh đại diện: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="thumb" data-input="thumb_data"
                                                           data-preview="thumb_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="thumb_data" class="form-control"
                                                               type="text"
                                                               name="thumb_data">

                                                    </div>
                                                    <img id="thumb_preview"
                                                         style="margin-top:15px;max-height:100px;">
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-user"></i>Nội dung</h4>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                            <textarea  rows="20" class="form-control"
                                                                      name="content"></textarea>

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
                                                        CKEDITOR.replace('content', options);

                                                    </script>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Trạng thái: </label>
                                                <div class="col-md-9">

                                                    <select id="isActive" name="isActive"
                                                            class="form-control">
                                                        <option value="0" selected="" disabled="">Chọn trạng thái cho danh
                                                            mục
                                                        </option>
                                                        <option  value=0>Không kích hoạt</option>
                                                        <option  value=1>Kích hoạt</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="ft-user"></i>Nội dung SEO</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Tiêu đề: </label>
                                                <div class="col-md-9">
                                                    <input id="meta_title" class="form-control"
                                                           type="text"
                                                           name="meta_title">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Mô tả: </label>
                                                <div class="col-md-9">
                                                    <input id="meta_desc" class="form-control"
                                                           type="text"
                                                           name="meta_desc">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Từ khóa: </label>
                                                <div class="col-md-9">
                                                    <input id="meta_kw" class="form-control"
                                                           type="text"
                                                           name="meta_kw">
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


            $('#thumb').filemanager('image');


            $(document).ready(function () {
                $('#thumb_data').change(function () {
                    var data = $(this).val();
                    $("#thumb_preview").attr("src", data);
                    console.log(data)
                });


            });
        });
    </script>
@endsection
