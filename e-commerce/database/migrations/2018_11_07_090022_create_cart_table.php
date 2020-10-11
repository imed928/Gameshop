<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('users_id')->unsigned();
	        //$table->string('name_article');
	        //$table->integer('price')->unsigned();
            $table->integer('quantity')->nullable();
	        $table->integer('produit_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('cart', function (Blueprint $table) {
             $table->foreign('users_id')->references('id')->on('users');
             $table->foreign('produit_id')->references('id')->on('product');
             //$table->foreign('produit_id')->references('id')->on('product');
             //$table->foreign('name_article')->references('name')->on('product');
             //$table->foreign('price')->references('price')->on('product');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
