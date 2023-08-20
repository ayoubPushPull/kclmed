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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('reference_no')->unique()->nullable();
            $table->string('name')->nullable();
            $table->double('amount')->nullable();
            $table->string('note')->nullable();
            $table->bigInteger('active')->default(0);
            $table->bigInteger('delete')->default(0);
            $table->bigInteger('cabinet_id')->unsigned();
            $table->foreign('cabinet_id')->references('id')->on('doctor_offices')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_categorie_expenses')->unsigned();
            $table->foreign('id_categorie_expenses')->references('id')->on('expense_categories')->onDelete('cascade');
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
        Schema::dropIfExists('expenses');
    }
};
