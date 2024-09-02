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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->text('youtube_video')->nullable();
            $table->string('image');
            $table->string('project_title');
            $table->string('employee_title');
            $table->string('award_title');
            $table->string('option_title');
            $table->integer('project_count');
            $table->integer('employee_count');
            $table->integer('award_count');
            $table->integer('option_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
