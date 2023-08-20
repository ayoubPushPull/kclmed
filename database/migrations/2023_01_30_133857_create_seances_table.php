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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->integer('num_seance')->default(1);
            $table->string('acte_seance');
            $table->double('prix_total')->default(0);
            $table->boolean('is_pay')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('delete')->default(0);
            $table->bigInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->bigInteger('cabinet_id')->unsigned();
            $table->foreign('cabinet_id')->references('id')->on('doctor_offices')->onDelete('cascade');
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
        Schema::dropIfExists('seances');
    }
};
