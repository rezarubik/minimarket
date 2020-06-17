<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Exports\CustomerExport;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
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
        $customers = Customer::all();
        // dd($customers);
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $data = [
            'nama' => $request->nama_customer
        ];
        Customer::create($data);
        if (auth()->user()->id_user_role == 1) {
            return redirect()->route('master.customer')->with('status', 'Data customer berhasil ditambahkan');
        } elseif (auth()->user()->id_user_role == 2) {
            return redirect()->route('kasir.master.customer')->with('status', 'Data customer berhasil ditambahkan');
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
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $data = [
            'nama' => $request->nama_customer
        ];
        // dd($data);
        $customer->update($data);
        if (auth()->user()->id_user_role == 1) {
            return redirect()->route('master.customer')->with('status', 'Data customer berhasil diedit!');
        } elseif (auth()->user()->id_user_role == 2) {
            return redirect()->route('kasir.master.customer')->with('status', 'Data customer berhasil diedit!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        if (auth()->user()->id_user_role == 1) {
            return redirect()->route('master.customer')->with('status', 'Data customer berhasil dihapus!');
        } elseif (auth()->user()->id_user_role == 2) {
            return redirect()->route('kasir.master.customer')->with('status', 'Data customer berhasil dihapus!');
        }
    }

    /**
     * todo Export to Excel
     */
    public function exportToExcel()
    {
        return Excel::download(new CustomerExport, 'Customer.xlsx');
    }
}
