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
                                <h4 class="card-title" id="horz-layout-basic">CHỈNH SỬA CHUYÊN MỤC BÀI VIẾT</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/postcategory/editRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$post_category->id}}">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin chuyên mục</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tên chuyên mục: </label>
                                                <div class="col-md-9">
                                                    <input id="title" class="form-control"
                                                           type="text"
                                                           name="title" value="{{$post_category->title}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Slug: </label>
                                                <div class="col-md-9">
                                                    <input id="slug" class="form-control"
                                                           type="text"
                                                           name="slug" value="{{$post_category->slug}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Mô tả: </label>
                                                <div class="col-md-9">
                                                            <textarea id="desc" rows="3" class="form-control"
                                                                      name="desc">{{$post_category->desc}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Thứ tự ưu tiên: </label>
                                                <div class="col-md-9">
                                                    <input id="displayOrder" class="form-control"
                                                           name="displayOrder" type="number" min="0" value="{{$post_category->displayOrder}}">
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
                                                           name="meta_title" value="{{$post_category->metaTitle}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Mô tả: </label>
                                                <div class="col-md-9">
                                                    <input id="meta_desc" class="form-control"
                                                           type="text"
                                                           name="meta_desc" value="{{$post_category->metaDesc}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Từ khóa: </label>
                                                <div class="col-md-9">
                                                    <input id="meta_kw" class="form-control"
                                                           type="text"
                                                           name="meta_kw" value="{{$post_category->metaKeyword}}">
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



            $(document).ready(function () {

                $('#isActive').val({{$post_category->isActive}});


            });
        });
    </script>
@endsection
