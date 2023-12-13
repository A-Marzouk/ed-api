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
        Schema::create('class_progress', function (Blueprint $table) {
            $table->id();

            $table->integer('average_score_improvement')->default(0);
            $table->integer('homework_completion_rate')->default(0);
            $table->integer('attendance_rate')->default(0);

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
        Schema::dropIfExists('class_progress');
    }
};
