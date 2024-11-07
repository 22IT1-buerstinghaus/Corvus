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
        Schema::create('customer_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('path');
            $table->string('name')->nullable();
            $table->string('street')->nullable();
            $table->string('house_nr')->nullable();
            $table->unsignedBigInteger('counter_nr')->nullable();
            $table->timestamp('installation_date')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_files');
    }
};
