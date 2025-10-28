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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id('id_freelancer');
            $table->biginteger('users_id')->references('id_users')->on('users')->onDelete('cascade');
            $table->biginterger('completed_tasks')->default(0);
            $table->biginterger('ongoing_tasks')->default(0);
            $table->biginterger('saved_task')->references('id_task')->on('tasks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
