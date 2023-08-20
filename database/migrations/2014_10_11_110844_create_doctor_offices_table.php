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
        Schema::create('doctor_offices', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name_cabinet',50)->nullable();
            $table->string('email_cabinet',50)->unique();
            $table->string('phone_cabinet',14)->nullable();
            $table->string('address_cabinet')->nullable();
            $table->string('logo_cabinet')->default('cabinet.png');
            $table->string('theme_cabinet')->default('theme-cyan');
            $table->integer('rdv_min')->default(2);
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('cabinet_types')->onDelete('cascade');
            $table->bigInteger('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->bigInteger('status')->default(0);
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
        Schema::dropIfExists('doctor_offices');
    }
};
