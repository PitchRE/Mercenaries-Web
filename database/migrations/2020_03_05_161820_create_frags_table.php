<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFragsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('killer_id')->unsigned();
            $table->bigInteger('death_id')->unsigned();
            $table->bigInteger('weapon_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('frags', function (Blueprint $table) {

            $table->foreign('killer_id')->references('id')->on('users');
            $table->foreign('death_id')->references('id')->on('users');
            $table->foreign('weapon_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frags');
    }
}
