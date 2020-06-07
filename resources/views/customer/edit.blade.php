@extends('layouts.admin')
@section('title', 'Minimarket | Edit Customer')
@section('headTitle')
<h4 class="page-title pull-left">Edit Data Customer</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('master.customer')}}">Customer</a></li>
  <li><span>Edit Customer</span></li>
</ul>
@stop
@section('content')
<div class="row">
  <!-- Form start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Edit Data Customer</h4>
        <form action="{{route('customer.update', $customer)}}" method="POST">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="nama">Nama Customer</label>
            <input name="nama_customer" type="text" class="form-control" id="nama" value="{{$customer->nama}}">
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Edit</button>
          <a href="{{route('master.customer')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop