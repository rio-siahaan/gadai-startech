<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use App\Models\Gadai;
use App\Models\IndonesiaProvince;
use App\Models\IndonesiaCity;
use App\Models\Cabang;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 	public function register(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|digits:16|numeric|unique:users,nik',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|numeric|digits_between:11,13',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'kpass' => 'required|same:password',
            'provinsi' => 'required|string|max:50',
            'kabupatenkota' => 'required|string|max:50',
            'alamat' => 'required|string|max:50',
            'fotoKtp' => 'required|image|mimes:jpeg,png,jpg',
            'swafotoKtp' => 'required|image|mimes:jpeg,png,jpg',
        ]);
    
    	$foto_ktp = $request->file('fotoKtp');
        $swafoto_ktp = $request->file('swafotoKtp');

        if ($foto_ktp && $swafoto_ktp) {
            $foto_ktp_name = time() . '.' . $foto_ktp->getClientOriginalExtension();
            $swafoto_ktp_name =  time() . '.' . $swafoto_ktp->getClientOriginalExtension();
    
            $foto_ktp->move('../public_html/assets/upload/ktp/', $foto_ktp_name);
            $swafoto_ktp->move('../public_html/assets/upload/swafoto/', $swafoto_ktp_name);
    
            User::create([
                'nik' => $request['nik'],
                'nama' => $request['nama'],
                'email' => $request['email'],
                'telepon' => $request['telepon'],
                'provinsi' => $request['provinsi'],
                'kabupatenkota' => $request['kabupatenkota'],
                'alamat' => $request['alamat'],
                'password' => Hash::make($request['password']),
                'foto_ktp' => $foto_ktp_name,
                'foto_swaktp' => $swafoto_ktp_name,
                'status' => 'verified',
            ]);
            return redirect()->route('admin.daftar-akun')->with('success', 'User created successfully.');

    }}

    public function daftarAkun()
    {
        $verifiedUsers = User::where('role','user')
            ->where('status', 'verified')->get();
        $notVerifiedUsers = User::where('role','user')
            ->where('status', 'not_verified')->get();

        $jumlahVerified = $verifiedUsers->count();
        $jumlahNotVerified = $notVerifiedUsers->count();

        $title = 'GadaiStarTech | Daftar Akun';
        return view('admin.pages-starter', compact('verifiedUsers', 'notVerifiedUsers', 'title', 'jumlahVerified', 'jumlahNotVerified'));
    }

    public function verifikasiPage($id)
    {
        $user = User::findOrFail($id);
        $provinsi = IndonesiaProvince::findOrFail($user->provinsi);
        $kota = IndonesiaCity::findOrFail($user->kabupatenkota);
        $title = 'GadaiStarTech | Verifikasi Akun';

        return view('admin.verifikasi', compact('user', 'title', 'provinsi', 'kota'));
    }

    public function verifikasi(Request $request, User $user)
    {
        if ($request->input('action') === 'terima') {
            // Ubah status pengguna menjadi terverifikasi
            $user->status = 'verified';
            $user->save();
        } elseif ($request->input('action') === 'tolak') {
            // Hapus pengguna dari daftar
            $user->delete();
        }
    
        // Arahkan pengguna ke halaman UserDetail jika diterima
        // atau ke halaman daftar user jika ditolak
        if ($request->input('action') === 'terima') {
            event(new Registered($user));
            return redirect()->route('admin.userDetail', ['user' => $user->id]);
        } elseif ($request->input('action') === 'tolak') {
            return redirect()->route('admin.daftar-akun');
        }
    }

    public function detail($id)
    {
        $user = User::findOrFail($id);
        $title = 'GadaiStarTech | Detail Akun';

        $provinsi = IndonesiaProvince::findOrFail($user->provinsi);
        $kota = IndonesiaCity::findOrFail($user->kabupatenkota);
        return view('admin/userDetail', compact('user', 'title', 'provinsi', 'kota'));
    }

    public function blokir(User $user)
    {
        $user->status = 'blocked';
        $user->save();
        return redirect()->route('admin.daftar-akun');
    }

    public function index(){
        // untuk card atas
    	$getCabs = Auth::user()->cabang_id;
    	$cabs = Cabang::where('id',$getCabs)->value('nama_cabang');
        $cabang = Cabang::count();
        $nasabah = User::where('role','user')->where('status', 'verified')->count();
        $jGadai = Gadai::count(); $jLelang = Lelang::count();
        $jTransaksi = $jGadai + $jLelang;
        $oGadai = Gadai::where('is_done', 1)->sum('pinjaman'); $oLelang = Lelang::where('is_done', 1)->sum('harga_awal');
        $omset = $oGadai + $oLelang;

        // untuk pie chart
        $kendaraan = Gadai::where('kategori', 'kendaraan')->count();
        $perhiasan = Gadai::where('kategori', 'perhiasan')->count();
        $elektronik = Gadai::where('kategori', 'elektronik')->count();
        $lainnya = Gadai::where('kategori', 'lainnya')->count();

        $lunas = Gadai::where('is_done', 1)->count();

        // untuk barchart
        	$jakarta = User::where('provinsi', 11)->count();
        	$jabar = User::where('provinsi', 12)->count();
        	$jateng = User::where('provinsi', 13)->count();
        	$diy = User::where('provinsi', 14)->count();
        	$jatim = User::where('provinsi', 15)->count();
        	$banten = User::where('provinsi', 16)->count();

    	$provinsi = User::select('kabupatenkota', \DB::raw('count(*) as total'))
    		->groupBy('kabupatenkota')
    		->orderByDesc('total')
        	->take(5)
    		->get();
    	
    	$provinsiIds = $provinsi->pluck('kabupatenkota');
    	$provinsiNames = IndonesiaCity::whereIn('id', $provinsiIds)->pluck('name', 'id');
    
        $minPinjaman = Gadai::min('pinjaman');
        $avgPinjaman = Gadai::avg('pinjaman');
        $maxPinjaman = Gadai::max('pinjaman');
        $pinjamanData = Gadai::pluck('pinjaman')->toArray();
        if (empty($pinjamanData)) {
            $pinjamanData = 'tidak ada data pinjaman';
        }
    
    	$lelang = Lelang::all();
        $currentTime = Carbon::now();
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
    	
        $title = 'GadaiStarTech | Home';
        return view('admin/index', compact(
            'title', 'pinjamanData', 'minPinjaman', 'avgPinjaman', 'maxPinjaman', 'nasabah', 'jGadai', 'jLelang','jTransaksi', 'omset',
            'kendaraan', 'perhiasan', 'elektronik', 'lainnya', 'lunas', 'jakarta', 'jabar', 'jateng', 'diy', 'jatim', 'banten',
            'provinsi', 'provinsiNames', 'cabs'
        ));
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if (Hash::check($request->current_password, auth()->user()->password)) {
            // Password lama cocok
            $user = auth()->user();
            $user->password = Hash::make($request->password);
            $user->save();
    
            return redirect()->route('admin.profil')->with('success', 'Password berhasil diubah.');
        } else {
            // Password lama tidak cocok
            return redirect()->back()->withErrors(['current_password' => 'Password lama salah.']);
        }
    }

    public function profil(){
        $admin = Auth::user();
        $namaCabang = Cabang::findOrFail($admin->cabang_id);
      
        $title = 'GadaiStarTech | Profil Admin';
        return view('admin/profil', compact('title','namaCabang'));
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
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
