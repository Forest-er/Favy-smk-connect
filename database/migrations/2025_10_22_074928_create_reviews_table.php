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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('id_review');
            $table->foreignId('from_user_id')->references('id_users')->on('users')->cascadeOnDelete();
            $table->foreignId('to_user_id')->references('id_users')->on('users')->cascadeOnDelete();
            $table->foreignId('task_id')->nullable()->references('id_task')->on('tasks')->nullOnDelete();
            $table->tinyInteger('rating'); // 1..5
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
