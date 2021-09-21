<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use App\Models\Grooming;
use App\Models\Layanan_Grooming;
use Illuminate\Http\Request;

class LayananGroomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalygro = Layanan_Grooming::with('grooming','hewan','customer')->paginate(10);
        return view('grooming.data-layanan-grooming', compact('datalygro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groo = Grooming::all();
        $hwn = Hewan::all();
        $cust = Customer::all();
        return view('grooming.create-layanan-grooming',compact('groo','hwn','cust'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Layanan_Grooming::create([
            'grooming_id' => $request->grooming_id,
            'hewan_id' => $request->hewan_id,
            'customer_id' => $request->customer_id,
            'total' => $request->total,
        ]);

        return redirect('/grooming/data-layanan-grooming')->with('toast_success', 'Data Berhasil Disimpan');
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
        $groo = Grooming::all();
        $hwn = Hewan::all();
        $cust = Customer::all();
        $lygro = Layanan_Grooming::with('grooming','hewan','customer')->findorfail($id);
        return view('/grooming/edit-layanan-grooming',compact('lygro','groo','hwn','cust'));
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
        $groo = Grooming::findorfail($id);
        $groo->update($request->all());

        $hwn = Hewan::findorfail($id);
        $hwn->update($request->all());

        $cust = Customer::findorfail($id);
        $cust->update($request->all());

        $lygro = Layanan_Grooming::findorfail($id);
        $lygro->update($request->all());

        return redirect('/grooming/data-layanan-grooming')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lygro = Layanan_Grooming::findorfail($id);
        $lygro->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
