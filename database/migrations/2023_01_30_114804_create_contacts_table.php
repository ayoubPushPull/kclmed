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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('nameContact')->nullable();
            $table->text('subjectContact')->nullable();
            $table->string('emailContact')->nullable();
            $table->string('phoneContact')->nullable();
            $table->longText('message')->nullable();
            $table->bigInteger('archive')->nullable()->default(0);
            $table->bigInteger('trash')->nullable()->default(0);
            $table->bigInteger('read')->nullable()->default(0);
            $table->bigInteger('delete')->nullable()->default(0);
            $table->bigInteger('start')->nullable()->default(0);
            $table->bigInteger('permenant')->nullable()->default(0);
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
        Schema::dropIfExists('contacts');
    }
};
