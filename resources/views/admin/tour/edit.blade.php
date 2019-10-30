@extends('admin.layouts.master') @section('main-content')

    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Chi tiết tour</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" action="{{url('/admin/tour/editRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <input type="hidden" id="id" name="id" value="{{$tour->id}}">
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
                                                       aria-controls="prices" aria-expanded="false">Bảng giá</a>
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
                                                                   name="tour_name" value="{{$tour->title}}">
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
                                                        <label class="col-md-3 label-control">Tổng quan: </label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control"
                                                                      name="overview">{{$tour->overview}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Xuất
                                                            phát: </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                   name="location" value="{{$tour->location}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="">Giá người
                                                            lớn: </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="projectinput2" class="form-control"
                                                                   name="adult_price" value="{{$tour->adult_price}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Thời
                                                            gian: </label>
                                                        <div class="col-md-1">
                                                            <input type="number" id="projectinput3" class="form-control"
                                                                   name="days" value="{{$tour->days}}">
                                                        </div>
                                                        <label class="label-control" for="projectinput2">Ngày</label>

                                                        <div class="col-md-1">
                                                            <input type="number" id="projectinput3"
                                                                   class="form-control " name="nights"
                                                                   value="{{$tour->nights}}">
                                                        </div>
                                                        <label class="label-control" for="projectinput2">Đêm</label>

                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput9">Nổi
                                                            bật: </label>
                                                        <div class="col-md-9">
                                                            <textarea id="highlights" rows="5" class="form-control"
                                                                      name="highlights">  <?php echo json_decode($tour->highlights);?></textarea>

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
                                                                       name="thumb" value="{{$tour->thumb}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="form-section"><i class="ft-user"></i>Danh sách hình ảnh
                                                    </h4>
                                                    <div class="form-group row">
                                                        <div class="col-md-3">
                                                        </div>
                                                        <table class="col-md-9" id="dynamic_field">
                                                            <?php $count_i = 0; ?>
                                                            <?php foreach ($images as $image): ?>
                                                            <tr id="row_{{$count_i}}">
                                                                <td>

                                                                    <div class="input-group">
                                                                        <a id="lfm_{{$count_i}}" data-input="thumbnail_{{$count_i}}"
                                                                           data-preview="holder_{{$count_i}}"
                                                                           class="btn btn-primary images-lfm">
                                                                            <i class="fa fa-picture-o"></i> Choose
                                                                        </a>
                                                                        <input id="thumbnail_{{$count_i}}"
                                                                               class="form-control image-input"
                                                                               type="text"
                                                                               name="images[]"
                                                                               data-id={{$count_i}} value="{{$image}}">

                                                                    </div>
                                                                    <img id="holder_{{$count_i}}"
                                                                         style="margin-top:15px;max-height:100px;"
                                                                         src="{{$image}}">
                                                                </td>

                                                                <td>
                                                                    <button id="remove_image" type="button"
                                                                            name="remove" data-id="{{$count_i}}"
                                                                            class="btn btn-danger btn_remove center">Xóa
                                                                        ảnh
                                                                    </button>
                                                                </td>
                                                                <?php $count_i++; ?>


                                                            </tr>
                                                            <?php endforeach; ?>


                                                        </table>
                                                        <div class="col-md-12">
                                                            <button type="button" name="add" id="add"
                                                                    class="btn btn-success pull-right">Thêm hình ảnh
                                                            </button>
                                                        </div>
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
                                                                <?php  $i = 0;?>
                                                                <?php foreach ($itineraries as $itinerary): ?>
                                                                <?php  $i++;?>
                                                                <div class="form-group row" id="dynamic_itinerary_">
                                                                    <label
                                                                        class="col-md-3 label-control">Ngày {{$i}}</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control"
                                                                               name="itinerary_name[]"
                                                                               value="{{$itinerary->name}}">
                                                                        <div class="input-group">
                                                                            <a id="tour_image_{{$i}}"
                                                                               data-input="tour_image_data_{{$i}}"
                                                                               data-preview="tour_image_preview_{{$i}}"
                                                                               class="btn btn-primary tour-image-lfm">
                                                                                <i class="fa fa-picture-o"></i> Choose
                                                                            </a>

                                                                            <input id="tour_image_data_{{$i}}"
                                                                                   class="form-control itinerary-image-input"
                                                                                   type="text"
                                                                                   name="itinerary_image[]"
                                                                                   data-id={{$i}} value="{{$itinerary->image}}">

                                                                        </div>

                                                                        <img id="tour_image_preview_{{$i}}"
                                                                             style="margin-top:15px;max-height:100px;"
                                                                             src="{{$itinerary->image}}">
                                                                        <textarea id="itinerary_desc_{{$i}}" rows="5"
                                                                                  class="form-control tour-info"
                                                                                  name="itinerary_desc[]">{{$itinerary->description}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="form-group-row">
                                                                <div class="col-md-9">
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
                                                    <p>Fruitcake marshmallow donut wafer pastry chocolate topping
                                                        cake. Powder powder gummi bears jelly beans. Gingerbread
                                                        cake chocolate lollipop. Jelly oat cake pastry marshmallow
                                                        sesame snaps.</p>
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
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>



    <script>
        const msg = '{{Session::get('alert ')}}';
        const exist = '{{Session::has('alert ')}}';
        if (exist) {
            alert(msg);
        }
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };

        jQuery(function ($) {


            let count_images = '<?php echo sizeof($images) ?>';
            console.log(count_images);
            let count_days = '<?php echo sizeof($itineraries) ?>';
            console.log(count_days);

            $('#tour_thumb').filemanager('image');


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
                let i = count_images;
                i++;
                $('#dynamic_field').append('<tr id=row_' + i + '><td><div class="input-group"><a id=lfm_' + i + ' data-input=thumbnail_' + i + ' data-preview=holder_' + i + ' class="btn btn-primary images-lfm"><i class="fa fa-picture-o"></i> Choose</a><input id=thumbnail_' + i + ' class="form-control image-list image-input" type="text"name="images[]" data-id=' + i + ' ></div><img id=holder_' + i + ' style="margin-top:15px;max-height:100px;" ></td><td><button id="remove_image" type="button" name="remove" data-id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>')
                // $('#dynamic_field').append('<tr id="row' + i + '"><td><label class="file center-block"><input type="file" name="images[]"></label></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
                $('#lfm_' + i).filemanager('image');
                RefreshSomeEventListener();
                count_images = i;

            });

            $('#add_day').click(function () {

                let days = count_days;
                $('#dynamic_itinerary').append('<div class="form-group row" id=dynamic_itinerary_' + days + ' > <label class="col-md-3 label-control">Ngày ' + days + '</label> <div class="col-md-9"> <input type="text" class="form-control" name="itinerary_name[]"><div class="input-group"> <a id=tour_image_' + days + ' data-input=tour_image_data_' + days + ' data-preview=tour_image_preview_' + days + ' class="btn btn-primary"> <i class="fa fa-picture-o"></i> Choose </a> <input id=tour_image_data_' + days + ' class="form-control itinerary-image-input" type="text" name="itinerary_image[]" data-id=' + days + '> </div><img id=tour_image_preview_' + days + ' style="margin-top:15px;max-height:100px;" > <textarea id="itinerary_desc_' + days + '" rows="5" class="form-control tour-info" name="itinerary_desc[]"></textarea> </div> </div>');
                CKEDITOR.replace('itinerary_desc_' + days, options);
                $('#tour_image_' + days).filemanager('image');
                RefreshSomeEventListener_2();
                count_days = days;
            });


            $(document).on('click', '#remove_image', function () {

                var id = $(this).data("id")

                console.log(id)
                $('#row_' + id).remove();
                count_images--;

            });


            $('#remove_day').click(function () {
                $('#dynamic_itinerary_' + days).remove();
                days--;
            })


            $(document).ready(function () {

                $(this).find('.tour-info').each(function (index) {
                    console.log(index + ": " + $(this).attr('id'));
                    CKEDITOR.replace($(this).attr('id'), options);

                });

                $(this).find('.images-lfm').each(function (index) {
                    console.log(index + ": " + $(this).attr('id'));
                    let id = $(this).attr('id');
                    $('#' + id).filemanager('image');
                });

                $(this).find('.tour-image-lfm').each(function (index) {
                    console.log(index + ": " + $(this).attr('id'));
                    let id = $(this).attr('id');
                    $('#' + id).filemanager('image');
                });

                $('.image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    console.log('Change id: '+id);
                    $("#holder_" + id).attr("src", data);
                    console.log('Change image input: ' +data)
                });

                $('.itinerary-image-input').change(function () {
                    var data = $(this).val();
                    var id = $(this).data("id")
                    $("#tour_image_preview_" + id).attr("src", data);
                    console.log('Change input: ' + data)
                });

                $('#tourtype_id').val({{$tour->tourtype_id}})
            });
        });
    </script>
@endsection
