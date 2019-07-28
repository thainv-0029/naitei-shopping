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

      <div class="col-md-9" style="margin-left: 12.5%">
        <div class="card">
          <h2 class="card-header"><strong>Create Account</strong></h2><br>
          @if(isset($message))
          <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
              <span class="badge badge-pill badge-success">@lang('admin.success')</span> {{$message}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          @elseif($errors->any())
          <div class="col-sm-12">
            @foreach ($errors->all() as $error)
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
              <span class="badge badge-pill badge-danger">@lang('admin.error')</span> {{$error}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endforeach
          </div>
          @endif
          <form class="card-body card-block" method="POST" action="{{route('create_user')}}">
            @csrf
            <div class="row form-group">
              <div class="col-8">
                <div class="form-group">
                  <input type="text" placeholder="Username..." class="form-control" name="username">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <select name="role" class="form-control">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" placeholder="Email..." class="form-control" name="email">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Phone..." class="form-control" name="phone">
            </div>
            <div class="row form-group">
              <div class="col-6">
                <div class="form-group">
                  <input type="password" placeholder="Password..." class="form-control" name="password">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input type="password" placeholder="Confirm..." class="form-control" name="confirm">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" placeholder="Address..." class="form-control" name="address">
            </div>
            <div class="row form-group">
              <div class="col-6">
                <div class="form-group">
                  <input type="text" placeholder="District..." class="form-control" name="district">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input type="text" placeholder="City..." class="form-control" name="city">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="form-control btn btn-success" value="Create">
            </div>
            <div class="form-group">
              <a href="{{route('admin_user')}}" class="form-control btn btn-danger">Cancel</a>
            </div>
          </form>
        </div>
      </div>


    </div>
  </div><!-- .animated -->
</div><!-- .content -->
@include('admin.script.datatable')

@endsection