<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Bid;
use App\Models\Gadai;
use App\Models\Lelang;
use App\Models\Cabang;
use App\Models\Kota;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '71710512120041',
            'nama' => 'Kelompok 5',
            'telepon' => '082123042087',
            'email' => 'kelompok5@gmail.com',
            'provinsi' => '11',
            'kabupatenkota' => '1',
            'alamat' => 'Jalan Otista',
            'foto_ktp' => null,
            'foto_swaktp' => null,
            'foto_profil' => null,
            'cabang_id' => '1',
            'jabatan' => 'Pegawai',
            'password' => Hash::make('1234'),
            'status' => 'verified',
            'role' => 'admin',
        ]);

        Kota::insert([ 
            [
                'nama_kota' => 'Solo'
            ],
            [
                'nama_kota' => 'Semarang'
            ],
            [
                'nama_kota' => 'Yogyakarta'
            ],
        ]);

        Cabang::insert([
            [
                'nama_cabang' => 'Cabang Jebres',
                'kota_id' => '1',
            ],
            [
                'nama_cabang' => 'Cabang Gading',
                'kota_id' => '1'
            ],
            [
                'nama_cabang' => 'Cabang Pabelan',
                'kota_id' => '1',
            ],
            [
                'nama_cabang' => 'Cabang Nusukan',
                'kota_id' => '1',
            ],
            [
                'nama_cabang' => 'Cabang Majaphit',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Banyumanik',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Mrican',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Mijen',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Tendean',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Wolter',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Sampangan',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Mangkang',
                'kota_id' => '2',
            ],
            [
                'nama_cabang' => 'Cabang Godean',
                'kota_id' => '3',
            ],
            [
                'nama_cabang' => 'Cabang Seturan',
                'kota_id' => '3',
            ],
            [
                'nama_cabang' => 'Cabang Tajem',
                'kota_id' => '3',
            ],
            [
                'nama_cabang' => 'Cabang Jakal',
                'kota_id' => '3',
            ],
        ]);
    }
}
