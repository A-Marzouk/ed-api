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
        Schema::create('class_student_enrollments', function (Blueprint $table) {
            $table->id();

            $table->dateTime('joined_at')->nullable();

            // Foreign ID Student
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            // Foreign ID Education Class
            $table->unsignedBigInteger('education_class_id');
            $table->foreign('education_class_id')->references('id')->on('education_classes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_student_enrollments');
    }
};
