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
                                    <h4 class="card-title" style="display:inline-block;">Quản lý người dùng</h4>
                                    <a type="button" name="add" id="add" class="btn btn-success pull-right"
                                       style="display: inline-block" href="/admin/user/add">Thêm người dùng
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <table class="table table-responsive-md-md text-center">
                                            <thead>
                                            <tr>
                                                <th>Tên đăng nhập</th>
                                                <th>Tên người dùng</th>
                                                <th>Email</th>
                                                <th>Quyền</th>

{{--                                                <th>Tổng số lượng tour</th>--}}
                                                <th>Trạng thái</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as  $user)
                                            <tr>
                                                {{--<td>--}}
                                                    {{--<div class="custom-control custom-checkbox m-0">--}}
                                                        {{--<input type="checkbox" class="custom-control-input" id="item1">--}}
                                                        {{--<label class="custom-control-label" for="item1"></label>--}}
                                                    {{--</div>--}}
                                                {{--</td>--}}
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role}}</td>

{{--                                                <td>{{ \App\TourCategory::where(['parent_id' => $tourparent->id])->get()->count() }}</td>--}}
{{--                                                <td>{{ \App\TourTour::where(['parent_id' => $tourparent->id])->get()->count() }}</td>--}}
                                                <td>{{$user->isActive}}</td>
                                                <td>
                                                    <a class="info p-0" data-original-title="" title=""  href="/admin/user/detail/{{$user->id}}">
                                                        <i class="ft-info font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="success p-0" data-original-title="" title=""  href="/admin/user/edit/{{$user->id}}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title="" href="/admin/user/delete/{{$user->id}}">
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
