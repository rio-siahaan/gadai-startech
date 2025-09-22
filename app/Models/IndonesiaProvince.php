<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaProvince extends Model
{
    use HasFactory;

    protected $table = 'indonesia_provinces';
    protected $fillable = ['name'];
    public function province(){
        return $this->hasOne(User::class, 'provinsi');
    }

}
