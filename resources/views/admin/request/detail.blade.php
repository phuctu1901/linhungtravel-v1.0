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
                                <h4 class="card-title" id="horz-layout-basic">Chi tiết yêu cầu</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/request/editRequest')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <input type="hidden" id="id" name="id" value="{{$request->id}}">
                                            <h4 class="form-section"><i class="ft-user"></i> Thông tin liên hệ</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Tên người gởi yêu cầu: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                           type="text"
                                                           name="name" value="{{$request->name}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Email: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="email"
                                                            name="email" value="{{$request->email}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Số điện thoại: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="text"
                                                            name="phone" value="{{$request->phone}}" readonly>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-edit-3"></i> Nội dung yêu cầu</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Tiêu đề: </label>
                                                <div class="col-md-9">
                                                    <input  class="form-control"
                                                            type="text"
                                                            name="name" value="{{$request->title}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">Nội dung: </label>
                                                <div class="col-md-9">
                                                    <textarea  class="form-control"
                                                            type="text"
                                                               name="message" readonly><?php echo json_decode($request->content) ?></textarea>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="ft-check-circle"></i>Trạng thái</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Trạng thái: </label>
                                                <div class="col-md-9">

                                                    <select id="isRep" name="isRep"
                                                            class="form-control">
                                                        <option value="0" selected="" disabled="">Chọn trạng thái cho danh
                                                            mục
                                                        </option>
                                                        <option  value=0>Chưa xử lý</option>
                                                        <option  value=1>Đã xử lý</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-raised btn-primary">
                                                <i class="fa fa-check-square-o"></i>Cập nhật trạng thái
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

    <script>
        $(document).ready(function () {


            $('#isRep').val({{$request->isRep}});
        });
    </script>
@endsection
