<?php

namespace App\Http\Controllers;

use App\Models\Hunian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;

class DashboardHunianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.dataHunian.index', [
            // 'hunians' => Hunian::where('id', auth()->user()->id)->get()
            'hunians' => Hunian::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dataHunian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min:4|max:255',
            'lokasi' => 'required|min:4|max:255',
            'harga' => 'required|numeric|min:1',
            'jumlah_kamar_tidur' => 'required|numeric|min:1',
            'jumlah_kamar_mandi' => 'required|numeric|min:1',
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('hunian-img');
        $validatedData['user_id'] = Auth::user()->id;

        Hunian::create($validatedData);

        return redirect('/dashboard/hunian/index')->with('success', 'Input Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hunian  $hunian
     * @return \Illuminate\Http\Response
     */
    public function show(Hunian $hunian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hunian  $hunian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.dataHunian.edit', [
            'hunian' => Hunian::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hunian  $hunian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
            'jumlah_kamar_tidur' => 'required',
            'jumlah_kamar_mandi' => 'required',
            'gambar' => 'image|fie|max:10024'
        ]);

        Hunian::where('id', $id)
            ->update($validatedData);

        return redirect('/dashboard/hunian/index')->with('success', 'Input Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hunian  $hunian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hunian::destroy($id);

        return redirect('/dashboard/hunian/index')->with('success', 'Data Berhasil Dihapus');
    }
}
