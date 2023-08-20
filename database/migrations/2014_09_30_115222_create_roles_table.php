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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name',50);
            $table->string('description',100)->nullable();
            $table->bigInteger('isActive')->default(0);
            $table->bigInteger('delete')->default(0);
          //  $table->bigInteger('cabinet_id')->unsigned()->nullable();
           // $table->foreign('cabinet_id')->references('id')->on('doctor_offices')->onDelete('cascade');
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
        Schema::dropIfExists('roles');
    }
};
