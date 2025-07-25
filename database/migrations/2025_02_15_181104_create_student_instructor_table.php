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
        Schema::create('student_instructor', function (Blueprint $table) {
            $table->foreignId('student_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('instructor_id')->references('id')->on('instructors')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_instructor');
    }
};
