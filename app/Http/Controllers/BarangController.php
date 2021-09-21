<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databrg = Barang::with('kategori')->paginate(10);
        return view('barang.data-barang', compact('databrg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = Kategori::all();
        return view('barang.create-barang',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'namabarang' => $request->namabarang,
            'kategori_id' => $request->kategori_id,
            'hargabarang' => $request->hargabarang,
            'stokbarang' => $request->stokbarang,
        ]);

        return redirect('/barang/data-barang')->with('toast_success', 'Data Berhasil Disimpan');
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
        $kat = Kategori::all();
        $brg = Barang::with('kategori')->findorfail($id);
        return view('/barang/edit-barang',compact('brg','kat'));
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
        $brg = Barang::findorfail($id);
        $brg->update($request->all());

        return redirect('/barang/data-barang')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg = Barang::findorfail($id);
        $brg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
