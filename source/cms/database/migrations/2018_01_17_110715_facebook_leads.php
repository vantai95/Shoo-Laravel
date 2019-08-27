<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacebookLeads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_leads', function (Blueprint $table) {
            $table->string('facebook_id');
            $table->dateTime('registered_date');
            $table->string('email');
            $table->string('full_name');
            $table->string('phone_number');
            $table->timestamps();
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook_leads');
    }
}
