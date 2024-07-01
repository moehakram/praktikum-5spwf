<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   
    public function up(): void
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('nra')->unique();
            $table->string('nama')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->string('phone_number')->nullable();
            $table->string('alamat')->nullable();
            $table->string('password')->nullable(false);
            $table->unsignedBigInteger('organisasi_id')->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurus');
    }
};
