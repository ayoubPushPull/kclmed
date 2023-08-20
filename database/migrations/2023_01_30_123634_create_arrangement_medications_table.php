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
        Schema::create('arrangement_medications', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->bigInteger('arrangement_id')->unsigned();
            $table->foreign('arrangement_id')->references('id')->on('arrangements')->onDelete('cascade');
            $table->bigInteger('medication_cabinet_id')->unsigned();
            $table->foreign('medication_cabinet_id')->references('id')->on('medication_cabinets')->onDelete('cascade');
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
        Schema::dropIfExists('arrangement_medications');
    }
};
