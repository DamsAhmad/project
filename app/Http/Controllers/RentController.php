<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\hunian;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hunians = hunian::all();

        if ($request->has('katakunci')) {
            hunian::where('nama', 'LIKE', '%' . $request->katakunci . '%');
        } else {
            hunian::all();
        }
        return view('huniancom.main.index', [
            'hunians' => Hunian::get()
            // 'hunians' => $hunians
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('huniancom.main.upload');
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
        // dd($request);
        $validatedData['gambar'] = $request->file('gambar')->store('hunian-img');
        $validatedData['user_id'] = Auth::user()->id;

        Hunian::create($validatedData);

        return redirect('/login')->with('success', 'Input Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
