<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tentang-kami.index',[
            'tentang' => TentangKami::all()

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
        ]);

        TentangKami::create($request->all());

        return redirect()->back()->with('success', ' Banner telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function show(TentangKami $tentangKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function edit(TentangKami $tentangKami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TentangKami $tentangKami)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);



        $tentangKami->update($request->all());

            return redirect()->back()->with('success', ' Banner Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TentangKami  $tentangKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(TentangKami $tentangKami)
    {
        $tentangKami->delete();

        return redirect()->back()->with('success', ' Banner Berhasil hapus');
    }
}
