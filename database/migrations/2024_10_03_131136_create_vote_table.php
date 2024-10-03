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
        Schema::create('vote', function (Blueprint $table) {
            $table->id('vote_id');
            $table->timestamps();
            $table->unsignedBigInteger('owner_id_for_vote');
            $table->foreign('owner_id_for_vote')->references('owner_id')->on('owners')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('question_id_for_vote');
            $table->foreign('question_id_for_vote')->references('question_of_the_meeting_id')->on('question_of_the_meeting')->onDelete('cascade')->onUpdate('cascade');
            $table->text('answer')->comment('Ответ на вопрос собрания.')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
