<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint5Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shoe_styles',function($table){
            $table->renameColumn('name', 'main_name');
            $table->string('sub_name');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shoe_styles', function ($table) {
        $table->renameColumn('main_name', 'name');
        $table->dropColumn(['sub_name']);
    });


    }
}
