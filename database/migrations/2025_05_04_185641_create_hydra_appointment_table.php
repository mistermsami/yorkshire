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
        Schema::create('hydra_appointment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->string('email');  
            $table->string('date');
            $table->string('time'); 
            $table->string('appointment_type');
            $table->integer('pirce')->default('0');
            $table->integer('paid')->default('0');
            $table->string('status')->nullable();
            $table->string('message')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hydra_appointment');
    }
};
