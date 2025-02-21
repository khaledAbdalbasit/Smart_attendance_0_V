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
        Schema::create('attendances', function (Blueprint $table) {
            $table->foreignId('student_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('course_id');
            $table->foreign('course_id')->references('course_id')->on('courses')->cascadeOnDelete();
            $table->string('day');
            $table->unsignedBigInteger('period_id');
            $table->foreign(['day', 'period_id'])
                ->references(['day', 'period_id'])
                ->on('schedules')
                ->cascadeOnDelete();
            $table->string('location_name');
            $table->foreign('location_name')->references('location_name')->on('locations')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
