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
            @if ( isset($message) )
                <div class="col-sm-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">@lang('admin.success')</span> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div>
            @elseif ( isset($errMessage) )
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-danger">@lang('admin.error')</span> {{ $errMessage }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif ( $errors->any() )
                <div class="col-sm-12">
                    @foreach ( $errors->all() as $error )
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-danger">@lang('admin.error')</span> {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('admin.dashboard.table.user')</strong>
                        <a href="{{ route('admin_user_create') }}" class="btn btn-outline-secondary float-right"><i class="fa fa-plus"></i>&nbsp; @lang('admin.user.create')</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>@lang('admin.user.table.coloum.name')</th>
                                <th>@lang('admin.user.table.coloum.email')</th>
                                <th>@lang('admin.user.table.coloum.phone')</th>
                                <th>@lang('admin.user.table.coloum.add')</th>
                                <th>@lang('admin.user.table.coloum.status')</th>
                                <th>@lang('admin.user.table.coloum.action')</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><a href="{{ route('admin_user_show', $user->id) }}" class="username"><b>{{ $user->name }}</b></a></td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>
                                            @if ( $user->status == 1)
                                                <h2 class="badge badge-success status_user">@lang('admin.user.status.act')</h2>
                                            @else
                                                <div class="badge badge-danger status_user">@lang('admin.user.status.inact')</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-5">
                                                    <a type="button" href="{{ route('admin_user_edit', $user->id) }}" class="btn btn-outline-primary"><i class="fa fa-pencil"></i></a>
                                                </div>
                                                <div class="col-5">
                                                    <a type="button" href="{{ route('admin_user_destroy', $user->id) }}" class="btn btn-outline-danger"><i class="fa fa-trash-o"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@include('admin.script.datatable')
@endsection
