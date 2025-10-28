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
        if (!Schema::hasTable('freelancers')) {
            Schema::create('freelancers', function (Blueprint $table) {
                $table->id('id_freelancer');
                $table->unsignedBigInteger('users_id');
                $table->foreign('users_id')->references('id_users')->on('users')->onDelete('cascade');
                $table->bigInteger('completed_tasks')->default(0);
                $table->bigInteger('ongoing_tasks')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
