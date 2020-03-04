<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->integer('exp')->default(0);
            $table->integer('exp_next_level')->default(50);
            $table->integer('level')->default(1);
            $table->string('secret_key')->default(0);
            $table->string('unique_id')->default(0);
            $table->integer('kills')->default(0);
            $table->integer('deaths')->default(0);
            $table->bigInteger('gold')->default(200);

            $table->integer('strength')->default(0);
            $table->integer('agility')->default(0);

            $table->integer('Ironflesh')->default(0);
            $table->integer('PowerStrike')->default(0);
            $table->integer('PowerThrow')->default(0);
            $table->integer('PowerDraw')->default(0);
            $table->integer('Shooting_from_Horseback')->default(0);
            $table->integer('Shield')->default(0);
            $table->integer('Athletics')->default(0);
            $table->integer('Riding')->default(0);

            $table->integer('OneHanded')->default(20);
            $table->integer('TwoHanded')->default(0);
            $table->integer('Polearms')->default(0);
            $table->integer('Archery')->default(0);
            $table->integer('Throwing')->default(0);
            $table->integer('Firearms')->default(0);

            $table->integer('head')->nullable();
            $table->integer('body')->nullable();
            $table->integer('gloves')->nullable();
            $table->integer('boots')->nullable();
            $table->integer('weapon_1')->nullable();
            $table->integer('weapon_2')->nullable();
            $table->integer('weapon_3')->nullable();
            $table->integer('weapon_4')->nullable();

            $table->integer('horse')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
