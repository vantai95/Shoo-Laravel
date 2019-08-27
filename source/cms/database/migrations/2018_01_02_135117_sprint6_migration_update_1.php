<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint6MigrationUpdate1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `pages_meta` CHANGE `value` `value` LONGTEXT;');
        DB::statement('ALTER TABLE `about_us_description` CHANGE `description` `description` LONGTEXT;');
        DB::statement('ALTER TABLE `about_us_description` CHANGE `sub_description` `sub_description` LONGTEXT;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // no need to downgrade
//        DB::statement('ALTER TABLE `pages_meta` CHANGE `value` `value` LONGTEXT;');
//        DB::statement('ALTER TABLE `about_us_description` CHANGE `description` `description` LONGTEXT;');
//        DB::statement('ALTER TABLE `about_us_description` CHANGE `sub_description` `sub_description` LONGTEXT;');
    }
}
