@extends('admin.layouts.master')

@section('main-content')

        <div class="main-content">
            <div class="content-wrapper"><!--Extended Table starts-->

                <section id="extended">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">DANH SÁCH TOUR</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <table class="table table-responsive-md-md">
                                            <thead>
                                            <tr>
                                                <th>Tên tour</th>
                                                <th>Giá</th>
                                                <th>Thời gian</th>
                                                <th>Danh mục</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($tours as $tour)
                                            <tr>
                                                <td>{{$tour->title}}</td>
                                                <td>{{$tour->adult_price}}</td>
                                                <td>{{$tour->duration}}</td>
                                                <td>{{$tour->category_id}}</td>
                                                <td>
                                                    <a class="info p-0" data-original-title="" title="">
                                                        <i class="ft-info font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="success p-0" data-original-title="" title=""  href="/admin/tour/edit/{{$tour->id}}">
                                                        <i class="ft-edit-2 font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="danger p-0" data-original-title="" title="" href="/admin/tour/delete/{{$tour->id}}">
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
