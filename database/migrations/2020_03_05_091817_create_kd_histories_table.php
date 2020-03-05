<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKdHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd_histories', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned();;
            $table->float('kd', 8, 2);
            $table->timestamps();
        });

        Schema::table('user_items', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('user_items', function (Blueprint $table) {

            $table->foreign('item_id')->references('id')->on('items');
        });

        Schema::table('kd_histories', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kd_histories');
    }
}
