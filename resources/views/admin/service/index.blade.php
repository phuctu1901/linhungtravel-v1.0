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
                                <h4 class="card-title" style="display:inline-block;">DANH SÁCH DỊCH VỤ</h4>
                                <a type="button" name="add" id="add" class="btn btn-success pull-right"
                                        style="display: inline-block" href="/admin/service/add">Thêm dịch vụ
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <table class="table table-responsive-md-md text-center">
                                        <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Slug</th>
                                            <th>Giá bán</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as  $service)
                                            <tr>

                                                <td>{{$service->title}}</td>
                                                <td>{{$service->slug}}</td>
                                                <td>{{$service->giasaukhigiam}}</td>
                                                <td>{{$service->isActive}}</td>
                                                <td>
                                                    <a class="info p-0" data-original-title="" title=""
                                                       href="/admin/service/detail/{{$service->id}}">
                                                        <i class="ft-info font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="success p-0" data-original-title="" title=""
                                                       href="/admin/service/edit/{{$service->id}}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title=""
                                                       href="/admin/service/delete/{{$service->id}}">
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
