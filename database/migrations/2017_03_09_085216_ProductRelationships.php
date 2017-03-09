<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('products', function (Blueprint $table) {

            //pakeicia esamus stulpelius. Reiksme gali buti tik >0
            $table->integer('quantity')->unsigned()->change();

            //sukuria naujus stulpelius

            $table->integer('category_id')->unsigned()->nullable();;
            $table->integer('manufacturer_id')->unsigned()->nullable();

            // Foreign Key constraints susieja irasus tarpusavy

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
        });
    }



    public function down()
    {
        //
    }
}
