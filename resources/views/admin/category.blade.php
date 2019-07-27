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
          <li class="active">@lang('admin.category.name')</li>
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
            <strong class="card-title">@lang('admin.dashboard.table.category')</strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('admin.category.table.coloum.id')</th>
                  <th>@lang('admin.category.table.coloum.name')</th>
                  <th>@lang('admin.category.table.coloum.des')</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $c)
                <tr>
                  <td>{{$c->id}}</td>
                  <td>{{$c->name}}</td>
                  <td>{{$c->des}}</td>
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