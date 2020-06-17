@extends('layouts.admin')
@section('title', 'Minimarket | Edit Supplier')
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
        <form action="
        @if(auth()->user()->id_user_role == 1)
        {{route('supplier.update', $sp)}}
        @elseif(auth()->user()->id_user_role == 3)
        {{route('gudang.supplier.update', $sp)}}
        @endif
        " method="POST">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="nama">Nama Supplier</label>
            <input name="nama_supplier" type="text" class="form-control @error('nama_supplier') is-invalid  @enderror " id="nama" value="{{$sp->nama}}">
            @error('nama_supplier')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat_supplier" type="text" class="form-control @error('alamat_supplier') is-invalid  @enderror" id="alamat" value="{{$sp->alamat}}">
            @error('alamat_supplier')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input name="nomor_telepon_supplier" type="text" min="0" class="form-control @error('nomor_telepon_supplier') is-invalid  @enderror" id="nomor_telepon" value="{{$sp->nomor_telepon}}">
            @error('nomor_telepon_supplier')
            <div class="alert alert-danger mt-2"> {{$message}} Inputan yang Anda masukkan adalah {{old('nomor_telepon_supplier')}} </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Edit</button>
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