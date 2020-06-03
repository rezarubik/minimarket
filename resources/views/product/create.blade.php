@extends('layouts.admin')
@section('headTitle')
<h4 class="page-title pull-left">Tambah Data Produk</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('master.product')}}">Produk</a></li>
  <li><span>Tambah Produk</span></li>
</ul>
@stop
@section('content')
<div class="row">
  <!-- Form start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Tambah Data Produk</h4>
        <form action="{{route('product.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="suppliers" class="col-form-label">Supplier</label>
            <select name="id_supplier" class="custom-select">
              <option selected>Pilih Supplier</option>
              @foreach($suppliers as $supplier)
              <option value="{{$supplier->id_supplier}}"> {{$supplier->nama}} </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nama_product">Nama Produk</label>
            <input name="nama_product" type="text" class="form-control" id="nama_product" placeholder="Masukkan nama produk">
          </div>
          <div class="form-group">
            <label for="satuan">Satuan</label>
            <input name="satuan" type="number" class="form-control" id="satuan" placeholder="Masukkan jumlah satuan" min="0">
          </div>
          <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input name="harga_beli" type="number" class="form-control" id="harga_beli" placeholder="Masukkan nama product" min="0">
          </div>
          <!-- <div class="form-group">
            <label for="total_pembelian">Total Pembelian</label>
            <input name="total_pembelian" type="text" class="form-control" id="total_pembelian" placeholder="Masukkan nama product">
          </div> -->
          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input name="harga_jual" type="number" class="form-control" id="harga_jual" placeholder="Masukkan nama product" min="0">
          </div>
          <div class="form-group">
            <label for="stok">Stok</label>
            <input name="stok" type="number" class="form-control" id="harga_jual" placeholder="Masukkan nama product" min="0">
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="{{route('master.product')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop