<?php

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GadaiController;
use App\Http\Controllers\DependentDropdownController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/edit-profil', [UserController::class, 'halamanEdit']);

    Route::get('user/form-lelang', function () {
        return view('user/form-lelang', [
            'title' => 'GadaiStarTech | Form Lelang',
        ]);
    });

    Route::get('user/lelang-detail', function () {
        return view('user/lelang-details', [
            'title' => 'GadaiStarTech | Detail Lelang',
        ]);
    });

    Route::get('user/lelang/{id}', [LelangController::class, 'show']);
    
    Route::get('user/form-lelang/{id}', [LelangController::class, 'ikutLelang']);

    Route::get('user/lelang', [LelangController::class, 'index']);
    
    Route::post('/user/input-bid', [BidController::class, 'store'])->name('user.bid');
    
    Route::get('/user/lelang/kat/={kategori}', [LelangController::class, 'filterByKategori']);

    Route::get('user/profil/', [UserController::class,'index'])->name('user-profil');
});

Route::get('/user', [IndexController::class,'index']);

Route::get('/', [IndexController::class,'index']);

Route::get('/user/simulasi', [IndexController::class,'simulasi']);

Route::get('/user/tatacara', [IndexController::class,'tatacara']);

Route::get('/user/tentang', [IndexController::class,'tentang']);

Route::get('/user/login', [LoginController::class, 'index'])->name('user/login');

Route::post('/login', [LoginController::class,'login'])->name('login');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/user/register', [RegisterController::class, 'index'])->name('register');

Route::put('/user/edit/',[UserController::class,'edit'])->name('editProfil');

Route::post('/user/register', [RegisterController::class, 'create']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/form-gadai', [GadaiController::class, 'form']);
	Route::post('admin/form-gadai/input', [GadaiController::class, 'store']);
    Route::get('/getcabang', [GadaiController::class, 'getCabang']);
    Route::get('/getpegawai', [GadaiController::class, 'getPegawai']);
    Route::get('/getdetil', [GadaiController::class, 'getDetil']);
    Route::get('/getDetilPeng', [GadaiController::class, 'getDetilPeng']);
    Route::post('/storeimage', [GadaiController::class, 'storeImage']);
    Route::get('/admin/form-lelang', [LelangController::class, 'admin']);
	Route::post('/admin/form-lelang/tambah', [LelangController::class, 'store'])->name('tambah.lelang');
    Route::get('/admin/invoice/create', [GadaiController::class, '']);
    Route::get('/admin/api/product', 'InvoiceController@getAutocompleteData');
    Route::get('/admin/tables-gadai', [GadaiController::class, 'index'])->name('gadai');
    Route::get('/admin/tables-gadai/{gadai:id}', [GadaiController::class, 'show']);
    Route::put('/admin/tables-gadai/editgadai', [GadaiController::class, 'update'])->name('edit.gadai');
    Route::get('/admin/tables-gadai/hapusgadai/{gadai:id}', [GadaiController::class, 'destroy']);

    // Route::get('/tables-gadai', function () {
    //     return view('tables-gadai',[
    //         'title'=> 'GadaiStarTech | Tabel Gadai'
    //     ]);
    // });
    Route::get('/admin/tables-gadai/{gadai:id}', [GadaiController::class, 'show']);
	Route::delete('/admin/tables-gadai/destroy/{id}', [GadaiController::class,'destroy'])->name('destroy.gadai');
    Route::get('/admin/tables-lelang', [LelangController::class, 'tableAdmin']);
    Route::post('admin/tables-lelang/editlelang', [LelangController::class, 'update']);
    Route::get('admin/tables-lelang/hapuslelang/{lelang:id}',[LelangController::class, 'destroy']);
    Route::get('admin/getdetillelang', [LelangController::class, 'getDetilLel']);
    Route::get('admin/tables-lelang/{lelang:id}',[LelangController::class, 'more']);

    // Route::get('admin/daftar-akun', function () {
    //     // return view('admin/pages-starter', [
    //     //     'title' => 'GadaiStarTech | Daftar Akun'
    //     //]);
    // });
    Route::get('/admin/daftar-akun', [AdminController::class, 'daftarAkun'])->name('admin.daftar-akun');

    Route::get('/admin/daftar-akun/register-user', function () {
        return view('admin/daftarkanUser', [
            'title' => 'GadaiStarTech | Register Akun'
        ]);
    });

    // Route::get('admin/daftar-akun/verifikasi', function () {
    //     return view('admin/verifikasi', [
    //         'title' => 'GadaiStarTech | Verifikasi Akun'
    //     ]);
    // });

    Route::get('/admin/daftar-akun/verifikasi/{user:id}', [AdminController::class, 'verifikasiPage'])->name('admin.verifikasi');
    Route::post('/admin/daftar-akun/verifikasi/{user}', [AdminController::class, 'verifikasi'])
    ->name('admin.verifikasi.post');
    Route::get('/admin/daftar-akun/detail/{user:id}', [AdminController::class, 'detail'])->name('admin.userDetail');
    Route::post('/admin/daftar-akun/detail/{user:id}', [AdminController::class, 'blokir'])->name('admin.userDetail.post');
    
    Route::get('/admin/profil', [AdminController::class, 'profil'])->name('admin.profil');
	Route::post('admin/daftar-akun/register-user', [AdminController::class, 'register'])->name('admin.registeruser');

    Route::get('/admin/profil/ubahpassword', function () {
        return view('admin/ubahpadmin', [
            'title' => 'GadaiStarTech | Ubah Password',
        ]);
    })->name('admin.profil.ubahpassword');
    Route::post('admin/profil/change-password', [AdminController::class, 'updatePassword'])->middleware('auth')->name('admin.password.update');


    // Route::get('admin/daftar-akun/detail', function () {
    //     return view('admin/userDetail', [
    //         'title' => 'GadaiStarTech | Detail Akun'
    //     ]);
    // });
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('provinces', 'App\Http\Controllers\DependentDropdownController@provinces')->name('provinces');
Route::get('cities', 'App\Http\Controllers\DependentDropdownController@cities')->name('cities');
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/user');
})->middleware(['auth', 'signed'])->name('verification.verify');