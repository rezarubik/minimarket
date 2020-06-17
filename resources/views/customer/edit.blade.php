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
        <form action="
        @if(auth()->user()->id_user_role == 1)
        {{route('customer.update', $customer)}}
        @elseif(auth()->user()->id_user_role == 2)
        {{route('kasir.customer.update', $customer)}}
        @endif
        " method="POST">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="nama">Nama Customer</label>
            <input name="nama_customer" type="text" class="form-control @error('nama_customer') is-invalid @enderror
            " id="nama" value="{{$customer->nama}}">
            @error('nama_customer')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Edit</button>
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