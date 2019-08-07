@extends('admin.layouts.app')

@section('content')
<!-- Header-->
@include('admin.layouts.header')
<!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>@lang('admin.dashboard.name')</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">@lang('admin.user.name')</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="container">
                <div class="card">
                    <h2 class="card-header"><strong>@lang('admin.user.create')</strong></h2><br>
                    @if (isset ($message) )
                    <div class="col-sm-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-success">@lang('admin.success')</span> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @elseif ($errors->any())
                        <div class="col-sm-12">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-danger">@lang('admin.error')</span> {{ $error }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <form class="card-body card-block" method="POST" action="{{ route('admin_user_store') }}">
                        @csrf
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.name')</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.role')</label>
                                    <select name="role" class="form-control">
                                        @foreach ( $roles as $role )
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.email')</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.phone')</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.pass')</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.confirm')</label>
                                    <input type="password" class="form-control" name="confirm">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.add')</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.dis')</label>
                                    <input type="text" class="form-control" name="district">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.city')</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-success"><i class="fa fa-plus"></i> @lang('admin.user.create')</button>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <a href="{{ route('admin_user_index') }}" class="form-control btn btn-danger"><i class="fa fa-mail-reply"></i> @lang('admin.user.cancel')</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@include('admin.script.datatable')
@endsection
