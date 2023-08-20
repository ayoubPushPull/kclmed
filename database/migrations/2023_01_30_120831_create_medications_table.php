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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('reference_no')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('photo_medicament')->default('medicament.png');
            $table->double('price')->nullable();
            $table->string('producing_company')->nullable();
            $table->string('prescription')->nullable();
            $table->string('type')->nullable();
            $table->string('forme')->nullable();
            $table->bigInteger('active')->default(0);
            $table->bigInteger('delete')->default(0);
            $table->bigInteger('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('medication_categories')->onDelete('cascade');
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
        Schema::dropIfExists('medications');
    }
};
