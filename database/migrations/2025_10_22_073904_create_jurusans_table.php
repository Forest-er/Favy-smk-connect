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
        Schema::create('jurusans', function (Blueprint $table) {
            $table->engine='innoDB';
            $table->id('id_jurusan');
            $table->string('nama_jurusan', 100);
            $table->text('deskripsi')->nullable();
            $table->string('deskripsi_1', 50)->nullable();
            $table->string('deskripsi_2', 50)->nullable();
            $table->string('deskripsi_3', 50)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};
