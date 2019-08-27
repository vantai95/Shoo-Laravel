<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint3Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flagship_styles', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('image_url')->nullable();
        });

        Schema::create('email_templates', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('subject');
            $table->text('content');
        });

        Schema::table('orders', function ($table) {
            $table->integer('flagship_style_id')->nullable();
        });

        Schema::create('product_feature_details', function ($table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->integer('product_feature')->nullable();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->text('content');
            $table->integer('owner');
            $table->integer('views')->default(0);
            $table->boolean('is_published')->default(false);
        });

        Schema::table('configurations', function (Blueprint $table) {
            $table->string('title')->unique();
            $table->boolean('is_published')->default(false);
        });

        Schema::create('shoe_styles_shoe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('shoe_style_id');
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
        Schema::dropIfExists('flagship_styles');
        Schema::dropIfExists('email_templates');
        Schema::table('orders', function ($table) {
            $table->dropColumn(['flagship_style_id']);
        });
        Schema::table('configurations', function ($table) {
            $table->dropColumn(['is_published']);
            $table->dropColumn(['title']);
        });
        Schema::dropIfExists('product_feature_details');
        Schema::dropIfExists('shoe_styles_shoe_categories');
    }
}
