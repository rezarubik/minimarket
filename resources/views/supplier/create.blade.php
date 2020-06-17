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
        <form action="
        @if(auth()->user()->id_user_role == 1)
        {{route('supplier.store')}}
        @elseif(auth()->user()->id_user_role == 3)
        {{route('gudang.supplier.store')}}
        @endif
        " method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Supplier</label>
            <input name="nama_supplier" type="text" class="form-control @error('nama_supplier') is-invalid  @enderror" id="nama" placeholder="Masukkan nama supplier" value="{{old('nama_supplier')}}">
            @error('nama_supplier')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat_supplier" type="text" class="form-control @error('alamat_supplier') is-invalid @enderror " id="alamat" placeholder="Masukkan alamat supplier" value="{{old('alamat_supplier')}}">
            @error('alamat_supplier')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input name="nomor_telepon_supplier" type="text" min="0" class="form-control @error('nomor_telepon_supplier') is-invalid @enderror" id="nomor_telepon" placeholder="Masukkan nomor telepon supplier" value="{{old('nomor_telepon_supplier')}}">
            @error('nomor_telepon_supplier')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="
          @if(auth()->user()->id_user_role == 1)
          {{route('master.supplier')}}
          @elseif(auth()->user()->id_user_role == 3)
          {{route('gudang.master.supplier')}}
          @endif
          " class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop