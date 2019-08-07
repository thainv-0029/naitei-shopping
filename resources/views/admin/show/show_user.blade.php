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
                    <h2 class="card-header"><strong>@lang('admin.user.show')</strong></h2><br>
                    @if (Session::has('status'))
                    <div class="col-sm-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success">@lang('admin.success')</span> {{ Session::get('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    </div>
                    @endif
                    <form class="card-body card-block">
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.name')</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.status')</label>
                                    <input type="text" class="form-control" 
                                        @if ($user->status == 1)
                                            value="@lang('admin.user.status.act')"
                                        @else
                                            value="@lang('admin.user.status.inact')"
                                        @endif
                                    disabled>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.role')</label>
                                    <input type="text" class="form-control" 
                                        @if ($user->role == 1)
                                            value="@lang('admin.user.role.ad')"
                                        @else
                                            value="@lang('admin.user.role.user')"
                                        @endif
                                    disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.email')</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.phone')</label>
                                    <input type="text" class="form-control" value="{{ $user->phone_number }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.dis')</label>
                                    <input type="text" class="form-control" value="{{ $user->district }}" disabled>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.city')</label>
                                    <input type="text" class="form-control" value="{{ $user->city }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="password-input" class=" form-control-label">@lang('admin.user.table.coloum.add')</label>
                                    <textarea type="text" placeholder="{{ $user->address }}" class="form-control" disabled>{{ $user->address }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-1">
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <a href="{{ route('admin_user_edit', $user->id) }}" class="form-control btn btn-primary"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <a href="{{ route('admin_user_index') }}" class="form-control btn btn-danger"><i class="fa fa-mail-reply"></i></a>
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
