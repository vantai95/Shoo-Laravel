<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint7MigrationUpdate1 extends Migration
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
            $table->string('package_id')->nullable()->change();
            $table->string('indiegogo_order_code')->nullable()->change();
            $table->string('quantity')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->float('total_price', 8, 2)->change();
            $table->double('total', 8, 2);
            $table->double('total_discount', 8, 2)->nullable()->default(0);
            $table->double('total_tax', 8, 2)->nullable()->default(0);
            $table->double('shipping_fee', 8, 2)->nullable()->default(0);
            $table->integer('receiver_id')->nullable();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('order_id');
            $table->integer('type_id');
            $table->integer('style_id');
            $table->integer('shoe_size_id');
            $table->integer('quantity');
            $table->double('unit_price', 8, 2)->default(0);
            $table->double('price_custom_fit', 8, 2)->default(0);
            $table->double('total_price', 8, 2)->default(0);
            $table->integer('toe_shape_id')->nullable();
            $table->integer('leather_id')->nullable();
            $table->integer('outsole_id')->nullable();
            $table->integer('flagship_style_id')->nullable();
            $table->string('decorate')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('order_billings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('order_id');
            $table->string('phone_number')->nullable();
            $table->string('address');
            $table->integer('country_id');
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('zipcode');
            $table->text('note')->nullable();
        });

        Schema::create('order_shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('order_id');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->integer('country_id');
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('zipcode')->nullable();
            $table->text('note')->nullable();
        });

        Schema::create('user_shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->string('phone_number');
            $table->string('address');
            $table->integer('country_id');
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('zipcode')->nullable();
            $table->text('note')->nullable();
        });

        Schema::create('order_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('order_id');
            $table->integer('customer_id');
            $table->double('amount', 8, 2);
            $table->string('transaction_id');
            $table->integer('status')->default(1);
            $table->string('note')->nullable();
        });

        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('country_code');
            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('country_id');
            $table->string('name');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('state_id');
            $table->string('name');
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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('package_id')->nullable(false)->change();
            $table->string('indiegogo_order_code')->nullable(false)->change();
            $table->string('quantity')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->bigInteger('total_price')->change();
            $table->dropColumn(['total']);
            $table->dropColumn(['total_discount']);
            $table->dropColumn(['total_tax']);
            $table->dropColumn(['shipping_fee']);
            $table->dropColumn(['receiver_id']);
        });

        Schema::dropIfExists('order_items');
        Schema::dropIfExists('order_billings');
        Schema::dropIfExists('order_shippings');
        Schema::dropIfExists('user_shippings');
        Schema::dropIfExists('order_payments');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('states');
        Schema::dropIfExists('cities');        
    }
}
