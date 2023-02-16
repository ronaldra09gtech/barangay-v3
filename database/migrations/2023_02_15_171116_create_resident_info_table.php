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
        Schema::create('resident_info', function (Blueprint $table) {
            $table->id('resident_id');
            $table->string('controlNo')->nullable();
            $table->string('houseNo')->nullable();
            $table->string('houseNo')->nullable();
            $table->string('street')->nullable();
            $table->string('zone')->nullable();
            $table->string('branagay')->nullable();
            $table->date('birthday')->nullable();
            $table->bigInteger('age')->unsigned()->nullable();
            $table->string('gender')->nullable();
            $table->string('civilstatus')->nullable();
            $table->string('voterstatus')->nullable();
            $table->string('birth_of_place')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('PAG_IBIG')->nullable();
            $table->string('PHILHEALTH')->nullable();
            $table->string('SSS')->nullable();
            $table->string('TIN')->nullable();
            $table->string('email')->nullable();
            $table->string('spouse')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('area')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('date_registered')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_info');
    }
};