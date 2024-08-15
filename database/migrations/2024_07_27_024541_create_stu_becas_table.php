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
            $table->bigInteger('Student_id')->unsigned();
            $table->bigInteger('Beca_id')->unsigned();

            $table->foreign('Student_id')->references('id')->on('students')->onDelete("cascade");
            $table->foreign('Beca_id')->references('id')->on('students')->onDelete("cascade");

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
