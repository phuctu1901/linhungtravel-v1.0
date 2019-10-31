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
                                <h4 class="card-title" id="horz-layout-basic">Chỉnh sửa bình luận</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/review/editRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$review->id}}">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin bình luận</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tên người bình luận: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                           type="text"
                                                           name="author" value="{{$review->author}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nghề nghiệp: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="text"
                                                            name="job" value="{{$review->job}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nội dung (ít hơn 30 từ): </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="text"
                                                            name="review_content" value="{{$review->content}}">
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
                                                               name="category_thumb_data" value="{{$review->avatar}}">

                                                    </div>
                                                    <img id="category_thumb_preview"
                                                         style="margin-top:15px;max-height:100px;" src="{{$review->thumb}}">
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

            $("#category_thumb_preview").attr("src", "{{$review->avatar}}");
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
