<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaCity extends Model
{
    use HasFactory;

    protected $table = 'indonesia_cities';
    protected $fillable = ['name'];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
