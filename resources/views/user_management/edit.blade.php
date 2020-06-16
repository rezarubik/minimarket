@extends('layouts.admin')
@section('title', 'Minimarket | Edit User Management')
@section('headTitle')
<h4 class="page-title pull-left">User Management</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('admin.dashboard')}}">Home</a></li>
  <li><span>Edit User Management</span></li>
</ul>
@stop
@section('css')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@stop
@section('content')
<div class="row">
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Edit Data Users</h4>
        <form action="{{route('user.management.update', $user)}}" method="POST">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="nama_user">Nama User</label>
            <input name="nama_user" type="text" class="form-control @error('nama_user') is-invalid @enderror " id="nama_user" value="{{$user->name}}">
            @error('nama_user')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <div class="form-group">
            <label for="email_user">Email</label>
            <input name="email_user" type="email" class="form-control @error('email_user') is-invalid @enderror " id="email_user" value="{{$user->email}}">
            @error('email_user')
            <p class="text-danger"> {{$message}} Data yang diinputkan adalah {{old('email_user')}} </p>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror " id="email" value="{{$user->password}}">
            @error('password')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select name="role" class="custom-select">
              @foreach($roles as $role)
              <option value="{{$role->id_user_role}}" @if($role->id_user_role === $user->id_user_role) selected @endif > {{$role->role}} </option>
              @endforeach
            </select>
          </div>
          @error('role')
          <p class="text-danger"> {{$message}} </p>
          @enderror
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="{{route('master.user.management')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
</div>
@stop