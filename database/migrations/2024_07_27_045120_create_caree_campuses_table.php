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
        Schema::create('caree_campuses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Career_id')->unsigned();
            $table->bigInteger('Campus_id')->unsigned();

            $table->foreign('Career_id')->references('id')->on('careers')->onDelete("cascade");
            $table->foreign('Campus_id')->references('id')->on('campuses')->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caree_campuses');
    }
};
