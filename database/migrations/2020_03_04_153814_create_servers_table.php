<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('cur_players');
            $table->integer('max_players');
            $table->string('map');
            $table->string('faction_1');
            $table->string('faction_2');
            $table->integer('fog')->default(0);
            $table->integer('weather')->default(0);
            $table->string('ip')->nullable();
            $table->string('status')->default('Online');
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
        Schema::dropIfExists('servers');
    }
}
