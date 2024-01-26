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
        Schema::create('t_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama_kelurahan');
            $table->string('nama_kecamatan');
            $table->enum('active', [0, 1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_kelurahan');
    }
};
