<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint5MigrationUpdate1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
        });

        Schema::create('about_us_description', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('description');
            $table->text('sub_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('about_us');
        Schema::drop('about_us_description');
    }
}
