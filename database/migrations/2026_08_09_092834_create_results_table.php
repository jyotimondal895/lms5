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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
           $table->string('exam_name');
           $table->string('student_id');

          $table->integer('marks_obtained');
          $table->integer('total_marks');

            $table->string('grade')->nullable();
            $table->string('status')->nullable();

             $table->integer('semester');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
