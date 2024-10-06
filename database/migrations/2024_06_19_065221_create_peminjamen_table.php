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
            $table->string('nama');
            $table->string('nama_barang');
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->string('keterangan')->nullable();
            $table->boolean('status_pengembalian')->default(false);
            $table->unsignedBigInteger('pengurus_id');
            $table->timestamps();
        
            // Foreign key constraints
            $table->foreign('inventaris_id')->on('inventaris')->references('id')->onDelete('cascade');
            $table->foreign('pengurus_id')->on('pengurus')->references('id')->onDelete('cascade');
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
