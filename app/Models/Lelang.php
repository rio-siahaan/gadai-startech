<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $fillable = ['gadai_id','deadline','harga_awal','is_done'];
    
    public function bid(){
        return $this->hasMany(Bid::class);
    }

    public function gadai(){
        return $this->belongsTo(Gadai::class,'gadai_id') ;
    }
}