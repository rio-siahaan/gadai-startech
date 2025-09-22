<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGadaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->text('kelengkapan');
            $table->string('serial_number');
            $table->text('deskripsi');
            $table->foreignId('user_id');
            $table->foreignId('admin_id');
            $table->integer('pinjaman');
            $table->float('bunga');
            $table->date('durasi');
            $table->string('kategori');
            $table->string('status');
            $table->boolean('is_done')->default(false);
        	$table->string('foto')->nullable();
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
        Schema::dropIfExists('gadais');
    }
}
