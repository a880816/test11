<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // 商品id primaryKey
            $table->bigInteger('pid')->primary();
            // 商品尺寸 1/2/3 對應 小中大
            $table->string('size', 50)->index();
            // 商品顏色
            $table->string('color', 100)->index();
            // 庫存數量
            $table->integer('amount');
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
