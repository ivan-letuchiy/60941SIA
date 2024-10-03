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
        Schema::create('question_of_the_meeting', function (Blueprint $table) {
            $table->id('question_of_the_meeting_id');
            $table->timestamps();
            $table->unsignedBigInteger('meeting_id_for_question');
            $table->foreign('meeting_id_for_question')->references('meeting_id')->on('meetings')->onDelete('cascade')->onUpdate('cascade');
            $table->text('question')->nullable()->comment('Вопрос собрания.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_of_the_meeting');
    }
};
