<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint6MigrationUpdate7 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('about_us_description', function (Blueprint $table) {
            $table->longText('description_vi')->nullable();
            $table->longText('sub_description_vi')->nullable();            
            $table->renameColumn('description', 'description_en');
            $table->renameColumn('sub_description', 'sub_description_en');
        });

        Schema::table('email_templates', function (Blueprint $table) {
            $table->string('subject_vi')->nullable();
            $table->text('content_vi')->nullable();            
            $table->renameColumn('subject', 'subject_en');
            $table->renameColumn('content', 'content_en');
        });

        Schema::table('home_how_it_works', function (Blueprint $table) {
            $table->string('title_vi')->nullable();
            $table->text('description_vi')->nullable();        
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('description', 'description_en');
        });

        Schema::table('how_it_works', function (Blueprint $table) {
            $table->string('title_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('description', 'description_en');
        });

        Schema::table('leather', function (Blueprint $table) {
            $table->string('name_vi')->nullable();
            $table->string('color_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('name', 'name_en');
            $table->renameColumn('color', 'color_en');
            $table->renameColumn('description', 'description_en');
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->string('page_name_vi')->nullable();
            $table->renameColumn('page_name', 'page_name_en');
        });
        
        Schema::table('pages_meta', function (Blueprint $table) {
            $table->longText('value_vi')->nullable();
            $table->renameColumn('value', 'value_en');
        });

        Schema::table('product_feature', function (Blueprint $table) {
            $table->string('title_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('description', 'description_en');
        });

        Schema::table('product_feature_details', function (Blueprint $table) {
            $table->string('title_vi')->nullable();
            $table->longText('content_vi')->nullable();
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('content', 'content_en');
        });


        Schema::table('product_packages', function (Blueprint $table) {
            $table->string('name_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('name', 'name_en');
            $table->renameColumn('description', 'description_en');
        });

        Schema::table('shoe_categories', function (Blueprint $table) {
            $table->string('name_vi')->nullable();
            $table->renameColumn('name', 'name_en');
        });

        Schema::table('shoe_styles', function (Blueprint $table) {
            $table->string('main_name_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->text('sub_description_vi')->nullable();
            $table->string('sub_name_vi')->nullable();
            $table->longText('extra_vi')->nullable();
            $table->renameColumn('main_name', 'main_name_en');
            $table->renameColumn('description', 'description_en');
            $table->renameColumn('sub_description', 'sub_description_en');
            $table->renameColumn('sub_name', 'sub_name_en');
            $table->renameColumn('extra', 'extra_en');
        });

        Schema::table('shoe_types', function (Blueprint $table) {
            $table->string('name_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->longText('description_home_vi')->nullable();
            $table->longText('description_shoe_types_vi')->nullable();
            $table->renameColumn('name', 'name_en');
            $table->renameColumn('description', 'description_en');
            $table->renameColumn('description_home', 'description_home_en');
            $table->renameColumn('description_shoe_types', 'description_shoe_types_en');
        });

        Schema::table('slider', function (Blueprint $table) {
            $table->string('title_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('description', 'description_en');
        });

        Schema::table('toe_shapes', function (Blueprint $table) {
            $table->string('name_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('name', 'name_en');
            $table->renameColumn('description', 'description_en');
        });
        
        Schema::table('configurations', function (Blueprint $table) {
            $table->string('title_vi')->nullable();
            $table->renameColumn('title', 'title_en');
        });

        Schema::table('outsole_types', function (Blueprint $table) {
            $table->string('name_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('name', 'name_en');
            $table->renameColumn('description', 'description_en');
        });

        Schema::table('flagship_styles', function (Blueprint $table) {
            $table->string('name_vi')->nullable();
            $table->text('description_vi')->nullable();
            $table->renameColumn('name', 'name_en');
            $table->renameColumn('description', 'description_en');
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
        Schema::table('about_us_description',function($table){
            $table->dropColumn(['description_vi']);
            $table->dropColumn(['sub_description_vi']);      
            $table->renameColumn('description_en', 'description');
            $table->renameColumn('sub_description_en', 'sub_description');
        });

        Schema::table('email_templates',function($table){
            $table->dropColumn(['subject_vi']);
            $table->dropColumn(['content_vi']);          
            $table->renameColumn('subject_en', 'subject');
            $table->renameColumn('content_en', 'content');
        });

        Schema::table('home_how_it_works',function($table){
            $table->dropColumn(['title_vi']);
            $table->dropColumn(['description_vi']);      
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('description_en', 'description');
        });

        Schema::table('how_it_works',function($table){
            $table->dropColumn(['title_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('description_en', 'description');
        });

        Schema::table('leather',function($table){
            $table->dropColumn(['name_vi']);
            $table->dropColumn(['color_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('name_en', 'name');
            $table->renameColumn('color_en', 'color');
            $table->renameColumn('description_en', 'description');
        });

        Schema::table('pages',function($table){
            $table->dropColumn(['page_name_vi']);
            $table->renameColumn('page_name_en', 'page_name');
        });

        Schema::table('pages_meta',function($table){
            $table->dropColumn(['value_vi']);
            $table->renameColumn('value_en', 'value');
        });

        Schema::table('product_feature',function($table){
            $table->dropColumn(['title_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('description_en', 'description');
        });

        Schema::table('product_feature_details',function($table){
            $table->dropColumn(['title_vi']);
            $table->dropColumn(['content_vi']);
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('content_en', 'content');
        });

        Schema::table('product_packages',function($table){
            $table->dropColumn(['name_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('name_en', 'name');
            $table->renameColumn('description_en', 'description');
        });

        Schema::table('shoe_categories',function($table){
            $table->dropColumn(['name_vi']);
            $table->renameColumn('name_en', 'name');
        });

        Schema::table('shoe_styles',function($table){
            $table->dropColumn(['main_name_vi']);
            $table->dropColumn(['description_vi']);
            $table->dropColumn(['sub_description_vi']);
            $table->dropColumn(['sub_name_vi']);
            $table->dropColumn(['extra_vi']);
            $table->renameColumn('main_name_en', 'main_name');
            $table->renameColumn('description_en', 'description');
            $table->renameColumn('sub_description_en', 'sub_description');
            $table->renameColumn('sub_name_en', 'sub_name');
            $table->renameColumn('extra_en', 'extra');
        });

        Schema::table('shoe_types',function($table){
            $table->dropColumn(['name_vi']);
            $table->dropColumn(['description_vi']);
            $table->dropColumn(['description_home_vi']);
            $table->dropColumn(['description_shoe_types_vi']);
            $table->renameColumn('name_en', 'name');
            $table->renameColumn('description_en', 'description');
            $table->renameColumn('description_home_en', 'description_home');
            $table->renameColumn('description_shoe_types_en', 'description_shoe_types');
        });

        Schema::table('slider',function($table){
            $table->dropColumn(['title_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('description_en', 'description');
        });

        Schema::table('toe_shapes',function($table){
            $table->dropColumn(['name_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('name_en', 'name');
            $table->renameColumn('description_en', 'description');
        });

        
        Schema::table('configurations', function (Blueprint $table) {
            $table->dropColumn(['title_vi']);
            $table->renameColumn('title_en', 'title');
        });

        Schema::table('outsole_types',function($table){
            $table->dropColumn(['name_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('name_en', 'name');
            $table->renameColumn('description_en', 'description');
        });

        Schema::table('flagship_styles',function($table){
            $table->dropColumn(['name_vi']);
            $table->dropColumn(['description_vi']);
            $table->renameColumn('name_en', 'name');
            $table->renameColumn('description_en', 'description');
        });


    }
}
