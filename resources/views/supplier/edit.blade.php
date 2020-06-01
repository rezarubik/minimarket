@extends('layouts.admin')
@section('headTitle')
<h4 class="page-title pull-left">Edit Data Supplier</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('master.supplier')}}">Supplier</a></li>
  <li><span>Edit Supplier</span></li>
</ul>
@stop
@section('content')
<div class="row">
  <!-- Form start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Edit Data Supplier</h4>
        <form action="{{route('supplier.update', $sp)}}" method="POST">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="nama">Nama Supplier</label>
            <input name="nama_supplier" type="text" class="form-control" id="nama" value="{{$sp->nama}}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat_supplier" type="text" class="form-control" id="alamat" value="{{$sp->alamat}}">
          </div>
          <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input name="nomor_telepon_supplier" type="number" min="0" class="form-control" id="nomor_telepon" value="{{$sp->nomor_telepon}}">
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Edit</button>
          <a href="{{route('master.supplier')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop