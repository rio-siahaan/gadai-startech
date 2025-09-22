<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('telepon');
            $table->string('email')->unique();
            $table->string('provinsi')->nullable();
            $table->string('kabupatenkota')->nullable();
            $table->string('alamat')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_swaktp')->nullable();
            $table->string('foto_profil')->nullable();
            $table->string('cabang_id')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
