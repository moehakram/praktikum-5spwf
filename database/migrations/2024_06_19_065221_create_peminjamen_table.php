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
            $table->unsignedBigInteger('inventaris_id');
            $table->string('nama_peminjam');
            $table->date('tgl_pinjam');
            $table->integer('jum_pinjam');
            $table->boolean('status')->default(1);
            $table->string('keterangan')->nullable();
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();
        
            // Foreign key constraints
            $table->foreign('inventaris_id')->on('inventaris')->references('id')->onDelete('cascade');
            $table->foreign('pegawai_id')->on('pegawai')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
