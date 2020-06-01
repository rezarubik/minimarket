<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama_supplier,
            'alamat' => $request->alamat_supplier,
            'nomor_telepon' => $request->nomor_telepon_supplier
        ];
        Supplier::create($data);
        return redirect()->route('master.supplier')->with('status', 'Supplier berhasil ditambahkan!');
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
    public function edit(Supplier $sp)
    {
        // dd($sp);
        return view('supplier.edit', compact('sp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $sp)
    {
        $data = [
            'nama' => $request->nama_supplier,
            'alamat_supplier' => $request->alamat_supplier,
            'nomor_telepon' => $request->nomor_telepon_supplier
        ];
        // dd($data);
        $sp->update($data);
        return redirect()->route('master.supplier')->with('status', 'Data supplier berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $sp)
    {
        $sp->delete();
        return redirect()->route('master.supplier')->with('status', 'Data supplier berhasil dihapus');
    }
}
