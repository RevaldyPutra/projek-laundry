<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'home');

//outlet
route::resource('outlet', OutletController::class)->middleware('auth', 'role:admin');

//paket
route::resource('paket', PaketController::class)->middleware('auth','role:admin');

//member
Route::resource('member', MemberController::class)->middleware('auth','role:admin,kasir');

//user
Route::resource('user', UserController::class)->middleware('auth','role:admin,kasir');

//transaksi
Route::resource('transaksi', TransaksiController::class)->middleware('auth','role:admin,kasir');

//cetakinvoice
Route::resource('invoice', InvoiceController::class)->middleware('auth','role:admin,kasir');
Route::get('cetak/invoice', [InvoiceController::class, 'cetakinvoice'])->name('cetakinvoice');
Route::get('invoice/{invoice}', [InvoiceController::class, 'show'])->name('show');

//transaksi
Route::middleware(['auth', 'role:kasir'])->group(function(){
    Route::post('transaksi/baru', [TransaksiController::class, 'create'])->name('transaksi.baru');
    Route::get('transaksi/{transaksi}', [TransaksiController::class, 'edit'])->name('transaksi.proses');
    Route::post('transaksi/simpan', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::post('transaksi/{id}/detail', [DetailTransaksiController::class, 'store'])->name('transaksi.detail.store');
    Route::patch('/transaksi/{id}/update-status', [DetailTransaksiController::class, 'updateStatus'])->name('transaksi.updateStatus');
     Route::post('transaksi/', [TransaksiController::class, 'index'])->name('transaksi.index');
     Route::post('/transaksi/updateStatus/{id}', [TransaksiController::class,'updateStatus'])->name('updateStatus');
});



Route::get('register', [RegisterController::class, 'register'])->name('register')->middleware('auth', 'role:admin');
Route::post('register', [RegisterController::class, 'store'])->name('register.proses')->middleware('auth', 'role:admin');

Route::get('login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');

Route::get('logout', [LoginController::class, 'logout'])->name('logout.admin');


Route::get('dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin')->middleware('auth', 'role:admin');
Route::get('dashboard/kasir', [DashboardController::class, 'kasir'])->name('dashboard.kasir')->middleware('auth', 'role:kasir');
Route::get('dashboard/owner', [DashboardController::class, 'owner'])->name('dashboard.owner')->middleware('auth', 'role:owner');
Route::view('error/403', 'error.403')->name('error.403');