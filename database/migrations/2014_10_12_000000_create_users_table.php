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

            $table->string('secret_key')->default(0);
            $table->string('unique_id')->default(0);
            $table->integer('kills')->default(0);
            $table->integer('deaths')->default(0);

            $table->integer('strength')->default(0);
            $table->integer('agility')->default(0);

            $table->integer('Ironflesh')->default(0);
            $table->integer('PowerStrike')->default(0);
            $table->integer('PowerThrow')->default(0);
            $table->integer('PowerDraw')->default(0);
            $table->integer('Reloading')->default(0);
            $table->integer('Shield')->default(0);
            $table->integer('Athletics')->default(0);
            $table->integer('Riding')->default(0);

            $table->integer('OneHanded')->default(20);
            $table->integer('TwoHanded')->default(0);
            $table->integer('Polearms')->default(0);
            $table->integer('Archery')->default(0);
            $table->integer('Throwing')->default(0);
            $table->integer('Crossbows')->default(0);
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
