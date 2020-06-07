@extends('layouts.admin')
@section('title', 'Minimarket | Tambah Customer')
@section('headTitle')
<h4 class="page-title pull-left">Tambah Data Customer</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('master.customer')}}">Customer</a></li>
  <li><span>Tambah Customer</span></li>
</ul>
@stop
@section('content')
<div class="row">
  <!-- Form start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Tambah Data Customer</h4>
        <form action="{{route('customer.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Customer</label>
            <input name="nama_customer" type="text" class="form-control" id="nama" placeholder="Masukkan nama customer">
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="{{route('master.customer')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop