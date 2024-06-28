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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable(false);
            $table->string('kondisi')->nullable(false);
            $table->string('keterangan')->nullable();
            $table->integer('stok')->nullable();
            $table->string('jenis')->nullable(false);
            $table->string('ruang')->nullable(false);
            $table->boolean('status')->default(0);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
