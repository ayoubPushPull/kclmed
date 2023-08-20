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
        Schema::create('appointment_cabinets', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->dateTime('datetime');
            $table->date('date');
            $table->time('time');
            $table->string('patient_cin')->nullable();
            $table->bigInteger('active')->default(0);
            $table->bigInteger('delete')->default(0);
            $table->bigInteger('status')->default(0);
            $table->bigInteger('terminer')->default(0);
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
        Schema::dropIfExists('appointment_cabinets');
    }
};
