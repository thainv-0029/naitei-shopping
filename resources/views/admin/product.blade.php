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
          <li class="active">@lang('admin.product.name')</li>
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
            <strong class="card-title">@lang('admin.dashboard.table.product')</strong>
            <button type="button" class="btn btn-outline-secondary float-right"><i class="fa fa-plus"></i>&nbsp; Create</button>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('admin.product.table.coloum.id')</th>
                  <th>@lang('admin.product.table.coloum.name')</th>
                  <th>@lang('admin.product.table.coloum.des')</th>
                  <th>@lang('admin.product.table.coloum.price')</th>
                  <th>@lang('admin.product.table.coloum.img')</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $p)
                <tr>
                  <td>{{$p->id}}</td>
                  <td>{{$p->name}}</td>
                  <td>{{$p->description}}</td>
                  <td>{{$p->price}}</td>
                  <td>{{$p->img}}</td>
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