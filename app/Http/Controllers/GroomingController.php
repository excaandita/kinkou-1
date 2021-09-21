<?php

namespace App\Http\Controllers;

use App\Models\Grooming;
use Illuminate\Http\Request;

class GroomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datagro = Grooming::all();
        return view('grooming.data-grooming', compact('datagro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grooming.create-grooming');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Grooming::create([
            'namagrooming' => $request->namagrooming,
            'hargagrooming' => $request->hargagrooming,
            'ketgrooming' => $request->ketgrooming,
        ]);

        return redirect('/grooming/data-grooming')->with('toast_success', 'Data Berhasil Disimpan');
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
        $groo = Grooming::findorfail($id);
        return view('/grooming/edit-grooming',compact('groo'));
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

        return redirect('/grooming/data-grooming')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groo = Grooming::findorfail($id);
        $groo->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
