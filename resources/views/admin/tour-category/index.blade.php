@extends('admin.layouts.master')

@section('main-content')

    <div class="main-content">
        <div class="content-wrapper"><!--Extended Table starts-->

            <section id="extended">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" style="display:inline-block;">DANH MỤC CHI TIẾT</h4>
                                <a type="button" name="add" id="add" class="btn btn-success pull-right"
                                        style="display: inline-block" href="/admin/tourcategory/add">Thêm danh mục
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <table class="table table-responsive-md-md text-center">
                                        <thead>
                                        <tr>
                                            <th>Tên danh mục</th>
                                            <th>Danh mục cha</th>
                                            <th>Tổng số lượng tour</th>
                                            <th>Trạng thái</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tourcategories as  $tourcategory)
                                            <tr>
                                                {{--<td>--}}
                                                {{--<div class="custom-control custom-checkbox m-0">--}}
                                                {{--<input type="checkbox" class="custom-control-input" id="item1">--}}
                                                {{--<label class="custom-control-label" for="item1"></label>--}}
                                                {{--</div>--}}
                                                {{--</td>--}}
                                                <td>{{$tourcategory->title}}</td>
                                                <td>@if (isset($tourcategory->tourcategoryparent)){{$tourcategory->tourcategoryparent->title}} @else Trống @endif</td>
                                                <td>N/A</td>
                                                <td>{{$tourcategory->isActive}}</td>
                                                <td>
                                                    <a class="info p-0" data-original-title="" title=""
                                                       href="/admin/tourcategory/detail/{{$tourcategory->id}}">
                                                        <i class="ft-info font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="success p-0" data-original-title="" title=""
                                                       href="/admin/tourcategory/edit/{{$tourcategory->id}}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title=""
                                                       href="/admin/tourcategory/delete/{{$tourcategory->id}}">
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
