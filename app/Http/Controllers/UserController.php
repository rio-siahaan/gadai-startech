<?php

namespace App\Http\Controllers;

use App\Models\Gadai;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        $riwayat = Gadai::where('user_id', $user->id)->get();
        return view('user/profil', [
            'title' => 'GadaiStarTech | Profil',   
            'riwayat' => $riwayat,  
        	'user' => $user
        ]);
    }

	public function halamanEdit(){
    	return view('user/editprofil');
    }

    public function edit(Request $request){
        $validator = Validator::make($request->all(),[
            'telepon' => 'required|numeric|digits_between:11,12',            
            'alamat' => 'required|string|max:50',
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($validator->fails()){
            // return redirect()->back()->withErrors($validator)->withInput();
        }

        $user_id = $request->input('user_id');
        $db = User::findOrFail($user_id);

        $telepon = $request->input('telepon');
        $alamat = $request->input('alamat');
        $foto_profil = $request->file('foto_profil');
        
        if($foto_profil){
            if($db->foto_profil != NULL){
                Storage::delete($db->foto_profil);            
            }
    
            $gambar_name = $user_id . '_' . time() . '.' . $foto_profil->getClientOriginalExtension();
            // $gambar_name = $gambar->getClientOriginalName();
            $foto_profil->move('../public_html/assets/upload/profil/', $gambar_name);
            $db->foto_profil = $gambar_name;
        }
        else{
            $foto_profil = null;
        }

        $db->telepon = $telepon;
        $db->alamat = $alamat;

        $db->save();
        return redirect()->route('user-profil');
    }
}