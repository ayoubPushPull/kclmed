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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('lname');
            $table->string('fname');
            $table->enum('gender', ['female', 'male'])->default('male');
            $table->date('date_birth')->nullable();
            $table->string('cin')->unique();
            $table->string('code_assur')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();
            $table->bigInteger('cabinet_id')->unsigned();
            $table->foreign('cabinet_id')->references('id')->on('doctor_offices')->onDelete('cascade');
            $table->bigInteger('type_assur_id')->unsigned()->nullable();
            $table->foreign('type_assur_id')->references('id')->on('Assurance_types')->onDelete('cascade');
            $table->bigInteger('status')->default(0);
            $table->bigInteger('active')->default(0);
            $table->bigInteger('delete')->default(0);
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
        Schema::dropIfExists('patients');
    }
};
