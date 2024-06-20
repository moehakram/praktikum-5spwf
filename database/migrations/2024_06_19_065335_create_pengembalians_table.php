<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('inventaris_id');
            $table->string('nama_brg');
            $table->string('nama_peminjam');
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            $table->string('jum_kembali');
            $table->string('status');
            $table->string('keterangan');
            $table->string('pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
