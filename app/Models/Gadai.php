<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadai extends Model
{
    use HasFactory;
    
    // protected $fillable = ['barang_id','user_id','pinjaman','bunga','Durasi','is_done'];

    protected $fillable = ['nama_barang','kelengkapan','serial_number','deskripsi','user_id','admin_id','pinjaman','bunga','durasi','kategori', 'status'
    ,'is_done', 'foto'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function admin(){
        return $this->belongsTo(User::class,'admin_id');
    }
}
