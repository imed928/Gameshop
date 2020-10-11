<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
	        $table->longText('description');
	        $table->string('stock');
	        $table->integer('price');
	        $table->longText('url_image');
	        $table->timestamps();
        });

        // table categorie non créer quand on migrate cette table(product)

        //Schema::table('product', function (Blueprint $table) {
            //$table->foreign('id_categorie')->references('id')->on('categorie');
        //});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
