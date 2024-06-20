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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('inventaris_id');
            $table->string('nama_brg');
            $table->string('nama_peminjam');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('jum_pinjam');
            $table->string('status');
            $table->string('keterangan');
            $table->string('pegawai_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
