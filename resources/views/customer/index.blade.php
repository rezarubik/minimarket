@extends('layouts.admin')
@section('headTitle')
<h4 class="page-title pull-left">Data Customer</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('admin.dashboard')}}">Home</a></li>
  <li><span>Customer</span></li>
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
  <div class="col-12 mt-3">
    @if(session('status'))
    <div class="alert-dismiss">
      <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span class="fa fa-times"></span>
        </button>
      </div>
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-12 mt-2">
    <div class="pull-right">
      <button type="submit" class="btn btn-primary btn-lg mb-3">
        <a style="color: #ffffff !important;" href="{{route('customer.create')}}"><i class="fa fa-plus"></i> Tambah</a>
      </button>
    </div>
  </div>
</div>
<div class="row">
  <!-- Data Customer -->
  <div class="col-12 mt-2">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Data Table Customer</h4>
        <div class="data-tables datatable-primary">
          <table id="dataTable2" class="text-center">
            <thead class="text-capitalize">
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($customers as $customer)
              <tr>
                <td> {{$customer->id_customer}} </td>
                <td> {{$customer->nama}} </td>
                <td>
                  <a href="{{route('customer.edit', $customer)}}" class="btn btn-xs btn-warning"><i class="ti-pencil"></i> Edit</a>
                  <form action="{{route('customer.destroy', $customer)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-xs btn-danger"><i class="ti-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Data Customer end -->
</div>
@stop

@section('javascriptForThisPage')
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
@endsection