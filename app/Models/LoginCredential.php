<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginCredential extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'password', 'role'];

    public function user()
    {
        // Hubungkan dengan model User
        return $this->belongsTo(User::class, 'nik', 'nik');
    }

    public function admin()
    {
        // Hubungkan dengan model Admin
        return $this->belongsTo(Admin::class, 'nik', 'nik');
    }
}
