<?php

namespace App\Http\Controllers;

use App\Models\Karier;
use Illuminate\Http\Request;

class KarierController extends Controller
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
        return view('karier-impian.index',[
            'kariers' => Karier::all()

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

        Karier::create($request->all());

        return redirect()->back()->with('success', ' Banner telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karier  $karier
     * @return \Illuminate\Http\Response
     */
    public function show(Karier $karier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karier  $karier
     * @return \Illuminate\Http\Response
     */
    public function edit(Karier $karier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karier  $karier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karier $karier)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);



        $karier->update($request->all());

            return redirect()->back()->with('success', ' Banner Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karier  $karier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karier $karier)
    {
        $karier->delete();

        return redirect()->back()->with('success', ' Banner Berhasil hapus');
    }
}
