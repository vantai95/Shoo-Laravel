<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint6MigrationUpdate6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('shoe_styles', function(Blueprint $table) {
            $table->text('images')->nullable();
        });
        Schema::table('shoe_sizes', function(Blueprint $table) {
            $table->integer('value')->nullable();
            $table->integer('type')->nullable();
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
        Schema::table('shoe_styles', function(Blueprint $table) {
            $table->dropColumn(['images']);
        });
        Schema::table('shoe_sizes', function(Blueprint $table) {
            $table->dropColumn(['value']);
            $table->dropColumn(['type']);
        });
    }
}
