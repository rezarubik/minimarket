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
        <form action="
        @if(auth()->user()->id_user_role == 1)
        {{route('customer.store')}}
        @elseif(auth()->user()->id_user_role == 2)
        {{route('kasir.customer.store')}}
        @endif
        " method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Customer</label>
            <input name="nama_customer" type="text" class="form-control @error('nama_customer') is-invalid @enderror" id="nama" placeholder="Masukkan nama customer">
            @error('nama_customer')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="
        @if(auth()->user()->id_user_role == 1)
        {{route('master.customer')}}
        @elseif(auth()->user()->id_user_role == 2)
        {{route('kasir.master.customer')}}
        @endif
        " class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop