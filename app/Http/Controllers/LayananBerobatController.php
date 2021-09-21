<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use App\Models\Penyakit;
use App\Models\Layanan_Berobat;
use Illuminate\Http\Request;

class LayananBerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalyob = Layanan_Berobat::with('hewan','customer','penyakit')->paginate(10);
        return view('berobat.data-layanan-berobat', compact('datalyob'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hwn = Hewan::all();
        $cust = Customer::all();
        $pykt = Penyakit::all();
        return view('berobat.create-layanan-berobat',compact('hwn','cust','pykt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Layanan_Berobat::create([
            'hewan_id' => $request->hewan_id,
            'customer_id' => $request->customer_id,
            'penyakit_id' => $request->penyakit_id,
        ]);

        return redirect('/berobat/data-layanan-berobat')->with('toast_success', 'Data Berhasil Disimpan');
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
        $hwn = Hewan::all();
        $cust = Customer::all();
        $pykt = Penyakit::all();
        $lyob = Layanan_Berobat::with('hewan','customer','penyakit')->findorfail($id);
        return view('/berobat/edit-layanan-berobat',compact('lyob','hwn','cust','pykt'));
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
        $lyob = Layanan_Berobat::findorfail($id);
        $lyob->update($request->all());

        return redirect('/berobat/data-layanan-berobat')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lyob = Layanan_Berobat::findorfail($id);
        $lyob->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
