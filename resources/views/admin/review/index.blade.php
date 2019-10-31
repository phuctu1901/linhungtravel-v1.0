@extends('admin.layouts.master')

@section('main-content')

    <div class="main-content">
        <div class="content-wrapper"><!--Extended Table starts-->

            <section id="extended">
                <div class="row">
                    <div class="col-sm-12">
                        <?php //Hiển thị thông báo thành công?>
                        @if ( Session::has('success') )
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        <?php //Hiển thị thông báo thành công?>
                        @if ( Session::has('delete_success') )
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('delete_success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" style="display:inline-block;">CÁC BÌNH LUẬN</h4>
                                <a type="button" name="add" id="add" class="btn btn-success pull-right"
                                        style="display: inline-block" href="/admin/review/add">Thêm bình luận
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <table class="table table-responsive-md-md text-center">
                                        <thead>
                                        <tr>
                                            <th>Tác giả</th>
                                            <th>Nội dung</th>
                                            <th>Công việc</th>
                                            <th>Ảnh đại diện</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reviews as  $review)
                                            <tr>
                                                {{--<td>--}}
                                                {{--<div class="custom-control custom-checkbox m-0">--}}
                                                {{--<input type="checkbox" class="custom-control-input" id="item1">--}}
                                                {{--<label class="custom-control-label" for="item1"></label>--}}
                                                {{--</div>--}}
                                                {{--</td>--}}
                                                <td>{{$review->author}}</td>
                                                <td>{{$review->content}}</td>
                                                <td>{{$review->job}}</td>
                                                <td><img style="draggable:false;width:50px;height:50px;-webkit-border-radius: 50%;" src="{{$review->avatar}}"></td>


                                                <td>
                                                    <a class="success p-0" data-original-title="" title=""
                                                       href="/admin/review/edit/{{$review->id}}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title=""
                                                       href="/admin/review/delete/{{$review->id}}">
                                                        <i class="ft-x font-medium-3 mr-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Extended Table Ends-->
        </div>
    </div>

@endsection
