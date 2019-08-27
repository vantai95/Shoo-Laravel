<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Measurements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('height')->nullable();
            $table->string('height_unit')->nullable();
            $table->string('weight')->nullable();
            $table->string('weight_unit')->nullable();
            $table->string('race')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('left_foot_length')->nullable();
            $table->string('left_toes_girth')->nullable();
            $table->string('left_ball_girth')->nullable();
            $table->string('left_ball_width')->nullable();
            $table->string('left_instep_height')->nullable();
            $table->string('right_foot_length')->nullable();
            $table->string('right_toes_girth')->nullable();
            $table->string('right_ball_girth')->nullable();
            $table->string('right_ball_width')->nullable();
            $table->string('right_instep_height')->nullable();
            $table->string('code')->nullable();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->boolean('measurement_id')->nullable();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->boolean('email_verified')->default(false);
            $table->dateTime('email_verify_sent_at')->default(null);
        });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurements');

        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['measurement_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['email_verified']);
            $table->dropColumn(['email_verify_sent_at']);
        });
    }
}
