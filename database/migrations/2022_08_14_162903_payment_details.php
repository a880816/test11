<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            // 訂單編號 primaryKey
            $table->bigInteger('oid')->primary();
            // 訂單細節
            $table->json('orderInfo')->index();
            // 購買人姓名
            $table->string('custName', 100);
            // 購買人電話
            $table->string('custPhone', 50);
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
