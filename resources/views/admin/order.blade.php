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
          <li class="active">@lang('admin.order.name')</li>
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
            <strong class="card-title">@lang('admin.dashboard.table.order')</strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('admin.order.table.coloum.id')</th>
                  <th>@lang('admin.order.table.coloum.recei')</th>
                  <th>@lang('admin.order.table.coloum.add')</th>
                  <th>@lang('admin.order.table.coloum.pay')</th>
                  <th>@lang('admin.order.table.coloum.total')</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->receiver}}</td>
                  <td>{{$order->receiver_address}}</td>
                  <td>{{$order->payment}}</td>
                  <td>{{$order->total}}</td>
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