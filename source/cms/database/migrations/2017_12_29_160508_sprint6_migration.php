<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint6Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->boolean('is_banner')->default(false);
        });

//        Schema::table('pages', function (Blueprint $table) {
//            $table->string('title', 250);
//            $table->text('description');
//            $table->text('ratings');
//            $table->string('facebook', 250);
//            $table->string('youtube', 250);
//        });

        Schema::table('shoe_styles', function(Blueprint $table) {
            $table->bigInteger('discount_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->dropColumn(['is_banner']);
        });

//        Schema::table('pages', function (Blueprint $table) {
//            $table->dropColumn(['title', 'description', 'ratings', 'facebook', 'youtube']);
//        });

        Schema::table('shoe_styles', function(Blueprint $table) {
            $table->dropColumn(['discount_price']);
        });
    }
}
