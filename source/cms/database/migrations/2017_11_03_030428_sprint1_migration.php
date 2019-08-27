<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Sprint1Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code');
            $table->string('name');
        });

        Schema::create('activity_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->integer('activity_type');
            $table->text('content');
        });

        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_en');
            $table->string('title_vi');
            $table->string('description_en');
            $table->string('description_vi');
            $table->boolean('is_shown')->default(true);
        });

        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('config_key');
            $table->text('config_value')->nullable();
        });

        Schema::create('buyer_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
        });

        Schema::create('news_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_en');
            $table->string('name_vi');
        });

        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('news_category_id');
            $table->text('title');
            $table->longText('content');
            $table->text('subtitle');
            $table->string('image_1')->nullable();
            $table->boolean('is_published')->default(false);
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->integer('buyer_contact_id');
            $table->bigInteger('total_price');
            $table->integer('status')->default(1);
            $table->dateTime('expired_date');
        });

        Schema::create('shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('price');
            $table->integer('quantity');
            $table->text('description');
            $table->boolean('available')->default(false);
            $table->integer('shoe_category_id');
        });

        Schema::create('product_feature', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_published')->default(false);
        });

        Schema::create('shoe_styles',function (Blueprint $table){
            $table->increments('id');
            $table->integer('shoe_types_id');
            $table->string('name');
            $table->text('description');
            $table->text('sub_description');
            $table->string('image_url')->nullable();
        });

        Schema::create('shoe_types', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('image_url')->nullable();
            $table->text('description');
        });


        Schema::create('shoe_types_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('shoe_types_id');
            $table->integer('shoe_category_id');

        });

        Schema::create('toe_shapes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->text('description');
            $table->string('picture')->nullable();
        });

        Schema::create('toe_shapes_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('toe_shape_id');
            $table->integer('shoe_category_id');
        });

        Schema::create('leather', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('color');
            $table->text('description');
            $table->string('picture')->nullable();
        });

        Schema::create('leather_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('leather_id');
            $table->integer('shoe_category_id');
        });

        Schema::create('how_it_works', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('is_for_homepage')->default(false);
        });

        Schema::create('outsole_types', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->text('description');
            $table->string('picture')->nullable();
        });

        Schema::create('outsole_types_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('outsole_type_id');
            $table->integer('shoe_category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
        Schema::drop('activity_histories');
        Schema::drop('notifications');
        Schema::drop('configurations');
        Schema::drop('buyer_contacts');
        Schema::drop('news_categories');
        Schema::drop('news');
        Schema::drop('orders');
        Schema::drop('shoe_categories');
        Schema::drop('products');
        Schema::drop('product_feature');
        Schema::drop('shoe_types');
        Schema::drop('shoe_styles');
        Schema::drop('shoe_types_shoe_categories');
        Schema::drop('toe_shapes');
        Schema::drop('toe_shapes_shoe_categories');
        Schema::drop('leather');
        Schema::drop('leather_shoe_categories');
        Schema::drop('how_it_works');
        Schema::drop('outsole_types');
        Schema::drop('outsole_types_shoe_categories');

    }
}
