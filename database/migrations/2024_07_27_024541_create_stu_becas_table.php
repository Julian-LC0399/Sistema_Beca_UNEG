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
        Schema::create('stu_becas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Student_id');
            $table->unsignedBigInteger('Beca_id');

            $table->foreignId('Student_id')->references('id')->on('students')->onDelete("cascade");
            $table->foreignId('Beca_id')->references('id')->on('becas')->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stu_becas');
    }
};
