<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprint10Migration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('shoe_styles', function (Blueprint $table) {         
            $table->string('main_name_en')->nullable()->change();        
            $table->string('description_en')->nullable()->change();        
            $table->string('sub_description_en')->nullable()->change();        
            $table->string('sub_name_en')->nullable()->change();
        });
        
        Schema::table('product_packages', function (Blueprint $table) {         
            $table->string('price')->nullable()->change();        
            $table->string('volume')->nullable()->change();        
            $table->string('description_en')->nullable()->change();        
            $table->string('available')->nullable()->change();      
            $table->string('name_en')->nullable()->change();
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
        Schema::table('shoe_styles',function($table){
            $table->string('main_name_en')->nullable(false)->change();
            $table->string('description_en')->nullable(false)->change();
            $table->string('sub_description_en')->nullable(false)->change();
            $table->string('sub_name_en')->nullable(false)->change();
        });
        
        Schema::table('product_packages', function (Blueprint $table) {         
            $table->string('price')->nullable(false)->change();        
            $table->string('volume')->nullable(false)->change();        
            $table->string('description_en')->nullable(false)->change();        
            $table->string('available')->nullable(false)->change(); 
            $table->string('name_en')->nullable(false)->change();
        });
    }
}
