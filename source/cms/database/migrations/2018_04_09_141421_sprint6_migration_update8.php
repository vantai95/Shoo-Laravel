<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint6MigrationUpdate8 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('shoe_styles', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable();
        });

        Schema::table('shoe_types', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable();
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
        Schema::table('shoe_styles',function($table){
            $table->dropColumn(['slug']);
        });
        Schema::table('shoe_types',function($table){
            $table->dropColumn(['slug']);
        });
    }
}
