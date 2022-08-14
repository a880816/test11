<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            // 商品id primaryKey && autoId
            $table->bigIncrements('pid');
            // 商品名稱
            $table->string('productName', 100)->index();
            //商品定價(使用台幣故不需decimal)
            $table->integer('productPrice')->index();
            // create_at/update_at
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
        //
    }
}
