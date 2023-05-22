<?php

namespace App\Http\Controllers;

use App\Models\PopularFitur;
use Illuminate\Http\Request;

class PopularFiturController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('popular-fitur.index',[
            'populars' => PopularFitur::all()

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
            'title' => 'required|max:50',
            'image' => 'required',
        ]);

        PopularFitur::create($request->all());

        return redirect()->back()->with('success', ' Banner telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PopularFitur  $popularFitur
     * @return \Illuminate\Http\Response
     */
    public function show(PopularFitur $popularFitur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopularFitur  $popularFitur
     * @return \Illuminate\Http\Response
     */
    public function edit(PopularFitur $popularFitur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopularFitur  $popularFitur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PopularFitur $popularFitur)
    {
        $request->validate([
            'title' => 'required|max:50',
            'image' => 'required',
        ]);



        $popularFitur->update($request->all());
            return redirect()->back()->with('success', ' Banner Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopularFitur  $popularFitur
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopularFitur $popularFitur)
    {
        $popularFitur->delete();

        return redirect()->back()->with('success', ' Banner Berhasil hapus');
    }
}
