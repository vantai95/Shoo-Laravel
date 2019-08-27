<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint2Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('products', 'product_packages');

        Schema::table('product_packages', function ($table) {
            $table->renameColumn('quantity', 'volume');
            $table->string('name')->unique();
        });

        Schema::table('how_it_works',function($table){
           $table->dropColumn(['is_for_homepage']);
        });

        Schema::create('shoe_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::table('orders', function ($table) {
            $table->dropColumn(['user_id', 'buyer_contact_id', 'expired_date']);
            $table->string('package_id');
            $table->string('email');
            $table->string('full_name')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('is_mine')->nullable();
            $table->string('indiegogo_order_code');
            $table->string('order_number');
            $table->string('type_id')->nullable();
            $table->string('style_id')->nullable();
            $table->string('toe_shape_id')->nullable();
            $table->string('leather_id')->nullable();
            $table->string('outsole_id')->nullable();
            $table->string('decorate')->nullable();
            $table->text('description')->nullable();
            $table->string('owner_id');
            $table->string('quantity');
            $table->string('shoe_size_id')->nullable();

        });

        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('banner_image')->nullable();
            $table->integer('is_published');
        });

        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_published')->default(false);
        });

        Schema::table('shoe_styles', function ($table){
           $table->bigInteger('price');
        });

        Schema::create('home_how_it_works',function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('image_url')->nullable();
            $table->text('description');
            $table->string('title');
            $table->boolean('is_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('product_packages', 'products');

        Schema::table('products', function ($table) {
            $table->renameColumn('volume', 'quantity');
            $table->dropColumn(['name']);
        });

        Schema::table('orders', function ($table) {
            $table->dropColumn(['package_id', 'email', 'full_name', 'phone', 'is_mine', 'indiegogo_order_code',
                'order_number', 'type_id', 'style_id', 'toe_shape_id', 'leather_id',
                'outsole_id', 'decorate', 'description', 'owner_id', 'quantity', 'shoe_size_id']);
            $table->integer('user_id')->nullable();
            $table->integer('buyer_contact_id')->nullable();
            $table->dateTime('expired_date')->nullable();
        });

        Schema::drop('shoe_sizes');
        Schema::drop('pages');
        Schema::drop('slider');
        Schema::drop('home_how_it_works');
        Schema::table('shoe_styles',function($table){
            $table->dropColumn(['price']);
        });
        Schema::table('how_it_works',function($table){
            $table->boolean('is_for_homepage');
        });
    }
}
