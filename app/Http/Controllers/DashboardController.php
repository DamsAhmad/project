<?php

namespace App\Http\Controllers;

use App\Models\hunian;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hunian = hunian::all();
        return view('dashboard.index', [
            'hunian' => $hunian
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $hunian = new hunian;
        return view('dashboard.create', [
            'hunian' => $hunian
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hunian = new hunian;
        $hunian->nama = $request->nama;
        $hunian->lokasi = $request->lokasi;
        $hunian->harga = $request->harga;
        $hunian->jumlah_kamar_tidur = $request->jumlah_kamar_tidur;
        $hunian->jumlah_kamar_mandi = $request->jumlah_kamar_mandi;
        $hunian->gambar = $request->file('gambar')->store('hunian-img');
        $hunian->save();
        return redirect('/dashboard/hunian/index');
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
        $hunian = hunian::find($id);
        return view('dashboard.edit', [
            'hunian' => $hunian
        ]);
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
        $hunian = hunian::find($id);
        $hunian->nama = $request->nama;
        $hunian->lokasi = $request->lokasi;
        $hunian->harga = $request->harga;
        $hunian->jumlah_kamar_tidur = $request->jumlah_kamar_tidur;
        $hunian->jumlah_kamar_mandi = $request->jumlah_kamar_mandi;
        $hunian->save();
        return redirect('/dashboard/hunian/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hunian = hunian::find($id);
        $hunian->delete();
        return redirect('dashboard');
    }
}
