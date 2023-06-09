<?php

namespace App\Http\Controllers;

use App\Models\Detail_Transaksi;
use App\Models\Transaksi;
use App\Models\Paket;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detailTransaksi = Detail_Transaksi::all();
        $transaksi       = Transaksi::all();
        $paket           = Paket::all();
        return view('detail_transaksi.index', compact('detailTransaksi','transaksi','paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $detailTransaksi = Detail_Transaksi::all();
        $transaksi       = Transaksi::all();
        $pakets           = Paket::all();
        return view('detail_transaksi.create', compact('detailTransaksi','transaksi','pakets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $transaksi)
    {
        //
        $request->validate([
            'paket_id'  => 'required',
            'qty'       => 'required'
        ],
        [
            'paket_id.required' => 'Pilih Paket',
            'qty.required'      => 'Isi Qty'
        ]);

        $detailTransaksi = new Detail_Transaksi;
        $detailTransaksi->transaksi_id  = $transaksi;
        $detailTransaksi->paket_id      = $request->paket_id;
        $detailTransaksi->qty           = $request->qty;
        $detailTransaksi->save();

        return redirect()->route('transaksi.proses', compact('transaksi'));
    }
    public function updateStatus(Request $request, $id)
{
    $transaksi = Transaksi::findOrFail($id);
    $transaksi->status ='selesai';
    $transaksi->dibayar ='dibayar';
    $transaksi->save();

    return redirect()->route('transaksi.proses', $transaksi);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailTransaksi  $detailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailTransaksi $detailTransaksi)
    {
        //
    }
}