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
                                <h4 class="card-title" id="horz-layout-basic">Chỉnh sửa danh mục tour</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/tourcategory/editRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$tour_category->id}}">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin danh mục</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Tên
                                                    danh mục: </label>
                                                <div class="col-md-9">
                                                    <input id="category_title" class="form-control"
                                                           type="text"
                                                           name="category_title" value="{{$tour_category->title}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Danh mục cha: </label>
                                                <div class="col-md-9">
                                                    <select id="parent_id" name="parent_id"
                                                            class="form-control">
                                                        <option value="" selected="" disabled="">Danh mục cha
                                                        </option>

                                                        <?php foreach ($tourparents as $tourparent): ?>
                                                        <option
                                                            value="{{$tourparent->id}}">{{$tourparent->title}}</option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput9">Mô
                                                    tả: </label>
                                                <div class="col-md-9">
                                                            <textarea id="desc" rows="5" class="form-control"
                                                                      name="desc">{{$tour_category->desc}}</textarea>

{{--                                                    <script--}}
{{--                                                        src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>--}}
{{--                                                    <script>--}}
{{--                                                        CKEDITOR.replace('desc');--}}

{{--                                                    </script>--}}
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Ảnh đại diện: </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <a id="category_thumb" data-input="category_thumb_data"
                                                           data-preview="category_thumb_preview"
                                                           class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                        <input id="category_thumb_data" class="form-control"
                                                               type="text"
                                                               name="category_thumb_data" value="{{$tour_category->thumb}}">

                                                    </div>
                                                    <img id="category_thumb_preview"
                                                         style="margin-top:15px;max-height:100px;" src="{{$tour_category->thumb}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Trạng thái: </label>
                                                <div class="col-md-9">

                                                <select id="isActive" name="isActive"
                                                        class="form-control"  >
                                                    <option value="0" selected="" disabled="">Chọn trạng thái cho danh
                                                        mục
                                                    </option>
                                                    <option  value=0>Không kích hoạt</option>
                                                    <option  value=1>Kích hoạt</option>
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


            $('#category_thumb').filemanager('image');


            $(document).ready(function () {
                $('#category_thumb_data').change(function () {
                    var data = $(this).val();
                    $("#category_thumb_preview").attr("src", data);
                    console.log(data)
                });
                $('#parent_id').val({{$tour_category->parent_id}})
                $('#isActive').val({{$tour_category->isActive}});


            });
        });
    </script>
@endsection
