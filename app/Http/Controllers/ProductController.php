<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // $suppliers = Supplier::all();
        // dd($products);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('product.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = [
            'id_supplier' => $request->id_supplier,
            'nama_barang' => $request->nama_product,
            'satuan' => $request->satuan,
            'harga_beli' => $request->harga_beli,
            'total_pembelian' => $request->satuan * $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok
        ];
        // dd($data);
        Product::create($data);
        if (auth()->user()->id_user_role == 1) {
            return redirect()->route('master.product')->with('status', 'Data product berhasil ditambahkan');
        } elseif (auth()->user()->id_user_role == 2) {
            return redirect()->route('kasir.master.product')->with('status', 'Data product berhasil ditambahkan');
        } elseif (auth()->user()->id_user_role == 3) {
            return redirect()->route('gudang.master.product')->with('status', 'Data product berhasil ditambahkan!');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $suppliers = Supplier::all();
        return view('product.edit', compact('product', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = [
            'id_supplier' => $request->id_supplier,
            'nama_barang' => $request->nama_product,
            'satuan' => $request->satuan,
            'harga_beli' => $request->harga_beli,
            'total_pembelian' => $request->satuan * $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok
        ];
        $product->update($data);
        if (auth()->user()->id_user_role == 1) {
            return redirect()->route('master.product')->with('status', 'Data product berhasil diedit!');
        } elseif (auth()->user()->id_user_role == 2) {
            return redirect()->route('kasir.master.product')->with('status', 'Data product berhasil diedit!');
        } elseif (auth()->user()->id_user_role == 3) {
            return redirect()->route('gudang.master.product')->with('status', 'Data product berhasil diedit!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        if (auth()->user()->id_user_role == 1) {
            return redirect()->route('master.product')->with('status', 'Data product berhasil dihapus!');
        } elseif (auth()->user()->id_user_role == 2) {
            return redirect()->route('kasir.master.product')->with('status', 'Data product berhasil dihapus!');
        } elseif (auth()->user()->id_user_role == 3) {
            return redirect()->route('gudang.master.product')->with('status', 'Data product berhasil dihapus!');
        }
    }

    /**
     * todo Export to Excel
     */
    public function exportToExcel()
    {
        return Excel::download(new ProductExport, 'Product.xlsx');
    }
}
