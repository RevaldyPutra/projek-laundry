<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail_Transakasi;
class Paket extends Model
{
    use HasFactory;

    protected $table = "pakets";
    protected $fillable = [
        'id', 'outlet_id', 'jenis', 'nama_paket', 'harga'
    ];

    public function outlet()
    {
        return $this->hasOne('App\Models\Outlet', 'id', 'outlet_id');
    }
    public function detail_transaksis()
    {
        return $this->belongsTo(Detail_Transaksi::class);
    }
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi', 'transaksi');
    }
}