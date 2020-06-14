@extends('layouts.admin')
@section('title', 'Minimarket | Tambah Role')
@section('headTitle')
<h4 class="page-title pull-left">Tambah Data Role</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('master.role')}}">Role</a></li>
  <li><span>Tambah Role</span></li>
</ul>
@stop
@section('content')
<div class="row">
  <!-- Form start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Tambah Data Role</h4>
        <form action="{{route('role.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Role</label>
            <input name="role" type="text" class="form-control @error('role') is-invalid @enderror" id="role" placeholder="Masukkan nama role">
            @error('role')
            <div class="alert alert-danger mt-2"> {{$message}} </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="{{route('master.role')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop