<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacust = Customer::all();
        return view('customer.data-customer', compact('datacust'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create-customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Customer::create([
            'namacust' => $request->namacust,
            'alamatcust' => $request->alamatcust,
            'telpcust' => $request->telpcust,
        ]);

        return redirect('/customer/data-customer')->with('toast_success', 'Data Berhasil Disimpan');
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
     * @param  string  $idcust
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cust = Customer::findorfail($id);
        return view('/customer/edit-customer',compact('cust'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cust = Customer::findorfail($id);
        $cust->update($request->all());

        return redirect('/customer/data-customer')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cust = Customer::findorfail($id);
        $cust->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
