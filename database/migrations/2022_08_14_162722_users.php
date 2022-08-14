<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // 使用者id primaryKey & autoId
            $table->bigIncrements('user_id');
            // 使用者姓名
            $table->string('username', 100)->index();
            // 連絡電話
            $table->string('phone', 50)->index();
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
