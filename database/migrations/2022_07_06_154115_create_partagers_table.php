<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partagers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proprio_id');
            $table->foreign('proprio_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('beneficiaire_id');
            $table->foreign('beneficiaire_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('donnee_id');
            $table->foreign('donnee_id')->references('id')->on('donnees')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partagers');
    }
};
