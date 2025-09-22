<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Lelang;
use App\Http\Requests\StoreBidRequest;
use App\Http\Requests\UpdateBidRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Validasi input
        // $validator = Validator::make($request->all(), [
        //     'harga_bid' => 'required|numeric|gt:' . Bid::getMaxValueByCategory($request->input('lelang_id')),
        // ], [
        //     'harga_bid.gt' => 'Harga bid harus lebih besar dari harga bid terbesar sebelumnya.',
        // ]);

        // // Jika validasi gagal, kembali ke halaman form dengan pesan kesalahan dan input yang sudah dimasukkan sebelumnya
        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }

        // // Jika validasi berhasil, lakukan penyimpanan data bid
        // Bid::create([
        //     'lelang_id' => $request->input('id_lelang'),
        //     'user_id' => $request->input('id_user'),
        //     'harga_bid' =>  $request->input('harga_bid'),
        // ]);

        // return redirect('/user/lelang')->with('success', 'Lelang berhasil dilakukan');
        $lelang_id = $request->input('id_lelang');
    	$user_id = $request->input('id_user');
        $harga = $request->input('harga_bid');
        $bid_tinggi = Bid::where('lelang_id', $lelang_id)->orderByDesc('harga_bid')->value('harga_bid');
        $lelang = Lelang::where('id', $lelang_id)->first();
        if($bid_tinggi == null)
        {
            if($lelang){
                $bid_tinggi = $lelang->harga_awal;
            }
        }

        if($harga < $bid_tinggi){
            return back()->with('error', 'Harga bid kurang dari penawar tertinggi');
        }
        else{
            if ($lelang_id && $user_id) {
    		$bid_sekarang = Bid::where('lelang_id', $lelang_id)->where('user_id', $user_id)->first();

    		if ($bid_sekarang) {
        		$bid_sekarang->update([
            		'harga_bid' => $harga,
            	]);    		
			} else {
    			Bid::create([
        			'lelang_id' => $lelang_id,
        			'user_id' => $user_id, // Assuming $user_id is available in the scope
        			'harga_bid' => $harga, // Assuming $harga is available in the scope
    			]);
			}
			
            $lelang->bid_tertinggi = $harga;
            $lelang->save();
            return redirect('/user/lelang')->with('success', 'Lelang berhasil dilakukan');
        	}
        // $maxValue = Bid::getMaxValueByCategory($request->input('lelang_id'));  
        // if($maxValue == null)
        //     $maxValue = 0;

        // $validator = Validator::make($request->all(),[
        //     'harga_bid' => 'required|numeric|gt:' . $maxValue,
        // ]);

        // if($validator->fails()){
        //     return back()->with('error', 'Harga bid lebih rendah dari harga tertinggi');
        // }
        // else{
        //     Bid::create([
        //         'lelang_id' => $request->input('id_lelang'),
        //         'user_id' => $request->input('id_user'),
        //         'harga_bid' =>  $maxValue
        //     ]);
        //     return redirect('/user/lelang')->with('success', 'Lelang berhasil dilakukan');
        }   
    }
    // protected function validator(array $data)
    // {
    //     $maxValue = Bid::getMaxValueByCategory($data['lelang_id']);

    //     return Validator::make($data, [
    //         'harga_bid' => 'required|integer|min:' . $maxValue,
    //     ]);
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBidRequest  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBidRequest $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }
}
