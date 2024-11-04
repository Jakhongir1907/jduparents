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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->string('group')->nullable();
            $table->string('teacher')->nullable();
            $table->string('studentId')->nullable();
            $table->string('studentName')->nullable();
            $table->bigInteger('lessonCount')->default(0);
            $table->bigInteger('late')->default(0);
            $table->bigInteger('absence')->default(0);
            $table->bigInteger('unexcused')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
