@extends('layouts.admin')
@section('title', 'Minimarket | Tambah Supplier')
@section('headTitle')
<h4 class="page-title pull-left">Tambah Data Supplier</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('master.supplier')}}">Supplier</a></li>
  <li><span>Tambah Supplier</span></li>
</ul>
@stop
@section('content')
<div class="row">
  <!-- Form start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Tambah Data Supplier</h4>
        <form action="{{route('supplier.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Supplier</label>
            <input name="nama_supplier" type="text" class="form-control" id="nama" placeholder="Masukkan nama supplier">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat_supplier" type="text" class="form-control" id="alamat" placeholder="Masukkan alamat supplier">
          </div>
          <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input name="nomor_telepon_supplier" type="number" min="0" class="form-control" id="nomor_telepon" placeholder="Masukkan nomor telepon supplier">
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="{{route('master.supplier')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop