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
        Schema::create('owners', function (Blueprint $table) {
            $table->id('owner_id');
            $table->timestamps();
            $table->string('full_name', 50)->nullable()->comment('Фамилия Имя Отчество');
            $table->unsignedBigInteger('flat_id_for_owners');
            $table->foreign('flat_id_for_owners')->references('flat_id')->on('flats')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('ownership_interest', 5, 2)->nullable()->comment('Доля в праве.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
