<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Customer::all('name'));

        $allData = DB::table('transaksis')
            ->select(['transaksis.*', 'customers.name as nama_customer', 'barangs.name as nama_barang'])
            ->join('customers', 'customers.id', '=', 'transaksis.id_customer')
            ->join('barangs', 'barangs.id', '=', 'transaksis.id_barang')
            ->get();
        // dd($allData);
        return view('transaksi.index', [
            'transaksis' => $allData,
            'transaksis' => Transaksi::all(),
            'customer' => Customer::all(),
            'barang' => Barang::all(),
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
            'id_customer' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);

        Transaksi::create($request->all());

        return redirect()->back()->with('success', ' Transaksi telah ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        $request->validate([
            'id_customer' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);



        $transaksi->update($request->all());

        return redirect()->back()->with('success', ' transaksi Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {

        $transaksi->delete();

        return redirect()->back()->with('success', ' transaksi Berhasil hapus');
    }
}
