@extends('layouts.admin')
@section('headTitle')
<h4 class="page-title pull-left">Edit Data Product</h4>
<ul class="breadcrumbs pull-left">
  <li><a href="{{route('master.product')}}">Product</a></li>
  <li><span>Edit Product</span></li>
</ul>
@stop
@section('content')
<div class="row">
  <!-- Form start -->
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Edit Data Product</h4>
        <form action="{{route('product.update', $product)}}" method="POST">
          @csrf
          @method('patch')
          <div class="form-group">
            <label for="suppliers" class="col-form-label">Supplier</label>
            <select name="id_supplier" class="custom-select">
              @foreach($suppliers as $supplier)
              <option value="{{$supplier->id_supplier}}" @if($supplier->id_supplier === $product->id_supplier)
                selected
                @endif
                > {{$supplier->nama}} </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nama_product">Nama Produk</label>
            <input name="nama_product" type="text" class="form-control" id="nama_product" value="{{$product->nama_barang}}">
          </div>
          <div class="form-group">
            <label for="satuan">Satuan</label>
            <input name="satuan" type="number" class="form-control" id="satuan" value="{{$product->satuan}}">
          </div>
          <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input name="harga_beli" type="number" class="form-control" id="harga_beli" value="{{$product->harga_beli}}">
          </div>
          <!-- <div class="form-group">
            <label for="total_pembelian">Total Pembelian</label>
            <input name="total_pembelian" type="text" class="form-control" id="total_pembelian" value="{{$product->total_pembelian}}">
          </div> -->
          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input name="harga_jual" type="number" class="form-control" id="harga_jual" value="{{$product->harga_jual}}">
          </div>
          <div class="form-group">
            <label for="stok">Stok</label>
            <input name="stok" type="number" class="form-control" id="harga_jual" value="{{$product->stok}}">
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Edit</button>
          <a href="{{route('master.product')}}" class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop