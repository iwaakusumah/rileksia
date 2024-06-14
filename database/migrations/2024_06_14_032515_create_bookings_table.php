<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('kota');
            $table->string('jenis_layanan');
            $table->string('tempat_layanan');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}