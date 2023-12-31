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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name',50);
            $table->string('phone',14);
            $table->string('email',50);
            $table->string('time',50);
            $table->string('date',50);
            $table->boolean('status')->default(false);
            $table->boolean('delete')->default(false);
            $table->boolean('cancel')->default(false);
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
        Schema::dropIfExists('appointments');
    }
};
