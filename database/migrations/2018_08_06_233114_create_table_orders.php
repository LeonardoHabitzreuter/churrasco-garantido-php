<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Tables::$orders, function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('status');
            $table->integer('user_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->timestamps();
        });

        Schema::table(Tables::$orders, function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on(Tables::$users);
            $table->foreign('company_id')->references('id')->on(Tables::$companies);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Tables::$orders);
    }
}
