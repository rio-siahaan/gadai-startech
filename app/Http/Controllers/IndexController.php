<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gadai;
use App\Models\Cabang;
use App\Models\Lelang;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$barang = Gadai::count();
    	$cabang = Cabang::count();
    	$lelang = Lelang::count();
    	$transaksi = $barang + $lelang;
    
        return view('user/index', compact('barang', 'cabang', 'transaksi'));
    }

	public function simulasi(){
    	return view('user/simulasi', [
        	'title' => 'GadaiStarTech | Simulasi',
    	]);
    }

	public function tatacara(){
    	return view('user/tatacara', [
        	'title' => 'GadaiStarTech | Tata Cara',
    	]);
    }

	public function tentang(){
    	return view('user/tentang', [
        	'title' => 'GadaiStarTech | Tentang',
    	]);
    }
}
