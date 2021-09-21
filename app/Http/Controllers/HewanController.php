<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datahwn = Hewan::with('customer')->paginate(10);
        return view('hewan.data-hewan', compact('datahwn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cust = Customer::all();
        return view('hewan.create-hewan',compact('cust'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hewan::create([
            'namahewan' => $request->namahewan,
            'jenishewan' => $request->jenishewan,
            'customer_id' => $request->customer_id,
        ]);

        return redirect('/hewan/data-hewan')->with('toast_success', 'Data Berhasil Disimpan');
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
    public function edit($id)
    {
        $cust = Customer::all();
        $hwn = Hewan::with('customer')->findorfail($id);
        return view('/hewan/edit-hewan',compact('hwn','cust'));
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
        $hwn = Hewan::findorfail($id);
        $hwn->update($request->all());

        return redirect('/hewan/data-hewan')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hwn = Hewan::findorfail($id);
        $hwn->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
