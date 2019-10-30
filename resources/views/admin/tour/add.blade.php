@extends('admin.layouts.master') @section('main-content')


    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Thêm tour mới</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal" action="{{url('/admin/tour/addRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="basic_info_tab" data-toggle="tab"
                                                       href="#basic_info" aria-controls="basic_info"
                                                       aria-expanded="true">Thông tin cơ bản</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="itinerary_tab" data-toggle="tab"
                                                       href="#itinerary" aria-controls="itinerary"
                                                       aria-expanded="false">Lịch trình</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="prices_tab" data-toggle="tab" href="#prices"
                                                       aria-controls="prices" aria-expanded="false">Phụ lục</a>
                                                </li>
                                            </ul>


                                            <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active show" id="basic_info"
                                                     aria-labelledby="basic_info_tab" aria-expanded="true">
                                                    <h4 class="form-section"><i class="ft-user"></i> Tour Info</h4>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput1">Tên
                                                            tour: </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                   name="tour_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Loại tour: </label>
                                                        <div class="col-md-9">
                                                            <select id="tourtype_id" name="tourtype_id"
                                                                    class="form-control">
                                                                <option value="0" selected="" disabled="">Chọn tour
                                                                </option>

                                                                <?php foreach ($tourtype as $type): ?>
                                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Danh mục tour: </label>
                                                        <div class="col-md-9">
                                                            <div class="col-md-6" style="display: inline-block;">
                                                                <select id="tourparent_id" name="tourparent_id"
                                                                        class="form-control">
                                                                    <option value="0" selected="" disabled="">Chọn tour
                                                                    </option>

                                                                    <?php foreach ($tourparents as $tourparent): ?>
                                                                    <option
                                                                        value="{{$tourparent->id}}">{{$tourparent->title}}</option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>

                                                            <div style="display: inline-block;">
                                                                <select id="tourcategory_id" name="tourcategory_id"
                                                                        class="form-control">
                                                                    <option value="0" selected="" disabled="">Danh mục
                                                                        con
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Tổng quan: </label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control"
                                                                      name="overview"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Xuất
                                                            phát: </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                   name="location">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="">Giá người
                                                            lớn: </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="projectinput2" class="form-control"
                                                                   name="adult_price">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Thời
                                                            gian: </label>
                                                        <div class="col-md-1">
                                                            <input type="number" id="projectinput3" class="form-control"
                                                                   name="days">
                                                        </div>
                                                        <label class="label-control" for="projectinput2">Ngày</label>

                                                        <div class="col-md-1">
                                                            <input type="number" id="projectinput3"
                                                                   class="form-control " name="nights">
                                                        </div>
                                                        <label class="label-control" for="projectinput2">Đêm</label>

                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput9">Nổi
                                                            bật: </label>
                                                        <div class="col-md-9">
                                                            <textarea id="highlights" rows="5" class="form-control"
                                                                      name="highlights"></textarea>

                                                            <script
                                                                src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                            <script>
                                                                CKEDITOR.replace('highlights');

                                                            </script>
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Ảnh đại diện: </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <a id="tour_thumb" data-input="tour_thumb_data"
                                                                   data-preview="tour_thumb_preview"
                                                                   class="btn btn-primary">
                                                                    <i class="fa fa-picture-o"></i> Choose
                                                                </a>
                                                                <input id="tour_thumb_data" class="form-control"
                                                                       type="text"
                                                                       name="thumb">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section"><i class="ft-user"></i>Danh sách hình
                                                        ảnh
                                                    </h4>
                                                    <div class="form-group row">
                                                        <div class="col-md-3">
                                                        </div>
                                                        <table class="col-md-9" id="dynamic_field">
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <a id="lfm_0" data-input="thumbnail_0"
                                                                           data-preview="holder_0"
                                                                           class="btn btn-primary">
                                                                            <i class="fa fa-picture-o"></i> Choose
                                                                        </a>
                                                                        <input id="thumbnail_0"
                                                                               class="form-control image-input"
                                                                               type="text"
                                                                               name="images[]" data-id=0>

                                                                    </div>
                                                                    <img id="holder_0"
                                                                         style="margin-top:15px;max-height:100px;">
                                                                </td>
                                                                <td>
                                                                    <button type="button" name="add" id="add"
                                                                            class="btn btn-success">Add More
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="itinerary" role="tabpanel"
                                                     aria-labelledby="itinerary_tab" aria-expanded="false">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Chi tiết tour</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="card-block" id="dynamic_itinerary">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control">Ngày
                                                                        1</label>
                                                                    <div class="col-md-9">

                                                                        <input type="text" class="form-control"
                                                                               name="itinerary_name[]">
                                                                        <div class="input-group">
                                                                            <a id="tour_image_1"
                                                                               data-input="tour_image_data_1"
                                                                               data-preview="tour_image_preview_1"
                                                                               class="btn btn-primary">
                                                                                <i class="fa fa-picture-o"></i> Choose
                                                                            </a>

                                                                            <input id="tour_image_data_1"
                                                                                   class="form-control itinerary-image-input"
                                                                                   type="text"
                                                                                   name="itinerary_image[]" data-id=1>
                                                                        </div>

                                                                        <img id="tour_image_preview_1"
                                                                             style="margin-top:15px;max-height:100px;">
                                                                        <textarea id="itinerary_desc_1" rows="5"
                                                                                  class="form-control tour-info"
                                                                                  name="itinerary_desc[]"></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="form-group-row">
                                                                <div class="col-md-9 pull-right">
                                                                    <button type="button" name="add" id="add_day"
                                                                            class="btn btn-success">Thêm ngày
                                                                    </button>
                                                                    <button type="button" name="remove" id="remove_day"
                                                                            class="btn btn-warning">Xóa ngày
                                                                    </button>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="tab-pane" id="prices" role="tabpanel"
                                                     aria-labelledby="prices_tab" aria-expanded="false">

                                                    <h4 class="form-section"><i class="ft-user"></i> Giá:</h4>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Bao gồm:</label>
                                                        <div class="col-md-9">
                                                            <textarea id="price_include" rows="5" class="form-control"
                                                                      name="price_include"></textarea>

                                                            <script
                                                                src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                            <script>
                                                                CKEDITOR.replace('price_include');

                                                            </script>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">

                                                        <label class="col-md-3 label-control">Không bao gồm:</label>
                                                        <div class="col-md-9">
                                                            <textarea id="price_exclude" rows="5" class="form-control"
                                                                      name="price_exclude"></textarea>

                                                            <script
                                                                src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                            <script>
                                                                CKEDITOR.replace('price_exclude');

                                                            </script>
                                                        </div>

                                                    </div>

                                                    <h4 class="form-section"><i class="ft-power"></i> Chính sách tour:</h4>
                                                    <div class="form-group row">
                                                        <div class="col-md-3 label-control"></div>
                                                        <div class="col-md-9">
                                                            <textarea id="tour_policy" rows="5" class="form-control"
                                                                      name="tour_policy"></textarea>

                                                            <script
                                                                src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                                            <script>
                                                                CKEDITOR.replace('tour_policy');

                                                            </script>
                                                        </div>
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
            $(this).find('.tour-info').each(function (index) {
                console.log(index + ": " + $(this).attr('id'));
                CKEDITOR.replace($(this).attr('id'), options);

            });


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

            let i = 1;
            let days = 1;

            $('#lfm_0').filemanager('image');
            $('#tour_thumb').filemanager('image');
            $('#tour_image_1').filemanager('image');

            function RefreshSomeEventListener() {
                // Remove handler from existing elements
                $('.image-input').off();

                // Re-add event handler for all matching elements
                $('.image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#holder_" + id).attr("src", data);
                    console.log(data)
                });
            };

            function RefreshSomeEventListener_2() {
                // Remove handler from existing elements
                $('.itinerary-image-input').off();

                // Re-add event handler for all matching elements
                $('.itinerary-image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#tour_image_preview_" + id).attr("src", data);
                    console.log(data)
                });
            };

            $('#add').click(function () {

                i++;
                $('#dynamic_field').append('<tr id=row_' + i + '><td><div class="input-group"><a id=lfm_' + i + ' data-input=thumbnail_' + i + ' data-preview=holder_' + i + ' class="btn btn-primary"><i class="fa fa-picture-o"></i> Choose</a><input id=thumbnail_' + i + ' class="form-control image-list image-input" type="text"name="images[]" data-id=' + i + ' ></div><img id=holder_' + i + ' style="margin-top:15px;max-height:100px;" ></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>')
                // $('#dynamic_field').append('<tr id="row' + i + '"><td><label class="file center-block"><input type="file" name="images[]"></label></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
                $('#lfm_' + i).filemanager('image');
                RefreshSomeEventListener();

            });

            $('#add_day').click(function () {

                days++;
                $('#dynamic_itinerary').append('<div class="form-group row" id=dynamic_itinerary_' + days + ' > <label class="col-md-3 label-control">Ngày ' + days + '</label> <div class="col-md-9"> <input type="text" class="form-control" name="itinerary_name[]"><div class="input-group"> <a id=tour_image_' + days + ' data-input=tour_image_data_' + days + ' data-preview=tour_image_preview_' + days + ' class="btn btn-primary"> <i class="fa fa-picture-o"></i> Choose </a> <input id=tour_image_data_' + days + ' class="form-control itinerary-image-input" type="text" name="itinerary_image[]" data-id=' + days + '> </div><img id=tour_image_preview_' + days + ' style="margin-top:15px;max-height:100px;" > <textarea id="itinerary_desc_' + days + '" rows="5" class="form-control tour-info" name="itinerary_desc[]"></textarea> </div> </div>');
                CKEDITOR.replace('itinerary_desc_' + days, options);
                $('#tour_image_' + days).filemanager('image');
                RefreshSomeEventListener_2();


            });


            $(document).ready(function () {
                $('.image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#holder_" + id).attr("src", data);
                    console.log(data)
                });

                $('.itinerary-image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#tour_image_preview_" + id).attr("src", data);
                    console.log(data)
                });


                $(document).on('click', '.btn_remove', function () {

                    var button_id = $(this).attr("id");
                    console.log(button_id);
                    i--;
                    $('#row_' + button_id + '').remove();


                });

                $('#remove_day').click(function () {
                    $('#dynamic_itinerary_' + days).remove();
                    days--;
                })

                $('#tourparent_id').change(function () {
                    let data = $(this).children("option:selected").val();
                    console.log(data);
                    $('.add_option').remove();
                    $.ajax({
                        url: 'http://localhost:8000/admin/tour/getCategoryByParentId/' + data, // gửi ajax đến file result.php
                        type: "get", // chọn phương thức gửi là get
                        dateType: "json", // dữ liệu trả về dạng text
                        success: function (result) {
                            // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                            // đó vào thẻ div có id = result
                            console.log(result);
                            result = result['tour_categories'];
                            result.forEach(function (item) {
                                $('#tourcategory_id').append('<option class="add_option" value="' + item['id'] + '">' + item['title'] + '</option>')
                            });
                        }
                    });
                })

                function printErrorMsg(msg) {

                    $(".print-error-msg").find("ul").html('');

                    $(".print-error-msg").css('display', 'block');

                    $(".print-success-msg").css('display', 'none');

                    $.each(msg, function (key, value) {

                        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');

                    });

                }

            });
        });
    </script>
@endsection
