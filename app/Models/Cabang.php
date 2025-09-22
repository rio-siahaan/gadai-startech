<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_cabang','kota_id'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}
