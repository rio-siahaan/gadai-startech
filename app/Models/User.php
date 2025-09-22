<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nik', 'nama', 'email', 'password', 'role', 'telepon', 'foto_ktp', 'foto_swaktp', 'provinsi','kabupatenkota','alamat','cabang_id','jabatan','foto_profil', 'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loginCredential()
    {
        // Hubungkan dengan model LoginCredential
        return $this->hasOne(LoginCredential::class, 'nik', 'nik');
    }

    public function gadai(){
        return $this->hasMany(Gadai::class);
    }

    public function province(){
        return $this->hasOne('App\Models\IndonesiaProvince', 'id');
    }

    public function kabkota(){
        return $this->belongsTo('App\Models\IndonesiaCity', 'kabupatenkota');
    }

    public function city(){
        return $this->hasOne('App\Models\IndonesiaCity', 'id');
    }
     
    public function cabang()
    {
        return $this->belongsTo(Cabang::class,'cabang_id','id');
    }
}
