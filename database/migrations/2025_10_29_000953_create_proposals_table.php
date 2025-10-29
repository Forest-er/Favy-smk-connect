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
        Schema::create('proposals', function (Blueprint $table) {
                $table->id('id_proposal');
                $table->foreignId('task_id')->constrained('tasks', 'id_tasks')->onDelete('cascade');
                $table->foreignId('worker_id')->constrained('users', 'id_users')->onDelete('cascade');
                $table->string('nama');
                $table->string('email');
                $table->text('deskripsi');
                $table->string('cv_link');
                $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
