<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
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
        return view('sosmed.index',[
            'sosmed' => Sosmed::all()

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
            'logo' => 'required',
            'link' => 'required',
        ]);

        Sosmed::create($request->all());

        return redirect()->back()->with('success', ' Banner telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function show(sosmed $sosmed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function edit(sosmed $sosmed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sosmed $sosmed)
    {
        $request->validate([
            'logo' => 'required',
            'link' => 'required',
        ]);



        $sosmed->update($request->all());

            return redirect()->back()->with('success', ' Banner Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function destroy(sosmed $sosmed)
    {
        $sosmed->delete();

        return redirect()->back()->with('success', ' Banner Berhasil hapus');
    }
}
