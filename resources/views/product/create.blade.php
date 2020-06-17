@extends('layouts.admin')
@section('title', 'Minimarket | Tambah Produk')
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
        <form action="
        @if(auth()->user()->id_user_role == 1)
        {{route('product.store')}}
        @elseif(auth()->user()->id_user_role == 2)
        {{route('kasir.product.store')}}
        @elseif(auth()->user()->id_user_role == 3)
        {{route('gudang.product.store')}}
        @endif
        " method="POST">
          @csrf
          <div class="form-group">
            <label for="suppliers" class="col-form-label">Supplier</label>
            <select name="id_supplier" class="custom-select @error('id_supplier') is-invalid @enderror ">
              <option value="" selected>Pilih Supplier</option>
              @foreach($suppliers as $supplier)
              <option value="{{$supplier->id_supplier}}"> {{$supplier->nama}} </option>
              @endforeach
            </select>
            @error('id_supplier')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_product">Nama Produk</label>
            <input name="nama_product" type="text" class="form-control @error('nama_product') is-invalid @enderror " id="nama_product" placeholder="Masukkan nama produk">
            @error('nama_product')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <div class="form-group">
            <label for="satuan">Satuan</label>
            <input name="satuan" type="text" class="form-control @error('satuan') is-invalid @enderror " id="satuan" placeholder="Masukkan jumlah satuan" min="0">
            @error('satuan')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input name="harga_beli" type="text" class="form-control @error('harga_beli') is-invalid @enderror " id="harga_beli" placeholder="Masukkan nama product" min="0">
            @error('harga_beli')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <!-- <div class="form-group">
            <label for="total_pembelian">Total Pembelian</label>
            <input name="total_pembelian" type="text" class="form-control @error('total_pembelian') is-invalid @enderror " id="total_pembelian" placeholder="Masukkan nama product">
            @error('total_pembelian')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div> -->
          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input name="harga_jual" type="text" class="form-control @error('harga_jual') is-invalid @enderror " id="harga_jual" placeholder="Masukkan nama product" min="0">
            @error('harga_jual')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <div class="form-group">
            <label for="stok">Stok</label>
            <input name="stok" type="text" class="form-control @error('stok') is-invalid @enderror " id="harga_jual" placeholder="Masukkan nama product" min="0">
            @error('stok')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
          <a href="
          @if(auth()->user()->id_user_role == 1)
          {{route('master.product')}}
          @elseif(auth()->user()->id_user_role == 2)
          {{route('kasir.master.product')}}
          @elseif(auth()->user()->id_user_role == 3)
          {{route('gudang.master.product')}}
          @endif
          " class="btn btn-warning mt-4 pr-4 pl-4">Batal</a>
        </form>
      </div>
    </div>
  </div>
  <!-- Form end -->
</div>
@stop