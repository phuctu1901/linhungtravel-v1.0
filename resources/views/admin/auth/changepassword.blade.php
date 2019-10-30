@extends('admin.layouts.master')

@section('main-content')

    <div class="main-content">
        <div class="content-wrapper">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Đổi mật khẩu</h4>
                            </div>
                            <div class="card-body">
                                <div class="px-3">

                                    <form class="form form-horizontal"
                                          action="{{url('/admin/changePassword')}} "
                                          method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <div class="form-body">
                                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                                <label for="new-password" class="col-md-4 control-label">Mật khẩu cũ</label>

                                                <div class="col-md-6">
                                                    <input id="current-password" type="password" class="form-control" name="current-password" required>

                                                    @if ($errors->has('current-password'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                                <label for="new-password" class="col-md-4 control-label">Mật khẩu mới</label>

                                                <div class="col-md-6">
                                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                                    @if ($errors->has('new-password'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="new-password-confirm" class="col-md-4 control-label">Xác nhận lại mật khẩu</label>

                                                    <div class="col-md-6">
                                                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
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
@endsection
