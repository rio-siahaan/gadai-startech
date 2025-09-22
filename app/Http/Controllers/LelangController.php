<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bid;
use App\Models\Gadai;
use App\Models\Lelang;
use App\Models\FotoGadai;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLelangRequest;
use App\Http\Requests\UpdateLelangRequest;

class LelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mendapatkan waktu saat ini
    $currentTime = Carbon::now();

    // Mengambil semua lelang dari database
    $lelang = Lelang::all();

    // Melakukan pengecekan untuk setiap lelang
    foreach ($lelang as $lelangItem) {
        // Jika deadline belum terlewati, maka status tetap 'tersedia'
        if ($lelangItem->deadline >= $currentTime) {
            $lelangItem->is_done = 0;
        } else {
            // Jika deadline telah terlewati, maka status menjadi 'tidak tersedia'
            $lelangItem->is_done = 1;
        }

        // Menyimpan perubahan status
        $lelangItem->save();
    }

    // Mengambil lelang dengan status 'tersedia' untuk ditampilkan di view
    // $lelangTersedia = Lelang::where('status', 'tersedia')->paginate(3);
    $lelangTersedia = Lelang::query();

    // Menambahkan filter pencarian
    if (request('search')) {
        $lelangTersedia->whereHas('gadai', function ($query) {
            $query->where('nama_barang', 'like', '%' . request('search') . '%')
                ->orWhere('deskripsi', 'like', '%' . request('search') . '%')
                ->orWhere('kategori', 'like', '%' . request('search') . '%');
        });
    }
    $lelangTersedia = $lelangTersedia->where('is_done', 0)->paginate(3);    
    
    // Mengirimkan data ke view
    return view('user/lelang', [
        "title" => "Gadai Startech | Lelang",
        "lelang" => $lelangTersedia,
    ]);

        // //
        // $lelang = Lelang::query();


        // if(request('search')){
        //     $lelang->whereHas('gadai', function ($query) {
        //         $query->where('nama_barang', 'like', '%' . request('search') . '%')
        //               ->orWhere('deskripsi', 'like', '%' . request('search') . '%')
        //               ->orWhere('kategori', 'like', '%' . request('search') . '%');
        //     });
        // }

        // $lelang = $lelang->paginate();
        // // $lelangs = Lelang::orderBy('created_at', 'desc')->paginate(3);

        // return view('user/lelang', [
        //     "title" => "Gadai Startech | Lelang",
        //     "lelang" => $lelang,

        // ]);
    }

    public function tableAdmin()
    {
        return view('admin/tables-lelang', [
            'title' => 'GadaiStarTech | Tabel Lelang',
            'lelangs'=> Lelang::all(),
        ]);
    }

    public function more(Lelang $lelang)
    {
        return view('admin.morelelang',[
            'title' => 'GadaiStartech | Detail Lelang',
            'lelang' => $lelang,
            'fotogadais' => FotoGadai::whereIn('id_gadai',$lelang)->get(),
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
     * @param  \App\Http\Requests\StoreLelangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'gadai_id' => 'required',
            'harga_awal' => 'required|integer|min:0',
            'deadline' => 'required|date',
        ]);
        $validated['is_done']=false;
        Lelang::create($validated);
        DB::table('gadais')->where('id',$validated['gadai_id'])->update(['status'=>'lelang']);
        return LelangController::tableAdmin();
    }

public function store(Request $request)
    {
        $validated = $request->validate([
            'gadai_id' => 'required',
            'harga_awal' => 'required|integer|min:0',
            'deadline' => 'required|date',
        ]);
        $validated['is_done']=false;
        Lelang::create($validated);
        return redirect('/admin/tables-lelang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */

    // public function show(Lelang $lelang)
    // {
    //     //
    // }

    public function show($id)
    {
        $lelang = Lelang::find($id);
        $bid_user = Bid::where('lelang_id', $lelang->id)
                        ->orderBy('harga_bid', 'desc')
                        ->first();
        if ($lelang->is_done == 0){
            return view('user/lelang-details', ['lelang' => $lelang, 'bid' => $bid_user]);
        }else{
            return redirect('/user/lelang')->with('error', 'barang tidak tersedia');
        }
    }

    public function ikutLelang($id)
    {
        $user = auth()->user();
        $lelang = Lelang::find($id);
        $bid_user = Bid::where('lelang_id', $lelang->id)
                        ->orderBy('harga_bid', 'desc')
                        ->first();

        if ($lelang->is_done == 0){               
            return view('user/form-lelang', [
                'lelang' => $lelang,
                'user' => $user,
                'bid' => $bid_user
            ]);
        }else{
            return redirect('/user/lelang')->with('error', 'barang tidak tersedia');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function edit(Lelang $lelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLelangRequest  $request
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lelang  $lelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lelang $lelang)
    {
        $lelang = Lelang::findOrFail($lelang->id);
        $gadai = Gadai::findOrFail($lelang->gadai_id);
        $gadai->status = "gadai";
        $gadai->update();
        $lelang->delete();
        return redirect()->route('admin/tables-lelang');
    }
    

    public function filterByKategori(Request $request, $kategori)
    {
        $gadai = Gadai::where('kategori',$kategori)->pluck('id');
    
    	$lelang = Lelang::whereIn('gadai_id',$gadai)->where('is_done',0)->paginate(3);
    
        return view('user/lelang', ['lelang' => $lelang]);
    }

    public function admin(){
        $today = Carbon::now()->format('Y-m-d');

        return view('admin/form-lelang', [
            'title' => 'GadaiStarTech | Form Lelang',
            'barangs' => Gadai::where('status', 'lelang')->get(),
        	'current' => $today
        ]);
    }

    public function getDetil(Request $request)
    {
        $pegawai = Gadai::select('deskripsi')->where('id', $request->pegId)->first();
        return response()->json($pegawai);
    }

}
