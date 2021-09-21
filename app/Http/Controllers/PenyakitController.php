<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapykt = Penyakit::all();
        return view('penyakit.data-penyakit', compact('datapykt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyakit.create-penyakit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penyakit::create([
            'namapenyakit' => $request->namapenyakit,
            'ketpenyakit' => $request->ketpenyakit,
        ]);

        return redirect('/penyakit/data-penyakit')->with('toast_success', 'Data Berhasil Disimpan');
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
        $pykt = Penyakit::findorfail($id);
        return view('/penyakit/edit-penyakit',compact('pykt'));
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
        $pykt = Penyakit::findorfail($id);
        $pykt->update($request->all());

        return redirect('/penyakit/data-penyakit')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pykt = Penyakit::findorfail($id);
        $pykt->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
