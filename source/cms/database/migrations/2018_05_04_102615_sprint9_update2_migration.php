<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint9Update2Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('orders', function (Blueprint $table) {         
            $table->string('currency_code')->nullable();
            $table->double('exchange_rate', 8, 2)->nullable()->default(0);
        });

        Schema::table('order_payments', function (Blueprint $table) {         
            $table->string('currency_code')->nullable();
            $table->double('exchange_rate', 8, 2)->nullable()->default(0);
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
        Schema::table('orders',function($table){
            $table->dropColumn(['currency_code']);
            $table->dropColumn(['exchange_rate']);
        });
        Schema::table('order_payments',function($table){
            $table->dropColumn(['currency_code']);
            $table->dropColumn(['exchange_rate']);
        });
    }
}
