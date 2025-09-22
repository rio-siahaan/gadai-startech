<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = ['harga_bid','lelang_id','user_id'];
    
    // protected $fillable = ['harga_bid','lelang_id','user_id','tanggal_bid'];

    public static function getMaxValueByCategory($lelangId)
    {
        // Coba ambil nilai maksimum dari tabel bid
    $maxValue = static::where('lelang_id', $lelangId)->max('harga_bid');

    // Jika nilai maksimum dari tabel bid tidak ada, ambil nilai maksimum dari tabel lain (misalnya, tabel lelangs)
    if ($maxValue === null) {
        $lelang = Lelang::where('id', $lelangId)->first();

        if($lelang){
            $maxValue = $lelang->harga_awal;
        }
    }

    return $maxValue !== null ? $maxValue : 0; // Mengembalikan 0 jika $maxValue null
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function lelang(){
        return $this->belongsTo(Lelang::class, 'lelang_id');
    }
}
