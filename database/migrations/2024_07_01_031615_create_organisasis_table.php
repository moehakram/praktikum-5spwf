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
        Schema::create('organisasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::table('pengurus', function (Blueprint $table) {
            $table->foreign('organisasi_id')->on('organisasi')->references('id')->onDelete('cascade');
        });

        Schema::table('inventaris', function (Blueprint $table) {
            $table->foreign('organisasi_id')->on('organisasi')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasi');
    }
};
