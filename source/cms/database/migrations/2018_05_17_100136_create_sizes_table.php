<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('value')->nullable();
            $table->integer('type')->nullable();
        });
        Schema::table('user_additions', function ($table) {
            $table->renameColumn('shoe_size_id', 'size_id');
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
        Schema::dropIfExists('sizes');
        Schema::table('user_additions', function ($table) {
            $table->renameColumn('size_id', 'shoe_size_id');
        });
    }
}
