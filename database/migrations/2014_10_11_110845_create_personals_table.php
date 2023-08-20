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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('lname');
            $table->string('fname');
            $table->enum('gender', ['female', 'male'])->default('male');
            $table->date('date_birth')->nullable();
            $table->string('cin')->unique();
            $table->string('phone_personel')->unique()->nullable();
            $table->string('email_personel')->unique()->nullable();
            $table->string('state')->nullable();
            $table->string('code_doctor')->unique()->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();
            $table->longText('facebook')->nullable();
            $table->longText('instagram')->nullable();
            $table->longText('linkedin')->nullable();
            $table->longText('twitter')->nullable();
            $table->date('date_embauche')->nullable();
            $table->double('salaire')->nullable();
            $table->bigInteger('has_account')->default(0);
            $table->bigInteger('active')->default(0);
            $table->bigInteger('delete')->default(0);
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
        Schema::dropIfExists('personals');
    }
};
