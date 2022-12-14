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
            $table->bigInteger('payment_id')->primary();
            // 購買人id
            $table->bigInteger('user_id')->index();
            // 訂單細節
            $table->json('orderInfo')->index();
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
