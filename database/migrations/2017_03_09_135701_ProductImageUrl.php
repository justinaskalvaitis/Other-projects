<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductImageUrl extends Migration
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
            $table->string('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {

        //pakeicia esamus stulpelius. Reiksme gali buti tik >0
            $table->dropColumn('image_url');
    });
    }
}
