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

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">@lang('admin.dashboard.table.user')</strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('admin.user.table.coloum.id')</th>
                  <th>@lang('admin.user.table.coloum.name')</th>
                  <th>@lang('admin.user.table.coloum.email')</th>
                  <th>@lang('admin.user.table.coloum.phone')</th>
                  <th>@lang('admin.user.table.coloum.add')</th>
                  <th>@lang('admin.user.table.coloum.dis')</th>
                  <th>@lang('admin.user.table.coloum.city')</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone_number}}</td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->district}}</td>
                  <td>{{$user->city}}</td>
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