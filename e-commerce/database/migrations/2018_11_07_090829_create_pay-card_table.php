<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay-card', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nb-card');
            $table->integer('crypt');
            $table->string('firstname');
            $table->string('lastname');
	    $table->string('expiration');
	    $table->integer('user-id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('pay-card', function (Blueprint $table) {
            $table->foreign('user-id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay-card');
    }
}
