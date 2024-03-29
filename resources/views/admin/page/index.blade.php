@extends('admin.layouts.master')

@section('main-content')

    <div class="main-content">
        <div class="content-wrapper"><!--Extended Table starts-->

            <section id="extended">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" style="display:inline-block;">DANH SÁCH TRANG TĨNH</h4>
                                <a type="button" name="add" id="add" class="btn btn-success pull-right"
                                        style="display: inline-block" href="/admin/page/add">Thêm trang tĩnh
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <table class="table table-responsive-md-md text-center">
                                        <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Slug</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pages as  $page)
                                            <tr>

                                                <td>{{$page->title}}</td>
                                                <td>{{$page->slug}}</td>
                                                <td>{{$page->isActive}}</td>
                                                <td>
                                                    <a class="info p-0" data-original-title="" title=""
                                                       href="/admin/page/detail/{{$page->id}}">
                                                        <i class="ft-info font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="success p-0" data-original-title="" title=""
                                                       href="/admin/page/edit/{{$page->id}}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title=""
                                                       href="/admin/page/delete/{{$page->id}}">
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
