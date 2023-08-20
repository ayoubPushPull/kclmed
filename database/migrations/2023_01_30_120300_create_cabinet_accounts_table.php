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
        Schema::create('cabinet_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('account_number')->unique()->nullable();
            $table->string('account_name')->nullable();
            $table->double('initial_balance')->nullable();
            $table->double('total_balance')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('cabinet_accounts');
    }
};
