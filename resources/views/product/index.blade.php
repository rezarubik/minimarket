@extends('layouts.admin')
@section('headTitle')
<h4 class="page-title pull-left">Data Produk</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('admin.dashboard')}}">Home</a></li>
  <li><span>Produk</span></li>
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
        <a style="color: #ffffff !important;" href="{{route('product.create')}}"><i class="fa fa-plus"></i> Tambah</a>
      </button>
    </div>
  </div>
</div>
<div class="row">
  <!-- Data Produk -->
  <div class="col-12 mt-2">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Data Table Produk</h4>
        <div class="data-tables datatable-primary">
          <table id="dataTable2" class="text-center">
            <thead class="text-capitalize">
              <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Nama Produk</th>
                <th>Satuan</th>
                <th>Harga Beli</th>
                <th>Total Pembelian</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td> {{$product->id_product}} </td>
                <?php
                // var_dump($product->supplier());
                // die();
                ?>
                <td> {{$product->supplier->nama}} </td>
                <td> {{$product->nama_barang}} </td>
                <td> {{$product->satuan}} </td>
                <td> {{$product->harga_beli}} </td>
                <td> {{$product->total_pembelian}} </td>
                <td> {{$product->harga_jual}} </td>
                <td> {{$product->stok}} </td>
                <td>
                  <a href="{{route('product.edit', $product)}}" class="btn btn-xs btn-warning"><i class="ti-pencil"></i> Edit</a>
                  <form action="{{route('product.destroy', $product)}}" method="post">
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
  <!-- Data Produk end -->
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