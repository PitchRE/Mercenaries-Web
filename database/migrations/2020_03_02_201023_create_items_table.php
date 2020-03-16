<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('code_name');
            $table->bigInteger('game_id')->unsigned();
            $table->string('type');
            $table->string('name');
            $table->integer('head_armor')->nullable();
            $table->integer('body_armor')->nullable();
            $table->integer('leg_armor')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('speed_rating')->nullable();
            $table->integer('thrust_damage')->nullable();
            $table->string("thrust_damage_type")->nullable();
            $table->integer('swing_damage')->nullable();
            $table->string("swing_damage_type")->nullable();
            $table->integer("missile_speed")->nullable();
            $table->integer("horse_speed")->nullable();
            $table->integer("horse_maneuver")->nullable();
            $table->boolean("buyable")->nullable();
            $table->string("model_name")->nullable();
            $table->bigInteger('price');
            $table->text('image')->nullable();
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
        Schema::dropIfExists('items');
    }
}
