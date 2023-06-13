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
        Schema::create('course__apps', function (Blueprint $table) {
            $table->id();
            $table->string('couApp_attendance')->nullable();
            $table->string('couApp_receipt')->nullable();
            $table->string('couApp_approveStatus')->nullable();
            $table->date('couApp_approveDate')->nullable();
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course__apps');
    }
};
