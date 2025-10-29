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
        Schema::create('liked_tasks', function (Blueprint $table) {
            $table->id('id_liked_tasks');
            $table->bigInteger('user_id');
            $table->bigInteger('task_id');
            $table->timestamps();
            $table->foreign('task_id')->references('id_task')->on('tasks')->onDelete('cascade');
            $table->foreign('user_id')->references('id_users')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liked_tasks');
    }
};
