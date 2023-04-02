<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Paket;
use App\Models\Transaksi;
use App\Models\Detail_Transaksi;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        $pakets = Paket::all();
        $members = Member::all();
        $details = Detail_Transaksi::all();
        return view('invoice.index', compact('members','transaksis','pakets','details'));
    }
    public function cetakinvoice()
    {
        $transaksis = Transaksi::all();
        $pakets = Paket::all();
        $members = Member::all();
        $details = Detail_Transaksi::all();
        return view('invoice.cetak', compact('members','transaksis','pakets','details'));
    }
    public function show(Detail_Transaksi $detailTransaksi)
    {
        $details = Detail_Transaksi::find($detailTransaksi->id);
        return view('invoice.show', compact('details'));
    }
    
    
}
