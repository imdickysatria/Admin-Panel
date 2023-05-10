<?php

namespace App\Http\Controllers;

use App\Models\KategoriToko;
use Illuminate\Http\Request;

class KategoriTokoController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategori-toko.index',[
            'kategories' => KategoriToko::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        KategoriToko::create($request->all());

        return redirect()->back()->with('success', ' Banner telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriToko  $kategoriToko
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriToko $kategoriToko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriToko  $kategoriToko
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriToko $kategoriToko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriToko  $kategoriToko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriToko $kategoriToko)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);



        $kategoriToko->update($request->all());

            return redirect()->back()->with('success', ' Banner Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriToko  $kategoriToko
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriToko $kategoriToko)
    {
        $kategoriToko->delete();

        return redirect()->back()->with('success', ' Banner Berhasil hapus');
    }
}
