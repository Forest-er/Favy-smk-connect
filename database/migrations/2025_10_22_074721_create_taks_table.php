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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('id_task');
            $table->foreignId('users_id')->references('id_users')->on('users')->cascadeOnDelete();
            $table->string('judul');
            $table->string('foto')->nullable();
            $table->text('deskripsi')->nullable();
            $table->foreignId('jurusan_id')->references('id_jurusan')->on('jurusans')->cascadeOnDelete();
            $table->date('deadline')->nullable();
            $table->string('waktu_estimasi', 50)->nullable();
            $table->enum('status', ['open','in_progress','done','cancelled'])->default('open');
            $table->decimal('budget', 12, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taks');
    }
};
