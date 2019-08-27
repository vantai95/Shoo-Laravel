<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint4Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flagship_styles', function ($table) {
            $table->text('description');
        });

        Schema::table('orders', function ($table) {
            $table->text('shipping_address')->nullable();
        });

        Schema::table('shoe_styles', function ($table) {
            $table->timestamps();
        });

        Schema::table('product_feature', function ($table) {
            $table->integer('index')->unique()->nullable();
        });

        Schema::table('configurations', function ($table) {
            $table->dropColumn(['title']);
        });

        Schema::table('configurations', function ($table) {
            $table->string('title')->nullable();
        });

        Schema::table('shoe_types', function ($table) {
            $table->integer('index')->unique()->nullable();
        });

        Schema::table('how_it_works', function ($table) {
            $table->integer('index')->unique()->nullable();
        });
        
        Schema::table('pages', function ($table) {
            $table->dropColumn(['banner_image']);
            $table->string('page_name');
            $table->text('video')->nullable();
        });

        Schema::create('pages_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('page_id');
            $table->string('key');
            $table->text('value')->nullable();
            $table->boolean('available')->default(false);
        });

        Schema::create('pre_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('package_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flagship_styles', function ($table) {
            $table->dropColumn(['description']);
        });
        Schema::table('shoe_styles', function ($table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
        Schema::table('product_feature', function ($table) {
            $table->dropColumn(['index']);
        });
        Schema::table('orders', function ($table) {
            $table->dropColumn(['shipping_address']);
        });

        Schema::table('shoe_types', function ($table) {
            $table->dropColumn(['index']);
        });

        Schema::table('how_it_works', function ($table) {
            $table->dropColumn(['index']);
        });

        Schema::table('pages', function ($table) {
            $table->dropColumn(['video']);
            $table->dropColumn(['page_name']);
            $table->string('banner_image');
        });

        Schema::dropIfExists('pages_meta');
        Schema::dropIfExists('pre_orders');
    }
}
