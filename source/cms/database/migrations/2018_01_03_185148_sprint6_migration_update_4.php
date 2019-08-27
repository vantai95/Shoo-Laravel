<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint6MigrationUpdate4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shoe_types', function(Blueprint $table) {
            $table->longText('description_home')->nullable();
            $table->longText('description_shoe_types')->nullable();
        });

        Schema::table('shoe_styles', function(Blueprint $table) {
            $table->longText('extra')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shoe_types', function(Blueprint $table) {
            $table->dropColumn(['description_home', 'description_shoe_types']);
        });

        Schema::table('shoe_styles', function(Blueprint $table) {
            $table->dropColumn(['extra']);
        });
    }
}
