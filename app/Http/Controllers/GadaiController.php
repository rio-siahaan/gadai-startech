<?php

namespace App\Http\Controllers;

use App\Models\Kota;

use App\Models\User;
use App\Models\Gadai;
use App\Models\Cabang;
use App\Models\FotoGadai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreGadaiRequest;
use App\Http\Requests\UpdateGadaiRequest;


class GadaiController extends Controller
{
    public function index()
    {    	
    	$totJatuh = 0; $totLewat = 0; $totDalam = 0; $totSelesai = 0; $barangLunas = 0;
    	$gadais = Gadai::all();
    	foreach($gadais as $gadai){
if ($gadai->durasi == date('Y-m-d') && $gadai->is_done == false) {
    $totJatuh += 1;
} elseif (strtotime($gadai->durasi) < strtotime(date('Y-m-d')) && strtotime($gadai->durasi) > strtotime('+20 days') && $gadai->is_done == false) {
    $totLewat += 1;
} elseif ($gadai->durasi > date('Y-m-d') && $gadai->is_done == false) {
    $totDalam += 1;
} elseif (strtotime($gadai->durasi) < strtotime('-20 days') && $gadai->is_done == false && $gadai->status == 'gadai'){
    $totSelesai += 1;
} elseif ($gadai->is_done == true) {
    $barangLunas += 1;
			}
        }
        return view('admin/tables-gadai', [
            'title' => 'GadaiStarTech | Tabel Gadai',
            'gadais' => Gadai::all(),
        	'barangLunas' => $barangLunas,
        	'totJatuh' => $totJatuh,
        	'totLewat' => $totLewat,
        	'totDalam' => $totDalam,
        	'totSelesai' => $totSelesai,        	
        ]);
    }

    public function form()
    {
        return view('admin/form-gadai', [
            'title' => 'GadaiStarTech | Form Gadai',
            'users' => User::where('role', 'user')->where('status','verified')->get(),
            'kotas' => Kota::all(),
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
     * @param  \App\Http\Requests\StoreGadaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['nama_barang'] = $request->nama_barang;
        $data['kelengkapan'] = $request->kelengkapan;
        $data['serial_number'] = $request->serial_number;
        $data['deskripsi'] = $request->deskripsi;
        $data['user_id'] = $request->user_id;
        $data['admin_id'] = $request->admin_id;
        $data['pinjaman'] = $request->pinjaman;
        $data['bunga'] = $request->bunga;
        $data['durasi'] = $request->durasi;
        $data['kategori'] = $request->kategori;
        $data['status'] = 'gadai';
    	$data['fotoBarang'] = $request->file('fotoBarang');
    	
    	if($data['fotoBarang']){
        	$name = $data['user_id'] . date('Y-d-m') . '.' . $data['fotoBarang']->getClientOriginalExtension();
        	
        	$data['fotoBarang']->move('../public_html/assets/upload/barang/', $name);
        
			$gadaiid = Gadai::create([
            	'nama_barang' => $data['nama_barang'],
            	'kelengkapan' => $data['kelengkapan'],
            	'serial_number' => $data['serial_number'],
            	'deskripsi' => $data['deskripsi'],
            	'user_id' => $data['user_id'],
            	'admin_id' => $data['admin_id'],
            	'pinjaman' => $data['pinjaman'],
            	'bunga' => $data['bunga'],
            	'durasi' => $data['durasi'],
            	'kategori' => $data['kategori'],
            	'status' => $data['status'],
            	'foto' => $name, 
            	'is_done' => false
            ])->id;
        
        	FotoGadai::create([
            	'id_gadai'=> $gadaiid,
            	'fname_barang' => $name
            ]);
        	return redirect('/admin/tables-gadai');
        }
    	return redirect('/admin/form-gadai/');
    }

    public function storeImage(Request $request)
    {
        if ($request->file('file')) {
            //here we are geeting userid alogn with an image

            $files = $request->file('file');

            if ($files) {
                foreach ($files as $key => $file) {
                    // Log relevant information for each file
                    Log::info("File $key:", [
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_mime' => $file->getMimeType(),
                        // Add any other relevant information you want to log
                    ]);
                }
            } else {
                Log::info('No files found in the request.');
            }

            foreach ($request->file('file') as $img) {
                $imageName = strtotime(now()) . rand(11111, 99999) . '.' . $img->extension();
                $original_name = $img->getClientOriginalName();

                if (!is_dir('../public_html/assets/upload/barang/')) {
                    mkdir('../public_html/assets/upload/barang/', 0777, true);
                }
                $img->move('../public_html/assets/upload/barang/', $imageName);
                FotoGadai::create(['id_gadai' => $request->gadaiid, 'fname_barang' => $imageName]);
            }

            return response()->json(['status' => "success", 'imgdata' => $original_name, 'gadaiid' => $gadaiid]);
        }
    }
    public function __construct()
    {
        $this->middleware('auth'); // Check if this middleware is allowing access
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Gadai  $gadai
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Gadai $gadai)
    {	
    	$gambar = FotoGadai::where('id', $gadai)->get();
        return view('admin/more', [
            'title' => 'GadaiStarTech | Detail Gadai',
            'active' => 'gadais',
            'gadai' => $gadai,
        	'gambar' => $gambar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gadai  $gadai
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGadaiRequest  $request
     * @param  \App\Models\Gadai  $gadai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {       
        if (!$request->input('is_done')){
            $is_done = false;
        }else{
        	$is_done = true;
        }    	
    
    	$nama_barang = $request->input('nama_barang');
    	$pinjaman = $request->input('pinjaman');
    	$durasi = $request->input('durasi');
    	$deskripsi = $request->input('deskripsi');
    	$user_id = $request->input('user_id');
    	$id = $request->input('id');    	
    
        $gadai = Gadai::findOrFail($id);
        $gadai->nama_barang = $nama_barang;
        $gadai->pinjaman = $pinjaman;
        $gadai->durasi = $durasi;
        $gadai->deskripsi = $deskripsi;
        $gadai->is_done = $is_done;
        $gadai->user_id = $user_id;
    	if($request->input('status')){
        	$gadai->status = 'lelang';
        }
    	$gadai->save();
        return redirect('admin/tables-gadai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gadai  $gadai
     * @return \Illuminate\Http\Response
     */
    public function destroy($gadai)
    {
        $barang = Gadai::findOrFail($gadai);
    	$barang->delete();
    	return redirect()->route('gadai')->with('success', 'Barang terhapus');
    }

    public function getCabang(Request $request)
    {
        $cabang = Cabang::where("kota_id", $request->kotaID)->pluck('id', 'nama_cabang');
        return response()->json($cabang);
    }
    public function getPegawai(Request $request)
    {
        $pegawai = User::where("cabang_id", $request->cabID)->pluck('id', 'nama');
        return response()->json($pegawai);
    }
    public function getDetil(Request $request)
    {
        $pegawai = User::select('jabatan', 'telepon', 'nik')->where('id', $request->pegId)->first();
        return response()->json($pegawai);
    }

    public function getDetilPeng(Request $request)
    {
        $pegawai = User::select('nik', 'telepon', 'alamat')->where('id', '=', $request->pengId)->first();
        return response()->json($pegawai);
    }
}
