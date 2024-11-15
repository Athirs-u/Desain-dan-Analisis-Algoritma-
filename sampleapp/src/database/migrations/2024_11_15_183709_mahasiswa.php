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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->integer('student_id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('duration');
            $table->string('subject_name');
            $table->integer('subject_id');
            $table->string('room_name');
            $table->string('student_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin/dekan');
    }
};